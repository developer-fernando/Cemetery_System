<?php

namespace App\Services\Contracts;

interface UsuarioServiceInterface
{
    public function listar();
    public function visualizar(int $id);
    public function criar(array $data);
    public function atualizar(int $id, array $data);
    public function deletar(int $id);
    public function listarFuncoes();
}
