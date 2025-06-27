<?php

namespace App\Repositories\Contracts;

interface UsuarioRepositoryInterface
{
    public function listar();
    public function visualizar(int $id);
    public function criar(array $data);
    public function atualizar(int $id, array $data);
    public function deletar(int $id);
}
