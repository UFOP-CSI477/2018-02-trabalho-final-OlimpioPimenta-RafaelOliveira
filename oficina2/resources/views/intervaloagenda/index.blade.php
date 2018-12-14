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


<table class="striped highlight responsive-table">
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
                  <select name="Consultor">>
                     <option disabled selected>escolha sua opção</option>
                     <option value=G>Mestre Kame</option>
                     <option value=M>Mestre Saitama</option>
                     <option value=R>Ryu</option>
                     <option value=J>Jiraya</option>
                     <option value=G>Godofrido</option>
                     <option value=C>Cebesta</option>
                  </select>
                  <label>Consultor</label>
               </div>
                <br/>
               <div class="input-field col s12">
                  <select name="Tipo">>
                     <option disabled selected>escolha sua opção</option>
                     <option value=G>G - Agendados</option>
                     <option value=A>A - Almoço</option>
                     <option value=E>E - Entregas</option>
                     <option value=P>P - Passantes</option>
                  </select>
                  <label>Tipo</label>
               </div>

               <br/>
               <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                     <option value='07:30:00'>07:30:00</option>
                     <option value='07:40:00'>07:40:00</option
                     ><option value='07:50:00'>07:50:00</option>
                     <option value='08:00:00'>08:00:00</option>
                     <option value='08:10:00'>08:10:00</option>
                     <option value='08:20:00'>08:20:00</option>
                     <option value='08:30:00'>08:30:00</option>
                     <option value='08:40:00'>08:40:00</option>
                     <option value='08:50:00'>08:50:00</option>
                     <option value='09:00:00'>09:00:00</option>
                     <option value='09:10:00'>09:10:00</option>
                     <option value='09:20:00'>09:20:00</option>
                     <option value='09:30:00'>09:30:00</option>
                     <option value='09:40:00'>09:40:00</option>
                     <option value='09:50:00'>09:50:00</option>
                     <option value='10:00:00'>10:00:00</option>
                     <option value='10:10:00'>10:10:00</option>
                     <option value='10:20:00'>10:20:00</option>
                     <option value='10:30:00'>10:30:00</option>
                     <option value='10:40:00'>10:40:00</option>
                     <option value='10:50:00'>10:50:00</option>
                     <option value='11:00:00'>11:00:00</option>
                     <option value='11:10:00'>11:10:00</option>
                     <option value='11:20:00'>11:20:00</option>
                     <option value='11:30:00'>11:30:00</option>
                     <option value='11:40:00'>11:40:00</option>
                     <option value='11:50:00'>11:50:00</option>
                     <option value='12:00:00'>12:00:00</option>
                     <option value='12:10:00'>12:10:00</option>
                     <option value='12:20:00'>12:20:00</option>
                     <option value='12:30:00'>12:30:00</option>
                     <option value='12:40:00'>12:40:00</option>
                     <option value='12:50:00'>12:50:00</option>
                     <option value='13:00:00'>13:00:00</option>
                     <option value='13:10:00'>13:10:00</option>
                     <option value='13:20:00'>13:20:00</option>
                     <option value='13:30:00'>13:30:00</option>
                     <option value='13:40:00'>13:40:00</option>
                     <option value='13:50:00'>13:50:00</option>
                     <option value='14:00:00'>14:00:00</option>
                     <option value='14:10:00'>14:10:00</option>
                     <option value='14:20:00'>14:20:00</option>
                     <option value='14:30:00'>14:30:00</option>
                     <option value='14:40:00'>14:40:00</option>
                     <option value='14:50:00'>14:50:00</option>
                     <option value='15:00:00'>15:00:00</option>
                     <option value='15:10:00'>15:10:00</option>
                     <option value='15:20:00'>15:20:00</option>
                     <option value='15:30:00'>15:30:00</option>
                     <option value='15:40:00'>15:40:00</option>
                     <option value='15:50:00'>15:50:00</option>
                     <option value='16:00:00'>16:00:00</option>
                     <option value='16:10:00'>16:10:00</option>
                     <option value='16:20:00'>16:20:00</option>
                     <option value='16:30:00'>16:30:00</option>
                     <option value='16:40:00'>16:40:00</option>
                     <option value='16:50:00'>16:50:00</option>
                     <option value='17:00:00'>17:00:00</option>
                     <option value='17:10:00'>17:10:00</option>
                     <option value='17:20:00'>17:20:00</option>
                     <option value='17:30:00'>17:30:00</option>
                     <option value='17:40:00'>17:40:00</option>
                     <option value='17:50:00'>17:50:00</option>
                     <option value='18:00:00'>18:00:00</option>
                     <option value='18:10:00'>18:10:00</option>
                  </select>
                  <label>Hora Inicial</label>
               </div>
               <br/>
               <div class="input-field col s12">
                  <select name="tipo_letra_produt">>
                     <option disabled selected>escolha sua opção</option>
                     <option value='07:30:00'>07:30:00</option>
                     <option value='07:40:00'>07:40:00</option
                     ><option value='07:50:00'>07:50:00</option>
                     <option value='08:00:00'>08:00:00</option>
                     <option value='08:10:00'>08:10:00</option>
                     <option value='08:20:00'>08:20:00</option>
                     <option value='08:30:00'>08:30:00</option>
                     <option value='08:40:00'>08:40:00</option>
                     <option value='08:50:00'>08:50:00</option>
                     <option value='09:00:00'>09:00:00</option>
                     <option value='09:10:00'>09:10:00</option>
                     <option value='09:20:00'>09:20:00</option>
                     <option value='09:30:00'>09:30:00</option>
                     <option value='09:40:00'>09:40:00</option>
                     <option value='09:50:00'>09:50:00</option>
                     <option value='10:00:00'>10:00:00</option>
                     <option value='10:10:00'>10:10:00</option>
                     <option value='10:20:00'>10:20:00</option>
                     <option value='10:30:00'>10:30:00</option>
                     <option value='10:40:00'>10:40:00</option>
                     <option value='10:50:00'>10:50:00</option>
                     <option value='11:00:00'>11:00:00</option>
                     <option value='11:10:00'>11:10:00</option>
                     <option value='11:20:00'>11:20:00</option>
                     <option value='11:30:00'>11:30:00</option>
                     <option value='11:40:00'>11:40:00</option>
                     <option value='11:50:00'>11:50:00</option>
                     <option value='12:00:00'>12:00:00</option>
                     <option value='12:10:00'>12:10:00</option>
                     <option value='12:20:00'>12:20:00</option>
                     <option value='12:30:00'>12:30:00</option>
                     <option value='12:40:00'>12:40:00</option>
                     <option value='12:50:00'>12:50:00</option>
                     <option value='13:00:00'>13:00:00</option>
                     <option value='13:10:00'>13:10:00</option>
                     <option value='13:20:00'>13:20:00</option>
                     <option value='13:30:00'>13:30:00</option>
                     <option value='13:40:00'>13:40:00</option>
                     <option value='13:50:00'>13:50:00</option>
                     <option value='14:00:00'>14:00:00</option>
                     <option value='14:10:00'>14:10:00</option>
                     <option value='14:20:00'>14:20:00</option>
                     <option value='14:30:00'>14:30:00</option>
                     <option value='14:40:00'>14:40:00</option>
                     <option value='14:50:00'>14:50:00</option>
                     <option value='15:00:00'>15:00:00</option>
                     <option value='15:10:00'>15:10:00</option>
                     <option value='15:20:00'>15:20:00</option>
                     <option value='15:30:00'>15:30:00</option>
                     <option value='15:40:00'>15:40:00</option>
                     <option value='15:50:00'>15:50:00</option>
                     <option value='16:00:00'>16:00:00</option>
                     <option value='16:10:00'>16:10:00</option>
                     <option value='16:20:00'>16:20:00</option>
                     <option value='16:30:00'>16:30:00</option>
                     <option value='16:40:00'>16:40:00</option>
                     <option value='16:50:00'>16:50:00</option>
                     <option value='17:00:00'>17:00:00</option>
                     <option value='17:10:00'>17:10:00</option>
                     <option value='17:20:00'>17:20:00</option>
                     <option value='17:30:00'>17:30:00</option>
                     <option value='17:40:00'>17:40:00</option>
                     <option value='17:50:00'>17:50:00</option>
                     <option value='18:00:00'>18:00:00</option>
                     <option value='18:10:00'>18:10:00</option>
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

