<!DOCTYPE html>
<html>
	<head>
		<title>Calendario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="_css/style-calc.css">
		<style>
		</style>
		<?php 
			function notas(){
				echo "<datalist id='lista'>";
				$n = 0.0;
				for($i = 0; $i <= 100;$i++){
					echo "<option value='".$n."'></option>";
					$n += 0.1;
				}
				echo "</datalist>";
			}
		?>
		<style>
			
		</style>
	</head>
	<body>
		<div>
			<form method="get" action="result.php">
				<fieldset>
					<legend>m1</legend>
					<label for="nm1">Nota m1:</label></br>
					<input type="number" name="m1" value="0" id="nm1" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
				</fieldset>
				<fieldset>
					<legend>m2</legend>
					<label for="nnd">Nota Diciplina:</label></br>
					<input type="number" name="nd" value="0" id="nnd" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
					<label for="nni">Nota Integrada: </label></br>
					<input type="number" name="ni" value="0" id="nni" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
				</fieldset>
				<input type="submit" value="Calcular">
				<input type="reset" value="Apagar">
			</form>
			
		</div>
	</body>
</html>