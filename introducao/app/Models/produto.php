<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'valor'];
    const CREATED_AT = null;
    const UPDATED_AT = null;
    public $timestamps = false;
    public $perPag = 10;

    

    // public function index(ClientRequest $request){
    //     $this->perPag = (isset($_GET['qntPag'])) ? $_GET['qntPag'] : $this->perPag;
    //     if ($request->has('search')) {
 
    //         $search = $request->get('search');
           
    //         $produtos = produto::where('nome', 'like', "%{$search}%")
    //             ->orWhere('descricao', 'like', "%{$search}%")
    //             ->orWhere('valor', 'like', "%{$search}%")
    //             ->paginate($this->perPag);
           
    //         $produtos->appends(['search' => $search]);
    //         return view('produtos.index', compact('produtos', 'search'));
    //     } else {
    //         $produtos = produto::paginate($this->perPag);
    //         return view('produtos.index', compact('produtos'));
    //     }
    // }
}
