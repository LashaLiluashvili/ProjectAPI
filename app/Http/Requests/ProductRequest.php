<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            
            'name'=>'required|string',
            'price'=>'required|numeric',
            'term'=>'required|date_format:Y-m-d',
            'description'=>"nullable|string",
            'attributes'=>"required|array|min:1",
            // Add validation on array each element.
            'attributes.*.key'=>"required|string",
            // Add validation on array each element.
            'attributes.*.value'=>"required|string"

        ];
    }
}
