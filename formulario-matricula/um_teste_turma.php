<?php
require_once("../conexao.php");


// condiçao para a aparição do alert



    $id_turma = $_REQUEST['id_turma'];
    // $id_turma = 3;


	
    // $consulta1 = $pdo->query("SELECT * FROM horarios_turma WHERE horarios_turma_id = $sub_categoria_id  ORDER BY nome_horarios ASC");
    //                             $resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
    //                             $total_registro1 = count($resultado1);
	
	$query = $pdo->query ("SELECT * FROM teste_cadastro WHERE id_turma = $id_turma ORDER BY nome_turma");
    $registros = $query->fetchAll(PDO::FETCH_ASSOC);
	$count = count($registros);

	// var_dump($registros);
	// echo $registros[0]['nome_turma'];
	if($count > 2){
		$l  = true;
	}else{
		$l = false;
	}

	$ll = json_encode($l);
	echo $ll;

	
  

