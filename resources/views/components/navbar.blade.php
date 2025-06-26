<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Gestão de Cemitérios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="#">Cadastro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Agendamento</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Relatórios</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Usuários</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link">Bem-vindo, {{ Auth::user()->nome ?? 'Visitante' }}</span>
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