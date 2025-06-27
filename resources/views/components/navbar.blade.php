<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Cemitérios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">

                <!-- 🔥 Menu Usuários -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarUsuario" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Usuários
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarUsuario">
                        <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{ route('usuarios.create') }}">Cadastrar</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link text-white">Olá, {{ Auth::user()->nome }}</span>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-light">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
