<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return "Página de produto";
    }

    public function create(){
        return "Página de Inserir produto";
    }

    public function show($nome, $valor = null){
        return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
    }
}
