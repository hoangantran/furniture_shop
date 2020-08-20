<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\SanPham;
use App\LoaiSanPham;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GioHang extends Controller
{
    public function getAddCart($id) {
    	$SanPham = SanPham::find($id);
    	Cart::add(['id' => $SanPham->id, 'name' => $SanPham->name, 'qty' => 1, 'price' => $SanPham->price, 'options' => ['img' => $SanPham->images]]);
    	return Redirect::to('home');
    }

    public function getDeleteCart($id) {
        if($id == 'all'){
            Cart::destroy();
        }
        else {
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdatecart(Request $request) {
        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
    }
    
    public function showCart(){
    	$loaisp = LoaiSanPham::all();
    	$items = Cart::content();
        $total = Cart::total();
    	return view('showCart',['total'=>$total, 'items'=>$items,'user'=>Auth::user(), 'loaisp'=>$loaisp]);
    }
}
