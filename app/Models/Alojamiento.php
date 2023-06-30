<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{   
    protected $table = 'alojamiento';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'nombre', 
        'calle', 
        'numero'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

}
