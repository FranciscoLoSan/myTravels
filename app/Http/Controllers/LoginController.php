<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\CONFIG;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class LoginController extends Controller
{

    public function showLogin()
    {
        Auth::logout();
        return view('welcome');
    }

    public function login()
    {

        $validacion = $this->validate(request(), [
            'usuario' => 'required|string',
            'password' => 'required',
        ]);
        //return $validacion;
        $usuario = Usuario::where('usuario', request('usuario'))->get();
        // dd($usuario);
        //dd($usuario[0]['imagen']);
        if ($usuario->isEmpty()) {
            return back()->withInput(request(['usuario']))->withErrors(['ambos' => 'nada']);
        } else {
            if (Auth::attempt($validacion)) {
                //dd('llega');
                return json_encode(2000);
            } else {
                return json_encode(1062);
            }
        }
    }
}
