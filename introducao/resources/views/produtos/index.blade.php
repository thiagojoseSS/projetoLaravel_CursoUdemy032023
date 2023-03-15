@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
<div class="w-2/3 container">
    <a name="inserirProduto" id="inserirProduto" class="btn btn-success mt-4 mb-4" href="produtos/inserir" role="button">Inserir
        Produto</a>
    <table class="table-auto border-dashed border-2 border-orange-300 align-top">
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
<button class="btn btn-success position-relative m-2">
    Inbox
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        99+
        <span class="visually-hidden">unread messages</span>
    </span>
</button>
<button class="btn btn-danger position-relative m-2">
    Inbox
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
        99+
        <span class="visually-hidden">unread messages</span>
    </span>
</button>
<div class="btn-group m-2" data-bs-toggle="buttons">
    <label class="btn btn-light active">
        <input type="radio" class="me-2" name="teeeeeeesssstes massa" id="teeeeeeesssstes massa" autocomplete="off"
            checked> Vitor
    </label>
    <label class="btn btn-light">
        <input type="radio" name="teeeeeeesssstes massa" id="teeeeeeesssstes massa" autocomplete="off"> Alison
    </label>
    <label class="btn btn-light">
        <input type="radio" name="teeeeeeesssstes massa" id="teeeeeeesssstes massa" autocomplete="off"> Thiago
    </label>
</div>
<div class="btn-group m-2" data-bs-toggle="buttons">
    <label class="btn btn-danger active">
        <input type="radio" class="me-2" name="vt" id="vt" autocomplete="off" checked> Café
    </label>
    <label class="btn btn-danger">
        <input type="radio" name="vt" id="vt" autocomplete="off"> Chá
    </label>
    <label class="btn btn-danger">
        <input type="radio" name="vt" id="vt" autocomplete="off"> Leite
    </label>
</div>

@endsection