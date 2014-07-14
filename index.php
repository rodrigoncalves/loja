<?php 
require_once "cabecalho.php"; 
?>

<div class="text-center">
	<h1>Bem vindo!</h1>
</div>

<?php if (usuarioEstaLogado()) { ?>
	<div class="text-center">
		<!-- <img src="img/download.jpg" height="100" width="100" alt=""> -->
		<p class="text-success">Usuário logado como <?=usuarioLogado()?></p>
	</div>
<?php } else { ?>

	<h2>Login</h2>
	<form action="login.php" method="post">
	<table class="table">
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="email" name="email"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="senha"></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary">Entrar</button></td>
		</tr>
	</table>
	</form>

	<form action="cadastro-formulario.php">
		<button class="btn">Cadastrar</button>
	</form>

<?php } ?>

</div>
</body>
</html>