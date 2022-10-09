<?php

	//Exemplo de CONTROLLER 

	class ExampleController
	{	
		//Cria uma variavel protegida pagina
		protected $pagina;

		//Função __construct é a função de criação do PHP, onde recebe uma pagina como parametro
		public function __construct()
		{
			//Seta a variavel pagina para ser igual a pagina recebida via parametro 
			
		}

		//Função Example para incluir o index.php dentro da pasta pages (não confundir com a index.php da raiz)
		//Caminho completo : app\view\pages\example\index.php 
		public function home()
		{
			include_once(PAGES_DIR . '/example/index.php');
		}
	}

