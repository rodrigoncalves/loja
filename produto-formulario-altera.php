<?php
include "cabecalho.php";
include "conecta.php";
include "banco-categoria.php";
include "banco-produto.php";

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

		<?php include 'produto-formulario-base.php'; ?>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Alterar"><td>
		</tr>
		
	</table>
</form>

</div>
</body>
</html>