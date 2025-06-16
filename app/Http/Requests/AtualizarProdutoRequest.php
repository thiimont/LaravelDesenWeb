<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtualizarProdutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O nome deve ser uma sequência de caracteres válida.',
            'nome.max' => 'O nome não pode ter mais que :max caracteres.',

            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O preço deve ser um número válido.',
            'preco.min' => 'O preço não pode ser negativo.',

            'quantidade.required' => 'O campo quantidade é obrigatório.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade não pode ser negativa.',
        ];
    }
}
