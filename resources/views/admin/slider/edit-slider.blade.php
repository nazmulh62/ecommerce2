@extends('admin.master')
@section('title')

    Slider Edit

@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Edit Slider Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <hr/>
                            <form action="{{url('/slider/update')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Name</label>
                                    <input type="text" value="{{ $sliderById->slider_text_one }}" name="slider_text_one" class="form-control" id="sliderName" placeholder="Slider Name Here">
                                    <input type="hidden" value="{{ $sliderById->id }}" name="slider_id" class="form-control" id="inputSliderId">

                                </div>
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Name</label>
                                    <input type="text" value="{{ $sliderById->slider_text_two }}" name="slider_text_two" class="form-control" id="sliderName" placeholder="Slider Name Here">

                                </div>
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Name</label>
                                    <input type="text" value="{{ $sliderById->slider_text_three}}" name="slider_text_three" class="form-control" id="sliderName" placeholder="Slider Name Here">

                                </div>
                                <div class="form-group">
                                    <label for="sliderImageFile">Slider Image</label>
                                    <input type="file" name="slider_image" id="sliderImage" accept="image/*">
                                    <img src="{{asset($sliderById->slider_image)}}" width="70" height="70">
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Slider info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection