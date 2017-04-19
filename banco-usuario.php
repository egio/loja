<?php

function buscaUsuario($conexao, $email, $senha) {
	$senhaMd5 = md5($senha);

	$resultado = mysqli_query($conexao, "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'");

	return mysqli_fetch_assoc($resultado);

}