<?php 
session_start();
require_once("conexao.php");
?>

<!doctype html>
  <html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="expires" content="-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">    
    <!-- Style -->
    <link rel="stylesheet" href="vendor/css/style-login.css">

   
    <title><?php echo $nome_sistema ?></title>
  </head>
  <body>
    <div class="half">
      <div class="bg order-1 order-md-2 h-25" style="background: linear-gradient(79deg, rgba(0,57,98,1) 62%, rgba(20,72,122,1) 79%);"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
              <div class="form-block shadow-lg">
                <div class="text-center mb-5">
                 <img src="vendor/img/brasao.png" width="220">
                 <br> 
                 <br>	             		
                 <h4 style="color: #002c53">Prefeitura de Taboão da Serra</h4>
                 <p >Departamento de Tecnologia</p>
               </div>
               
               <form action="autenticar.php" method="post">
                <?php 
                if (@$_SESSION['msg']) {
                  echo $_SESSION['msg'];
                  session_destroy();
                }
                ?>
                <div class="form-group first">
                  <label class="mb-3">ACESSO | Identifique-se</label>
                  <input type="text" name="usuario" class="form-control" placeholder="E-mail ou Funcional">
                </div>
                <div class="form-group last mb-3">

                  <input type="password" name="senha" class="form-control" placeholder="Sua senha">
                </div>


                <input name="accept" type="submit" value="Entrar" style=" border-color: #fff; background-color: #002c53;" class="btn btn-block btn-dark">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>


</body>
</html>