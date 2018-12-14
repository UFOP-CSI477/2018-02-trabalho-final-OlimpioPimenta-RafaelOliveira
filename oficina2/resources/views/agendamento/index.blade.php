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


<!-- 
bgcolor="#F10303" emergencia
bgcolor="#FE6400" prioridade
bgcolor="#FDCA00" urgencia
bgcolor="#00A200" pouco urgente
bgcolor="#072291" nao urgente -->


<table class="highlight centered responsive-table">
   <thead>
      <tr>
         <th scope="col"></th>
         <th scope="col"></th>
         <th scope="col">ID</th>
         <th scope="col">CONSULTOR</th>
         <th scope="col">TIPO</th>
         <th scope="col">MODELO</th>
         <th scope="col">STATUS</th>
         <th scope="col">CLIENTE</th>
         <th scope="col">PLACA</th>
         <th scope="col">DDD</th>
         <th scope="col">TELEFONE</th>
         <th scope="col">DATA</th>
         <th scope="col">HORÁRIO</th>
         <th scope="col">DATA COMPROMETIDA</th>
         <th scope="col">HORÁRIO COMPROMETIDO</th>
         <th scope="col">RETORNO</th>
         <th scope="col">CHEGADA</th>
      </tr>
   </thead>
   <tbody>
      @foreach($agendamento as $w)
      <tr>
         <th class="col"><a href="{{ route('agendamento.edit', $w->id) }}" class="waves-effect waves-light btn yellow">Editar</a></th>
         <th class="col">
            <form method="post" action="{{ route('agendamento.destroy', $w->id) }}" onsubmit="return confirm('Confirma exclusão do agendamento do Sr.(a): {{ $w->cliente }} ?');" >
               @csrf
               @method('DELETE')
               <input class="btn red" type="submit" value="Excluir">
            </form>
         </th>

         <td data-label="id">{{ $w->id }}</td>
         <td data-label="id">{{ $w->consultor }}</td>
         <td data-label="id">{{ $w->tipo }}</td>
         <td data-label="id">{{ $w->modelo }}</td>
         <td data-label="id">{{ $w->status }}</td>
         <td data-label="cliente">{{ $w->cliente }}</td>
         <td data-label="placa">{{ $w->placa }}</td>
         <td data-label="dd">{{ $w->dd }}</td>
         <td data-label="telefone">{{ $w->telefone }}</td>
         <td data-label="data">{{ $w->data }}</td>
         <td data-label="horario">{{ $w->horario }}</td>
         <td data-label="data_comprometida">{{ $w->data_prometida }}</td>
         <td data-label="horario_comprometido">{{ $w->horario_prometido }}</td>
         <td data-label="retorno">{{ $w->retorno }}</td>
         @if(($w->chegada) == 'Emergência')
            <td bgcolor="#F10304" data-label="chegada">{{ $w->chegada }}</td>
         @elseif(($w->chegada) == 'Prioridade')
            <td bgcolor="#FE6400" data-label="chegada">{{ $w->chegada }}</td>
         @elseif(($w->chegada) == 'Urgência')
            <td bgcolor="#FDCA00" data-label="chegada">{{ $w->chegada }}</td>
         @elseif(($w->chegada) == 'Pouco Urgente')
            <td bgcolor="#00A200" data-label="chegada">{{ $w->chegada }}</td>
         @else
            <td bgcolor="#072291" data-label="chegada">{{ $w->chegada }}</td>
         @endif
      </tr>
      @endforeach
   </tbody>
</table>

<div id="incluir" class="modal modal-fixed-footer">
   <form method="post" action="{{ route('agendamento.store') }}" class="col s12">
      <div class="modal-content">
         @csrf

          <div class="modal-body">
             <h4>Novo Agendamento</h4>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="consultor">
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
                  <input type="text" name="cliente">
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
                  <input type="text" name="placa" >
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
                  <input type="text" name="dd">
                  <label>DDD</label>
               </div>
               <div class="input-field col s12 m6">
                  <input type="tel" name="telefone">
                  <label>Telefone (xxxx-xxxx)</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="date" name="data">
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
                  <input type="date" name="data_prometida">
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
                  <select class="icons" name="retorno">
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
      </div>
      <div class="modal-footer">
         <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
         <button class="btn waves-effect waves-light" type="submit">Adicionar<i class="material-icons right">add</i>
         </button>
         <p align="left">*Tempo máximo de conserto: 10 dias</p>
      </div>
   </form>
</div>


@endsection

