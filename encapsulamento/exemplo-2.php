<?php

class Pessoa {

	//Abaixo estamos criando atributos de diferentes tipos de acesso
	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";


	//Os atributos PRIVATE E PROTECTED nao podem ser acessados por um objeto fora da classe, por exemplo.
	//Apenas quem estiver dentro da propria classe é que pode acessar um atributo PROTECTED, ou quem herda desta classe.

	/*
	O Tipo PRIVATE está em um nível acima de proteção em relação ao tipo PROTECTED. 
	Nem mesmo os herdeiros podem acessar um atributo com este tipo definido. Apenas quem está na propria classe.
	

	*/


	public function verDados(){
		echo $this->nome ."<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";


	}	

}


//Criando uma classe EXTENDS 
//Lembrando que EXTENDS vai poder acessar tudo o que for PROTECTED e PUBLIC da classe PESSOA. E o que for PRIVATE nao poderá ser acessado 
class Programador extends Pessoa{

	public function verDados(){

		//Usando o metodo get_class(), para saber qual é a classe que está sendo usada na chamada do método.
		echo get_class($this) . "<br/>";

		/*
		Abaixo, neste caso, chamando o metodo verDados() dentro da classe Programador, ele consegue buscar os atributos PUBLIC E PROTECTED
		da classe MÃE(Pessoa), pois é uma classe EXTENDS
		
		*/

		echo $this->nome ."<br/>";
		echo $this->idade . "<br/>";
		
		//Porém, o atributo PRIVATE, ele não consegue buscar.
		echo $this->senha . "<br/>";
	}	

}

$objeto = new Programador();

$objeto->verDados();


?>