<?php

$total = 150;

$desconto = 0.9;

do {

	$total *= $desconto;

} while($total > 100); // while faz apenas enquanto a condição for verdadeira. Se for falso, ele não executa. Do while executa pelo menos uma vez, mesmo que seja falso

echo $total;

?>