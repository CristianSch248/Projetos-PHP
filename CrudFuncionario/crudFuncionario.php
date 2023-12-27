<?php
	include'conexaoBD.php';
	
	function cadastrarFuncionario($nome, $cpf){
		connect();
		query(" INSERT INTO funcionario (nome, cpf) VALUES ('$nome', '$cpf')");
		close();
	}
?>