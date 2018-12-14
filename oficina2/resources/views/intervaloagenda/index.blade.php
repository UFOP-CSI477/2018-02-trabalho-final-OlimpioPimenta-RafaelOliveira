<!-- <h3>Intervalo Agenda</h3>
<img src="img/intervalo_agenda.png" width="100px" height="100px"> -->
@extends('layout')

@section('title', 'Parallax - Intervalo Agenda')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
    <img src="img/intervalo_agenda.png" width="100px" height="100px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de Intervalos da Agenda</span>
         <button data-target="modal1" class="btn modal-trigger">Incluir</button>
      </div>
    </div>
  </div>
</div>

<!--
<div class="container">
  <img src="img/usuario.png" width="100px" height="100px"><h3>Usuário</h3>
</div> -->


<table class="striped highlight responsive-table" id="minhaTabela">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Chapa</th>
          <th scope="col">Prdoutivo</th>
          <th scope="col">Consultor</th>
       </tr>
    </thead>
    <tbody>

    @foreach($intervaloagendas as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Chapa">{{ $w->consultor }}</td>
          <td data-label="Chapa">{{ $w->chapa }}</td>
          <td data-label="Chapa">{{ $w->hora_inicial }}</td>
          <td data-label="Chapa">{{ $w->hora_finak }}</td>
          <td data-label="Chapa">{{ $w->tipo }}</td>
       </tr>
     @endforeach
   </tbody>
 </table>

 <!-- Modal Structure Incluir-->
 <div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
  
    <div class="text-white card-panel teal lighten-1">
      <h5>Novo Intervalo Agenda</h5>
    </div>
  
      <br/>
      <form method="POST" action="{{route('intervaloagenda.store')}}"   class="col s12">
      @csrf
        <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                     <option value="Arial">Arial</option>
                  </select>
                  <label>Consultor</label>
               </div>
                <br/>
               <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                     <option value="Arial">Arial</option>
                  </select>
                  <label>Tipo</label>
               </div>

               <br/>
               <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                     <option value="Arial">Arial</option>
                  </select>
                  <label>Hora Inicial</label>
               </div>
               <br/>
               <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                  </select>
                  <label>Hora Final</label>
               </div>


  </div>
  <div class="modal-footer">
    <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button type="submit" id="submitForm"  class="btn modal-send">Enviar<i class="material-icons right">add</i></button>
    
    </form>
  </div>
</div>

 @endsection

