<?php
	
	include 'crudProduto.php';
	$opcao = $_POST["opcao"];
	switch ($opcao) {
		case 'cadastrar':
			$descricao = $_POST["descricao"];
			$quantidade = $_POST["quantidade"];
			cadastrarProduto($descricao, $quantidade);
			header("Location: cadastrarProduto.php");
		break;
	}
?>