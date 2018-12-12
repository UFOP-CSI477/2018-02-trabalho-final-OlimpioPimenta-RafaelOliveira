<!-- <h3>Equipe</h3>
<img src="img/concessionaria_usuario.png" width="100px" height="100px"> -->
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

    @foreach($equipes as $w)
       <tr>
          <th scope="col"><a href="" target="_parent"><i class="material-icons">edit</i></a></th>
          <th scope="col"><a href="" target="_blank"><i class="material-icons">remove_circle</i></a></th>
          <td data-label="Código">{{ $w->cod_equipe }}</td>
          <td data-label="Descrição">{{ $w->descricao }}</td>
          <td data-label="Letra Prog">{{ $w->tipe_letra_prog}}
          @if($w->negrito_letra_prog==1)
           Negrito
          @endif 
          {{$w->tam_letra_prog }}</td>
          <td data-label="Alt. Prog">{{ $w->negrito_letra_prog }}</td>
          <td data-label="C/D">{{ $w->caracters_por_divisao }}</td>
          <td data-label="Alt. Apont">{{ $w->altura_linha_apont }}</td>
          <td data-label="Letra Produt">{{ $w->tipo_letra_produt}} 
          @if($w->negrito_produt==1)
          Negrito
          @endif
          {{$w->tam_letra_produt}}</td>
          <td data-label="Letra Hora">{{ $w->tam_letra_hora }}</td>
          <td data-label="Alt. Hora">{{ $w->altura_linha_hora }}</td>
          <td data-label="Tempo">{{ $w->tempo_de_atualizacao }}</td>
       </tr>
     @endforeach
   </tbody>
 </table>

 @endsection
