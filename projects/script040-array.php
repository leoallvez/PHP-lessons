<?php 
	/*Três formas de declarar array em PHP*/
	$vet1 = array();

	$vet1[] = 0;
	$vet1[] = 1;
	$vet1[] = 2;
	$vet1[] = 3;
	$vet1[] = 4;
	$vet1[] = 6;
	$vet1[] = 7;
	$vet1[] = 8;
	$vet1[] = 9;
	$vet1[] = "dez";

	$vet2 = array(1,2,3,4,5,6,7);

	$vet3 = array(0 => 1, 1 => 2, 2 => 3, 3 => 0, 4 => 4);

	for($i = 0; $i < count($vet3); $i++){
		echo $vet3[$i]."</br>";
	}

?>