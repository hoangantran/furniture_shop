<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\SanPham;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Home extends Controller
{
    public function getData() {
    	$loai = LoaiSanPham::all();
    	$sanpham = SanPham::all();
    	return view('welcome',['user'=>Auth::user(), 'loaisp'=>$loai,'sanpham'=>$sanpham]);
    }

     public function getDataWithCata($id) {
     	$loai = LoaiSanPham::all();
        $sanpham = SanPham::Where('id_loai','=',$id)->get();
        return view('productbycata',['user'=>Auth::user(), 'loaisp'=>$loai,'sanpham'=>$sanpham]);
    }

    public function listApi() {
        return view('api.list');
    }
}
