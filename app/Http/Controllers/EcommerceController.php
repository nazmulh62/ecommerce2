<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use App\Brand;
use App\Category;
use App\Team;
use App\About;
use View;
use DB;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function home(){
        $allPublushedProucts = Product::where('publication_status', '1')->orderBY('id', 'desc')->take(4)->get();
        $allPublushedSliders  = Slider::where('publication_status', '1')->get();

        return view('frontEnd.home',[

            'allPublushedProucts'=>$allPublushedProucts,
            'allPublushedSliders'=>$allPublushedSliders
        ]);
    }

    public function categoryProduct($id){
        $category = Category::find($id);
        $categoryProducts = Product::where('category_id', $id)->get();
        return view('frontEnd.category.category-product',[

            'categoryProducts'=>$categoryProducts,
            'category'=>$category

        ]);
    }

    public function productDetails($id){
        $productById = Product::find($id);
        $categoryProducts = Product::where('category_id', $productById->category_id)->orderBY('id', 'desc')->take(4)->get();

        return view('frontEnd.product.product-details',[
            'productById'=>$productById,
            'categoryProducts'=>$categoryProducts


        ]);
    }



    public function About(){
        $allPublushedTeams = Team::where('publication_status', '1')->get();
        $allPublushedAbouts= About::where('publication_status', '1')->get();
        return view('frontEnd.about',[
            'allPublushedTeams'=>$allPublushedTeams,
            'allPublushedAbouts'=>$allPublushedAbouts
        ]);
    }
    public function Deals(){
        $Products = Product::where('publication_status', '1')->orderBY('id', 'desc')->take(8)->get();

        return view('frontEnd.product',[

            'Products'=>$Products

        ]);
    }
    public function Service(){
        return view('frontEnd.service');
    }


    public function Event(){
        return view('frontEnd.event');
    }
    public function Mail(){
        return view('frontEnd.mail');
    }

    public function Payment(){
        return view('frontEnd.payment');
    }


    public function Brand($id){
        $brandProducts= Product::where('brand_id',$id)->get();
        return view('frontEnd.brand',[
            'brandProducts'=>$brandProducts
        ]);
    }

}
