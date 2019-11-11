<?php
$frase ="murcielago";
function contarVocales($frase){
	$vocalesEncontradas = 0;

	$frase = strtolower($frase);
	
	$longitud = strlen($frase);
	for ($indice = 0; $indice < $longitud; $indice++) { 
	
		if (in_array($frase[$indice], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
		}
		else(echo "no tiene las 5 vocales");
	}
	return $vocalesEncontradas;
	echo "Tiene las 5 vocales";
}





?>