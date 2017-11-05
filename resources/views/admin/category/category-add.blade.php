@extends('admin.master')
@section('title')
    Category Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add Category Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <form action="{{url('/category/new')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="CategoryNameInputField" placeholder="Category Name Here">
                                </div>
                                <div class="form-group" >
                                    <label for="categoryDescription">Category Description</label>
                                    <textarea class="form-control" name="category_description" rows="7"  id="summernote" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="categoryPublicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Category info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection