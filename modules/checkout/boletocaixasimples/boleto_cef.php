<?php
global $itemId;
$itemId = (int) $_GET['boleto'];

if(empty($itemId)){
die('Pedido invalido!');
}

include "dados.php";

//Variaveis do modulo
$BoletodiasVencimento		= corinthias("checkout_boletocaixasigcb","cefdiasparavencimento");
$BoletoTaxa 	= corinthias("checkout_boletocaixasigcb","ceftaxa");

$valorBoleto = $fetch_order['total_inc_tax'];
$sacadoBoleto = $fetch_order['ordbillfirstname']." ".$fetch_order['ordbilllastname'];
$enderecoBoleto = $fetch_order['ordbillstreet1']." - ".$fetch_order['ordbillsuburb']." - ".$fetch_order['ordbillstate'].", CEP: ".$fetch_order['ordbillzip'];

$BoletoInstrucaoU 			= corinthias("checkout_boletocaixasigcb","cefinstrucaoum");
$BoletoInstrucaoD 			= corinthias("checkout_boletocaixasigcb","cefinstrucaodois");
$BoletoInstrucaoT 			= corinthias("checkout_boletocaixasigcb","cefinstrucaotres");
$BoletoInstrucaoQ 			= corinthias("checkout_boletocaixasigcb","cefinstrucaoquatro");
$BoletoDemoU 				= corinthias("checkout_boletocaixasigcb","demoum");
$BoletoDemoD 				= corinthias("checkout_boletocaixasigcb","demodois");
$BoletoDemoT 				= corinthias("checkout_boletocaixasigcb","demotres");

$BoletoAgencia 				= corinthias("checkout_boletocaixasigcb","cefagencia");
$BoletoConta 				= corinthias("checkout_boletocaixasigcb","cefconta");
$sss = corinthias("checkout_boletocaixasigcb","cefcontac");
$BoletoContaDV = corinthias("checkout_boletocaixasigcb","cefcontadv");
$BoletoCedenteDocumento 	= corinthias("checkout_boletocaixasigcb","cefcpfcnpj");
$BoletoCedente 				= corinthias("checkout_boletocaixasigcb","cefcedente");
$BoletoCidade 	= corinthias("checkout_boletocaixasigcb","cefcidade");
$BoletoEnd 	= corinthias("checkout_boletocaixasigcb","cefend");
$BoletoDesc  = corinthias("checkout_boletocaixasigcb","desconto");

if($BoletoDesc > 0){
$valor_desconto = ($valorBoleto/100)*$BoletoDesc;
$valorBoleto =number_format($valorBoleto-$valor_desconto, 2, ',', '');
}

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = $BoletodiasVencimento;
$taxa_boleto =$BoletoTaxa;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$valor_cobrado = "$valorBoleto"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

// Composição Nosso Numero - CEF SIGCB
$dadosboleto["nosso_numero1"] = "000"; // tamanho 3
$dadosboleto["nosso_numero_const1"] = "2"; //constanto 1 , 1=registrada , 2=sem registro
$dadosboleto["nosso_numero2"] = "000"; // tamanho 3
$dadosboleto["nosso_numero_const2"] = "4"; //constanto 2 , 4=emitido pelo proprio cliente
$dadosboleto["nosso_numero3"] = $itemId.date('m'); // tamanho 9


$dadosboleto["numero_documento"] = $itemId;	// Num do pedido ou do documento
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $sacadoBoleto;
$dadosboleto["endereco1"] = $enderecoBoleto;
$dadosboleto["endereco2"] = "";

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = $BoletoDemoU;
$dadosboleto["demonstrativo2"] = $BoletoDemoD;
$dadosboleto["demonstrativo3"] = $BoletoDemoT;

// INSTRUÇÕES PARA O CAIXA
$dadosboleto["instrucoes1"] = $BoletoInstrucaoU;
$dadosboleto["instrucoes2"] = $BoletoInstrucaoD;
$dadosboleto["instrucoes3"] = $BoletoInstrucaoT;
$dadosboleto["instrucoes4"] = $BoletoInstrucaoQ;

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "";


// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - CEF
$dadosboleto["agencia"] = $BoletoAgencia; // Num da agencia, sem digito
$dadosboleto["conta"] = $BoletoConta; 	// Num da conta, sem digito
$dadosboleto["conta_dv"] = $BoletoContaDV; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - CEF
$dadosboleto["conta_cedente"] = $sss; // Código Cedente do Cliente, com 6 digitos (Somente Números)
$dadosboleto["carteira"] = "SR";  // Código da Carteira: pode ser SR (Sem Registro) ou CR (Com Registro) - (Confirmar com gerente qual usar)

// SEUS DADOS
$dadosboleto["identificacao"] = "Boleto Caixa";
$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
$dadosboleto["endereco"] = $BoletoEnd;
$dadosboleto["cidade_uf"] = $BoletoCidade;
$dadosboleto["cedente"] = $BoletoCedente;

// NÃO ALTERAR!
include("include/funcoes_cef_sigcb.php"); 
include("include/layout_cef.php");
?>
