<?php

/*
	Modulo de Pagamento Boleto Bancario Caixa Econômica Federal (SICOB)
	Ultimo Release: 02/08/2014
*/

	class CHECKOUT_BOLETOCAIXASIMPLES extends ISC_CHECKOUT_PROVIDER
	{
		var $_requiresSSL = false;

		var $_paymenthelp = "";

		var	$_id = "checkout_boletocaixasimples";

		function CHECKOUT_BOLETOCAIXASIMPLES()
		{
			parent::__construct();
			$this->_name = "Boleto Bancário Caixa SICOB";
			$this->_description = "";
			$this->SetImage('boleto_caixa.jpg');
			$this->_help = "";
			$this->_height = 0;
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		}

		function isaccessible()
		{
			$available_countries = $this->GetValue("availablecountries");

			if( (!is_array($available_countries) && $available_countries == "all") || (is_array($available_countries) && in_array("all", $available_countries)) ) {
				return true;
			}
			else if(!isset($GLOBALS['ISC_CLASS_ACCOUNT'])) { // Always accessible to the Admin panel
				return true;
			}
			else {
				$pendingOrder = LoadPendingOrderByToken();

				if(isset($pendingOrder['ordbillcountryid'])) {
					$billing_country_id = $pendingOrder['ordbillcountryid'];
					if(is_array($available_countries)) {
						if(in_array($billing_country_id, $available_countries)) {
							return true;
						} else {
							return false;
						}
					}
					else {
						if($billing_country_id == $available_countries) {
							return true;
						} else {
							return false;
						}
					}
				}
				else {
					return true;
				}
			}
		}

		function SetCustomVars()
		{
            $this->_variables['displayname'] = array(
            	"name" => "Nome do Módulo",
			   	"type" => "textbox",
			   	"help" => 'Nome de visualização em sua loja virtual',
			   	"default" => "Boleto Bancário Caixa Econômica Federal",
			   	"required" => true
			);
			
			$this->_variables['desconto'] = array(
				"name" => "Desconto em %",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "0",
			   	"required" => true
			);

			$this->_variables['availablecountries'] = array(
				"name" => "Paises Aceitos",
			   	"type" => "dropdown",
			   	"default" => "all",
			   	"help" => "",
			   	"required" => true,
			   	"options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);

			$this->_variables['cefcedente'] = array(
				"name" => "Cedente",
			   	"type" => "textbox",
			   	"help" => "Nome do Cedente",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefcidade'] = array(
				"name" => "Cidade",
			   	"type" => "textbox",
			   	"help" => "Cidade do Cedente",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefend'] = array(
				"name" => "Endereço do Cedente",
			   	"type" => "textbox",
			   	"help" => "Endereço do Cedente",
			   	"default" => "",
			   	"required" => true
			);
			
		    $this->_variables['cefagencia'] = array(
		    	"name" => "Agência",
			   	"type" => "textbox",
			   	"help" => "Número da agência sem o digito",
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['cefconta'] = array(
				"name" => "Conta",
			   	"type" => "textbox",
			   	"help" => "Número da conta sem o digito",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefcontadv'] = array(
				"name" => "Digito da Conta",
			   	"type" => "textbox",
			   	"help" => "Digito Verificado da Conta",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefcontac'] = array(
				"name" => "Conta Cedente",
			   	"type" => "textbox",
			   	"help" => "Conta cedente do cliente, sem digito (Somente Números)",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefcontacdigito'] = array(
				"name" => "Conta Cedente DV",
			   	"type" => "textbox",
			   	"help" => "Digito da conta cedente do cliente",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['cefinicio'] = array(
				"name" => "Inicio Nosso Numero",
			   	"type" => "textbox",
			   	"help" => "Carteira SR: 80, 81 ou 82  -  Carteira CR: 90 (Confirmar com gerente qual usar)",
			   	"default" => "80",
			   	"required" => true
			);

			$this->_variables['demoum'] = array(
				"name" => "Demostração 1",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "REFERENTE A COMPRAS ONLINE",
			   	"required" => false
			);
		
			$this->_variables['demodois'] = array(
				"name" => "Demostração 2",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "Dúvidas e/ou sugestões, entre em contato conosco",
			   	"required" => false
			);

			$this->_variables['demotres'] = array(
				"name" => "Demostração 3",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "sac@seusite.com.br | +55 xx 0000-0000",
			   	"required" => false
			);

			$this->_variables['cefinstrucaoum'] = array(
				"name" => "Instrução 1",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "Multa de R$ 3,00 por atraso.",
			   	"required" => false
			);
		
			$this->_variables['cefinstrucaodois'] = array(
				"name" => "Instrução 2",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "Após o vencimento, pagável apenas na Caixa Econômica Federal",
			   	"required" => false
			);
		
			$this->_variables['cefinstrucaotres'] = array(
				"name" => "Instrução 3",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "Fatura sujeita a protesto no SPC/SERASA",
			   	"required" => false
			);
			
			$this->_variables['cefinstrucaoquatro'] = array(
				"name" => "Instrução 4",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "A taxa de cobrança por boleto e R$ 2,75",
			   	"required" => false
			);
			
			$this->_variables['cefcpfcnpj'] = array(
				"name" => "CPF ou CNPJ do Boleto",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "",
			   	"required" => false
			);
			
			$this->_variables['ceftaxa'] = array(
				"name" => "Taxa do Boleto",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "2.75",
			   	"required" => true
			);
		
		    $this->_variables['cefdiasparavencimento'] = array(
		    	"name" => "Dias para vencimento",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "10",
			   	"required" => true
			);
		}

		public function getofflinepaymentmessage()
		{
			// Pega informações do pedido
			$orders = $this->GetOrders();
			$orderIds = array();
			foreach($orders as $order){
				$orderIds[] = $order['orderid'];
				$total[] = $order['total_inc_tax'];
			}

			// Aplica o desconto
			$desc1 = $this->GetValue("desconto");
			$total = $total[0];
			$c = ($total/100)*$desc1;
			$valorpg = str_replace(",", ".",$total-$c);
			$valorfinal = number_format($valorpg, 2, ',', '.');

			// Mostra mensagem se existir o desconto
			if($desc1>0){
				$saida = "<span style=\"display:block;margin-bottom:10px;\">Total de <b style=\"color: #0171B9;font-size: 15px;\">R$".$valorfinal."</b> com <b style=\"color: #0171B9;font-size: 15px;\">".$desc1."%</b> de desconto.</span>";
			} else {
				$saida = "";
			}

			// Prepara a saida
			$retorno = $saida."
				<a href='#modal' class=\"ui caixa labeled icon button\">
					<i class=\"text file icon\"></i>
					Gerar Boleto Caixa Econômica Federal
				</a>

				<div class=\"ui horizontal icon divider\">
					<i class=\"circular help icon\"></i>
				</div>

				<h4 class=\"ui header\">
					Problemas ao tentar gerar o Boleto?
					<div class=\"sub header\">Caso esteja com dificuldade ao tentar gerar o boleto, tente o link direto abaixo:</div>
				</h4>

				<a href=\"javascript:window.open('".$GLOBALS['ShopPath']."/modules/checkout/boletocaixasimples/boleto_cef.php?boleto=".isc_html_escape($orderIds[0])."','popup','width=700,height=750');void(0);\">".$GLOBALS['ShopPath']."/modules/checkout/boletocaixasimples/boleto_cef.php?boleto=".isc_html_escape($orderIds[0])."</a>
			";

			return $retorno;
		}
	}
?>