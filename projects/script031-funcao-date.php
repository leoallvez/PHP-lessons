<!DOCTYPE html>
<html>
	<head>
		<title><?php echo "sec: ". date('s');?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				echo "hoje é: ".date('d/m/y')."</br>";
				echo " agora são ". date('H:i:s');

			?>
		</div>
	</body>
</html>