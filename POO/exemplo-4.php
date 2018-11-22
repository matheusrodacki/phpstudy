<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }
}

$meuEndereco = new Endereco("Rua Julião", "27", "São Paulo");

var_dump($meuEndereco);

?>