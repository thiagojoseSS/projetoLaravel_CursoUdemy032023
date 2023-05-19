<?php

namespace App\Http\Controllers;

use App\Models\produto;

class ProdutosController extends Controller
{
    public $perPag = 10;

    public function index(){
        $this->perPag = (isset($_GET['qntPag'])) ? $_GET['qntPag'] : $this->perPag;

        if (isset($_GET['search'])) {
 
            $search = $_GET['search'];
           
            $produtos = produto::where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->orWhere('valor', 'like', "%{$search}%")
                ->paginate($this->perPag);
           
            $produtos->appends(['search' => $search]);
            return view('produtos.index', compact('produtos', 'search'));
        }else {
            $produtos = produto::paginate($this->perPag);
        }
        

        return view('produtos.index', ['produtos' => $produtos, 'perPag' => $this->perPag]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($id){
        $produto = produto::find($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function insert(){
        // return view('produtos.insert');
    }

    // public function show($nome, $valor = null){
    //     return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
    //     // return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
    // }
}
