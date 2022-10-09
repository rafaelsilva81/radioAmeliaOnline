 <?php 

  if (!isset($_SESSION['logado']) == true) {
    unset($_SESSION['logado']);
    echo "<script> window.location.replace('/radioAmeliaOnline/login'); </script>";
  } 
 
  ?>
 <!DOCTYPE html>
  <html lang=pt-br>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
      <link type="text/css" rel="stylesheet" href="app/view/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <style type="text/css">
      </style>
    </head>

    <body>
    	
    	<!-- Cabeçalho (NavBar) da página -->  
    	    <header style="width: 100%">
		          <nav class="border-top-0 border-dark">
		            <div class="nav-wrapper" style="background-color:#1DB954;">
		              <x class="brand-logo hide-on-small-only" style="margin-left: 1%; text-decoration: none;">Rádio Amélia</x>
		               <x class="brand-logo hide-on-med-and-up" > RA </x>
		              <ul id="nav" class="right hide-on-med-and-down" style="margin-right: 1%">
                      <li> <?php echo $_SESSION['nome']; ?> </li>
		                <li> <a href="#" style="text-decoration:none; "><i class="material-icons left">person</i></a> </li>
		              </ul>
		              <ul id="nav-mobile" class="right hide-on-large-only" style="margin-right: 1%">
                  >
		                <li> <a href="#" class="show-on-med-and-down"><i class="material-icons">person</i> </a> </li>
		              </ul>
		            </div>
		          </nav>
    		</header>
    	<!-- Fim Cabeçalho (NavBar) da página -->

   <main>
    	<!--- Aba de pesquisa da página -->
		 <div class="container" style="margin-top: 5%; margin-bottom: 8%"> 
		  	<h3 class="center-align"> Pesquise uma música </h3>
		  <nav>
		    <div class="nav-wrapper" style="background-color : white;">
		      <form action="#">
		        <div class="input-field">
		          <input id="search" type="search" required>
		          <label class="label-icon" for="search"><i class="material-icons">library_music</i></label>
		          <i class="material-icons" id="closesearch" onclick="apagarPesquisa()">close</i>
		    	   <button class="btn waves-effect waves-light" type="submit" name="action" style="background-color: #1DB954" onclick="pesquisar(event)">Pesquise
    			
  				  </button>
		        </div>
		      </form>
		            
		    </div>
		  </nav>

		 </div>
		  
    	<!-- Fim da aba de pesquisa -->
    	<div class="divider"> </div>
    	<!-- Seção de resultados --> 
    	<div id="results" style="margin-top: 2%">
    		<br>
    		<h2 class="center-align" style="color: rgba(0,0,0,0.1)"> Pesquise algo e o resultado aparecerá aqui ... </h2>
    	 </div>
    	<!-- Fim seção de resultados -->
    </main>

    <div class="container" id="carregarmais" style="margin-top: 2%; margin-bottom: 2%" hidden="true">
   	<div class="center-align">
    <a class="waves-effect waves-light btn green" onclick="carregarmais(event)" id="carregarmaisbutton"><i class="material-icons left">add</i>Carregar Mais</a>
    </div>
    </div>
    <script type="text/javascript" src="app/view/js/jquery.min.js"></script> 
    <script src="app/view/js/pesquisa.js"></script>
      <script src="https://apis.google.com/js/client.js?onload=init"></script>
    <script type="text/javascript" src="app/view/js/materialize.min.js"></script>
    <script type="text/javascript">  
		  $(document).ready(function(){
		   $('.modal').modal();
		  });
		  function apagarPesquisa() {
		  	$("#search").val('');
		  }

    </script>
    </body>

  </html>





