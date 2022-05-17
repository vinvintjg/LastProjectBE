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
            // 'Category' => 'required',
            'Name' => 'required|min:5|max:80',
            'Price' => 'required|numeric|min:0',
            'Quantity' => 'required|numeric|min:0',
            'Image' => 'required',
            // 'genreId' => 'required'
        ];
    }
}
