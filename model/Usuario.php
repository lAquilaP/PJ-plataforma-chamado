<?php 

Class Usuario {
    private $idOps;
    private $nome;
    private $class;
    private $senha;
    private $email;

    public function __construct(Usuario $usuario){
        $this->idOps = "Ops" . random_int(10000, 99999);
        $this->nome = $nome;
        $this->class = $class;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getIdOps(){
        return $this->idOps;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getClass(){
        return $this->class;
    }
    public function setClass($class){
        $this->class = $class;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    
}


?>