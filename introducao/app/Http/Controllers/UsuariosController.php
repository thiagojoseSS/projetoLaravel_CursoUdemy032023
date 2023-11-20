<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        
        $email = $request->email;
        $senha = $request->senha;


        return $email;
    }
}
