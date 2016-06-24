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

	function Criaparcelas($valoraparcelar,$parcelas)
	{
		$saida = '<tr>';
		$correge_price = substr($valoraparcelar, '0', -2); 
		$valor = ($correge_price/$parcelas);
		if($valor >= "10.00")
		{
			if($parcelas <= $GLOBALS['ISC_CFG']["ParcelaSemJuros"])
			{
				$ValorParcelado =  number_format($valor,'2',',','.');
				$saida .= '<td width="50%" style="padding:5px; text-align:center; font-size:12px;">'.$parcelas.'x sem juros de </td><td width="50%" style="padding:5px; text-align:center; font-size:12px;"> R$ '.$ValorParcelado." </td>";
			}else{
				$ValorParcelado = juroComposto($valor,1.11,$parcelas);
				$saida .= '<td width="50%" style="padding:5px; text-align:center; font-size:12px;">'.$parcelas.'x com juros de </td><td width="50%" style="padding:5px; text-align:center; font-size:12px;"> R$ '.$ValorParcelado."</td>";
			}
			$saida .= ' </tr>';
			return $saida;
		}
	}

	$numero_parcela = $GLOBALS['ISC_CFG']["ParcelaComJuros"];
	$GLOBALS["TabelaParcela1"].='<table border="0" cellspacing="0" width="100%" cellpadding="0">';
	for($parcelas=1;$parcelas<=$numero_parcela;$parcelas++){
		$GLOBALS["TabelaParcela1"] .=Criaparcelas($corrige_price,$parcelas);
	}
	$GLOBALS["TabelaParcela1"].='</table>';
	echo $GLOBALS["TabelaParcela1"];

?>