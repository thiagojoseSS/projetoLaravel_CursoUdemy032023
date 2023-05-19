@extends('layouts.template') @section('title', 'Criar Produto')
@section('content')
<style>
	input::placeholder {
            color: brown;
    }
</style>
<div class="conteiner flex-auto m-2 p-2">
	<form method="POST" action="{{ route('produtos.insert') }}">
		@csrf
		<div class="d-flex row">
			<div class="input-group col-sm">
				<span class="input-group-text">Nome</span>
				<input type="text" class="form-control" id="" name="nome" />
			</div>
			<div class="input-group col-sm">
				<span class="input-group-text">Estoque</span>
				<input type="text" class="form-control" id="" name="estoque" />
			</div>
			<div class="input-group col-sm">
				<span class="input-group-text">Valor</span>
				<input type="text" class="form-control" id="valor" name="valor" placeholder="R$ 0,00" style="color: blue; font-weight: bold;"/>
			</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputValor1" class="form-label">Descrição</label>
			<input type="text" class="form-control" id="" name="descricao" />
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection