<?php
@session_start();
require_once("../conexao.php");
require_once("../acesso.php");
$_SESSION['nome_usuario'];

// Nome das páginas
$menu_home = 'home';
$menu_alunos = 'alunos';
$menu_classe = 'classe';
$menu_matriculas = 'matriculas';
$menu_funcionarios = 'funcionarios';
$alterar_senha = 'alterar_senha';
$cadastrar_funcionarios = 'funcionarios/cadastrar';
$editar_funcionarios = 'funcionarios/recuperar';
$excluir_funcionarios = 'funcionarios/excluir';

$cadastrar_classe = 'classe/cadastrar';
$editar_classe = 'classe/recuperar';
$excluir_classe = 'classe/excluir';
$teste_select = "select";






    //RECUPERAR DADOS DO USUÁRIO
$query = $pdo->query("SELECT * from usuarios WHERE id = '$_SESSION[id_usuario]'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_usu = $res[0]['usuario'];
$email_usu = $res[0]['email'];
$senha_usu = $res[0]['senha'];
$nivel_usu = $res[0]['nivel'];
$funcional_usu = $res[0]['funcional'];
$id_usu = $res[0]['id'];
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
  
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<!-- Icones do Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="../vendor/css/navbar.css">

  <link rel="stylesheet" href="../vendor/css/style.css">

  <link rel="stylesheet" href="../vendor/css/footer.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Script Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<!-- JS, Poppser.js e jQuery --> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- DataTables link e script -->
	<link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css">
	<script src="../vendor/DataTables/datatables.min.js"></script>



  <title> <?php echo $nome_sistema ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg menu">
      <a class="navbar-brand" href="index.php"><img src="../vendor/img/logo_menu.png" width="125"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=" border: solid;">
              <span class="navbar-toggler-icontext-center"><i class="bi bi-list" style="font-size: 30px;"></i></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto col-10">
            <li class="nav-item ">
              <a class="nav-link text-light" href="index.php?pagina=<?php echo $menu_home ?>"> <i class="bi bi-house"></i> Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-light"  href="index.php?pagina=<?php echo $menu_funcionarios ?>"> <i class="bi bi-people"></i> Funcionários </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?pagina=<?php echo $menu_alunos ?>"><i class="bi bi-journal-text"></i> Alunos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?pagina=<?php echo $menu_classe ?>"> <i class="bi bi-clipboard"></i> Classes </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?pagina=<?php echo $menu_matriculas ?>"> <i class="bi bi-folder2-open"></i> Inscrições </a>
            </li>

            
          </ul>
          <div class="d-flex">
                <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle item text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $nome_usu ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?pagina=<?php echo $alterar_senha ?>">Alterar Senha</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </nav>
  <div class="container-fluid mb-5">

    <?php
    if (@$_GET['pagina'] == $menu_home) {
      require_once($menu_home . '.php');

    } else if (@$_GET['pagina'] == $menu_alunos) {
      require_once($menu_alunos . '.php');

    } else if (@$_GET['pagina'] == $menu_funcionarios) {
      require_once($menu_funcionarios . '.php');

    } else if (@$_GET['pagina'] == $menu_classe) {
      require_once($menu_classe. '.php');

    }else if (@$_GET['pagina'] == $menu_matriculas) {
      require_once($menu_matriculas . '.php');
    }else if (@$_GET['pagina'] == $cadastrar_funcionarios) {
      require_once($cadastrar_funcionarios . '.php');
    }else if (@$_GET['pagina'] == $editar_funcionarios) {
      require_once($editar_funcionarios . '.php');
    }else if (@$_GET['pagina'] == $excluir_funcionarios) {
      require_once($excluir_funcionarios . '.php');
    } else if (@$_GET['pagina'] == $cadastrar_classe) {
      require_once($cadastrar_classe . '.php');
    }else if (@$_GET['pagina'] == $editar_classe) {
      require_once($editar_classe . '.php');
    }else if (@$_GET['pagina'] == $excluir_classe) {
      require_once($excluir_classe . '.php');
    }else if (@$_GET['pagina'] == $teste_select ) {
      require_once($teste_select  . '.php');
    }
    
    else {
      require_once($menu_home . '.php');
    }

    ?>
  </div>    

  


</body>

</html>

<div class="modal fade" id="modalPerfil" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="usuarios/inserir.php">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome-perfil" name="nome-perfil" placeholder="Nome" readonly value="<?php echo @$nome_usu?>" style="background-color: #dfdfdf;">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Funcional</label>
                        <input type="text" class="form-control" id="funcional-perfil" name="funcional-perfil" placeholder="Funcional" readonly value="<?php echo @$funcional_usu?>" style="background-color: #dfdfdf;">
                    </div>
                    

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email-perfil" name="email-perfil" placeholder="Email" readonly value="<?php echo @$email_usu?>" style="background-color: #dfdfdf;">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha-perfil" name="senha-perfil" placeholder="Senha" required="" value="<?php echo @$senha_usu?>">
                    </div>

                    <small><div align="center" class="mt-1" id="mensagem-perfil">

                    </div></small>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-fechar-perfil" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button name="btn-salvar-perfil" id="btn-salvar-perfil" type="submit" class="btn btn-success">Salvar</button>

                    <input name="id-perfil" type="hidden" value="<?php echo @$id_usu ?>">
                    
                    <input name="antigo-perfil" type="hidden" value="<?php echo @$funcional_usu ?>">
                    <input name="antigo2-perfil" type="hidden" value="<?php echo @$email_usu ?>">
                </div>
            </form>
        </div>
    </div>
</div>