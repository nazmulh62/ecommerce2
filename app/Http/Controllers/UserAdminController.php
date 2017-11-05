<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;

class UserAdminController extends Controller
{
    public function addUser(){
        return view('admin.user.add-user');
    }
    public function saveUserInfo(Request $request){
        $useradmin = new User();

        $useradmin->name = $request->name;
        $useradmin->email = $request->email;
        $useradmin->password = bcrypt($request->password);
        $useradmin->access_level = $request->access_level;
        $useradmin->save();
        return redirect('/user/add')->with('message','Admin Info Save Successfully');
    }
    public function manageUser(){
        $useradmins = User::all();
        return view('admin.user.manage-user',['useradmins'=>$useradmins]);
    }
    public function unpublishedUserInfo($id){

        $userById = User::find($id);
        $userById->access_level = 0;
        $userById->save();
        return redirect('/user/manage-user');

    }
    public function publishedUserInfo($id){
        $userById = User::find($id);
        $userById->access_level = 1;
        $userById->save();
        return redirect('/user/manage-user');

    }

    public function deleteUserInfo($id){
        $userById = User::find($id);
        $userById->delete();
        return redirect('/user/manage-user');
    }


}
