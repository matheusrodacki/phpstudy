<?php

// operadores spaceship

$a = 50;

$b = 35;

var_dump($a <=> $b); //1 $a é maior

$a = 35;

$b = 35;

var_dump($a <=> $b); //0 $a é igual a $b

$a = 34;

$b = 35;

var_dump($a <=> $b); //-1 $a é menor

?>