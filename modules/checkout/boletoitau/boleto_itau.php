<?php

/*
	Modulo de Pagamento Boleto Bancario Itaú
	Ultimo Release: 02/08/2014
*/

	// Recupera ID do produto
	global $itemId;
	$itemId = (int) $_GET['boleto'];

	if(empty($itemId)){
		die('Pedido invalido!');
	}

	// Inclui arquivo de manipulação do Boleto
	include "dados.php";

	// Recupera informacoes do modulo
	$BoletodiasVencimento = fecthModule("checkout_boletoitau","boletoitaudiasparavencimento");
	$BoletoCedenteDocumento = fecthModule("checkout_boletoitau","boletoitaucpfcnpj");
	$BoletoTaxa = fecthModule("checkout_boletoitau","boletoitautaxa");
	$BoletoInstrucaoU = fecthModule("checkout_boletoitau","boletoitauinstrucaoum");
	$BoletoInstrucaoD = fecthModule("checkout_boletoitau","boletoitauinstrucaodois");
	$BoletoInstrucaoT = fecthModule("checkout_boletoitau","boletoitauinstrucaotres");
	$BoletoInstrucaoQ = fecthModule("checkout_boletoitau","boletoitauinstrucaoquatro");
	$BoletoDemoU = fecthModule("checkout_boletoitau","demoum");
	$BoletoDesc = fecthModule("checkout_boletoitau","desconto");
	$BoletoDemoD = fecthModule("checkout_boletoitau","demodois");
	$BoletoDemoT = fecthModule("checkout_boletoitau","demotres");
	$BoletoCedente = fecthModule("checkout_boletoitau","boletoitaucedente");
	$BoletoCarteira = fecthModule("checkout_boletoitau","boletoitaucarteira");
	$BoletoAgencia = fecthModule("checkout_boletoitau","boletoitauagencia");
	$BoletoConta = fecthModule("checkout_boletoitau","boletoitauconta");
	$BoletoDV = fecthModule("checkout_boletoitau","boletoitaudv");

	// Recupera informacoes do valor do Boleto
	$valorBoleto = $fetch_order['total_inc_tax'];
	$sacadoBoleto = $fetch_order['ordbillfirstname']." ".$fetch_order['ordbilllastname'];
	$enderecoBoleto = $fetch_order['ordbillstreet1']." - ".$fetch_order['ordbillsuburb']." - ".$fetch_order['ordbillstate'].", CEP: ".$fetch_order['ordbillzip'];

	// Calcula desconto
	if($BoletoDesc > 0){
		$valor_desconto = ($valorBoleto/100)*$BoletoDesc;
		$valorBoleto = number_format($valorBoleto-$valor_desconto, 2, ',', '');
	}

	// Informacoes do valor presente no Boleto
	$dias_de_prazo_para_pagamento = $BoletodiasVencimento;
	$taxa_boleto = $BoletoTaxa;
	$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
	$valor_cobrado = "$valorBoleto"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
	$valor_cobrado = str_replace(",", ".",$valor_cobrado);
	$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

	// Informacoes do Boleto
	$dadosboleto["nosso_numero"] = $itemId.date('m');  // Nosso numero - REGRA: Máximo de 8 caracteres!
	$dadosboleto["numero_documento"] = $itemId;	// Num do pedido ou nosso numero
	$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
	$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
	$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
	$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

	// Informacoes do cliente presente no Boleto
	$dadosboleto["sacado"] = $sacadoBoleto;
	$dadosboleto["endereco1"] = $enderecoBoleto;
	$dadosboleto["endereco2"] = "";
	$dadosboleto["demonstrativo1"] = $BoletoDemoU;
	$dadosboleto["demonstrativo2"] = $BoletoDemoD;
	$dadosboleto["demonstrativo3"] = $BoletoDemoT;
	$dadosboleto["instrucoes1"] = $BoletoInstrucaoU;
	$dadosboleto["instrucoes2"] = $BoletoInstrucaoD;
	$dadosboleto["instrucoes3"] = $BoletoInstrucaoT;
	$dadosboleto["instrucoes4"] = $BoletoInstrucaoQ;

	// Informacoes Opcionais do cliente presente no Boleto
	$dadosboleto["quantidade"] = "";
	$dadosboleto["valor_unitario"] = "";
	$dadosboleto["aceite"] = "";		
	$dadosboleto["especie"] = "R$";
	$dadosboleto["especie_doc"] = "";

	// Dados da conta da loja
	$dadosboleto["agencia"] = $BoletoAgencia;
	$dadosboleto["conta"] = $BoletoConta;
	$dadosboleto["conta_dv"] = $BoletoDV; 	// Digito do numero da conta
	$dadosboleto["carteira"] = $BoletoCarteira;  // Código da Carteira: pode ser 175, 174, 104, 109, 178, ou 157

	// Dados da Loja
	$dadosboleto["endereco"] = "";
	$dadosboleto["cidade_uf"] = "";
	$dadosboleto["identificacao"] = "Boleto Itaú";
	$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
	$dadosboleto["cedente"] = $BoletoCedente;

	// Inclui arquivos para processamento do Boleto
	include("include/funcoes_itau.php"); 
	include("include/layout_itau.php");
?>