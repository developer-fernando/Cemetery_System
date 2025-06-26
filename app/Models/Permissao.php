<?php

// app/Models/Permissao.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permissao extends Model
{
    use HasFactory;

    protected $table = 'permissoes';

    protected $fillable = ['nome', 'guard_name'];

    public function funcoes()
    {
        return $this->belongsToMany(Funcao::class, 'permissao_funcao');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'permissao_usuario');
    }
}
