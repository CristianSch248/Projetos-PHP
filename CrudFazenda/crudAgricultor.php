<?php
	include'conexaoBD.php';

	function cadastrarAgricultor($nome, $cpf){
		connect();
		query(" INSERT INTO agricultor(nome, cpf) VALUES ('$nome', '$cpf')");
		close();
	}

	function mostrarAgricultor(){
		connect();
		$resultado = query("SELECT * FROM agricultor");
		close();
		return $resultado;
	}

	function buscarAgricultor($codigo){
		connect();
		$resultado = query("SELECT * FROM agricultor WHERE codigo=$codigo");
		close();
		return $resultado;
	}

	function alterarAgricultor($codigo, $nome, $cpf){
		connect();
		query("UPDATE agricultor SET nome='$nome', cpf='$cpf' WHERE codigo=$codigo");
		close();
	}

	function excluirAgricultor($codigo){
		connect();
		query("DELETE FROM agricultor WHERE codigo=$codigo");
		close();
	}

	function mostrarAgricultorPesquisar($pesquisa){
		connect();
		$resultado = query("SELECT * FROM agricultor WHERE nome LIKE '%$pesquisa%'OR cpf LIKE '%$pesquisa%'");
		close();
		return $resultado;
	}
	
?>