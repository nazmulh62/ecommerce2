<?php

namespace App\Http\Controllers;
use App\Slider;
use DB;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){

        return view('admin.slider.add-slider');
    }

    public function saveSliderInfo(Request $request)
    {
        $sliderImage = $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = 'slider_images/';
        $imgUrl = $directory.$imageName;
        $sliderImage->move($directory, $imageName);
        $slider = new Slider();
        $slider->slider_text_one = $request->slider_text_one;
        $slider->slider_text_two = $request->slider_text_two;
        $slider->slider_text_three = $request->slider_text_three;
        $slider->slider_image = $imgUrl;
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect('/slider/add')->with('message','Slider Image Save Successfully');

    }
    public function manageSlider(){
        $sliders = Slider::all();
        return view('admin.slider.manage-slider',['sliders'=>$sliders]);
    }
    public function unpublishedSliderInfo($id){

        $sliderById = Slider::find($id);
        $sliderById->publication_status = 0;
        $sliderById->save();
        return redirect('/slider/manage-slider');

    }
    public function publishedSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 1;
        $sliderById->save();
        return redirect('/slider/manage-slider');

    }
    public function editSliderInfo($id){
        $sliderById = Slider::find($id);
        return view('admin.slider.edit-slider',['sliderById'=>$sliderById]);
    }
    public function updateSliderInfo(Request $request){

        if($request->slider_image){
            $slider = Slider::find($request->slider_id);
            //unlink($slider->slider_image);
            $sliderImage = $request->file('slider_image');
            $imageName = $sliderImage->getClientOriginalName();
            $directory = 'slider_images/';
            $imgUrl = $directory.$imageName;
            $sliderImage->move($directory, $imageName);
            $slider->slider_text_one = $request->slider_text_one;
            $slider->slider_text_two = $request->slider_text_two;
            $slider->slider_text_three = $request->slider_text_three;
            $slider->slider_image = $imgUrl;
            $slider->publication_status = $request->publication_status;
            $slider->save();
            return redirect('/slider/manage-slider');

        }else{
            $slider = Slider::find($request->slider_id);
            $slider->slider_text_one = $request->slider_text_one;
            $slider->slider_text_two = $request->slider_text_two;
            $slider->slider_text_three = $request->slider_text_three;
            $slider->publication_status = $request->publication_status;
            $slider->save();
            return redirect('/slider/manage-slider');

        }
    }

    public function deleteSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->delete();
        return redirect('/slider/manage-slider');
    }


}
