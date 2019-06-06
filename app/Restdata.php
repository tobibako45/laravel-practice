<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    // テーブル名を指定するためのメンバ変数
    protected $table = 'restdate';

    // ブラックリスト 変更したくないもの
    protected $guarded = ['id'];

    // バリデーションのルール
    public static $rules = [
        'message' => 'required',
        'url' => 'required',
    ];

    // IDとmessageとurlを出力するためのメソッド
    public function getData()
    {
        return $this->id . ':' . $this->message . '(' . $this->url . ')';
    }

}
