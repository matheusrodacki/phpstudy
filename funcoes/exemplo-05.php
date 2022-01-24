<?php

$a = 10;

function trocaValor(&$b){ // passagem de parâmetro por referência

	$b += 50;

	return $b;

}

echo trocaValor($a);

echo "<br/>";

echo trocaValor($a);

echo "<br/>";

echo $a;

?>