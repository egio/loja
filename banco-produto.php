<?php
function listaProdutos($conexao) {
	$resultado = mysqli_query($conexao, "select * from produtos");

	$produtos = array();

	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao) {
	$query = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
	$resultadoInsercao = mysqli_query($conexao, $query);
	return $resultadoInsercao;
}

function removeProduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	$resultadoDelecao = mysqli_query($conexao, $query);
	return $resultadoDelecao;
}