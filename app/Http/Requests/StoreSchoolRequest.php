<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
            'name' => 'required|unique:schools',
        ];
    }

    /**
     * Return the appropriate messages for the form data.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter a school name',
            'name.unique' => 'The school you enter already exist, please enter a new one.',
        ];
    }
}
