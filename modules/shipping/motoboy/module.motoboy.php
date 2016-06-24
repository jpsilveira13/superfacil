<?php

class SHIPPING_MOTOBOY extends ISC_SHIPPING
{
	function SHIPPING_MOTOBOY()
	{
	parent::__construct();
		$this->_name = "Motoboy";
		$this->_image = "motoboy.jpg";
		$this->_description = "O Produto será enviado pelo motoboy";
		$this->_help = "M";
		$this->_enabled = $this->CheckEnabled();
		$this->_countries = array("all");
		$this->_showtestlink = false;
	}

	public function SetCustomVars()
	{
		$this->_variables['displayname'] = array(
			'name' => 'Nome do Módulo',
			'type' => 'textbox',
			'help' => 'Modulo de Entrega em domicilio.',
			'default' => 'Entrega pelo Motoboy',
			'savedvalue' => array(),
			'required' => true
		);

		$this->_variables['valorentrega'] = array(
			'name' => 'Valor do Frete',
			'type' => 'textbox',
			'help' => 'Valor da entrega.',
			'default' => '0',
			'required' => true
		);

       $this->_variables['prazo'] = array(
			'name' => 'Prazo entrega',
			'type' => 'textbox',
			'help' => 'Prazo da entrega.',
			'default' => '7',
			'required' => true
		);
	}

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

	function GetQuote()
	{
		$this->_shippingcost = $this->GetValue("valorentrega");
		$fr_quote = new ISC_SHIPPING_QUOTE($this->GetId(), $this->GetValue("displayname"), $this->_shippingcost,$this->GetValue("prazo") );
	 	return $fr_quote;
	}
}
?>