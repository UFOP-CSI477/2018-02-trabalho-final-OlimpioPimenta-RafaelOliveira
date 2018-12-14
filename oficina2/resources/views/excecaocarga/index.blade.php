<!-- <h3>Exceção Carga</h3>
<img src="img/excecao_carga.png" width="100px" height="100px"> -->

@extends('layout')

@section('title', 'Parallax - Exceção Carga')

@section('content')

<div class="col s12 m5">
  <div class="card horizontal card-panel teal">
    <div class="card-image">
    <img src="img/excecao_carga.png" width="100px" height="100px">
    </div>
    <div class="card-stacked">
      <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Lista de  Exceção da Carga</span>
         <button data-target="modal1" class="btn modal-trigger">Incluir</button>
      </div>
    </div>
  </div>
</div>

<!--
<div class="container">
  <img src="img/usuario.png" width="100px" height="100px"><h3>Usuário</h3>
</div> -->


<table class="striped highlight responsive-table" id="minhaTabela">
    <thead>
       <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Chapa</th>
          <th scope="col">Prdoutivo</th>
          <th scope="col">Consultor</th>
       </tr>
    </thead>
    <tbody>

    @foreach($excecaocargas as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Chapa">{{ $w->chapa }}</td>


          @if($w->produtivo==1)
          <td data-label="Produtivo">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="Produtivo">
                <label>
                  <input type="checkbox" class="filled-in" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
            @endif 


            @if($w->consultor==1)
          <td data-label="consultor">
                <label>
                  <input type="checkbox" class="filled-in" checked="checked" disabled="disabled"/>
                  <span></span>
                </label>
            </td>
           @else            
           <td data-label="consultor">
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

 <!-- Modal Structure Incluir-->
 <div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
  
    <div class="text-white card-panel teal lighten-1">
      <h5>Nova Exceção de Carga</h5>
    </div>
  
      <br/>
      <form method="POST" action="{{route('excecaocarga.store')}}"   class="col s12">
      @csrf
        <div clas="row">
            <div class="input-field col s12">
              <input id="chapa" type="text" class="validate" name="chapa">
              <label for="chapa">Nome Exceção Carga</label>
            </div>
        </div>


        <div clas="row">
            <div class="input-field col s12">
            <label>
                  <input id="produtivo" type="checkbox" value="1" name="produtivo"/>
                    <span>Produtivo</span>
                </label>
            </div>
        </div>
        <br/>
        
        <div clas="row">
            <div class="input-field col s12">
            <label>
                  <input id="consultor" type="checkbox" value="1" name="consultor"/>
                    <span>Consultor</span>
                </label>
            </div>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button type="submit" id="submitForm"  class="btn modal-send">Enviar<i class="material-icons right">add</i></button>
    
    </form>
  </div>
</div>

 @endsection

