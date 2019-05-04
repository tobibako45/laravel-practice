<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
// ミドルウェアの実行のため追記
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// $html = <<<EOF
// <html>
// <head>
// <tltle>Hello</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -40px 0px -50px 0;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//
// Route::get('hello', function () use ($html) {
//     return $html;
// });


// Route::get('hello/{msg}', function ($msg) {
//
// $html = <<<EOF
// <html>
// <head>
// <tltle>Hello</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -40px 0px -50px 0;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//
//     return $html;
// });


// 任意パラメーター
// Route::get('hello/{msg?}', function ($msg='no message.') {
//
//     $html = <<<EOF
// <html>
// <head>
// <tltle>Hello</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 100pt; text-align: right; color: #eee;
// margin:  -40px 0px -50px 0;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//
//     return $html;
// });


// 普通
// Route::get('hello', 'HelloController@index');

// 任意パラメーター
// Route::get('hello/{id?}/{pass?}', 'HelloController@index');

// 複数アクション
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// シングルアクション
// Route::get('hello', 'HelloController');

// requestとresponse /helloにアクセスするとRequest／Responseのプロパティが表示される
// Route::get('hello', 'HelloController@index');


// ルートの設定でテンプレートを表示

// Route::getでviewした場合
// Route::get('hello', function () {
//     return view('hello.index');
// });

// 結果は同じ

// 呼び出されたアクションメソッド内でviewした場合
// Route::get('hello', 'HelloController@index');


// ルートパラメータをテンプレートに渡す

// Route::get('hello/{id?}', 'HelloController@index');

// クエリー文字列を渡す
// Route::get('hello', 'HelloController@index');


// フォーム
// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');


// ミドルウェアを実行。個別の場合
// Route::get('hello', 'HelloController@index')->middleware(HelloMiddleware::class);

// グローバルミドルウェアの場合
// グローバルミドルウェアでは、呼び出しの記述は不要。
Route::get('hello', 'HelloController@index');
