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
           'age' => 'numeric|hello',
       ];
    }

    public function messages()
    {
        return [
           'name.required' => '名前は必ず入力して下さい。',
           'mail.email'  => 'メールアドレスが必要です。',
           'age.numeric' => '年齢を整数で記入下さい。',
           'age.hello' => 'Hello! 入力は偶数のみ受け付けます。',
       ];
    }
}
