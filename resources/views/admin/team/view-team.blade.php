@extends('admin.master')
@section('title')
    View Team Content

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class=" panel-default">
                    <div class=" panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>View Team Member Details</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-default" style="margin-top:15px">

                                            <table class="table table-hover table-bordered" id="sampleTable">
                                                <tr>
                                                    <th>Member Id</th>
                                                    <td>{{$teamMemberById->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Member Name</th>
                                                    <td>{{$teamMemberById->member_name}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Member Designation</th>
                                                    <td>{{$teamMemberById->member_designation}}</td>

                                                </tr>
                                                <tr>
                                                    <th>Member Message</th>
                                                    <td>{{$teamMemberById->member_message}}</td>

                                                </tr>

                                                <tr>
                                                    <th>Member Image</th>
                                                    <td><img src="{{ asset($teamMemberById->team_image) }}" height="150" width="150"></td>

                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td>{{$teamMemberById->publication_status}}</td>

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