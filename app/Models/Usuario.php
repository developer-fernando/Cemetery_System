<?php

// app/Models/Usuario.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'telefone',
        'celular',
        'ativo'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    protected $casts = [
        'email_verificado_em' => 'datetime',
        'ativo' => 'boolean',
    ];

    // 🔗 Funções (Roles)
    public function funcoes()
    {
        return $this->belongsToMany(Funcao::class, 'funcao_usuario');
    }

    // 🔗 Permissões diretas
    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class, 'permissao_usuario');
    }
}
