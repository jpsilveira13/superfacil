<?php

	/* Funcoes de Parcelamento para Atualizacao da Tabela de Parcelamento */
	include('../config/config.php');
	$price = $_GET['s'];
	$corrige_price = str_replace("R$",'' , $price);
	$corrige_price = str_replace(".",'' , $corrige_price);
	$corrige_price = str_replace(",",'' , $corrige_price);

	function juroComposto($L,$i, $n)
	{
		$i = $i/100;
		for($a=0;$a<$n;$a++)
		{
			$j[$a]=$L*$i;
			$m[$a]=$L+$j[$a];
			$L=$m[$a];
		}
		$m = number_format($L,2,',','.');
		return $m;
	}


	function MostraParcela($valor)
	{
		$numero_parcela = $GLOBALS['ISC_CFG']["ParcelaComJuros"];
		$price_original = $valor;
		$correge_price = substr($price_original, '0', -2); 
		$parcela = number_format(($correge_price/$numero_parcela),'2',',','.');

		if($price_original<="10.00")
		{
			$GLOBALS['NumeroParcela'] = "1x ";
			$GLOBALS['ValorParcelado']=  number_format($price_original,'2',',','.')."<br>";
			$GLOBALS['DescParcelas'] = " <span class=ouematetexto>ou </span><span class=ouematevalor>1x</span> <span class=ouematetexto>de </span><span class=ouematevalor>R$ ".$GLOBALS['ValorParcelado']."</span><span class=ouematetexto>sem juros no cartão<br></span>";
			$return_parcela = $GLOBALS['DescParcelas'];
		} else {
			for($par=1;$par<=$numero_parcela;$par++)
			{
				$valor = ($correge_price/$par);
				if($valor>="10.00")
				{
					if($par <= $GLOBALS['ISC_CFG']["ParcelaSemJuros"])
					{
						$GLOBALS['NumeroParcela'] = "".$par."x ";
						$ValorParcelado=  number_format($valor,'2',',','.');
						$GLOBALS['DescParcelas'] = " <span class=ouematetexto>ou </span><span class=ouematevalor>".$par."x</span> <span class=ouematetexto>de </span><span class=ouematevalor>R$ ".$ValorParcelado."</span><span class=ouematetexto><br>sem juros no cartão<br></span>";
						$return_parcela = $GLOBALS['DescParcelas'];
					}else{
						$GLOBALS['NumeroParcela'] = $par."x ";
						$ValorParcelado=  juroComposto($valor,1.11,$par);
						$GLOBALS['DescParcelas']=" <span class=ouematetexto>ou </span><span class=ouematevalor>".$par."x</span> <span class=ouematetexto>de </span><span class=ouematevalor>R$ ".$ValorParcelado."</span><span class=ouematetexto><br>com juros no cartão<br></span>";					$arcela = $GLOBALS['NumeroParcela'].$GLOBALS['DescParcelas'];
						$return_parcela = $GLOBALS['DescParcelas'];
					}
				}
			}
		}

		return $return_parcela;
	}

	// Imprime na Tela
	echo MostraParcela($corrige_price);
?>