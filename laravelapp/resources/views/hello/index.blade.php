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
  
   @component('components.message')
   {{-- しっかり覚えるslot --}}
       @slot('msg_title') 
       {{-- msg_titleという変数にcautionが入る！ --}}
       CAUTION!!
       @endslot

       @slot('msg_content')
       これはメッセージの表示です。
       @endslot
   @endcomponent

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
