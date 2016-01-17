<!DOCTYPE html>
<html>
	<head>
		<title>Calendario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
		<style>
			td{
				text-align: center;
				padding: 3px;
				background-color: white;
			}
		</style>
		<?php
			function linha($dia){
				echo "<tr>";
					for($i = 0; $i <= 6;$i++){
						if(isset($dia[$i])){
							echo "<td>".$dia[$i]."</td>";
						}else{
							echo "<td></td>";
						}
					}
				echo "</tr>";
			}
			function calendario(){
				$dia = 1;
				$semana = array();
				while ($dia <= 31) {
					array_push($semana, $dia);
					if (count($semana) == 7) {
						linha($semana);
						$semana = array();
					}
					$dia++;
				}
				linha($semana);
			}
		?>
	</head>
	<body>
		<div>
			<table border="1">
				<tr>
					<th>Dom</th>
					<th>Seg</th>
					<th>Ter</th>
					<th>Qua</th>
					<th>Qui</th>
					<th>Sex</th>
					<th>Sab</th>
					<?php calendario(); ?>
				</tr>
			</table>
		</div>
	</body>
</html>