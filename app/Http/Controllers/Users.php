<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
    function getRePass($id) {
    	$user = User::find($id);
        return view('user.rePassword',['user'=>$user]);
    }

    public function postRePass(Request $request, $id) {
        $user = User::find($id);
        $user->password = bcrypt($request->repassword);

        $user->save();
        return Redirect::to('/');
    }
}
