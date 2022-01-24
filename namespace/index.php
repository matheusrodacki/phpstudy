<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Anthony Ribeiro");
$cad->setEmail("anthonyribeiro@gmail.com");
$cad->setSenha("anthony");

echo $cad;

?>