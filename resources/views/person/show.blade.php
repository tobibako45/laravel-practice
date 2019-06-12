@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    いんでっくす
@endsection

@section('content')

    <table>
        <tr>
            <th>Person</th>
        </tr>
            <tr>
                <td>{{$person->name}}</td>
            </tr>
    </table>

    <?php dd($person); ?>

@endsection

@section('footer')
    copyright 2019 test.
@endsection
