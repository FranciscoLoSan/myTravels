<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 
        'nombre',
        'apellido_p',
        'apellido_m',
        'correo',
        'pass', 
        'estado_civil',
        'ciudad', 
        'fecha_nacimiento',
        'actividad1',
        'actividad2',
        'actividad3'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];
}
            