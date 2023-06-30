<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario_Destino extends Model
{
    protected $table = 'usuario_destino';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_usuario',
        'id_destino',
        'fecha_visita',
        'resenia',
        'calificacion',
        'cantidad_gastada',
        'motivo'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}


            