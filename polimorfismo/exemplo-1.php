<?php

//AULA SOBRE POLIMORFISMO
/*
Conceito:
POLIMORFISMO é quando temos, por exemplo, métodos como o MESMO NOME, em classes DIFERENTES, que fazem coisas DIFERENTES

Vejamos um exemplo:
*/


//Aqui criamos a classe ABSTRATA ANIMAL. Ela tem um metodo falar() e um metodo mover()
abstract class Animal {
	
	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}
}



/*Abaixo estamos criando a classe Cachorro, que é herança da classe abstrata Animal*
/* 
Detalhe que a classe Cachorro, tambem possui um método falar(), porém que retorna algo diferente do método falar() 
que está na sua classe pai.
*/
class Cachorro extends Animal{
	
	public function falar(){
		return "Late";
	}
	
	
}


//Aqui, criamos uma outra classe extends da classe Animal
class Gato extends Animal
{
	
	public function falar(){
		return "Mia";
	}
}




//Aqui criamos uma terceira classe extends
class Passaro extends Animal
{
	
	public function falar(){
		return "Canta";

	}

	/*
	DETALHE IMPORTANTE AGORA: Repare que aqui, chamamos o método mover() retornando um valor específico para esta classe em questão.

	Porém, concatenamos através da palavra reservada "PARENT", o retorno que ocorre deste método tambem na classe Animal, que é a classe PAI.
	Portanto, é como se ele estivesse executando o método mover() duas vezes, uma da classe em questão(Passaro()) e outra da classe Pai,
	a classe ANIMAL().

	Essse é o conceito de POLIMORFISMO
	*/
	public function mover(){
		return "Voa e " . parent::mover();
	}
}




$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "<br/>";
echo ".................................<br/>";

//


$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo "<br/>";
echo ".................................<br/>";



//
$ave = new Passaro();

echo $ave->falar(). "<br/>";
echo $ave->mover(). "<br/>";
echo ".................................<br/>";







?>