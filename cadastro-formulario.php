<?php 
require_once 'cabecalho.php';
?>

<h1 class="principal">Formulário de cadastro</h1>
<form action="cadastro-usuario.php" method="post">
	<table class="table">
		<tr>
			<td>E-mail</td>
			<td><input type="email" class="form-control" name="email"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input type="password" class="form-control" name="senha"></td>
		</tr>
		<tr>
			<td>Senha novamente</td>
			<td><input type="password" class="form-control" name="senha_novamente"></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary">Cadastrar</button></td>
		</tr>
	</table>
</form>

</div>
</body>
</html>