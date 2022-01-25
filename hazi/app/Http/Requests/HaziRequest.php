<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HaziRequest extends FormRequest
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
            'url' => 'required|min:8',
            'szoveges_ertekeles' => 'required|min:0|max:1000',
            'pontszam_ertekeles' => 'required|numeric|min:0|max:100',
        ];
    }
}
