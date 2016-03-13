<?php
?>
<!DOCTYPE html>

<html>

<head>
	
	<meta charset = "utf-8">
	
	<title>Cálculo Imposto de Renda</title>
	<!-- Visualização Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Incluindo Bootstrap CSS -->
	<link href="_bootstrap-3.3.6-dist/_css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Incluindo Bootstrap JavaScript-->
	<script src="_bootstrap-3.3.6-dist/_js/bootstrap.min.js"></script>
	
</head>

<body>
	
	<header> Cálculo de Imposto de Renda</header>

	<section>
	
		<form action= "calcular.php" method = "POST" >
  		
    		<label for= "idSalarioBruto">Salário Bruto :</label>
      		<input type = "text" name = "textSalarioBruto" id = "idSalarioBruto" placeholder = "2000,00" min = "0" required>

			<input type ="submit" value = "Calcular" class="btn btn-success">
		
		</form>

	</section>

</body>

</html>