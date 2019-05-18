<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // peopleテーブルの全レコードを取得してる
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }


    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        // find
        // $item = Person::find($request->input);

        // where
        // $item = Person::where('name', $request->input)->first();

        // scope name
        // $item = Person::nameEqual($request->input)->first();

        // scope age
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();


        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

}
