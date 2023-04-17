@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 m-2">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold"><?php echo $produto->nome; ?></h1>
          <p class="col-md-8 fs-4"><?php echo $produto->descricao; ?></p>
          <hr class="my-4">
          <p>Valor R$ <?php echo(number_format($produto->valor,2,",",".")); ?></p>
          <a name="" id="" class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Ver Produtos</a>
        </div>
      </div>

@endsection