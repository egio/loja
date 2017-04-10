<?php
function listaProdutos($conexao) {
	$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos p join categorias c on p.categoria_id = c.id");

	$produtos = array();

	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', '{$categoria_id}', {$usado})";
	$resultadoInsercao = mysqli_query($conexao, $query);
	return $resultadoInsercao;
}

function removeProduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	$resultadoDelecao = mysqli_query($conexao, $query);
	return $resultadoDelecao;
}

function buscaProduto($conexao, $id) {
	$resultado = mysqli_query($conexao, "select * from produtos p where p.id = {$id}");

	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $id) {
	$query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = '{$categoria_id}', usado = {$usado} where id = {$id}";
	$resultadoAlteracao = mysqli_query($conexao, $query);
	return $resultadoAlteracao;
}