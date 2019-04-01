<?php

//Aula sobre Métodos Estáticos
//

class Documento {

	private $numero; 

	//Crianmdo um metodo Geter
	public function getNumero(){
		return $this->numero;
	}


	//Criando um método Seter
	public function setNumero($valor){
		//Nessa linha abaixo, insrimos dentro da variavel $resultado, o retorno do método statico que valida o CPF
		$resultado = Documento::validarCpf($valor);
		//OBS: A diferença para chamarmos um metodo estático, é devemos iniciar com o nome da classe e o sinal "::". 
		/*
		Portanto observe como ficou nesse exemplo acima: NomeDaClasse::metodoEstatico(); /// Documento::validarCpf($valor);
		*/

		if($resultado === false){

			throw new Exception("CPF informado não é válido", 1);
		
		}


		$this->numero = $valor;	

	}


	/*
	Aqui inserimos o método ESTÁTICO que valida CPF
	OBS:: A grande diferença do método ESTÁTICO é que você não precisa instanciar um objeto para chamá-lo/acessá-lo. 
	como feito na linha 108 deste aqruivo, por exemplo.
	*/
	public static function validarCpf($cpf):bool{

		if(empty($cpf)) {
	        return false;
	    }
	 
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	     
	    
	    if (strlen($cpf) != 11) {
	        echo "length";
	        return false;
	    }
	    
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999') {
	        return false;

	     } else {   
	         
	        for ($t = 9; $t < 11; $t++) {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	 
	        return true;
	    }
	}


}


/*
//Instanciamos o obejto $cpf
$cpf = new Documento(); 
$cpf->setNumero("16757984431");

echo $cpf->getNumero();
echo "<br/>";

var_dump($cpf->getNumero());
*/


/*
OBS:: Existe um padrão de número de CPF, quando ele é gerado, e esse método que está validando o formato está respeitando as normas
de acordo com as normas da receita federal
*/


//OBS: Outro detalhe IMPORTANTE é que podemos TAMBÉM chamar o método ESTÁTICO FORA da CLASSE
var_dump(Documento::validarCpf("16757984431"));
//O CPF informado acima foi gerado pelo "gerador de CPFs" na web

?>