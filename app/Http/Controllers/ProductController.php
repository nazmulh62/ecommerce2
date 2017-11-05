<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $publushedCategories = Category::where('publication_status','1')->get();
        $publushedBrands = Brand::where('publication_status','1')->get();

        return view('admin.product.add-product',[
            'publushedCategories'=>$publushedCategories,
            'publushedBrands'=>$publushedBrands
        ]);
    }
    public function saveProductInfo(Request $request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product_images/';
        $imageUrl = $directory.$imageName;
        ///$productImage->move($directory, $imageName);
        Image::make($productImage)->resize(140, 140)->save($directory.$imageName);
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_code = $request->product_code;
        $product->product_description = $request->product_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
        return redirect('/product/add/')->with('message','Product Info Save Successfully');

    }

//    public function saveBasicProductInfo($request)
//{
//    $product = new Product();
//    $product->category_id = $request->category_id;
//    $product->brand_id = $request->brand_id;
//    $product->product_name = $request->product_name;
//    $product->product_price = $request->product_price;
//    $product->product_quantity = $request->product_quantity;
//    $product->product_code = $request->product_code;
//    $product->product_description = $request->product_description;
//    $product->product_image = $this->saveProductImage($request);
//    $product->publication_status = $request->publication_status;
//    $product->save();
//}
//    public function saveProductImage($request){
//        $productImage = $request->file('product_image');
//        $imageName = $productImage->getClientOriginalName();
//        $directory = 'product_images/';
//        $imageUrl = $directory.$imageName;
        //$productImage->move($directory, $imageName);
//        Image::make($productImage)->resize(300, 200)->save($directory.$imageName);
//        return $imageUrl;
//
//    }


    public function manageProduct(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
			->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.id', 'products.product_name', 'products.product_price', 'products.publication_status', 'categories.category_name','brands.brand_name')
            ->get();
        return view('admin.product.manage-product',['products'=>$products]);

    }
    public function viewProductDetailsInfo($id){
        $productById = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')

            ->select('products.*', 'categories.category_name','brands.brand_name')
            ->where('products.id', $id)
            ->first();
        return view('admin.product.view-product',['productById'=>$productById]);

    }
    public function unpublishedProductInfo($id){

        $productById = Product::find($id);
        $productById->publication_status = 0;
        $productById->save();
        return redirect('/product/manage-product');

    }
    public function publishedProductInfo($id){
        $productById = Product::find($id);
        $productById->publication_status = 1;
        $productById->save();
        return redirect('/product/manage-product');

    }
    public function editProductInfo($id){
        $publushedCategories = Category::where('publication_status','1')->get();
        $publushedBrands = Brand::where('publication_status','1')->get();

        $productById = Product::find($id);
        return view('admin.product.edit-product',[
            'publushedCategories'=>$publushedCategories,
            'publushedBrands'=>$publushedBrands,
            'productById'=>$productById

        ]);
    }
    public function updateProductInfo(Request $request){

        if($request->product_image){
            $product = Product::find($request->product_id);
            //unlink($product->product_image);
            $productImage = $request->file('product_image');
            $imageName = $productImage->getClientOriginalName();
            $directory = 'product_images/';
            $imageUrl = $directory.$imageName;
            //$productImage->move($directory, $imageName);
            Image::make($productImage)->resize(140, 140)->save($directory.$imageName);
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->product_quantity = $request->product_quantity;
            $product->product_code = $request->product_code;
            $product->product_description = $request->product_description;
            $product->product_image = $imageUrl;
            $product->publication_status = $request->publication_status;
            $product->save();
            return redirect('/product/manage-product');

        }else{
            $product = Product::find($request->product_id);
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->product_quantity = $request->product_quantity;
            $product->product_code = $request->product_code;
            $product->product_description = $request->product_description;
            $product->publication_status = $request->publication_status;
            $product->save();
            return redirect('/product/manage-product');

        }
    }
    public function deleteProductInfo($id){
        $productById = Product::find($id);
        $productById->delete();
        return redirect('/product/manage-product');

    }

}
