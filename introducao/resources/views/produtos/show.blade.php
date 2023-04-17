@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 m-2">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold"><?php echo $produto->nome; ?></h1>
          <p class="col-md-8 fs-4"><?php echo $produto->descricao; ?></p>
          <hr class="my-4">
          <p><?php echo $produto->valor; ?></p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>

@endsection