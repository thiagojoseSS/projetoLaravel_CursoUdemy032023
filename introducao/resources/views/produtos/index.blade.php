@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
<div class="w-2/3 container">

    <script src="../../../public/assets/datatables/jquery.dataTables.js"></script>

    <a name="inserirProduto" id="inserirProduto" class="btn btn-success mt-4 mb-4" href="produtos/inserir" role="button">Inserir Produto</a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="show mb-2">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
                        <div class="navbar-brand ml-2">Mostrar</div>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <form class="d-flex my-2 my-lg-0" id="form01">
                                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                    <input type="number" name="qntPag" id="qntPag" value="15" class="text-blue-800 text-lg pl-2 w-20">
                                    
                                    <div class="navbar-text ml-2">Registros</div>
                                </ul>
                                <div class="d-flex my-2 my-lg-0">
                                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
                {{route('produtos.index', ['qntPag' => ])}}
                <table class="table table-bordered table-hover thead-dark" id="#example" width="100%" cellspacing=""0>
                    <thead>
                        <tr class="table-secondary">
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->valor}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>PlayGamer</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right bg-violet-800">
                    {{$produtos->links()}}
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5 mb-5">

    <table class="table-auto border-dashed border-orange-300 align-top">
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