<?php

$conexao;
$nomeUsuario = 'root';
$senha = '';
$base = 'padaria';

function connect(){
	global $conexao, $nomeUsuario, $senha, $base;
	$conexao = mysqli_connect('localhost', $nomeUsuario, $senha, $base) or die (mysqli_connect_error());
}

function querry($sql){
	global $conexao;
	mysqli_querry($conexao, 'SET CHARACTER SET utf8');
	$query = mysqli_query($conexao, $sql) or die (mysqli_query_error());
	return $query;
}
function close(){
	global $conexao;
	mysql_close($conexao);
}


?>