<?php 
require_once "banco-usuario.php";
require_once "logica-usuario.php";

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha incorreto";
	header("Location: index.php");
} else {
	logaUsuario($usuario['email']);
	$_SESSION["success"] = "Usuário logado com sucesso.";
	header("Location: index.php");
}
die();