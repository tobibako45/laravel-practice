<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if ($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        // HelloValidatorを利用する
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|hello' // ここに'hello'のルールを追加
        ];

        /** 普通のやつ */
        // return [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,15'
        // ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        // HelloValidatorのルール追加
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入して下さい。',
            // 'hello'のルールの追加
            'age.hello' => 'HelloValidatorからよ! 入力は偶数のみ受け付けます。',
        ];


        /** 普通のやつ */
        // return [
        //     'name.required' => '名前は必ず入力してください。',
        //     'mail.email' => 'メールアドレスが必要です。',
        //     'age.numeric' => '年齢を整数で記入して下さい。',
        //     'age.between' => '年齢は0〜150の間で入力して下さい。',
        // ];
    }
}
