<?php

use Illuminate\Support\Facades\Route;

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

// COMENTADO PORQUE NO ENVÍA EL CORREO DE VERIFICACIÓN Y NO PUEDO AVANZAR
// Si la persona no está autentificada no va a poder acceder a la ruta home
/*Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});*/

Route::get('/home', function () {
    return view('home');
});