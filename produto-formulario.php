<?php
include "cabecalho.php";
include "conecta.php";
include "banco-categoria.php";

verificaUsuario();

$produto = array("nome"=>"", "preco"=>"", "descricao"=>"", "categoria_id"=>"1");
$usado = "";
$categorias = listaCategorias($conexao);
?>

<div class="principal">
	<h1>Formulário de produto</h1>
</div>

<form action="produto-adiciona.php" method="post">
	
	<?php include 'produto-formulario-base.php'; ?>
	<tr>
		<td><input class="btn btn-primary" type="submit" value="Adicionar"><td>
	</tr>
		
	</table>
</form>

</div>
</body>
</html>