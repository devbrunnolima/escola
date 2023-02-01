<?php
require_once("../conexao.php");

// PESQUISA DO SELECT DAS TURMAS 


    $id_sub_categoria = $_REQUEST['id_sub_categoria'];
    // $id_sub_categoria =1;

	
    // $consulta1 = $pdo->query("SELECT * FROM horarios_turma WHERE horarios_turma_id = $sub_categoria_id  ORDER BY nome_horarios ASC");
    //                             $resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
    //                             $total_registro1 = count($resultado1);
	
	$query = $pdo->query ("SELECT * FROM horarios_turma WHERE horarios_turma_id = $id_sub_categoria ORDER BY nome_horarios");
    $registros = $query->fetchAll(PDO::FETCH_ASSOC);
	$count1 = count($registros);

	

  
	foreach ($registros as $row_sub_cat ) {

	$id_turma = $row_sub_cat['id'];


	$turma_bd = $pdo->query("SELECT * FROM teste_cadastro WHERE id_turma = $id_turma  ORDER BY nome_turma");
    $registros2 = $turma_bd->fetchAll(PDO::FETCH_ASSOC);

	$count = count($registros2);

	// var_dump($registros);
	// echo $registros[0]['nome_turma'];
	for($i = 0; $i <= $count1 ; $i++){
	
		$id_cont = $row_sub_cat['id'];

	if($count > 0){
		$row_sub_cat_nome = htmlentities($row_sub_cat['nome_horarios'], ENT_QUOTES, "UTF-8");

		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id'],
			'nome_horarios' => $row_sub_cat_nome.'(--Lotada--)',
		);
		break;
	}else{
		$row_sub_cat_nome = htmlentities($row_sub_cat['nome_horarios'], ENT_QUOTES, "UTF-8");

		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id'],
			'nome_horarios' => $row_sub_cat_nome,
		);
		$l  = true;
		break;

		$l = false;
	}}

	}
	
    $json = json_encode($sub_categorias_post);
	echo $json;
	

