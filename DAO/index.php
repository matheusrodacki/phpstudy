<?php

require_once("config.php");

/** 
 * $sql = new Sql();
 *
 * $usuarios = $sql->select("SELECT * FROM tbUsuarios");
 *
 * echo json_encode($usuarios);
 *  
 */

//carrega usuario
//$user = new Usuario();
//$user->loadById(5);
//echo $user;

//Carrega uma lista de usuaios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuario buscando pelo login
//$search = Usuario::search("s");
//echo json_encode($search);

//Carrega usuario usando login e senha

$usuario = new Usuario();
$usuario->login("jose", "12345");

echo $usuario;


?>