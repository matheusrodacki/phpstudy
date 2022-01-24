<?php

function soma(int ...$valores){ // novidade do php7

	return array_sum($valores);

}

echo soma(2, 2);

echo "<br/>";

echo soma(25, 33);

echo "<br/>";

echo soma(1.5, 2.2);

echo "<br/>";

echo soma("i", 2.2);

?>