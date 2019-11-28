<?php

	include 'conexao.php';
	
	$nmproduto = $_POST['nmproduto'];
	$nrproduto = $_POST['nrproduto'];
	$qtproduto = $_POST['qtproduto'];
	$categoria = $_POST['categoria'];
	$fornecedor = $_POST['fornecedor'];

	$sql = "INSERT INTO produtos(nm_produto, qt_produto, cat_produto, forn_produto, nr_produto) VALUES ('$nmproduto', $qtproduto, '$categoria', '$fornecedor', $nrproduto);";

	$inserir = mysqli_query($conexao,$sql);
?>

