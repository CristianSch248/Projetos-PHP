<?php

	include 'conexaoBD.php';
	function cadastrarProtudo($descricao, $quantidade){
		connect();
		query("INSERT INTO produto(descricao, quantidade) VALUES ('$descricao', $qiantidade)");
		close();
	}

?>