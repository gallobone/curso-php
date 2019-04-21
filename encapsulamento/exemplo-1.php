<?php

//Aula sobre ENCAPSULAMENTO(modificador de acessos)

/*
Encapsulamento ajuda a proteger e a organizar as informações
serve pra proteger e controlar quem pode e quem nao pode acessar os atributos e métodos
*/


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


//instanciamos um objeto para acessarmos os atributos e metodos da classe Pessoa
$objeto = new Pessoa();

 echo $objeto->nome . "<br/>";
// echo $objeto->idade . "<br/>"; 
/*
Não é possível acessar um atributo PROTECTED fora da classe. 
Seria preciso acessar atraves de uma classe herdeira*/

// echo $objeto->senha . "<br/>";
/*
Não é possível acessar um atributo PRIVATE fora da classe. 
Neste caso só é possível para quem está dentro da prórpria classe
*/


//Para visualizar os atributos, eu vou acessar(atraves do $objeto) o metodso publico verDados()
//O metodo publico verDados está dentro da classe Pessoa, portanto ele consegue acessar os valores dos atributos private e protected.
//Sendo assim, chamando o metodo publico verDados() fora da classe , eu consigo obter o valor dos atributos.

$objeto->verDados();



//IMPORTANTE:::::::
/*
Concluindo...
Existem 3 personagens que podem acessar atributos e métodos de uma classe:

1- ATRIBUTOS E MÉTODOS DA MESMA CLASSE
2- ATRIBUTOS E MÉTODOS DAS CLASSES EXTENDIDAS(herança)
3- OBJETOS

Quando é PUBLIC, todo mundo vê!
Quando é PROTECTED - Todo mundo da MESMA classe e da CLASSE EXTENDS pode ver. Objeto fora nao vê.
Quando é PRIVATE - Só quem é da MESMA CLASSE pode ver!



*/


?>
