@extends('admin.master')
@section('title')

    Category Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Category Data Table</h1>
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
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$category->category_name}}</td>
                                                    <td>{{$category->category_description}}</td>
                                                    <td>{{$category->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">
                                                        @if($category->publication_status == 1)

                                                            <a href="{{url('/category/unpublished/'.$category->id)}}" class="btn btn-success btn-xs" title="Published Category">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/category/published/'.$category->id)}}" class="btn btn-warning btn-xs" title="Unpublished Category">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-primary btn-xs" title="Edit Category">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/category/delete/'.$category->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Category">
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