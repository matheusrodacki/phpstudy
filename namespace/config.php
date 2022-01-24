<?php

spl_autoload_register(function($nameClass){

	//Nome do diretórios das classes
	$dirClass = "class";

	//Nome do arquivo + pasta.
	//DIRECTORY_SEPARATOR é uma constante para barras / \.
	$fileName = $dirClass .DIRECTORY_SEPARATOR. $nameClass . ".php";

	var_dump($fileName);

	if (file_exists($fileName)){
		require_once($fileName);
	}
});

?>