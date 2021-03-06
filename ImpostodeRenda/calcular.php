<?php
include_once ('index.php');

//Recebendo variavel com o valor bruto da outra página e formatando no formato americano para efetuar calculos
$rendaBruta1 = str_replace("." , "" ,$_POST['textSalarioBruto']);
$rendaBruta = str_replace("," , "." ,$rendaBruta1);

//Iniciando sessão
session_start();

$_SESSION['rendaBruta'] = $rendaBruta;

//Chamando função para calcular INSS, passando como parametro valor bruto
calculoINSS($rendaBruta);

//Esta função irá verificar qual faixa o salário bruto entra e fazer o devido cálculo
function calculoINSS($rendaBruta){
	
	if ($rendaBruta <= 1556.94){
		
		$descontoINSS = $rendaBruta -($rendaBruta * 0.08);
		
	}
	
	elseif ($rendaBruta <= 2594.92){
		
		$descontoINSS = $rendaBruta -($rendaBruta * 0.09);
	}
	
	elseif($rendaBruta <= 5189.82){
		
		$descontoINSS = $rendaBruta - ($rendaBruta * 0.11);
	}
	
	else{
		
		$rendaBruta = $rendaBruta - 5189.82; 
	    $descontoINSS  = $rendaBruta +( 5189.82 - (5189.82 * 0.11));
				
	}
	
	//registrando o desconto INSS na variavel de sessão para utilizar função visualização
	$_SESSION['descontoINSS'] = $descontoINSS;
	//Chamando a função Imposto de renda passando o valor calculado desta função
	calculoImpostoRenda($descontoINSS);
	
}

/*
 Esta função irá receber o valor bruto descontado do INSS, após, verificar qual
 faixa entra e realizar o devido cálculo baseado na tabela
*/
function calculoImpostoRenda($descontoINSS){
	
	if ($descontoINSS <= 1903.98){
		
		$aliquota = 0;	
		$deducao = 0;
		$impostodeRenda = 0;
        $salarioLiquido = $descontoINSS;
		
	}
	
	elseif ($descontoINSS <= 2826.65){
		
		$aliquota = $descontoINSS * 0.075;
		$deducao = $aliquota - 142.80;
		$salarioLiquido = $descontoINSS - $deducao;
		
	}
	
	elseif ($descontoINSS <= 3751.05){
		
		$aliquota = $descontoINSS * 0.15;
		$deducao = $aliquota - 354.80 ;
		$salarioLiquido = $descontoINSS - $deducao;
		
	}
	
	elseif ($descontoINSS <= 4664.68){
		
		$aliquota = $descontoINSS * 0.225;
		$deducao = $aliquota - 636.13 ;
		$salarioLiquido = $descontoINSS - $deducao;
		
	}
	
	else{
		
		$aliquota = $descontoINSS * 0.275;
		$deducao = $aliquota - 869.36 ;
		$salarioLiquido = $descontoINSS - $deducao;
		
	}
	
	//Registrando na sessão valores para utilizar na visualização
	$_SESSION['aliquota'] = $aliquota;
	$_SESSION['deducao'] = $deducao;
	$_SESSION['salarioLiquido'] = $salarioLiquido;
	visualizar();
}

//Esta função irá mostrar os dados em uma tabela dividos passo a passo até chegar no salário liquido
function visualizar(){

	//Atribuindo valores de sessão a variaveis locais para simplicar o código, também formata o modelo
	$salarioBruto = number_format($_SESSION['rendaBruta'], 2, ',', '.');
	$descontoINSS = number_format($_SESSION['descontoINSS'], 2, ',', '.');
	$aliquota = number_format($_SESSION['aliquota'], 2, ',', '.');
	$deducao = number_format($_SESSION['deducao'], 2, ',', '.');
	$salarioLiquido = number_format($_SESSION['salarioLiquido'], 2, ',', '.');
	
	//Inserindo valores num array para visualizar dados dentro de uma tabela 
	$resultado = array($salarioBruto, $descontoINSS, $aliquota, $deducao, $salarioLiquido);
	
	echo "<div class=\"container\">";
	
	//Bootstrap tabela responsiva
	echo "<div class=\"table-responsive\">";
	echo "<p>";
	
	//Tabela de visualização dos dados
	echo "<table class=\"table table-bordered\">";
		//Dados fixos
		echo "<thead>";
		echo "<tr class = \"info\"> <th>Salário Bruto</th><th>Descontado INSS</th><th>Aliquota</th><th>Dedução</th><th>Salário Liquído</th></tr>";
		echo "</thead>";
		
		//Dados Variados
		echo "<tbody>";
		echo "<tr class = \"success\">";

	  			echo "<td> R$ ".$resultado[0]."</td>";
	            echo "<td> R$ ".$resultado[1]."</td>";
	            echo "<td> R$ ".$resultado[2]."</td>";
	            echo "<td> R$ ".$resultado[3]."</td>";
	            echo "<td> R$ ".$resultado[4]."</td>";
	                         
	    echo"</tr>";
	    echo "</tbody>";
	echo "</table>";
	echo "</div>";
	echo "</div>";
}
include_once ('rodape.html');
?>