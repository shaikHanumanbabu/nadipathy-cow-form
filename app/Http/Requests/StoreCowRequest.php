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
            'link' => 'nullable',
            'show_in_explore' => 'nullable',
            'youtube_link' => 'nullable',
            'height' => 'nullable',
            'age' => 'nullable',
        ];
    }
}
