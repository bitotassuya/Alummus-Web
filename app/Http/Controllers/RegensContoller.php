<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Category;
use App\Post;
use App\Like;
use App\Dislike;
use App\Profile;
use Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegensContoller extends Controller
{
  public function index(){
      return view ('regens/regens');
  }

}
