<?php

namespace App\Http\Controllers;

use App\Models\Actividad as Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return $actividades;
    }

    public function guardarActividad(Request $request)
    {
        $actividad = new Actividad();
        $actividad->actividad = $request->actividad;

        $actividad->save();
    }

    public function editarActividad(Request $request)
    {
        $actividad = Actividad::where('id', $request->id)->first();
        return $actividad;
    }

    public function modificarActividad(Request $request)
    {
        actividad::where('id', $request->id)
            ->update([
                'actividad' => $request->actividad,
            ]);
    }
}
