<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RelatorioController;
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
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('login', [AuthController::class, 'logar'])->middleware('guest');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::resource('livros', LivroController::class)->middleware('auth');
Route::post('livros/search', [LivroController::class, 'search'])->middleware('auth');
Route::resource('leitores', LeitorController::class)->middleware('auth');
Route::post('leitores/search', [LeitorController::class, 'search'])->middleware('auth');
Route::resource('pedidos', PedidoController::class)->middleware('auth');
Route::post('pedidos/search', [PedidoController::class, 'search'])->middleware('auth');

Route::prefix('relatorios')->group(function () {
    Route::get('/', [RelatorioController::class, 'index']);
   Route::get('create-pedidos-feitos', [RelatorioController::class, 'predidosFeitosCreate']);
    Route::prefix('print')->group(function () {
        Route::get('livros-da-biblioteca', [RelatorioController::class, 'livrosDaBiblioteca']);
        Route::get('livros-nao-devolvidos', [RelatorioController::class, 'livrosNaoDevolvidos']);
        Route::get('pedidos-feitos', [RelatorioController::class, 'pedidosFeitosPrint']);
    });
});
