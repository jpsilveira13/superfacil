<?php

class SHIPPING_JADLOG extends ISC_SHIPPING
{
///////////////////////////////////////////////


		var $_shipclasses = array();
		var $_carriers = array();			
		


function SHIPPING_JADLOG(){
			parent::__construct();
			$this->_name = "Jadlog Transportadora";
			$this->_image = "sedex.gif";
			$this->_description = "Modulo de Envio por Transportadora Jadlog";
			$this->_help = "Modulo de Envio por Transportadora Jadlog";
			$this->_enabled = $this->CheckEnabled();
			$this->_countries = array("all");
			$this->_showtestlink = false;
}
//////////////////////////////////////////////
public function SetCustomVars()
{
/*
'       0 STANDARD
'       3 .PACKAGE
'       4 RODOVIARIO
'       5 ECONOMICO
'       6 DOC
'       7 CORPORATE
'       9 .COM
'       10 INTERNACIONAL
'       12 CARGO
'       14 EMERGENCIAL
*/
	    $this->_variables['displayname'] = array(
		'name'			=> 'Nome',
		'type'		=> 'textbox',
		'help'		=> 'Modulo de Envio por Transportadora.',
		'default'	=> 'Transportadora Jadlog',
		'savedvalue'=> array(),
		'required'	=> true);
		
		$this->_variables['senha'] = array(
		'name'			=> 'Senha Jadlog',
		'type'		=> 'textbox',
		'help'		=> 'Senha da Empresa de Transporte.',
		'default'	=> 'SENHA',
		'required'	=> true);
		
		$this->_variables['tarifa'] = array(
		'name'			=> 'Taxa de Coleto',
		'type'		=> 'textbox',
		'help'		=> 'Taxa de Coleta da Empresa de Transporte.',
		'default'	=> '00.00',
		'required'	=> true);
		
		$this->_variables['cnpj'] = array(
		'name'			=> 'CNPJ',
		'type'		=> 'textbox',
		'help'		=> 'Ponha o CNPJ da Empresa.',
		'default'	=> '00000000000000',
		'required'	=> true);
		
		$this->_variables['prazo'] = array(
		'name'			=> 'Prazo Max. Dias',
		'type'		=> 'textbox',
		'help'		=> '',
		'default'	=> '10',
		'required'	=> true);
		
		$this->_variables['cep'] = array(
		'name'			=> 'CEP Origem',
		'type'		=> 'textbox',
		'help'		=> 'CEP de Origem.',
		'default'	=> '00000000',
		'required'	=> true);
		
		$this->_variables['modalidade'] = array("name" => 'Modalidade',
			   "type" => "dropdown",
			   "help" => 'Pacote de entrega usado.',
			   "default" => "5",
			   "required" => true,
			   "options" => array('Standard' => '0',
							  'Package' => '3',
							  'Rodoviario' => '4',
							  'Economico' => '5',
							  'DOC' => '6',
							  'Corporate' => '7',
							  'Cargo' => '12',
				),
				"multiselect" => false
		);
		
		$this->_variables['seguro'] = array("name" => 'Seguro',
			   "type" => "dropdown",
			   "help" => 'seguro de entrega usado.',
			   "default" => "N",
			   "required" => true,
			   "options" => array('Normal' => 'N',
							  'Proprio' => 'A'
				),
				"multiselect" => false
		);
		
		$this->_variables['entrega'] = array("name" => 'Entrega',
			   "type" => "dropdown",
			   "help" => 'forma de entrega usado.',
			   "default" => "D",
			   "required" => true,
			   "options" => array('Domicilio' => 'D',
							  'Retirada' => 'R',
				),
				"multiselect" => false
		);
		
		$this->_variables['pagar'] = array("name" => 'Pagar no Destino',
			   "type" => "dropdown",
			   "help" => 'Pacote de entrega usado.',
			   "default" => "N",
			   "required" => true,
			   "options" => array('Sim' => 'S',
							  'Nao' => 'N',
				),
				"multiselect" => false
		);
		

}
/////////////////////////////////
function GetServiceQuotes()
{
	$QuoteList = array();
	$services = "Sedex";
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
function GetQuote()
{
$total = 0;
if (isset($_SESSION['CART']['ITEMS'])) {
foreach ($_SESSION['CART']['ITEMS'] as $item) {
$total += $item['product_price'] * $item['quantity'];
}
}
$peso = number_format(max(ConvertWeight($this->_weight, 'kgs'), 0.1), 1);
$total = str_replace('.',',',$total);
$nome = $this->GetValue("displayname");
$prazo = $this->GetValue("prazo");
$senha = $this->GetValue("senha");
$cnpj = $this->GetValue("cnpj");
$ceporigem = $this->GetValue("cep");
$ceporigem = str_replace("-","",$ceporigem);
$modalidade = $this->GetValue("modalidade");
$seguro = $this->GetValue("seguro");
$entrega = $this->GetValue("entrega");
$pagar = $this->GetValue("pagar");
$tarifa = $this->GetValue("tarifa");
//cep destino
$destino = $this->_destination_zip;
$destino = str_replace("-","",$destino);
$dimensions = $this->getcombinedshipdimensions();
$lar = $dimensions['width'];
$com = $dimensions['length'];
$alt = $dimensions['height'];
$url ='http://jadlog.com.br/JadlogWebService/services/ValorFreteBean?method=valorar&vModalidade='.$modalidade.'&Password='.$senha.'&vSeguro='.$seguro.'&vVlDec='.$total.'&vVlColeta='.$tarifa.'&vCepOrig='.$ceporigem.'&vCepDest='.$destino.'&vPeso='.$peso.'&vAltura='.$alt.'&vLargura='.$lar.'&vProfudidade='.$com.'&vFrap='.$pagar.'&vEntrega='.$entrega.'&vCnpj='.$cnpj.'';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 2);
$html = curl_exec ($ch);
curl_close ($ch);
$html = str_replace('&lt;Retorno&gt;','<Retorno>',$html);
$html = str_replace('&lt;/Retorno&gt;','</Retorno>',$html);
$html = str_replace(',','.',$html);
$html = explode('<Retorno>', $html);
$html2 = explode('</Retorno>', $html[1]);
$val = $html2[0];
if($val > "0") {
$fr_quote = new ISC_SHIPPING_QUOTE($this->GetId(), $nome, $val, '', $prazo);
return $fr_quote;
} else {
return false;
}

}
/////////////////////////////////////////////


public function GetAvailableDeliveryMethods()
		{
			$methods = array();

			$this->SetCustomVars();

			$shipClasses = $this->GetValue("shipclasses");
			$carriers = $this->GetValue('carriers');

			if(!is_array($shipClasses) && $shipClasses != "") {
				$shipClasses = array($shipClasses);
			}

			foreach($carriers as $carrier) {
				foreach ($shipClasses as $class) {
					$methods[] = array_search($carrier, $this->_variables['carriers']['options']).' '.array_search($class, $this->_variables['shipclasses']['options']);
				}
			}

			return $methods;
		}
	



}
?>
