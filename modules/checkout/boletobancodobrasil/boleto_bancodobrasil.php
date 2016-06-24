<?php

/*
	Modulo de Pagamento Boleto Bancario Bradesco
	Ultimo Release: 02/08/2014
*/

global $itemId; // Define variavel global
$itemId = $_GET['boleto']; // Atribui valor a variavel global

if(empty($itemId)){die('Pedido invalido!');}

include "dados.php"; // Inclui arquivo de vincula��o

// Pega as variaveis do m�dulo
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

// ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //

// DADOS DA SUA CONTA - BANCO DO BRASIL
$dadosboleto["agencia"] = $BoletoAgencia;
$dadosboleto["conta"] = $BoletoConta;

// DADOS PERSONALIZADOS - BANCO DO BRASIL
$dadosboleto["convenio"] = $BoletoConvenio;
$dadosboleto["contrato"] = $BoletoContrato;
$dadosboleto["carteira"] = "18";
$dadosboleto["variacao_carteira"] = "-019";  // Varia��o da Carteira, com tra�o (opcional)

// TIPO DO BOLETO
$dadosboleto["formatacao_convenio"] = strlen($BoletoConvenio); // REGRA: 8 p/ Conv�nio c/ 8 d�gitos, 7 p/ Conv�nio c/ 7 d�gitos, ou 6 se Conv�nio c/ 6 d�gitos
$dadosboleto["formatacao_nosso_numero"] = "2"; // REGRA: Usado apenas p/ Conv�nio c/ 6 d�gitos: informe 1 se for NossoN�mero de at� 5 d�gitos ou 2 para op��o de at� 17 d�gitos


/*
#################################################
DESENVOLVIDO PARA CARTEIRA 18

- Carteira 18 com Convenio de 8 digitos
  Nosso n�mero: pode ser at� 9 d�gitos

- Carteira 18 com Convenio de 7 digitos
  Nosso n�mero: pode ser at� 10 d�gitos

- Carteira 18 com Convenio de 6 digitos
  Nosso n�mero:
  de 1 a 99999 para op��o de at� 5 d�gitos
  de 1 a 99999999999999999 para op��o de at� 17 d�gitos

#################################################
*/

// SEUS DADOS
$dadosboleto["identificacao"] = "Banco do Brasil";
$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
$dadosboleto["cedente"] = $BoletoCedente;
$dadosboleto["endereco"] = "";
$dadosboleto["cidade_uf"] = "";

// N�O ALTERAR!
include("include/funcoes_bb.php"); 
include("include/layout_bb.php");
?>
