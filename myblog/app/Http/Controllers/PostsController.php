<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        // 名前の指定
      return view('posts.index');
    }
}
