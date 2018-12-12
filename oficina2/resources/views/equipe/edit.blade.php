<!-- <h3>Equipe</h3>
<img src="img/concessionaria_usuario.png" width="100px" height="100px"> -->
@extends('layout')

@section('title', 'Parallax - Editar')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
    
    <img src="{{URL::asset('img/concessionaria_usuario.png')}}" width="100px" height="100px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Editando Equipe</span>
      </div>
    </div>
  </div>
</div>

<!--
<div class="container">
  <img src="img/usuario.png" width="100px" height="100px"><h3>Usuário</h3>
</div> -->


<table class="striped highlight centered responsive-table">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
          <th scope="col">Letra Prog.</th>
          <th scope="col">Alt. Prog</th>
          <th scope="col">C/D</th>
          <th scope="col">Alt. Apont.</th>
          <th scope="col">Letra Produt</th>
          <th scope="col">Letra Hora</th>
          <th scope="col">Alt. Hora</th>
          <th scope="col">Tempo</th>
       </tr>
    </thead>
    <tbody>

    
       <tr>
          <td data-label="Código"></td>
          <td data-label="Descrição"></td>
          <td data-label="Letra Prog"></td>
          <td data-label="Alt. Prog"></td>
          <td data-label="C/D"></td>
          <td data-label="Alt. Apont"></td>
          <td data-label="Letra Produt"></td>
          <td data-label="Letra Hora"></td>
          <td data-label="Alt. Hora"></td>
          <td data-label="Tempo"></td>
       </tr>
     
   </tbody>
 </table>

 @endsection
