<?php 
	class HomeController
	{	

		//Função __construct é a função de criação do PHP, onde recebe uma pagina como parametro
		public function __construct()
		{
			//
			
		}

		//Função Example para incluir o index.php dentro da pasta pages (não confundir com a index.php da raiz)
		//Caminho completo : app\view\pages\example\index.php 
		public function home()
		{
			include_once(VIEW_DIR . '/home.php');
		}
	}
 ?>