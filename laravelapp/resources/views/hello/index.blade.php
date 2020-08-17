@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   {{-- 親の要素も表示したい --}}
   インデックスページ
@endsection

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
