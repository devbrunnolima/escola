<?php 
// error_reporting(0);

require_once('../../conexao.php');

//  =========== RECUPERANDO DADOS PARA A INSERÇÃO NO BANCO ===============

$id_categoria = $_POST['id_categoria'];
$id_sub_categoria = $_POST['id_sub_categoria'];
$id_turma = $_POST['id_turma'];






// echo $id_categoria."<br>";
// echo $id_sub_categoria."<br>";
// echo $id_turma."<br>";

$consulta1 = $pdo->query("SELECT * FROM categoria WHERE id = $id_categoria");
$resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);

$nome_categoria = $resultado1[0]['nome_categoria'];




$consulta2 = $pdo->query("SELECT * FROM sub_categoria WHERE id = $id_sub_categoria");
$resultado2 = $consulta2->fetchAll(PDO::FETCH_ASSOC);

$nome_sub_categoria = $resultado2[0]['nome_sub_categoria'];



$consulta3 = $pdo->query("SELECT * FROM horarios_turma WHERE id = $id_turma");
$resultado3 = $consulta3->fetchAll(PDO::FETCH_ASSOC);

$nome_turma = $resultado3[0]['nome_horarios'];



//  =========== RECUPERANDO DADOS DO FORMULARIO ===============

$nome_aluno = $_POST['nome_aluno'];
$nome_social = $_POST['nome_social'];
$nome_responsavel = $_POST['nome_responsavel'];
$genero = $_POST['genero'];
$sexo = $_POST['sexo'];
$cep = $_POST['cep'];
$data = $_POST['dt_nasc'];
$dt_nasc = $data->format('Y-m-d');
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$termo = $_POST['termo'];
$whatsapp = $_POST['whatsapp'];
$cidade = $_POST['cidade'];
$status_teste = $_POST['status_teste'];


$tdah = isset($_POST['TDAH']);
$espectro_autista = isset($_POST['Espectro Autista']);
$bronquite = isset($_POST['Bronquite']);
$asma = isset($_POST['asma']);
$surdez = isset($_POST['Surdez']);
$sindrome_de_down = isset($_POST['Síndrome de Down']);
$deficiencia_auditiva = isset($_POST['Deficiência Auditiva']);
$nenhum = isset($_POST['Nenhum']);


// $nome_rg = preg_replace('/[ -]+/','-',$_FILES['id_rg']['name']);

if(isset($_FILES['id_rg'])){
	$nome_img_rg =preg_replace('/[ -]+/' , '-', @$_FILES['id_rg']['name']);
	$caminho_img_rg = 'img/img_rg/'.$nome_img_rg;

	$imagem =  $nome_img_rg;

	$imagem_temp = $_FILES['id_rg']['tmp_name'];

	$ext = pathinfo($imagem, PATHINFO_EXTENSION);
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg');
	
	move_uploaded_file($imagem_temp, $caminho_img_rg);

};

if(isset($_FILES['id_comp_res'])){
	$nome_comp_res =preg_replace('/[ -]+/' , '-', @$_FILES['id_comp_res']['name']);
	$caminho_img_comp_res = 'img/img_comp_res/'.$nome_comp_res;

	$imagem =  $nome_comp_res;

	$imagem_temp = $_FILES['id_comp_res']['tmp_name'];

	$ext = pathinfo($imagem, PATHINFO_EXTENSION);
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg');
	
	move_uploaded_file($imagem_temp, $caminho_img_comp_res);

};

if(isset($_FILES['id_cart_covid_19'])){
	$nome_cart_covid_19 =preg_replace('/[ -]+/' , '-', @$_FILES['id_cart_covid_19']['name']);
	$caminho_img_covid_19= 'img/img_cart_covid/'.$nome_cart_covid_19;

	$imagem =  $nome_cart_covid_19;

	$imagem_temp = $_FILES['id_cart_covid_19']['tmp_name'];

	$ext = pathinfo($imagem, PATHINFO_EXTENSION);
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg');
	
	move_uploaded_file($imagem_temp, $caminho_img_covid_19);

};
// $id_comp_res = $_FILES['id_comp_res']['tmp_name'];
// $id_cart_covid_19 = $_FILES['id_cart_covid_19']['name'];
$dt_inscricao = date('d/m/Y H:i:s' );

// var_dump($id_rg);



echo"
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>

<script type='text/javascript'>
$(window).load(function() {
	$('#myModal').modal('show');
})

