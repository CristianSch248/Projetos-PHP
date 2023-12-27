<?php
	include 'conexaoBD.php';
	function cadastrarProduto($nome, $fabricante, $quantidade){
		connect();
		query("INSERT INTO pecas (nome, fabricante, quantidade) VALUES ('$nome', '$fabricante', $quantidade)");
		close();
	}

	function mostrarProduto(){
		connect();
		$resultado = query("SELECT * FROM pecas");
		close();
		return $resultado;
	}

	function mostrarProdutoAlterar($codigo){
		connect();
		$resultado = query("SELECT * FROM pecas WHERE codigo=$codigo");
		close();
		return $resultado;
	}

	function alterarProduto($codigo, $nome, $fabricante, $quantidade){
		connect();
		query("UPDATE pecas SET nome = '$nome', fabricante = '$fabricante', quantidade = $quantidade WHERE codigo=$codigo");
		close();			
	}

	function excluirProduto($codigo){
 		connect();
 		query("DELETE FROM pecas WHERE codigo=$codigo");
 		close();
 	}
?>