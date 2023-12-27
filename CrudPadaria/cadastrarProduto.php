<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Controle de Produtos</title>
	</head>
	<body>
		<div>
			<h1>Cadastrar Produto</h1>
			<form method="post" action="controleProduto.php">
				<label for="descricao">Descrição:</label>
				<input type="text" name="descricao" id="descricao">

				<label for="quantidade">Quantidade:</label>
				<input type="number" name="quantidade" id="quantidade">

				<button type="submit" name="opcao" value="cadastrar">Cadastrar</button>
			</form>
		</div>
	</body>
</html>