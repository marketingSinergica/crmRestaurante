<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'cantidad',
        'formato',
        'comentario',
        'marca',
        'user_id',
        'proveedor_id',
        'pedido_id'
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class)->withDefault();
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class)->withDefault();
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
}
