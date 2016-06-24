<?php
    class CHECKOUT_CIELOTRANSPARENTE extends ISC_CHECKOUT_PROVIDER
    {
	   public $_requiresSSL = false;
	   public function __construct()
       {
		  parent::__construct();
		  $this->_name = "Cielo Transparente";
		  $this->_image = "visanet.jpg";
		  $this->_description = "";
		  $this->_help = "";
		  $this->_enabled = $this->CheckEnabled();
		  $this->_height = 0;
		  $this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		  @$GLOBALS["ISC_CLASS_DB"]->Query("CREATE TABLE IF NOT EXISTS `cielows`(
                `id` int(11) NOT NULL auto_increment,
                `pedido` int(11) NOT NULL,
                `valor` int(20) NOT NULL,
                `tid` varchar(30) NOT NULL,
                `auth` varchar(20) NOT NULL,
                `data` varchar(20) NOT NULL,
                `cc` varchar(20) NOT NULL,
                `nome` varchar(90) NOT NULL,
                `cpf` varchar(11) NOT NULL,
                `cartao` varchar(6) NOT NULL,
                `status` int(1) NOT NULL,
                PRIMARY KEY  (`id`)
            ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000 ;");
	   }

    	public function SetCustomVars()
        {
    		$this->_variables["displayname"] = array(
                "name" => "Nome do Modulo",
                "type" => "textbox",
                "help" => "Nome do Modulo",
                "default" => "Pagamentos Loja Cielo",
                "required" => true
            );

    		$this->_variables["availablecountries"] = array(
                "name" => "Paises",
                "type" => "dropdown",
                "help" => GetLang("PagContinente"),
                "default" => "all",
                "required" => true,
                "options" => GetCountryListAsNameValuePairs(),
                "multiselect" => true
            );

    		$this->_variables["modo"] = array(
                "name" => "Modo",
                "type" => "dropdown",
                "help" => "Selecione o Modo do Operacao e veja nos itens abaixo os helps.",
                "default" => "T",
                "options" => array(
                    "TESTE" => "T",
                    "PRODUCAO" => "P"
                ),
                "required" => true,
                "multiselect" => false
            );

    		$this->_variables["afiliacao"] = array(
                "name" => "Afiliacao Cielo",
                "type" => "textbox",
                "help" => "Ponha sua Afiliacao Cielo se for teste use 1006993069",
                "default" => "",
                "required" => true
            );

    		$this->_variables["chave"] = array(
                "name" => "Chave Cielo",
                "type" => "textbox",
                "help" => "Chave da afiliacao junto a Cielo se for teste use 25fbb99741c739dd84d7b06ec78c9bac718838630f30b112d033ce2e621b34f3.",
                "default" => "",
                "required" => true
            );

    		$this->_variables["loja"] = array(
                "name" => "Nome da Loja",
                "type" => "textbox",
                "help" => "Nome da sua loja a ser mostrado.",
                "default" => "",
                "required" => true
            );

    		$this->_variables["meios"] = array(
                "name" => "Bandeiras (No Minimo 2)",
                "type" => "dropdown",
                "help" => "Selecione os meios que ira aceitar na loja.",
                "default" => "",
                "options" => array(
                    "VISA" => "V",
                    "MASTER" => "M",
                    "ELO" => "EL",
                    "DINERS" => "DIN",
                    "DISCOVER" => "DIS",
                    "AMERICAN (AMEX)" => "AME",
                    "AURA" => "AUR",
                    "JCB" => "JCB"
                ),
                "required" => true,
                "multiselect" => true
            );

    		$this->_variables["parcelamin"] = array(
                "name" => "Parcela Minima",
                "type" => "textbox",
                "help" => "Ponha o Valor Minimo de Uma Parcela No Parcelamento de Pedidos",
                "default" => "15.00",
                "required" => true
            );

    		$this->_variables["juros"] = array(
                "name" => "Juros Credito",
                "type" => "textbox",
                "help" => "Se parcelar sem juros, especificar a taxa de juros.",
                "default" => "0.00",
                "required" => true
            );

    		$this->_variables["div"] = array(
                "name" => "Dividir em ate:",
                "type" => "dropdown",
                "help" => "Sera cobrado juros a partir da parcela.",
                "default" => "12",
                "options" => array(
                    "1x" => "1",
                    "2x" => "2",
                    "3x" => "3",
                    "4x" => "4",
                    "5x" => "5",
                    "6x" => "6",
                    "7x" => "7",
                    "8x" => "8",
                    "9x" => "9",
                    "10x" => "10",
                    "11x" => "11",
                    "12x" => "12"
                ),
                "required" => true
            );

    		$this->_variables["jurosde"] = array(
                "name" => "Sem Juros ate:",
                "type" => "dropdown",
                "help" => "Sera cobrado juros a partir da parcela.",
                "default" => "6",
                "options" => array(
                    "Nenhuma" => "99",
                    "1x" => "1",
                    "2x" => "2",
                    "3x" => "3",
                    "4x" => "4",
                    "5x" => "5",
                    "6x" => "6",
                    "7x" => "7",
                    "8x" => "8",
                    "9x" => "9",
                    "10x" => "10",
                    "11x" => "11",
                    "12x" => "12"
                ),
                "required" => true
            );

    		$this->_variables["tipojuros"] = array(
                "name" => "Tipo Parcelamento",
                "type" => "dropdown",
                "help" => "",
                "default" => "2",
                "options" => array(
                    "Parcelado Loja" => "2",
                    "Parcelado Operadora" => "3"
                ),
                "required" => true
            );

    		$this->_variables["captura"] = array(
                "name" => "Tipo de Captura",
                "type" => "dropdown",
                "help" => "",
                "default" => "sim",
                "options" => array(
                    "Automatica" => "sim",
                    "Captura Posterior" => "nao"
                ),
                "required" => true
            );
        }

    	public function parcelar($valorTotal, $taxa, $nParcelas)
        {
    		$taxa = $taxa / 100;
    		$cadaParcela = $valorTotal * $taxa / (1 - 1 / pow(1 + $taxa, $nParcelas));
    		return round($cadaParcela, 2);
    	}

	public function getofflinepaymentmessage() {
		$orders = $this->GetOrders();
		$orderIds = array();
		foreach ($orders as $order) {
			$orderIds[] = $order["orderid"];
			$orderValor[] = $order["total_inc_tax"];
		}
		if (isset($orderIds[0])) {
			$meios = $this->GetValue("meios");
			$minima = $this->GetValue("parcelamin");
			$dividirem = $this->GetValue("div");
			$semjuros = $this->GetValue("jurosde");
			$valor = $orderValor[0];
			$pedido = $orderIds[0];
			$juros = $this->GetValue("juros");
			$tipojuros = $this->GetValue("tipojuros");
			if ($minima < $valor) {
				$splitss = (int)$valor / $minima;
				if ($splitss <= $dividirem) {
					$div = $splitss;
				}
				else {
					$div = $dividirem;
				}
			}
			else {
				$div = 1;
			}

            $help = '<link href="'.$GLOBALS["ShopPath"].'/modules/checkout/cielotransparente/semantic/semantic.css" rel="stylesheet" />';
            $help .= "<script language=JavaScript>\r\n<!--\r\n\r\nvar message='Acesso negado!';\r\n\r\n///////////////////////////////////\r\nfunction clickIE4(){\r\nif (event.button==2){\r\nalert(message);\r\nreturn false;\r\n}\r\n}\r\n\r\nfunction clickNS4(e){\r\nif (document.layers||document.getElementById&&!document.all){\r\nif (e.which==2||e.which==3){\r\nalert(message);\r\nreturn false;\r\n}\r\n}\r\n}\r\n\r\nif (document.layers){\r\ndocument.captureEvents(Event.MOUSEDOWN);\r\ndocument.onmousedown=clickNS4;\r\n}\r\nelse if (document.all&&!document.getElementById){\r\ndocument.onmousedown=clickIE4;\r\n}\r\n\r\ndocument.oncontextmenu=new Function('alert(message);return false')\r\n\r\n// --> \r\n</script>\r\n<script type='text/javascript'>\r\n\r\nfunction getCheckedValue(radioObj) {\r\nvar objRadio = document.getElementsByName(radioObj).length;\r\nfor(i=0; i < objRadio; i++ ) {\r\nif (document.getElementsByName(radioObj)[i].checked) {\r\nreturn document.getElementsByName(radioObj)[i].value;\r\n}\r\n}\r\n}\r\nfunction Novamente(){\r\nlimpardados();\r\ndocument.getElementById('myspan').innerHTML = '<b>&nbsp;Processando Pagamento...Aguarde!</b>'; \r\ndocument.getElementById('res_pag').style.display = 'none';\r\ndocument.getElementById('pag_pag').style.display = '';\r\n}\r\n\r\n\$(document).ready(function()\r\n{\r\n    var ctrlDown = false;\r\n    var ctrlKey = 17, vKey = 86, cKey = 67;\r\n\r\n    \$(document).keydown(function(e)\r\n    {\r\n        if (e.keyCode == ctrlKey) ctrlDown = true;\r\n    }).keyup(function(e)\r\n    {\r\n        if (e.keyCode == ctrlKey) ctrlDown = false;\r\n    });\r\n\r\n    \$('.no-copy-paste').keydown(function(e)\r\n    {\r\n        if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;\r\n    });\r\n});\r\n\r\n\r\nfunction ValidarCPF(s) {\r\n\tvar c = s.substr(0,9);\r\n\tvar dv = s.substr(9,2);\r\n\tvar d1 = 0;\r\n\tfor (var i=0; i<9; i++) {\r\n\t\td1 += c.charAt(i)*(10-i);\r\n \t}\r\n\tif (d1 == 0) return false;\r\n\td1 = 11 - (d1 % 11);\r\n\tif (d1 > 9) d1 = 0;\r\n\tif (dv.charAt(0) != d1){\r\n\t\treturn false;\r\n\t}\r\n\td1 *= 2;\r\n\tfor (var i = 0; i < 9; i++)\t{\r\n \t\td1 += c.charAt(i)*(11-i);\r\n\t}\r\n\td1 = 11 - (d1 % 11);\r\n\tif (d1 > 9) d1 = 0;\r\n\tif (dv.charAt(1) != d1){\r\n\t\treturn false;\r\n\t}\r\n    return true;\r\n}\r\nfunction credito() {\r\nlimpardados();\r\n\$('#cc').val('visa');\r\ndocument.getElementById('credito').style.display = '';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction master() {\r\nlimpardados();\r\n\$('#cc').val('mastercard');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = '';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction elo() {\r\nlimpardados();\r\n\$('#cc').val('elo');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = '';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction din() {\r\nlimpardados();\r\n\$('#cc').val('diners');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = '';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction dis() {\r\nlimpardados();\r\n\$('#cc').val('discover');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = '';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction amex() {\r\nlimpardados();\r\n\$('#cc').val('amex');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = '';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction aura() {\r\nlimpardados();\r\n\$('#cc').val('amex');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = '';\r\ndocument.getElementById('jcb').style.display = 'none';\r\nreturn true;\r\n}\r\nfunction jcb() {\r\nlimpardados();\r\n\$('#cc').val('amex');\r\ndocument.getElementById('credito').style.display = 'none';\r\ndocument.getElementById('master').style.display = 'none';\r\ndocument.getElementById('elo').style.display = 'none';\r\ndocument.getElementById('din').style.display = 'none';\r\ndocument.getElementById('dis').style.display = 'none';\r\ndocument.getElementById('amex').style.display = 'none';\r\ndocument.getElementById('aura').style.display = 'none';\r\ndocument.getElementById('jcb').style.display = '';\r\nreturn true;\r\n}\r\n\r\nfunction makePOSTRequest(url, parameters) {\r\n      http_request = false;\r\n      if (window.XMLHttpRequest) { // Mozilla, Safari,...\r\n         http_request = new XMLHttpRequest();\r\n         if (http_request.overrideMimeType) {\r\n         \t// set type accordingly to anticipated content type\r\n            //http_request.overrideMimeType('text/xml');\r\n            http_request.overrideMimeType('text/html');\r\n         }\r\n      } else if (window.ActiveXObject) { // IE\r\n         try {\r\n            http_request = new ActiveXObject('Msxml2.XMLHTTP');\r\n         } catch (e) {\r\n            try {\r\n               http_request = new ActiveXObject('Microsoft.XMLHTTP');\r\n            } catch (e) {}\r\n         }\r\n      }\r\n      if (!http_request) {\r\n         alert('Cannot create XMLHTTP instance');\r\n         return false;\r\n      }\r\n\t  \r\n\t  document.getElementById('pag_pag').style.display = 'none';\t\r\n\t  document.getElementById('res_pag').style.display = '';\t\r\n      \r\n      http_request.onreadystatechange = alertContents;\r\n      http_request.open('POST', url, true);\r\n      http_request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');\r\n      http_request.setRequestHeader('Content-length', parameters.length);\r\n      http_request.setRequestHeader('Connection', 'close');\r\n      http_request.send(parameters);\r\n   }\r\n   \r\n   function alertContents() {\r\n      if (http_request.readyState == 4) {\r\n         if (http_request.status == 200) {\r\n            //alert(http_request.responseText);\r\n            result = http_request.responseText;\r\n            document.getElementById('myspan').innerHTML = result;            \r\n         } else {\r\n            alert('Erro no pedido.');\r\n         }\r\n      }\r\n   }\r\n   \r\n   function limpardados(){\r\ndocument.getElementById('nome').value='';\r\ndocument.getElementById('cartaonumero').value='';\r\ndocument.getElementById('cpf').value='';\r\ndocument.getElementById('mes').value='';\r\ndocument.getElementById('ano').value='';\r\ndocument.getElementById('cvs').value='';\r\n   }\r\n\r\nvar retorno;\r\nvar valor;\r\nvar mpg_popup;\r\nwindow.name='retorno';\r\nfunction fabrewin(valor)\r\n{\r\n\r\nvar nome1 = document.getElementById('nome').value;\r\nvar cartao1 = document.getElementById('cartaonumero').value;\r\nvar cpf1 = document.getElementById('cpf').value;\r\nvar mes = document.getElementById('mes').value;\r\nvar ano = document.getElementById('ano').value;\r\nvar cc = document.getElementById('cc').value;\r\nvar cvs = document.getElementById('cvs').value;\r\n\r\nvar poststr = 'cc=' + encodeURI( cc ) + '&num=' + encodeURI( cartao1 ) + '&mes=' + encodeURI( mes ) + '&ano=' + encodeURI( ano ) + '&cvs=' + encodeURI( cvs ) + '&nome=' + encodeURI( nome1 ) + '&cpf=' + encodeURI( cpf1 ) + '&hash=' + encodeURI( valor ) + ''; \r\n\r\nmakePOSTRequest('modules/checkout/cielotransparente/pagar.php', poststr);\r\n\r\nreturn true;\r\n}\r\n\r\nfunction SomenteNumero(e){\r\n    var tecla=(window.event)?event.keyCode:e.which;   \r\n    if((tecla>47 && tecla<58)) return true;\r\n    else{\r\n    \tif (tecla==8 || tecla==0) return true;\r\n\telse  return false;\r\n    }\r\n}\r\n\r\nfunction up(lstr){ // converte minusculas em maiusculas\r\nvar str=lstr.value; //obtem o valor\r\nlstr.value=str.toUpperCase(); //converte as strings e retorna ao campo\r\n}\r\n\r\nfunction pegavalor() {\r\n\r\nvar nome1 = document.getElementById('nome').value.length;\r\nif(nome1<=5){\r\nalert('Digite o nome completo do titular do cartao!');\r\ndocument.getElementById('nome').focus();\r\nreturn false;\r\n}\r\n\r\nvar cpf1 = document.getElementById('cpf').value.length;\r\nif(cpf1!=11){\r\nalert('Digite o cpf do titular do cartao!');\r\ndocument.getElementById('cpf').focus();\r\nreturn false;\r\n}\r\n\r\nvar cpfvalor = document.getElementById('cpf').value;\r\nvar validacaocpf = ValidarCPF(cpfvalor);\r\nif(validacaocpf==false){\r\nalert('CPF Digitado invalido ou incorreto!');\r\ndocument.getElementById('cpf').value='';\r\ndocument.getElementById('cpf').focus();\r\nreturn false;\r\n}\r\n\r\nvar cartao1 = document.getElementById('cartaonumero').value.length;\r\nif(cartao1<12){\r\nalert('Digite numero do cartao valido!');\r\ndocument.getElementById('cartaonumero').focus();\r\nreturn false;\r\n}\r\n\r\nvar mes = document.getElementById('mes').value.length;\r\nif(mes!=2){\r\nalert('Digite o mes de validade do cartao!');\r\ndocument.getElementById('mes').focus();\r\nreturn false;\r\n}\r\n\r\nvar ano = document.getElementById('ano').value.length;\r\nif(ano!=4){\r\nalert('Digite o ano de validade do cartao!');\r\ndocument.getElementById('ano').focus();\r\nreturn false;\r\n}\r\n\r\nvar cvs = document.getElementById('cvs').value.length;\r\nif(cvs<3){\r\nalert('Digite o codigo de seguranca do cartao!');\r\ndocument.getElementById('cvs').focus();\r\nreturn false;\r\n}\r\n\r\nvar valor = getCheckedValue('forma');\r\nif(valor) {\r\nfabrewin(valor);\r\nreturn true;\r\n}else{\r\nalert('" . GetLang("SelecioneCielo") . "');\r\n}\r\n}\r\n\r\n</script>";
            $numtabelas = 0;
			if (is_array($meios)) {
				if (in_array("V", $meios)) {
					++$numtabelas;
				}
				if (in_array("M", $meios)) {
					++$numtabelas;
				}
				if (in_array("EL", $meios)) {
					++$numtabelas;
				}
				if (in_array("DIN", $meios)) {
					++$numtabelas;
				}
				if (in_array("DIS", $meios)) {
					++$numtabelas;
				}
				if (in_array("AME", $meios)) {
					++$numtabelas;
				}
				if (in_array("AUR", $meios)) {
					++$numtabelas;
				}
				if (in_array("JCB", $meios)) {
					++$numtabelas;
				}
			}
			else {
				$numtabelas = 1;
			}

			$fixt = 70 / $numtabelas;
			$help .= "<div class='ui form'><table id='pag_pag' class='ui table'><tr style='width:100%;'>";
			$help .= "<td width='18%'><b>Selecione a bandeira</b></td>";
			if (is_array($meios)) {
				if (in_array("V", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:credito();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/visa.png'></a></td>";
				}
				if (in_array("M", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:master();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/mastercard.png'></a></td>";
				}
				if (in_array("EL", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:elo();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/elo.png'></a></td>";
				}
				if (in_array("DIN", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:din();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/diners.png'></a></td>";
				}
				if (in_array("DIS", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:dis();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/discover.png'></a></td>";
				}
				if (in_array("AME", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:amex();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/amex.png'></a></td>";
				}
				if (in_array("AUR", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:aura();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/aura.png'></a></td>";
				}
				if (in_array("JCB", $meios)) {
					$help .= "<td width='180'><a href='javascript:void(0);' onclick=\"javascript:jcb();\"><img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/jcb.png'></a></td>";
				}
				$help .= "</tr>";
				$help .= "
                    <tr>
                        <td width='100'>
                            <b>Nome do titular</b>
                        </td>

                        <td colspan='".($numtabelas - 1)."'>
                            <div class=\"ui left icon input\">
                                <input class='no-copy-paste' type='text' id='nome' name='nome' value='' size='70' onkeyup='up(this)'>
                                <input type='hidden' id='cc' name='cc' value=''>
                                <i class=\"user icon\"></i>
                            </div>
                        <td>
                    </tr>";

				$help .= "
                    <tr>
                        <td width='100'>
                            <b>CPF</b>
                        </td>

                        <td colspan='".($numtabelas - 1)."'>
                            <div class=\"ui left icon input\">
                                <input class='no-copy-paste' type='text' id='cpf' name='cpf' value='' maxlength='11' onkeypress='return SomenteNumero(event)' size='16'>
                                <i class=\"browser icon\"></i>
                            </div>
                        <td>
                    </tr>";

				$help .= "
                    <tr>
                        <td width='100'>
                            <b>N&uacute;mero do cart&atilde;o</b>
                        </td>

                        <td colspan='".($numtabelas - 1)."'>
                            <div class=\"ui left icon input\">
                                <input class='no-copy-paste' type='text' id='cartaonumero' name='cartaonumero' value='' maxlength='19' onkeypress='return SomenteNumero(event)' size='70'>
                                <i class=\"payment icon\"></i>
                            </div>
                        <td>
                    </tr>";

				$help .= "
                    <tr>
                        <td width='100'>
                            <b>Validade</b>
                        </td>

                        <td colspan='".($numtabelas - 1)."'>
                            <div  style='width: 90px;float: left; margin-right:5px;' class=\"ui left icon input\">
                                <input class='no-copy-paste' type='text' id='mes' name='mes' value='' placeholder='Mês' maxlength='2' onkeypress='return SomenteNumero(event)' size='2'>
                                <i class=\"calendar icon\"></i>
                            </div>

                            <div style='float: left;width: 130px;' class=\"ui left icon input\">
                                <input class='no-copy-paste' type='text' id='ano' name='ano' value='' placeholder='Ano' maxlength='4' onkeypress='return SomenteNumero(event)' size='2'>
                                 <i class=\"calendar icon\"></i>
                            </div>

                            <div class=\"ui pointing left blue label\" style=\"margin-top: 5px;margin-left: 10px;\">Ex: 06/2016</div>
                            <br class='Clear' />


                        <td>
                    </tr>";

				$help .= "
                    <tr>
                        <td width='100'>
                            <b>C&oacute;digo de seguran&ccedil;a</b>
                        </td>

                        <td colspan='".($numtabelas - 1)."'>
                            <div class=\"ui left icon  input\" style=\"width: 160px;\">
                                <input type='text' id='cvs' name='cvs' value='' maxlength='4' onkeypress='return SomenteNumero(event)' size='10'>
                                <i class=\"payment icon\"></i>
                            </div>
                        <td>
                    </tr>";
				$vmaxdiv = 12;
				$mmaxdiv = 12;
				$emaxdiv = 12;
				$dmaxdiv = 12;
				$dimaxdiv = 1;
				$amexmaxdiv = 1;
				$aurmaxdiv = 12;
				$jcbmaxdiv = 12;
				$par1 = "visa#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='credito' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='".$GLOBALS["ShopPath"]."/modules/checkout/cielotransparente/images/visa.png'>
                        </td>

                        <td colspan='".$numtabelas."'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='".base64_encode($par1)."'>".sprintf(GetLang("ParVisa1xCielo"), CurrencyConvertFormatPrice($valor, 1, 0))."</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $vmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "visa#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='".base64_encode($sem)."'>".sprintf(GetLang("ParVisaSemCielo"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "visa#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='".base64_encode($com)."'>".sprintf(GetLang("ParVisaComCielo"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0))."</label>";
						}
					}
					++$j;
				}
				$help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "mastercard#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='master' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/mastercard.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParMaster1xCielo"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $mmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "mastercard#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParMasterSemCielo"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "mastercard#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParMasterComCielo"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "elo#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='elo' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/elo.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParElo1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $emaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "elo#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParEloSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "elo#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParEloCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "diners#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='din' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/diners.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParDin1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $dmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "diners#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParDinSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "diners#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParDinCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "discover#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='dis' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/discover.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParDis1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $dimaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "discover#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParDisSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "elo#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParDisCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "amex#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='amex' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/amex.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParAmex1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $amexmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "amex#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParAmexSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "elo#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParAmexCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "aura#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='aura' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/aura.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParAur1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $aurmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "aura#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParAurSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "aura#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParAurCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$par1 = "jcb#" . $pedido . "#1#1#" . md5($valor);
				$help .= "
                    <tr id='jcb' style='display:none;'>
                        <td style=\"text-align: center;\">
                            <img src='" . $GLOBALS["ShopPath"] . "/modules/checkout/cielotransparente/images/jcb.png'>
                        </td>

                        <td colspan='" . $numtabelas . "'>
                            <label style=\"display:block;margin: 5px 0;\">
                                <input type='radio' id='forma' name='forma' value='" . base64_encode($par1) . "'>" . sprintf(GetLang("ParJcb1x"), CurrencyConvertFormatPrice($valor, 1, 0)) . "</label>";
				$j = 2;
				while ($j <= $div) {
					if ($j <= $jcbmaxdiv) {
						if ($j <= $semjuros) {
							$parcelas = $valor / $j;
							$parcelas = number_format($parcelas, 2, ".", "");
							$sem = "jcb#" . $pedido . "#2#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($sem) . "'>" . sprintf(GetLang("ParJcbSem"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0)) . "</label>";
						}
						else {
							$parcelas = $this->parcelar($valor, $juros, $j);
							$parcelas = number_format($parcelas, 2, ".", "");
							$com = "jcb#" . $pedido . "#" . $tipojuros . "#" . $j . "#" . md5($valor);
							$help .= "<label style=\"display:block;margin: 5px 0;\"><input type='radio' id='forma' name='forma' value='" . base64_encode($com) . "'>" . sprintf(GetLang("ParJcbCom"), $j, CurrencyConvertFormatPrice($parcelas, 1, 0), CurrencyConvertFormatPrice($parcelas * $j, 1, 0)) . "</label>";
						}
					}
					++$j;
				}
                $help .= "<br><a class=\"ui labeled green large icon button\" href='javascript:void(0);' onclick=\"javascript:pegavalor();\"><i class=\"right arrow icon\"></i>Pagar Agora</a></td></tr>";
				$help .= "</tr></table></div>";
				$help .= "<div id='res_pag' style='display: none;'>";
				$help .= "<br><div id='myspan'><div class=\"ui info icon message\"><i class=\"notched circle loading icon\"></i><div class=\"content\"><div class=\"header\">Processando</div><p>Processando pagamento, por favor aguarde.</p></div></div></div><br>";
				$help .= "</div>";
				$help .= "<br><p>Caso n&atilde;o seja redirecionado ap&oacute;s a resposta do pagamento, <a href='" . GetConfig("ShopPath") . "'>clique aqui!</a></p>";
				$help .= "</div>";
				return $help;
			}
			return "<br>Nenhum meio de pagamento ativo para este modulo, selecione no minimo 2 bandeiras de pagamento!";
		}
		return "";
	}



}

