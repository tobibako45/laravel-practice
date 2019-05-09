<?php

namespace App\Http\Validators;
// Validatorを読み込み
use Illuminate\Validation\Validator;

// Validatorクラスを継承
class HelloValidator extends Validator
{
    // これで、'hello'というルールを追加
    public function validateHello($attribute, $value, $parameters)
    {
        // 入力された値が偶数ならtrue、奇数ならfalseを返すルール
        return $value % 2 == 0;
    }
}
