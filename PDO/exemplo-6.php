<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tbUsuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

//$conn->rollBack();

$conn->commit();

echo "Dados deletados com Sucesso";


?>