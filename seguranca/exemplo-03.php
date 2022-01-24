<?php

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!";

?>

<!-- 
	Permissões de pasta
	0 - Nenhuma permissão

	1 - Permissão de execução
	2 - Permissão de gravação
	3 - 1 + 2

	4 - Somente leitura

	5 - Leitura e execução
	6 - Leitura e gravação

	7 - Permissão total - Leitura, execução e gravação

	Ambiente Unix trabalha com três digitos - xxx
	Primeiro -> Dono
	Segundo -> Grupo de usuários
	Terceiro -> Outros(Visitantes)

	777 -> Acesso total para todos
	
 -->