<?php

//Excercícios sobre orientação a objetos, encapsulamento e herança



class Violao{


	private $tipoDeCordas;
	private $modelo;
	private $marca;
	private $cor;

	protected $preco;



	//get and set $tipoDeCordas
	public function getTipoDeCorda(){
		return $this->tipoDeCordas;
	}

	public function setTipoDeCordas($arg){
		$this->tipoDeCordas = $arg;
	}


	//get and set $modelo
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($arg){
		$this->modelo = $arg;
	}


	//get and set $marca
	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($arg){
		$this->marca = $arg;
	}


	//get and set $cor
	public function getCor(){
		return $this->cor;
	}

	public function setCor($arg){
		$this->cor = $arg;
	}




	public function exibeViolao(){
		echo "<h1>Dados do Violão:</h1> <br/>";
		echo "<strong>Marca:</strong> " . $this->marca . "<br/>";
		echo "<strong>Modelo:</strong> " . $this->modelo . "<br/>";
		echo "<strong>Tipo de Encordamento:</strong> " . $this->tipoDeCordas . "<br/>";
		echo "<strong>Cor: </strong>" . $this->cor . "<br/>";
	}


}



class Loja extends Violao{
	
	public function exibePreco(){
		//Aqui seto o valor do atributo $preco, que é da classe Violao, classe pai da Classe Loja
		return $this->preco = "1.200";
	}	
	
}

//
//


$obj = new Violao();

$obj->setMarca("Giannini");
$obj->setModelo("Elétrico - com afinador embutido");
$obj->setTipoDeCordas("Encordamento de aço");
$obj->setCor("Preto");


$obj->exibeViolao();



//criacao do obj2 extends para acessar o atributo protected da classse Violao, que é a classe pai
$obj2 = new Loja();

echo "<br/>";
echo "<strong>Preço: </strong>". $obj2->exibePreco();
//echo "<br/>" . $this->modelo;








?>