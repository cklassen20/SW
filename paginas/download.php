<?php
	//get ou post?
	if (isset($_POST['file']) and isset($_POST['nome']) and isset($_POST['tipo'])){
		$file = "../".$_POST['file']:
		$nome = $_POST['nome']];
		$tipo = $_POST['tipo']];
		function setHeaders ($nome, $file, $tipo){
			header ("content-disposition: attachment; filename={$nome}");
			header ("content-type: aplication/{$tipo}");
			readfile ($file);
		}  
		
		setHeaders ($nome, $file, $tipo);
		
	}

?>
