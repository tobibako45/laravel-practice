<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     * ブートストラップ処理（わかりやすく言えば、アプリケーションが起動する際に割り込んで実行される処理
     */

    public function boot()
    {
        // /helloのindexビューに「view_message」という値を設定する処理を作成している。
        View::composer(
            'hello.index', function ($view) {
            $view->with('view_message', 'composer message!');
        }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     * 必要なサービスの登録を行うためのもの
     */
    public function register()
    {
        //
    }
}
