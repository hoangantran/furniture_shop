<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class ApiProductController extends Controller
{
    public function read($id) {
    	$Product = SanPham::find($id);
    	if($Product != NULL) {
	   		return response()->json(['Product' => $Product], 200);
	   	}
	   	else {
	   		return response()->json(["message"=> "Data not found"], 404);
	   	}
    }

    public function readAll() {
    	$Product = SanPham::all();
    	if($Product != NULL) {
	   		return response()->json(['Product' => $Product], 200);
	   	}
	   	else {
	   		return response()->json(["message"=> "Data not found"], 404);
	   	}
    }

    public function delete() {
    	$data = json_decode(file_get_contents("php://input"));	
		$Product = SanPham::find($data->id);
		if($Product != NULL) {
			$Product->delete();
			return response()->json(["message"=> "Deleted"], 200);
		}
		else {
			return response()->json(["message"=> "Data not found"], 404); 	
    	}    	
    }
}
