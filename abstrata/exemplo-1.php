<?php

//AULA SOBRE CLASSE ABSTRATA
//É semelhante à INTERFACE

/*
DIFERENÇA ENTRE UMA CLASSE COMUM E UMA CLASSE ABSTRATA, É QUE UM OBJETO NUNCA VAI INSTANCIAR UMA CLASSE ABSTRATA.
PORTANTO, SÓ É POSSÍVEL INSTANCIAR UMA CLASSE QUE SEJA EXTENDS(QUE SEJA HERANÇA DE UMA CLASSE ABSTRATA), E NAO UMA CLASSE ABSTRATA.
 VEJAMOS NOSSO EXEMPLO ABAIXO:   */

interface Veiculo{
	//Aqui estamos dizendo que todo veiculo que formos criar no nosso sistema precisa ter um public metodo acelerar();
	public function acelerar($velocidade);
	//Podemos dizer também que será necessário ter outro método publico 'frenar';
	public function frenar($velocidade);
	//Outro método publico trocarMarcha
	public function trocarMarcha($marcha);

}



abstract class Automovel implements Veiculo{

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


class DelRey extends Automovel{

	public function empurrar(){

	}

}


//Aqui, por ser uma classe abstrata, só podemos instanciar um objeto da classe DelRey, que é a classe Extends(herança);
$carro = new DelRey();

$carro->acelerar(200);


/*
OBS: TRABALHANDO COM CLASSE ABSTRATA, UMA CLASSE SÓ PODE SER HERDEIRA DE 1 CLASSE ABASTRATA.
JÁ TRABALHANDO COM INTERFACE, UMA CLASSE PODE IMPLEMENTAR/SEGUIR/'HERDAR' MAIS DE UMA INTERFACE

*/


?>