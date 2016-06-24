<?php
/*
	Modulo de Pagamento Cielo
	Ultimo Release: 05/09/2014
*/
	class CHECKOUT_CIELO extends ISC_CHECKOUT_PROVIDER
	{
		var $_requiresSSL = false;
		public function __construct()
		{
			parent::__construct();
			$this->_name = "Cartão de Crédito - Cielo";
			$this->_image = "visanet.jpg";
			$this->_description = "";
			$this->_help = "";
			$this->_enabled = $this->CheckEnabled();
			$this->_height = 0;
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
			@$GLOBALS['ISC_CLASS_DB']->Query("CREATE TABLE IF NOT EXISTS `cielo`(
			`id` int(11) NOT NULL auto_increment,
	  		`pedido` int(11) NOT NULL,
	  		`valor` int(20) NOT NULL,
	  		`tid` varchar(30) NOT NULL,
	  		`auth` varchar(20) NOT NULL,
	  		`data` varchar(20) NOT NULL,
	  		`cc` varchar(20) NOT NULL,
	  		PRIMARY KEY  (`id`)
			)ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;");
		}

		public function SetCustomVars()
		{
			$this->_variables['displayname'] = array(
				"name" => "Nome do Módulo",
			   	"type" => "textbox",
			   	"help" => 'Nome que será exibido na Loja Virtual',
			   	"default" => "Cartão de Crédito",
			   	"required" => true
			);
		
			$this->_variables['availablecountries'] = array(
				"name" => "Paises Aceitos",
			   	"type" => "dropdown",
			   	"help" => GetLang('PagContinente'),
			   	"default" => "all",
			   	"required" => true,
			   	"options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);
		
	   		$this->_variables['modo'] = array(
	   			"name" => "Modo",
			   	"type" => "dropdown",
			   	"help" => 'Modo de Operação',
			   	"default" => 'T',
			   	"options" => array(
			   		"Teste"=>"T",
			   		"Produção"=>"P"
			   	),
			   	"required" => true,
			   	"multiselect" => false
			);

			$this->_variables['afiliacao'] = array(
				"name" => 'Afiliação Cielo',
			   	"type" => "textbox",
			   	"help" => 'Digite o número da sua Afiliação Cielo, se for para teste use 1001734898',
			   	"default" => "",
			   	"required" => true
			);
		
			$this->_variables['chave'] = array(
				"name" => 'Chave Cielo',
			   	"type" => "textbox",
			   	"help" => 'Digite sua chave da afiliação junto a Cielo, se for teste use e84827130b9837473681c2787007da5914d6359947015a5cdb2b8843db0fa832',
			   	"default" => "",
			   	"required" => true
			);

			$this->_variables['loja'] = array(
				"name" => 'Nome da Loja',
			   	"type" => "textbox",
			   	"help" => 'Nome da sua loja que será mostrado',
			   	"default" => "",
			   	"required" => true
			);
		
	   		$this->_variables['meios'] = array(
	   			"name" => "Bandeiras Aceitas",
			   	"type" => "dropdown",
			   	"help" => 'Selecione as baideras que irá aceitar em sua loja',
			   	"default" => '',
			   	"options" => array(
			   		"Visa"=>"V",
			   		"Mastercard"=>"M",
			   		"Visa Electron"=>"E",
			   		"Elo"=>"EL",
			   		"Dinners Club"=>"DIN",
			   		"Discover"=>"DIS"
			   	),
			   	"required" => true,
			   	"multiselect" => true
			);	
		
	      	$this->_variables['parcelamin'] = array(
	      	 	"name" => 'Parcela Miníma',
			   	"type" => "textbox",
			   	"help" => 'Digite o valor minímo de uma parcela no parcelamento dos pedidos',
			   	"default" => "15.00",
			   	"required" => true
			);
		
			$this->_variables['juros'] = array(
				"name" => 'Juros Crédito',
		   		"type" => "textbox",
		   		"help" => 'Se parcelar sem juros, especificar a taxa de juros',
		   		"default" => "0.00",
		   		"required" => true
			);
		
			$this->_variables['desconto'] = array(
				"name" => 'Desconto no Débito',
		   		"type" => "textbox",
		   		"help" => 'Desconto em % para pagamento por debito',
		   		"default" => "0.00",
		   		"required" => true
			);

			$this->_variables['div'] = array(
				"name" => "Dividir em até",
			   	"type" => "dropdown",
			   	"help" => 'Será cobrado juros a partir da parcela',
			   	"default" => '12',
			   	"options" => array("1x"=>"1","2x"=>"2","3x"=>"3","4x"=>"4","5x"=>"5","6x"=>"6","7x"=>"7","8x"=>"8","9x"=>"9","10x"=>"10","11x"=>"11","12x"=>"12"),
			   	"required" => true
			);
			
			$this->_variables['jurosde'] = array(
				"name" => "Sem juros até",
			   	"type" => "dropdown",
			   	"help" => 'Será cobrado juros a partir da parcela',
			   	"default" => '6',
			   	"options" => array("Nenhuma"=>"99","1x"=>"1","2x"=>"2","3x"=>"3","4x"=>"4","5x"=>"5","6x"=>"6","7x"=>"7","8x"=>"8","9x"=>"9","10x"=>"10","11x"=>"11","12x"=>"12"),
			   	"required" => true
			);

			$this->_variables['tipojuros'] = array(
				"name" => "Tipo de Parcelamento",
			   	"type" => "dropdown",
			   	"help" => '',
			   	"default" => '2',
			   	"options" => array(
			   		"Parcelado pela loja"=>"2",
			   		"Parcelado pela operadora"=>"3"
			   	),
			   	"required" => true
			);
		}

		public function parcelar($valorTotal, $taxa, $nParcelas)
		{
		    $taxa = $taxa/100;
		    $cadaParcela = ($valorTotal*$taxa)/(1-(1/pow(1+$taxa, $nParcelas)));
		    return round($cadaParcela, 2);
		}

		public function getofflinepaymentmessage()
		{
			// Resgaa informacoes do pedido
			$orders = $this->GetOrders();
			$orderIds = array();
			foreach($orders as $order){
				$orderIds[] = $order['orderid'];
				$orderValor[] = $order['total_inc_tax'];
			}

			// Verifica se existe o pedido
			if(isset($orderIds[0])){
				// Resgata informacoes do modulo
				$meios     = $this->GetValue("meios");
				$minima    = $this->GetValue("parcelamin");
				$dividirem = $this->GetValue("div");
				$semjuros  = $this->GetValue("jurosde");
				$valor     = $orderValor[0];
				$pedido    = $orderIds[0];
				$juros     = $this->GetValue("juros");
				$desconto  = $this->GetValue("desconto");
				$tipojuros = $this->GetValue("tipojuros");

				// Verifica divisao
				if($valor>$minima){
					$splitss = (int) ($valor/$minima);
					if($splitss<=$dividirem){
						$div = $splitss;
					}else{
						$div = $dividirem;
					}
				}else{
					$div = 1;
				}

				// Monta javascript para controle dos meios de pagamento
				$help = "
				<script type='text/javascript'>
					function getCheckedValue(radioObj){
						var objRadio = document.getElementsByName(radioObj).length;
						for(i=0; i < objRadio; i++ ) {
							if (document.getElementsByName(radioObj)[i].checked){
								return document.getElementsByName(radioObj)[i].value;
							}
						}
					}
					function credito(){
						document.getElementById('credito').style.display = '';
						document.getElementById('debito').style.display = 'none';
						document.getElementById('master').style.display = 'none';
						document.getElementById('elo').style.display = 'none';
						document.getElementById('din').style.display = 'none';
						document.getElementById('dis').style.display = 'none';
						return true;
					}
					function debito(){
						document.getElementById('credito').style.display = 'none';
						document.getElementById('debito').style.display = '';
						document.getElementById('master').style.display = 'none';
						document.getElementById('elo').style.display = 'none';
						document.getElementById('din').style.display = 'none';
						document.getElementById('dis').style.display = 'none';
						return true;
					}
					function master(){
						document.getElementById('credito').style.display = 'none';
						document.getElementById('debito').style.display = 'none';
						document.getElementById('master').style.display = '';
						document.getElementById('elo').style.display = 'none';
						document.getElementById('din').style.display = 'none';
						document.getElementById('dis').style.display = 'none';
						return true;
					}
					function elo(){
						document.getElementById('credito').style.display = 'none';
						document.getElementById('debito').style.display = 'none';
						document.getElementById('master').style.display = 'none';
						document.getElementById('elo').style.display = '';
						document.getElementById('din').style.display = 'none';
						document.getElementById('dis').style.display = 'none';
						return true;
					}
					function din(){
						document.getElementById('credito').style.display = 'none';
						document.getElementById('debito').style.display = 'none';
						document.getElementById('master').style.display = 'none';
						document.getElementById('elo').style.display = 'none';
						document.getElementById('din').style.display = '';
						document.getElementById('dis').style.display = 'none';
						return true;
					}
					function dis(){
						document.getElementById('credito').style.display = 'none';
						document.getElementById('debito').style.display = 'none';
						document.getElementById('master').style.display = 'none';
						document.getElementById('elo').style.display = 'none';
						document.getElementById('din').style.display = 'none';
						document.getElementById('dis').style.display = '';
						return true;
					}

					var retorno;
					var valor;
					var mpg_popup;
					window.name='retorno';

					function fabrewin(valor){
						mpg_popup = window.open('".$GLOBALS['ShopPath']."/modules/checkout/cielo/pagar.php?token='+valor,'mpg_popup','toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=1,resizable=0,screenX=0,screenY=0,left=150,top=150,width=1010,height=780');
						return true;
					}

					function pegavalor(){
						var valor = getCheckedValue('forma');
						if(valor){
							fabrewin(valor);
							return true;
						}else{
							alert('".GetLang('SelecioneCielo')."');
						}
					}
				</script>";	

				// Prepara o topo
				$help .= '
				<h4 class="ui header">
				  	<i class="payment icon"></i>
				  	<div class="content">
				    	'.GetLang('SelCC').'
				    	<div class="sub header">'.GetLang('SelBB').'</div>
				  	</div>
				</h4>'; 

				// Verifica se possui algum meio de pagamento ativo
				if(is_array($meios)){
					if(in_array('V', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:credito();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/visa.png'></a>";
					}

					if(in_array('E', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:debito();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/electron.png'></a>";
					}

					if(in_array('M', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:master();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/mastercard.png'></a>";
					}

					if(in_array('EL', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:elo();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/elo.png'></a>";
					}

					if(in_array('DIN', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:din();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/diners.png'></a>";
					}

					if(in_array('DIS', $meios)){
						$help .= "<a style=\"margin-right:10px; cursor: pointer;\" onclick=\"javascript:dis();\"><img src='".$GLOBALS['ShopPath']."/modules/checkout/cielo/images/discover.png'></a>";
					}

					// Inicia meio de pagamento Visa
					$par1 = "visa#".$pedido."#1#1#".md5($valor);
					$help .= "
					<div id='credito' class='ui form segment' style='display:none;'>
						<h5 class=\"ui header\">
						  	<div class=\"content\">
						    	".GetLang('VisaCielo')."
						    	<div class=\"sub header\">".GetLang('QuantidadeParcelas')."</div>
						  	</div>
						</h5>
						<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
						".sprintf(GetLang('ParVisa1xCielo'),CurrencyConvertFormatPrice($valor,1,0))."</label>";

						for($j=2; $j<=$div;$j++){
							if($semjuros>=$j) {
								$parcelas = $valor/$j;
								$parcelas = number_format($parcelas, 2, '.', '');

								$sem = "visa#".$pedido."#2#".$j."#".md5($valor);
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>
								".sprintf(GetLang('ParVisaSemCielo'),$j,CurrencyConvertFormatPrice($parcelas,1,0))."</label>";

							}else{
								$parcelas = $this->parcelar($valor, $juros, $j);
								$parcelas = number_format($parcelas, 2, '.', '');

								$com = "visa#".$pedido."#".$tipojuros."#".$j."#".md5($valor);
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>
								".sprintf(GetLang('ParVisaComCielo'),$j,CurrencyConvertFormatPrice($parcelas,1,0),CurrencyConvertFormatPrice($parcelas*$j,1,0))."</label>";
							}
						}

						$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
						// Final do Visa

						// Inicia meio de pagamento Visa Electron
						$par1 =  "electron#".$pedido."#A#1#".md5($valor);

						// Calcula desconto
						if($desconto>0){
							$desc = ($valor/100)*$desconto;
							$desconto = number_format($desconto, 0, '.', '')."%";
							
							$help .= "
							<div id='debito' class='ui form segment' style='display:none;'>
								<h5 class=\"ui header\">
						  			<div class=\"content\">
						    			".GetLang('EleCielo')."
						    			<div class=\"sub header\">".sprintf(GetLang('DescontoDebito'),$desconto)."</div>
						  			</div>
								</h5>
								
								<label style='display:block; margin-bottom:3px;'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
								".sprintf(GetLang('ParEleCieloDesc'),CurrencyConvertFormatPrice($valor-$desc,1,0),$desconto)."</label>";
						}else{
							$help .= "<div id='debito' class='ui form segment' style='display:none;'>
								<h5 class=\"ui header\">
						  			<div class=\"content\">
						    			".GetLang('EleCielo')."
						    			<div class=\"sub header\">".GetLang('DescricaoDebito')."</div>
						  			</div>
								</h5>
								
								<label style='display:block; margin-bottom:3px;'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
								".sprintf(GetLang('ParEleCielo'),CurrencyConvertFormatPrice($valor,1,0))."</label>";
						}

						$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
						// Fim do Debito

						// Inicia meio de pagamento Mastercard
						$par1 = "mastercard#".$pedido."#1#1#".md5($valor);
						$help .= "<div id='master' class='ui form segment' style='display:none;'>
							<h5 class=\"ui header\">
							  	<div class=\"content\">
							    	".GetLang('MasterCielo')."
							    	<div class=\"sub header\">".GetLang('QuantidadeParcelas')."</div>
							  	</div>
							</h5>
							<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
							".sprintf(GetLang('ParMaster1xCielo'),CurrencyConvertFormatPrice($valor,1,0))."</label>";

						for($j=2; $j<=$div;$j++) {
							if($semjuros>=$j){
								$parcelas = $valor/$j;
								$parcelas = number_format($parcelas, 2, '.', '');
								$sem = "mastercard#".$pedido."#2#".$j."#".md5($valor);
								
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>
								".sprintf(GetLang('ParMasterSemCielo'),$j,CurrencyConvertFormatPrice($parcelas,1,0))."</label>";
							}else{
								$parcelas = $this->parcelar($valor, $juros, $j);
								$parcelas = number_format($parcelas, 2, '.', '');
								$com =  "mastercard#".$pedido."#".$tipojuros."#".$j."#".md5($valor);
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>
								".sprintf(GetLang('ParMasterComCielo'),$j,CurrencyConvertFormatPrice($parcelas,1,0),CurrencyConvertFormatPrice($parcelas*$j,1,0))."</label>";
							}
						}

						$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
					// Fim de MasteCard

					// Inicia meio de pagamento Elo
					$par1 = "elo#".$pedido."#1#1#".md5($valor);
					$help .= "<div id='elo' class='ui form segment' style='display:none;'>
						<h5 class=\"ui header\">
							  <div class=\"content\">
							    ".GetLang('Elo')."
							    <div class=\"sub header\">".GetLang('QuantidadeParcelas')."</div>
							  </div>
						</h5>
						<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
						".sprintf(GetLang('ParElo1x'),CurrencyConvertFormatPrice($valor,1,0))."</label>";

					for($j=2; $j<=$div;$j++){
						if($semjuros>=$j){
							$parcelas = $valor/$j;
							$parcelas = number_format($parcelas, 2, '.', '');
							$sem =  "elo#".$pedido."#2#".$j."#".md5($valor);
							$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>
							".sprintf(GetLang('ParEloSem'),$j,CurrencyConvertFormatPrice($parcelas,1,0))."</label>";
						}else{
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, '.', '');
							$com =  "elo#".$pedido."#".$tipojuros."#".$j."#".md5($valor);
							$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>
							".sprintf(GetLang('ParEloCom'),$j,CurrencyConvertFormatPrice($parcelas,1,0),CurrencyConvertFormatPrice($parcelas*$j,1,0))."</label>";
						}
					}

					$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
					// Fim do Elo


					// Inicia meio de pagamento Dinners Club
					$par1 = "diners#".$pedido."#1#1#".md5($valor);
					$help .= "<div id='din' class='ui form segment' style='display:none;'>
						<h5 class=\"ui header\">
							  <div class=\"content\">
							    ".GetLang('Din')."
							    <div class=\"sub header\">".GetLang('QuantidadeParcelas')."</div>
							  </div>
						</h5>
						<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
						".sprintf(GetLang('ParDin1x'),CurrencyConvertFormatPrice($valor,1,0))."</label>";

						for($j=2; $j<=$div;$j++) {
							if($semjuros>=$j) {
								$parcelas = $valor/$j;
								$parcelas = number_format($parcelas, 2, '.', '');
								$sem =  "diners#".$pedido."#2#".$j."#".md5($valor);
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>
								".sprintf(GetLang('ParDinSem'),$j,CurrencyConvertFormatPrice($parcelas,1,0))."</label>";
							}else{
								$parcelas = $this->parcelar($valor, $juros, $j);
								$parcelas = number_format($parcelas, 2, '.', '');
								$com =  "diners#".$pedido."#".$tipojuros."#".$j."#".md5($valor);
								$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>
								".sprintf(GetLang('ParDinCom'),$j,CurrencyConvertFormatPrice($parcelas,1,0),CurrencyConvertFormatPrice($parcelas*$j,1,0))."</label>";
							}
						}

					$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
					// Fim Dinners


					// Inicia meio de pagamento Discover
					$par1 = "discover#".$pedido."#1#1#".md5($valor);
					$help .= "<div id='dis' class='ui form segment' style='display:none;'>
						<h5 class=\"ui header\">
							  <div class=\"content\">
							    ".GetLang('Dis')."
							    <div class=\"sub header\">".GetLang('QuantidadeParcelas')."</div>
							  </div>
						</h5>
						<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>
						".sprintf(GetLang('ParDis1x'),CurrencyConvertFormatPrice($valor,1,0))."</label>";

					for($j=2; $j<=$div;$j++) {
						if($semjuros>=$j) {
							$parcelas = $valor/$j;
							$parcelas = number_format($parcelas, 2, '.', '');
							$sem =  "discover#".$pedido."#2#".$j."#".md5($valor);
							$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>
							".sprintf(GetLang('ParDisSem'),$j,CurrencyConvertFormatPrice($parcelas,1,0))."</label>";
						}else{
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, '.', '');
							$com =  "elo#".$pedido."#".$tipojuros."#".$j."#".md5($valor);
							$help .= "<label style='display:block; margin-bottom:3px'><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>
							".sprintf(GetLang('ParDisCom'),$j,CurrencyConvertFormatPrice($parcelas,1,0),CurrencyConvertFormatPrice($parcelas*$j,1,0))."</label>";
						}
					}

					$help .= "
						<br class='Clear' />
						<button onclick=\"javascript:pegavalor();\" class=\"ui positive labeled icon button\">
						  	<i class=\"checkmark icon\"></i>
						  	".GetLang('PagarAgora')."
						</button>
						</div>"; 
					// Fim do Discover

					// Mensagem de Juros
					if($juros>0){
						$jurosmsg= sprintf(GetLang('Juros'),$juros);
					}else{
						$jurosmsg= "";
					}

					// Mostra forma de pagamento selecionada e a mensagem de parcela minima
					return $help;
				}else{
					return "<br>Nenhum meio de pagamento ativo para este modulo!";
				}
			}else{
				return "";
			}
		}
		// Fim da função
	}
	// Fim da Classe
?>