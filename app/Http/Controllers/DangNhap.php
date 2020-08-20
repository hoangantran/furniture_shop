<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Support\Facades\Redirect;

class DangNhap extends Controller
{


    public function showForm() {
        return view('form-login');
    }

    public function Login(Request $request) {
    	$username = $request['username'];
    	$password = $request['password'];
        $sanpham = SanPham::all();
        $loaisp = LoaiSanPham::all();
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            if($username == 'admin'){
                return view('admin/adminForm',['user'=>Auth::user()]);
            }
            else{
                return Redirect('');
            }
        }
        else{
            return view('form-login',['error'=>' Tài khoản hoặc mật khẩu không chính xác!!']);
        }
    }

    public function Logout() {    
        Auth::logout();
        return back();
    }


    public function LogoutAdmin() {
        Auth::logout();
        return Redirect()->route('showlogin');
    }
}
    