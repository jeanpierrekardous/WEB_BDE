<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'password' => 'required|alpha_num|confirmed',
            'password_confirmation' => 'required|alpha_num'
        ];
    }
}
