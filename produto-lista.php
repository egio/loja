<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>

$produtos = listaProdutos($conexao);

<?php include("rodape.php"); ?>