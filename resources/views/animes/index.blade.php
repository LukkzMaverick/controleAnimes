@extends('layout')
@section('cabecalho')
    Animes
@endsection
@section('conteudo')
    <a href="/animes/criar" class="mb-2 btn btn-dark">Adicionar</a>
    <ul class="list-group">
        @foreach($animes as $anime)
            <li class="list-group-item"><?= $anime; ?></li>
        @endforeach
    </ul>
@endsection


