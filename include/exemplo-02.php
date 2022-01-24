<?php

// include "exemplo-01.php"; tenta fazer o arquivo funcionar. Acesso ao include path e include dinamico. Acessa domínios remotos(péssima prática)
require_once "exemplo-01.php"; //obriga que o arquivo exista e que esteja funcionando. Estoura erro
require_once "exemplo-01.php"; //obriga que o arquivo exista e que esteja funcionando. Estoura erro
// require_once inclui arquivo uma unica vez. Ajuda a não chamar o mesmo script mais de uma vez

$resultado = somar(10, 20);

echo $resultado;

?>