@extends('admin.master')
@section('title')
    User
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add User Admin Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <form action="{{url('/user/new')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Admin Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3"  class="control-label">Activation Status</label>
                                    <select class="form-control" name="access_level">
                                        <option>Select Access Level</option>
                                        <option value="1">Super Admin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Executive</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Admin info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection