<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'telefone' => 'nullable|string|max:20',
            'celular' => 'required|string|max:20',
            'senha' => 'required|confirmed|min:6',
            'funcoes' => 'required|array',
            'funcoes.*' => 'exists:funcoes,id',
        ];
    }
}
