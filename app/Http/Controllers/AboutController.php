<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
    public function saveAboutInfo(Request $request){
        $aboutImage = $request->file('about_image');
        $imageName = $aboutImage->getClientOriginalName();
        $directory = 'about_images/';
        $imageUrl = $directory.$imageName;
        $aboutImage->move($directory, $imageName);
        $about = new About();
        $about->about_description = $request->about_description;
        $about->about_image = $imageUrl;
        $about->publication_status = $request->publication_status;
        $about->save();
        return redirect('/about/add')->with('message','About Info Save Successfully.');

    }
    public function manageAbout(){
        $abouts = About::all();
        return view('admin.about.manage-about',['abouts'=>$abouts]);
    }
    public function unpublishedAboutInfo($id){
        $aboutById = About::find($id);
        $aboutById->publication_status = 0 ;
        $aboutById->save();
        return redirect('/about/manage-about');

    }
    public function publishedAboutInfo($id){
        $aboutById = About::find($id);
        $aboutById->publication_status = 1 ;
        $aboutById->save();
        return redirect('/about/manage-about');

    }
}
