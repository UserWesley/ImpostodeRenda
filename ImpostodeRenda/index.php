<?php
?>
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
	
	<!-- Incluindo jquery-->
	<script src="_jquery/jquery.js"></script>
	
	<!-- Incluindo jquery Maskmoney-->
    <script src="_jquery/jquerymaskmoney.js" type="text/javascript"></script>
    
	<script type="text/javascript">
	
        $(document).ready(function(){
              $("input.mascaraDinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
        });

    </script>
    
    

	
	
</head>

<body>
	
	<header ><h1 class = "text-center"> Cálculo de Imposto de Renda</h1></header>

	<section>
	
		<form action= "calcular.php" method = "POST" class = "form-horizontal" >
  			
  			<div class="form-group">
    			
    			<label for= "idSalarioBruto" class="control-label col-sm-2">Salário Bruto :</label>
    			
    			<div class="col-sm-10">
    			
      				<input type = "text" name = "textSalarioBruto" id="idSalarioBruto"  class ="mascaraDinheiro" required autofocus>
			 	
					<input type ="submit" value = "Calcular" id = "idCalcular" class="btn btn-success">
				 
				 </div>
 			
 			</div>
 			 	
		</form>

	</section>

</body>



</html>