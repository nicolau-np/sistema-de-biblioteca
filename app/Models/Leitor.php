<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leitor extends Model
{
    use HasFactory, SoftDeletes;

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

    protected $dates = ['deleted_at'];

    public function pedidoLivro(): HasMany
    {
        return $this->hasMany(PedidoLivro::class, 'leitor_id');
    }
}
