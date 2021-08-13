<?php
	$nomepagina = isset($_GET['p']) ? $_GET['p'] : null;
	$errors = [];
	if($nomepagina == null) {
		$nomepagina = 'login';
	}
	
	include('.' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'idiorm.php');
	ORM::configure('mysql:host=localhost;dbname=SmartWheels');
	ORM::configure('username', 'root');
	//ORM::configure('password', 'root');
	
	$diretorio = '.' . DIRECTORY_SEPARATOR . 'paginas' . DIRECTORY_SEPARATOR;
	$pagina_pre = $diretorio . $nomepagina . '.pre.php';
	$pagina = $diretorio . $nomepagina . '.php';
	
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
	
	if(file_exists($pagina_pre)) {
		require_once $pagina_pre;
	}
	
	// validar páginas que não precisam estar logado
	if(!is_logado()) {
		$paginas_publicas = ['login', 'novoUsuario', 'materiais', 'sobreNos'];
		if(array_search($nomepagina, $paginas_publicas) === false) {
			header('Location: ./index.php?p=login');
			die();
		}
	}
	
	//obtendo id da sessão iniciada
	//$idSession = session_id();
	//echo "ID: "; print_r($idSession);
	//$_SESSION['nome'] = "Nome da sessão";
	//... $nome; // caso seja uma variável
	//... $_POST['nome']; // caso seja um formulário
	
	function is_logado() {
		return isset($_SESSION['idusuario']);
	}
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
			<?php
				if(!is_logado()) {
					echo '<th><a href="./index.php?p=login">Login</a></th>';
					echo '<th><a href="./index.php?p=novoUsuario">Novo Usuário</a></th>';
				} else {
					echo '<th><a href="./index.php?p=login&logout">Sair</a></th>';
					echo '<th>' . $_SESSION['usuario'] . '</th>';
					echo '<th><a href="./index.php?p=adicionarAluno">Adicionar Aluno</a></th>';
					echo '<th><a href="./index.php?p=adicionarDesempenho">Adicionar Desempenho</a></th>';
				}
			?>
			
			<th><a href="./index.php?p=materiais">Materiais</a></th>
			<?php
				if(is_logado())
					echo '<th><a href="./index.php?p=verificarResultados">Verificar Resultados</a></th>'
			?>
			<th><a href="./index.php?p=sobreNos">Sobre Nós!</a></th>
		</tr>
	</table>
	<hr>

	<?php
		foreach($errors as $erro)
			echo '<p>' . $erro . '</p>';
		require_once $pagina;
	?>
	</body>
</html>