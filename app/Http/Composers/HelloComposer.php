<?php


namespace App\Http\Composers;

// useによるクラスのインポート
// Illuminate\Viewパッケージ内に用意されている「View」を使える状態にしている。
use Illuminate\View\View;


class HelloComposer
{

    /**
     * データをビューと結合
     *ビューがレンダーされる直前に、Illuminate\View\Viewインスタンスに対しコンポーザのcomposeメソッドが呼びだされます。
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {

        $view->with('view_message', 'これはビューコンポーザクラスから呼び出し。ファイル名は' . $view->getName());

    }

}
