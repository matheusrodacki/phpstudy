<?php
namespace Cliente;

Class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma nova venda para o cliente ".$this->getNome();
    }

}

?>