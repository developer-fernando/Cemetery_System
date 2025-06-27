<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'celular',
        'senha',
        'ativo'
    ];

    protected $hidden = [
        'senha',
    ];

    public function getAuthPassword()
    {
        // 🔥 Laravel espera 'password', mas usamos 'senha'
        return $this->senha;
    }

    public function funcoes()
    {
        return $this->belongsToMany(Funcao::class, 'funcao_usuario', 'usuario_id', 'funcao_id');
    }
}
