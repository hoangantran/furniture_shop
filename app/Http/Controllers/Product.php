<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Support\Facades\Auth;

class Product extends Controller
{
    public function getDetailProduct($id) {
    	$sanpham = SanPham::find($id);
    	$loai = LoaiSanPham::all();
    	return view('detail',['user'=>Auth::user(), 'loaisp'=>$loai,'sanpham'=>$sanpham]);
    }
}
