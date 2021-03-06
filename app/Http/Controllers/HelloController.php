<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// Auth認証のため追記
use Illuminate\Support\Facades\Auth;

// フォームリクエストの追加
use App\Http\Requests\HelloRequest;

// バリデータに使う
use Validator;

// DBクラスの利用
use Illuminate\Support\Facades\DB;


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

    /** 普通 */
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


    /** 任意パラメーター */
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


    /** 複数アクション */
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


    /** シングルアクション */
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


    /** リクエストとレスポンス */
//     public function index(Request $request, Response $response)
//     {
//
//         $html = <<<EOF
// <html>
// <head>
// <tltle>Hello/Index</tltle>
// <style>
// body {font-size: 16pt; color: #999;}
// h1 {font-size: 120pt; text-align: right; color: #fafafa;
// margin:  -50px 0 -12px 0;}
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//
//         $response->setContent($html);
//         return $response;
//     }


    /** コントローラでviewする場合 */
//     public function index()
//     {
//         return view('hello.index');
//     }

    /** 値をテンプレートに渡す */
//     public function index()
//     {
//         $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
//         return view('hello.index', $data);
//     }


    /** ルートパラメータをテンプレートに渡す */
    // public function index($id = 'zero')
    // {
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。',
    //         'id' => $id
    //     ];
    //     return view('hello.index', $data);
    // }


    /**  クエリー文字列 */
    // public function index(Request $request)
    // {
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。',
    //         'id' => $request->id
    //     ];
    //     return view('hello.index', $data);
    // }


    /** Bladeを使う */
    // public function index()
    // {
    //     $data = [
    //         'msg' => 'これはBladeを利用したサンプルです。'
    //     ];
    //     return view('hello.index', $data);
    // }

    /** フォーム */
    // public function index()
    // {
    //
    //     $data = [
    //         'msg' => 'お名前を入力してください。',
    //     ];
    //     return view('hello.index', $data);
    // }
    //
    // public function post(Request $request)
    // {
    //     $msg = $request->msg;
    //     $data = [
    //         'msg' => 'こんにちわ' . $msg . 'さん',
    //     ];
    //     return view('hello.index', $data);
    // }


    /** if */
    // public function index()
    // {
    //     return view('hello.index', ['msg' => '']);
    // }
    //
    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }

    /** isset */
    // public function index()
    // {
    //     // return view('hello.index', ['msg' => '']);
    //     // テンプレート側で@issetするから、値をわたさなくてよい
    //     return view('hello.index');
    // }
    //
    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }


    /** @foreach */
    // public function index()
    // {
    //     $data = ['one', 'two', 'three', 'four', 'five'];
    //     return view('hello.index', ['data' => $data]);
    // }


    /** @each */
    // public function index()
    // {
    //     $data = [
    //         ['name' => '山田たろう', 'mail' => 'taro@yamada'],
    //         ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
    //         ['name' => '鈴木さちこ', 'mail' => 'sachiko@happy'],
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }


    // public function index()
    // {
    //     return view('hello.index', ['message' => 'Heeeeeeeeeeeeello!']);
    // }


    /** ミドルウェアの利用。前処理 */
    // HelloMiddleware.phpで、$request->dataに配列を代入して、ここで取り出してる。
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['data'=>$request->data]);
    // }


    /** ミドルウェアの利用。後処理。*/
    // public function index(Request $request)
    // {
    //     return view('hello.index');
    // }


    /** validateの利用 GET */
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['msg' => 'フォームを入力']);
    // }
    //
    // // POST
    // // public function post(Request $request)
    // public function post(HelloRequest $request)
    // {
    //     // $validateメソッドの書き方
    //     // $validate_rule = [
    //     //     'name' => 'required',
    //     //     'mail' => 'email',
    //     //     'age' => 'numeric|between:0,150',
    //     // ];
    //     // $this->validate($request, $validate_rule);
    //
    //
    //     // フォームリクエストにバリデーションを移動した。
    //     // その際に、useを追加。
    //     // use App\Http\Requests\HelloRequest;
    //
    //     return view('hello.index', ['msg' => '正しく入力されました！',]);
    // }


    /**  バリデータの作成 */
    // フォーム以外の値をチェック
    // GETのクエリー文字列をバリデータでチェック
    // public function index(Request $request)
    // {
    //     $validator = Validator::make($request->query(), [
    //         'id' => 'required',
    //         'pass' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         $msg = 'クエリーに問題があります。';
    //     } else {
    //         $msg = 'ID/PASSを受け付けました。フォームを入力して下さい。';
    //     }
    //
    //     return view('hello.index', ['msg' => $msg]);
    // }
    //
    // // POST
    // // use Validator;を追記
    // public function post(Request $request)
    // {
    //     // makeメソッドで、Validatorインスタンスを作成。
    //     // $request->all() 全入力を「配列」として受け取る
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ]);
    //
    //     if ($validator->fails()) {
    //         return redirect('/hello')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    //
    //     return view('hello.index', ['msg' => '正しく入力されました！',]);
    // }


    /** バリデータでエラーメッセージをカスタマイズ */
    // public function index()
    // {
    //     return view('hello.index', ['msg' => 'フォームを入力']);
    // }
    //
    //
    // public function post(Request $request)
    // {
    //     $rules = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ];
    //
    //     $messages = [
    //         'name.required' => '名前は必ず入力して下さい。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢は整数で記入して下さい。',
    //         'age.between' => '年齢は0〜150の間で入力して下さい。',
    //     ];
    //
    //     // 第1引数 $request->all() 全入力を「配列」として受け取る
    //     // 第2引数 検証ルールの情報が配列にまとめたもの
    //     // 第3引数 エラーメッセージの配列
    //     $validator = Validator::make($request->all(), $rules, $messages);
    //
    //     if ($validator->fails()) {
    //         return redirect('/hello')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    //
    //     return view('hello.index', ['msg' => '正しく入力されました']);
    // }


    /** 条件に応じてルールを追加する */
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['msg' => 'フォームを入力']);
    // }
    //
    // public function post(Request $request)
    // {
    //     $rules = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric',
    //     ];
    //
    //     $messages = [
    //         'name.required' => '名前は必ず入力して下さい。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢は整数で記入して下さい。',
    //         'age.min' => '年齢はゼロ歳以上で入力して下さい。',
    //         'age.max' => '年齢は200歳以下で入力して下さい。',
    //     ];
    //
    //     // Validatorのインスタンスを作成
    //     $validator = Validator::make($request->all(), $rules, $messages);
    //
    //     // sometimesメソッドで独自ルール設定 min:0
    //     $validator->sometimes('age', 'min:0', function ($input) {
    //         return !is_int($input->age);
    //     });
    //
    //     // sometimesメソッドで独自ルール設定 max:200
    //     $validator->sometimes('age', 'max:200', function ($input) {
    //         return !is_int($input->age);
    //     });
    //
    //     // fails()メソッドでバリデーションチェック
    //     if ($validator->fails()) {
    //         return redirect('/hello')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    //
    //     return view('hello.index', ['msg' => '正しく入力されました！']);
    // }


    // /** オリジナル・バリデータ */
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['msg' => '入力して下さい']);
    // }
    //
    // // フォームリクエストにバリデーション HelloRequest
    // public function post(HelloRequest $request)
    // {
    //     return view('hello.index', ['msg' => '正しく入力されました']);
    // }


    /** cookieの利用
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function index(Request $request)
    // {
    //     if ($request->hasCookie('msg')) {
    //         $msg = 'Cookie: ' . $request->cookie('msg');
    //     } else {
    //         $msg = '※クッキーはありません。';
    //     }
    //
    //     return view('hello.index', ['msg' => $msg]);
    // }
    //
    /**
     * @param Request $request
     * @return Response
     */
    // public function post(Request $request)
    // {
    //     $validate_rule = [
    //         'msg' => 'required',
    //     ];
    //
    //     // msgにバリデーションを設定
    //     $this->validate($request, $validate_rule);
    //     // $msgに格納
    //     $msg = $request->msg;
    //
    //     // responseインスタンスを作成。
    //     // Viewを引数に指定。
    //     $response = new Response(view('hello.index', ['msg' => '「' . $msg . '」をクッキーに保存しました。']));
    //
    //     // responseのcookieメソッドを呼び出して、$msgをクッキーに保存
    //     $response->cookie('msg', $msg, 100);
    //     // それをreturn
    //     return $response;
    //
    //     // これで作成したレスポンスがクライアントに返され、クッキーが保存される。
    //     // クッキーはクライアントの保存されるものだから、
    //     // クッキーを設定したレスポンスをクライアントに返さないと保存されない。
    // }


    /** DBクラスの利用 */

    /** 普通 */
    // public function index(Request $request)
    // {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['items' => $items]);
    // }


    /** パラメータ結合の利用
     * /hello?id=番号 クエリ文字でアクセス
     */
    // public function index(Request $request)
    // {
    //     if (isset($request->id)) {
    //         $param = ['id' => $request->id];
    //         $items = DB::select('select * from people where id = :id', $param);
    //     } else {
    //         $items = DB::select('select * from people');
    //     }
    //
    //     return view('hello.index', ['items' => $items]);
    // }
    //
    // public function post(Request $request)
    // {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['items' => $items]);
    // }
    //
    //
    // /** 新規作成ページ */
    // public function add(Request $request)
    // {
    //     return view('hello.add');
    // }
    //
    // /** 登録 */
    // public function create(Request $request)
    // {
    //     // $paramに、送信フォームの値を保管。
    //     $param = [
    //         'name' => $request->name,
    //         'mail' => $request->mail,
    //         'age' => $request->age,
    //     ];
    //
    //     // 配列をパラメータ引数にして、DB::insertを呼び出し実行
    //     // :nameとかはプレースホルダ
    //     // 第２引数の$paramではめ込む
    //     DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
    //
    //     // /helloにリダイレクト
    //     return redirect('/hello');
    // }
    //
    // /** 更新ページ
    //  * /hello/edit?id=6
    //  */
    // public function edit(Request $request)
    // {
    //     $param = ['id' => $request->id];
    //     $item = DB::select('select * from people where id = :id', $param);
    //
    //     return view('hello.edit', ['form' => $item[0]]);
    // }
    //
    // /** 更新 */
    // public function update(Request $request)
    // {
    //     $param = [
    //         'id' => $request->id,
    //         'name' => $request->name,
    //         'mail' => $request->mail,
    //         'age' => $request->age,
    //     ];
    //
    //     DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
    //
    //     return redirect('/hello');
    // }
    //
    //
    // /** 削除ページ */
    // public function del(Request $request)
    // {
    //     $param = ['id' => $request->id];
    //     $item = DB::select('select * from people where id = :id', $param);
    //
    //     return view('hello.del', ['form' => $item[0]]);
    // }
    //
    // /** 削除 */
    // public function remove(Request $request)
    // {
    //     $param = ['id' => $request->id];
    //     DB::delete('delete from people where id =:id', $param);
    //     return redirect('/hello');
    // }


    /** クエリビルダの利用 */

    public function index(Request $request)
    {
        // DB::tableは指定したテーブルのビルダを取得する。
        // get()はビルダのメソッド
        // $items = DB::table('people'    public function index(Request $request)
        //     {
        //         // DB::tableは指定したテーブルのビルダを取得する。
        //         // get()はビルダのメソッド
        //         // $items = DB::table('people')->get();
        //         // return view('hello.index', ['items' => $items]);
        //
        //
        //         // orderBy
        //         // $items = DB::table('people')->orderBy('age', 'desc')->get();
        //         // return view('hello.index', ['items' => $items]);
        //
        //         // simplePaginate
        //         $items = DB::table('people')->simplePaginate(5);
        //         return view('hello.index', ['items' => $items]);
        //     })->get();
        // return view('hello.index', ['items' => $items]);


        // orderBy
        // $items = DB::table('people')->orderBy('age', 'desc')->get();
        // return view('hello.index', ['items' => $items]);


        // simplePaginate DBクラス版
        // $items = DB::table('people')->simplePaginate(5);
        // return view('hello.index', ['items' => $items]);

        // simplePaginate モデルクラス版
        // $items = Person::simplePaginate(2);
        // return view('hello.index', ['items' => $items]);


        // simplePaginate sort版
        // $sort = $request->sort;
        // $items = Person::orderBy($sort, 'asc')->simplepaginate(5);

        // paginateに変更
        // $items = Person::orderBy($sort, 'asc')->paginate(5);
        // $param = ['items' => $items, 'sort' => $sort];
        // return view('hello.index', $param);


        // Auth認証
        // ユーザーのモデルインスタンス ログインしてなければnull
        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('hello.index', $param);


    }


    public function show(Request $request)
    {
        // パラメータのidを取得
        // $id = $request->id;

        // whereはSQLのwhereに相当

        // firstは、最初のレコード
        // $item = DB::table('people')->where('id', $id)->first();
        // return view('hello.show', ['item' => $item]);


        // IDが５以上を全部
        // $items = DB::table('people')->where('id', '<=', $id)->get();
        // return view('hello.show', ['items' => $items]);


        // orWhere nameとmailから検索する
        // $name = $request->name;
        // $items = DB::table('people')
        //     ->where('name', 'like', '%' . $name . '%')
        //     ->orWhere('mail', 'like', '%' . $name . '%')
        //     ->get();
        //
        // return view('hello.show', ['items' => $items]);


        // whereRaw
        // $min = $request->min;
        // $max = $request->max;
        // $items = DB::table('people')
        //     ->whereRaw('age >= ? and age <= ?', [$min, $max])
        //     ->get();
        // return view('hello.show', ['items' => $items]);


        // offsetとlimit
        $page = $request->page;
        $items = DB::table('people')
            ->offset($page * 3)
            ->limit(3)
            ->get();
        return view('hello.show', ['items' => $items]);

    }


    /** 新規追加 クエリビルダ */
    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($param);

        return redirect('/hello');
    }


    /** 更新 クエリビルダ */
    public function edit(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
            ->where('id', $request->id)// 絞り込み
            ->update($param); // 更新

        return redirect('/hello');
    }


    /** 削除 クエリビルダ */
    public function del(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
            ->where('id', $request->id)->delete(); // 絞り込み 削除
        return redirect('/hello');
    }


    /** Rest */
    public function rest(Request $request)
    {
        return view('hello.rest');
    }


    /** セッション
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function session_get(Request $request)
    {
        $session_data = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $session_data]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function session_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }


    /** Auth認証（自作） */
    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください！！'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました！！' . Auth::user()->name;
        } else {
            $msg = 'ログインに失敗しました！！！';
        }

        return view('hello.auth', ['message' => $msg]);
    }

}
