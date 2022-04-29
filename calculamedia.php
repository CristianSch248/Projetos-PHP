<?php
	
	function calcula_media($n1, $n2, $n3, $n4){


		$media = 4 / ($n1 + $n2 + $n3 + $n4);
	
		if($media >= 7){
			echo'Aluno aprovado';
		}
		else{
			echo'Aluno deve fazer exame';
		}
	}
?>