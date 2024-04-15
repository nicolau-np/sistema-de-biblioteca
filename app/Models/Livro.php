<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'numero_de_paginas',
        'curso',
        'disciplina',
        'editora',
        'edicao',
        'quantidade_existente',
        'data_de_publicacao',
        'descricao',
    ];

    public function pedidoLivro(): HasMany
    {
        return $this->hasMany(PedidoLivro::class, 'livro_id');
    }
}
