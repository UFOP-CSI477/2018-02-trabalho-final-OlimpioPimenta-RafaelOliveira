
@extends('layout')

@section('title', 'Parallax - Modelos')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
    <img src="img/log_carga.png" width="100px" height="100px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de Modelos</span>
      </div>
    </div>
  </div>
</div>




<table class="striped highlight responsive-table">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Modelo</th>
       </tr>
    </thead>
    <tbody>

    @foreach($modelos as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Especialidade">{{ $w->nome }}</td>
       </tr>
     @endforeach
   </tbody>
 </table>

 @endsection
