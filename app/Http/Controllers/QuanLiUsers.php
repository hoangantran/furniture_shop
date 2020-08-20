<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class QuanLiUsers extends Controller
{
    public function formInsert() {
        return view('admin.users.insertUser');
    }

    public function insertUser(Request $request) {
    	$user = new User();
    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->email = $request->email;

    	$user->save();
        return Redirect::to('admin/users/quanliusers');
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();

        return Redirect::to('admin/users/quanliusers');
    }

    public function getUpdate($id) {
    	$user = User::find($id);
        return view('admin.users.updateUser',['user'=>$user]);
    }

    public function postUpdate(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;

        $user->save();
        return Redirect::to('admin/users/quanliusers');
    }

    public function searchUser(Request $request) {
        $tukhoa = $request->tukhoa;
        $users = User::Where('username','like',"%$tukhoa%")->get();
        return view('admin.users.searchUser',['users'=>$users,'tukhoa'=>$tukhoa]);
    }

    public function show() {
        $users = User::all();
        return view('admin.users.showUsers',['user'=>Auth::user(), 'users'=>$users]);
    }
}