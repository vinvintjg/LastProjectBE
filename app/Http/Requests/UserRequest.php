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
            'name' => 'required|string|min:3|max:40',
            'notlp' => 'required|regex:/^(08)/|string',
            'addres' => 'required|string|min:10|max:100',
            'poscode' => 'required|min:5|max:5',
            'qty' => 'required|min:1|integer',
        ];
    }
}
