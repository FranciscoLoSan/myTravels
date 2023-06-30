<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = 'destino';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'destino', 
        'estado', 
        'ciudad' 
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
