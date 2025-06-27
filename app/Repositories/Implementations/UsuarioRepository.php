<?php

namespace App\Repositories\Implementations;

use App\Models\Usuario;
use App\Repositories\Contracts\UsuarioRepositoryInterface;

class UsuarioRepository implements UsuarioRepositoryInterface
{
    public function listar()
    {
        return Usuario::with('funcoes')->get();
    }

    public function visualizar(int $id)
    {
        return Usuario::with('funcoes')->findOrFail($id);
    }

    public function criar(array $data)
    {
        $data['senha'] = bcrypt($data['senha']);
        $usuario = Usuario::create($data);
        $usuario->funcoes()->sync($data['funcoes']);
        return $usuario;
    }

    public function atualizar(int $id, array $data)
    {
        $usuario = Usuario::findOrFail($id);

        if (!empty($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        } else {
            unset($data['senha']);
        }

        $usuario->update($data);
        $usuario->funcoes()->sync($data['funcoes']);
        return $usuario;
    }

    public function deletar(int $id)
    {
        $usuario = Usuario::findOrFail($id);
        return $usuario->delete();
    }
}
