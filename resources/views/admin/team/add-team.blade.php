@extends('admin.master')
@section('title')
    Add Team
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="box box-danger">

                        <div class="panel panel-heading  text text-center">Add Team Member Information</div>

                        <div class="panel-body">
                            <br/>
                            {{Session('message')}}
                            <form action="{{url('/team/new')}}" method="post" enctype="multipart/form-data" required />
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="memberName">Member Name</label>
                                    <input type="text" name="member_name" class="form-control" id="memberNameInputField" placeholder="Member  Name Here" required />
                                </div>
                                <div class="form-group">
                                    <label for="memberDesignation">Member Designation</label>
                                    <input type="text" name="member_designation" class="form-control" id="memberDesignationInputField" placeholder="Member Designation Here" required />
                                </div>
                                <div class="form-group">
                                    <label for="memberDescription">Member Message</label>
                                    <textarea class="form-control" name="member_message" rows="7" placeholder="Member Message Here" required /></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="teamMemberImage">Member Image</label>
                                    <input type="file" name="team_image" id="memberImage" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label" required />Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Team Member info</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection