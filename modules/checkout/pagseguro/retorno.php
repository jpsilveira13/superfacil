<?php
include "../../../init.php";
//inicio da funcao pagseguro
$token = GetModuleVariable('checkout_pagseguro','token');
define('TOKEN', $token);
class PagSeguroNpi {
	
	private $timeout = 20; // Timeout em segundos
	
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}


function StatusPgSeguro($st){
switch($st){
case 'Completo':
$a = ORDER_STATUS_AWAITING_SHIPMENT;
break;
case 'Aguardando Pagto':
$a = ORDER_STATUS_PENDING;
break;
case 'Aprovado':
$a = ORDER_STATUS_AWAITING_SHIPMENT;
break;
case 'Em Análise':
$a = ORDER_STATUS_PENDING;
break;
case 'Cancelado':
$a = ORDER_STATUS_CANCELLED;
break;
}
return $a;
}

function pagseguro() {
if (count($_POST) > 0) {
	
$npi = new PagSeguroNpi();
$result = $npi->notificationPost();
	
$transacaoID = $_POST['TransacaoID'];
$TransacaoStatus = $_POST['StatusTransacao'];
$Forma = $_POST['TipoPagamento'];
$Email = $_POST['CliEmail'];
$Transacao = $_POST['Referencia'];
	
if ($result == "VERIFICADO") {

$mudar = StatusPgSeguro($TransacaoStatus);

@UpdateOrderStatus($Transacao, $mudar);
$query = "UPDATE [|PREFIX|]orders SET ordpayproviderid = '".$transacaoID."', 
ordpaymentstatus = '".strtoupper($TransacaoStatus)." | ".$Email."' where orderid = '".$Transacao."'";
@$GLOBALS['ISC_CLASS_DB']->Query($query);

}
}
}
@pagseguro();
echo '<meta http-equiv="Refresh" content="0; url='.GetConfig('ShopPath').'">';
?>