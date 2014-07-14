<?php
require_once "cabecalho.php";
require_once "banco-produto.php";

verificaUsuario();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if (array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
	<div class="principal">
		<p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	</div>
<?php } else {
	$msg = mysqli_error($conexao);
	?>
	<div class="principal">
		<p class="text-danger">Produto <?= $nome ?>, não foi adicionado: <?= $msg?></p>
	</div>
<?php } ?>

</div>
</body>
</html>
