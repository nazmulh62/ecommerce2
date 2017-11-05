@extends('admin.master')
@section('title')

    Brand Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Brand Data Table</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10" style="width: 860px;">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                            <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Brand Name</th>
                                                <th>Brand Description</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($brands as $brand)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$brand->brand_name}}</td>
                                                    <td>{{$brand->brand_description}}</td>
                                                    <td>{{$brand->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">
                                                        @if($brand->publication_status == 1)

                                                            <a href="{{url('/brand/unpublished/'.$brand->id)}}" class="btn btn-success btn-xs" title="Published Brand">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/brand/published/'.$brand->id)}}" class="btn btn-warning btn-xs" title="Unpublished Brand">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/brand/edit/'.$brand->id)}}" class="btn btn-primary btn-xs" title="Edit Brand">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/brand/delete/'.$brand->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Brand">
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

    </div>
@endsection