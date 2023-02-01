<?php 

require_once('conexao.php');

 ?>


<!doctype html>
<html lang="pt-br">
  <head>
  	<title><?php echo $nome_sistema ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="vendor/css/style.css">

	</head>
	<body style="background: linear-gradient(90deg, rgba(228,228,228,1) 0%, rgba(228,228,228,1) 100%);">
	<section class="ftco-section">
		<div class="container mt-5">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img src="vendor/img/logo_prefeitura.png" width="250" alt="">
								 <h2 class="mt-3">Sistema de Fiscalização</h2>
								
								
								<!-- <a href="#" class="btn btn-white btn-outline-white">Sign Up</a> -->
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">ACESSO | Identifique-se</h3>
			      		</div>
			      	
			      	</div>
							<form action="autenticar.php" method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">E-mail ou Funcional</label>
			      			<input type="text" name="usuario" class="form-control" placeholder="Email ou Funcional" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Senha</label>
		              <input type="password" name="senha" class="form-control" placeholder="Senha" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
		            </div>
		            
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

