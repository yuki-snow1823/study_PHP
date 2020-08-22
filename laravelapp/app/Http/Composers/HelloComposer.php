<?php
namespace App\Http\Composers; // 居場所みたいな感じ？

use Illuminate\View\View; // この中で使うもの

class HelloComposer
{
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "'
            . $view->getName() . '"!!');
    }
}
