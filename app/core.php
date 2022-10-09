<?php
	//----------------//
	/** INIT WEB APP **/ //--------------
	//----------------//

	//Arquivo core.php, feito para setar CONSTANTES importantes e requerir os models e controles além do autoload

	// Constantes
	define("BD_HOST", "localhost"); // Host do banco de dados
	define("BD_USER", "root"); // Usuario do banco de dados
	define("BD_PASSWORD", ""); // Senha do banco de dados
	define("BD_DRIVER", "mysql:host=localhost;dbname=radioamelia");

	define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT'] . "/radioAmeliaOnline"); // DIRETORIO RAIZ DO PROJETO
	define("VIEW_DIR", ROOT_DIR . "/app/view"); // Diretório da pasta view
	define("MODEL_DIR", ROOT_DIR . "/app/model"); // Diretório da pasta model
	define("CONTROLLER_DIR", ROOT_DIR . "/app/controller"); // Diretório da pasta controller
	define("RESOURCES_DIR", VIEW_DIR . "/resources"); // Diretório da pasta resources
	define("PAGES_DIR", VIEW_DIR . "/pages"); // Diretório da pasta pages
	define("ERROR_DIR", VIEW_DIR . "/error"); // Diretório da pasta pages

	define("SERVER_NAME", $_SERVER['SERVER_NAME']); // Host. Ex: www.meusite.com.br


	// Essentials
	//Aqui se inicia a sessão e se chama o autoload
	session_start();
	
	require_once('vendor/autoload.php');

	// Models 
	//Aqui deve ser requerido todos os models
	require_once(MODEL_DIR . '/User.php');

	// Controllers
	//Aqui deve ser requerido todos os controllers
	require_once(CONTROLLER_DIR . "/ControllerRaiz.php");
	require_once(CONTROLLER_DIR . "/HomeController.php");
	require_once(CONTROLLER_DIR . "/LoginPageController.php");
	require_once(CONTROLLER_DIR . "/LoginController.php");
	require_once(CONTROLLER_DIR . "/UserpageController.php");
	require_once(CONTROLLER_DIR . "/RulesController.php");


