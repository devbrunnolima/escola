<?php 
// error_reporting(0);

require_once('../../conexao.php');


$nome_aluno = $_POST['nome_aluno'];
$nome_social = $_POST['nome_social'];
$nome_responsavel = $_POST['nome_responsavel'];
$genero = $_POST['genero'];
$sexo = $_POST['sexo'];
$cor = $_POST['cor'];
$cep = $_POST['cep'];
$dt_nasc = $_POST['dt_nasc'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$termo = $_POST['termo'];
$whatsapp = $_POST['whatsapp'];
$cidade = $_POST['cidade'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$status_teste = $_POST['status_teste'];
$dt_inscricao = date('d/m/Y H:i:s' );






// Verificando se e-mail já foi cadastrado 
// Método prepare() porque os dados vem do formulário

	$consulta = $pdo->prepare("SELECT * FROM cad_alunos_14_30h WHERE email = :email");
	$consulta->bindValue(":email", $email);
	$consulta->execute();

	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
	$total_registro = count($resultado);
	if ($total_registro > 0) { 
     
        echo "<script>window.alert('O E-mail já existe!')</script>";
        echo "<script>window.location='../../index.php'</script>";
       
       
        exit();
        }

		$consulta = $pdo->prepare("SELECT * FROM cad_alunos_16h WHERE email = :email");
	$consulta->bindValue(":email", $email);
	$consulta->execute();

	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
	$total_registro = count($resultado);
	if ($total_registro > 0) { 
     
        echo "<script>window.alert('O E-mail já existe!')</script>";
        echo "<script>window.location='../../index.php'</script>";
       
       
        exit();
        }
       
		$consulta = $pdo->prepare("SELECT * FROM cad_alunos_17_30h WHERE email = :email");
	$consulta->bindValue(":email", $email);
	$consulta->execute();

	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
	$total_registro = count($resultado);
	if ($total_registro > 0) { 
     
        echo "<script>window.alert('O E-mail já existe!')</script>";
        echo "<script>window.location='../../index.php'</script>";
       
       
        exit();
        }

		$consulta = $pdo->prepare("SELECT * FROM cad_alunos_19h WHERE email = :email");
	$consulta->bindValue(":email", $email);
	$consulta->execute();

	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
	$total_registro = count($resultado);
	if ($total_registro > 0) { 
     
        echo "<script>window.alert('O E-mail já existe!')</script>";
        echo "<script>window.location='../../index.php'</script>";
       
       
        exit();
        }

// ======  INSERINDO OS DADOS  ========
if( $horario == "14:30h"){
// ======   CONTAGEM PARA A INSERÇÃ DE ALUNOS  ========
			$consulta = $pdo->query("SELECT * FROM cad_alunos_14_30h");
		$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
		$total_registro = count($resultado);

		


		if ( $total_registro >= 25){
			echo "<script>window.alert('Horário Cheio!')</script>";
			echo "<script>window.location='../../index.php'</script>";

			exit();
		}else{

		$inserir = $pdo->prepare("INSERT INTO cad_alunos_14_30h SET  nome_aluno = :nome_aluno, nome_social = :nome_social, genero = :genero, dt_nasc = :dt_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep, email = :email, telefone = :telefone, celular = :celular, termo = :termo, whatsapp = :whatsapp, sexo = :sexo , dt_inscricao = :dt_inscricao, cidade = :cidade, horario = :horario, dia = :dia, status_teste = :status_teste,  nome_responsavel = :nome_responsavel");

		$inserir->bindValue(":nome_aluno", $nome_aluno);
		$inserir->bindValue(":nome_social", $nome_social);
		$inserir->bindValue(":genero", $genero);
		$inserir->bindValue(":sexo", $sexo);
		$inserir->bindValue(":dt_nasc", $dt_nasc);
		$inserir->bindValue(":endereco", $endereco);
		$inserir->bindValue(":bairro", $bairro);
		$inserir->bindValue(":cidade", $cidade);
		$inserir->bindValue(":cep", $cep);
		$inserir->bindValue(":numero", $numero);
		$inserir->bindValue(":email", $email);
		$inserir->bindValue(":telefone", $telefone);
		$inserir->bindValue(":celular", $celular);
		$inserir->bindValue(":termo", $termo);
		$inserir->bindValue(":horario", $horario);
		$inserir->bindValue(":dia", $dia);
		$inserir->bindValue(":whatsapp", $whatsapp);
		$inserir->bindValue(":dt_inscricao", $dt_inscricao);
		$inserir->bindValue(":status_teste", $status_teste);
		$inserir->bindValue(":nome_responsavel", $nome_responsavel);

		$inserir->execute();
		}
}else if( $horario == "16h"){
// ======   CONTAGEM PARA A INSERÇÃ DE ALUNOS  ========
		$consulta = $pdo->query("SELECT * FROM cad_alunos_16h");
		$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
		$total_registro = count($resultado);
		

		if ( $total_registro>= 25){
			echo "<script>window.alert('Horário Cheio!')</script>";
			echo "<script>window.location='../../index.php'</script>";

			exit();
		} else{
			$inserir = $pdo->prepare("INSERT INTO cad_alunos_16h SET  nome_aluno = :nome_aluno, nome_social = :nome_social, genero = :genero, dt_nasc = :dt_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep, email = :email, telefone = :telefone, celular = :celular, termo = :termo, whatsapp = :whatsapp, sexo = :sexo , dt_inscricao = :dt_inscricao, cidade = :cidade, horario = :horario, dia = :dia, status_teste = :status_teste, nome_responsavel = :nome_responsavel");
			
			$inserir->bindValue(":nome_aluno", $nome_aluno);
			$inserir->bindValue(":nome_social", $nome_social);
			$inserir->bindValue(":genero", $genero);
			$inserir->bindValue(":sexo", $sexo);
			$inserir->bindValue(":dt_nasc", $dt_nasc);
			$inserir->bindValue(":endereco", $endereco);
			$inserir->bindValue(":bairro", $bairro);
			$inserir->bindValue(":cidade", $cidade);
			$inserir->bindValue(":cep", $cep);
			$inserir->bindValue(":numero", $numero);
			$inserir->bindValue(":email", $email);
			$inserir->bindValue(":telefone", $telefone);
			$inserir->bindValue(":celular", $celular);
			$inserir->bindValue(":termo", $termo);
			$inserir->bindValue(":horario", $horario);
			$inserir->bindValue(":dia", $dia);
			$inserir->bindValue(":whatsapp", $whatsapp);
			$inserir->bindValue(":dt_inscricao", $dt_inscricao);
			$inserir->bindValue(":status_teste", $status_teste);
			$inserir->bindValue(":nome_responsavel", $nome_responsavel);
			
			$inserir->execute();
		}
} else if( $horario == "17:30h"){

// ======   CONTAGEM PARA A INSERÇÃO DE DADOS ALUNOS  ========
			
			$consulta = $pdo->query("SELECT * FROM cad_alunos_17_30h");
			$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
			$total_registro = count($resultado);
			

			if ( $total_registro>= 25){
				echo "<script>window.alert('Horário Cheio!')</script>";
				echo "<script>window.location='../../index.php'</script>";

				exit();
			} else{

			$inserir = $pdo->prepare("INSERT INTO cad_alunos_17_30h SET  nome_aluno = :nome_aluno, nome_social = :nome_social, genero = :genero, dt_nasc = :dt_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep, email = :email, telefone = :telefone, celular = :celular, termo = :termo, whatsapp = :whatsapp, sexo = :sexo , dt_inscricao = :dt_inscricao, cidade = :cidade, horario = :horario, dia = :dia, status_teste = :status_teste, nome_responsavel = :nome_responsavel");
			
			$inserir->bindValue(":nome_aluno", $nome_aluno);
			$inserir->bindValue(":nome_social", $nome_social);
			$inserir->bindValue(":genero", $genero);
			$inserir->bindValue(":sexo", $sexo);
			$inserir->bindValue(":dt_nasc", $dt_nasc);
			$inserir->bindValue(":endereco", $endereco);
			$inserir->bindValue(":bairro", $bairro);
			$inserir->bindValue(":cidade", $cidade);
			$inserir->bindValue(":cep", $cep);
			$inserir->bindValue(":numero", $numero);
			$inserir->bindValue(":email", $email);
			$inserir->bindValue(":telefone", $telefone);
			$inserir->bindValue(":celular", $celular);
			$inserir->bindValue(":termo", $termo);
			$inserir->bindValue(":horario", $horario);
			$inserir->bindValue(":dia", $dia);
			$inserir->bindValue(":whatsapp", $whatsapp);
			$inserir->bindValue(":dt_inscricao", $dt_inscricao);
			$inserir->bindValue(":status_teste", $status_teste);
			$inserir->bindValue(":nome_responsavel", $nome_responsavel);
			
			$inserir->execute();
			}

} else if( $horario == "19h"){
// ======   CONTAGEM PARA A INSERÇÃ DE ALUNOS  ========

				
			$consulta = $pdo->query("SELECT * FROM cad_alunos_19h");
			$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
			$total_registro = count($resultado);
			

			if ( $total_registro>= 25){
				echo "<script>window.alert('Horário Cheio!')</script>";
				echo "<script>window.location='../../index.php'</script>";

				exit();
			} else{

			$inserir = $pdo->prepare("INSERT INTO cad_alunos_19h SET  nome_aluno = :nome_aluno, nome_social = :nome_social, genero = :genero, dt_nasc = :dt_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep, email = :email, telefone = :telefone, celular = :celular, termo = :termo, whatsapp = :whatsapp, sexo = :sexo , dt_inscricao = :dt_inscricao, cidade = :cidade, horario = :horario, dia = :dia, status_teste = :status_teste, nome_responsavel = :nome_responsavel");
			
			$inserir->bindValue(":nome_aluno", $nome_aluno);
			$inserir->bindValue(":nome_social", $nome_social);
			$inserir->bindValue(":genero", $genero);
			$inserir->bindValue(":sexo", $sexo);
			$inserir->bindValue(":dt_nasc", $dt_nasc);
			$inserir->bindValue(":endereco", $endereco);
			$inserir->bindValue(":bairro", $bairro);
			$inserir->bindValue(":cidade", $cidade);
			$inserir->bindValue(":cep", $cep);
			$inserir->bindValue(":numero", $numero);
			$inserir->bindValue(":email", $email);
			$inserir->bindValue(":telefone", $telefone);
			$inserir->bindValue(":celular", $celular);
			$inserir->bindValue(":termo", $termo);
			$inserir->bindValue(":horario", $horario);
			$inserir->bindValue(":dia", $dia);
			$inserir->bindValue(":whatsapp", $whatsapp);
			$inserir->bindValue(":dt_inscricao", $dt_inscricao);
			$inserir->bindValue(":nome_responsavel", $nome_responsavel);
			$inserir->bindValue(":status_teste", $status_teste);
			
			$inserir->execute();
			}
			} else{
			
				echo "<script>window.alert('Horario cheio!')</script>";
				echo "<script>window.location='../../index.php'</script>";
			}
	//$inserir->bindValue(":nome_usuario", $nome_usuario);


// Atualizando dados no banco de dados | UPDATE
    echo "<script>window.alert('Cadastrado com Sucesso!')</script>";
	echo "<script>window.location='../../index.php'</script>";

?>

