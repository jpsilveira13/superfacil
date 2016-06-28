<?php
// ponha o dominio onde voce ira instalar a loja com www. Ex: www.site.com.br
$domain='www.supermercadofacil.com';

// nao modificar
$domain=substr($domain,4);
$nfe = "16";
////////////////////

// uso: 8 = premium, 4 = super, 2 = mega, 1 = mini
$versao = "8";

// ponha o numero de produtos para loja onde 0 e ilimitados
$produtos = "0";

// ponha o numero de usuarios para loja onde 0 e ilimitados
$usuarios = "0";

// ponha a data de expirracao da loja mes, dia e ano
$vencimento = mktime(0, 0, 0, 6, 24, 3000);

$serial = strrev(base64_encode('JRLOJA'.base64_encode(pack("CCVvvH*", $nfe,$versao,$vencimento,$usuarios,$produtos,md5($domain))).'2010'));
$serial = str_replace('==','JRLOJA',$serial);
$serial = str_replace('1','%',$serial);
$serial = str_replace('2','&',$serial);
$serial = str_replace('3','#',$serial);
$serial = str_replace('4','@',$serial);
echo '<b>Serial da Loja:</b> '.$serial. "<br><br>";

$dec = str_replace('@','4',$serial);
$dec = str_replace('#','3',$dec);
$dec = str_replace('&','2',$dec);
$dec = str_replace('%','1',$dec);
$dec = str_replace('JRLOJA','==',$dec);
$dec = strrev($dec);
$dec = base64_decode($dec);
$dec = str_replace('2010','',$dec);
$dec = str_replace('JRLOJA','',$dec);
echo '<br><b>Original:</b> ISC'.$dec;
echo '<br><br>';

?>
