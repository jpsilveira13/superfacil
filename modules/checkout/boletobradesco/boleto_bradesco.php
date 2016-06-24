<?php

/*
	Modulo de Pagamento Boleto Bancario Bradesco
	Ultimo Release: 02/08/2014
*/

global $itemId; // Define variavel global
$itemId = $_GET['boleto']; // Atribui valor a variavel global

if(empty($itemId)){die('Pedido invalido!');}

include "dados.php"; // Inclui arquivo de vinculação

// Pega as variaveis do módulo
$BoletodiasVencimento		= Modulo("checkout_boletobradesco","boletobradescodiasparavencimento");
$BoletoCedenteDocumento 	= Modulo("checkout_boletobradesco","boletobradescocpfcnpj");
$BoletoEspecie 				= Modulo("checkout_boletobradesco","boletobradescoespecie");
$BoletoEspecieDoc 			= Modulo("checkout_boletobradesco","boletobradescoespeciedoc");
$BoletoAceite 				= Modulo("checkout_boletobradesco","boletobradescoaceite");
$BoletoInstrucaoU 			= Modulo("checkout_boletobradesco","boletobradescoinstrucaoum");
$BoletoInstrucaoD 			= Modulo("checkout_boletobradesco","boletobradescoinstrucaodois");
$BoletoInstrucaoT 			= Modulo("checkout_boletobradesco","boletobradescoinstrucaotres");
$BoletoInstrucaoQ 			= Modulo("checkout_boletobradesco","boletobradescoinstrucaoquatro");
$BoletoDemoU 				= Modulo("checkout_boletobradesco","demoum");
$BoletoDemoD 				= Modulo("checkout_boletobradesco","demodois");
$BoletoDemoT 				= Modulo("checkout_boletobradesco","demotres");
$BoletoCedente 				= Modulo("checkout_boletobradesco","boletobradescocedente");
$BoletoCarteira 			= Modulo("checkout_boletobradesco","boletobradescocarteira");
$BoletoAgencia 				= Modulo("checkout_boletobradesco","boletobradescoagencia");
$BoletoConta 				= Modulo("checkout_boletobradesco","boletobradescoconta");
$BoletoDVC 					= Modulo("checkout_boletobradesco","boletobradescocontadv");
$BoletoDVA 					= Modulo("checkout_boletobradesco","boletobradescoagenciadv");

// Pega informações do cliente
$valorBoleto = $fetch_order['total_inc_tax'];
$sacadoBoleto = $fetch_order['ordbillfirstname']." ".$fetch_order['ordbilllastname'];
$enderecoBoleto = $fetch_order['ordbillstreet1']." - ".$fetch_order['ordbillsuburb']." - ".$fetch_order['ordbillstate'].", CEP: ".$fetch_order['ordbillzip'];
$prazo = $BoletodiasVencimento;

// Verifica e atribui desconto ao valor do boleto
$BoletoDesc  = Modulo("checkout_boletobradesco","desconto");
if($BoletoDesc > 0){
	$valor_desconto = ($valorBoleto/100)*$BoletoDesc;
	$valorBoleto =number_format($valorBoleto-$valor_desconto, 2, ',', '');
}

$data_venc = date("d/m/Y", time() + ($prazo * 86400)); 
$valor_cobrado = $valorBoleto;
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado, 2, ',', '');

$dadosboleto["nosso_numero"] = $itemId.date('m');
$dadosboleto["numero_documento"] = $itemId;
$dadosboleto["data_vencimento"] = $data_venc;

$dadosboleto["data_documento"] = date("d/m/Y");
$dadosboleto["data_processamento"] = date("d/m/Y");
$dadosboleto["valor_boleto"] = $valor_boleto;

// Pega os dados do cliente
$dadosboleto["sacado"] = $sacadoBoleto;
$dadosboleto["endereco1"] = $enderecoBoleto;

// Informações da loja para o cliente
$dadosboleto["demonstrativo1"] = $BoletoDemoU;
$dadosboleto["demonstrativo2"] = $BoletoDemoD;
$dadosboleto["demonstrativo3"] = $BoletoDemoT;
$dadosboleto["instrucoes1"] = $BoletoInstrucaoU;
$dadosboleto["instrucoes2"] = $BoletoInstrucaoD;
$dadosboleto["instrucoes3"] = $BoletoInstrucaoT;
$dadosboleto["instrucoes4"] = $BoletoInstrucaoQ;

// Dados opcionais para o cliente ou para o banco
$dadosboleto["quantidade"] = "001";
$dadosboleto["valor_unitario"] = $valor_boleto;
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DS";

// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //

// DADOS DA SUA CONTA - Bradesco
$dadosboleto["agencia"] = $BoletoAgencia;
$dadosboleto["conta"] = $BoletoConta;
$dadosboleto["agencia_dv"] = $BoletoDVA; // Digito do Num da agencia
$dadosboleto["conta_dv"] = $BoletoDVC; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - Bradesco
$dadosboleto["conta_cedente"] = $BoletoConta; // ContaCedente do Cliente, sem digito (Somente Números)
$dadosboleto["conta_cedente_dv"] = $BoletoDVC; // Digito da ContaCedente do Cliente
$dadosboleto["carteira"] = $BoletoCarteira;

// SEUS DADOS
$dadosboleto["identificacao"] = "Boleto Bradesco";
$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
$dadosboleto["endereco"] = "";
$dadosboleto["cidade_uf"] = "";
$dadosboleto["cedente"] = $BoletoCedente;

// NÃO ALTERAR!
include("include/funcoes_bradesco.php"); 
include("include/layout_bradesco.php");
?>
