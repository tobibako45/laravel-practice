<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Person;

class HelloTest extends TestCase
{

    // スタート前にマイグレーションを実行し、テスト終了後にはロールバックして初期状態に戻す、という作業を自動で行ってくれる
    use DatabaseMigrations;

    public function testHello()
    {
        // $this->assertTrue(true);
        //
        // // getアクセスし、responseインスタンスを取得
        // $response = $this->get('/');
        // // ステータスコードが200である
        // $response->assertStatus(200);
        //
        // // getアクセスし、responseインスタンスを取得
        // $response = $this->get('/hello');
        // // ステータスコードが302である
        // $response->assertStatus(302);
        //
        // // ログインするUserモデルのインスタンスを作成
        // $user = factory(User::class)->create();
        // // 指定したUserでログインした状態でアクセス
        // $response = $this->actingAs($user)->get('/hello');
        // // ステータスコードが200である
        // $response->assertStatus(200);
        //
        // // getアクセスし、responseインスタンスを取得
        // $response = $this->get('/no_route');
        // // ステータスコードが404である
        // $response->assertStatus(404);




        /** データベースをテスト */

        // ダミーで利用するデータ
        // 指定した値でレコードを保存する。それ以外はfactoryが設定してくれる
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        // 第二引数にインスタンス数を設定。これなら10個インスタンスが生成される
        factory(User::class, 10)->create();

        // assertDatabaseHasヘルパー
        // データベース内のテーブルに指定のデータが含まれていることを表明します。
        // 第一引数 テーブル名
        // 第二引数 データ配列
        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);



        // ダミーで利用するデータ
        factory(Person::class)->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 123,
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => 123,
        ]);


    }




    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // trueである
        $this->assertTrue(true);

        $arr = [];
        // 配列$arrayが空である
        $this->assertEmpty($arr);

        $msg = "Hello";
        // Helloが$msgと等しい
        $this->assertEquals('Hello', $msg);

        $n = random_int(0, 100);
        // 100 > $n が成立する
        $this->assertLessThan(100, $n);
    }
}
