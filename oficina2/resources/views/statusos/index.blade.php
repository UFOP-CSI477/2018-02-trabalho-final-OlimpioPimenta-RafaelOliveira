
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
          
          @if($w->libera_prisma==1)
          <td data-label="Libera Prisma">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="libera Prisma">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           

          @endif 
          
          
          @if($w->consulta_web==1)
          <td data-label="Consulta Web">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="libera Prisma">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
            @endif 

          @if($w->envia_sms==1)
          <td data-label="Envia SMS">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="libera Prisma">
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

