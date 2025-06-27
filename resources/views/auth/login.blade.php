@extends('layouts.auth')

@section('content')
    <div class="login-container">
        <div class="card shadow-sm p-4">
            <div class="text-center mb-4">
                <h4 class="fw-bold">Gestão de Cemitérios</h4>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                </div>
                <button class="btn btn-primary w-100">Acessar</button>
            </form>
        </div>
    </div>
@endsection
