<?php 
require_once 'conecta.php';
function buscaUsuario($conexao, $email, $senha) {
	$senhamd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhamd5}'";
	$res = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($res);
	return $usuario;
}

function usuarioJaExiste($conexao, $email) {
	echo $email . "<br>";
	$query = "SELECT * FROM usuarios WHERE email='$email'";
	$res = mysqli_query($conexao, $query);
	echo $query;
	
		$row_cnt = mysqli_num_rows($res);

	    printf("Result set has %d rows.\n", $row_cnt);

	return $row_cnt;
}

function insereUsuario($conexao, $email, $senha) {
	$senhamd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "INSERT INTO usuarios (email, senha) values ('{$email}', '{$senhamd5}')";
	$res = mysqli_query($conexao, $query);
	return $res;
}