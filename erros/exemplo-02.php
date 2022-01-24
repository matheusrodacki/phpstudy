<?php

error_reporting(E_ALL & ~E_NOTICE); // define quais se erros serão mostrados. Quando coloco ~ eu nego. No exemplo, defino que irá mostrar os erros mas não mostrará os notices

$nome = $_GET['nome'];

echo $nome;

?>