<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequest extends FormRequest
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
           'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'quiz_name' => 'required|string|min:6|max:255|unique:quiz_details,quiz_title',
            'quiz_code' => 'required|string|min:6|max:255|unique:quiz_details,quiz_code',
            'questionNum' => 'required|numeric',
            'duration' => 'required|numeric',
            'question1' => 'max:255|min:10',
            'question' => 'max:255|min:10',
            'answer1' => 'max:225|min:5',
            'questionFile' => 'required|max:2048',
        ];
    }
}
