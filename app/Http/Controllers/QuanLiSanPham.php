<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class QuanLiSanPham extends Controller
{   

    public function showSanPham() {
    	$sanpham = SanPham::all();
        return view('admin.sanpham.showSanPham',['user'=>Auth::user(), 'sanpham'=>$sanpham]);
    }

    public function formInsert() {
    	$loaisp = LoaiSanPham::all();
    	return view('admin.sanpham.insertSanPham',['loaisp'=>$loaisp]);
    }

    public function insertSanPham(Request $request) {
    	$sanpham = new SanPham();
    	$sanpham->id_loai = $request->id_loai;
    	$sanpham->name = $request->name;
    	$sanpham->description = $request->description;
    	$sanpham->price = $request->price;

    	//////upload anh/////////////
    	if($request->hasFile('image')) {
    		$file = $request->file('image');
    		$name = $file->getClientOriginalName();
    		$hinh = str_random(4)."_".$name;
			$file->move('template/images',$hinh);
    		$sanpham->images = $hinh;
    	}
    	else{
			$sanpham->images = "";
    	}

		/////////////////////////////

    	$sanpham->save();
    	return Redirect::to('admin/sanpham/quanlisanpham');
    } 


    public function getUpdate($id) {
    	$sanpham = SanPham::find($id);
    	$loaisp = LoaiSanPham::all();
        return view('admin.sanpham.updateSanPham',['sanpham'=>$sanpham,'loaisp'=>$loaisp]);
    }

    public function postUpdate(Request $request, $id) {
        $sanpham = SanPham::find($id);
        $sanpham->id = $request->id;
      	$sanpham->id_loai = $request->id_loai;
    	$sanpham->name = $request->name;
    	$sanpham->description = $request->description;
    	$sanpham->price = $request->price;

    	if($request->hasFile('image')) {
    		$file = $request->file('image');
    		$name = $file->getClientOriginalName();
    		$hinh = str_random(4)."_".$name;
			$file->move('template/images',$hinh);
    		$sanpham->images = $hinh;
    	}


        $sanpham->save();
    	return Redirect::to('admin/sanpham/quanlisanpham');
    }


    public function deleteSanPham($id) {
    	$sanpham = SanPham::find($id);
        $sanpham->delete();

        return Redirect::to('admin/sanpham/quanlisanpham');
    }
}
