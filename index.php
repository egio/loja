<?php
include("cabecalho.php");
include("logica-usuario.php");

?>

<?php
if (isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca'] == true) {
?>
	<p class="alert-danger">Você não tem acesso a essa página</p>
<?php
}
if (isset($_GET['logout']) && $_GET['logout'] == true) {
?>
	<p class="alert-danger">Deslogado com sucesso</p>
<?php
}

if (usuarioEstaLogado()) {
?>
	<p class="alert-success">Você está logado como <?= usuarioLogado() ?></p>
	<a href="logout.php">Deslogar</a></p>
<?php
}
else {
?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" class="form-control"></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
<?php
}
?>
<?php include("rodape.php"); ?>