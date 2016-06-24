<?php

class SHIPPING_RETIRARLOJA extends ISC_SHIPPING
{
///////////////////////////////////////////////
			function SHIPPING_RETIRARLOJA(){
			parent::__construct();
			$this->_name = "Retirar na loja";
			$this->_image = "transportax.gif";
			$this->_description = "O Produto &eacute; retirar na loja";
			$this->_help = "Modulo de retirar pedido na loja";
			$this->_enabled = $this->CheckEnabled();
			$this->_countries = array("all");
			$this->_showtestlink = false;
}
//////////////////////////////////////////////
public function SetCustomVars()
{
	$this->_variables['displayname'] = array(
		'name'			=> 'Retirar na Loja.',
		'type'		=> 'textbox',
		'help'		=> 'Modulo de Retirar na Loja.',
		'default'	=> $this->GetName(),
		'savedvalue'	=> array(),
		'required'	=> true);

	$this->_variables['valorentrega'] = array(
		'name'			=> 'Taxa de Retirada',
		'type'		=> 'textbox',
		'help'		=> 'Normalmente deixe 0.00.',
		'default'	=> '0.00',
		'required'	=> true);



}
/////////////////////////////////
function GetServiceQuotes()
{
	$QuoteList = array();
	$services = "Motoboy";
	if(!is_array($services) && $services != "") {
		$services = array($services);
	}
	foreach($services as $service) {
		// Set the service type
		$this->_deliverytype = $service;

		// Next actually retrieve the quote
		$result = $this->GetQuote();

		// Was it a valid quote?
		if(is_object($result)) {
			$QuoteList[] = $result;
		// Invalid quote, log the error
		} else {
			foreach($this->GetErrors() as $error) {
				$GLOBALS['ISC_CLASS_LOG']->LogSystemError(array('shipping', $this->_name), $this->_deliverytypes[$delivery_type].": " .GetLang('ShippingQuoteError'), $error);
			}
			$this->ResetErrors();
		}
	}
	return $QuoteList;
}
//////////////////////////////////////////////
function GetQuote(){

$this->_shippingcost = $this->GetValue("valorentrega");

	$fr_quote = new ISC_SHIPPING_QUOTE($this->GetId(), $this->GetValue("displayname"), $this->_shippingcost, '');
 	return $fr_quote;


}
/////////////////////////////////////////////
}
?>
