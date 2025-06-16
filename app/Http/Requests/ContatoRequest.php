<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'assunto'  => 'required|string|max:150',
            'mensagem' => 'required|string|min:10|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'     => 'O nome é obrigatório.',
            'email.required'    => 'O e-mail é obrigatório.',
            'email.email'       => 'Informe um e-mail válido.',
            'assunto.required'  => 'O assunto é obrigatório.',
            'mensagem.required' => 'A mensagem é obrigatória.',
            'mensagem.min'      => 'A mensagem deve ter pelo menos :min caracteres.',
            'mensagem.max'      => 'A mensagem não pode estar acima de :max caracteres.',
        ];
    }
}
