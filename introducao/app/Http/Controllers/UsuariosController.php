<?php

namespace App\Http\Controllers;

use App\Models\produto;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        
        $email = $request->email;
        $senha = $request->senha;

        $usuarios = usuario::where('email', '=', "$email")->where('senha', '=', "$senha")->first();
        if (@$usuarios->id != NULL) {
            @session_start();
            $_SESSION['id_user'] = $usuarios->id;
            $_SESSION['nome_user'] = $usuarios->nome;
            $_SESSION['nivel_user'] = $usuarios->nivel;

            if ($_SESSION['nivel_user'] == 'admin') {
                return view('produtos.create');
            }else{
                $produtos = produto::orderby('id', 'desc')->paginate();
                return view('produtos.index', ['produtos' => $produtos]);
            }

        }else {
            echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
            return view('home');
        }
    }

    public function logout(){
        @session_start();
        @session_destroy();
        return view('home');
    }
}
