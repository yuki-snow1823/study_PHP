@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   {{-- 親の要素も表示したい --}}
   インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>name: </th><td><input type="text" 
            name="name" value="{{old('name')}}"></td></tr>
        @error('mail')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>mail: </th><td><input type="text" 
            name="mail" value="{{old('mail')}}"></td></tr>
        @error('age')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>age: </th><td><input type="text" 
            name="age" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send">
        </td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
