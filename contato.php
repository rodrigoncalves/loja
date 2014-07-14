<?php 
require_once 'cabecalho.php';
?>

<form action="envia-contato.php" method="post">
	<h1 class="principal">Contato</h1>
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input type="text" name="nome" class="form-control"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email" class="form-control"></td>
		</tr>
		<tr>
			<td>Mensagem</td>
			<td><textarea name="mensagem" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Enviar</button><td>
		</tr>
	</table>
</form>

</html>