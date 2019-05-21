<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        // peopleテーブルの全レコードを取得してる
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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


    /**
     * @param Request $request
     */
    public function add(Request $request)
    {
        return view('person.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        // バリデーションの実行
        $this->validate($request, Person::$rules);
        // Personインスタンスの作成
        $person = new Person;

        // 値を用意
        $form = $request->all();
        // 「_token」フィールドだけunsetで削除
        // CSRF用非表示フィールドの項目は、テーブルにないので、予め削除。
        unset($form['_token']);

        // インスタンスに値を設定して保存
        $person->fill($form)->save();

        return redirect('/person');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        // getパラメータ（id=番号）で、検索
        $person = Person::find($request->id);
        // viewに、取得したたインスタンスを渡す
        return view('person.edit', ['form' => $person]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        // バリデーション
        $this->validate($request, Person::$rules);
        // 検索 $request->idでhiddenのidフォームの値を取得
        $person = Person::find($request->id);
        // $formに、フォームからの値を全部格納
        $form = $request->all();
        // 「_token」フィールドの値は削除
        unset($form['_token']);
        // fillで配列の値をモデルのプロパティに代入して、saveで保存
        $person->fill($form)->save();
        // /personにリダイレクト
        return redirect('/person');
    }


}
