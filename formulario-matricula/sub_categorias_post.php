<?php
require_once("../conexao.php");

// PESQUISA DO SELECT DAS SUB_CATEGORIAS

    $id_categoria = $_REQUEST['id_categoria'];
    // $id_categoria = 1;

	// $consulta1 = $pdo->query("SELECT * FROM sub_categoria WHERE subcategoria_id = $categoria_id  ORDER BY nome_sub_categoria ASC");
	// $resultado1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
	// $total_registro1 = count($resultado1);
	
	$query = $pdo->query ("SELECT * FROM sub_categorias WHERE subcategoria_id = $id_categoria ORDER BY nome_sub_categoria");
    $registros = $query->fetchAll(PDO::FETCH_ASSOC);

  
	foreach ($registros as $row_sub_cat ) {

		$row_sub_cat_nome = htmlentities($row_sub_cat['nome_sub_categoria'], ENT_QUOTES, "UTF-8");
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id'],
			'nome_sub_categoria' =>$row_sub_cat_nome,
		);
	}
	
    $json = json_encode($sub_categorias_post);
	echo (utf8_encode($json));

