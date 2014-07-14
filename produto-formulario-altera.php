<?php
require_once "cabecalho.php";
require_once "banco-categoria.php";
require_once "banco-produto.php";

if (!usuarioEstaLogado()) {
	$_SESSION["danger"] = "Você não está logado";
	header("Location: produto-lista.php");
	die();
}

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<div class="principal">
	<h1>Alterar produto</h1>
</div>

<form action="produto-altera.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">

		<?php require_once 'produto-formulario-base.php'; ?>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Alterar"><td>
		</tr>
		
	</table>
</form>

</div>
</body>
</html>