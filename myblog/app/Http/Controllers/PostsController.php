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

    // implisitbindingという、自動でidを引っ張ってくれる仕組み
    public function show(Post $post) {
      // $post = Post::find($id);
      // idがなかったら失敗
    //   $post = Post::findOrFail($id);
      return view('posts.show')->with('post', $post);
    }

    public function create() {
      return view('posts.create');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'title' => 'required|min:3',
        'body' => 'required'
      ]);
      $post = new Post();
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit')->with('post', $post);
    }
    
    public function update(Request $request, Post $post) {
      $this->validate($request, [
        'title' => 'required|min:3',
        'body' => 'required'
      ]);
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect('/');
    }
}
