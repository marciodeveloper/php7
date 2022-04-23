<?php


class Pessoa {

	public $nome; //Atributo

	punlic function falar(){ //Método

		return "O meu nome é: ".$this->nome;

	}


}

$jose = new Pessoa();
$jose->nome = "Jose Marcio";
echo $jose->falar();


?>