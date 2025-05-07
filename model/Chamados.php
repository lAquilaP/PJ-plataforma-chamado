<?php 

Class Chamado {
    private $idChamado;
    private $usuario;
    private $status;

    public function __construct(Usuario $usuario){
        $this->idChamado = random_int(10000, 99999);
        $this->usuario = $usuario;
        $this->status = "em_aberto";
    }
    public function getIdChamado(){
        return $this->idChamado;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}


?>