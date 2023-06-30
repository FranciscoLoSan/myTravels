<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino_Alojamiento extends Model
{
    protected $table = 'destino_alojamiento';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_usuario', 
        'id_alojamiento', 
        'id_destino', 
        'calificacion'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
