<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function checkEmail(Request $request){
    	// return $request->all();
    	$checkEmail = User::where('email', $request->email)->first();

    	if ($checkEmail) {
    		if($checkEmail == auth()->user()){
				return response()->json('error', 404);
    		}
    		return response()->json('success', 200);
    	}
    	else{
    		return response()->json('error', 404);
    	}
    }

    public function returnAllUsers(){
    	return User::all();
    }
}
