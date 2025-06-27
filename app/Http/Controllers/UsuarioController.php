<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Services\Contracts\UsuarioServiceInterface;

class UsuarioController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioServiceInterface $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function index()
    {
        $usuarios = $this->usuarioService->listar();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $funcoes = $this->usuarioService->listarFuncoes();
        return view('usuarios.create', compact('funcoes'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        $this->usuarioService->criar($request->validated());
        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $usuario = $this->usuarioService->visualizar($id);
        $funcoes = $this->usuarioService->listarFuncoes();
        return view('usuarios.edit', compact('usuario', 'funcoes'));
    }

    public function update(UpdateUsuarioRequest $request, $id)
    {
        $this->usuarioService->atualizar($id, $request->validated());
        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $this->usuarioService->deletar($id);
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }
}
