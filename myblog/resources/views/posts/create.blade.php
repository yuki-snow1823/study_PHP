@extends('layouts.default')  {{-- 共通部分を使う宣言 --}}

@section('title', 'new Posts')
<!-- yieldのtitleとして何を入れるか -->

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
  Blog Posts
</h1>

<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }} {{-- トークン設定 --}}
  <p>
    <input type="text" name="title" placeholder="enter title">
  </p>
  <p>
    <textarea name="body" placeholder="enter body"></textarea>
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>

@endsection
<!-- ここまでがまとまり -->
