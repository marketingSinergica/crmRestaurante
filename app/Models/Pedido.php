<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'fechaPedido',
        'fechaEntrega',
        'estado',
        'cantidadProductos',
        'comentarioCocina',
        'proveedor_id',
        'user_id',
    ];

    public const STATUS = ['Pendiente', 'Validado', 'Confirmado', 'Enviado', 'Entregado'];

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class)->withDefault();
    }

    
}
