
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
         <button data-target="modal1" class="btn modal-trigger">Incluir</button>
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
          <th scope="col"><a href="#modal2" class="modal-trigger" data-id="{{$w->id}}" ><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Especialidade">{{ $w->nome }}</td>
       </tr>
     @endforeach
   </tbody>
 </table>

 <!-- Modal Structure Incluir-->
<div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
  
    <div class="text-white card-panel teal lighten-1">
      <h5>Nova Modelo</h5>
    </div>
  
      <br/>
      <form method="POST" action="{{route('modelo.store')}}"   class="col s12">
      @csrf
        <div clas="row">
            <div class="input-field col s12">
              <input id="nome" type="text" class="validate" name="nome">
              <label for="nome">Nome do Modelo</label>
            </div>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button type="submit" id="submitForm"  class="btn modal-send">Enviar<i class="material-icons right">add</i></button>
    
    </form>
  </div>
</div>

 <!-- Modal Structure Deletar -->
 <div id="modal2" class="modal modal-fixed-footer">
 <form method="post" action="{{route('modelo.destroy',$w->id)}}">
 @csrf 
 @method('DELETE')
    <div class="modal-content">
      <h4>Deseja realmente Excluir o elemento?</h4>
    </div>
    <input type="hidden" value="" name="{{$w->id}}"/>
    <div class="modal-footer">
    <a href="#" class="btn red modal-close">Cancelar<i class="material-icons right">cancel</i></a>
    <button type="submit"  class="btn modal-trigger">Remover<i class="material-icons right">delete</i></button>
    </div>
  </form>  
  </div>
 @endsection
