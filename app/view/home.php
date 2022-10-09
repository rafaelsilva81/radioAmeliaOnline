

  <!DOCTYPE html>
  <html lang=pt-br>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="app/view/css/bootstrap.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="app/view/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <style type="text/css">
      ::-moz-selection { /* Code for Firefox */
        color: white;
        background: #1DB954;
      }

      ::selection {
        color: white; 
        background: #1DB954;
      }
      </style>
    </head>

    <body>

    <!-- Cabeçalho (NavBar) da página -->  
    <header>
          <nav class="border-top-0 border-dark">
            <div class="nav-wrapper" style="background-color:#1DB954;">
              <a href="#" class="brand-logo" style="margin-left: 2%; text-decoration: none;">Rádio Amélia</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/radioAmeliaOnline/login" style="text-decoration:none; ">Entrar</a></li>
                 <li><a href="#" style="text-decoration:none; ">Ir para o Amélia Virtual</a></li>
              </ul>
            </div>
          </nav>
    </header>
    <!-- Fim Cabeçalho (NavBar) da página -->

     <!-- Slider da página + Seção Principal -->
          <div class="slider" >
            <ul class="slides">
              <li>
                <img src="app/view/resources/1.png" class="responsive-img"> <!-- random image -->
                <div class="caption center-align">
                  <h3>Rádio Amélia Online</h3>
                  <h5 class="light grey-text text-lighten-3">A maneira mais fácil de participar da rádio escolar.</h5>
                  <div class="row">
                    <div class="mx-auto">   
                          <a class="waves-effect waves-light btn-large" style="text-align: center; color:white; background-color: #1DB954;"href="/radioAmeliaOnline/login">Entrar Agora</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <img src="app/view/resources/2.png"  class="responsive-img"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Diponível sempre</h3>
                  <h5 class="light grey-text text-lighten-3">A qualquer hora, e em qualquer lugar.</h5>
                </div>
              </li>
              <li>
                <img src="app/view/resources/3.png" class="responsive-img"> <!-- random image -->
                <div class="caption leftt-align">
                  <h3>Torne-se um gerênciador</h3>
                  <h5 class="light grey-text text-lighten-3">Utilizamos a API do Youtube, o que deixa tudo mais fácil.</h5>
                     <div class="row">
                          <a class="waves-effect waves-light btn" style="text-align: center; color:white; background-color: #1DB954;">Entenda mais</a>
                    </div>
                </div>
              </li>
            
            </ul>
          </div>
      <div class="section white">
        <div class="container">
          <h2 class="header" style="text-align: center;">Bem vindo a Rádio Amélia Online</h2>
          <p class="grey-text text-darken-3 lighten-3" style="text-align: center;">&nbsp;Pronto para escolher sua música? <br>
          Entenda melhor como funciona : 
          </p>
        </div>
      </div>
      <!-- Fim slider + Seção principal -->

      <!-- Linha de cards da página -->
      <div class="row">

        <div class="col s12 m7">
          <div class="card large hoverable">
            <div class="card-image">
              <img src="app/view/resources/relaxarcard.png">
              <span class="card-title">Ouvir música é relaxante</span>
            </div>
            <div class="card-content">
              <p>E é por isso que apresentamos a Rádio Amélia, a maneira perfeita de relaxar ouvindo uma música durante o intermediário.</p>
            </div>
            
          </div>
        </div>
      
        <div class="col s12 m7">
          <div class="card large hoverable">
            <div class="card-image">
              <img src="app/view/resources/recomendadocard.png">
              <span class="card-title">Facilidade no acesso</span>

            </div>
            <div class="card-content">
              <p>Entre usando sua matrícula do Aluno Online, não é necessário cadastro! <br> Além disso, a Rádio Amélia Online é optimizada para todos os dispositivos!</p>
            </div>
           
          </div>
        </div>
  
        <div class="col s12 m7">
          <div class="card large hoverable">
            <div class="card-image">
              <img src="app/view/resources/musicacard.png">
              <span class="card-title">Uma música por dia</span>
            </div>
            <div class="card-content">
              <p>A cada dia você pode escolher uma música.
              Seja o primeiro a pedir que sua música será a primeira a tocar! </p>
            </div>
          </div>
        </div>
              
        <div class="col s12 m7">
          <div class="card large hoverable">
            <div class="card-image">
              <img src="app/view/resources/avisocard.png">
              <span class="card-title">Vale tudo, só que não...</span>

            </div>
            <div class="card-content">
              <p>Pedimos para que não faça pedidos que possam infringir as <a href="/radioAmeliaOnline/regras"> Regras de músicas da escola</a>.</p>
            </div>
          </div>
        </div>

      </div>  
      <!-- Fim Linha de cards da página -->

       <!-- Botão de logar da página -->
      <div class="row">
        <div class="mx-auto">     
            <a class="waves-effect waves-light btn-large" style="text-align: center; color:white; background-color: #1DB954;"href="/radioAmeliaOnline/login">Entrar</a>
        </div>
      </div>
       <!-- Fim Botão de logar da página -->

        <!-- Rodapé da Página -->
        <footer class="page-footer" style="background-color:#1DB954"> 
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Rádio Amélia</h5> 
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Suporte</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Entre em contato conosco</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 EEEP AMÉLIA FIGUEIREDO DE LAVOR
             <a class="grey-text text-lighten-4 right" href="#!">Rafael Silva - RafaDev™</a>
            </div>
          </div>
        </footer>
        <!-- Fim Rodapé da página -->

    <script type="text/javascript" src="app/view/js/jquery.min.js"></script>
    <script type="text/javascript" src="app/view/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="app/view/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
     $('.slider').slider();
        });
    </script>
    </body>

  </html>