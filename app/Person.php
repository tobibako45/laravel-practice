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
}
