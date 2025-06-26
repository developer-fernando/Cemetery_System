#!/bin/bash

# Diretório base
base="resources/views"

# Diretórios
dirs=(
  "$base/layouts"
  "$base/auth"
  "$base/dashboard"
  "$base/usuarios"
  "$base/components"
)

# Arquivos
files=(
  "$base/layouts/app.blade.php"
  "$base/layouts/auth.blade.php"
  "$base/auth/login.blade.php"
  "$base/dashboard/index.blade.php"
  "$base/usuarios/index.blade.php"
  "$base/usuarios/create.blade.php"
  "$base/usuarios/edit.blade.php"
)

# Criar diretórios se não existirem
for dir in "${dirs[@]}"; do
  if [ ! -d "$dir" ]; then
    mkdir -p "$dir"
    echo "📁 Criado diretório: $dir"
  fi
done

# Criar arquivos se não existirem
for file in "${files[@]}"; do
  if [ ! -f "$file" ]; then
    touch "$file"
    echo "📄 Criado arquivo: $file"
  fi
done

echo "✔️ Estrutura de views criada com sucesso!"

