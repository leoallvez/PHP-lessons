<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$texto = "";
			if($texto != ""){
				echo "Você digitou $texto</br>";
			} 
		?>
		<form method="post" action=<?php echo $PATH_INFO; ?>>
			<input type="text" name="texto" value"" size="10"></br>
			<input type="submit" name="sub" valeu="Enviar">
		</form>
		
	</body>
</html>