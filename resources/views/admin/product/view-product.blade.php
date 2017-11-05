@extends('admin.master')
@section('title')
    View Product

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class=" panel-default">
                    <div class=" panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>View Product Data Details</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-default" style="margin-top:15px">

                                            <div class="panel-heading  text text-center">{{$productById->category_name}}</div>

                                            <table class="table table-hover table-bordered" id="sampleTable">
                                                <tr>
                                                    <th>Product Id</th>
                                                    <td>{{$productById->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <td>{{$productById->product_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <td>{{$productById->category_name}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Brand Name</th>
                                                    <td>{{$productById->brand_name}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Product Price</th>
                                                    <td>{{$productById->product_price}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td>{{$productById->product_code}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Product Description</th>
                                                    <td><?php echo "$productById->product_description" ?></td>

                                                </tr>

                                                <tr>
                                                    <th>Product Image</th>
                                                    <td><img src="{{ asset($productById->product_image) }}" alt="" height="150" width="150"></td>

                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td>{{$productById->publication_status}}</td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection