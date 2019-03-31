<?php

//Aula sobre ATIBUTOS e MÉTODOS


class Carro{
/*
Abaixo vamos criar os atributos como 'private' , que é o padrão mais comum.
O tipo de encapsulamento Private protege mais os seus atributos. 
Com o padrão public, você tem mais liberdado para acessa-los, porem menos segurança;

Para este caso de atributos definidos com o tipo de encapsulamento PRIVATE, existem métodos "geters" e "seters", 
que podemos usar para pegar ou definir valores para os atributos PRIVATES

*/
	private $modelo;
	private $motor;
	private $ano;

//Agora vamos entender os "Geters" e "Seters";

	//Lembrando que por convencao, metodos começam com letras minúsculas, porem a segunda palavra sempre com maiúscula.

	//para cada atributo criado acima, teremos um método de GET e um método de SET.

	//EXemplo de método GET, para pegar/retornar o valor que foi setado/definido para o atributo '$modelo'.
	public function getModelo(){
		return $this->modelo;
	}

	//Exemplo de método SET , usando pra definir um valor para o atributo $modelo
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	////
	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	/////
	//Abaixo usamos aqui um CAST no retorno da function, que é a definição de TIPO em um retorno de uma function.
	public function getAno():int{//Esta forma de fazer o CAST é um novo recurso do PHP7
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}


	//abaixo Método para exibir todos os atibutos
	public function exibir(){

		return array(
				"Modelo: "=>$this->getModelo(),
				"Motor: "=>$this->getMotor(),
				"Ano: "=>$this->getAno()
			);


	}

}


//agora criamos o objeto $gol. "Instanciamos" nossa classe
$gol = new Carro();

/*
Lembrando que para acessarmos nossos atributos PRIVATES e setarmos valores, usaremos nossos metodos "geters" e "seters", devido ao fato 
de nao terem o tipo PUBLIC de encapsulamento
*/
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");
//Aqui acima, usamos apenas os métodos "SETERS" , para definir os valores que queremos para os nossos atributos


/*
Abaixo, lembrando que criamos o metodo exibir(), que retorna todos os métodos "GETERS", 
então retornaremos os valores dos atributos através deste metodo exibir() */

var_dump($gol->exibir());

?>