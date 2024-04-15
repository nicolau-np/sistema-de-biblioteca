<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'bi',
        'genero',
        'data_nascimento',
        'origem',
        'tipo',
        'telefone',
        'turma',
    ];

    public function pedidoLivro(): HasMany
    {
        return $this->hasMany(PedidoLivro::class, 'pessoa_id');
    }
}