</script>


  <div id='myModal' class='modal' tabindex='-1' role='dialog'>
  <div class='modal-dialog' role='document'>
	<div class='modal-content'>
	  <div class='modal-header'>
	  <h3>Cadastrado com Sucesso!!<br>
	  Por Favor Tire um Print.</h3>
		<button type='button' class='close' data-bs-dismiss='modal' aria-label='Fechar'>
		  <span aria-hidden='true'>&times;</span>
		</button>
	  </div>
	  <div class='modal-body'>
	  <p> <strong> Aluno: </strong>".$nome_aluno.".</p> 
	  <hr>
	  <p> <strong> Responsável: </strong>".$nome_responsavel.".</p>
	  <hr>
	  <p> <strong> Modalidade: </strong>".$nome_categoria.".</p>
	  <hr>
	  <p> <strong> Sub_categoria: </strong>".$nome_sub_categoria.".</p>
	  <hr>
	  <p> <strong> Turma: </strong>".$nome_turma."</p>
	  <hr>
	  <span> <strong> img Documento Rg: </strong></span><img style='width: 90px;'src='".$caminho_img_rg."'alt=''>
	  <hr>
	  <span> <strong> img  Comprovate de Redsidência: </strong></span><img style='width: 90px;'src='".$caminho_img_comp_res."'alt=''>
	  <hr>
	  <span> <strong> img Carteirinha Covid 19: </strong></span><img style='width: 90px;'src='".$caminho_img_covid_19."'alt=''>
	  </div>
	  <div class='modal-footer'>
		<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
	  </div>
	</div>
  </div>
</div>";


	echo" <br>================================================";
	echo "<br>". $email;
$to = $email;
$subject =  'Comprovante de Cadastro';
$menssage =  '<p> <strong> Aluno: </strong>".$nome_aluno.".</p> 
<hr>
<p> <strong> Responsável: </strong>".$nome_responsavel.".</p>
<hr>
<p> <strong> Modalidade: </strong>".$nome_categoria.".</p>
<hr>
<p> <strong> Sub_categoria: </strong>".$nome_sub_categoria.".</p>
<hr>
<p> <strong> Turma: </strong>".$nome_turma.".</p>';
$headers =  'From:fpf.felipe@hotmail.com?' . "r/c/" . 'Replay-to: fpf.felipe@hotmail.com';

mail($to, $menssage, $subject,$headers);

echo $to."<br>";

print "Enviado!";
echo" <br> ================================================";



echo"<br> ================================================";






// echo $nome_categoria."<br>";
// echo $nome_sub_categoria."<br>";
// echo $nome_turma."<br>";


// Verificando se e-mail já foi cadastrado 
// Método prepare() porque os dados vem do formulário

$consulta = $pdo->prepare("SELECT * FROM teste_cadastro WHERE email = :email");
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

// ======   CONTAGEM PARA A INSERÇÃ DE ALUNOS  ========
		// 	$consulta = $pdo->query("SELECT * FROM cad_alunos_14_30h");
		// $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
		// $total_registro = count($resultado);
    


        
        
		$inserir = $pdo->prepare("INSERT INTO teste_cadastro SET  nome_aluno = :nome_aluno, nome_social = :nome_social, genero = :genero, dt_nasc = :dt_nasc, endereco = :endereco, numero = :numero, bairro = :bairro, cep = :cep, email = :email, telefone = :telefone, celular = :celular, termo = :termo, whatsapp = :whatsapp, sexo = :sexo , dt_inscricao = :dt_inscricao, cidade = :cidade,  nome_responsavel = :nome_responsavel, id_turma  = :id_turma, nome_turma = :nome_turma, id_categoria = :id_categoria, nome_categoria = :nome_categoria, id_sub_categoria = :id_sub_categoria,nome_sub_categoria = :nome_sub_categoria, caminho_img_rg = :caminho_img_rg, caminho_img_comp_res =:caminho_img_comp_res, caminho_img_covid_19 = :caminho_img_covid_19 ");
        
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
		$inserir->bindValue(":whatsapp", $whatsapp);
		$inserir->bindValue(":dt_inscricao", $dt_inscricao);
		$inserir->bindValue(":nome_responsavel", $nome_responsavel);
		$inserir->bindValue(":id_turma", $id_turma);
		$inserir->bindValue(":nome_turma", $nome_turma);
		$inserir->bindValue(":id_categoria", $id_categoria);
		$inserir->bindValue(":nome_categoria", $nome_categoria);
		$inserir->bindValue(":id_sub_categoria", $id_sub_categoria);
		$inserir->bindValue(":nome_sub_categoria", $nome_sub_categoria);
		$inserir->bindValue(":caminho_img_rg", $caminho_img_rg);
		$inserir->bindValue(":caminho_img_comp_res", $caminho_img_comp_res);
		$inserir->bindValue(":caminho_img_covid_19", $caminho_img_covid_19);
		$inserir->execute();

            //$inserir->bindValue(":nome_usuario", $nome_usuario);
            
            
            // Atualizando dados no banco de dados | UPDATE
            echo "<script>window.alert('Cadastrado com Sucesso!')</script>";
            // echo "<script>window.location='../../index.php'</script>";

?>





