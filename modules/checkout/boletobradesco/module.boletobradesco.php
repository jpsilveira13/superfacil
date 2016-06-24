<?php

/*
	Modulo de Pagamento Boleto Bancario Bradesco
	Ultimo Release: 02/08/2014
*/

	class CHECKOUT_BOLETOBRADESCO extends ISC_CHECKOUT_PROVIDER
	{
		protected $_requiresSSL = false;
		protected $supportsVendorPurchases = true;
		protected $_id = "checkout_boletobradesco";
		public function __construct()
		{
			// Configuracoes necessarias para funcionamento do modulo
			parent::__construct();
			$this->_name = GetLang('boletobradescoName');
			$this->_description = '';
			$this->SetImage('boleto_bradesco.jpg');
			$this->_help = '';
			$this->_height = 0;
			
			// Define que é um pagamento que possui suporte offline
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		}

		function SetCustomVars()
		{
			$this->_variables['displayname'] = array(
				"name" => "Nome do Módulo",
			   	"type" => "textbox",
			   	"help" => "",
			   	"default" => "Bradesco",
			   	"required" => true
			);

			$this->_variables['availablecountries'] = array(
				"name" => "Paises Aceitos",
			   	"type" => "dropdown",
			   	"help" => GetLang('boletobradescoContinentes'),
			   	"default" => "all",
			   	"required" => true,
			   	"options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);

			$this->_variables['boletobradescocedente'] = array(
				"name" => "Cedente",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoCedente'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobradescoagencia'] = array(
				"name" => "Agência",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoAgencia'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobradescoagenciadv'] = array(
				"name" => "Dígito Verificador (Agência)",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoagenciaDV'),
			   	"default" => "0",
			   	"required" => true
			);

			$this->_variables['boletobradescoconta'] = array(
				"name" => "Conta",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoConta'),
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['boletobradescocontadv'] = array(
				"name" => "Dígito Verificador (Conta)",
			  	"type" => "textbox",
			   	"help" => GetLang('boletobradescocontaDV'),
			   	"default" => "0",
			   	"required" => true
			);

			$this->_variables['boletobradescocarteira'] = array(
				"name" => "Carteira",
			   	"type" => "dropdown",
			   	"help" => GetLang('boletobradescoCarteira'),
			   	"default" => "06",
			   	"options" => array('06' => '06'),
			   	"required" => true,
			   	"multiselection" => false
			);

			$this->_variables['demoum'] = array(
				"name" => "Demostração 1",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoDemoU'),
			   	"default" => "REFERENTE A COMPRAS ONLINE",
			   	"required" => false
			);
		
			$this->_variables['demodois'] = array(
				"name" => "Demostração 2",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoDemoD'),
			   	"default" => "Dúvidas e sugestões, entre em contato conosco:",
			   	"required" => false
			);
		
			$this->_variables['demotres'] = array(
				"name" => "Demonstração 3",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoDemoT'),
			   	"default" => "sac@seusite.com.br | +55 xx 0000.0000",
			   	"required" => false
			);
			
			$this->_variables['boletobradescoinstrucaoum'] = array(
				"name" => "Instrução 1",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoInstrucaoUm'),
			   	"default" => "Multa de R$ 3,00 por atraso.",
			   	"required" => false
			);
		
			$this->_variables['boletobradescoinstrucaodois'] = array(
				"name" => "Instrução 2",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoInstrucaoDois'),
			   	"default" => "Após o vencimento, pagável apenas no Banco Bradesco",
			   	"required" => false
			);
		
			$this->_variables['boletobradescoinstrucaotres'] = array(
				"name" => "Instrução 3",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoInstrucaoTres'),
			   	"default" => "Fatura sujeita a protesto no SPC/SERASA",
			   	"required" => false
			);

			$this->_variables['boletobradescoinstrucaoquatro'] = array(
				"name" => "Instrução 4",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoInstrucaoQuatro'),
			   	"default" => "Juros de mora de 0,1% ao dia.",
			   	"required" => false
			);

			$this->_variables['boletobradescocpfcnpj'] = array(
				"name" => "CPF ou CNPJ do Boleto",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoCNPF'),
			   	"default" => "",
			   	"required" => false
			);

			$this->_variables['boletobradescodiasparavencimento'] = array(
				"name" => "Dias para vencimento",
			   	"type" => "textbox",
			   	"help" => GetLang('boletobradescoVence'),
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
						$('.bradesco".$id."').click(function(){
							$('#bradesco".$id."').modal('show');
						});

						$('.imprimir".$id."').click(function(){
							window.frames['bradesco".$id."'].focus();
                        	window.frames['bradesco".$id."'].print();
						});

						$('.comprovante".$id."').click(function(){
							$('#comprovante".$id."').modal('show')
						});

						$('#send".$id."').click(function(){
							$('.sendConteudo').addClass('loading');
							$('#form".$id."').submit();
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
				<div id="bradesco'.$id.'" class="ui modal">
	  				<i class="close icon"></i>
					<h2 class="ui header">
						Boleto Bancário Bradesco
						<div class="sub header">'.$saida2.'</div>
					</h2>
					
					<div class="content BoletoConteudo">
						<iframe name="bradesco'.$id.'" style="width: 750px;height: 300px;" frameborder="0" src="'.$GLOBALS['ShopPath']."/modules/checkout/boletobradesco/boleto_bradesco.php?boleto=".isc_html_escape($orderIds[0]).'"></iframe>
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
							<form class="ui form" id="form'.$id.'" action="'.$GLOBALS['ShopPath'].'/lib/sendComprovante.php" enctype="multipart/form-data" method="POST">
								<input type="hidden" value="'.$id.'" name="id" />
								<input required type="file" id="arquivo'.$id.'" name="arquivo" style="background-color: #FFF;width: 100%;" />
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
					<a href='#' class=\"ui positive labeled icon button bradesco".$id."\">
						<i class=\"text file icon\"></i>
						Gerar Boleto Bradesco
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

				<a href=\"javascript:window.open('".$GLOBALS['ShopPath']."/modules/checkout/boletobradesco/boleto_bradesco.php?boleto=".isc_html_escape($orderIds[0])."','popup','width=690,height=800');void(0);\">".$GLOBALS['ShopPath']."/modules/checkout/boletobradesco/boleto_bradesco.php?boleto=".isc_html_escape($orderIds[0])."</a>
			";

			return $retorno;
		}
	}
?>