<?php

namespace App\Repositories\Implementations;

use App\Models\Usuario;
use App\Repositories\Contracts\UsuarioRepositoryInterface;

class UsuarioRepository implements UsuarioRepositoryInterface
{
    public function all()
    {
        return Usuario::all();
    }

    public function find(int $id)
    {
        return Usuario::findOrFail($id);
    }

    public function create(array $data)
    {
        return Usuario::create($data);
    }

    public function update(int $id, array $data)
    {
        $usuario = Usuario::findOrFail($id);
        if (isset($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        }
        $usuario->update($data);
        return $usuario;
    }

    public function delete(int $id)
    {
        $usuario = Usuario::findOrFail($id);
        return $usuario->delete();
    }
}
