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
        // View::composer(ビューの指定, 関数またはクラス);
        // View::composer(
        //     // 第１引数に /helloのindexビューを指定
        //     'hello.index',
        //     // 第２引数に、クロージャを指定
        //     // $viewは、Illuminate\Support\Facadesの名前空間にあるViewクラスのインスタンス。これがビューを管理するオブジェクトになる。
        //     function ($view) {
        //         // withは、ビューに変数などを追加するためもの。
        //         // $view->with(変数名, 値);
        //     $view->with('view_message', 'ビューコンポーザからのmessage!');
        // }
        // );

        // View::composer(
        //     'hello.index', function ($view) {
        //     $view->with('view_message', 'ビューコンポーザからのmessage!');
        // }
        // );


        // ビューコンポーザクラスを利用する場合は、ViewComposerメソッドの第２引数に、呼び出しクラス名をテキスト値で指定する。
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
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
