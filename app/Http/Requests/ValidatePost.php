<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePost extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'string',
                'max:250'
            ],
            'image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
            'description' => [
                'required'
            ],
            'category_id' => [
                'required',
                'integer'
            ],
            'slug' => [
                'required',
                'string',
                'max:250'
            ]
        ];
        return $rules;
    }
}
