<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Storage;

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

    public function changeUserName(Request $request){
        $user = auth()->user();
        // return $request->all();
        $user->name = $request->name;
        $user->save();
        return response()->json(['user' => $user], 200);
    }

    public function changeProfilePicture(Request $request){
        $user = auth()->user();

        // return $request->all();
       $validation = Validator::make($request->all(), [
            'profilePicture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validation->passes())
        {
            $storage_url = 'public/user/'.$user->id.'/profilepicture/';
            $image       = $request->file('profilePicture');
            $new_name    = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($storage_url, $new_name, 'local');
            $user->userPreference->picture_url = $storage_url . $new_name;
            $user->userPreference->picture_uploaded = 1;
            $user->userPreference->save();
            // Storage::put($new_name, $image);
            return response()->json(
                [
                    'image_url' => $user->userPreference->picture_url,
                    // ''
                ], 200);
        }
        else
        {
            // return 'asd';
            return response()->json(['error'], 404);

        }
    }

    public function getImagesPrev(){
        $user = auth()->user();
        $dir = 'public/user/'.$user->id.'/profilepicture/';
        $exists = Storage::disk('local')->exists($dir);
        if ($exists) {
            $files = Storage::allFiles($dir);
            $files = array_diff( $files, [str_replace("/storage","public", $user->image) ]);
         
            return response()->json($files);
        }else{
            return response()->json('');
        }
    }
}
