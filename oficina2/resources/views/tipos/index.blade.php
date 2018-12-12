
@extends('layout')

@section('title', 'Parallax - Usuário')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/tipos_agenda.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de tipo de Agendamento</span>
      </div>
    </div>
  </div>
</div>



<table class="striped highlight centered responsive-table">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
          <th scope="col">Cor</th>
          <th scope="col">Apres.Legenda</th>
          <th scope="col">Apres.Código</th>
       </tr>
    </thead>
    <tbody>

    @foreach($tipos as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Código">{{ $w->codigo }}</td>
          <td data-label="Descrição">{{ $w->descricao }}</td>
          <td data-label="Cor" style="color: {{ $w->cor }};">{{ $w->cor }}</td>
          @if (($w->apresenta_legenda) == 1)
            <td data-label="Apres.Legenda">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
          @else
            <td data-label="Apres.Legenda">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
          @endif    
          
          @if (($w->apresenta_codigo) == 1)
            <td data-label="Apres.Código">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
          @else
            <td data-label="Apres.Código">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
          @endif    
          

       </tr>
     @endforeach
   </tbody>
 </table>

 @endsection
