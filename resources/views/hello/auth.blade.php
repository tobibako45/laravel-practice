{{--レイアウトを継承--}}

{{--helloapp.blade.phpを継承しますよ--}}
@extends('layouts.helloapp')


{{--@yield('title')に出るよ--}}
@section('title', 'ユーザー認証（自作）')

@section('menubar')
    @parent
    ユーザー認証（自作）
@endsection

@section('content')

    <p>{{$message}}</p>

    <table>
        <form action="/hello/auth" method="post">
            {{csrf_field()}}
            <tr>
                <th>mail:: </th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>password:: </th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th> </th>
                <td><input type="submit" name="send"></td>
            </tr>
        </form>
    </table>

@endsection


@section('footer')
    copyright 2019 ore.
@endsection

