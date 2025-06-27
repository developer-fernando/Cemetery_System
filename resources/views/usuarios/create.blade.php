@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Cadastro de Usuários</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo:<br><br>
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
                </div>

                <div class="col">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ old('telefone') }}">
                </div>

                <div class="col">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" name="celular" class="form-control" value="{{ old('celular') }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="funcao" class="form-label">Nível/Função</label>
                <select name="funcao_id" class="form-select" required>
                    <option value="">Selecione...</option>
                    @foreach ($funcoes as $funcao)
                        <option value="{{ $funcao->id }}">{{ $funcao->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>

                <div class="col">
                    <label for="senha_confirmation" class="form-label">Confirmar Senha</label>
                    <input type="password" name="senha_confirmation" class="form-control" required>
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="ativo" class="form-check-input" id="ativo" checked>
                <label class="form-check-label" for="ativo">Ativo</label>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection
