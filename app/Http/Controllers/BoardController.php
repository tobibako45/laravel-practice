<?php

namespace App\Http\Controllers;

use App\Board;
use DemeterChain\B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        // 全件取得
        // $items = Board::all();
        // return view('board.index', ['items' => $items]);

        // withを使う
        $items = Board::with('person')->get();
        return view('board.index', ['items' => $items]);

    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        // モデルからルールを設定
        $this->validate($request, Board::$rules);
        // インスタンス生成
        $board = new Board();
        // フォームの値を全部代入
        $form = $request->all();
        // _tokenを削除
        unset($form['_token']);
        // fillで配列の値をモデルのプロパティに代入して、saveで保存
        $board->fill($form)->save();
        return redirect('/board');
    }
}
