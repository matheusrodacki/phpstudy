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

            $this->setData($results[0]);

        }
    }

    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tbUsuarios ORDER BY deslogin;");

    }

    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tbUsuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ));

    }

    public function login($login, $password){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tbUsuarios WHERE deslogin = :LOGIN AND  dessenha= :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if (count($results) > 0){

            $tihs->setData($results[0]);
           

        } else {

            throw new Exception("Login e / ou senha inválidos!!!");
        }

    }

    public function setData($data){

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadasto(new DateTime($data['dtcadastro']));


    }

    public function insert(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()

        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }

    }

    public function update($login, $password){
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tbUsuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idUsuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()

        ));
    }

    public function __construct($login = "", $password = ""){

        $this->setDeslogin($login);
        $this->setDessenha($password);
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