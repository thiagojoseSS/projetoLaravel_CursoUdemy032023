@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
    <h1 class="bg-black">Página dos Produtos</h1>
    @foreach($produtos as $produto)
    <p>
        {{$produto->nome}}
    </p>
    @endforeach

    <div class="text-blue-800">
        {{$produtos->links()}}
    </div>
@endsection