<?php

 class User {

 	 private $nome;
 	 private $serie;
 	 private $senha;
 	 private $permissao;

     /**
      * @return mixed
      */
     public function getNome()
     {
         return $this->nome;
     }

     /**
      * @param mixed $nome
      */
     public function setNome($nome)
     {
         $this->nome = $nome;
     }

     /**
      * @return mixed
      */
     public function getSerie()
     {
         return $this->serie;
     }

     /**
      * @param mixed $serie
      */
     public function setSerie($serie)
     {
         $this->serie = $serie;
     }

     /**
      * @return mixed
      */
     public function getSenha()
     {
         return $this->senha;
     }

     /**
      * @param mixed $senha
      */
     public function setSenha($senha)
     {
         $this->senha = $senha;
     }

     /**
      * @return mixed
      */
     public function getPermissao()
     {
         return $this->permissao;
     }

     /**
      * @param mixed $permissao
      */
     public function setPermissao($permissao)
     {
         $this->permissao = $permissao;
     }
 	 
   
}

?>