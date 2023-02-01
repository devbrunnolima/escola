<?php 
require_once('conexao.php');
$dt_today = date('d/m/Y H:i:s' );

$langs = array("PHP", "JavaScript", "Python", "C++", "Ruby"); 

$newLangs = implode($langs);

echo $newLangs."<br>";

                                $consulta1 = $pdo->query("SELECT turma_id, nome_turma FROM teste_cadastro");
                                $resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
                                $total_registro1 = count($resultado1);
                                if ($resultado1)
                                {
                                     foreach ($resultado1 as $row)
                                     {
                                        $turmas[] = array(
                                            "id" => $row['turma_id'],
                                            "turma" => utf8_encode($row["nome_turma"]),
                                        );
                                     }
                                }
$ll = json_encode($turmas);


echo $ll;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!--styles internos -->
    <link rel="stylesheet" href="vendor/css/style.css">
    <link rel="stylesheet" href="vendor/css/navbar.css">
    <!--styles externos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- CSS only -->
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: radial-gradient(circle, rgba(240,240,240,1) 35%,rgb(230,230,230) 95%);

            display: flex;
            justify-content:center;



        }
        .color-radio{
            color: #000;
        }
        label{
            color: #000;
        }

        .bg-form{
            transform: translate( 0,-5%) ;
            top:0;
            padding: 7px;
            width:  60vw;
            background: rgb(225,225,225);
            box-shadow: #000 1px 0px 8px;
            border-radius: 20px;
        }

        .footer{

            margin-bottom: 0;
        }

        .footer img{
            height: 23em;
        }
        .footer div{
            background-color: #fff;
            /* height: 15em; */
        }
        .font-weigth{
            font-weight: 400;
        }
        .termo{
            background: #e7eaf6;
            color: black;
            padding: 0 4px;
            border-radius: 6px;
        }
        .contain{
            display:flex;
            align-items: flex-start;
            justify-content:center;
        }
        .btn-color{
            width: 10rem;
            height: 4rem;
            border-radius:15px;
            background-color:#000050;
            color:white;
            transition: 0.5s ;
        }
        .btn-color:hover { background: #000098; }

        .carregando{
            color:#ff0000;
            display:  none;
        }
       
        

    </style>
</head>
<body>
<main>
<div class=" container-fluid position-relative container-responsive ">
     <div class="contain">
     
                    <form method="POST" id="form" action="selecao_subcategoria.php" enctype="multipart/form-data">
                        <div class="modal-body ">
                            
                            
                            <section class="container p-4 p-lg-5 ">
                                <div class="container  bg-bg bg-form">
                                    

                              
                       

                          <div class="row mt-2 justify-content-around">	
                           



                        
      </div>

      

    
    
    <div class="col-sm-12 col-md-12">
        
        <hr  class="mb-2">
        <h5 class=" mb-2 text-center">Marque um horário para suas aulas:</h5>
    </div>
    <div class="col-md-12 col-sm-12 text-center signup-form" id="signup-form">

   

             
                <select class="form-select" name="categoria_id" id="categoria_id">
                             <option value="">Escolha a Categoria</option>
                             <?php
                                $consulta1 = $pdo->query("SELECT * FROM categoria  ORDER BY nome_categoria ASC");
                                $resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
                                $total_registro1 = count($resultado1);

                                  if ($resultado1)
                                  {
                                       foreach ($resultado1 as $row)
                                       {
                                            echo "<option value=".$row['id'].">".$row['nome_categoria']."</option>"; 
                                       }
                                  }
                             ?>
                        </select>
            
               
                
                        <!-- Modal -->
                       
                    
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" id="btn-cadastrar" class=" btn-color">Continuar</button>
                    </div>
                </div>
              
                </div>
                </div>
            </section>
            </form>

</main>
<?php
?>
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script type="text/javascript" src="vendor/js/mascaras.js"></script>
        <!-- <script type="text/javascript" src="js/custom.js"></script> -->

    <script src="vendor/vendors/jquery/jquery.min.js"></script>
    <script src="vendor/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/vendors/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/vendors/jquery-steps/jquery.steps.min.js"></script>