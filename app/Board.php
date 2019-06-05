<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    // ブラックリスト。指定したカラムのみ、値が代入されない。
    protected $guarded = ['id'];

    // バリデーションルール
    public static $rules = [
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person()
    {
        return $this->belongsTo('App\Person');
    }


    /**
     * id:title
     * @return string
     */
    public function getData()
    {
        // return $this->id . ': ' . $$this->person->name;

        // Boardからperonを取り出す
        // return $this->id . ': ' . $this->title . '（' . $this->person->name . '）';

        // Boardからperonを取り出す optinalヘルパー関数 personがなければnullで返す
        return $this->id . ': ' . $this->title . '（' . optional($this->person)->name . '）';
    }


}
