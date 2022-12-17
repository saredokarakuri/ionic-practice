<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required | email | unique:users,email',
            'password' => 'required',
        ];
    }

    /**
     * Get error message for defined validation rule.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名前が入力されていません。',
            'email.required' => 'メールアドレスが入力されていません。',
            'email.email'  => 'メールアドレスの形式が間違っています.',
            'email.unique'  => '既に登録されたユーザーです。',
            'password.required' => 'パスワードが入力されていません。'
        ];
    }
}
