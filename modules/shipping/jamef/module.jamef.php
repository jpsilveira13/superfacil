<?php

	class SHIPPING_JAMEF extends ISC_SHIPPING
	{
		function SHIPPING_JAMEF()
		{
			parent::__construct();
			$this->_name = "Jamef Transportadora";
			$this->_image = "jamef.jpg";
			$this->_description = "Modulo de Envio por Transportadora Jamef";
			$this->_help = "Modulo de Envio por Transportadora Jamef";
			$this->_enabled = $this->CheckEnabled();
			$this->_countries = array("all");
			$this->_showtestlink = false;
		}

		public function SetCustomVars()
		{
		    $this->_variables['displayname'] = array(
				'name' => 'Nome',
				'type' => 'textbox',
				'help' => 'Modulo de Envio por Transportadora.',
				'default' => 'Transportadora Jamef',
				'savedvalue' => array(),
				'required' => true
			);

			$this->_variables['cnpj'] = array(
				'name' => 'CNPJ do Cliente (Apenas Numeros)',
				'type' => 'textbox',
				'help' => 'CNPJ do cliente que ira usar a transportadora.',
				'default' => '',
				'required' => true
			);

			$this->_variables['regional'] = array(
			    'name' => 'Regiao de Origem (ver codigos no pdf jamef)',
				'type' => 'textbox',
				'help' => 'Regiao do Cliente.',
				'default' => '',
			    'required'	=> true
			);

			$this->_variables['uf'] = array(
				'name' => 'UF de Origem',
				'type' => 'textbox',
				'help' => 'UF de Origem das Mercadorias de acordo com a Regiao do Cliente.',
				'default' => 'SP',
				'required' => true
			);

			$this->_variables['prazo'] = array(
				'name' => 'Prazo em dias',
				'type' => 'textbox',
				'help' => 'Prazo de envio maximo em dias.',
				'default' => '10',
				'required' => true
			);
		}

		function GetServiceQuotes()
		{
			$QuoteList = array();
			$services = "Sedex";
			if(!is_array($services) && $services != "")
			{
				$services = array($services);
			}
			
			foreach($services as $service)
			{
				// Set the service type
				$this->_deliverytype = $service;

				// Next actually retrieve the quote
				$result = $this->GetQuote();

				// Was it a valid quote?
				if(is_object($result))
				{
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
			$total = 0;
			if(isset($_SESSION['CART']['ITEMS']))
			{
				foreach ($_SESSION['CART']['ITEMS'] as $item)
				{
					$total += $item['product_price'] * $item['quantity'];
				}
			}

			// Pega o valor total do pedido
			$total = number_format($total,2,',','');

			// Pega o o peso total do pedido
			$peso = number_format(max(ConvertWeight($this->_weight, 'kgs'), 0.1), 1);
			$peso = number_format($peso,2,',','');

			// Pega os dados do modulo
			$nome = $this->GetValue("displayname");
			$cnpj = $this->GetValue("cnpj");
			$uforigem = $this->GetValue("uf");
			$regiao = $this->GetValue("regional");
			$prazo = $this->GetValue("prazo");
			$destino = $this->_destination_zip;
			$destino = str_replace("-","",$destino);

			// Pega as dimensoes do pedido
			$dimensions = $this->getcombinedshipdimensions();
			$lar = ConvertLength($dimensions['width'],'cm');
			$com = ConvertLength($dimensions['length'],'cm');
			$alt = ConvertLength($dimensions['height'],'cm');

			// Transforma em Centimetros
			$lar = "0,".$lar;
			$com = "0,".$com;
			$alt = "0,".$alt;

			// Faz o calculo da cubagem do pedido
			$cub = $lar*$com*$alt;
			$cub = number_format($cub,4,',','');

			// Url do Web Service
			$url = "http://www.jamef.com.br/jamef/cotacaoFrete.do?eCommerce=true&xml=true&P_CIC_NEGC=".$cnpj."&P_CEP=".$destino."&P_VLR_CARG=".$total."&P_PESO_KG=".$peso."&P_CUBG=".$cub."&P_COD_REGN=".$regiao ."&P_UF=".$uforigem;

			// Faz a consulta ao xml do Web Service
			$xml  = simplexml_load_file($url);
			foreach($xml->frete as $item){
				$statys = utf8_decode($item->status);
				$vfrete= utf8_decode($item->valor);

				$novo = explode("-",$vfrete);

				if($statys==1) {
					// Deu tudo certo, retorna o valor do frete
					$fr_quote = new ISC_SHIPPING_QUOTE($this->GetId(), $nome, $novo[1]);
					return $fr_quote;
				} else {
					// Algo deu errado, retorna mensagem de erro
					return false;
				}
			}
		}

		public function GetAvailableDeliveryMethods()
		{
			$methods = array();
			$this->SetCustomVars();
			$shipClasses = $this->GetValue("shipclasses");
			$carriers = $this->GetValue('carriers');

			if(!is_array($shipClasses) && $shipClasses != "")
			{
				$shipClasses = array($shipClasses);
			}

			foreach($carriers as $carrier)
			{
				foreach ($shipClasses as $class)
				{
					$methods[] = array_search($carrier, $this->_variables['carriers']['options']).' '.array_search($class, $this->_variables['shipclasses']['options']);
				}
			}
			return $methods;
		}
	}
?>