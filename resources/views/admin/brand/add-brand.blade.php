@extends('admin.master')
@section('title')
    Add Brands
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add Brands Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <form action="{{url('/brand/new')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="categoryName">Brand Name</label>
                                    <input type="text" name="brand_name" class="form-control" id="CategoryNameInputField" placeholder="Brand Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="categoryDescription">Brand Description</label>
                                    <textarea class="form-control" name="brand_description" rows="7"  id="summernote" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="categoryPublicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Brand info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection