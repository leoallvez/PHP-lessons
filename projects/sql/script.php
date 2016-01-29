<?php 
	include "base.php";


	$usuarios = mysql_query('create table usuarios(codigo integer primary key, nome varchar(20),senha varchar(14);',$conexao);

	$noticais = mysql_query('create table noticia( registro integer primay key, titulo varchar(50), conteudo blob);', $conexao);


	if($usuarios){
		echo "Tabela de usuário foi criada!</br>";
	}else{
		echo "Erro tabela usuário!</br>";
	}

	if($noticia){
		echo "Tabela de noticia criada!</br>";
	}else{
		echo "Erro tabela noticias!</br>";
	}

?>