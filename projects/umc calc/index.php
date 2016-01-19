<!DOCTYPE html>
<html>
	<head>
		<title>Campus Calc</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="_css/style-calc.css">
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
				<h2>Campus Calc<sup><span id="bet"> beta</span></sup></h2>
				<fieldset>
					<legend><strong>M1</strong></legend>
					<label for="nm1">Nota M1:</label></br>
					<input type="number" name="m1" value="0" id="nm1" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
				</fieldset>
				<fieldset>
					<legend><strong>M2</strong></legend>
					<label for="nnd">Nota Diciplina:</label></br>
					<input type="number" name="nd" value="0" id="nnd" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
					<label for="nni">Nota Integrada: </label></br>
					<input type="number" name="ni" value="0" id="nni" list="lista" step="0.1" min="0" max="10"></br>
					<?php notas(); ?>
				</fieldset>
				<input type="submit" class="bot" value="Calcular">
				<input type="reset"  class="bot" value="Apagar">
			</form>
			
		</div>
	</body>
</html>