<?php

/*
	Modulo de Pagamento Boleto Bancario Caixa Economica Federal Simples (SICOB)
	Ultimo Release: 02/08/2014
*/

include "../../../init.php";  // Inclui arquivo de vinculação

// Conecta ao banco de dados
$db->Connect(Serverdecode(GetConfig("dbServer")), Serverdecode(GetConfig("dbUser")), Serverdecode(GetConfig("dbPass")), Serverdecode(GetConfig("dbDatabase")));
$prefixotabela = GetConfig("tablePrefix");

// Função para pegar as informações do modulo
function Modulo($modulo, $alvo){
	$prefixotabela = GetConfig("tablePrefix");
	$SCBoleto = mysql_query("select * from ".$prefixotabela."module_vars where modulename='$modulo' and variablename='$alvo'") or print(mysql_error());
	$ftM = mysql_fetch_array($SCBoleto);
	return $ftM['variableval'];
}

// Função para pegar as informações do cliente
function Formulario($valor){
	$prefixotabela = GetConfig("tablePrefix");
	$form = mysql_query("select * from ".$prefixotabela."formfieldsessions where formfieldsessioniformsessionid='$valor' and formfieldfieldlabel ='CPF'") or print(mysql_error());
	$dados = mysql_fetch_array($form);
	$var = explode('"',$dados[formfieldfieldvalue]);
	return $var[1];
}


// Pega informações do pedido
$selectorder = mysql_query("select * from ".$prefixotabela."orders where orderid='".$itemId."'") or print(mysql_error());
$fetch_order = mysql_fetch_array($selectorder);
$clientecustomer = $fetch_order['ordcustid'];

// Pega informações do cliente
$selectcustomer = mysql_query("select * from ".$prefixotabela."customers where customerid='".$clientecustomer."'") or print(mysql_error());
$fetch_customer = mysql_fetch_array($selectcustomer);

?>