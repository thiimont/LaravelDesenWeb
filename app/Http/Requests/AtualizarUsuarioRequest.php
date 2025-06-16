<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtualizarUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'     => ['required', 'string', 'min:3', 'max:100'],
            'email'    => ['required', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:6', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'   => 'O nome completo é obrigatório.',
            'nome.string'     => 'O nome completo deve ser um texto.',
            'nome.min'        => 'O nome completo deve ter pelo menos :min caracteres.',
            'nome.max'        => 'O nome completo não pode exceder :max caracteres.',

            'email.required'  => 'O email é obrigatório.',
            'email.email'     => 'Informe um endereço de email válido.',
            'email.max'       => 'O email não pode exceder :max caracteres.',

            'password.string' => 'A senha deve ser um texto.',
            'password.min'    => 'A senha deve ter pelo menos :min caracteres.',
            'password.max'    => 'A senha não pode exceder :max caracteres.',
        ];
    }
}
