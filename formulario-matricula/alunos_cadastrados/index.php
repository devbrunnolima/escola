<?php
// session_start();
require_once('../../conexao.php');

$pag = "index.php";

$consultar = $pdo->query("SELECT * FROM teste_cadastro");
$resultado = $consultar->fetchAll(PDO::FETCH_ASSOC);
$total = @count($resultado);






$dt_inscricao = date('d/m/Y H:i:s' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas dos Alunos</title>
    <!--styles internos -->
    <link rel="stylesheet" href="../vendor/css/style.css">
    <link rel="stylesheet" href="../vendor/css/navbar.css">
    <!--styles externos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Scripts -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- CSS only -->
</head>


<style>
    #n14{
        background: rgb(142, 36, 36);
        color: aliceblue;
    }
</style>

<div class="container mt-5">

<div class="table-responsive px-2">
<!-- Datatables | LISTANDO REGISTRO DO TERMO DE FISCLAIZAÇÃO se houver -->
<?php 

if ( $resultado != "" ) { ?>
  <!-- Se houver algum registro encontrado | MOSTRA A TABELA -->
  <table id="tabela" class="table table-hover table-striped" style="width:100%; border: 2px solid; ">
      <thead>
          <tr class=" bg-dark text-light">
          <th>Nome</th>
             <th>Nome social</th>
             <th>Data de Nascimento</th>
             <th>Responsável</th>
             <th>Email</th>
             <th>Turma</th>
             <th>Ações</th>
          </tr>
      </thead>
      <tbody>
      <!-- Percorrendo linhas e preenchendo celulas -->
      <?php 
        for($i=0; $i < $total; $i++) {
          foreach ($resultado[$i] as $key => $value) 
            { }
       ?>
          <tr>
             
              <td><?php echo $resultado[$i]['nome_aluno'] ?></td>
              <td><?php echo $resultado[$i]['nome_social'] ?></td>
              <td><?php echo $resultado[$i]['dt_nasc']
              ?></td>
              <td><?php echo $resultado[$i]['nome_responsavel'] ?></td>
              <td><?php echo $resultado[$i]['email'] ?></td>
              <td><?php echo $resultado[$i]['nome_turma'] ?></td>
              <td>
                	<a  class=" text-primary" href="#?pagina=<?php echo $pag ?>&funcao=editar&id=<?php echo $resultado[$i]['id']  ?>"  title="Editar Registro" data-bs-toggle="modal" data-bs-target="#modalCadastrar"><i class="bi bi-pencil-square"></i></a>
                	<a  class=" text-danger" href="#?pagina=<?php echo $pag ?>&funcao=deletar&id=<?php echo $resultado[$i]['id'] ?>" title="Excluir Registro"><i class="bi bi-trash3"></i></a>
                  <?php echo $resultado[$i]['id'] ?>
                	<!-- <a  class=" btn btn-sm btn-primary" href=""><i class="bi bi-trash3"></i></a> -->
                </td>
          </tr>
      <!-- Fim do for -->
      <?php } ?>
      </tbody>
  </table>

  </div>
  

<?php } else {
echo "<p>Nenhum registro encontrado</p>";
} ?>









