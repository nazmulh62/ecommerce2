@extends('admin.master')
@section('title')
    Slider Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add Slider Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session('message')}}
                            <hr/>
                            <form action="{{ url('/slider/new') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Text One</label>
                                    <input type="text" name="slider_text_one" class="form-control" id="sliderText" placeholder="Slider Text Here">
                                </div>
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Text Two</label>
                                    <input type="text" name="slider_text_two" class="form-control" id="sliderText" placeholder="Slider Text Here">
                                </div>
                                <div class="form-group">
                                    <label for="sliderImageName">Slider Text Three</label>
                                    <input type="text" name="slider_text_three" class="form-control" id="sliderText" placeholder="Slider Text Here">
                                </div>

                                <div class="form-group">
                                    <label for="sliderImageFile">Slider Image</label>
                                    <input type="file" name="slider_image" id="sliderImage" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success btn-flat">Save Slider info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection