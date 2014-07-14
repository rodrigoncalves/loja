<?php
require_once "cabecalho.php";
require_once "banco-produto.php";

$id = $_POST['id'];
if (usuarioEstaLogado()) {
	removeProduto($conexao, $id);
	$_SESSION["success"] = "Produto removido";
	header("Location: produto-lista.php");
} else {
	$_SESSION["danger"] = "Você não está logado";
	header("Location: produto-lista.php");
}
die();