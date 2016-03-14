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
	
		<h1 class = "text-center">Tabela Imposto de Renda</h1>
		
		<div class = "container">
			<div class= "table-responsive">
				<table class = "table">
  					<thead>
  						<tr class = "info">
    						<th>Faixa</th>
    						<th>Salário Mínimo</th>
    						<th>Salário Máximo</th>
    						<th>Aliquota</th>
    						<th>Dedução</th>
  						</tr>
  					</thead>
  				
  					<tbody >
  						<tr class="active">
    						<td>A</td>
    						<td>R$ 0</td>
    						<td>R$ 1.903,98</td>
    						<td>Isento</td>
    						<td>Isento</td>
  						</tr>
  						<tr class="active">
    						<td>B</td>
    						<td>R$ 1.903,99</td>
    						<td>R$ 2.826,65</td>
    						<td>7,5%</td>
    						<td>R$ 142,80</td>
  						</tr>
  						<tr class="active">
    						<td>C</td>
    						<td>R$ 2.826,66</td>
    						<td>R$ 3.751,05</td>
    						<td>15%</td>
    						<td>R$ 354,80</td>
  						</tr>
  						<tr class="active">
    						<td>D</td>
    						<td>R$ 3.751,06</td>
    						<td>R$ 4.664,68</td>
    						<td>22,5%</td>
    						<td>R$ 636,13</td>
  						</tr>
  						 <tr class="active">
    						<td>E</td>
    						<td>R$ 4.664,68</td>
    						<td>infinito</td>
    						<td>27,5%</td>
    						<td>R$ 869,36</td>
  						</tr>
  					
  					</tbody>
				</table>
			</div>
		</div> 
		
	</section>

</body>

</html>