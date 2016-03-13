<?php

include_once ('index.php');

$rendaBruta = $_POST['textSalarioBruto'];
calculoINSS($rendaBruta);

session_start();


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
	
	$_SESSION['descontoINSS'] = $descontoINSS;
	calculoImpostoRenda($descontoINSS);
	
}


function calculoImpostoRenda($descontoINSS){
	
	if ($descontoINSS <= 1903.98){
		
		$aliquota = "não tem";	
		$deducao = "não tem";
		$impostodeRenda = "Isento";
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
	$_SESSION['aliquota'] = $aliquota;
	$_SESSION['deducao'] = $deducao;
	$_SESSION['salarioLiquido'] = $salarioLiquido;
}




?>