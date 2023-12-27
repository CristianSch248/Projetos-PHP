<?php
	include 'crudProduto.php';
 	$opcao = $_POST["opcao"];

 	switch($opcao){
 		case 'Cadastrar':
 			$nome = $_POST["nome"];
 			$fabricante = $_POST["fabricante"];
 			$quantidade = $_POST["quantidade"];
			cadastrarProduto($nome, $fabricante, $quantidade);
			header("Location: cadastrarProduto.php");
		break;
 		case 'Alterar':
 			$codigo = $_POST["codigo"];
 			$nome = $_POST["nome"];
 			$fabricante = $_POST["fabricante"];
 			$quantidade = $_POST["quantidade"];
 			alterarProduto($codigo, $nome, $fabricante, $quantidade);
 			header("Location: mostrarProduto.php");
 		break;
 		case 'Excluir':
 			$codigo = $_POST["codigo"];
 			excluirProduto($codigo);
 			header("Location: mostrarProduto.php");
 		break;
 		
 	}
?>