

@extends('layout')
@section('title', 'Parallax - Equipes')
@section('content')
<div class="col s12 m5">
   <div class="card horizontal card-panel teal">
      <div class="card-image">
         <img src="img/concessionaria_usuario.png" width="100px" height="100px">
      </div>
      <div class="card-stacked">
         <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Equipe</span>
            <button data-target="modal1" class="btn modal-trigger">Incluir</button>
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
      @foreach($equipes as $w)
      <tr>
         <th scope="col"><a href="{{route('equipe.edit',$w->id)}}" target=""><i class="material-icons">edit</i></a></th>
         <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
         <td data-label="Código">{{ $w->cod_equipe }}</td>
         <td data-label="Descrição">{{ $w->descricao }}</td>
         <td data-label="Letra Prog">{{ $w->tipe_letra_prog}}
            @if($w->negrito_letra_prog==1)
            Negrito
            @endif 
            {{$w->tam_letra_prog }}
         </td>
         <td data-label="Alt. Prog">{{ $w->negrito_letra_prog }}</td>
         <td data-label="C/D">{{ $w->caracters_por_divisao }}</td>
         <td data-label="Alt. Apont">{{ $w->altura_linha_apont }}</td>
         <td data-label="Letra Produt">{{ $w->tipo_letra_produt}} 
            @if($w->negrito_produt==1)
            Negrito
            @endif
            {{$w->tam_letra_produt}}
         </td>
         <td data-label="Letra Hora">{{ $w->tam_letra_hora }}</td>
         <td data-label="Alt. Hora">{{ $w->altura_linha_hora }}</td>
         <td data-label="Tempo">{{ $w->tempo_de_atualizacao }}</td>
      </tr>
      @endforeach
   </tbody>
</table>
<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
    <form method="post">
      <h4>Nova Equipe</h4>
      <div class="row">
         <form class="col s12">
            <div class="row">
               <div class="input-field col s12">
                  <input id="cod_equipe" type="text" class="validate">
                  <label for="cod_equipe">Código Da Equipe</label>
               </div>
               <div class="input-field col s12">
                  <input id="descricao" type="text" class="validate">
                  <label for="descricao">Descrição</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <select>
                     <option value="" disabled selected>Choose your option</option>
                     <option value="1">Option 1</option>
                     <option value="2">Option 2</option>
                     <option value="3">Option 3</option>
                  </select>
                  <label>Tipo Letra Prog.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tam_letra_prog" type="text" class="validate">
                  <label for="tam_letra_prog">Tam.Letra Prog.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="altura_linha_prog" type="text" class="validate">
                  <label for="altura_linha_prog">Altura.Linha Prog.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="caracteres_por_divisao" type="text" class="validate">
                  <label for="caracteres_por_divisao">Caracteres por Divisão</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="altura_linha_apont" type="text" class="validate">
                  <label for="altura_linha_apont">Altura linha Apont.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <select>
                     <option value="" disabled selected>Choose your option</option>
                     <option value="1">Option 1</option>
                     <option value="2">Option 2</option>
                     <option value="3">Option 3</option>
                  </select>
                  <label>Tipo letra Produt.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="negrito_produt" type="text" class="validate">
                  <label for="negrito_produt">Negrito Produt.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tam_letra_produt" type="text" class="validate">
                  <label for="tam_letra_produt">Tam. letra Produt.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tam_letra_hora" type="text" class="validate">
                  <label for="tam_letra_hora">Tam. letra hora.</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="altura_linha_hora" type="text" class="validate">
                  <label for="altura_linha_hora">Altura linha Hora</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="tempo_de_atualizacao" type="text" class="validate">
                  <label for="tempo_de_atualizacao">Tempo de Atualização</label>
               </div>
            </div>
         </form>
      </div>
   </div>
   </form>
   <div class="modal-footer">
      <button class="modal-action modal-close waves-effect waves-green btn-flat ">cancelar</button>
      <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">cancelar</a> -->
      <button type="submit" id="enviar" onclick="form_submit()" class="modal-action modal-close waves-effect waves-green btn-flat ">Enviar</button>
      <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">enviar</a> -->
   </div>
</div>
@endsection

