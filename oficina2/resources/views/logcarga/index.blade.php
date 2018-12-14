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

    @foreach($logcargas as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Tipo Registro">{{ $w->tipo_registro }}</td>
          <td data-label="Ação">{{ $w->acao }}</td>
          <td data-label="OS">{{ $w->os }}</td>
          <td data-label="Status">{{ $w->status }}</td>
          <td data-label="Data Carga">{{ $w->data_carga }}</td>
          <td data-label="Chapa">{{ $w->chapa }}</td>
          <td data-label="Process.">{{ $w->processado }}</td>
          <td data-label="Mensagem">{{ $w->erro_carga }}</td>


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
