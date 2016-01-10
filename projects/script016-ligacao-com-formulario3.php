<!DOCTYPE html>
<htm>
	<head>
		<title>PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
		<?php
			$txt = isset($_GET["t"])?$_GET["t"]:"Texto padrão";
			$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#000";
		?>
	</head>
	<body>
		<div>
			<?php
				echo "<span style='font-size:$tam; color:$cor'>$txt</span>"
			?>
		</div>
	</body>
</html>