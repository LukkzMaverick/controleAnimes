@extends('layout')
@section('cabecalho')
    Animes
@endsection
@section('conteudo')
    @if(isset($mensagem))
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif

    <a href="{{route('criarAnime')}}" class="mb-2 btn btn-dark">Adicionar</a>
    <ul class="list-group">
        @foreach($animes as $anime)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$anime->nome}}
                <form method="post" action="/animes/{{$anime->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{$anime->nome}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection


