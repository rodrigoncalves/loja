<?php
include "cabecalho.php";
include "conecta.php";
include "banco-categoria.php";
include "logica-usuario.php";

verificaUsuario();

$categorias = listaCategorias($conexao);
?>

<div class="principal">
	<h1>Formulário de produto</h1>
</div>

<form action="produto-adiciona.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="text" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true">Usado</td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select name="categoria_id" class="form-control">
					<?php foreach ($categorias as $categoria) : ?>
						<option value="<?=$categoria['id']?>">
							<?=$categoria['nome']?><br>
						</option>
					<?php  endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Adicionar"><td>
		</tr>
		
	</table>
</form>

</div>
</body>
</html>