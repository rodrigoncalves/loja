<?php
require_once "cabecalho.php";
require_once "banco-categoria.php";

verificaUsuario();

$produto = array("nome"=>"", "preco"=>"", "descricao"=>"", "categoria_id"=>"1");
$usado = "";
$categorias = listaCategorias($conexao);
?>

<div class="principal">
	<h1>Formulário de produto</h1>
</div>

<form action="produto-adiciona.php" method="post">
	
	<?php require_once 'produto-formulario-base.php'; ?>
	<tr>
		<td><input class="btn btn-primary" type="submit" value="Adicionar"><td>
	</tr>
		
	</table>
</form>

</div>
</body>
</html>