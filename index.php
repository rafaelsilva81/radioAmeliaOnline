<?php
	require_once('app/core.php'); //Chama o core.php

	//---------------//
	/** SLIM CONFIG **/ //--------------
	//---------------//
	$config = [
		'settings' => [
			'displayErrorDetails' => true //Configuração para manipular os erros no slim
		]
	];


	$app = new \Slim\App(new \Slim\Container($config)); // Instância SLIM
	$container = $app->getContainer(); // Instância container (propria do SLIM)

	// Tratamento de erros
	$container['notFoundHandler'] = function ($c) { // Error 404

		return function($req, $res) use($c)
		{
			include(ERROR_DIR . "/404.php");
			return $res;
		};
	};
	$container['notAllowedHandler'] = function ($c) { // Error 405

		return function($req, $res, $methods) use($c)
		{
			include(ERROR_DIR . "/405.php");
			return $res;
		};
	};
	$container['errorHandler'] = function ($c) { // Error 500

		return function($req, $res, $exception) use($c)
		{
			include(ERROR_DIR . "/500.php");
			return $res;
		};
	};

	//
	$container['phpErrorHandler'] = function ($c) { // Error 500

		return function($req, $res, $exception) use($c)
		{
			include(ERROR_DIR . "/500.php");
			return $res;
		};
	};

	// Containers
	include_once('containers.php');
	//Todas os containers que devem estar juntos das rotas serão incluidas aqui
	//A gente podia setar os containers nesse arquivo index.php mesmo, porém fica mais organizado dessa maneira
	//Porém o tratamento de erros fica nesse arquivo, e não no containers.php que é destinado apenas a outros container que não sejam os de erro.


	// Rotas
	include_once('rotas.php');
	//Todas as rotas setadas no rotas.php serão incluidas aqui
	//A gente podia setar as rotas nesse arquivo index.php mesmo, porém fica mais organizado dessa maneira

	//Criação de um usuário vazio
	$app->run();
