@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   {{-- 親の要素も表示したい --}}
   インデックスページ
@endsection

@section('content')
   {{-- <p>ここが本文のコンテンツです。</p>
   <p>Controller value<br>'message' = {{$message}} こっちはコントローラー</p>
   <p>ViewComposer value<br>'view_message' = {{$view_message}} こっちはサービス機能</p> --}}
   <p>ここが本文のコンテンツです。</p>
   <table>
   @foreach($data as $item)
   <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
