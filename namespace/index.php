<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("12345");

$cad->registrarVenda();



?>