<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request as ClientRequest;

class produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'valor'];
    const CREATED_AT = null;
    const UPDATED_AT = null;
    public $timestamps = false;

    public function index(ClientRequest $request){
        if ($request->has('search')) {
 
            $search = $request->get('search');
           
            $customers = Customer::where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->orWhere('valor', 'like', "%{$search}%")
                ->paginate(10);
           
            $customers->appends(['search' => $search]);
            return view('produtos.grid', compact('produtos', 'search'));
        } else {
            $customers = Customer::paginate(10);
            return view('produtos.grid', compact('produtos'));
        }
    }
}
