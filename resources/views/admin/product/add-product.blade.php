@extends('admin.master')
@section('title')
    Product Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading text text-center">Add Product Form</div>

                        <div class="panel-body">
                            <br/>
                            {{ Session::get('message')}}
                            <form action="{{url('/product/new')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="CategoryInputName">Category Name</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($publushedCategories as $publushedCategory)
                                            <option value="{{ $publushedCategory->id }}">{{ $publushedCategory->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="BrandInputName">Brand Name</label>
                                    <select class="form-control" name="brand_id" >
                                        @foreach($publushedBrands as $publushedBrand)
                                            <option value="{{ $publushedBrand->id }}">{{ $publushedBrand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productNameInputField">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="productInputField" placeholder="Product Name Here" required/>
                                </div>
                                <div class="form-group">
                                    <label for="productPriceInputField">Product Price</label>
                                    <input type="text" name="product_price" class="form-control" id="productPriceInputField" placeholder="Product Price Here" required/>
                                </div>
                                <div class="form-group">
                                    <label for="productPriceInputField">Product Quantity</label>
                                    <input type="text" name="product_quantity" class="form-control" id="productQuantityInputField" placeholder="Product Quantity Here" required/>
                                </div>
                                <div class="form-group">
                                    <label for="producCodetInputField">Product Code</label>
                                    <input type="text" name="product_code" class="form-control" id="producCodetInputField" placeholder="Product Code Here" required/>
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Product Description</label>
                                    <textarea class="form-control" name="product_description" rows="7" id="summernote"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="producImageInputField">Product Image</label>
                                    <input type="file" name="product_image" accept="image/*" id="ImageInputFile">
                                </div>
                                <div class="form-group">
                                    <label for="producPublicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status" required/>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Product info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection