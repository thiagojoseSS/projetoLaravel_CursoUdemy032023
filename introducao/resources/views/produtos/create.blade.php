@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class="conteiner">
    <form method="post" action="{{route('produtos.insert')}}">
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Nome</label>
          <input type="text" class="form-control" id="" name="nome">
        </div>
        <div class="mb-3">
            <label for="exampleInputEstoque1" class="form-label">Estoque</label>
            <input type="text" class="form-control" id="" name="estoque">
        </div>
        <div class="mb-3">
            <label for="exampleInputValor1" class="form-label">Valor</label>
            <input type="text" class="form-control" id="" name="valor" onkeypress="$(this).mark('R$ #,##0,00')">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection