<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino_Clima extends Model
{
    protected $table = 'destino_clima';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_clima', 
        'id_destino'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
