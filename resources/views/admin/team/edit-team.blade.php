@extends('admin.master')
@section('title')
    Edit Team
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Edit Team Member Information</div>

                        <div class="panel-body">
                            <form action="{{url('/team/update')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden"  value="{{$teamMemberById->id}}" name="member_id" class="form-control" id="memberInputField" placeholder="Member  Name Here">

                                </div>
                                <div class="form-group">
                                    <label for="memberName">Member Name</label>
                                    <input type="text" value="{{$teamMemberById->member_name}}" name="member_name" class="form-control" id="memberNameInputField" placeholder="Member  Name Here">
                                    <input type="hidden"  value="{{$teamMemberById->id}}" name="member_id" class="form-control" id="memberInputField" placeholder="Member  Name Here">


                                </div>
                                <div class="form-group">
                                    <label for="memberDesignation">Member Designation</label>
                                    <input type="text"  value="{{$teamMemberById->member_designation}}" name="member_designation" class="form-control" id="memberDesignationInputField" placeholder="Member Designation Here">
                                </div>
                                <div class="form-group">
                                    <label for="memberDescription">Member Message</label>
                                    <textarea class="form-control" name="member_message" rows="5" placeholder="Member Message Here">{{$teamMemberById->member_message}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="teamImage">Member Image</label>
                                    <input type="file" name="team_image" accept="image/*">
                                    <img src="{{asset($teamMemberById->team_image)}}" width="50" height="50" alt="team Image">
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Team info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection