@extends('layout')

@section('title', 'Parallax - Usuário')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
      <img src="img/usuario.png" width="80px" height="80px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Usuário</span>
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
          <th scope="col">ID</th>
          <th scope="col">USUÁRIO</th>
          <th scope="col">CHAPA</th>
          <th scope="col">SENHA</th>
          <th scope="col">CONFIRMA</th>
          <th scope="col">ATIVO</th>
          <th scope="col">ADMINISTRADOR</th>
       </tr>
    </thead>
    <tbody>

    @foreach($usuarios as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Id">{{ $w->id }}</td>
          <td data-label="Usuário">{{ $w->usuario }}</td>
          <td data-label="Chapa">{{ $w->chapa }}</td>
          <td data-label="Senha">{{ $w->senha }}</td>
          <td data-label="Confirma">{{ $w->confirma }}</td>
          <td data-label="Ativo">{{ $w->ativo }}</td>
          <td data-label="Administrador">{{ $w->administrador}}</td>
       </tr>
     @endforeach
   </tbody>
 </table>

 @endsection
