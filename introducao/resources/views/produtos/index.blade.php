@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
<div class="w-2/3 container">

    <script src="../../../public/assets/datatables/jquery.dataTables.js"></script>

    <a name="inserirProduto" id="inserirProduto" class="btn btn-success mt-4 mb-4" href="{{route('produtos.inserir')}}" role="button">Inserir Produto</a>

    <!-- <?php $qntPag = (isset($_GET['qntPag'])) ? $_GET['qntPag'] : 10 ?>
    <?php echo((isset($_GET['search'])) ? $_GET['search'] : 10 ) ?> -->
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="show mb-2">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <form class="my-2 my-lg-auto" id="form01">
                            <div class="d-flex container-fluid " id="collapsibleNavId"">
                                <ul class="navbar-nav me-auto mt-2 mt-lg-0 ml-2 input-group">
                                    <div class="input-group-text">Mostrar</div>
                                    <!-- <div class="mt-2"> -->
                                    <input type="number" name="qntPag" id="qntPag" value="<?php echo((isset($_GET['qntPag'])) ? $_GET['qntPag'] : 10 ) ?>" class="text-blue-800 text-lg pl-2 w-20">
                                    <!-- </div> -->
                                    <div class="ml-2 input-group-text">Registros</div>
                                </ul>
                                <div class="d-flex input-group" role="search">
                                    <input class="form-control" type="text" name="search" id="search" placeholder="Search"
                                    value="<?php echo((isset($_GET['search'])) ? $_GET['search'] : '' ) ?>">
                                    <button class="btn btn-warning my-2 my-sm-0 mr-3 hover:shadow-lg hover:shadow-orange-800" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </nav>
                </div>
                
                <table class="table table-bordered table-hover thead-dark table-dark" id="#example" width="100%" cellspacing=""0>
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
                            <td>R$ <?php echo(number_format($produto->valor,2,",","."));?></td>
                            <td class="text-right"><?php echo(number_format($produto->estoque,3,",","."));?></td>
                            <td><a title="Detalhes do Produto" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye text-primary mx-1 hover:bg-white transition-colors"></i></a>
                                <a title="Editar Dados do Produto" href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info mx-1 hover:bg-red-500 transition-colors"></i></a>
                                <a title="Excluir Produto" href="{{route('produtos.delete', $produto)}}"><i class="fas fa-trash text-danger mx-1 hover:bg-white transition-colors"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    {{$produtos->links()}}
                    {{$produtos->total()}}
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5 mb-5">
<!-- 
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
    </div> -->
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