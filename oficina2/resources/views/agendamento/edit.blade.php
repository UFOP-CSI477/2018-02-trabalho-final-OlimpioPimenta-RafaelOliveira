@extends('layout')
@section('title', 'Parallax - Agendamento')

@section('content')

<div class="col s12 m5">
   <div class="card horizontal card-panel teal">
      <div class="card-image">
         <img src="img/agendamento.png" width="80px" height="80px">
      </div>
      <div class="card-stacked">
         <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Agendamento</span>
            <button data-toogle="incluir" data-target="incluir" class="btn modal-trigger">Incluir</button>
         </div>
      </div>
   </div>
</div>

<form method="post" action="{{ route('agendamento.update', $agendamento->id) }}" class="col s12">
      
         @csrf
         @method('PATCH')

         <div class="modal-body">
             <h4>Editar Agendamento</h4>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="consultor" value="{{ $agendamento->consultor }}">
                  <label>Consultor</label>
               </div>
               <div class="input-field col s12">
                  <select class="icons" name="tipo">
                     <option value=""></option>
                     <option value="Almoço">Almoço</option> 
                     <option value="Entregas">Entregas</option>   
                     <option value="Agendados">Agendados</option>   
                     <option value="Passantes">Passantes</option>                   
                  </select>
                  <label>Tipo</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="cliente" value="{{ $agendamento->cliente }}">
                  <label>Cliente</label>
               </div>
               <div class="input-field col s12">
                  <select class="icons" name="status">
                     <option value=""></option>
                     <option value="agendado">agendado</option>
                     <option value="marcado">marcado</option>
                     <option value="resolvido">resolvido</option>
                  </select>
                  <label>Status</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="placa" value="{{ $agendamento->placa }}" >
                  <label>Placa (AAA-0000)</label>
               </div>
               <div class="input-field col s12">
                  <select class="icons" name="modelo">
                     <option value=""></option>
                     <option value="A1">A1</option>
                     <option value="A3">A3</option>
                     <option value="A4">A4</option>
                     <option value="A5">A5</option>
                     <option value="Q3">Q3</option>
                     <option value="Q5">Q5</option>
                     <option value="Q6">Q6</option>
                  </select>
                  <label>Modelo</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="text" name="dd" value="{{ $agendamento->dd }}">
                  <label>DDD</label>
               </div>
               <div class="input-field col s12 m6">
                  <input type="tel" name="telefone" value="{{ $agendamento->telefone }}">
                  <label>Telefone (xxxx-xxxx)</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="date" name="data" value="{{ $agendamento->data }}">
                  <label>Data</label>         
               </div>
               <div class="input-field col s12 m6">
                  <select class="icons" name="horario">
                        <option value=""></option>
                        <option value='08:00:00'>08:00:00</option>
                        <option value='08:15:00'>08:15:00</option>
                        <option value='08:30:00'>08:30:00</option>
                        <option value='08:45:00'>08:45:00</option>
                        <option value='09:00:00'>09:00:00</option>
                        <option value='09:15:00'>09:15:00</option>
                        <option value='09:30:00'>09:30:00</option>
                        <option value='09:45:00'>09:45:00</option>
                        <option value='10:00:00'>10:00:00</option>
                        <option value='10:15:00'>10:15:00</option>
                        <option value='10:30:00'>10:30:00</option>
                        <option value='10:45:00'>10:45:00</option>
                        <option value='11:00:00'>11:00:00</option>
                        <option value='11:15:00'>11:15:00</option>
                        <option value='11:30:00'>11:30:00</option>
                        <option value='11:45:00'>11:45:00</option>
                        <option value='12:00:00'>12:00:00</option>
                        <option value='12:15:00'>12:15:00</option>
                        <option value='12:30:00'>12:30:00</option>
                        <option value='12:45:00'>12:45:00</option>
                        <option value='13:00:00'>13:00:00</option>
                        <option value='13:15:00'>13:15:00</option>
                        <option value='13:30:00'>13:30:00</option>
                        <option value='13:45:00'>13:45:00</option>
                        <option value='14:00:00'>14:00:00</option>
                        <option value='14:15:00'>14:15:00</option>
                        <option value='14:30:00'>14:30:00</option>
                        <option value='14:45:00'>14:45:00</option>
                        <option value='15:00:00'>15:00:00</option>
                        <option value='15:15:00'>15:15:00</option>
                        <option value='15:30:00'>15:30:00</option>
                        <option value='15:45:00'>15:45:00</option>
                        <option value='16:00:00'>16:00:00</option>
                        <option value='16:15:00'>16:15:00</option>
                        <option value='16:30:00'>16:30:00</option>
                        <option value='16:45:00'>16:45:00</option>
                        <option value='17:00:00'>17:00:00</option>
                        <option value='17:15:00'>17:15:00</option>
                        <option value='17:30:00'>17:30:00</option>
                        <option value='17:45:00'>17:45:00</option>
                        <option value='18:00:00'>18:00:00</option>    
                  </select>
                  <label>Horário</label>
               </div>            
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="date" name="data_prometida" value="{{ $agendamento->data_prometida }}">
                  <label>Data Prometida</label>         
               </div>
               <div class="input-field col s12 m6">
                  <select class="icons" name="horario_prometido">
                        <option value=""></option>
                        <option value='08:00:00'>08:00:00</option>
                        <option value='08:15:00'>08:15:00</option>
                        <option value='08:30:00'>08:30:00</option>
                        <option value='08:45:00'>08:45:00</option>
                        <option value='09:00:00'>09:00:00</option>
                        <option value='09:15:00'>09:15:00</option>
                        <option value='09:30:00'>09:30:00</option>
                        <option value='09:45:00'>09:45:00</option>
                        <option value='10:00:00'>10:00:00</option>
                        <option value='10:15:00'>10:15:00</option>
                        <option value='10:30:00'>10:30:00</option>
                        <option value='10:45:00'>10:45:00</option>
                        <option value='11:00:00'>11:00:00</option>
                        <option value='11:15:00'>11:15:00</option>
                        <option value='11:30:00'>11:30:00</option>
                        <option value='11:45:00'>11:45:00</option>
                        <option value='12:00:00'>12:00:00</option>
                        <option value='12:15:00'>12:15:00</option>
                        <option value='12:30:00'>12:30:00</option>
                        <option value='12:45:00'>12:45:00</option>
                        <option value='13:00:00'>13:00:00</option>
                        <option value='13:15:00'>13:15:00</option>
                        <option value='13:30:00'>13:30:00</option>
                        <option value='13:45:00'>13:45:00</option>
                        <option value='14:00:00'>14:00:00</option>
                        <option value='14:15:00'>14:15:00</option>
                        <option value='14:30:00'>14:30:00</option>
                        <option value='14:45:00'>14:45:00</option>
                        <option value='15:00:00'>15:00:00</option>
                        <option value='15:15:00'>15:15:00</option>
                        <option value='15:30:00'>15:30:00</option>
                        <option value='15:45:00'>15:45:00</option>
                        <option value='16:00:00'>16:00:00</option>
                        <option value='16:15:00'>16:15:00</option>
                        <option value='16:30:00'>16:30:00</option>
                        <option value='16:45:00'>16:45:00</option>
                        <option value='17:00:00'>17:00:00</option>
                        <option value='17:15:00'>17:15:00</option>
                        <option value='17:30:00'>17:30:00</option>
                        <option value='17:45:00'>17:45:00</option>
                        <option value='18:00:00'>18:00:00</option>    
                  </select>
                  <label>Horário Prometido</label>
               </div>             
            </div>
            <div class="row">
               <div class="input-field col s12 m4">
                  <select class="icons" name="retorno" >
                     <option value="1" >Sim</option>
                     <option value="0" >Não</option>
                  </select>
                  <label>Retorno</label>
               </div>
               <div class="input-field col s12 m4">
                  <select class="icons" name="chegada">
                     <option value="Emergência">Emergência</option>
                     <option value="Prioridade">Prioridade</option>
                     <option value="Urgência">Urgência</option>
                     <option value="Pouco Urgente">Pouco Urgente</option>
                     <option value="Não Urgente">Não Urgente</option>
                  </select>
                  <label>Chegada</label>
               </div>
               <div class="input-field col s12 m4">
                  <select class="icons" name="status">
                        <option value=""></option>
                        <option value="Programada">Programada</option>
                        <option value="Em Execução">Em Execução</option>
                        <option value="Entrege">Entrege</option>
                        <option value="Pendente (a Programar)">Pendente (a Programar)</option>
                        <option value="Pronta">Pronta</option>
                        <option value="Lavagem">Lavagem</option>
                        <option value="Aguardando Peça">Aguardando Peça</option>
                        <option value="Aguardando Aprovação">Aguardando Aprovação</option>
                        <option value="Cancelada">Cancelada</option>
                        <option value="Reprogramar">Reprogramar</option>
                        <option value="Demonstração">Demonstração</option>
                  </select>
                  <label>Status</label>
               </div>
            </div>
          </div> 
       <div class="modal-footer" align="right">
         <a href="/agendamento" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
         <button class="btn waves-effect waves-light" type="submit">Atualizar<i class="material-icons right">autorenew</i>
    	 </button>
         <p align="left">*Tempo máximo de conserto: 10 dias</p>
      </div>
   </form>

@endsection