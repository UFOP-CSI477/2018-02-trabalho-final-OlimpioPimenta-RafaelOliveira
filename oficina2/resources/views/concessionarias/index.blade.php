
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
      </div>
    </div>
  </div>
</div>



<table class="striped highlight centered responsive-table">
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

 @endsection
