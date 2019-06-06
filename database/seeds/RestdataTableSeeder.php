<?php

use Illuminate\Database\Seeder;
// Restdataモデルの読み込み
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // google
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdate = new Restdata();
        $restdate->fill($param)->save();

        // Yahoo
        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdate = new Restdata();
        $restdate->fill($param)->save();

        // MSN
        $param = [
            'message' => 'MSN Japan',
            'url' => 'https://www.msn.com/ja-jp',
        ];
        $restdate = new Restdata();
        $restdate->fill($param)->save();

    }
}
