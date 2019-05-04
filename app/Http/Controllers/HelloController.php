<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


// 複数アクションのやつに使用
// global $head, $style, $body, $end;
//
// $head = '<html><head>';
//
// $style = <<<EOF
// <style>
// body {font-size:16pt; color: #999;}
// h1 {font-size:100pt; test-align:rigth; color:#eee;margin:-40px 0px -50px 0px;}
// </style>
// EOF;
//
// $body = '</head></body>';
//
//
// function tag($tag, $txt)
// {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }


class HelloController extends Controller
{

// 普通
//     public function index()
//     {
//         return <<<EOF
// <html>
// <head>
// <tltle>Hello/Index</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -40px 0px -50px 0;}
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラーのindexアクションです。</p>
// </body>
// </html>
// EOF;
//
//     }


    // 任意パラメーター
//     public function index($id = 'nomane', $pass = 'unknown')
//     {
//
//         return <<<EOF
// <html>
// <head>
// <tltle>Hello/Index</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -40px 0px -50px 0;}
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラーのindexアクションです。</p>
//     <ul>
//     <li>ID: {$id}</li>
//     <li>PASS: {$pass}</li>
// </ul>
// </body>
// </html>
// EOF;
//
//     }


// 複数アクション
    // public function index()
    // {
    //     global $head, $style, $body, $end;
    //
    //     $html = $head . tag('title', 'Hello/Index') . $style . $body
    //         . tag('h1', 'Index') . tag('p', 'this is Index page')
    //         . '<a href="/hello/other">go to Other page</a>'
    //         . $end;
    //     return $html;
    // }
    // public function other()
    // {
    //     global $head, $style, $body, $end;
    //
    //     $html = $head . tag('title', 'Hello/Other') . $style . $body
    //         . tag('h1', 'Other') . tag('p', 'this is Other page')
    //         . '<a href="/hello">go to Index page</a>'
    //         . $end;
    //     return $html;
    //
    // }


// シングルアクション
//     public function __invoke()
//     {
//         return <<<EOF
// <html>
// <head>
// <tltle>Hello/Index</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -15px 0;}
// </style>
// </head>
// <body>
//     <h1>Single Action</h1>
//     <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;
//     }


// リクエストとレスポンス
//     public function index(Request $request, Response $response)
//     {
//
//         $html = <<<EOF
// <html>
// <head>
// <tltle>Hello/Index</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 120pt; text-align: right; color: #fafafa;
// margin:  -50px 0 -12px 0;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//
//         $response->setContent($html);
//         return $response;
//     }


// コントローラでviewする場合
//     public function index()
//     {
//         return view('hello.index');
//     }

// 値をテンプレートに渡す
//     public function index()
//     {
//         $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
//         return view('hello.index', $data);
//     }


// ルートパラメータをテンプレートに渡す
//     public function index($id='zero')
//     {
//         $data = [
//             'msg' => 'これはコントローラから渡されたメッセージです。',
//             'id' => $id
//         ];
//         return view('hello.index', $data);
//     }


// クエリー文字列
//     public function index(Request $request)
//     {
//         $data = [
//             'msg' => 'これはコントローラから渡されたメッセージです。',
//             'id' => $request->id
//         ];
//         return view('hello.index', $data);
//     }


// Bladeを使う
//     public function index()
//     {
//         $data = [
//             'msg' => 'これはBladeを利用したサンプルです。'
//         ];
//         return view('hello.index', $data);
//     }

// フォーム
//     public function index()
//     {
//
//         $data = [
//             'msg' => 'お名前を入力してください。',
//         ];
//         return view('hello.index', $data);
//     }
//
//     public function post(Request $request)
//     {
//         $msg = $request->msg;
//         $data = [
//             'msg' => 'こんにちわ' . $msg . 'さん',
//         ];
//         return view('hello.index', $data);
//     }
//


    // if
    // public function index()
    // {
    //     return view('hello.index', ['msg' => '']);
    // }
    //
    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }

    // isset
    // public function index()
    // {
    //     // return view('hello.index', ['msg' => '']);
    //     // テンプレート側で@issetするから、値をわたさなくてよい
    //     return view('hello.index');
    // }
    //
    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }


    // @foreach
    // public function index()
    // {
    //     $data = ['one', 'two', 'three', 'four', 'five'];
    //     return view('hello.index', ['data' => $data]);
    // }


    // @each
    // public function index()
    // {
    //     $data = [
    //         ['name' => '山田たろう', 'mail' => 'taro@yamada'],
    //         ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
    //         ['name' => '鈴木さちこ', 'mail' => 'sachiko@happy'],
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }


    // public function index()
    // {
    //     return view('hello.index', ['message' => 'Heeeeeeeeeeeeello!']);
    // }


    // ミドルウェアの利用。前処理
    // HelloMiddleware.phpで、$request->dataに配列を代入して、ここで取り出してる。
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['data'=>$request->data]);
    // }


    // ミドルウェアの利用。後処理。
    public function index(Request $request)
    {
        return view('hello.index');
    }











}
