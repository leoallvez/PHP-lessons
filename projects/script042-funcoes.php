<html>
    <p>
	<?php
	// Crie um array e coloque nele os nomes
    // de seus familiares e amigos próximos
    $myFamily = array();
    array_push($myFamily,'Leo');
    array_push($myFamily,'Lucas');
    array_push($myFamily,'Stefhany');
    array_push($myFamily,'Leo');
    array_push($myFamily,'Claudia');
	// Ordene a lista
    sort($myFamily);
	// Escolha um vencedor de forma aleatória!
    $i = rand(0,count($myFamily)-1);
	// Imprima o nome do vencedor em LETRAS MAIÚSCULAS
	print strtoupper($myFamily[$i]);
	?>
	</p>
</html>