<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string',
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Enter name please',
            'age.numeric' => 'Enter age please',
            'date.string' => 'Enter date please',
            'phone.numeric' => 'Enter phone please',
            'web.string' => 'Enter web please',
            'address.string' => 'Enter address',
        ];
    }
}
