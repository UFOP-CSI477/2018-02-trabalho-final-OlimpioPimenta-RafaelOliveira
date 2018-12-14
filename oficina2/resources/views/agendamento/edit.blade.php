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
                  <input type="text" name="cliente" value="{{ $agendamento->cliente }}">
                  <label>Cliente</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="placa" value="{{ $agendamento->placa}}">
                  <label>Placa (AAA-0000)</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="text" name="dd" value="{{ $agendamento->dd }}">
                  <label>DD</label>
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
                  <input type="text" name="horario" value="{{ $agendamento->horario }}">
                  <label>Horário (00:00)</label>         
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="date" name="data_prometida" value="{{ $agendamento->data_prometida }}">
                  <label>Data Prometida*</label>         
               </div>
               <div class="input-field col s12 m6">
                  <input type="text" name="horario_prometido" value="{{ $agendamento->horario_prometido }}">
                  <label>Horário Prometido (00:00)*</label>         
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <select class="icons" name="retorno">
                     <option value="1" >Sim</option>
                     <option value="0" >Não</option>
                  </select>
                  <label>Retorno</label>
               </div>
               <div class="input-field col s12 m6">
                  <select class="icons" name="chegada">
                     <option value="Emergência">Emergência</option>
                     <option value="Prioridade">Prioridade</option>
                     <option value="Urgência">Urgência</option>
                     <option value="Pouco Urgente">Pouco Urgente</option>
                     <option value="Não Urgente">Não Urgente</option>
                  </select>
                  <label>Chegada</label>
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