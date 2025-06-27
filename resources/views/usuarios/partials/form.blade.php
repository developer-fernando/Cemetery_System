<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ old('nome', $usuario->nome ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $usuario->email ?? '') }}"
            required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control"
            value="{{ old('telefone', $usuario->telefone ?? '') }}">
    </div>

    <div class="col-md-6">
        <label class="form-label">Celular</label>
        <input type="text" name="celular" class="form-control" value="{{ old('celular', $usuario->celular ?? '') }}"
            required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">Confirmar Senha</label>
        <input type="password" name="senha_confirmation" class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">Função/Nível</label>
        <select name="funcoes[]" class="form-select" multiple required>
            @foreach ($funcoes as $funcao)
                <option value="{{ $funcao->id }}"
                    {{ isset($usuario) && $usuario->funcoes->contains($funcao->id) ? 'selected' : '' }}>
                    {{ $funcao->nome }}
                </option>
            @endforeach
        </select>
    </div>
</div>
