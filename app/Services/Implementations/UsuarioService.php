<?php

namespace App\Services\Implementations;

use App\Repositories\Contracts\UsuarioRepositoryInterface;
use App\Models\Funcao;
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
        return $this->usuarioRepository->listar();
    }

    public function visualizar(int $id)
    {
        return $this->usuarioRepository->visualizar($id);
    }

    public function criar(array $data)
    {
        return $this->usuarioRepository->criar($data);
    }

    public function atualizar(int $id, array $data)
    {
        return $this->usuarioRepository->atualizar($id, $data);
    }

    public function deletar(int $id)
    {
        return $this->usuarioRepository->deletar($id);
    }

    public function listarFuncoes()
    {
        return Funcao::all();
    }
}
