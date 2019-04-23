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


    public function index(Request $request, Response $response)
    {

        $html = <<<EOF
<html>
<head>
<tltle>Hello/Index</tltle>
<style>
body {font-size: 16pt; color: #999;}
h1 {font-size: 120pt; text-align: right; color: #fafafa;
margin:  -50px 0 -12px 0;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;


    }


}
