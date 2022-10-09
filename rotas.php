<?php
	
	//Arquivo de configuração de rotas , padrão SLIM

	$app->get('/', function($req, $res, $args)
	{
		//Checa se exite o container 'example' existe
		if($this->has('home'))
		{	
			//Seta uma variavel controller pegando o container 'example' (que chama una função que retorna uma variavel controller também, veja o arquivo containers.php)

			$controller = $this->get('home');
			//Chama a função example lá do 'ControllerExample.php'
			$controller->home();
		}
		//retorna a resposta, que é a pagina que vem lá do 'ControllerExample.php'
		return $res;
	});


	$app->get('/login', function($req, $res, $args)
	{
		//Checa se exite o container 'example' existe
		if($this->has('login'))
		{	
			//Seta uma variavel controller pegando o container 'example' (que chama una função que retorna uma variavel controller também, veja o arquivo containers.php)

			$controller = $this->get('login');
			//Chama a função example lá do 'ControllerExample.php'
			$controller->loginPage();
		}
		//retorna a resposta, que é a pagina que vem lá do 'ControllerExample.php'
		return $res;
	})->setName('login');

		$app->get('/userpage', function($req, $res, $args)
	{
		//Checa se exite o container 'example' existe
		if($this->has('userpage'))
		{	
			//Seta uma variavel controller pegando o container 'example' (que chama una função que retorna uma variavel controller também, veja o arquivo containers.php)

			$controller = $this->get('userpage');
			//Chama a função example lá do 'ControllerExample.php'

			$controller->userpage($req, $res, $args);

		}
		//retorna a resposta, que é a pagina que vem lá do 'ControllerExample.php'
		return $res;
	})->setName('userpage');

		$app->get('/regras', function($req, $res, $args)
	{
		//Checa se exite o container 'example' existe
		if($this->has('rules'))
		{	
			//Seta uma variavel controller pegando o container 'example' (que chama una função que retorna uma variavel controller também, veja o arquivo containers.php)

			$controller = $this->get('rules');
			//Chama a função example lá do 'ControllerExample.php'
			$controller->Rules();
		}
		//retorna a resposta, que é a pagina que vem lá do 'ControllerExample.php'
		return $res;
	});

	$app->map(['GET', 'POST'],'/logar','LoginController:logar',function($req, $res, $args)
	{

	});
?>