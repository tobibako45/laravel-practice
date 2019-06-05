@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    {{--    <table>--}}
    {{--        <tr>--}}
    {{--            <th>Data</th>--}}
    {{--        </tr>--}}
    {{--        {{dd($items)}}--}}
    {{--        @foreach($items as $item)--}}
    {{--            <tr>--}}
    {{--                <td>{{$item->getData()}}</td>--}}
    {{--            </tr>--}}
    {{--        @endforeach--}}
    {{--    </table>--}}


    <table>
        <tr>
            <th>Massage</th>
            <th>Name</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{$item->person->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2019 test.
@endsection
