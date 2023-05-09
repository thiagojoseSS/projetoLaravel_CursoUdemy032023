<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Pluralizer;

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
Route::get('/', HomeController::class);

Route::get('produtos/insert', [ProdutosController::class, 'insert'])->name('produtos.insert');
Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');
// Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');
Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('users/{id}', function ($id) {
    return "usuario e o seu id é $id";
});

Route::get('users', function () {
    return "usuario";
});

// Route::get('produtos/inserir', function () {
//     return "Página de Inserir produto";
// });

// Route::get('produtos/{nome}', function ($nome) {
//     return "produto é $nome";
// });

// Route::get('produtos/{nome}/{valor?}', function ($nome, $valor = null) {
//     return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
// });