<?php 
if (@$_GET['funcao'] == "editar") {
	$titulo_modal = 'Editar Registro';
	$consultar = $pdo ->query("SELECT * from teste_cadastro Where id = $_GET[id]");
	$res = $consultar-> fetchALL(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if( $total_reg > 0){
		$id =$res[0]['id'];
		$nome_aluno =$res[0]['nome_aluno'];
		$nome_social =$res[0]['nome_social'];
		$nome_responsavel =$res[0]['nome_responsavel'];
		$sexo = $res[0]['sexo'];
		$genero = $res[0]['genero'];
		$email = $res[0]['email'];
        $cep = $res[0]['cep'];
        $dt_nasc = $res[0]['dt_nasc'];
        $endereco = $res[0]['endereco'];
        $bairro = $res[0]['bairro'];
        $numero = $res[0]['numero'];
        $email = $res[0]['email'];
        $telefone = $res[0]['telefone'];
        $celular = $res[0]['celular'];
        $termo = $res[0]['termo'];
        $whatsapp = $res[0]['whatsapp'];
        $cidade = $res[0]['cidade'];
       
	} 
}else{
	$titulo_modal = 'Inserir Registro';
}
 ?>
<!-- MODAL PARA ALTERAR DADOS DOS ALUNOS -->

<div class="modal fade" id="modalCadastrar" tabindex="-1" data-bs-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content justify-content-around ">
			<div class="modal-header">
				<h5 class="modal-title"> Editar Registro</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

            <div class='justify-content-center' style='width:100%; height: 100px; background: rgb(142, 146, 143);'> 
                <i class="bi bi-pencil-square"></i>
            </div>
				<form method="POST" id="form" action="alunos_teste/inserir.php">
			<div class="modal-body">

					<div class="row">

						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome_aluno" name="nome_aluno" placeholder="Nome" readonly
								value = "<?php echo @$nome_aluno ?>"  >
							</div>	

						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Nome Social</label>
								<input type="text" class="form-control" id="nome_social" name="nome_social" placeholder="Nome Social" readonly value= <?php echo @$nome_social ?>>
							</div>	
						</div>
					</div>

					
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" value= <?php echo @$email ?>>
					</div>	
					
					
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Status do Teste</label>

						<select class="form-select mt-1" aria-label="Default select exemple" name="status_teste">
							<option value="teste">Teste</option>
							<option value="Aprovado">Aprovado</option>
							<option value="Reprovado">Reprovado</option>
						</select>
					</div>

					<small><div align="center" class="mt-1" id="mensagem">

					</div></small>
					

				</div>
				<div class="modal-footer">
                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button name="btn-salvar" id="btn-salvar" type="submit" class="btn btn-primary">Salvar</button>

                    <input name="id" type="hidden" value="<?php echo @$_GET['id'] ?>">
                    
                    <input name="antigo" type="hidden" value="<?php echo @$funcional ?>">
                    <input name="antigo2" type="hidden" value="<?php echo @$email ?>">
                    <input name="genero" type="hidden" value="<?php echo @$genero ?>">
                    <input name="sexo" type="hidden" value="<?php echo @$sexo ?>">
                    <input name="cor" type="hidden" value="<?php echo @$cor ?>">
                    <input name="dt_nasc" type="hidden" value="<?php echo @$dt_nasc ?>">
                    <input name="cep" type="hidden" value="<?php echo @$cep ?>">
                    <input name="cidade" type="hidden" value="<?php echo @$cidade ?>">
                    <input name="endereco" type="hidden" value="<?php echo @$endereco ?>">
                    <input name="bairro" type="hidden" value="<?php echo @$bairro ?>">
                    <input name="numero" type="hidden" value="<?php echo @$numero ?>">
                    <input name="telefone" type="hidden" value="<?php echo @$telefone ?>">
                    <input name="celular" type="hidden" value="<?php echo @$celular ?>">
                    <input name="termo" type="hidden" value="<?php echo @$termo ?>">
                    <input name="whatsapp" type="hidden" value="<?php echo @$whatsapp ?>">
                    <input name="horario" type="hidden" value="<?php echo @$horario ?>">
                    <input name="dia" type="hidden" value="<?php echo @$dia ?>">
                    <input name="dia" type="hidden" value="<?php echo @$id ?>">
                </div>
            </form>
        </div>
    </div>
</div>






<!-- MODAL PARA DELETAR DADOS -->

<div class="modal fade" id="modalDeletar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $titulo_modal ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-excluir">
                <div class="modal-body">

                <p>Deseja Realmente Excluir o Registro?</p>

                    <small><div align="center" class="mt-1" id="mensagem-excluir">

                    </div></small>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button name="btn-excluir" id="btn-excluir" type="submit" class="btn btn-danger">Excluir</button>

                    <input name="id" type="hidden" value="<?php echo @$_GET['id'] ?>">
                    
                </div>
            </form>
        </div>
    </div>
</div>



<?php 
if(@$_GET['funcao'] == "novo"){ ?>
	<script type="text/javascript">
		var myModal = new bootstrap.Modal(document.getElementById('modalCadastrar'), { backdrop: 'static'});
		myModal.show();
	</script>
<?php } ?>

<?php
if (@$_GET['funcao'] == "editar") { ?>
    <script type="text/javascript">
        var myModal = new bootstrap.Modal(document.getElementById('modalCadastrar'), {
            backdrop: 'static'
        })
        myModal.show();
    </script>
<?php } ?>


<?php 
if(@$_GET['funcao'] == "deletar"){ ?>
	<script type="text/javascript">
		var myModal = new bootstrap.Modal(document.getElementById('modalDeletar'),{});
		myModal.show();
	</script>
<?php } ?>









<script>

  $.ajax({
    url:"editar-perfil.php",
    type: 'POST',
    data: formData,

    success: function (mensagem) {

      $('#mensagem-perfil').removeClass()

      if (mensagem.trim() == "Salvo com Sucesso!") {

                  //$('#nome').val('');
                  //$("#cpf').val('');
                  $('#btn-fechar-perfil').click();
                  // window.location = "index.php?pagina="+pag;

              } else {

                $('#mensagem-perfil').addClass('text-danger')
              }

              $('#mensagem-perfil').text(mensagem)

          },

          cache: false,
          contentType: false,
          processData: false,
          xhr: function () { // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
              if (myXhr.upload) { //Avalia se tem suporte a propriedade upload
                myXhr.upload.addEventListener('progress', function () {
                  /* faz alguma coisa durante o progresso do upload */
                }, false);
              }
              return myXhr;
          }
      });
</script>
</html>
