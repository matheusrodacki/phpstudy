<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$cmd = escapeshellcmd($_POST['cmd']); // Evitar ao máximo receber comandos de sistema por dados dinâmicos. Se precisar, usar escapeshellcmd para tratar o comando

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>