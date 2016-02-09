<?php 
	include "classe-mamifero.php";
	# intanciando um novo objeto.
	$gato = new Mamifero("Gato",2,"Amarelo","Leite","Miau");

	$gato->mostra();

	echo $gato->getEspecie();



?>