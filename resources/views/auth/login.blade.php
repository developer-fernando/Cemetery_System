@extends('layouts.auth')
@section('content')
<div class="login-container">
    <div class="card shadow-sm p-4">
        <div class="text-center mb-4">
            <img src="{{ asset('img/logo.') }}" width="120">
            <h4 class="mt-2">Gestão de Cemitérios</h4>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Login" required auFtofocus>
            </div>
            <div class="mb-3">
                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            </div>
            <button class="btn btn-primary w-100">Acessar</button>
        </form>
    </div>
</div>
@endsection