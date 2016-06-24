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
$BoletodiasVencimento		= Modulo("checkout_boletobancodobrasil","boletobancodobrasildiasparavencimento");
$BoletoCedenteDocumento 	= Modulo("checkout_boletobancodobrasil","boletobancodobrasilcpfcnpj");
$BoletoEspecie 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilespecie");
$BoletoEspecieDoc 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilespeciedoc");
$BoletoAceite 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilaceite");
$BoletoInstrucaoU 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilinstrucaoum");
$BoletoInstrucaoD 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilinstrucaodois");
$BoletoInstrucaoT 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilinstrucaotres");
$BoletoInstrucaoQ 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilinstrucaoquatro");
$BoletoDemoU 				= Modulo("checkout_boletobancodobrasil","demoum");
$BoletoDemoD 				= Modulo("checkout_boletobancodobrasil","demodois");
$BoletoDemoT 				= Modulo("checkout_boletobancodobrasil","demotres");
$BoletoCedente 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilcedente");
$BoletoCarteira 			= Modulo("checkout_boletobancodobrasil","boletobancodobrasilcarteira");
$BoletoAgencia 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilagencia");
$BoletoConta 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilconta");

$BoletoNosso 				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilnosso");

$BoletoConvenio				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilconvenio");
$BoletoContrato				= Modulo("checkout_boletobancodobrasil","boletobancodobrasilcontrato");
$BoletoVC 					= Modulo("checkout_boletobancodobrasil","boletobancodobrasilvariacaocarteira");
$BoletoFC 					= Modulo("checkout_boletobancodobrasil","boletobancodobrasilformatacaoconvenio");
$BoletoFNN 					= Modulo("checkout_boletobancodobrasil","boletobancodobrasilformatacaonossonumero");

$valorBoleto = $fetch_order['total_inc_tax'];
$sacadoBoleto = $fetch_order['ordbillfirstname']." ".$fetch_order['ordbilllastname'];
$enderecoBoleto = $fetch_order['ordbillstreet1']." - ".$fetch_order['ordbillsuburb']." - ".$fetch_order['ordbillstate'].", CEP: ".$fetch_order['ordbillzip'];

$prazo = $BoletodiasVencimento;

$BoletoDesc  = Modulo("checkout_boletobancodobrasil","desconto");
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

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $sacadoBoleto;
$dadosboleto["endereco1"] = $enderecoBoleto;

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = $BoletoDemoU;
$dadosboleto["demonstrativo2"] = $BoletoDemoD;
$dadosboleto["demonstrativo3"] = $BoletoDemoT;
$dadosboleto["instrucoes1"] = $BoletoInstrucaoU;
$dadosboleto["instrucoes2"] = $BoletoInstrucaoD;
$dadosboleto["instrucoes3"] = $BoletoInstrucaoT;
$dadosboleto["instrucoes4"] = $BoletoInstrucaoQ;

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "N";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DM";

// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //

// DADOS DA SUA CONTA - BANCO DO BRASIL
$dadosboleto["agencia"] = $BoletoAgencia;
$dadosboleto["conta"] = $BoletoConta;

// DADOS PERSONALIZADOS - BANCO DO BRASIL
$dadosboleto["convenio"] = $BoletoConvenio;
$dadosboleto["contrato"] = $BoletoContrato;
$dadosboleto["carteira"] = "18";
$dadosboleto["variacao_carteira"] = "-019";  // Variação da Carteira, com traço (opcional)

// TIPO DO BOLETO
$dadosboleto["formatacao_convenio"] = strlen($BoletoConvenio); // REGRA: 8 p/ Convênio c/ 8 dígitos, 7 p/ Convênio c/ 7 dígitos, ou 6 se Convênio c/ 6 dígitos
$dadosboleto["formatacao_nosso_numero"] = "2"; // REGRA: Usado apenas p/ Convênio c/ 6 dígitos: informe 1 se for NossoNúmero de até 5 dígitos ou 2 para opção de até 17 dígitos


/*
#################################################
DESENVOLVIDO PARA CARTEIRA 18

- Carteira 18 com Convenio de 8 digitos
  Nosso número: pode ser até 9 dígitos

- Carteira 18 com Convenio de 7 digitos
  Nosso número: pode ser até 10 dígitos

- Carteira 18 com Convenio de 6 digitos
  Nosso número:
  de 1 a 99999 para opção de até 5 dígitos
  de 1 a 99999999999999999 para opção de até 17 dígitos

#################################################
*/

// SEUS DADOS
$dadosboleto["identificacao"] = "Banco do Brasil";
$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
$dadosboleto["cedente"] = $BoletoCedente;
$dadosboleto["endereco"] = "";
$dadosboleto["cidade_uf"] = "";

// NÃO ALTERAR!
include("include/funcoes_bb.php"); 
include("include/layout_bb.php");
?>
