@extends('layout')
@section('title', 'Parallax - Usuário')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/usuario.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Usuário</span>
      </div>
    </div>
  </div>
</div>

<form method="post" action="{{ route('usuario.update', $usuarios->id)}}" class="col s12">
  @csrf
  @method('PATCH')
  <h4>Editar Usuário</h4>
  </br>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="usuario" value="{{ $usuarios->usuario }}">
      <label>Usuário</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="chapa" value="{{ $usuarios->chapa }}">
      <label>Chapa</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="senha" value="{{ $usuarios->senha }}">
      <label>Senha</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="confirma" value="{{ $usuarios->confirma }}">
      <label>Confirma Senha</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 m6">
      <select class="icons" name="ativo">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
      <label>Ativo</label>
    </div>
    <div class="input-field col s12 m6">
      <select class="icons" name="administrador">
        <option value="1" >Sim</option>
        <option value="0" >Não</option>
      </select>
      <label>Administrador</label>
    </div>
  </div>
  <div class="modal-footer" align="right">
    <a href="/usuario" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button class="btn waves-effect waves-light" type="submit">Atualizar<i class="material-icons right">autorenew</i>
    </button>
  </div>
</form>
</br>

@endsection

