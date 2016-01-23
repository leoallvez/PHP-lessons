<!DOCTYPE html>
<?php session_start() ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gerenciador de Tarefas</title>
		<link rel="stylesheet" href="_css/style.css">
		<script>
			function codeBlock{ }
		</script>
	</head>
	<body>
		<h1>Gerenciador de Tarefas</h1>
		<form>
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>
					Tarefa:
					<input type="text" name="nome">
				</label>
				<input type="submit" value="Cadastrar">
			</fieldset>
		</form>
		<?php 
			if(isset($_GET["nome"])){
				$_SESSION["a"][] = $_GET["nome"];
			}

			if(isset($_SESSION["a"])){
				$list = $_SESSION["a"];
			}
		?>

		<table>
			<th> Tarefas</th>
			<?php foreach ($list as $tarefa) : ?>
				<tr>
					<td><?php echo $tarefa ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>