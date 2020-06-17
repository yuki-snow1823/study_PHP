@extends('layouts.default')
<!-- 使う宣言 -->

{{--
@section('title')
Blog Posts
@endsection
--}}

@section('title', 'Blog Posts')
<!-- yieldのtitleとして何を入れるか -->

@section('content')
<h1>Blog Posts</h1>
<ul>
  @forelse ($posts as $post)
  <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection
<!-- ここまでがまとまり -->
