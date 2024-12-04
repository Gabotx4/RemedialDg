<?php

use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\UsuarioController;
use App\Models\Platillo;
use Illuminate\Support\Facades\Route;

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
    return view('/clientes/inicio');
});


//login and register

//Route::view('/login','/Login/login');
Route::view('/registrar','/login/Registrar');

Route::view('/inicioA','/administracion/inicio');

Route::view('/inicio','/clientes/inicio');

//Route::get('/login', [UsuarioController::class,'index']);
Route::get('/Login', [UsuarioController::class,'create']);

Route::post('/user/gaurdar', [ UsuarioController::class,'store']);



Route::get('/nuevop', [PlatilloController::class,'create' ]);
Route::post('/platillo/crear1', [PlatilloController::class,'store' ]);


//platillos
Route::view('/administrar','/administracion/InPlatillos'); //para ver la lista de platillos


Route::view('/Administrar/clientes','/administracion/Clientes');


Route::view('/Administrar/pedidos','/administracion/pedidos');
//Route::view('/editar/platillos','/administracion/editarPlatillos');

Route::get('/editpla/{id}', [ PlatilloController::class,'edit']);

//esta jala
Route::get('/crear2', [PlatilloController::class,'index']);
Route::get('/usuarios', [UsuarioController::class,'index']);

Route::put('/actualizar/platillo/{id}', [PlatilloController::class,'update']);


Route::view('/menu', '/clientes/menu');
Route::view('/contacto', '/clientes/contacto');
Route::view('/ubicanos', '/clientes/ubicacion');
Route::view('/carrito', '/clientes/carrito');

Route::view('/perfil', '/PerfilCliente/perfil');






