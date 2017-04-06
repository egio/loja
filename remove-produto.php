<?php
include("conecta.php");
include("banco-produto.php");

$id = $_POST["id"];

if (removeProduto($conexao, $id));

header("Location: produto-lista.php?removido=true");
die();