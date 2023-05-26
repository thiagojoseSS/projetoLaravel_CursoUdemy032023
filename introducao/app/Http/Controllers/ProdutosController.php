<?php

namespace App\Http\Controllers;


use App\Models\produto;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProdutosController extends Controller
{
    public $perPag = 10;

    public function index(){
        // dd($_GET['qntPag']);
        $this->perPag = (isset($_GET['qntPag'])) ? $_GET['qntPag'] : $this->perPag;

        if (isset($_GET['search'])) {
 
            $search = $_GET['search'];
           
            $produtos = produto::where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->orWhere('valor', 'like', "%{$search}%")
                ->orWhere('estoque', 'like', "%{$search}%")
                ->Paginate($this->perPag);
           
            $produtos->appends(['search' => $search, 'qntPag' => $this->perPag]);
            return view('produtos.index', compact('produtos', 'search'));
        }else {
            $produtos = produto::orderby('id', 'desc')->paginate($this->perPag);
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

    public function insert(Request $request){
        $produto = new produto();
        $produto->nome = $request->nome;
        $produto->estoque = str_replace(",", ".", $request->estoque);
        preg_match('/([0-9]+[,0-9]+)/', $request->valor, $matches);
        $produto->valor = str_replace(",", ".", $matches[1]);
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function edit(produto $produto){
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, produto $produto){
        $produto = produto::findOrFail($request->id);
        $produto->nome = $request->nome;
        $produto->estoque = str_replace(",", ".", $request->estoque);
        preg_match('/([0-9]+[,0-9]+)/', $request->valor, $matches);
        $produto->valor = str_replace(",", ".", $matches[1]);
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    // public function show($nome, $valor = null){
    //     return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
    //     // return "produto é $nome" . (($valor == null) ? "" : ", e o valor é $valor") . "!";
    // }
}
