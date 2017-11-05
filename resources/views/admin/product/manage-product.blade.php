@extends('admin.master')
@section('title')

    Product Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">

            <div class=" panel-default">
                <div class=" panel page-title">
                    <div>
                        <h1><i class="fa fa-home fa-lg"></i>Product Data Table</h1>
                        <p>Table to display analytical data effectively</p>

                    </div>

                </div>

                <div class="panel panel-body">

                    <div class="row">
                        <div class="col-md-10" style="width: 850px;">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                        <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Product Name</th>
                                            <th>Category Name</th>
                                            <th>Brand Name</th>
                                            <th>Publication Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; ?>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->category_name}}</td>
                                                <td>{{$product->brand_name}}</td>
                                                <td>{{$product->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                <td class="center">
                                                    <a href="{{url('/product/details/'.$product->id)}}" class="btn btn-info btn-xs" title="View Product Details">
                                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                    </a>
                                                    @if($product->publication_status == 1)
                                                        <a href="{{url('/product/unpublished/'.$product->id)}}" class="btn btn-success btn-xs" title="Published Product">
                                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{url('/product/published/'.$product->id)}}" class="btn btn-warning btn-xs" title="Unpublished Product">
                                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                        </a>
                                                    @endif
                                                    <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-primary btn-xs" title="Edit Product">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{url('/product/delete/'.$product->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Product">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection