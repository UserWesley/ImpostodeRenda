<!DOCTYPE html>

<html>

<head>
	
	<meta charset = "utf-8">
	
	<title>Cálculo Imposto de Renda</title>
	
	<!-- Visualização Mobile" -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Incluindo Bootstrap CSS -->
	<link href="_bootstrap-3.3.6-dist/_css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Incluindo Bootstrap JavaScript-->
	<script src="_bootstrap-3.3.6-dist/_js/bootstrap.min.js"></script>
	   
</head>

<body>
	
	<header><?php include_once 'menu.php';?></header>
	
	<section>
	
		<h1 class = "text-center">Tabela INSS</h1>
		
		<div class = "container">
			<table class = "table">
  				<thead>
  					<tr class = "info">
    					<th>Faixa</th>
    					<th>Salário Mínimo</th>
    					<th>Salário Máximo</th>
    					<th>Aliquota</th>
    					<th>Teto</th>
  					</tr>
  				</thead>
  				
  				<tbody>
  					<tr class = "active">
    					<td>A</td>
    					<td>R$ 0</td>
    					<td>R$ 1.556,94</td>
    					<td>%8</td>
    					<td>Não</td>
  					</tr>
  					<tr class = "active">
    					<td>B</td>
    					<td>R$ 1.556,95</td>
    					<td>R$ 2.594,92</td>
    					<td>9%</td>
    					<td>Não</td>
  					</tr>
  					<tr class = "active">
    					<td>C</td>
    					<td>R$ 2.594,92</td>
    					<td>Infinito</td>
    					<td>11%</td>
    					<td>Sim, 11% de 5.189,82</td>
  					</tr>
  					
  				</tbody>
			</table>
		</div> 
		
	</section>
	<footer><?php include_once ('rodape.html');?></footer>
</body>

</html>