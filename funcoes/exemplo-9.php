<?php

//Aula sobre função RECURSIVA.
//Função Recursiva é uma função que chama a sim própria. É preciso ter cuidado para não entrar em um loop infinito


/*Lembrando que funções recursivas só devem ser usadas em ultimo caso ou em casos muito específicos
Se póssível, é sempre melhor optar por while, foreach ou for
*/

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Início: Diretor
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=> array(
					//Início: Gerente de Vendas
					array(
					'nome_cargo'=>'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				)
				
			),
			//Término: Diretor Comercial

			//Início: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=> array(
					//Início: Gerente Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=> array(
							//Início: Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Término: Supervisor de Pagamentos
						)
					),
					//Término: Gerente Contas a Pagar
					
					//Início: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=> array(
							//Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
							//Término: Supervisor de Suprimentos
						)
					)
					//Término: Gerente de Compras
				)
			)
			//Término: Diretor Financeiro
		)
	)
);



function exibe($cargos){
	

	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .= "<li>";
		
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";


	}


	// abaixo usamos o ".=" para incrementar/adicionar valor ao valor inicial da variável $html;
	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

?>