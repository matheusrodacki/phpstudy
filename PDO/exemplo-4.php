<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tbUsuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Antonio";
$password = "Nunes";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados com Sucesso";


?>