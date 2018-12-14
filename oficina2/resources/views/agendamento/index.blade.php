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
         <th scope="col">HORÁRIO COMPROMETIDA</th>
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
               <div class="input-field col s12 m6">
                  <select class="icons" name="consultor">
                     @foreach
                        <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                     @endforeach
                  </select>
                  <label>Consultor</label>
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
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="cliente">
                  <label>Cliente</label>
               </div>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="cliente">
                  <label>Cliente</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input type="text" name="placa" >
                  <label>Placa (AAA-0000)</label>
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
                  <input type="text" name="horario">
                  <label>Horário (00:00)</label>         
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 m6">
                  <input type="date" name="data_prometida">
                  <label>Data Prometida*</label>         
               </div>
               <div class="input-field col s12 m6">
                  <input type="text" name="horario_prometido">
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

