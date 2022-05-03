<?php 

class Documento {


	public function getNumero(){


		return $this->numero;

	}

	public function setNumero(){


		$this->numero = $numero;

	}

}

class CPF extends Documento {

	public function validar():bool
	{
		$numeroCPF = $this->getNumero();
		//Validação CPF
		return true;
	}

}

$doc = new CPF();

$doc->setNumero("11122233344");

var_dump($doc->validar());