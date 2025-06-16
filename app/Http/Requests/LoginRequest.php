<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'    => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'O email é obrigatório.',
            'email.email'       => 'Informe um email válido.',
            'email.max'         => 'O email não pode ter mais que :max caracteres.',

            'password.required' => 'A senha é obrigatória.',
            'password.string'   => 'A senha deve ser um texto.',
            'password.min'      => 'A senha deve ter pelo menos :min caracteres.',
        ];
    }
}
