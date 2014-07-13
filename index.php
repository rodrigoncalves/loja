<?php 
include "cabecalho.php"; 
include "logica-usuario.php";

if (isset($_GET['logout']) && $_GET['logout'] == true) { ?>
	<div class="principal">
		<p class="alert-success">Usuário desconectado.</p>
	</div>
<?php }

if (isset($_GET['login']) && $_GET['login'] == 0) { ?>
	<div class="principal">
		<p class="alert-danger">Usuário ou senha inválida</p>
	</div>
<?php } else if (isset($_GET['login']) && $_GET['login'] == 1) { ?>
	<div class="principal">
		<p class="alert-success">Logado</p>
	</div>
<?php }

if (isset($_GET['falha']) && $_GET['falha'] == true) { ?>
	<div class="principal">
		<p class="alert-danger">Você não tem acesso a essa página!</p>
	</div>
<?php } ?>


<div class="text-center">
	<h1>Bem vindo!</h1>
</div>

<?php if (usuarioEstaLogado()) { ?>
	<div class="text-center">
		<!-- <img src="img/download.jpg" height="100" width="100" alt=""> -->
		<p class="text-success">Usuário logado como <?=usuarioLogado()?></p>
		<a href="logout.php">Logout</a>
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
			<td><button class="btn btn-primary">Login</button></td>
		</tr>
	</table>
	</form>

<?php } ?>

</div>
</body>
</html>