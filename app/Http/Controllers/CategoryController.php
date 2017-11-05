<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.category-add');
    }
    public function saveCategoryInfo(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/add')->with('message','Category Save Successfully');
    }
    public function manageCategory(){
        $categories = Category::get();
        return view('admin.category.category-manage',['categories'=>$categories]);
    }
    public function unpublishedCategoryInfo($id){

        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/category/category-manage');

    }
    public function publishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/category/category-manage');

    }
    public function editCategoryInfo($id){
        $categoryById = Category::find($id);
        return view('admin.category.edit-category',['categoryById'=>$categoryById]);
    }

    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/category-manage');

    }
    public function deleteCategoryinfo($id){
        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/category/category-manage');

    }

}
