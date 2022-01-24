<?php

// quando a função possui o comando return é realmente uma função.
// se nao houver o comando return, ela é apenas uma sub-rotina(algo que será reutilizado)

function ola(){

	return "Olá mundo! <br/>";

}

echo ola();
$frase = ola();

echo strlen($frase); // ganha liberdade para usar a função onde eu quiser

?>