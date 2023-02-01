<?php 
@session_start();

require_once('conexao.php');

// Entrada de dados
$usuario = $_POST['usuario'];
$senha = hash('sha512',$_POST['senha']);

// $senha = $_POST['senha'];
// $senha = hash('sha512', $_POST['senha']);

// Processamento de dados
$consulta = $pdo->prepare("SELECT * from usuarios WHERE (email = :usuario or funcional = :usuario) and senha = :senha");
$consulta->bindValue(":usuario", $usuario);
$consulta->bindValue(":senha", $senha);
$consulta->execute();

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
// Saída de dados 
if(@count($resultado) > 0 ){
	// Verificar qual o nível do usuário para redirecionar para o painel correspondente
	$nivel = $resultado[0]['nivel'];
	if ($nivel == 'Administrador') {
		$_SESSION['nome_usuario'] = $resultado[0]['nome'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-admin'</script>";
	}
	$nivel = $resultado[0]['nivel'];
	if ($nivel == 'Professor') {
		$_SESSION['nome_usuario'] = $resultado[0]['nome'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-professor'</script>";
	}
	$nivel = $resultado[0]['nivel'];
	if ($nivel == 'Secretaria') {
		$_SESSION['nome_usuario'] = $resultado[0]['nome'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-secretaria'</script>";
	}
	$nivel = $resultado[0]['nivel'];
	if ($nivel == 'Administracao') {
		$_SESSION['nome_usuario'] = $resultado[0]['nome'];
		$_SESSION['nivel_usuario'] = $resultado[0]['nivel'];
		$_SESSION['id_usuario'] = $resultado[0]['id'];
		echo "<script>window.location='painel-administracao'</script>";
	}
	
}else {
	echo "<script>window.alert('Login inválido!')</script>";
	echo "<script>window.location='index.php'</script>";
}

?>