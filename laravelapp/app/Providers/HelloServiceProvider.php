<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HelloValidator;


class HelloServiceProvider extends ServiceProvider // 拡張している
{
public function boot()
{
   $validator = $this->app['validator'];
   $validator->resolver(function($translator, $data, 
          $rules, $messages) {
       return new HelloValidator($translator, $data, 
             $rules, $messages);
   });
}
}
