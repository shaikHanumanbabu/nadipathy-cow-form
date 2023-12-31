<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
            'title' => 'required',
            'caption' => 'required',
            'btntext' => 'required',
            'telugu_title' => 'nullable',
            'telugu_caption' => 'nullable',
            'telugu_btntext' => 'nullable',
            'link' => 'required',
            'priority' => 'required',
        ];
    }
}
