<!DOCTYPE html>

<?php
error_reporting(E_ALL ^ E_NOTICE);

include 'logica-usuario.php';
include 'mostra-alerta.php'; 
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Loja</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/loja.css">
	<link rel="icon" type="image/png" href="img/loja-icone.png" />
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Minha loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adicionar Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="sobre.php">Sobre a empresa</a></li>
					<?php if (usuarioEstaLogado()) { ?>
						<li><a href="logout.php">Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">

	<?php 
	mostraAlerta("success");
	mostraAlerta("danger");
	?>