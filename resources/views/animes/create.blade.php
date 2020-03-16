@extends('layout')
@section('cabecalho')
    Adicionar
@endsection
@section('conteudo')
     <form method="post" action="">
         <div class="form-group">
             <label class="" for="nome">Nome</label>
             <input type="text" class="form-control" name="nome" id="nome">
         </div>
         <button class="btn btn-primary">Adicionar</button>
     </form>
@endsection
