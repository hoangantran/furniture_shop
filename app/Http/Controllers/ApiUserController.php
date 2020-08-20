<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiUserController extends Controller
{
    public function readAll() {
    	$User = User::all();
    	if($User != NULL) {
	   		return response()->json(['User' => $User], 200);
	   	}
	   	else {
	   		return response()->json(["message"=> "Data not found"], 404);
	   	}
    }

    public function read($id) {
    	$User = User::find($id);
    	if($User != NULL) {
	   		return response()->json(['User' => $User], 200);
	   	}
	   	else {
	   		return response()->json(["message"=> "Data not found"], 404);
	   	}
    }

    public function delete() {
    	$data = json_decode(file_get_contents("php://input"));   		
		$User = User::find($data->id);
		if($User != NULL) {
			$User->delete();
			return response()->json(["message"=> "Deleted"], 200);
		}
		else {
			return response()->json(["message"=> "Data not found"], 404); 	
    	}    	
    }
}
