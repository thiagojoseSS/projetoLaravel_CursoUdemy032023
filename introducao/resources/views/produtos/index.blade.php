@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
    <h1 class="bg-black">Página dos Produtos</h1>
    <div class="w-2/3 container">
        <table class="table-auto m-2 border-dashed border-2 border-orange-300 align-top">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>
                        {{$produto->nome}}
                    </td>
                    <td>
                        {{$produto->descricao}}
                    </td>
                    <td>
                        {{$produto->valor}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        

        <div class="flex text-blue-800 px-8 origin-right transform skew-x-12">
            {{$produtos->links()}}
        </div>
    </div>
@endsection