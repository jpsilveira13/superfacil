<?php
include("../../../init.php");
if (!(isset($_REQUEST["hash"]))) {
	exit("Ops, algo errado!");
}
global $itemId;
$tk = $_REQUEST["hash"];
$a = explode("#", base64_decode($tk));
$cartao = $a[0];
$itemId = (int)$a[1];
list(, , $tipocc) = $a;
$parcela = (int)$a[3];
list(, , , , $hash) = $a;
if (!(isset($itemId))) {
	exit("Ops, algo errado!");
}
require("includes/include.php");
$afiliacao = GetModuleVariable("checkout_cielows", "afiliacao");
$chave = GetModuleVariable("checkout_cielows", "chave");
$modo = GetModuleVariable("checkout_cielows", "modo");
$juros = GetModuleVariable("checkout_cielows", "juros");
$desconto = GetModuleVariable("checkout_cielows", "desconto");
$tipojuros = GetModuleVariable("checkout_cielows", "tipojuros");
$semjurosate = GetModuleVariable("checkout_cielows", "jurosde");
$cap = GetModuleVariable("checkout_cielows", "captura");
$key_string = GetModuleVariable("checkout_cielows", "serial");
$getovalor = TotalPedidoCielo($itemId);
$valorreal = number_format($getovalor, 2, ".", "");
if ($tipocc == "A" && 0 < $desconto) {
	$vald = $getovalor / 100 * $desconto;
	$valor = number_format($getovalor - $vald, 2, "", "");
}
else {
	$valor = number_format($valorreal, 2, "", "");
}
if ($semjurosate < $parcela) {
	$valor1 = parcelarcielo($valorreal, $juros, $parcela) * $parcela;
	$valor = number_format($valor1, 2, "", "");
}
if ($modo == "T") {
	define("ENDERECO", TESTE);
}
else {
	define("ENDERECO", PRODUCAO);
}
$Pedido = new Pedido();
$Pedido->formaPagamentoBandeira = $op;
if ($tipocc != "A" && $parcela != "1") {
	$Pedido->formaPagamentoProduto = $tipocc;
	$Pedido->formaPagamentoParcelas = $parcela;
}
else {
	$Pedido->formaPagamentoProduto = $tipocc;
	$Pedido->formaPagamentoParcelas = 1;
}
$nomec = $_REQUEST["nome"];
$cpfc = $_REQUEST["cpf"];
$cartaoc = $_REQUEST["num"];
$Pedido->dadosEcNumero = $afiliacao;
$Pedido->dadosEcChave = $chave;
if (GetModuleVariable("checkout_cielows", "captura") == "sim") {
	$Pedido->capturar = "true";
}
else {
	$Pedido->capturar = "false";
}
$Pedido->autorizar = $autorizar;
$Pedido->dadosPortadorNumero = $_POST["num"];
$Pedido->dadosPortadorVal = (string)$_POST["ano"] . (string)$_POST["mes"];
$Pedido->dadosPortadorNome = $_POST["nome"];
$Pedido->dadosPortadorInd = "1";
$Pedido->dadosPortadorCodSeg = $_POST["cvs"];
$Pedido->dadosPedidoNumero = $itemId;
$Pedido->dadosPedidoValor = $valor;
$Pedido->dadosPedidoDescricao = "IP Comprador: " . get_ip_cielo();
$Pedido->urlRetorno = $GLOBALS["ShopPath"] . "/index.php?id_cielo=" . base64_encode($itemId);
$objResposta = $Pedido->RequisicaoTid();
if (isset($objResposta->tid) && !(empty($objResposta->tid))) {
	$Pedido->tid = $objResposta->tid;
	$Pedido->pan = $objResposta->pan;
	$Pedido->status = $objResposta->status;
	$objResposta = $Pedido->RequisicaoAutorizacaoPortador();
	$aa = simpleXMLToArray($objResposta);
	if (isset($objResposta->codigo) && isset($objResposta->mensagem)) {
		echo("&nbsp;<b>Erro no Pagamento</b><br>");
		echo("&nbsp;" . utf8_decode($objResposta->mensagem));
		echo("<br>&nbsp;<a href='javascript:Novamente();'>Tente Novamente</a>");
		exit();
		return 1;
	}
	$tid = $objResposta->tid;
	$status = $objResposta->status;
	$statusnome = getStatusNomeCielo($status);
	$total = @$GLOBALS["ISC_CLASS_DB"]->Query("SELECT COUNT(id) as total FROM cielows WHERE pedido ='" . $itemId . "'");
	$total = @$GLOBALS["ISC_CLASS_DB"]->Fetch($total);
	if ($total["total"] == 0) {
		$sql = "INSERT INTO `cielows` (\r\n`id` ,\r\n`pedido` ,\r\n`valor` ,\r\n`tid` ,\r\n`auth` ,\r\n`data` ,\r\n`cc` ,\r\n`nome` ,\r\n`cpf` ,\r\n`cartao` ,\r\n`status`\r\n)\r\nVALUES (\r\nNULL ,  '" . $itemId . "',  '" . $valor . "',  '" . $tid . "',  '" . $hash . "',  '" . time() . "',  '" . $op . "',  '" . $nomec . "',  '" . $cpfc . "',  '" . substr($cartaoc, 0, 6) . "',  '" . $status . "'\r\n);";
		@$GLOBALS["ISC_CLASS_DB"]->Query($sql);
	}
	else {
		if ($total["total"] == 1) {
			$sql = "UPDATE `cielows` SET `valor` = '" . $valor . "',\r\n`tid` =  '" . $tid . "',\r\n`auth` =  '" . $hash . "',\r\n`data` =  '" . time() . "',\r\n`cc` =  '" . $op . "',\r\n`nome` =  '" . $nomec . "',\r\n`cpf` =  '" . $cpfc . "',\r\n`cartao` =  '" . substr($cartaoc, 0, 6) . "',\r\n`status` =  '" . $status . "' WHERE pedido ='" . $itemId . "' LIMIT 1 ;";
			@$GLOBALS["ISC_CLASS_DB"]->Query($sql);
		}
	}
	if ($status == "4" || $status == "6") {
		echo("&nbsp;<b>Pedido " . $statusnome . "</b><br>");
		echo("&nbsp;<b>TID</b>: " . $Pedido->tid . "<br>\r\n&nbsp;<b>PAN</b>: " . $objResposta->pan . "<br>\r\n&nbsp;<b>LR</b>: " . $objResposta->autorizacao->lr . "<br>\r\n&nbsp;<b>Voc&ecirc; sera redirecionado em 5 segundos! N&atilde;o atualize ou feche esta janela!</b>");
		echo("<meta http-equiv=\"refresh\" content=\"5; url=modules/checkout/cielows/item.php?action=order_status\">");
		echo("");
		if ($status == 4) {
			@UpdateOrderStatus($itemId, $pendentess);
		}
		if ($status == 6) {
			@UpdateOrderStatus($itemId, $aprovadoss);
		}
		$msg = "" . strtoupper($statusnome) . " | Bandeira: " . @strtoupper($aa["forma-pagamento"]["bandeira"]) . " | Em " . @$aa["forma-pagamento"]["parcelas"] . "x | LR: " . @$aa["autorizacao"]["lr"] . "";
		$query = "UPDATE [|PREFIX|]orders SET ordpayproviderid = '" . $aa["tid"] . "', \r\nordpaymentstatus = '" . $msg . "' where orderid = '" . $itemId . "'";
		$GLOBALS["ISC_CLASS_DB"]->Query($query);
		return 1;
	}
	echo("&nbsp;<b>Pedido " . $statusnome . "</b><br>");
	echo("&nbsp;<b>TID:</b> " . $Pedido->tid . "<br>");
	echo("<br>&nbsp;<a href='javascript:Novamente();'>Tente Novamente</a>");
	@UpdateOrderStatus($itemId, $negadoss);
	$msg = "" . strtoupper($statusnome) . " | Bandeira: " . @strtoupper($aa["forma-pagamento"]["bandeira"]) . " | Em " . @$aa["forma-pagamento"]["parcelas"] . "x";
	$query = "UPDATE [|PREFIX|]orders SET ordpayproviderid = '" . $aa["tid"] . "', \r\nordpaymentstatus = '" . $msg . "' where orderid = '" . $itemId . "'";
	$GLOBALS["ISC_CLASS_DB"]->Query($query);
	return 1;
}
echo("Ops, ocorreu um erro!<br>");
print_r(simpleXMLToArray($objResposta));
echo("<br>Entre em contato com o administrador da loja!");
@UpdateOrderStatus($itemId, $canceladoss);

