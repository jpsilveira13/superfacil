<?php
/*
	Modulo de Pagamento PAGSEGURO
	Ultimo Release: 11/11/2014
*/
	class CHECKOUT_PAGSEGURO extends ISC_CHECKOUT_PROVIDER
	{
		var $_requiresSSL = false;

		var $_paymenthelp = "";

		var	$_id = "checkout_pagseguro";

		function CHECKOUT_PAGSEGURO()
		{
			// Setup the required variables for the bank deposit checkout module
			parent::__construct();
			$this->_name = "Pagseguro Pagamentos Online";
			$this->_description = '';
			$this->SetImage('pagseguro.jpg');
			$this->_help = '';
			$this->_height = 0;

			// This is an offline payment method
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		}

		function isaccessible()
		{
			$available_countries = $this->GetValue("availablecountries");

			if( (!is_array($available_countries) && $available_countries == "all") || (is_array($available_countries) && in_array("all", $available_countries)) ) {
				return true;
			}
			else if(!isset($GLOBALS['ISC_CLASS_ACCOUNT'])) {
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
			   	"default" => "Pagseguro",
			   	"required" => true
			);

			$this->_variables['availablecountries'] = array(
				"name" => "Paises Aceitos",
			   	"type" => "dropdown",
			   	"help" => '',
			   	"default" => "all",
			   	"required" => true,
			   	"options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);

			$this->_variables['pagemail'] = array(
				"name" => "E-mail Cadastrado",
			   	"type" => "textbox",
			   	"help" => "Seu e-mail cadastrado junto com o pagseguro",
			   	"default" => "",
			   	"required" => true
			);
			
			$this->_variables['token'] = array(
				"name" => "Token",
			   	"type" => "textbox",
			   	"help" => 'Cole o token de retorno automatico de pedidos',
			   	"default" => "",
			   	"required" => false
			);
			
			$this->_variables['acrecimo'] = array(
				"name" => "Acrecimo em %",
			   	"type" => "textbox",
			   	"help" => '',
			   	"default" => "0.0",
			   	"required" => true
			);
		}

		public function getofflinepaymentmessage()
		{

			$orders = $this->GetOrders();
			$orderIds = array();

			foreach($orders as $order) {
				$orderIds[] = $order['orderid'];
				$total[] = $order['total_inc_tax'];
			}
	
			$desc1 = $this->GetValue("acrecimo");
			$total = $total[0];
			$c = ($total/100)*$desc1;
			$valord = number_format($c, 2, ',', '.');
			$valorfinal = number_format($total+$c, 2, ',', '.');

			if($desc1>"0"){
				$ms = "Com ".$desc1."% (R$ ".$valord.") de acrécimo no valor do pedido, resultando em um total de R$ ".$valorfinal;
			} else {
				$ms = "";
			}

			$retorno = "
				<h4 class=\"ui header\">
					Pagamento Online com Pagseguro
					<div class=\"sub header\">".$ms."</div>
				</h4>

				<a href='".$GLOBALS['ShopPath']."/modules/checkout/pagseguro/repagar.php?pedido=".$orderIds[0]."' target='_blank' class=\"ui positive labeled icon button\">
					<i class=\"checkmark icon\"></i>
					Pagar com Pagseguro
				</a>
				<div class=\"ui horizontal icon divider\">
					<i class=\"circular help icon\"></i>
				</div>

				<h4 class=\"ui header\">
					Problemas ao tentar realizar o pagamento?
					<div class=\"sub header\">Caso esteja com dificuldade ao tentar realizar o pagamento do seu pedido, tente o link direto abaixo:</div>
				</h4>

				<a href=\"javascript:window.open('".$GLOBALS['ShopPath']."/modules/checkout/pagseguro/repagar.php?pedido=".$orderIds[0]."','popup','width=990,height=800');void(0);\">".$GLOBALS['ShopPath']."/modules/checkout/pagseguro/repagar.php?pedido=".$orderIds[0]."</a>
			";

			return $retorno;
		}
	}
?>