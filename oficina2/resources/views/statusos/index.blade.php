<!-- <h3>Status de OS</h3>
<img src="img/status_os.png" width="100px" height="100px"> -->

@extends('layout')

@section('title', 'Parallax - Status OS')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
    <img src="img/concessionaria_usuario.png" width="100px" height="100px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de Status OS</span>
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
          <th scope="col">Código do Status</th>
          <th scope="col">Descrição do Status</th>
          <th scope="col">Libera Prisma</th>
          <th scope="col">Consulta Web</th>
          <th scope="col">Envia SMS</th>
       </tr>
    </thead>
    <tbody>

    @foreach($statusos as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Código">{{ $w->id }}</td>
          <td data-label="Descrição">{{ $w->descricao }}</td>
          <td data-label="Libera Prisma">
          <form action="#">
          @if($w->libera_prisma==1)
          <input type="checkbox" id="test8" disabled="disabled" />
           @else  <input type="checkbox"  disabled="disabled" /> 
          @endif 
          </td>
          <td data-label="Consulta Web">
          @if($w->consulta_web==1)
            <input type="checkbox"  checked="checked" disabled="disabled" />
          @else  <input type="checkbox"  disabled="disabled" />
          @endif
          </td>
          
          <td data-label="Consulta Web">
          @if($w->envia_sms==1)
            <input type="checkbox"  checked="checked" disabled="disabled" />
          @else  <input type="checkbox"  disabled="disabled" />
          @endif
          </td>

       </tr>
     @endforeach
     </form>
   </tbody>
 </table>

 @endsection

