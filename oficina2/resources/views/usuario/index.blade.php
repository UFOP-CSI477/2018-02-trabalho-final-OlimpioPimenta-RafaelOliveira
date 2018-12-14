

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
        <button data-toogle="incluir" data-target="incluir" class="btn modal-trigger">Incluir</button>
      </div>
    </div>
  </div>
</div>
<table class="striped highlight centered responsive-table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">ID</th>
      <th scope="col">USUÁRIO</th>
      <th scope="col">CHAPA</th>
      <th scope="col">SENHA</th>
      <th scope="col">CONFIRMA</th>
      <th scope="col">ATIVO</th>
      <th scope="col">ADMINISTRADOR</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $w)
    <tr>
      @if (($w->administrador) == 1)
      <th class="col"><a href="{{ route('usuario.edit', $w->id) }}" class="waves-effect waves-light btn yellow">Editar</a></th>
      <th class="col">
        <form method="post" action="{{ route('usuario.destroy', $w->id) }}" onsubmit="return confirm('Confirma exclusão do Usuário: {{ $w->usuario }} ?');" >
          @csrf
          @method('DELETE')
          <input class="btn red" type="submit" value="Excluir">
        </form>
      </th>
      @else
      <th class="col"><a class="waves-effect waves-light btn yellow">Editar</a></th>
      <th scope="col">
        <input class="btn red" type="submit" value="Excluir">
      </th>
      @endif
      <td data-label="ID">{{ $w->id }}</td>
      <td data-label="Usuário">{{ $w->usuario }}</td>
      <td data-label="Chapa">{{ $w->chapa }}</td>
      <td data-label="Senha">*****</td>
      <td data-label="Confirma">*****</td>
      @if (($w->ativo) == 1)
      <td data-label="Ativo">
        <label>
        <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
        <span></span>
        </label>
      </td>
      @else
      <td data-label="Ativo">
        <label>
        <input type="checkbox" class="filled-in" disabled="disabled"/>
        <span></span>
        </label>
      </td>
      @endif
      @if (($w->administrador) == 1)
      <td data-label="Administrador">
        <label>
        <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
        <span></span>
        </label>
      </td>
      @else
      <td data-label="Administrador">
        <label>
        <input type="checkbox" class="filled-in" disabled="disabled"/>
        <span></span>
        </label>
      </td>
      @endif          
    </tr>
    @endforeach
  </tbody>
</table>
<div id="incluir" class="modal modal-fixed-footer">
  <form method="post" action="{{ route('usuario.store')}}" class="col s12">
    <div class="modal-content">
      @csrf
      <div class="modal-body">
        <h4>Novo Usuário</h4>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="usuario">
            <label>Usuário</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="chapa">
            <label>Chapa</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="password" name="senha">
            <label>Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="password" name="confirma">
            <label>Confirma Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6">
            <select class="icons" name="ativo">
              <option value="1" >Sim</option>
              <option value="0" >Não</option>
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
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
      <button class="btn waves-effect waves-light" type="submit">Adicionar<i class="material-icons right">add</i>
      </button>
    </div>
  </form>
</div>
@endsection

