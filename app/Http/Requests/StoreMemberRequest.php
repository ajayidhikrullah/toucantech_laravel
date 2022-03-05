<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'fullname' => 'required|string',
            'email' => 'required',
            'school_id' => 'required',
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
            'fullname.required' => 'Please enter your name',
            'email.required' => 'Please enter a valid email address',
            'school_id.required' => 'Please select a school from the school list',
        ];
    }
}
