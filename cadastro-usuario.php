<?php 
require_once 'banco-usuario.php';
session_start();
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha_novamente = $_POST["senha_novamente"];

if ($senha != $senha_novamente) {
	$_SESSION["danger"] = "Senhas diferentes. Tente novamente.";
	header("Location: cadastro-formulario.php");
	die();
}

if (usuarioJaExiste($conexao, $email)) {
	$_SESSION["danger"] = "Usuário já existe";
	header("Location: cadastro-formulario.php");
	die();
}

if (insereUsuario($conexao, $email, $senha)) {
	$_SESSION["success"] = "Usuário \"$email\" cadastrado com successo! Faça o login.";
	header("Location: index.php");
	die();
}  else { 
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "Houve um erro no cadastro: $msg";
	header("Location: cadastro-formulario.php");
	die();	
}
die();	
