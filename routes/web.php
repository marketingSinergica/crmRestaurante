<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProveedoresController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// el email tiene que ser verificado
Auth::routes(['verify' => true ]);

// IMPORTANTE: ACTUALMENTE SE ENVÍAN LOS CORREOS A MAILTRAP DE PRUEBA (NO LLEGA A GMAIL)
// Si la persona no está autentificada no va a poder acceder a la ruta home
Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('users', UserController::class);
    Route::resource('proveedors', ProveedoresController::class);
    Route::resource('pedidos', PedidoController::class);
    Route::resource('productos', ProductoController::class);
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});