@extends('layouts.template') @section('title', 'Criar Produto')
@section('content')
<style>
	input::placeholder {
            color: brown;
    }
</style>
<div class="conteiner flex-auto m-2 p-2">
	<form method="POST" action="{{ route('produtos.editar', $produto)}}">
		@csrf
        @method('put')
        <input type="hidden" name="id" value="{{$produto->id}}">
		<div class="d-flex row">
			<div class="input-group col-sm">
				<span class="input-group-text">Nome</span>
				<input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}"/>
			</div>
			<div class="input-group col-sm">
				<span class="input-group-text">Estoque</span>
				<input type="text" class="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}"/>
			</div>
			<div class="input-group col-sm">
				<span class="input-group-text">Valor</span>
				<input type="text" class="form-control from-blue-700 font-weight-bold" id="valor" name="valor"  value="{{$produto->valor}}" 
                placeholder="R$ 0,00"/>
			</div>
		</div>
		<div class="mb-3 inline-grid">
			<label for="exampleInputValor1" class="form-label align-items-start font-bold mt-2 mb-0">Descrição</label>
            <textarea name="descricao" id="" cols="200" rows="5" name="descricao" class="form-control align-bottom">{{$produto->descricao}}</textarea>
		</div>
        <div class="input-group">
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <a class="btn btn-info" href="{{route('produtos')}}">Voltar</a>
        </div>
	</form>
</div>
@endsection