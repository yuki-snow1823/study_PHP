@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   {{-- 親の要素も表示したい --}}
   インデックスページ
@endsection

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
   <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
