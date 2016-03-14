<!DOCTYPE html>

<html>

<head>
	
	<meta charset = "utf-8">
	
	<title>Menu</title>
	
	<!-- Visualização Mobile" -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Incluindo Bootstrap CSS -->
	<link href="_bootstrap-3.3.6-dist/_css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Incluindo Bootstrap JavaScript-->
	<script src="_bootstrap-3.3.6-dist/_js/bootstrap.min.js"></script>
</head>
<body>

	<ul class="nav nav-pills nav-justified">
  		<li class = "active" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><a href=index.php#>Imposto de Renda</a></li>
 		<li ><a href="index.php">Calcular</a></li>
		<li><a href="tabelaINSS.php">Tabela INSS</a></li>
      	<li><a href="tabelaImpostoRenda.php">Tabela Imposto de Renda</a></li>
	</ul>
	

  <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Imposto de Renda</h4>
        </div>
        <div class="modal-body">
          <p>Esta é uma pequena aplicação WEB capaz de realizar o cálculo de imposto de renda
          baseado na tabela de Desconto de INSS, você também pode consultar as devidas tabelas
          nos menus indicados.</p>
          <p>Trabalho da Matéria de Desenvolvimento WEB</p>
          <p>Professor : Gustavo Bartz  - IFSP</p>
          <p>Aluno : Wesley Almeida da Silva - Instituto Federal São Paulo - Câmpus Hortolândia</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
