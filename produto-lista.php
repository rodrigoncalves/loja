<?php
include "cabecalho.php";
include "conecta.php";
include "banco-produto.php";
?>

<div class="principal">
	<h2>Lista de produtos</h2>
</div>

<?php 
if (array_key_exists("removido", $_GET) && $_GET['removido']) {
	?>
	<p class="alert-success">Produto apagado com sucesso!</p>
	<?php 
}
?>

<table class="table table-striped table-bordered">
	<tr>
		<td><b>Nome</b></td>
		<td><b>Preço</b></td>
		<td><b>Descrição</b></td>
		<td><b>Categoria</b></td>
		<td><b>Usado</b></td>
		<td><b></b></td>
		<td><b></b></td>
	</tr>
	<?php 
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) :
		?>
		<tr>
			<td><?= $produto['nome'] ?></td>
			<td>R$ <?= $produto['preco'] ?></td>
			<td><?= substr($produto['descricao'], 0, 40) ?></td>
			<td><?= $produto['categoria_nome'] ?></td>
			<?php if ($produto['usado']) { ?>
				<td>Sim</td>
				<?php
			} else { ?>
				<td>Não</td>
				<?php 
			} ?>
			<td><a class="btn btn-primary" href="produto-formulario-altera.php?id=<?=$produto['id']?>">Alterar</a></td>
			<td>
				<form action="produto-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<button class="text-danger btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
		<?php
	endforeach
	?>
</table>

</div>
</body>
</html>