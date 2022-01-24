<?php

$name = "images";

if(!is_dir($name)) {

	mkdir($name); // cria um diretório
	echo "Diretório $name criado com sucesso";

} else {

	rmdir($name); // remove um diretório
	echo "Já existe o diretório: $name foi removido";

}

?>