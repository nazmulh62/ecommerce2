@extends('admin.master')
@section('title')

    Manage User
@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class=" panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i> Data Table</h1>
                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10 style="width: 760px;">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                            <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Admin Name</th>
                                                <th>Email Address</th>
                                                <th>Activation Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($useradmins as $useradmin)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $useradmin->name }}</td>
                                                    <td>{{ $useradmin->email }}</td>
                                                    <td>{{ $useradmin->access_level == 1 ? 'Published':'Unpublished'}}</td>

                                                    <td class="center">
                                                        @if($useradmin->access_level == 1)

                                                            <a href="{{url('/user/unpublished/'.$useradmin->id)}}" class="btn btn-success btn-xs" title="Published User">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/user/published/'.$useradmin->id)}}" class="btn btn-warning btn-xs" title="Unpublished User">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/user/delete/'.$useradmin->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete User">
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