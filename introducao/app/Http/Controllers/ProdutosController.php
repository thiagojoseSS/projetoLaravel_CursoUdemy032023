<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public $perPag = 10;

    public function index($perPagIN=null){
        $this->perPag = ($perPagIN != null) ? $perPagIN : $this->perPag;
        $produtos = produto::paginate($this->perPag);
        // return $produtos;
        return view('produtos.index', ['produtos' => $produtos, 'perPag' => $this->perPag]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($nome, $valor = null){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
        // return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
    }
}
