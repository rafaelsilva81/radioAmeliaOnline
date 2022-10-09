<?php
 //Arquivo containers.php, nesse arquivo devem ficar todos os containers do slim

	//Nesse exemplo, o container 'example' proveniente da rota '/example' chama uma função
	$container['home'] = function($c)
	{
		//Onde então, é criado uma variavel CONTROLLER que vai pegar o controller desse serviço específico
		//No caso, 'ExampleController' é o que queremos
		//Dentro da criação de um novo 'ExampleController' (que leva como parâmetro de criação uma variavel $page) é criado um novo model 'PageModal' (que leva como parâmetro de criação um titulo)
		$controller = new HomeController();
		
		//Retorna esse controler, que é o que aparece na tela. 
		return $controller;
	};

		$container['login'] = function($c)
	{

		$controller = new LoginPageController();
		
		//Retorna esse controler, que é o que aparece na tela. 
		return $controller;
	};

	  	$container['userpage'] = function($c)
	{

		$controller = new UserpageController();
		
		//Retorna esse controler, que é o que aparece na tela. 
		return $controller;
	};

		 $container['rules'] = function($c)
	{

		$controller = new RulesController();
		
		//Retorna esse controler, que é o que aparece na tela. 
		return $controller;
	};


	$container['matricula'] = "";
	$container['senha'] = "" ;

	if (isset($_POST['loginbutton'])) {
		$container['matricula'] = $_POST['matricula'];
		$container['senha'] = $_POST['senha'];
 	} else {
 		$container['matricula'] = "";
		$container['senha'] = "" ;

 	}

	$container['LoginController']=function($container) use ($app) {
       return new app\controller\LoginController($container);
	};

	$container['db']= function($container){
    return new PDO('mysql:host=localhost;dbname=radioamelia', 'root', '');
	};



