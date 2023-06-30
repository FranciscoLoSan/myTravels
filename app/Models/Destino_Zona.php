<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino_Zona extends Model
{
    protected $table = 'destino_zona';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_destino', 
        'id_zona' 
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
