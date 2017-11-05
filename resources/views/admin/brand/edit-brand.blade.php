@extends('admin.master')
@section('title')
    Edit Brand
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel-heading well text text-center">Edit Brand Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <form action="{{url('/brand/update')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="categoryName">Brand Name</label>
                                    <input type="text" value="{{$brandById->brand_name}}" name="brand_name" class="form-control" id="CategoryNameInputField" placeholder="Brand Name Here">
                                    <input type="hidden" value="{{$brandById->id}}" name="brand_id" class="form-control" id="CategoryIdInputField" placeholder="Brand Name Here">

                                </div>
                                <div class="form-group">
                                    <label for="categoryDescription">Brand Description</label>
                                    <textarea class="form-control" name="brand_description" rows="5" placeholder="Brand Description Here">{{$brandById->brand_description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="categoryPublicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Category info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection