<h3>Log Carga</h3>
<img src="img/log_carga.png" width="100px" height="100px">

@extends('layout')

@section('title', 'Parallax - Log de Carga')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/status_agenda.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Log de Carga</span>
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
          <th scope="col">Tipo Registro</th>
          <th scope="col">Ação</th>
          <th scope="col">OS</th>
          <th scope="col">Status</th>
          <th scope="col">Data Carga</th>
          <th scope="col">Chapa</th>
          <th scope="col">Process.</th>
          <th scope="col">Mensagem</th>
          
       </tr>
    </thead>
    <tbody>

    @foreach($statusagendamentos as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Código do Status">{{ $w->codigo }}</td>
          <td data-label="Descrição do Status">{{ $w->descricao }}</td>

       </tr>
     @endforeach
   </tbody>
 </table>
 <div id="incluir" class="modal modal-fixed-footer">
  <form method="post" action="{{ route('statusagenda.store')}}" class="col s12">
    <div class="modal-content">
      @csrf
      <div class="modal-body">
        <h4>Novo Status Agendamento</h4>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="codigo">
            <label>Código</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="descricao">
            <label>Descrição</label>
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
</div>
 @endsection
