<!DOCTYPE html>
<html>
<head>
	
	<title>Formulário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<meta charset="utf-8">
	<style type="text/css">
		#TamanhoContainer{
			width: 400px;

		}
		#botao{
			background-color: #4F57AA; /* cor de fundo */
			color: #ffffff; /*cor da letra*/
			font-weight: bold;
		}
	</style>

</head>
<body>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<div class="container" style="margin-top: 40px" id="TamanhoContainer">
		<h4>Cadastro de Produtos</h4>
		<form action="insere_produto.php" method="post" style="margin-top: 20px">
			<div class="form-group">
	   	 		<label>Nome do Produto</label>
	   	 		<input type="text" class="form-control" name="nmproduto" placeholder="Insira o nome do produto" required>
	 		</div>
			<div class="form-group">
	   	 		<label>Nº do Produto</label>
	   	 		<input type="number" class="form-control" name="nrproduto" placeholder="Insira o número do produto" required>
	 		</div>
	 		<div class="form-group">
	   	 		<label>Quantidade do Produto</label>
	   	 		<input type="number" class="form-control" name="qtproduto" placeholder="Insira a quantidade do produto" required>
	 		</div>
	 		<div class="form-group">
	    		<label>Categoria</label>
	   				<select class="form-control" name="categoria" >
	     				<option>Perifericos</option>
	      				<option>Hardware</option>
	      				<option>Software</option>
	      				<option>Celulares</option>
	    			</select>
	 		</div>
	 		<div class="form-group">
	    		<label>Fornecedor</label>
	   				<select class="form-control" name="fornecedor">
	     				<option>Razer</option>
	      				<option>HP</option>
	      				<option>DELL</option>
	      				<option>Lenovo</option>
	    			</select>
	 		</div>
	 		<div style="text-align: right">
	 			<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
	 		</div>
	 	</form>	
 	</div>

 </body>
</html>