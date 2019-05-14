<?php


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
