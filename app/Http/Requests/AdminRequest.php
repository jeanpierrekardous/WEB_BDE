<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'firstname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'role' => 'required',
            'password' => 'required|alpha_num|confirmed|regex:^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$^',
            'password_confirmation' => 'required|alpha_num'
        ];
    }
}
