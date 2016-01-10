<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				/* função isset() = se valor que veio 
				   da url foi configurado*/ 
				$nome = isset($_GET["n"])?$_GET["n"]:"[Não Informado]";
				$ano  = isset($_GET["a"])?$_GET["a"]:0;
				$sexo = isset($_GET["s"])?$_GET["s"]:"[Não Informado]";

				$idade = date("Y") - $ano;

				echo "Nome: $nome</br>";
				echo "Ano de nascimento: $ano</br>";
				echo "sexo: $sexo</br>";
				echo "sua idade é: $idade</br>";
			?>
			<a href="script015-ligacao-com-formulario2.html">Voltar</a>
		</div>
	</body>
</html>