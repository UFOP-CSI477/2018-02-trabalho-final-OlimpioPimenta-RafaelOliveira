<!DOCTYPE html>
<html lang="pt-br">
 <html>
   <head>
     <!--Import Google material-icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     <title>Menu - Pincipal</title>
   </head>

   <body>
     @if ( Session::has('mensagem') )
       <p><strong>{{ Session::get('mensagem') }}</strong></p>
     @endif

    <nav>
      <div class="nav-wrapper">
        <a href="welcome.index" class="brand-logo" style="border-left=10px"><img src="img/brand.png" class="responsive-img" width="130px" height="100px"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href=""><i class="material-icons left">search</i>Pesquisa</a></li>
          <li><a href="/home"><i class="material-icons right">account_circle</i>Login</a></li>
        </ul>
      </div>
    </nav>

  @yield('content')

   <footer class="page-footer orange">
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
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
 </html>
