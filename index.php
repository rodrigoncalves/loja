<?php 
include "cabecalho.php"; 

if (isset($_SESSION["danger"])) { ?>
	<div class="principal">
		<p class="alert-danger"><?=$_SESSION["danger"]?></p>
	</div>
	<?php unset($_SESSION["danger"]);
}

if (isset($_SESSION["success"])) { ?>
	<div class="principal">
		<p class="alert-success"><?=$_SESSION["success"]?></p>
	</div>
	<?php unset($_SESSION["success"]);
} ?>


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