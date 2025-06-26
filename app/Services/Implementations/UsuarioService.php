<?php

namespace App\Services\Implementations;

use App\Repositories\Contracts\UsuarioRepositoryInterface;
use App\Services\Contracts\UsuarioServiceInterface;

class UsuarioService implements UsuarioServiceInterface
{
    protected $usuarioRepository;

    public function __construct(UsuarioRepositoryInterface $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function listar()
    {
        return $this->usuarioRepository->all();
    }

    public function visualizar(int $id)
    {
        return $this->usuarioRepository->find($id);
    }

    public function criar(array $data)
    {
        return $this->usuarioRepository->create($data);
    }

    public function atualizar(int $id, array $data)
    {
        return $this->usuarioRepository->update($id, $data);
    }

    public function deletar(int $id)
    {
        return $this->usuarioRepository->delete($id);
    }
}
