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


<div class="container">    
<br/>
<div class="modal-content">
      <div class="row">
         <form class="col s12" method="POST" action="{{route('equipe.store')}}">
          @csrf
          @method('PATCH')
              <h2>{{$editar->id}}</h2>
            <div class="row">
               <div class="input-field col s12">
                  <input id="cod_equipe" type="text" class="validate" value="{{$editar->cod_equipe}}" name="cod_equipe">
                  <label for="cod_equipe">Código Da Equipe</label>
               </div>
               <div class="input-field col s12">
                  <input id="descricao" type="text" class="validate" value="{{$editar->descricao}}" name="descricao">
                  <label for="descricao">Descrição</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <select name="tipe_letra_prog">
                     <option value="{{$editar->tipe_letra_prog}}">{{$editar->tipe_letra_prog}}</option>
                     @if(strcmp($editar->tipe_letra_prog,"Arial")) <option value="Arial">Arial</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Calibri"))<option value="Calibri">Calibri</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Courier"))<option value="Courier">Courier</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Geneva"))<option value="Geneva">Geneva</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Helvetica"))<option value="Helvetica">Helvetica</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"mono"))<option value="mono">mono</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"sans"))<option value="sans"-serif>sans-serif</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"serif"))<option value="serif">serif</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Tahoma"))<option value="Tahoma">Tahoma</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Times"))<option value="Times">Times</option>@endif
                     @if(strcmp($editar->tipe_letra_prog,"Verdana"))<option value="Verdana">Verdana</option>@endif
                  </select>
                  <label>Tipo Letra Prog.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
          
               @if($editar->negrito_letra_prog==1)
               <label>
                  <input type="checkbox" name="negrito_letra_prog" checked="checked" value="0"/>
                    <span>Negrito.Letra Prog.</span>
                </label>
                @else
                <label>
                  <input type="checkbox" name="negrito_letra_prog"/>
                    <span>Negrito.Letra Prog.</span>

                </label>
               @endif  
               </div>
               <br/>
               <br/>
               <br/>
               
            </div>

            <div class="row">
               <div class="input-field col s12">
                  <input  type="text" value="{{$editar->tam_letra_prog}}" name="tam_letra_prog">
                  <label for="tam_letra_prog">Tam.Letra Prog</label>
               </div>
            </div>

            <div class="row">
               <div class="input-field col s12">
                  <input  type="text" value="{{$editar->altura_linha_prog}}" name="altura_linha_prog">
                  <label for="altura_linha_prog">Altura.Linha Prog.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="caracteres_por_divisao" type="text" class="validate" value="{{$editar->caracters_por_divisao}}" name="caracters_por_divisao">
                  <label for="caracteres_por_divisao">Caracteres por Divisão</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="altura_linha_apont" type="text" class="validate" value="{{$editar->altura_linha_apont}}" name="altura_linha_apont">
                  <label for="altura_linha_apont">Altura linha Apont.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">               
                  <select name="tipo_letra_produt">
                     <option value="{{$editar->tipo_letra_produt}}">{{$editar->tipo_letra_produt}}</option>
                     @if(strcmp($editar->tipo_letra_produt,"arial"))<option value="Arial">Arial</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Calibri"))<option value="Calibri">Calibri</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Courier"))<option value="Courier">Courier</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Geneva"))<option value="Geneva">Geneva</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Helvetica"))<option value="Helvetica">Helvetica</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"mono"))<option value="mono">mono</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"sans-serif"))<option value="sans-serif">sans-serif</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"serif"))<option value="serif">serif</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Tahoma"))<option value="Tahoma">Tahoma</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Times"))<option value="Times">Times</option>@endif
                     @if(strcmp($editar->tipo_letra_produt,"Verdana"))<option value="Verdana">Verdana</option>@endif
                  </select>
                  
                  
                  <label>Tipo letra Produt.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
               @if($editar->negrito_produt==1)
               <label>
                  <input type="checkbox" name="negrito_produt" checked="checked" value="1" />
                    <span>Negrito Produt.</span>
                    
                </label>
                @else
                <label>
                  <input type="checkbox" name="negrito_produt" value="0"/>
                    <span>Negrito Produt.</span>
                    
                </label>
               @endif  
               </div>
            </div>
            </div>

               <br/>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tam_letra_produt" type="text" class="validate" value="{{$editar->tam_letra_produt}}" name="tam_letra_produt">
                  <label for="tam_letra_produt">Tam. letra Produt.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tam_letra_hora" type="text" class="validate" value="{{$editar->tam_letra_hora}}" name="tam_letra_hora">
                  <label for="tam_letra_hora">Tam. letra hora.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="altura_linha_hora" type="text" class="validate" value="{{$editar->altura_linha_hora}}" name="altura_linha_hora">
                  <label for="altura_linha_hora">Altura linha Hora</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tempo_de_atualizacao" type="text" class="validate" value="{{$editar->tempo_de_atualizacao}}" name="tempo_de_atualizacao">
                  <label for="tempo_de_atualizacao">Tempo de Atualização</label>
               </div>
            </div>
            <div clas="row" align="right">
              <a href="/equipe" class="btn modal-trigger">Cancelar</a>
              <button type="submit" data-target="modal1" class="btn modal-trigger">Incluir</button>
            </div>
            <br/>
         </form>
      </div>
   </div>
</div>
 @endsection
