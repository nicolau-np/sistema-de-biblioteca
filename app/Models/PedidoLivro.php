<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoLivro extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'pessoa_id',
       'livro_id',
       'user_id',
        'data_do_pedido',
        'data_de_devolucao',
       'obs',
    ];

    protected $dates = ['deleted_at'];

    public function pessoa():BelongsTo{
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function livro():BelongsTo{
        return $this->belongsTo(Livro::class, 'livro_id');
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}
