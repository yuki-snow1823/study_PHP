<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
    // 名前の指定
    //   $posts = Post::all();
    //   $posts = Post::orderBy('created_at', 'desc')->get();
      $posts = Post::latest()->get();
    // $posts = [];
    //   dd($posts->toArray());
      return view('posts.index',["posts"=>$posts]);
    }
}
