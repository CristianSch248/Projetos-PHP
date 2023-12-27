<?php
	include 'crudAgricultor';

	$pesquisa = $_post["palavra"];

	switch ($pesquisa) {
		case 'tudo':
			$resultado = mostrarAgricultor();
			break;
		
		default:
			$resultado = mostrarAgricultorPesquisar($pesquisa);
			break;
	}

	if(mysqli_num_rows($resultado)){
		echo 'Nenhum resultado encontrado';
	}
	else{
		while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
            echo"
              <tr>
                <td>$resultadoSeparado[nome]</td>
                <td>$resultadoSeparado[cpf]</td>
                <td><a href='editarAgricultor.php?codigo=$resultadoSeparado[codigo]' class='btn btn-success'>editar</td>
              </tr>
            ";
          }
        }
	}

?>