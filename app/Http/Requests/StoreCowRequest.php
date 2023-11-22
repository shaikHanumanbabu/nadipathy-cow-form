<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCowRequest extends FormRequest
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

            'breed_id' => 'required',
            'sub_categorie_id' => 'required',
            'name' => 'required',
            'link' => 'required',
            'image_name' => ['min:1', 'max:3'],
        ];
    }
}
