<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Post;
use Auth;

class ProfileMeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('profilemes.profileme');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function profileme()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users')
                    ->join('profiles','users.id','=','profiles.user_id')
                    ->select('users.*','profiles.*')
                    ->where(['profiles.user_id' => $user_id])
                    ->first();

        $posts = Post::all();
        return view('profilemes.profileme',['profile' => $profile,'posts' => $posts ]);
    }
}
