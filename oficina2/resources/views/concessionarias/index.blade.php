
@extends('layout')

@section('title', 'Parallax - Usuário')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/concessionarias.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de Concessionárias</span>
         <button data-target="modal1" class="btn modal-trigger">Incluir</button>
      </div>
    </div>
  </div>
</div>



<table class="striped highlight centered responsive-table" id="minhaTabela">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Nome Fantasia</th>
          <th scope="col">Razão Social</th>
          <th scope="col">Num.Dealer</th>
       </tr>
    </thead>
    <tbody>

    @foreach($concessionarias as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Id">{{ $w->nome_fantasia }}</td>
          <td data-label="Usuário">{{ $w->razao_social }}</td>
          <td data-label="Chapa">{{ $w->num_dealer }}</td>
       </tr>
     @endforeach
   </tbody>
 </table>


 <!-- Modal Structure Incluir-->
 <div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
  
    <div class="text-white card-panel teal lighten-1">
      <h5>Nova Concessionária</h5>
    </div>
  
      <br/>
      <form method="POST" action="{{route('concessionarias.store')}}"   class="col s12">
      @csrf
        <div clas="row">
            <div class="input-field col s12">
              <input id="num_dealer" type="text" class="validate" name="num_dealer">
              <label for="num_dealer">Num. Dealer</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="nome_fantasia" type="text" class="validate" name="nome_fantasia">
              <label for="nome_fantasia">Nome Fantasia</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="razao_social" type="text" class="validate" name="razao_social">
              <label for="razao_social">Razão Social</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="dvisoes_agenda" type="text" class="validate" name="dvisoes_agenda">
              <label for="dvisoes_agenda">Divisões Agenda</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="hora_inicio_agenda" type="date" class="validate" name="hora_inicio_agenda">
              <label for="hora_inicio_agenda">Hora Inicio Agenda</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="hora_fim_agenda" type="date" class="validate" name="hora_fim_agenda">
              <label for="hora_fim_agenda">Hora Fim Agenda</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="nome" type="text" class="validate" name="nome">
              <label for="nome">Divisões Agenda</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="divisoes_programacao" type="text" class="validate" name="divisoes_programacao">
              <label for="divisoes_programacao">Divisões Programação</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="hora_inicio_prog" type="date" class="validate" name="hora_inicio_prog">
              <label for="hora_inicio_prog">Hora Inicio Prog.</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="hora_final_prog" type="date" class="validate" name="hora_final_prog">
              <label for="hora_final_prog">Hora Final de Prog</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="fuso_horario" type="text" class="validate" name="fuso_horario">
              <label for="fuso_horario">Fuso Horário</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_de_intervalos" type="text" class="validate" name="cor_de_intervalos">
              <label for="cor_de_intervalos">Cor de Intervalo</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_inicio_apontamento" type="text" class="validate" name="cor_inicio_apontamento">
              <label for="cor_inicio_apontamento">Cor inicio APontamento</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_apontamento_1" type="text" class="validate" name="cor_apontamento_1">
              <label for="cor_apontamento_1">Cor Apontamento 1</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="porcentagem_apontamento_1" type="text" class="validate" name="porcentagem_apontamento_1">
              <label for="porcentagem_apontamento_1">% Apontamento 1</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_apontamento_2" type="text" class="validate" name="cor_apontamento_2">
              <label for="cor_apontamento_2">Cor Apontamento 2</label>
            </div>
        </div>

        <div clas="row">
            <div class="input-field col s12">
              <input id="porcentagem_apontamento_2" type="text" class="validate" name="porcentagem_apontamento_2">
              <label for="porcentagem_apontamento_2">% Apontamento 2</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="porcentagem_apontamento_3" type="text" class="validate" name="porcentagem_apontamento_3">
              <label for="porcentagem_apontamento_3">% Apontamento 3</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_apontamento_terminado" type="text" class="validate" name="cor_apontamento_terminado">
              <label for="cor_apontamento_terminado">Cor Apont. Terminado</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="cor_apontamento_orfao" type="text" class="validate" name="cor_apontamento_orfao">
              <label for="cor_apontamento_orfao">Cor Apont. Órfão</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="url_logo" type="text" class="validate" name="url_logo">
              <label for="url_logo">URL do Logo</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="url_logo_1" type="text" class="validate" name="url_logo_1">
              <label for="url_logo_1">URL do Logo1</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="email_interface" type="text" class="validate" name="email_interface">
              <label for="email_interface">e-mail Interface</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="nome" type="text" class="validate" name="nome">
              <label for="nome">Divisões Agenda*</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
              <input id="versao_layout" type="text" class="validate" name="versao_layout">
              <label for="versao_layout">Versão Layout</label>
            </div>
        </div>



        <div clas="row">
            <div class="input-field col s12">
              <input id="estilo_angeda" type="text" class="validate" name="estilo_angeda">
              <label for="estilo_angeda">Celular</label>
            </div>
        </div>

  </div>
  <div class="modal-footer">
    <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button type="submit" id="submitForm"  class="btn modal-send">Enviar<i class="material-icons right">add</i></button>
    
    </form>
  </div>
</div>

 @endsection
