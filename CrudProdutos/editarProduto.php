<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>controle de Produto</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">Peças para Carros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="cadastrarProduto.php">Cadastrar Nova Peça</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mostrarProduto.php">Mostrar Estoque de Peças</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php
                include 'crudProduto.php';
                $codigo=$_GET["codigo"];
                $resultado=mostrarProdutoAlterar($codigo);
                $resultadoSeparado=mysqli_fetch_assoc($resultado);
            ?>
            <form method="post" action="controleProduto.php">
                <h3>Editar Produto</h3>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name ="nome" value="<?php echo $resultadoSeparado['nome']; ?>">
                </div>
                <div class="form-group">
                    <label for="fabricante">Fabricante:</label>
                    <input type="text" step= 0.01 class="form-control" id="fabricante" name="fabricante" value="<?php echo $resultadoSeparado['fabricante']; ?>">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" step= 0.01 class="form-control" id="quantidade" name="quantidade" value="<?php echo $resultadoSeparado['quantidade']; ?>">
                </div>
                <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo']; ?>">
                <button type="submit" class="btn btn-primary" name="opcao" value="Alterar">Alterar</button>
                <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
                <a href="mostrarProduto.php" class="btn btn-light">Cancelar</a>
            </form>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
  </body>
</html>