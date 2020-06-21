@extends('layouts.default')  {{-- 共通部分を使う宣言 --}}
<!-- 使う宣言 -->

{{--
@section('title')
Blog Posts
@endsection
--}}

@section('title', 'Blog Posts')
<!-- yieldのtitleとして何を入れるか -->

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
  Blog Posts
</h1>

<ul>
  @forelse ($posts as $post)
  <li>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
</li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection
<!-- ここまでがまとまり -->
