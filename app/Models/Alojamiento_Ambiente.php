<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alojamiento_Ambiente extends Model
{
    protected $table = 'alojamiento_ambiente';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'id_alojamiento', 
        'id_ambiente'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

}
