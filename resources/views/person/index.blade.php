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
            <th>Boards</th>
        </tr>
        {{--        @foreach($items as $item)--}}
        @foreach($hasItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>

                {{--                <td>--}}
                {{--                    @if($item->board !== null)--}}
                {{--                        {{$item->board->getData()}}--}}
                {{--                    @endif--}}
                {{--                </td>--}}
                {{--                <td>--}}
                {{--                    @if($item->boards !== null)--}}
                {{--                        <table width="100%">--}}
                {{--                            @foreach($item->boards as $obj)--}}
                {{--                                <tr>--}}
                {{--                                    <td>{{$obj->getData()}}</td>--}}
                {{--                                </tr>--}}
                {{--                            @endforeach--}}
                {{--                        </table>--}}
                {{--                    @endif--}}
                {{--                </td>--}}

                <td>
                    <table width="100%">
                        @foreach($item->boards as $obj)
                            <tr>
                                <td>{{ $obj->getData()  }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
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


    <div style="margin: 10px;"></div>
    <table>
        <tr>
            <th>Person</th>
        </tr>

        @foreach($noItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>



    <?php dd($person); ?>

@endsection

@section('footer')
    copyright 2019 test.
@endsection
