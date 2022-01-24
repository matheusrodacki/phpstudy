<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID;");

$id = 19;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";

?>