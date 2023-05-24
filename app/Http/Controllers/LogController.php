<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'usuario' => 'required|max:10',
            'pass' => 'required|max:32'
        ],[
            'usuario.required'=> 'Campo requerido',
            'usuario.max'=> 'El nombre debe tener maximo 10 letras',
            'pass.required'=> 'Campo requerido',
            'pass.max'=> 'El nombre debe tener maximo 10 letras'
        ]) ;
        $usuario = $request->usuario ; 
        $pass = $request->pass ;
        $user = DB::table('usuarios')
                   ->where('usuario', $usuario)
                   ->where('pass', $pass)
                   ->first() ;
        if( isset($user) ) {
                session(['sesion'=>$usuario]);
                return view('welcome');
        } else {
            $nsesion = "Usuario inválido, favor de verificar";
            return view('usuario.login', ['usuario' => $usuario]);
        }    
    }

    public function fin(){
        $endsesion = "";
        session(['sesion'=>$endsesion]);
        return view('welcome');
    }
}