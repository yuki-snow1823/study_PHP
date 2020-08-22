<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider // 拡張している
{
    public function boot()
    {
        View::composer(
            'hello.index',
            'App\Http\Composers\HelloComposer'
        );
    }
}
