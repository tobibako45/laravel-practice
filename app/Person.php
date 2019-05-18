<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // id,name,ageを文字列にまとめて返す
    public function getData(): string
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }


    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }


    // ageが〜以上
    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    // ageが〜以下
    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

}
