<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() ==  'hello') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
           'name' => 'required',
           'mail' => 'email',
           'age' => 'numeric|between:0,150',
       ];
    }

    public function messages()
    {
    return [
        // エラーメッセージが吐く内容を変更

        'name.required' => '名前は必ず入力して下さい。',
        'mail.email'  => 'メールアドレスが必要です。',
        'age.numeric' => '年齢を整数で記入下さい。',
        'age.between' => '年齢は０～150の間で入力下さい。',
    ];
    }
}
