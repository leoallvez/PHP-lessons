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
				$m1 = isset($_GET["m1"])?$_GET["m1"]:0;
				$nd = isset($_GET["nd"])?$_GET["nd"]:0;
				$ni = isset($_GET["ni"])?$_GET["ni"]:0;

				echo "Nota m1: $m1 </br>";
				echo "Nota nd: $nd </br>";
				echo "Nota Integrada: $ni </br>";

				$m2 = (($nd * 0.70 )+( $ni * 0.30));

				echo "Nota m2: $m2 </br>";

				$med = (($m1 + ($m2 * 2)) /3);

				echo "Média: ".number_format($med,1)."</br>";
				if($med >= 5){
					echo "Aluno Aprovado";
				}elseif(($med >= 3) && ($med <= 4)){
					echo "Aluno de Exame";
				}else{
					echo "Aluno Reprovado";
				}
			?>
			<a href="index.php">Voltar</a>
		</div>
	</body>
</html>