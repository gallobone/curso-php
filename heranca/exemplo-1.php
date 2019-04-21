<?php

/*
AULA SOBRE HERANÇA

Conceito de ABSTRAÇÃO:

Conseguir fazer uma classe que seja genérica a ponto de poder ser usada em vários lugares


Em cima do conceito de herança:
A idéia é sempre tentar separar o que pode ser genérico e usar classes extendidas somente para o que
for específico.



Recomenda-se estudar sobre UML
Forma de projetar todas as classes e heranças que podem ser usadas dentro de um determinado projeto.
*/


class Documento {

	private $numero;

	//criando o geter 
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;
	}
}
/*
A Dentro do conceito de HERANÇA, a classe acima representa uma classe mais genérica, e que pode ser base para as classes 
filhas, ou extends
*/



//Criando uma classe extends, para herdar o que foi genérico da classe PAI, que é a classe DOCUMENTO. 
class CPF extends Documento{

	public function validar():bool{

		$numeroCpf = $this->getNumero();
		//validacao CPF vai ocorrer aqui tratando o que foi atribuido a variavel $numeroCpf
		return true;
	}
	
	
}


//Aqui instanciamos um objeto da classe CPF
$doc = new CPF();

$doc->setNumero('111222333-44');

var_dump($doc->validar());

echo "<br/>"; 

echo $doc->getNumero();



//IMPORTANTE:
//UMA CLASSE FILHO ACESSA ATRBUTOS E METODOS DE UMA CLASSE PAI, POREM UMA CLASSE PAI NAO PODE ACESSAR ATRIBUTOS E METODOS DE UMA CLASSE FILHA

?>