<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'Name' => 'required|string|min:5|max:80',
            'Price' => 'required|integer|min:0',
            'Quantity' => 'required|integer|min:0',
            'category' => 'max:1',
            'Image' => 'required|mimes:png,jpg,jpeg',
        ];
    }
}
