<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // middlewareを通過してくるから、値がとれると思われる
        return view('hello.index', ['data'=>$request->data]);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
           'msg'=>'こんにちは、' . $msg . 'さん！',
       ];
        // 送りつつindexのviewにいく
        return view('hello.index', $data);
    }
}
