<?
	include 'crudAgricultor.php';
	$opcao = $_POST["opcao"];

	switch ($opcao){
		case 'Cadastrar':{
			cadastrarAgricultor($_POST["nome"], $_POST["cpf"]);
			header("Location: cadastrarAgricultor.php");
			break;
		}
		case 'Editar':{
			alterarAgricultor($_POST["codigo"], $_POST["nome"], $_POST["cpf"]);
			header("Location: visualizarAgricultor.php");
			break;
		}
		case 'Excluir':{
			excluirAgricultor($_POST["codigo"]);
			header("Location: visualizarAgricultor.php");
			break;
		}
?>