<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadasto;

    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario(){
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of deslogin
     */ 
    public function getDeslogin(){
        return $this->deslogin;
    }

    /**
     * Set the value of deslogin
     *
     * @return  self
     */ 
    public function setDeslogin($deslogin){
        $this->deslogin = $deslogin;

        return $this;
    }

    /**
     * Get the value of dessenha
     */ 
    public function getDessenha(){
        return $this->dessenha;
    }

    /**
     * Set the value of dessenha
     *
     * @return  self
     */ 
    public function setDessenha($dessenha){
        $this->dessenha = $dessenha;

        return $this;
    }

    /**
     * Get the value of dtcadasto
     */ 
    public function getDtcadasto(){
        return $this->dtcadasto;
    }

    /**
     * Set the value of dtcadasto
     *
     * @return  self
     */ 
    public function setDtcadasto($dtcadasto){
        $this->dtcadasto = $dtcadasto;

        return $this;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tbUsuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0){

            $row = $results[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadasto(new DateTime($row['dtcadastro']));

        }
    }

    public function __toString(){

        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "detcadastro"=>$this->getDtcadasto()->format("d/m/Y H:i:s")
        ));
        
    }
}

?>