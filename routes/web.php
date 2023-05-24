<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController as Log;
use App\Http\Controllers\UsuarioController as Usuario;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('usuarios.login');
});

/*  Inicio y cierre de session de usuario  *//*  Inicio y cierre de session de usuario  *//*  Inicio y cierre de session de usuario  */
Route::post('login/', [Log::class, 'login'])->name('Iniciar_Sesión');
// Route::post('usuario/logout', 'LogController@logoutUsuario')->name('Cerrar_Sesión');

/* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*/
//route::get('usuario/registro', [Usuario::class, 'nuevoUsuario'])->name('Registro_Usuario');
route::post('/usuario/guardarUsuario', [Usuario::class, 'guardarUsuario'])->name('Guardar_Usuario');
route::get('/usuarios', [Usuario::class, 'index'])->name('Usuarios');


