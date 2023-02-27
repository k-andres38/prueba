<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreditController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('formulario', function () {
    return view('formulario');
});
Route::get('crear-cliente', function () {
    return view('crear-cliente');
})->name('crear.cliente');

Route::get('clientes',[ClientController::class,'show'])->name('clientes.show');
Route::get('/clientes/{id}/editar',[ClientController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/{id}',[ClientController::class,'update'])->name('clientes.update');
Route::delete('eliminar/{client}',[ClientController::class,'destroy'])->name('clientes.destroy');




//Route::get('cliente',[ClientController::class,'indexAction'])->name('cliente');
Route::get('credit',[ClientController::class,''])->name('credit');


////rutas post

Route::post('/create', [ClientController::class,'create'])->name('client.create');
Route::post('show/',[ClientController::class,'showSearch'])->name('clientes.showSearch');




//rutas creditos
Route::get('create',[CreditController::class,'create'])->name('credit.crear');