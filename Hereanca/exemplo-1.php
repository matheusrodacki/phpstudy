<?php

class Documento{

    private $numero;
    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}

class CPF extends Documento {

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        return true;

    }
    
}


$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>