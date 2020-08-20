<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Validator;
use validate;

class DangKy extends Controller
{
    
    public function showForm() {
        return view('form-register');
    }

    public function Register(Request $request){

        $this->validate($request,[
           'name' => 'required|min:3|max:255',
           'email' => 'required|email|unique:users',
           'username' => 'required|unique:users',
           'password' => 'required|min:3|max:32',
           'phone' => 'required|min:9|max:13',
           'adress' => 'required|min:3|max:255',
        ],[
           'name.required' => 'Hãy nhập vào họ tên của bạn',
           'name.max' => 'Họ tên tối đa 255 ký tự',
           'email.required' => 'Hãy nhập vào địa chỉ Email',
           'email.email' => 'Địa chỉ Email không đúng định dạng',
           'email.unique' => 'Địa chỉ Email đã tồn tại',
           'username.required' => 'Hãy nhập username',
           'username.unique' => 'UserName đã tồn tại',
           'password.required' => 'Hãy nhập mật khẩu',
           'password.min' => 'Mật khẩu tối thiểu 3 ký tự',
           'phone.required' => 'Hãy nhập số điện thoại của bạn',
        ]);

        DB::table('users')->insert(
        [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return view('form-register')->with('message', 'Đăng ký thành công.');
    }
}
