<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class flatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [


            'flour' => 'required | max:30',
            'useplaza' => 'required ',
           'plaza' => 'required',
             'flat_no' => 'required',

        ];
    }
}
