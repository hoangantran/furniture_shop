<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;

class ApiController extends Controller
{	

    public function readAll() {
	    $Category = LoaiSanPham::all();	
		if($Category != NULL) {
	        return response()->json(['Category' => $Category], 200);   
	   	}
	   	else{
	   		return response()->json(["message" => "Data not found"], 404); 
	   	}
    }

    public function read($id) {

	    $Category = LoaiSanPham::find($id);
	    if($Category != NULL) {
	    	return response()->json(['Category' => $Category], 200);
	    }
	    else{
	    	return response()->json(["message" => "Data not found"], 404);     	  
	   	}
    }

    public function create() {

    	$Category = new LoaiSanPham();
    	$data = json_decode(file_get_contents("php://input"));
		$Category->tenloaisp = $data->name;
    	$Category->save();
    	return response()->json(["message" => "Created"], 200);  	    	
    }

    public function update(Request $request) {
    	
		$data = json_decode(file_get_contents("php://input"));
		$Category = LoaiSanPham::find($data->id);
    	$Category->tenloaisp = $data->name;
    	$Category->save();
    	return response()->json(["message" => "Updated"], 200);
    }

    public function delete() {
    	$data = json_decode(file_get_contents("php://input"));	
		$Category = LoaiSanPham::find($data->id);
		if($Category != NULL) {
			$Category->delete();
			return response()->json(["message" => "Deleted"], 200);
		}
		else {
			return response()->json(["message" => "Data not found"], 404);	
    	}    	
    }
}
