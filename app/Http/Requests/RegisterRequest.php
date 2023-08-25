<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:customers,customerEmail',
            'password' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:customers,customerPhone|numeric',
        ];
    }
    public function messages(): array
{
    return [
        'email.unique' => 'Email is duppp',
        'email.required' => 'Email not null',
    ];
}
}
