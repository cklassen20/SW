<?php
	$pagina = $_GET['p'];
	if($pagina == null) {
		$pagina = 'login';
	}
	
	$pagina = '.' . DIRECTORY_SEPARATOR . 'paginas' . DIRECTORY_SEPARATOR . $pagina . '.php';
	
	if(!file_exists($pagina)) {
		header('Location: ./index.php?p=login');
		die();
	}
	/* verificar se a sessão já está aberta, se não estiver, 
	inicie */
	if(session_status() !== PHP_SESSION_ACTIVE){
		//definindo o prazo para a cache expirar - 60 min
		session_cache_expire(60);
		session_start();
	}
	//obtendo id da sessão iniciada
	$idSession = session_id();
	echo "ID: "; print_r($idSession);
	//$_SESSION['nome'] = "Nome da sessão";
	//... $nome; // caso seja uma variável
	//... $_POST['nome']; // caso seja um formulário
?>

<!DOCTYPE HTML>  
<html lang="br">
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="site.css">
	</head>
	<body>  

		<center>
			<img src="logoSW2.png" alt="SmartWheels.copyright" style="width:1024px;height:142px;">
		</center>

		<center>
			<h2>SmartWheels: uma ferramenta para estimular o pensamento 
			computacional em crianças</h2>
		</center>

	<hr>

	<table class="menu-superior">
		<tr>
			<th><a href="./index.php?p=login">Login</a></th>
			<th><a href="./index.php?p=novoUsuario">Novo Usuário</a></th>
			<th><a href="./index.php?p=adicionarAluno">Adicionar Aluno</a></th>
			<th><a href="./index.php?p=adicionarDesempenho">Adicionar Desempenho</a></th>
			<th><a href="./index.php?p=materiais">Materiais</a></th>
			<th><a href="./index.php?p=verificarResultados">Verificar Resultados</a></th>
			<th><a href="./index.php?p=sobreNos">Sobre Nós!</a></th>
		</tr>
	</table>
	<hr>

	<?php
		require_once $pagina;
	?>
	</body>
</html>