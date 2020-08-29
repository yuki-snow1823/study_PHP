<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
           'name' => $request->name,
           'mail' => $request->mail,
           'age' => $request->age,
       ]; //リクエストのをとる
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/hello');
    }
}
