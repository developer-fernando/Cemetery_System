<?php

// app/Models/Funcao.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Funcao extends Model
{
    use HasFactory;

    protected $table = 'funcoes';

    protected $fillable = ['nome', 'guard_name'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'funcao_usuario');
    }

    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class, 'permissao_funcao');
    }
}
