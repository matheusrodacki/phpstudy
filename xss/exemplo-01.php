<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<strong>oi</strong><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

	// echo strip_tags($_POST['busca'], "<strong>"); Não permite a escrita de tags

	echo htmlentities($_POST['busca']); // Não executa as tags. Transforma em texto

}

?>