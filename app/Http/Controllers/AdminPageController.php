<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class AdminPageController extends Controller
{
    public function index(){
        return view("admin.home");
    }

    public function member_all(){
       $users = User::orderBy('id','DESC')->get();
       return view("admin.member_all",["users"=>$users]);
    }

    //delete member
    public function member_delete(Request $request){
       $user = User::find($request->id);
       $user->delete();
       return redirect("admin/member/all")->with('info','User Delete Success');
    }

    //member_promote
    public function member_promote(Request $request){
        $updated = DB::update('update users set role = ? where id = ?',[1,$request->id]);
        return redirect("admin/member/all")->with('info','User Update Success');
    }

    public function change_member(Request $request){
        $updated = DB::update('update users set role = ? where id = ?',[0,$request->id]);
        return redirect("admin/member/all")->with('info','User Chanage Permission Success');
    }
}
