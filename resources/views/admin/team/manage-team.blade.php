@extends('admin.master')
@section('title')

    Manage Team

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Team Member Data Table</h1>
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
                                                <th>Member Name</th>
                                                <th>Member Designation</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($teams as $team)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$team->member_name}}</td>
                                                    <td>{{$team->member_designation}}</td>
                                                    <td>{{$team->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">

                                                        <a href="{{url('/team/details/'.$team->id)}}" class="btn btn-info btn-xs" title="View TeamMember Details">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>
                                                        @if($team->publication_status == 1)

                                                            <a href="{{url('/team/unpublished/'.$team->id)}}" class="btn btn-success btn-xs" title="Published TeamMember">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/team/published/'.$team->id)}}" class="btn btn-warning btn-xs" title="Unpublished TeamMember">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/team/edit/'.$team->id)}}" class="btn btn-primary btn-xs" title="Edit TeamMember">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/team/delete/'.$team->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete TeamMember">
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