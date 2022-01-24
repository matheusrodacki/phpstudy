<?php

require_once "config.php";

$_SESSION['nome'] = "OK";

echo $_SESSION['nome']."<br/>";

session_unset($_SESSION['nome']);

echo $_SESSION['nome']."<br/>";

$_SESSION['teste'] = "Teste";

echo $_SESSION['teste'];

session_destroy();

echo $_SESSION['teste'];

?>