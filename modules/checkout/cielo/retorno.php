<?php
/*
	Modulo de Pagamento Cielo
	Ultimo Release: 17/09/2014
*/

	include("../../../init.php");
	require("includes/include.php");
	
	// Declara variaveis da loja
	$urls = $GLOBALS['ShopPath'];
	$nomeloja = $GLOBALS['StoreName'];
?>
<html>
<head>
<title>Retorno de Dados</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<style>
body, td, th, input, option, select, button {
	font-size: 16px;
	font-family: arial,tahoma,sans-serif;
}
</style>
</head>
<body>
<center>
<fieldset>
<?php
//pega o pedido
global $itemId;
$id = $_GET['id'];
$itemId = base64_decode($id);

//pega dados do pedido
$sql = $GLOBALS['ISC_CLASS_DB']->Query('SELECT * FROM cielo WHERE pedido="'.$itemId.'"');
$dados = $GLOBALS['ISC_CLASS_DB']->Fetch($sql);

//dados de afiliacao e modul
$afiliacao = GetModuleVariable("checkout_cielo","afiliacao");
$chave = GetModuleVariable("checkout_cielo","chave");
$modo = GetModuleVariable("checkout_cielo","modo");
$juros = GetModuleVariable("checkout_cielo","juros");
$desconto = GetModuleVariable("checkout_cielo","desconto");

//Pedido
$selectorder = $GLOBALS['ISC_CLASS_DB']->Query("select * from [|PREFIX|]orders where orderid='".$itemId."'");
$fetch_order = $GLOBALS['ISC_CLASS_DB']->Fetch($selectorder);
$clientecustomer = $fetch_order['ordcustid'];

//Cliente
$selectcustomer = $GLOBALS['ISC_CLASS_DB']->Query("select * from [|PREFIX|]customers where customerid='".$clientecustomer."'");
$fetch_customer = $GLOBALS['ISC_CLASS_DB']->Fetch($selectcustomer);

if($modo=='T'){
$urlvisa = TESTE;
}else{
$urlvisa = PRODUCAO;
}

//end cielo
define("ENDERECO", $urlvisa);

//dados da classe pedido
$Pedido = new Pedido();

//dados do afiliaco e pedido
$Pedido->dadosEcNumero = $afiliacao;
$Pedido->dadosEcChave = $chave; 
$Pedido->dadosPedidoNumero = $itemId;
$Pedido->tid = $dados['tid'];

//faz a consulta
$objResposta = $Pedido->RequisicaoConsulta();

//ve o status
$status = $objResposta->status;

//atualiza o pedido para o status apos consultado
@$GLOBALS['ISC_CLASS_DB']->Query('UPDATE cielo SET status="'.$objResposta->status.'" WHERE pedido ="'.$itemId.'"');

//ve se pode se foi capturada ou esta pendente	
if($status == '4' || $status == '6'){
$finalizacao = true;
}else{
$finalizacao = false;
}	

//faz a captura se for configurado para isso
if($finalizacao==true){
$objResposta = $Pedido->RequisicaoCaptura();
}

//aplica o status
$Pedido->status = $objResposta->status;

//atualiza o pedido para o status apos capturado
@$GLOBALS['ISC_CLASS_DB']->Query('UPDATE cielo SET status="'.$Pedido->status.'" WHERE pedido ="'.$itemId.'"');

//pega o real status atual
$status = $Pedido->getStatus();

//transforma o resultado em xml
$aa = simpleXMLToArray($objResposta);

//se ja foi capturado se sim ele apenas faz a consulta
if(isset($aa['codigo']) && $aa['codigo']=='030'){
$objResposta = $Pedido->RequisicaoConsulta();
$Pedido->status = $objResposta->status;
$aa = simpleXMLToArray($objResposta);
$status = $Pedido->getStatus();
//atualiza o pedido para o status apos re-capturado
@$GLOBALS['ISC_CLASS_DB']->Query('UPDATE cielo SET status="'.$Pedido->status.'" WHERE pedido ="'.$itemId.'"');
}

//exibe o cumpom de acordo o resultado
if($Pedido->status==6 || $Pedido->status==4){
//inicio ok
echo '<h2>'.$status.'</h2>';
echo '<hr>';
echo '<b>Cart&atilde;o</b>: '.@strtoupper($aa['forma-pagamento']['bandeira']).'<br>';
echo '<b>Parcela(s)</b>: '.@$aa['forma-pagamento']['parcelas'].'x de '.number_format(((@$aa['dados-pedido']['valor']/100)/@$aa['forma-pagamento']['parcelas']), 2, '.', ',').' R$<br>';
echo '<b>TID</b>: '.@$aa['tid'].'<br>';
echo '<b>Pedido</b>: '.$itemId.'<br>';
echo '<b>Valor</b>: '.number_format(@$aa['dados-pedido']['valor']/100, 2, '.', ',').' R$<br>';
echo '<b>Data</b>: '.date('d/m/Y').'<br>';
echo '<b>LR</b>: '.@$aa['autorizacao']['lr'].'<br>';
echo '<br><b>'.@$resultado3['firstname'].' '.@$resultado3['lastname'].'</b><br>_____________________________________<br><br>';
echo '<b>'.$nomeloja.'</b><br>'.$urls;
//muda e salva o status
if($Pedido->status==4){
@UpdateOrderStatus($itemId, ORDER_STATUS_PENDING);
}
if($Pedido->status==6){
@UpdateOrderStatus($itemId, ORDER_STATUS_AWAITING_SHIPMENT);
}
$msg =  "<b>".$status."</b>
<br>Cartao: ".@strtoupper($aa['forma-pagamento']['bandeira'])."
<br>Parcela(s): ".@$aa['forma-pagamento']['parcelas']."
<br>LR: ".@$aa['autorizacao']['lr']."";
$query = "UPDATE [|PREFIX|]orders SET ordpayproviderid = '".$aa['tid']."', 
ordpaymentstatus = '".$msg."' where orderid = '".$itemId."'";
$GLOBALS['ISC_CLASS_DB']->Query($query);

//fim de ok
}else{
//inicio fail
echo '<h2>'.$status.'</h2>';
echo '<hr>';
echo '<b>Cart&atilde;o</b>: '.@strtoupper($aa['forma-pagamento']['bandeira']).'<br>';
echo '<b>Parcela(s)</b>: '.@$aa['forma-pagamento']['parcelas'].'x de '.number_format(((@$aa['dados-pedido']['valor']/100)/@$aa['forma-pagamento']['parcelas']), 2, '.', ',').' R$<br>';
echo '<b>TID</b>: '.@$aa['tid'].'<br>';
echo '<b>Pedido</b>: '.$itemId.'<br>';
echo '<b>Valor</b>: '.number_format(@$aa['dados-pedido']['valor']/100, 2, '.', ',').' R$<br>';
echo '<b>Data</b>: '.date('d/m/Y').'<br>';
echo '<br>';
echo '<b>'.$nomeloja.'</b><br>'.$urls;
//muda e salva o status
@UpdateOrderStatus($itemId, ORDER_STATUS_CANCELLED);
$msg =  "<b>".$status."</b>
<br>Cartao: ".@strtoupper($aa['forma-pagamento']['bandeira'])."
<br>Parcela(s): ".@$aa['forma-pagamento']['parcelas']."";
$query = "UPDATE [|PREFIX|]orders SET ordpayproviderid = '".$aa['tid']."', 
ordpaymentstatus = '".$msg."' where orderid = '".$itemId."'";
$GLOBALS['ISC_CLASS_DB']->Query($query);
//fim fail
}

echo '<script type="text/javascript">window.opener.location.href="'.$GLOBALS['ShopPath'].'/";</script>';
?>



</fieldset>
<br>
<a href='javascript:print();'>IMPRIMIR RECIBO</a>
</center>
</body>
</html>