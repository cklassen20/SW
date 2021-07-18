<!--
- Podia selecionar a idade das crianças de 7 a 12 anos

-->
<!DOCTYPE HTML>  
<html lang="br">
	<head>
		<style >
			.error {color: #FF0000;}
		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="site.css">
	</head>
	<!--<title>	Testing the head section in here! </title> -->
	<body>  

		<center>
			<img src="logoSW2.png" alt="SmartWheels.copyright" style="width:1024px;height:142px;">
		</center>

		<center>
			<h2>SmartWheels: uma ferramenta para estimular o pensamento 
			computacional em crianças</h2>
		</center>
	<hr>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
	</style>

	<table>
		<tr>
			<th><a href="./index.php?p=pagina1">Login</a></th>
			<th><a href="./index.php?p=pagina2">Novo Usuário</a></th>
			<th><a href="./index.php?p=pagina3">Adicionar Aluno</a></th>
			<th><a href="./index.php?p=pagina4">Adicionar Desempenho</a></th>
			<th><a href="./index.php?p=pagina5">Materiais</a></th>
			<th><a href="./index.php?p=pagina6">Verificar Resultados</a></th>
			<th><a href="./index.php?p=pagina7">Sobre Nós!</a></th>
		</tr>
	</table>
	<hr>

	<?php
		$valor = @$_GET['p'];
		if($valor == 'pagina1'){require_once 'pagina1.php';}
		if($valor == 'pagina2'){require_once 'pagina2.php';}
		if($valor == 'pagina3'){require_once 'pagina3.php';}
		if($valor == 'pagina4'){require_once 'pagina4.php';}
		if($valor == 'pagina5'){require_once 'pagina5.php';}
		if($valor == 'pagina6'){require_once 'pagina6.php';}
		if($valor == 'pagina7'){require_once 'pagina7.php';}
		//echo $valor
	?>
	</body>
</html>