
  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="app/view/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <style type="text/css">
		html,
		body,
		.login-box {
		  height: 100%;

		}
    html{
      max-width: 100%;
          overflow-x: hidden;
    }
		#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
    opacity: 1;
}
input[type='number'] {
    -moz-appearance:textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

  /* MUDANDO LABEL DA MATRICULA */
   .input-field input[type=number]:focus + label {
     color: #1DB954 !important;
   }
   .input-field input[type=number]:focus {
     border-bottom: 1px solid #1DB954 !important;
     box-shadow: 0 1px 0 0 #1DB954 !important;
   }

  /* MUDANDO LABEL DA SENHA */
  .input-field input[type=password]:focus + label {
     color: #1DB954 !important;
   }
   .input-field input[type=password]:focus {
     border-bottom: 1px solid #1DB954 !important;
     box-shadow: 0 1px 0 0 #1DB954 !important;
   }

  #loginbutton{ 
    color: white;
   }

      </style>
    </head>

    <body>
    <div id="particles-js"> </div>
      
    <!-- Cabeçalho (NavBar) da página -->  
    <header>
          <nav class="border-top-0 border-dark">
            <div class="nav-wrapper" style="background-color:#1DB954;">
              <a href="#" class="brand-logo center-align" style="margin-left: 2%; text-decoration: none;">Rádio Amélia</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/radioAmeliaOnline/" style="text-decoration:none; ">Retornar para a página inicial</a></li>
              </ul>
            </div>
          </nav>
    </header>
    <!-- Fim Cabeçalho (NavBar) da página -->
      
    <!-- Input de Login -->
    <div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form method="POST" action='http://localhost/radioAmeliaOnline/logar'>
      <div class="card-content">
        <span class="card-title">Logue-se na rádio</span>
        <br>
        <div class="row">

          <div class="input-field col s12">
           
            <input type="number" name="matricula" id="matricula" required />
            <label for="email" id="matlabel">Entre com sua matrícula</label>
          </div>
          <div class="input-field col s12">
       
            <input type="password"  name="senha" id="senha" required />
                 <label for="password" id="senhalabel">Entre com sua senha </label>
                 <div class="right-align">
               </div>
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <input type="submit" class="green darken-1 btn waves-effect waves-light" value="Login" name="loginbutton" id="loginbutton"/>
      </div>
    </form>
  </div>
</div>

    <!-- Fim input de login -->
    <script type="text/javascript" src="app/view/js/jquery.min.js"></script>  
    <script type="text/javascript" src="app/view/js/particles.min.js"></script>
    <script type="text/javascript" src="app/view/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
       
        });


      particlesJS.load('particles-js', 'app/view/js/assets/particles.json', function() {
		  console.log('callback - particles.js config loaded');
	    });

    </script>
      <?php 

  if (!isset($_SESSION['errou']) == true) {
    unset($_SESSION['errou']);
  } else {
     unset($_SESSION['errou']);
    echo "<script type ='text/javascript'> M.toast({html: 'Houve um erro ao logar : Matrícula e/ou Senha Incorreta(s)'}) </script>";
  }

   ?>
    </body>

  </html>