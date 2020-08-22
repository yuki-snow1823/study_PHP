<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index');
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
