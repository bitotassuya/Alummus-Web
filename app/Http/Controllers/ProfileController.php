<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function profile(){

    	return view('profiles.profile');
    }
    //เราจะเรียกอะไรไปแสดงบ้างต้องระบุตรงนี้
    public function addProfile(Request $request){

		$this->validate($request,[
    		'name' => 'required',
    		'generation' => 'required',
    		'destination' => 'required',
        'email' => 'required',
        'facebook' => 'required',
        	'profile_pic' => 'required'


    	]);
    	//สิ่งที่เรียกจะมีค่าอะไร ระบุตรงนี้
    	$profiles = new Profile;
    	$profiles->name = $request->input('name');
    	$profiles->user_id = Auth::user()->id;
    	$profiles->generation = $request->input('generation');
    	$profiles->destination = $request->input('destination');
      $profiles->email = $request->input('email');
      $profiles->facebook = $request->input('facebook');

    	if(Input::hasFile('profile_pic'))
    		{
    			$file = Input::file('profile_pic');
    			$file->move(public_path(). '/uploads/', $file->
    				getClientOriginalName());
    			 /*อย่าลืมต้องสร้าง floder uploads ใน public ก่อน */
    			$url = URL::to("/"). '/uploads/'.$file->getClientOriginalName();


    		}
    	$profiles->profile_pic = $url;
 		$profiles->save();
 		return redirect('/profileme')->
 		with('response','การเพิ่มโปร์ไฟล์สำเร็จ');

 	}
}
