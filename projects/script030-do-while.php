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
				$c = 1000;
				do{
					echo "c = ".$c--."</br>";
				}while($c >= 1);
			?>
		</div>
	</body>
</html>