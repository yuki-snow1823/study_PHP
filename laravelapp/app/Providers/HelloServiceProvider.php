<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider // 拡張している
{
    public function boot() // bootに書くパターン
    {
        View::composer( //ビューコンポーザーの作成
            'hello.index',
            function ($view) {
               $view->with('view_message', 'composer message!');
           }
        );
    }
}
