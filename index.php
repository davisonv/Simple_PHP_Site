<!DOCTYPE html>
<html>
<head>
	
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
		<form style="margin-top: 20px">
			<div class="form-group">
	   	 		<label>Nome do Produto</label>
	   	 		<input type="text" class="form-control" placeholder="Insira o nome do produto">
	 		</div>
			<div class="form-group">
	   	 		<label>Nº do Produto</label>
	   	 		<input type="number" class="form-control" placeholder="Insira o número do produto">
	 		</div>
	 		<div class="form-group">
	   	 		<label>Quantidade do Produto</label>
	   	 		<input type="number" class="form-control" placeholder="Insira a quantidade do produto">
	 		</div>
	 		<div class="form-group">
	    		<label>Categoria</label>
	   				<select class="form-control">
	     				<option>Periféricos</option>
	      				<option>Hardware</option>
	      				<option>Software</option>
	      				<option>Celulares</option>
	    			</select>
	 		</div>
	 		<div class="form-group">
	    		<label>Fornecedor</label>
	   				<select class="form-control">
	     				<option>Razer</option>
	      				<option>HP</option>
	      				<option>DELL</option>
	      				<option>Lenovo</option>
	    			</select>
	 		</div>
	 		<div style="text-align: right">
	 			<button type="submit" class="btn btn-sm" id="botao">Cadastrar</button>
	 		</div>
	 	</form>	
 	</div>

</body>
</html>