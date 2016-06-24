<?php

/*
	Modulo de Pagamento Boleto Bancario bb
	Ultimo Release: 02/08/2014
*/
	class CHECKOUT_boletobancodobrasil extends ISC_CHECKOUT_PROVIDER
	{

		var $_requiresSSL = false;
		var $_paymenthelp = "";
		var	$_id = "checkout_boletobancodobrasil";

		function CHECKOUT_boletobancodobrasil()
		{
			parent::__construct();
			$this->_name = GetLang('boletobancodobrasilName');
			$this->_description = '';
			$this->SetImage('boleto_banco_do_brasil.jpg');
			$this->_help = '';
			$this->_height = 0;
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		}

		function isaccessible()
		{
			// If bank deposit is available for all countries then return true
			$available_countries = $this->GetValue("availablecountries");

			if( (!is_array($available_countries) && $available_countries == "all") || (is_array($available_countries) && in_array("all", $available_countries)) ) {
				return true;
			}
			else if(!isset($GLOBALS['ISC_CLASS_ACCOUNT'])) { // Always accessible to the Admin panel
				return true;
			}
			else {
				// Load the pending order
				$pendingOrder = LoadPendingOrderByToken();

				// Check the country in the billing address. If it's not set then assume true
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
			   	"help" => "",
			   	"default" => "Banco do Brasil",
			   	"required" => true
			);

			$this->_variables['availablecountries'] = array(
				"name" => "Paises Aceitos",
			   	"type" => "dropdown",
			   	"help" => GetLang('boletobancodobrasilContinentes'),
			   	"default" => "all",
			   	"required" => true,
			   	"options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);

			$this->_variables['boletobancodobrasilcedente'] = array(
				"name" => "Cedente",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilCedente'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobancodobrasilagencia'] = array(
				"name" => "Agência",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilAgencia'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobancodobrasilconta'] = array(
				"name" => "Conta",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilConta'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobancodobrasilconvenio'] = array(
				"name" => "Convênio",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilConvenio'),
			   	"default" => "0000000",
			   	"required" => true
			);

			$this->_variables['boletobancodobrasilcontrato'] = array(
				"name" => "Contrato",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilContrato'),
			   	"default" => "0000000",
			   	"required" => true
			);
	
			$this->_variables['demoum'] = array(
				"name" => "Demostração 1",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobbDemoU'),
			   	"default" => "REFERENTE A COMPRAS ONLINE",
			   	"required" => false
			);
		
			$this->_variables['demodois'] = array(
				"name" => "Demostração 2",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobbDemoD'),
			   	"default" => "Dúvidas e sugestões, entre em contato conosco:",
			   	"required" => false
			);
		
			$this->_variables['demotres'] = array(
				"name" => "Demonstração 3",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobbDemoT'),
			   	"default" => "sac@seusite.com.br | +55 xx 0000.0000",
			   	"required" => false
			);
			
			$this->_variables['boletobancodobrasilinstrucaoum'] = array(
				"name" => "Instrução 1",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilInstrucaoUm'),
			   	"default" => "Multa de R$ 3,00 por atraso.",
			   	"required" => false
			);
		
			$this->_variables['boletobancodobrasilinstrucaodois'] = array(
				"name" => "Instrução 2",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilInstrucaoDois'),
			   	"default" => "Após o vencimento, pagável apenas no Banco do Brasil",
			   	"required" => false
			);
		
			$this->_variables['boletobancodobrasilinstrucaotres'] = array(
				"name" => "Instrução 3",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilInstrucaoTres'),
			   	"default" => "Fatura sujeita a protesto no SPC/SERASA",
			   	"required" => false
			);
			
			$this->_variables['boletobancodobrasilinstrucaoquatro'] = array(
				"name" => "Instrução 4",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilInstrucaoQuatro'),
			   	"default" => "Juros de mora de 0,1% ao dia.",
			   	"required" => false
			);

			$this->_variables['boletobancodobrasilcpfcnpj'] = array(
				"name" => "CPF ou CNPJ do Boleto",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilCNPF'),
			   	"default" => "",
			   	"required" => false
			);

			$this->_variables['boletobancodobrasildiasparavencimento'] = array(
				"name" => "Dias para vencimento",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobancodobrasilVence'),
			   	"default" => "10",
			   	"required" => true
			);
			
			$this->_variables['desconto'] = array(
				"name" => "Desconto em %",
			   	"type" => "textbox",
			   	"help" => '',
			   	"default" => "0",
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

			// Declara variavel para controle de id
			$id = isc_html_escape($orderIds[0]);

			// Prepara o Modal
			$modal = "<script src=\"http://code.jquery.com/jquery-1.10.2.min.js?%%GLOBAL_JSCacheToken%%\"></script><script src=\"./framework/js/semantic.min.js?%%GLOBAL_JSCacheToken%%\"></script>";
			$modal .="
				<script type=\"text/javascript\">
					$(document).ready(function(){
						$('.bb".$id."').click(function(){
							$('#bb".$id."').modal('show');
						});

						$('.imprimir".$id."').click(function(){
							window.frames['bb".$id."'].focus();
                        	window.frames['bb".$id."'].print();
						});

						$('.comprovante".$id."').click(function(){
							$('#comprovante".$id."').modal('show')
						});

						$('#send".$id."').click(function(){
							$('#form".$id."').submit();
							$('.sendConteudo').addClass('loading');
						});
	  				});
	  			</script>";

			// Aplica o desconto
			$desc1 = $this->GetValue("desconto");
			$total = $total[0];
			$c = ($total/100)*$desc1;
			$valorpg = str_replace(",", ".",$total-$c);
			$valorfinal = number_format($valorpg, 2, ',', '.');

			// Mostra mensagem se existir o desconto
			if($desc1>0){
				$saida = "<span style=\"display:block;margin-bottom:10px;\">Total de <b style=\"display: inline\" class=\"ProductPrice\">R$".$valorfinal."</b> com <b style=\"display: inline\" class=\"ProductPrice\">".$desc1."%</b> de desconto.</span>";
				$saida2 = $saida;
			} else {
				$saida = "";
				$saida2 = "<span style=\"display:block;margin-bottom:10px;\">Total de <b style=\"display: inline\" class=\"ProductPrice\">R$".$valorfinal."</b>";
			}

		// Ultimos ajustes do modal
			if($_GET['status'] == 'sucesso'){
				$sucesso  = 'style="display:block"';
			}
			$modal .= '
				<div id="bb'.$id.'" class="ui modal">
	  				<i class="close icon"></i>
					<h2 class="ui header">
						Boleto Bancário Banco do Brasil
						<div class="sub header">'.$saida2.'</div>
					</h2>
					
					<div class="content BoletoConteudo">
						<iframe name="bb'.$id.'" style="width: 750px;height: 300px;" frameborder="0" src="'.$GLOBALS['ShopPath']."/modules/checkout/boletobancodobrasil/boleto_bancodobrasil.php?boleto=".isc_html_escape($orderIds[0]).'"></iframe>
					</div>
	  				
	  				<div class="actions">
	    				<div class="ui black button">Imprimir Depois</div>
	    				<div class="ui positive right labeled icon button imprimir'.$id.'">Imprimir <i class="checkmark icon"></i></div>
	  				</div>
				</div>

				<div id="comprovante'.$id.'" class="ui modal">
	  				<i class="close icon"></i>
					<h2 class="ui header">
						Enviar Comprovante de Depósito
					</h2>
					
					<div class="content ui form sendConteudo">
						<div class="field">
							<label>Escolha o Arquivo: ( Somente: .JPG .GIF .PNG ou .PDF )</label>
							<form id="form'.$id.'" action="'.$GLOBALS['ShopPath'].'/lib/sendComprovante.php" enctype="multipart/form-data" method="POST">
								<input type="hidden" value="'.$id.'" name="id" />
								<input type="file" name="arquivo" style="background-color: #FFF;width: 100%;" />
							</form>
						</div>
					</div>
	  				
	  				<div style="padding: 1rem 2rem;text-align: right;">
	    				<button id="send'.$id.'" type="submit" class="ui positive right labeled icon button">Enviar Agora <i class="checkmark icon"></i></button>
	  				</div>
				</div>
				<p '.$sucesso.' class="sucessComprovante displayNone InfoMessage">
					Comprovante enviado com sucesso!
				</p>
				';

			// Prepara a saida com o modal
			$retorno = $modal.$saida."
				<div class=\"ui buttons\">
					<a href='#' class=\"ui positive labeled icon button bb".$id."\">
						<i class=\"text file icon\"></i>
						Gerar Boleto Banco do Brasil
					</a>
					<div class=\"or\"></div>
					<a href='#' class=\"ui labeled icon button comprovante".$id."\">
						<i class=\"text file icon\"></i>
						Enviar Comprovante
					</a>
				</div>

				<div class=\"ui horizontal icon divider\">
					<i class=\"circular help icon\"></i>
				</div>

				<h4 class=\"ui header\">
					Problemas ao tentar gerar o Boleto?
					<div class=\"sub header\">Caso esteja com dificuldade ao tentar gerar o boleto, tente o link direto abaixo:</div>
				</h4>

				<a href=\"javascript:window.open('".$GLOBALS['ShopPath']."/modules/checkout/boletobancodobrasil/boleto_bancodobrasil.php?boleto=".isc_html_escape($orderIds[0])."','popup','width=690,height=800');void(0);\">".$GLOBALS['ShopPath']."/modules/checkout/boletobancodobrasil/boleto_bancodobrasil.php?boleto=".isc_html_escape($orderIds[0])."</a>
			";

			return $retorno;
		}
	}
?>
