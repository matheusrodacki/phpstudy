<?php

$anoNascimento = 1990;

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1." ".$sobrenome;

echo $nomeCompleto;
exit;

$nome = ""; //Não pode. Caracteres especiais apenas _

echo $nome1;

echo "<br/>";

unset($nome1); //Mata a variável

if(isset($nome1)){
	echo $nome1;
}

?>