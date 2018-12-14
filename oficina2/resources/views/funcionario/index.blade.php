<!-- <h3>Funcionários</h3>
<img src="img/funcionario.png" width="100px" height="100px"> -->
@extends('layout')
@section('title', 'Parallax - Usuário')
@section('content')
<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/funcionario.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Cadstro de Funcionários</span>
        <button data-toogle="incluir" data-target="incluir" class="btn modal-trigger">Incluir</button>
      </div>
    </div>
  </div>
</div>
<table class="striped highlight centered responsive-table" id="minhaTabela">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Apelido</th>
      <th scope="col">Equipe</th>
      <th scope="col">Compart.</th>
      <th scope="col">Painel Agenda</th>
      <th scope="col">Especialidades</th>
      <th scope="col">Cor</th>
      <th scope="col">Cor Letra</th>
      <th scope="col">Chapa</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
  @foreach($funcionarios as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Nome">{{ $w->nome }}</td>
          <td data-label="Apelido">{{ $w->apelido }}</td>
          <td data-label="Equipe">{{ $w->equipe }}</td>

          @if($w->compartilhado==1)
          <td data-label="Compartilhado">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="Compartilhado">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
            @endif 

          <td data-label="Painel Agenda">{{ $w->painel_agenda }}</td>
          <td data-label="Especialidade">{{ $w->especialidade }}</td>
          <td data-label="Cor">{{ $w->cor_apresentacao }}</td>
          <td data-label="Cor letra">{{ $w->cor_da_letra }}</td>
          <td data-label="Chapa">{{ $w->chapa }}</td>
          <td data-label="Usuário">{{ $w->usuario }}</td>
          
       </tr>
     @endforeach
  </tbody>
</table>

<div id="incluir" class="modal modal-fixed-footer">
  <form method="post" action="{{ route('usuario.store')}}" class="col s12">
    <div class="modal-content">
      @csrf
      <div class="modal-body">
        <h4>Novo Funcionário</h4>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="nome">
            <label>Nome</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="apelido">
            <label>Apelido</label>
          </div>
        </div>
        <div class="row">
         

        <div class="input-field col s12">
                  <select name="usuario">
                     <option value="Arial">Arial</option>
                  </select>
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
            <input type="text" name="cor_da_letra">
            <label>Cor Apresentação</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="cor_da_letra">
            <label>Cor da Letra</label>
          </div>
        </div>
        

        <div class="row">
          <div class="input-field col s12">
            <select name="equipe">
                     <option value="Arial">Arial</option>
                  </select>
                  <label>equipe</label>
               </div>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Produtivo</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Compartilhado</label>
          </div>
        </div>
     
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Especialida</label>
          </div>
        </div>
     
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Consultpr</label>
          </div>
        </div>
     
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Painel Agenda</label>
          </div>
        </div>
     
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="cafe_da_manha_inicio">
            <label>Café da manhã inicio</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Café da manhã fim</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Almoço inicio</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Almoço fim</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="cafe_da_manha_inicio">
            <label>Café da tarde inicio</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="produtivo">
            <label>Café da tarde fim</label>
          </div>
        </div>

      </div>
      <div class="modal-footer">
      <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
      <button class="btn waves-effect waves-light" type="submit">Adicionar<i class="material-icons right">add</i>
      </button>
      </form>
    </div>
    </div>
</div>


@endsection

