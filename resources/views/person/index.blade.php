@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    いんでっくす
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach

        {{--        <tr>--}}
        {{--            <th>Name</th>--}}
        {{--            <th>Mail</th>--}}
        {{--            <th>Age</th>--}}
        {{--        </tr>--}}
        {{--        @foreach($items as $item)--}}
        {{--            <tr>--}}
        {{--                <td>{{$item->name}}</td>--}}
        {{--                <td>{{$item->mail}}</td>--}}
        {{--                <td>{{$item->age}}</td>--}}
        {{--            </tr>--}}
        {{--        @endforeach--}}

    </table>

@endsection

@section('footer')
    copyright 2019 test.
@endsection
