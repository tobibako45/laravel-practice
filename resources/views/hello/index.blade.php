{{--レイアウトを継承--}}

{{--helloapp.blade.phpを継承しますよ--}}
@extends('layouts.helloapp')

{{--@yield('title')に出るよ--}}
@section('title', 'Indexだよ')

@section('menubar')
    @parent
    インデックスページさささ
@endsection

@section('content')
    <p>ここが本文コンテンツ</p>

    {{--    ミドルウェア 後処理--}}
    <p>これは、
        <middleware>google.com</middleware>
        へのリンクです
    </p>
    <p>これは、
        <middleware>yahoo.co.jp</middleware>
        へのリンクです
    </p>


    {{-- ミドルウェアの利用 前処理--}}
    {{--    <table>--}}
    {{--        @foreach($data as $item)--}}
    {{--            <tr>--}}
    {{--                <th>{{$item['name']}}</th>--}}
    {{--                <td>{{$item['mail']}}</td>--}}
    {{--            </tr>--}}
    {{--        @endforeach--}}
    {{--    </table>--}}


    {{-- ビューコンポーザ--}}
    {{--    <p>Controllerからのvalue<br>'message' = {{$message}}</p>--}}
    {{--    <p>ViewComposerからのvalue<br>'view_message' = {{$view_message}}</p>--}}


    {{--    @each('components.item', $data, 'item')--}}


    {{--    コンポーネント--}}
    {{--    @component('components.message')--}}
    {{--        @slot('msg_title')--}}
    {{--            CAUTION!--}}
    {{--        @endslot--}}

    {{--        @slot('msg_content')--}}
    {{--            これはメッセージの表示です。--}}
    {{--        @endslot--}}
    {{--    @endcomponent--}}

    {{--サブビュー--}}
    {{--    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])--}}


@endsection


@section('footer')
    copyright 2019 ore.
@endsection



{{--<html>--}}
{{--<head>--}}
{{--    <title>Hello/Index</title>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-size: 16pt;--}}
{{--            color: #999;--}}
{{--        }--}}

{{--        h1 {--}}
{{--            font-size: 50pt;--}}
{{--            text-align: right;--}}
{{--            color: #f6f6f6;--}}
{{--            margin: -20px 0 -30px 0;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Blade/Index</h1>--}}


{{--@if ($msg != '')--}}
{{--    <p>こんにちわ、{{$msg}}さん。</p>--}}
{{--@else--}}
{{--    <p>何か書いてください。</p>--}}
{{--@endif--}}


{{--@isset($msg)--}}
{{--    <p>こんにちわ、{{$msg}}さん。</p>--}}
{{--@else--}}
{{--    <p>何か書いてください。</p>--}}
{{--@endisset--}}

{{--<p>foreachディレクティブの例</p>--}}
{{--<ol>--}}
{{--    @foreach($data as $item)--}}
{{--        <li>{{$item}}</li>--}}
{{--    @endforeach--}}
{{--</ol>--}}


{{--<p>forディレクティブの例</p>--}}
{{--<ol>--}}
{{--    @for($i=1; $i<100; $i++)--}}
{{--        @if($i % 2 == 1)--}}
{{--            @continue--}}
{{--        @elseif($i <= 10)--}}
{{--            <li>No, {{$i}}--}}
{{--        @else--}}
{{--            @break--}}
{{--        @endif--}}
{{--    @endfor--}}
{{--</ol>--}}


{{--$loopの例--}}
{{--<p>foreachディレクティブの例</p>--}}
{{--<ol>--}}
{{--    @foreach($data as $item)--}}
{{--        @if($loop->first)--}}
{{--            <p>※データ一覧</p>--}}
{{--            <ul>--}}
{{--        @endif--}}
{{--                <li>No, {{$loop->iteration}}. {{$item}}</li>--}}

{{--        @if($loop->last)--}}
{{--            </ul>--}}
{{--            <p>--ここまで</p>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</ol>--}}


{{--$loopの例--}}
{{--<p>whileディレクティブの例</p>--}}
{{--<ol>--}}
{{--    @php--}}
{{--        $counter = 0;--}}
{{--    @endphp--}}

{{--    @while( $counter < count($data) )--}}
{{--        <li>{{ $data[$counter] }}</li>--}}
{{--        @php--}}
{{--            $counter++;--}}
{{--        @endphp--}}

{{--    @endwhile--}}
{{--</ol>--}}


{{--<form action="/hello" method="POST">--}}
{{--    {{ csrf_field() }}--}}
{{--    <input type="text" name="msg">--}}
{{--    <input type="submit">--}}
{{--</form>--}}

{{--</body>--}}

{{--</html>--}}
