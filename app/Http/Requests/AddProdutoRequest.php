<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProdutoRequest extends FormRequest
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
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

            'imagem.image' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg, gif.',
            'imagem.max' => 'A imagem não pode ser maior que 2MB.',
        ];
    }
}
