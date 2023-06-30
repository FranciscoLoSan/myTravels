<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'actividad'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
