<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $this->id,
            'senha' => 'nullable|min:6',
            'celular' => 'required|string|max:20',
            'telefone' => 'nullable|string|max:20',
        ];
    }
}
