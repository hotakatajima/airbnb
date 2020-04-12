<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['string', 'max:255','nullable'],
            'email' => ['string', 'max:255','nullable'],
            'phone' => ['string', 'max:11','nullable'],
            'description' => ['string', 'max:255','nullable'],
            'password' => ['string', 'min:6', 'confirmed','nullable']
        ];
    }

    public function messages()
    {
        return [
            'name.string'  => '適切な文字を打ち込んでください',
            'email.string'  => '適切な文字を打ち込んでください',
            'phone.string'  => '適切な文字を打ち込んでください',
            'description.string'  => '適切な文字を打ち込んでください',
            'name.max'  => '最大255文字です',
            'email.max'  => '最大255文字です',
            'phone.max'  => '最大11文字です',
            'password.min'  => '最低6文字です',
            'password.confirmed'  => 'パスワードが一致しません',
        ];
    }
}
