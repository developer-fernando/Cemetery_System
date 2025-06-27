@extends('layouts.app')

@section('content')
    <x-form-card title="Editar Usuário">

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('usuarios.partials.form')

            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('usuarios.index') }}" class="btn btn-danger">❌ Voltar</a>
                <button type="submit" class="btn btn-success">✔️ Atualizar</button>
            </div>

        </form>

    </x-form-card>
@endsection
