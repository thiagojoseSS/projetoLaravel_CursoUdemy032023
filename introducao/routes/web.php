<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

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

Route::get('produtos/inserir', [ProdutosController::class, 'create']);
Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show']);
Route::get('produtos', [ProdutosController::class, 'index']);


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

