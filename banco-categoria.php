<?php 
function listaCategorias($conexao) {
	$categorias = array();
	$query = "select * from categorias";
	$res = mysqli_query($conexao, $query);
	while ($categoria = mysqli_fetch_assoc($res)) {
		array_push($categorias, $categoria);
	}
	
	return $categorias;
}