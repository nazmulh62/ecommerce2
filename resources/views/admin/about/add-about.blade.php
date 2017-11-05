@extends('admin.master')
@section('title')

    Add About
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add About Us Content Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session('message')}}
                            <form action="{{url('/about/new')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="contentDescription">About Description</label>
                                    <textarea class="form-control" name="about_description" rows="7"  id="summernote" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contentImageField">About Image</label>
                                    <input type="file" name="about_image" accept="image/*" id="ImageInputFile" >
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save About info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection