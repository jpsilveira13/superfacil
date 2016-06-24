<?php
/*
	Modulo de Pagamento PAGSEGURO
	Ultimo Release: 11/11/2014
*/
	require_once("../../../init.php");
	global $itemId;
	$itemId = (int) $_GET['pedido'];

	//verifica se e um pedido valido
	if(!isset($itemId)){
		echo 'Especifique seu pedido!';
		exit;
	}

//gera lestras
$random_chars = '';
$characters = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
$keys = array();
while(count($keys) < 7) {
    $x = mt_rand(0, count($characters)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}
foreach($keys as $key){
   $random_chars .= $characters[$key];
}

function limitarTextoByLOja5($texto, $limite)
{
$texto = substr($texto, 0, $limite);
return $texto;
}

//var do modulo
$EmailPagamentoDigital	= GetModuleVariable("checkout_pagseguro","pagemail");
$ac	= GetModuleVariable("checkout_pagseguro","acrecimo");

$a = GetOrder($itemId);

$frete = number_format($a['shipping_cost_inc_tax'], 2, '.', '');

if($a['ordstatus']==2 || $a['ordstatus']==10){
echo 'Pedido selecionado ja esta pago ou enviado!';
exit;
}

function FormataCEP($cep) {
return preg_replace("/[a-zA-Z]/", "", $cep);
}

switch ($a['ordbillstate']) {
case "Acre" :
$estadonovo = "AC";
break;

case "Alagoas" :
$estadonovo = "AL";
break;

case "Amapa" :
case "Amapá" :
$estadonovo = "AP";
break;

case "Amazonas" :
$estadonovo = "AM";
break;

case "Bahia" :
$estadonovo = "BA";
break;

case "Ceara" :
case "Ceará" :
$estadonovo = "CE";
break;

case "Distrito Federal" :
$estadonovo = "DF";
break;

case "Espirito Santo" :
case "Espírito Santo" :
$estadonovo = "ES";
break;

case "Goias" :
case "Goiás" :
$estadonovo = "GO";
break;

case "Maranhao" :
case "Maranhão" :
$estadonovo = "MA";
break;

case "Mato Grosso" :
$estadonovo = "MT";
break;

case "Mato Grosso do Sul" :
$estadonovo = "MS";
break;

case "Minas Gerais" :
$estadonovo = "MG";
break;

case "Para" :
case "Pará" :
$estadonovo = "PA";
break;

case "Paraiba" :
case "Paraíba" :
$estadonovo = "PB";
break;

case "Parana" :
case "Paraná" :
$estadonovo = "PA";
break;

case "Pernambuco" :
$estadonovo = "PE";
break;

case "Piaui" :
case "Piauí" :
$estadonovo = "PI";
break;

case "Rio de Janeiro" :
$estadonovo = "RJ";
break;

case "Rio Grande do Norte" :
$estadonovo = "RN";
break;

case "Rio Grande do Sul" :
$estadonovo = "RS";
break;

case "Rondonia" :
case "Rondônia" :
$estadonovo = "RO";
break;

case "Roraima" :
$estadonovo = "RR";
break;

case "Santa Catarina" :
$estadonovo = "SP";
break;

case "Sao Paulo" :
case "São Paulo" :
$estadonovo = "SP";
break;

case "Sergipe" :
$estadonovo = "SE";
break;

case "Tocantins" :
$estadonovo = "TO";
break;
}

$paymenturl = "https://pagseguro.uol.com.br/v2/checkout/payment.html";

$total = $a['total_inc_tax'];

$c = ($total/100)*$ac;
$acrecimos = number_format($c, 2, '.', '');
$acrecimostotal = number_format($c+$total, 2, '.', '');

if($ac>"0"){
	$ms = "Com ".$ac."% (R$ ".$acrecimos.") de acr&eacute;cimo no valor do pedido, resultando em um total de R$ ".$acrecimostotal;
} else {
	$ms = "";
}

echo "
<center style=\"margin-top:15%\">
	<img src=\"".$GLOBALS['ShopPath']."/modules/checkout/pagseguro/images/loader.gif\" />
	<p style=\"font-size:13px; font-weight: bold; font-family: Arial;\">Voc&ecirc; ser&aacute; redirecionado para o pagseguro ...</p>
</center>
<form name='pagseguro' action='".$paymenturl."' method='POST'>
<input name='receiverEmail' type='hidden' value='".$EmailPagamentoDigital."'>
<input type='hidden' name='currency' value='BRL'>";  



$inicio = 1;
foreach($a['products'] as $id => $valor){
echo '<input type="hidden" name="itemId'.$inicio.'" value="'.$valor['orderprodid'].'">';
echo '<input type="hidden" name="itemDescription'.$inicio.'" value="'.limitarTextoByLOja5($valor['ordprodname'],120).'">';
echo '<input type="hidden" name="itemQuantity'.$inicio.'" value="'.$valor['ordprodqty'].'">';
echo '<input type="hidden" name="itemAmount'.$inicio.'" value="'.number_format($valor['price_inc_tax'], 2, '.', '').'">';
$inicio++;
}

if($frete>0){
echo '<input type="hidden" name="itemId'.($inicio).'" value="'.rand(5555555555,66666666666666).'">';
echo '<input type="hidden" name="itemDescription'.($inicio).'" value="Frete do Pedido:">';
echo '<input type="hidden" name="itemQuantity'.($inicio).'" value="1">';
echo '<input type="hidden" name="itemAmount'.($inicio).'" value="'.$frete.'">';
}

if($a['coupon_discount'] > 0){
	$desconto = number_format($a['coupon_discount'], 2, '.', '');
	echo "<input type='hidden' name='extraAmount' value='-".$desconto."'> ";
}

if($acrecimos > 0){
	echo "<input name='extraAmount' type='hidden' value='".$acrecimos."'>";
}


echo "
<input name='reference' type='hidden' value='".$a['orderid']."".$random_chars."'>
<input type='hidden' name='shippingType' value='3'> 
<input name='shippingAddressPostalCode' type='hidden' value='".FormataCEP($a['ordbillzip'])."'>
<input name='shippingAddressStreet' type='hidden' value='".$a['ordbillstreet1']."'>
<input type='hidden' name='shippingAddressNumber' value=''>  
<input type='hidden' name='shippingAddressComplement' value=''> 
<input name='shippingAddressDistrict' type='hidden' value='".$a['ordbillstreet2']."'>
<input name='shippingAddressCity' type='hidden' value='".$a['ordbillsuburb']."'>
<input name='shippingAddressState' type='hidden' value='".$estadonovo."'>
<input type='hidden' name='shippingAddressCountry' value='BRA'>
</form>	                                     
";


?>
<script type="text/javascript"> window.onload = function(){ document.forms[0].submit(); } </script>