

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <!--Import Google material-icons -->
    <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/materialize.min.css ')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/form.css ')}}">
    <!-- <link type="text/css" rel="stylesheet" href="css/form.css"> -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- pagina na tabela -->
    <link href="{{URL::asset('//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <title>@yield('title', 'Parallax')</title>
  </head>
  <body>
    @if ( Session::has('mensagem') )
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif
    <nav class="teal lighten-4">
      <div class="nav-wrapper" >
        <a href="/" class="" style="padding:10px">Veloster Center BH</a>
        <!-- <a href="/" class="brand-logo" style="padding:10px"><img src="{{URL::asset('img/brand.png')}}" class="responsive-img" width="160px" height="130px"></a> -->
        <ul class="right hide-on-med-and-down">
          <li><a href=""><i class="material-icons left">search</i>Pesquisa</a></li>
          <li><a href="/home"><i class="material-icons right">account_circle</i>Login</a></li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col l3 s6">
            <h5 class="white-text">Parallax</h5>
            <ul>
              <li><a class="white-text" href="#!">Missão e Valores</a></li>
              <li><a class="white-text" href="#!">Iniciativas</a></li>
              <li><a class="white-text" href="#!">Liderança</a></li>
              <li><a class="white-text" href="#!">Institucional</a></li>
            </ul>
          </div>
          <div class="col l3 s6">
            <h5 class="white-text">Serviços</h5>
            <ul>
              <li><a class="white-text" href="#!">Apontamento</a></li>
              <li><a class="white-text" href="#!">Agendamento</a></li>
              <li><a class="white-text" href="#!">Ordens de Serviço</a></li>
              <li><a class="white-text" href="#!">Status</a></li>
              <li><a class="white-text" href="#!">Status OS</a></li>
            </ul>
          </div>
          <div class="col l3 s6">
            <h5 class="white-text">Funcionários</h5>
            <ul>
              <li><a class="white-text" href="#!">Equipe</a></li>
              <li><a class="white-text" href="#!">OS</a></li>
              <li><a class="white-text" href="#!">Horários</a></li>
              <li><a class="white-text" href="#!">Agenda</a></li>
            </ul>
          </div>
          <div class="col l3 s6">
            <h5 class="white-text">Contatos</h5>
            <ul>
              <li><a class="white-text" href="#!">Entre em contato</a></li>
              <li><a class="white-text" href="#!">Trabalhe Conosco</a></li>
              <li><a class="white-text" href="#!">FAQ</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Made by <a class="orange-text text-lighten-3" href="#">FunNeverEnds</a>
        </div>
      </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{URL::asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>
    <!-- codigo para paginação das tablelas -->
    <script src="{{URL::asset('//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js')}}"></script>
    <script>
      $(document).ready(function(){
          $('#minhaTabela').DataTable({
              "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros no total)"
                }
            });
            // $('.modal').modal();
      
          $('.modal').modal({
          dismissible: true, // Modal can be dismissed by clicking outside of the modal
          opacity: .5, // Opacity of modal background
          inDuration: 300, // Transition in duration
          outDuration: 200, // Transition out duration
          startingTop: '4%', // Starting top style attribute
          endingTop: '10%', // Ending top style attribute
          ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            alert("Ready");
            console.log(modal, trigger);
          },
          complete: function() { alert('Closed'); } // Callback for Modal close
        });
      
        // select usando materialize designer
        $('select').formSelect();
          
      });     
      
    </script>
  </body>
</html>

