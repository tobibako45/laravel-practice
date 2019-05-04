<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * ハンドルメソッド
     * Handle an incoming request.着信要求を処理します。
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     // 実行する処理
    //
    //     $data = [
    //         ['name' => 'taro', 'mail' => 'taro@yamada'],
    //         ['name' => 'hanako', 'mail' => 'hanako@flower'],
    //         ['name' => 'sachiko', 'mail' => 'sachiko@happy']
    //     ];
    //
    //     // $request->meage(配列);
    //     // フォームなどに送られる値(inputの値)に新たな値を追加するもの。これにより、dataという項目で$dataの内容が追加されます。
    //     // コントローラ側では、$request->dataでこの値を取り出すことができます。
    //     $request->merge(['data' => $data]);
    //     return $next($request);
    // }


    /**
     * 後処理版
     *
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $nextを実行し、結果を$responseに代入
        // これで、コントローラのアクションが実行され、その結果をレスポンスが変数$responseに収められる。
        // このレスポンスを使って処理を行う。
        $response = $next($request);

        // まず、レスポンスから返されるコンテンツを取得する
        // $responseの$contentメソッドで、レスポンスに設定されているコンテンツが取得できます。
        // これは送り返されるHTMLソースコードのテキストが入ってる。
        $content = $response->content();

        // ここから、<middleware>というタグを正規表現で置換する。
        // <middleware>○○</middleware>というタグを<a href="http://○○">○○</a>に置換する処理。
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        // レスポンスへのコテテンツ設定は、setContentというメソッドを使う。これでクライアントに返送されるコンテンツが変更される。
        $response->setContent($content);
        // レスポンスをreturnすれば終了。
        return $response;

    }

}
