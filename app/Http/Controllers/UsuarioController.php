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
        return response()->json($this->usuarioService->listar());
    }

    public function show($id)
    {
        return response()->json($this->usuarioService->visualizar($id));
    }

    public function store(StoreUsuarioRequest $request)
    {
        return response()->json($this->usuarioService->criar($request->validated()));
    }

    public function update(UpdateUsuarioRequest $request, $id)
    {
        return response()->json($this->usuarioService->atualizar($id, $request->validated()));
    }

    public function destroy($id)
    {
        return response()->json(['deleted' => $this->usuarioService->deletar($id)]);
    }
}
