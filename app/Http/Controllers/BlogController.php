<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use App\Category;
use App\Post;
use Auth;

class BlogController extends Controller
{
    public function blog(){

    	 $user_id = Auth::user()->id;
        $profile = DB::table('users')
                    ->join('profiles','users.id','=','profiles.user_id')
                    ->select('users.*','profiles.*')
                    ->where(['profiles.user_id' => $user_id])
                    ->first();

        $posts = Post::paginate(5);
        return view('blogs.blog',['profile' => $profile,'posts' => $posts ]);
    }
}
