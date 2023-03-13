@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')
    <h1>Página dos Produtos</h1>
    @foreach($produtos as $produto)
    <p>
        {{$produto->nome}}
    </p>
    @endforeach

    {{$produtos->links()}}
@endsection