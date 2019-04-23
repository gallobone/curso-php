<?php

//INTERFACE
//Quando uma INTERFACE é ou deve ser usada?

// - Quando você vai programar sozinho, pois você pode usar interface pra organizar seu próprio código.
//- Quando você trabalha com outros ou vários progrmadores, interface é bem interessante
//- Quando seu código se comunica com terceiros

//A INTERFACE ajuda a definir um PADRÃO pra trabalhar com o seu código.

/*
A INTERFACE pode determinar que para usar o seu código seja preciso usar tal método com o tal nome, tem que 
estar em um tipo de encapsulamento específico...etc
tal...

A Interface "obriga" o programador a seguir um padrão determinado nela, ao criar uma CLASSE. INTERFACE na realidade são exigências
que o seu código/clase deve ter/cumprir.

*/

//Vamos criar nossa INTERFACE//


//Aqui criamos a interface veiculo.
interface Veiculo{
	//Aqui estamos dizendo que todo veiculo que formos criar no nosso sistema precisa ter um public metodo acelerar();
	public function acelerar($velocidade);
	//Podemos dizer também que será necessário ter outro método publico 'frenar';
	public function frenar($velocidade);
	//Outro método publico trocarMarcha
	public function trocarMarcha($marcha);

}

//Agora vamos criar uma CLASSE implementando essa INTERFACE VEICULO
//Desta forma dizemos que a classe Civic tem que implementar/seguir a interface VEICULO
class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até  ". $velocidade . " km/h";
	}


	public function frenar($velocidade){
		echo "O veículo frenou até ". $velocidade . "km/h";
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha;

	}

}

$carro = new Civic();

$carro->trocarMarcha(1);



//OBS: UMA CLASSE PODE USAR MAIS DE UMA INTERFACE

?>