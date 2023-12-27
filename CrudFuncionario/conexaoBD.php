<?php
	
	$conexao;
	$nomaUsuario = 'root';
	$senha = '';
	$base = 'clinica';//em proximos produtos é so alterar a variavel base

	function connect(){
		global $conexao, $nomaUsuario, $senha, $base;
		$conexao = mysqli_connect('localhost', $nomaUsuario, $senha, $base) or die(mysqli_connect_error());
	}

	function query($sql){
		global $conexao;
		mysqli_query($conexao, 'SET CHARACTER SET utf8');
		$query = mysqli_query($conexao, $sql) or die (mysqli_query_error());
		return $query;
	} 

	function close(){
		global $conexao;
		mysqli_close($conexao);	
	}
?>