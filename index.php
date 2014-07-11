<?php include "cabecalho.php"; ?>

<?php if (isset($_GET['login']) && $_GET['login'] == 0) { ?>
	<div class="principal">
		<p class="alert-danger">Usuário ou senha inválida</p>
	</div>
<?php } ?>	

<div class="principal">
	<h1>Bem vindo!</h1>
	<img src="img/download.jpg" height="100" width="100" alt="">
</div>

<h2>Login</h2>
<form action="login.php" method="post">
<table>
	<tr>
		<td>Email</td>
		<td><input class="form-control" type="email" name="email"></td>
	</tr>
	<tr>
		<td>Senha</td>
		<td><input class="form-control" type="password" name="senha"></td>
	</tr>
	<tr>
		<td><button class="btn btn-primary">Login</button></td>
	</tr>
</table>
</form>

<?php include "rodape.php"; ?>