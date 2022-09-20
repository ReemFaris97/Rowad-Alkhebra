<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ar_title' => ['required', 'string', 'min:3'],
            'en_title' => ['required', 'string', 'min:3'],
            'ar_description' => ['required', 'string', 'min:5'],
            'en_description' => ['required', 'string', 'min:5'],
            'ar_writer' => ['required', 'string', 'min:3'],
            'en_writer' => ['required', 'string', 'min:3'],
            'image' => ['required_without:_method', 'image', 'max:5000']
        ];
    }
}
