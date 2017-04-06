<?php include("cabecalho.php"); ?>
<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input type="text" class="form-control" name="nome"></td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td><input type="text" class="form-control" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn btn-primary" value="Cadastrar">		
			</td>
		</tr>
	</table>
</form>
<?php include("rodape.php"); ?>