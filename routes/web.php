<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController as Login;
use App\Http\Controllers\UsuarioController as Usuario;
use App\Http\Controllers\AuthController as Auth;
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

// /*  Inicio y cierre de session de usuario  *//*  Inicio y cierre de session de usuario  *//*  Inicio y cierre de session de usuario  */
// Route::get('Login/AutenticarUsuario', [Auth::class, 'login'])->name('login');
// // Route::post('usuario/logout', 'LogController@logoutUsuario')->name('Cerrar_Sesión');

// /* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*//* Control de usarios*/
// //route::ge t('usuario/registro', [Usuario::class, 'nuevoUsuario'])->name('Registro_Usuario');
// route::post('/usuario/guardarUsuario', [Usuario::class, 'guardarUsuario'])->name('Guardar_Usuario');
// route::get('/usuarios', [Usuario::class, 'index'])->name('Usuarios');