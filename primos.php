<?php

function Primos($inicial,$final){

	$primos;
	$n = 0;

	//Varrer a sequência de números
	for($i = $inicial+1; $i < $final; $i++){
		$divisores = 0;
		//Verificar em cada numero se ele é divisível de 2 até (n-1)
		for($cont = 2; $cont < $i; $cont++){
			//Verifica o resto da divisão
			if($i % $cont == 0){
				$divisores++;
			}
		}
		//Se número não apresentou nenhum divisor, então é primo
		if($divisores == 0){
			$primos[$n] = $i;
			$n++;
		}
		
	}
	echo "Encontrados ".count($primos)." números primos, são eles: ".json_encode($primos);

}

//Chamada de teste da função
Primos(10,29);
?>
