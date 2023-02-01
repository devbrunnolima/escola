<?php 
require_once('conexao.php');
@session_start();



//envio vazio
if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header("location:index.php");
}

// Entrada de dados
$usuario = $_POST['usuario'];
$senha = hash('sha512', $_POST['senha']); //criptografia hash 512

// Processamento de dados
$consulta = $pdo->prepare("SELECT * from usuarios WHERE (email = :usuario or usuario = :usuario) and senha = :senha");
$consulta->bindValue(":usuario", $usuario);
$consulta->bindValue(":senha", $senha);
$consulta->execute();

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Saída de dados 
if(@count($resultado) > 0 ){
	// Verificar qual o nível do usuário para redirecionar para o painel correspondente
	$nivel = $resultado[0]['nivel'];
	if ($nivel == 'Administrador') {
		$_SESSION['nome_usuario'] = $resultado[0]['usuario'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-adm'</script>";
	}
	if ($nivel == 'Contador') {
		$_SESSION['nome_usuario'] = $resultado[0]['usuario'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-contador'</script>";
	}if ($nivel == 'Recepcionista') {
		$_SESSION['nome_usuario'] = $resultado[0]['usuario'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-recepcionista '</script>";
	}
	
}else {
	echo "<script>window.alert('Login inválido!')</script>";
	echo "<script>window.location='index.php'</script>";
}

?>