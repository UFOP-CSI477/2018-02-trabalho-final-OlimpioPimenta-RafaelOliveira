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
        <a href="#!" class="brand-logo" style="border-left=10px"><img src="img/brand.png" class="responsive-img" width="130px" height="100px"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href=""><i class="material-icons left">search</i>Pesquisa</a></li>
          <li><a href="/home"><i class="material-icons right">account_circle</i>Login</a></li>
        </ul>
      </div>
    </nav>

       <div class="container-fluid center">
       <div class="row">
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image small ">
             <div class="card-image">
              <a href="/agendamento"><img src="img/agendamento.png" class="responsive-img"></a>
             </div>
<!--             <i class="medium material-icons">insert_chart</i> -->

         </div>
           <div class="card-action">
             <h6 class="truncate">Agendamento</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
            <a href="/programacao"><img src="img/programacao.png" class="responsive-img"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Programação</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/apontamento"><img src="img/apontamento.png" class="responsive-img"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Apontamentos</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/concessionarias"><img src="img/concessionarias.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Concessionárias</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/concesusuario"><img src="img/concessionaria_usuario.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Conces.Usuário</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
                <a href="/especialidades"><img src="img/especialidades.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Especialidades</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/excecaocarga"><img src="img/excecao_carga.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Exceção Carga</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/funcionario"><img src="img/funcionario.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Funcionários</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/intervaloagenda"><img src="img/intervalo_agenda.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Intervalo Agenda</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/logcarga"><img src="img/log_carga.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Log Carga</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/os"><img src="img/os.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">OS</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/oslog"><img src="img/os_log.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">OS Log</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/paineisagenda"><img src="img/agendamento.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Paineis Agenda</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/primas"><img src="img/primas.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Primas</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/statusagenda"><img src="img/status_agenda.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Satus Agenda</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/statusos"><img src="img/status_os.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Status OS</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image ">
           <!-- <i class="medium material-icons">insert_chart</i> -->
                <a href="/telausuario"><img src="img/tela_usuario.png" class="responsive-img"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Telas do Usuário</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
               <a href="/tipos"><img src="img/tipos_agenda.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Tipos</h6>
           </div>
         </div>
       </div>
        <!-- Page card goes here -->
       <div class="col s6 m2">
         <div class="card teal white-text flow-text hoverable">
           <div class="card-image">
           <!-- <i class="medium material-icons">insert_chart</i> -->
              <a href="/usuario"><img src="img/usuario.png" class="responsive-img small"></a>
         </div>
           <div class="card-action">
             <h6 class="truncate">Usuário</h6>
           </div>
         </div>
       </div>
       <!-- Page card goes here -->
      <div class="col s6 m2">
        <div class="card teal white-text flow-text hoverable">
          <div class="card-image">
          <!-- <i class="medium material-icons">insert_chart</i> -->
              <a href="/modelo"><img src="img/log_carga.png" class="responsive-img small"></a>
        </div>
          <div class="card-action">
            <h6 class="truncate">Modelo</h6>
          </div>
        </div>
      </div>
      <!-- Page card goes here -->
     <div class="col s6 m2">
       <div class="card teal white-text flow-text hoverable">
         <div class="card-image">
         <!-- <i class="medium material-icons">insert_chart</i> -->
             <a href="/ordensdeservico"><img src="img/calendar.png" class="responsive-img small"></a>
       </div>
         <div class="card-action">
           <h6 class="truncate">Ordens de Serviço</h6>
         </div>
       </div>
     </div>
      <!-- Page card goes here -->
      <div class="col s6 m2">
        <div class="card teal white-text flow-text hoverable">
          <div class="card-image">
          <!-- <i class="medium material-icons">insert_chart</i> -->
              <a href="/equipe"><img src="img/concessionaria_usuario.png" class="responsive-img small"></a>
        </div>
          <div class="card-action">
            <h6 class="truncate">Equipe</h6>
          </div>
        </div>
      </div>

       </div>
     </div>
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
