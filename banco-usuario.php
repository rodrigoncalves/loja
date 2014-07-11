<?php 
function buscaUsuario($conexao, $email, $senha) {
	$senhamd5 = md5($senha);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhamd5}'";
	$res = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($res);
	return $usuario;
}	