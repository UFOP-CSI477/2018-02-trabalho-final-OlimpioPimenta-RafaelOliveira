@extends('layout')

@section('title', 'Parallax - Exclusão Usuário')

@section('content')

<form method="post" action="{{ route('usuario.destroy', $usuarios->id) }}">

    @csrf
    @method('DELETE')

    <div class="row">
        <div class="input-field col s12">
          <input type="text" name="usuario" value="{{ $usuarios->usuario }}">
          <label>Digite o usuário a excluir</label>
        </div>
    </div>
    
   	<button class="btn waves-effect waves-light" type="submit" name="salvar">Excluir
          <i class="material-icons right">remove_circle</i>
    </button>

  </form>

 @endsection
