<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriteideaRequest extends FormRequest
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
            'nameEvents' => 'required|max:30|alpha_num',
            'description' => 'required|max:254',
            'image' => 'required|image'
        ];
    }
}
