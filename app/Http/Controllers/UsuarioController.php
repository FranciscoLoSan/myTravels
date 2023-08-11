<?php

namespace App\Http\Controllers;

use App\Models\Usuario as Usuario;
use Error;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function nuevoUsuario()
    {
        // return view('usuarios.registro_usuario');
    }
    public function index()
    {
        $users = Usuario::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardarUsuario(Request $request)
    {
        $validated = validator::make($request->all(), [
            'nombre' => 'required|max:30',
            'apellido_p' => 'required|max:30',
            'apellido_m' => 'required|max:30',
            'correo' => 'required|unique:App\Models\Usuario,correo|max:100',
            'pass' => 'required|max:32',
            'estado_civil' => 'required',
            'ciudad' => 'required|max:75',
            'fecha_nacimiento' => 'required',
            'actividad1' => 'required',
            'actividad2' => 'required',
            'actividad3' => 'required',
        ]);
        if ($validated->fails()) {
            $returnData = array(
                'status' => 'error',
                'message' => json_encode($validated->errors())
            );
            return Response::json($returnData, 400);
        } else {
            $passwordHash = bcrypt($request->pass);
            $usuario = new Usuario();
            $usuario->nombre = $request->nombre;
            $usuario->apellido_p = $request->apellido_p;
            $usuario->apellido_m = $request->apellido_m;
            $usuario->correo = $request->correo;
            $usuario->pass = $passwordHash;
            $usuario->estado_civil = $request->estado_civil;
            $usuario->ciudad = $request->ciudad;
            $usuario->fecha_nacimiento = $request->fecha_nacimiento;
            $usuario->actividad1 = $request->actividad1;
            $usuario->actividad2 = $request->actividad2;
            $usuario->actividad3 = $request->actividad3;
            $usuario->save();
        }

        // $validated = $request->validate([
        //     'nombre' => 'required|unique:posts|max:30',
        //     'apellido_p' => 'required|unique:posts|max:30',
        //     'apellido_m' => 'required|unique:posts|max:30',
        //     'correo' => 'required|unique:App\Models\Usuario,correo|unique:posts|max:100',
        //     'pass' => 'required|unique:posts|max:32',
        //     'estado_civil' => 'required',
        //     'ciudad' => 'required|unique:posts|max:75',
        //     'fecha_nacimiento' => 'required',
        //     'actividad1' => 'required',
        //     'actividad2' => 'required',
        //     'actividad3' => 'required',
        // ]);

        // $passwordHash = Hash::make($request->pass);
        // $usuario = new Usuario();
        // $usuario->nombre = $request->nombre;
        // $usuario->apellido_p = $request->apellido_p;
        // $usuario->apellido_m = $request->apellido_m;
        // $usuario->correo = $request->correo;
        // $usuario->pass = $passwordHash;
        // $usuario->estado_civil = $request->estado_civil;
        // $usuario->ciudad = $request->ciudad;
        // $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        // $usuario->actividad1 = $request->actividad1;
        // $usuario->actividad2 = $request->actividad2;
        // $usuario->actividad3 = $request->actividad3;

        // $usuario->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
