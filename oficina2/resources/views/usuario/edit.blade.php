@extends('layout')

@section('title', 'Parallax - Usuário - Edit')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="{{URL::asset('img/usuario.png')}}" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Edição Usuário</span>
      </div>
    </div>
  </div>
</div>

<div class="container">    
  
    <form method="post" action="{{ route('usuario.update', $usuarios->id) }}">

  @csrf
  @method('PATCH')

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
            <option value="1" >Sim</option>
            <option value="0" >Não</option>
            @if("ativo" == 1)
              $usuarios->ativo = 1
            @else
              $usuarios->ativo = 0
            @endif
          </select>
          <label>Ativo</label>
        </div>
        <div class="input-field col s12 m6">
          <select class="icons" name="administrador">
            <option value="1" >Sim</option>
            <option value="0" >Não</option>
            @if("administrador" == 1)
              $usuarios->administrador = 1
            @else
              $usuarios->administrador = 0
            @endif
          </select>
          <label>Administrador</label>
        </div>
      </div>

    </br>
    </br>
      <div align="right">
        <a href="/usuario" class="btn modal-trigger">Cancelar<i class="material-icons right">cancel</i></a>
        <!-- <button class="btn waves-effect waves-light" type="submit" name="salvar"><a href="usuario/index"> Cancelar<i class="material-icons right">cancel</i></a>
        </button> -->
        <button class="btn waves-effect waves-light" type="submit" name="salvar">Enviar
          <i class="material-icons right">send</i>
        </button>
      </div>
      
    </br>
    </form>

</div>


     

@endsection