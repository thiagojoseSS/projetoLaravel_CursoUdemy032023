<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::all();
        return $produtos;
        return view('produtos.index');
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($nome, $valor = null){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
        // return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
    }
}
