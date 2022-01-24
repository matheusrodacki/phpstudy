<?php

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha;

	}


}

$objeto = new Pessoa();

// echo $objeto->nome."<br/>"; nome aparece. Todos podem ver
// echo $objeto->idade."<br/>"; // apenas quem esta dentro da classe ou uma classe filha. Objeto não consegue acessar
//echo $objeto->senha; // a mais protegida de todos. Somente a própria classe pode acessar. As classes filhas não conseguem

$objeto->verDados();

?>