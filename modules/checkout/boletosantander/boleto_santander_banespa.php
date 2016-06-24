<?php

/*
	Modulo de Pagamento Boleto Bancario Santander
	Ultimo Release: 02/08/2014
*/
	// Recupera ID do produto
	global $itemId;
	$itemId = (int) $_GET['boleto'];

	if(empty($itemId)){
		die('Pedido invalido!');
	}

	// Inclui arquivo de manipulaзгo do Boleto
	include "dados.php";

	// Recupera informacoes do modulo
	$BoletodiasVencimento = Modulo("checkout_boletosantander","boletosantanderdias");
	$BoletoTaxa = Modulo("checkout_boletosantander","boletosantandertaxa");
	$BoletoCedenteDocumento = Modulo("checkout_boletosantander","boletosantandercpfcnpj");
	$BoletoCedente = Modulo("checkout_boletosantander","boletosantandercedente");
	$BoletoCodCedente = Modulo("checkout_boletosantander","boletosantandercodced");
	$BoletoCodCedenteAgencia = Modulo("checkout_boletosantander","boletosantanderagencia");
	$BoletoInstrucaoU = Modulo("checkout_boletosantander","boletosantanderinstrucaoum");
	$BoletoInstrucaoD = Modulo("checkout_boletosantander","boletosantanderinstrucaodois");
	$BoletoInstrucaoT = Modulo("checkout_boletosantander","boletosantanderinstrucaotres");
	$BoletoInstrucaoQ = Modulo("checkout_boletosantander","boletosantanderinstrucaoquatro");
	$BoletoDemoU = Modulo("checkout_boletosantander","demoum");
	$BoletoDemoD = Modulo("checkout_boletosantander","demodois");
	$BoletoDemoT = Modulo("checkout_boletosantander","demotres");
	$valorBoleto = $fetch_order['total_inc_tax'];
	$sacadoBoleto = $fetch_order['ordbillfirstname']." ".$fetch_order['ordbilllastname'];
	$enderecoBoleto = $fetch_order['ordbillstreet1']." - ".$fetch_order['ordbillsuburb']." - ".$fetch_order['ordbillstate'].", CEP: ".$fetch_order['ordbillzip'];
	$BoletoDesc  = Modulo("checkout_boletosantander","desconto");

	// Calcula desconto
	if($BoletoDesc > 0){
		$valor_desconto = ($valorBoleto/100)*$BoletoDesc;
		$valorBoleto =number_format($valorBoleto-$valor_desconto, 2, ',', '');
	}

	$dias_de_prazo_para_pagamento = $BoletodiasVencimento;
	$taxa_boleto = $BoletoTaxa;
	$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
	$valor_cobrado = "$valorBoleto"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
	$valor_cobrado = str_replace(",", ".",$valor_cobrado);
	$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');
	$dadosboleto["nosso_numero"] = $itemId;  // Nosso numero sem o DV - REGRA: Mбximo de 7 caracteres!
	if(strlen($itemId)>7){
		$dadosboleto["nosso_numero"] = substr($itemId,0,7);
	}
	$dadosboleto["numero_documento"] = $itemId;	// Num do pedido ou nosso numero
	$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
	$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissгo do Boleto
	$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
	$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vнrgula e sempre com duas casas depois da virgula

	// DADOS DO SEU CLIENTE
	$dadosboleto["sacado"] = $sacadoBoleto;
	$dadosboleto["endereco1"] = "";
	$dadosboleto["endereco2"] = $enderecoBoleto;

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
	$dadosboleto["aceite"] = "";		
	$dadosboleto["especie"] = "R$";
	$dadosboleto["especie_doc"] = "";

	// DADOS PERSONALIZADOS - SANTANDER BANESPA
	$dadosboleto["codigo_cliente"] = $BoletoCodCedente; // Cуdigo do Cliente (PSK) (Somente 7 digitos)
	$dadosboleto["ponto_venda"] = $BoletoCodCedenteAgencia; // Ponto de Venda = Agencia
	$dadosboleto["carteira"] = "102";  // Cobranзa Simples - SEM Registro
	$dadosboleto["carteira_descricao"] = "COBRANЗA SIMPLES - CSR";  // Descriзгo da Carteira

	// SEUS DADOS
	$dadosboleto["identificacao"] = "Boleto Online Santander";
	$dadosboleto["cpf_cnpj"] = $BoletoCedenteDocumento;
	$dadosboleto["endereco"] = "";
	$dadosboleto["cidade_uf"] = "";
	$dadosboleto["cedente"] = $BoletoCedente;

	// NГO ALTERAR!
	include("include/funcoes_santander_banespa.php"); 
	include("include/layout_santander_banespa.php");
?>