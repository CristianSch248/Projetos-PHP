<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Agricultor | Editar</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Agricultores</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="cadastrarAgricultor.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visualizarAgricultor.php">Visualizar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<?php
		include 'crudProfessor.php';
		$codigo=$_GET["codigo"];
		$resultado=buscarAgricultor($codigo);
		$resultadoSeparado=mysqli_fetch_assoc($resulato);
	?>
  <form method="post" action="controleAgricultor.php">
    <h3>Editar</h3>
    <div class="mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do(a) agricultor(a)" value="<?php 
      echo $resultadoSeparado['nome'];?>">
    </div>
    <div class="mb-3">
      <label for="cpf" class="form-label">CPF:</label>
      <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="cpfHelp" value="<?php 
      echo $resultadoSeparado['cpf'];?>">
      <div id="cpfHelp" class="form-text">Formato do CPF 999.999.999-99</div>
    </div>
    <input type="hidden" name="codigo" value="<?php 
      echo $resultadoSeparado['codigo'];?>">
    <button type="submit" class="btn btn-primary" name="opcao" value="editar">editar</button>
    <button type="submit" class="btn btn-danger" name="opcao" value="excluir">excluir</button>
    <a href="visualizarAgricultor.php" class="btn btn-light">Cancelar</a>
  </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="jquery.maskedinput.js" type="text/javascript"></script>

<script>
  jquery(function($){
    $("#cpf").mask("999.999.999-99");
  });
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>