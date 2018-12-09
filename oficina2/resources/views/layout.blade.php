

<!-- <!doctype html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
       <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">

           <title>Oficina e zueira</title>


           <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

           <style>
               html, body {
                   background-color: #fff;
                   color: #636b6f;
                   font-family: 'Nunito', sans-serif;
                   font-weight: 200;
                   height: 100vh;
                   margin: 0;
               }

               .full-height {
                   height: 100vh;
               }

               .flex-center {
                   align-items: center;
                   display: flex;
                   justify-content: center;
               }

               .position-ref {
                   position: relative;
               }

               .top-right {
                   position: absolute;
                   right: 10px;
                   top: 18px;
               }

               .content {
                   text-align: center;
               }

               .title {
                   font-size: 84px;
               }

               .links > a {
                   color: #636b6f;
                   padding: 0 25px;
                   font-size: 13px;
                   font-weight: 600;
                   letter-spacing: .1rem;
                   text-decoration: none;
                   text-transform: uppercase;
               }

               .m-b-md {
                   margin-bottom: 30px;
               }
           </style>
       </head>
       <body>
           <div class="flex-center position-ref full-height">
               @if (Route::has('login'))
                   <div class="top-right links">
                       @auth
                           <a href="{{ url('/home') }}">Home</a>
                       @else
                           <a href="{{ route('login') }}">Login</a>

                           @if (Route::has('register'))
                               <a href="{{ route('register') }}">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif

               <div class="content">
                   <div class="title m-b-md">
                       Bem vindo a oficina da zueira!
                   </div>

                   <div class="links">
                       <a href="https://laravel.com/docs">Documentation</a>
                       <a href="https://laracasts.com">Laracasts</a>
                       <a href="https://laravel-news.com">News</a>
                       <a href="https://nova.laravel.com">Nova</a>
                       <a href="https://forge.laravel.com">Forge</a>
                       <a href="https://github.com/laravel/laravel">GitHub</a>
                   </div>
               </div>
           </div>
       </body>
   </html> -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADS-car</title>
      <meta name="description" content="Expanding Overlay Effect: Revealing content using CSS clip" />
      <meta name="keywords" content="css, css3, clip, rect(), overlay, expand, fixed, effect, responsive" />
      <meta name="author" content="Codrops" />
      
      <link rel="stylesheet" type="text/css" href="css/default.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <!-- <link rel="stylesheet" type="text/css" href="css/materialize.css" media="screen,projection" /> -->
      <script src="js/modernizr.custom.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <!-- date picker css -->
      <link rel="stylesheet" href="css/mdDateTimePicker.css">
      <!-- fontes -->
      <script src="js/moment.min.js"></script>
      <script src="js/lang/pt-br.js"></script>
      <script src="js/scroll-into-view-if-needed.min.js"></script>
      <script src="js/draggabilly.pkgd.min.js"></script>
      <script src="js/mdDateTimePicker.js"></script>
      <!-- CSS tabela -->
      <link rel="stylesheet" type="text/css" href="css/tabela.css" />
      <!-- CSS modal -->
      <link rel="stylesheet" type="text/css" href="css/modal.css" />
      <!-- form css -->
      <link rel="stylesheet" type="text/css" href="css/form.css" />
   </head>
   <body>
      <div class="container">
         <!-- Codrops top bar -->
         
         <!--/ Codrops top bar -->
         <header class="clearfix">
            <h1>Menu<span>Escolha abaixo uma das opções de serviço</span></h1>
            <nav class="codrops-demos">
               <h3 class="current-demo">Data e Hora oficial:</h3>
               <a id="timeDate" class="current-demo">data</a>
               <a id="temponow" class="current-demo">tempo</a>
               <!-- <a href="index2.html">Demo 2</a> -->
            </nav>
         </header>
         <div class="main">
            <ul id="rb-grid" class="rb-grid clearfix">
               @yield('conteudo')
            </ul>
         </div>
      </div>
      <!-- /container -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="js/jquery.fittext.js"></script>
      <script src="js/boxgrid.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <!-- script para usar modal -->
      <script>
         $('td').click(function(){

         })
         var modal = document.querySelector(".modal");
         var trigger = document.querySelector("#evento");
         var closeButton = document.querySelector(".close-buttonb");

         function toggleModal() {
         	modal.classList.toggle("show-modal");
         }

         function windowOnClick(event) {
         	if (event.target === modal) {
         		toggleModal();
         	}
         }

         trigger.addEventListener("click", toggleModal);
         closeButton.addEventListener("click", toggleModal);
         window.addEventListener("click", windowOnClick);
      </script>
      <!-- script  para usar o calendario -->
      <script>
         (function() {
           // load language from hash
           var hash = location.hash.replace('#', '');
           var locale = hash ? hash : 'pt-br';
           moment.locale(locale);
           // rest of the demo logic
           var x = new mdDateTimePicker.default({
             type: 'date'
           });
           var y = new mdDateTimePicker.default({
             type: 'date',
         //      init: moment('2016-02-29', 'YYYY-MM-DD')
              init: moment('29-02-2018', 'DD-MM-YYYY')
           });
           var z = new mdDateTimePicker.default({
             type: 'date',
         //      init: moment('2016-03-3', 'YYYY-MM-DD')
             init: moment('29-02-2018', 'DD-MM-YYYY'),
             orientation: 'PORTRAIT'
           });
           document.getElementById('test1').addEventListener('click', function() {
             x.toggle();
           });
           // document.getElementById('trigger2').addEventListener('click', function() {
           //   y.toggle();
           // });
           // document.getElementById('trigger3').addEventListener('click', function() {
           //   z.toggle();
           // });
           var a = new mdDateTimePicker.default({
             type: 'time'
           });
           var b = new mdDateTimePicker.default({
             type: 'time',
             init: moment('10:5 PM', 'h:m A'),
             orientation: 'PORTRAIT'
           });
           var c = new mdDateTimePicker.default({
             type: 'time',
             init: moment('22:0', 'H:m'),
             mode: true,
             orientation: 'PORTRAIT'
           });
           // document.getElementById('trigger4').addEventListener('click', function() {
           //   a.toggle();
           // });
           // document.getElementById('trigger5').addEventListener('click', function() {
           //   b.toggle();
           // });
           // document.getElementById('trigger6').addEventListener('click', function() {
           //   c.toggle();
           // });
           // dispatch event test
           x.trigger = document.getElementById('test1');
           document.getElementById('test1').addEventListener('onOk', function() {
             this.value = x.time.toString();
         	console.log(x.time.toString());
           });
           // // language selector
           // var language = document.getElementById('language')
           // language.addEventListener('change', function() {
           //   // set lang
           //   location.hash = language.options[language.options.selectedIndex].value;
           //   // reload
           //   location.reload()
           // });
         }).call(this);
      </script>
      <script>
         $(function () {

         	Boxgrid.init();

         	// form

         });
      </script>
   </body>
</html>
