<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino_Actividad extends Model
{
    
    protected $table = 'destino_actividad';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_actividad', 
        'id_destino'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
