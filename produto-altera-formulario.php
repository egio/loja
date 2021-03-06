<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
include("logica-usuario.php");

verificaUsuario();
$id = $_GET['id'];

$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>
<h1>Formulário de alteração</h1>
<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>"></td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td><input type="text" class="form-control" name="preco" value="<?=$produto['preco']?>"></td>
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao" ><?=$produto['descricao']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="checkbox" name="usado" <?=$usado?>>Usado
			</td>
		</tr>
		<tr>
			<td>Categoria:</td>
			<td>
				<select name="categoria_id" >
				<?php foreach ($categorias as $categoria) : 
					$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
					$selecao = $essaEhACategoria ? "selected='selected'" : "";
				?>
					<option value="<?=$categoria['id']?>" <?= $selecao?>><?=$categoria['nome']?></option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		

		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn btn-primary" value="Alterar">		
			</td>
		</tr>
	</table>
</form>


<?php include("rodape.php"); ?>