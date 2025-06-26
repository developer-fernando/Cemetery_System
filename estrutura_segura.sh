#!/bin/bash

# Diretórios
dirs=(
  "app/Http/Controllers"
  "app/Http/Requests"
  "app/Models"
  "app/Providers"
  "app/Repositories/Contracts"
  "app/Repositories/Implementations"
  "app/Services/Contracts"
  "app/Services/Implementations"
)

# Arquivos
files=(
  "app/Http/Controllers/UsuarioController.php"
  "app/Http/Requests/StoreUsuarioRequest.php"
  "app/Http/Requests/UpdateUsuarioRequest.php"
  "app/Models/Usuario.php"
  "app/Models/Funcao.php"
  "app/Models/Permissao.php"
  "app/Providers/AppServiceProvider.php"
  "app/Repositories/Contracts/UsuarioRepositoryInterface.php"
  "app/Repositories/Implementations/UsuarioRepository.php"
  "app/Services/Contracts/UsuarioServiceInterface.php"
  "app/Services/Implementations/UsuarioService.php"
)

# Criar diretórios se não existirem
for dir in "${dirs[@]}"; do
  if [ ! -d "$dir" ]; then
    mkdir -p "$dir"
    echo "Criado diretório: $dir"
  fi
done

# Criar arquivos se não existirem
for file in "${files[@]}"; do
  if [ ! -f "$file" ]; then
    touch "$file"
    echo "Criado arquivo: $file"
  fi
done

echo "✔️ Estrutura verificada/criada com sucesso!"
