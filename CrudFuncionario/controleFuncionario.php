<?php
	include 'crudFuncionario.php';
	$opcao = $_POST["opcao"];

	switch ($opcao){
		case 'Cadastrar':{
			cadastrarFuncionario($_POST["nome"], $_POST["cpf"]);
			header("Location: cadastrarFuncionario.php");
			break;
		} 
	}
?>