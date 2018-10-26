<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\User;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()) );

	}
	public function show($id){ 
		$user = User::find($id);
			
		return  view ('/edituser',compact('user'));
		}
		 
	public function update(Request $request,$id) { 
		$user = User::find($id); 
        $user->name = $request->name;
		$user->email = $request->email;
<<<<<<< HEAD
		// $user->password = $request->password;
=======
>>>>>>> 8a8cd6f7439e9b0d3cd54ed885133a842b0f617a
		$user ->save();
		
        
        return view('profile', array('user' => Auth::user()) );
        
        }
}
