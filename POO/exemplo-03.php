<?php

class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$resultado = Documento::validarCPF($numero);

		if($resultado == false){
			throw new Exception("CPF informado não é válido", 1);
			
		}

		$this->numero = $numero;
	}

	public static function validarCPF($cpf):bool
	{

		return true;

	}

}

/*
$cpf = new Documento();
$cpf->setNumero("12345678910");

var_dump($cpf->getNumero());
*/

var_dump(Documento::validarCPF("123"));

?>