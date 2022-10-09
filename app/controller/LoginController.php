<?php 

namespace app\controller;
use app\controller\ControllerRaiz;
use \PDO;

 class LoginController extends ControllerRaiz {

	public function logar($req,$res,$args) {

	$connection = $this->db;

	$matricula = $this->matricula;

	$senha = $this->senha;

 	$stmt = $connection->prepare("SELECT * from users");

 	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
         foreach ($result as $row) {
          if(($matricula == $row->matricula) and ($senha == $row->senha)) {
            $_SESSION['nome'] = $row->nome;
            $_SESSION['matricula'] = $row->matricula;
            $_SESSION['serie'] = $row->serie;
            $_SESSION['logado'] = true;

          	$caminho=$this->router->pathFor('userpage');
          	return $res->withRedirect($caminho);
          } else {
             $_SESSION['errou'] = true;
     		     $caminho=$this->router->pathFor('login');
          	return $res->withRedirect($caminho);
          } 
    }

    
	/* depois de logar : $url=$this->router->pathFor('NomeDarot');
	return $response->withRedirect($url); (colocar ->setName('nome') na rota */
 	}

 	
 }
