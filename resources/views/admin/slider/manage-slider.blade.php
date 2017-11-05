@extends('admin.master')
@section('title')

    Slider Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Slider Data Table</h1>
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
                                                <th>Slider TextOne</th>
                                                <th>Slider TextTwo</th>
                                                <th>Slider TextThree</th>
                                                <th>Slider Image</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($sliders as $slider)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$slider->slider_text_one}}</td>
                                                    <td>{{$slider->slider_text_two}}</td>
                                                    <td>{{$slider->slider_text_three}}</td>
                                                    <td><img src="{{asset($slider->slider_image)}}" height="45" width="50"></td>
                                                    <td>{{$slider->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">
                                                        @if($slider->publication_status == 1)

                                                            <a href="{{url('/slider/unpublished/'.$slider->id)}}" class="btn btn-success btn-xs" title="Published Slider">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/slider/published/'.$slider->id)}}" class="btn btn-warning btn-xs" title="Unpublished Slider">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/slider/edit/'.$slider->id)}}" class="btn btn-primary btn-xs" title="Edit Slider">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/slider/delete/'.$slider->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Slider">
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