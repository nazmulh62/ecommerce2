<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/add')->with('message','Brand Save Successfully');
    }
    public function manageBrand(){
        $brands = Brand::get();
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }
    public function unpublishedBrandInfo($id){

        $brandById = Brand::find($id);
        $brandById->publication_status = 0;
        $brandById->save();
        return redirect('/brand/manage-brand');

    }
    public function publishedBrandInfo($id){
        $brandById = Brand::find($id);
        $brandById->publication_status = 1;
        $brandById->save();
        return redirect('/brand/manage-brand');

    }
    public function editBrandInfo($id){
        $brandById = Brand::find($id);
        return view('admin.brand.edit-brand',['brandById'=>$brandById]);
    }

    public function updateBrandInfo(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/manage-brand');

    }
    public function deleteBrandInfo($id){
        $brandById = Brand::find($id);
        $brandById->delete();
        return redirect('/brand/manage-brand');

    }
}
