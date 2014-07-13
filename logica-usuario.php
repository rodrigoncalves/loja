<?php 
session_start();

function usuarioLogado() {
	return $_SESSION['usuario_logado'];
}

function usuarioEstaLogado() {
	return isset($_SESSION['usuario_logado']);
}

function verificaUsuario() {
	if (!usuarioEstaLogado()) {
		header("Location: index.php?falha=true");
		die();
	}
}

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;	
}

function logout() {
	session_destroy();
}
