<?php

namespace App\Http\Controllers;
use App\Team;
use DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeamMember(){
        return view('admin.team.add-team');
    }
    public function saveTeamMemberInfo(Request $request){
        $teamImage = $request->file('team_image');
        $imageName = $teamImage->getClientOriginalName();
        $directory = 'team_images/';
        $imageUrl = $directory.$imageName;
        $teamImage->move($directory, $imageName);
        $team = new Team();
        $team->member_name = $request->member_name;
        $team->member_designation = $request->member_designation;
        $team->member_message = $request->member_message;
        $team->team_image = $imageUrl;
        $team->publication_status = $request->publication_status;
        $team->save();
        return redirect('/team/add')->with('message','Team Member Info Save Successfully.');

    }
    public function manageTeamMember(){
        $teams = Team::all();
        return view('admin.team.manage-team',['teams'=>$teams]);
    }
    public function unpublishedTeamMemberInfo($id){

        $teamMemberById = Team::find($id);
        $teamMemberById->publication_status = 0;
        $teamMemberById->save();
        return redirect('/team/manage-team');

    }
    public function publishedTeamMemberInfo($id){
        $teamMemberById = Team::find($id);
        $teamMemberById->publication_status = 1;
        $teamMemberById->save();
        return redirect('/team/manage-team');

    }
    public function editMemberInfo($id){
        $teamMemberById = Team::find($id);
        return view('admin.team.edit-team',['teamMemberById'=>$teamMemberById]);
    }
    public function viewTeamMemberDetailsInfo($id){
        $teamMemberById = Team::find($id);
        return view('admin.team.view-team',['teamMemberById'=>$teamMemberById]);

    }
    public function updateMemberInfo(Request $request){

        if($request->team_image){
            $team = Team::find($request->member_id);
            //unlink($team->team_image);
            $teamImage = $request->file('team_image');
            $imageName = $teamImage->getClientOriginalName();
            $directory = 'team_images/';
            $imageUrl = $directory.$imageName;
            $teamImage->move($directory, $imageName);
            $team->member_name = $request->member_name;
            $team->member_designation = $request->member_designation;
            $team->member_message = $request->member_message;
            $team->team_image = $imageUrl;
            $team->publication_status = $request->publication_status;
            $team->save();
            return redirect('/team/manage-team');

        }else{
            $team = Team::find($request->member_id);
            $team->member_name = $request->member_name;
            $team->member_designation = $request->member_designation;
            $team->member_message = $request->member_message;
            $team->publication_status = $request->publication_status;
            $team->save();
            return redirect('/team/manage-team');

        }
    }
    public function deleteTeamMemberInfo($id){
        $teamMemberById = Team::find($id);
        $teamMemberById->delete();
        return redirect('/team/manage-team');
    }

}
