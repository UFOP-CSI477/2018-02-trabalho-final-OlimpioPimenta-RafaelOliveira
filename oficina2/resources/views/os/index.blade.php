<h3>OS</h3>
<img src="img/os.png" width="100px" height="100px">


@extends('layout')

@section('title', 'Parallax -OS')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/tipos_agenda.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de Ordens de Serviço</span>
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
          <th scope="col">OS</th>
          <th scope="col">Consultor</th>
          <th scope="col">Placa</th>
          <th scope="col">Prisma</th>
          <th scope="col">Modelo</th>
          <th scope="col">Cor</th>
          <th scope="col">Status</th>
       </tr>
    </thead>
    <tbody>

    @foreach($oss as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Código">{{ $w->codigo }}</td>
          <td data-label="Descrição">{{ $w->descricao }}</td>
          <td data-label="Cor" style="color: {{ $w->cor }};">{{ $w->cor }}</td>
          

       </tr>
     @endforeach
   </tbody>
 </table>


 <div id="incluir" class="modal modal-fixed-footer">
  <form method="post" action="{{ route('tipos.store')}}" class="col s12">
    <div class="modal-content">
      @csrf
      <div class="modal-body">
        <h4>Novo Tipo de Agendamento</h4>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="codigo">
            <label>Codigo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="descricao">
            <label>Descrição</label>
          </div>
        </div>
        
        <div clas="row">
            <div class="input-field col s12">
            <label>
                  <input id="produtivo" type="checkbox" value="1" name="apresenta_codigo"/>
                    <span>Apresenta Código</span>
                </label>
            </div>
        </div>
        <br/>
        <div clas="row">
            <div class="input-field col s12">
            <label>
                  <input id="produtivo" type="checkbox" value="1" name="apresenta_legenda"/>
                    <span>Apresenta Legenda</span>
                </label>
            </div>
        </div>
        <br/>
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
