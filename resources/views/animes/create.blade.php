@extends('layout')
@section('cabecalho')
    Adicionar
@endsection
@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <form method="post" action="">
         @csrf
         <div class="form-group">
             <label class="" for="nome">Nome</label>
             <input type="text" class="form-control" name="nome" id="nome">
         </div>
         <button class="btn btn-primary">Adicionar</button>
     </form>
@endsection
