<?php
/*********************/
/*  iRadikal.com     */
/*         NWS       */
/* IonCube 7 support */
/*        by:        */
/*      tokk250      */
/*********************/

require_once( dirname( __FILE__ )."/../../includes/classes/class.addon.php" );
class ADDON_CIELOSTATUSWS extends ISC_ADDON
{

    public function __construct( )
    {
        $this->SetId( "addon_cielostatusws" );
        $this->SetName( "Gestor de Pedidos Cielo WS" );
        $this->RegisterMenuItem( array( "location" => "mnuOrders", "icon" => "mnuOrders.gif", "text" => "Gestor de Pedidos Cielo WS", "description" => "Gerencie os pedidos cielo da loja, capturas, cancelamentos e consulta de dados de cliente.", "id" => "addon_cielostatusws" ) );
        $this->SetImage( "logo.png" );
        $this->SetHelpText( "Gerencie os pedidos cielo da loja, capturas, cancelamentos e consulta de dados de cliente." );
    }

    public function init( )
    {
        $this->ShowSaveAndCancelButtons( true );
    }

    public function SetCustomVars( )
    {
        return false;
    }

    public function EntryPoint( )
    {
        $nomm = "Buy Page Loja (Direto na Loja)";
        echo "<div class='BodyContainer'><h2>Gerenciado de Pedidos Cielo | ".$nomm."</h2>";
        echo "<p>Pedidos 'CRIADOS' caso nao concluidos apos 7 dias automaticamente o mesmo e cancelado. | Pedidos 'AUTORIZADOS' tem um prazo de 7 dias para capturar, caso nao seja capturado o mesmo automaticamente e cancelado.</p>";
        echo "<table width='100%' class='GridPanel SortableGrid AutoExpand' border='0'>";
        echo "<tr class='Heading3'>";
        echo "<td>Pedido #</td>";
        echo "<td>Titular Cartão</td>";
        echo "<td>TID</td>";
        echo "<td>Status Loja</td>";
        echo "<td>Status Cielo</td>";
        echo "<td>Cartao<br>6 Primeiros Digitos</td>";
        echo "<td>Total Pedido</td>";
        echo "<td>Acoes</td>";
        echo "</tr>";
        $query = "select * from [|PREFIX|]orders,cielows WHERE cielows.pedido=[|PREFIX|]orders.orderid ORDER BY [|PREFIX|]orders.orderid DESC";
        echo "<tr class=\"GridRow\">";
        echo "<td><b><a href='index.php?ToDo=editOrder&orderId=".@$row['orderid']."'>".@$row['orderid']."</a></b></td>";
        echo "<td>".@$row['nome']."</td>";
        echo "<td>".@$row['tid']."</td>";
        $querys = "select * from [|PREFIX|]order_status WHERE statusid = '".@$row['ordstatus']."'";
        echo "<td>".strtoupper( @$rows['statusdesc'] )."</td>";
        echo "<td>".strtoupper( $this->Msg( @$row['status'] ) )."</td>";
        echo "<td>".strtoupper( @$row['cc'] )."<br>".@$row['cartao']."****</td>";
        echo "<td>".CurrencyConvertFormatPrice( @$row['total_inc_tax'], 1, 1, true )."</td>";
        echo "<td><b><a href='index.php?ToDo=runAddon&addon=addon_cielostatusws&func=ver&tid=".@$row['tid']."&pedido=".@$row['orderid']."'>Capturar<br>Cancelar</a></B></td>";
        echo "</tr>";
    }

    public function Msg( $cod )
    {
        if ( FALSE )
        {
            $status = "Criada";
            break;
        }
        switch ( $cod )
        {
            case "1" :
                $status = "Em andamento";
                break;
            case "2" :
                $status = "Autenticada";
                break;
            case "3" :
                $status = "Não autenticada";
                break;
            case "4" :
                $status = "Autorizada";
                break;
            case "5" :
                $status = "Não autorizada";
                break;
            case "6" :
                $status = "Aprovada";
                break;
            case "8" :
                $status = "Não capturada";
                break;
            case "9" :
                $status = "Cancelada";
                break;
            case "10" :
                $status = "Em autenticação";
                break;
        }
        $status = "n/a";
        return $status;
    }

    public function ver()
    {
        $pedido = integer;
        echo "<h2>Dados TID ".$tid." | Pedido #".$pedido."</h2>";
        $query = "select * from cielows WHERE tid = '".$tid."'";
        if ( $modo == "T" )
        {
            $urlvisa = "https://qasecommerce.cielo.com.br/servicos/ecommwsec.do";
        }
        else
        {
            $urlvisa = "https://ecommerce.cbmp.com.br/servicos/ecommwsec.do";
        }
        $cancelamento = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?> \r\n<requisicao-cancelamento id=\"".md5( date( "YmdHisu" ) )."\" versao=\"1.1.0\"> \r\n  <tid>".$tid."</tid>\r\n  <dados-ec> \r\n    <numero>".$codigo."</numero> \r\n    <chave>".$chave."</chave> \r\n  </dados-ec> \r\n</requisicao-cancelamento>";
        $consulta = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?> \r\n<requisicao-consulta id=\"".md5( date( "YmdHisu" ) )."\" versao=\"1.1.0\"> \r\n  <tid>".$tid."</tid>\r\n  <dados-ec> \r\n    <numero>".$codigo."</numero> \r\n    <chave>".$chave."</chave> \r\n  </dados-ec> \r\n</requisicao-consulta>";
        $capturaxml = "<requisicao-captura id=\"".md5( date( "YmdHisu" ) )."\" versao=\"1.1.0\">\r\n\t\t\t<tid>".$tid."</tid>\r\n\t\t\t<dados-ec> \r\n    <numero>".$codigo."</numero> \r\n    <chave>".$chave."</chave> \r\n  </dados-ec>\r\n  </requisicao-captura>";
        if ( isset( $_GET['cancelar'] ) )
        {
            if ( isset( $can['codigo'] ) )
            {
                echo "<hr><b>Ops:</b> Erro: ".$can['codigo']."<br>";
                echo "<b>Log:</b> ".utf8_decode( $can['mensagem'] )."<br><hr>";
            }
            if ( isset( $can['autorizacao']['codigo'] ) && $can['autorizacao']['codigo'] == 9 )
            {
                @UpdateOrderStatus( @$_GET['pedido'], @ORDER_STATUS_CANCELLED );
            }
        }
        if ( isset( $_GET['capturar'] ) )
        {
            if ( isset( $cap['codigo'] ) )
            {
                echo "<hr><b>Ops:</b> Erro: ".$cap['codigo']."<br>";
                echo "<b>Log:</b> ".utf8_decode( $cap['mensagem'] )."<br><hr>";
            }
            if ( isset( $cap['autorizacao']['codigo'] ) && $cap['autorizacao']['codigo'] == 6 )
            {
                @UpdateOrderStatus( @$_GET['pedido'], @ORDER_STATUS_AWAITING_SHIPMENT );
            }
        }
        if ( isset( $con['pan'] ) )
        {
            echo "<b>PAN:</b> ".$con['pan']."<br>";
        }
        if ( isset( $con['dados-pedido'] ) )
        {
            echo "<b>Dados Pedido</b><br>";
            echo "<b>Pedido:</b> ".$con['dados-pedido']['numero']."<br>";
            echo "<b>Data/Hora:</b> ".$con['dados-pedido']['data-hora']."<br>";
            echo "<b>Detalhes:</b> ".$con['dados-pedido']['descricao']."<br>";
        }
        if ( isset( $con['forma-pagamento'] ) )
        {
            echo "<b>Forma de Pagamento</b><br>";
            echo "<b>Cartao:</b> ".strtoupper( $con['forma-pagamento']['bandeira'] )."<br>";
            echo "<b>Parcelas:</b> ".$con['forma-pagamento']['parcelas']."<br>";
        }
        if ( isset( $con['autorizacao'] ) )
        {
            echo "<b>Forma de Pagamento</b><br>";
            echo "<b>Status:</b> ".strtoupper( $this->Msg( $con['autorizacao']['codigo'] ) )."<br>";
            echo "<b>Valor:</b> R$ ".$con['autorizacao']['valor']."<br>";
            echo "<b>LR:</b> ".$con['autorizacao']['lr']."<br>";
        }
        if ( isset( $con['cancelamento'] ) )
        {
            echo "<b>Cancelamento</b><br>";
            echo "<b>Mensagem:</b> ".$con['cancelamento']['mensagem']."<br>";
            echo "<b>Data/Hora:</b> ".$con['cancelamento']['data-hora']."<br>";
        }
        echo "<br><br>";
        if ( isset( $con['autorizacao']['codigo'] ) )
        {
            @$GLOBALS['ISC_CLASS_DB']->Query( @"UPDATE cielows SET status=\"".@$con['autorizacao']['codigo']."\" WHERE pedido =\"".@integer."\"" );
            if ( $con['autorizacao']['codigo'] == 4 || $con['autorizacao']['codigo'] == 6 )
            {
                echo "<a href='index.php?ToDo=runAddon&addon=addon_cielostatusws&func=ver&tid=".$tid."&cancelar=sim&pedido=".integer."'>CANCELAR</a> |";
                echo " <a href='index.php?ToDo=runAddon&addon=addon_cielostatusws&func=ver&tid=".$tid."&capturar=sim&pedido=".integer."'>CAPTURAR</a> | ";
            }
        }
        echo "<a href='index.php?ToDo=runAddon&addon=addon_cielostatusws'>VOLTAR</a>";
    }

    public function Con( $url, $msg )
    {
        curl_setopt( $curl, CURLOPT_HEADER, 0 );
        curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_POST, 1 );
        curl_setopt( $curl, $Tmp_22, http_build_query( array( "mensagem" => $msg ) ) );
        curl_close( $curl );
        return $DadosEnvio;
    }

    public function simpleXMLToArray( $xml, $flattenValues = true, $flattenAttributes = true, $flattenChildren = true, $valueKey = "@value", $attributesKey = "@attributes", $childrenKey = "@children" )
    {
        $return = array( );
        if ( !$xml instanceof SimpleXMLElement )
        {
            return $return;
        }
        if ( strlen( $_value ) == 0 )
        {
            $_value = null;
        }
        if ( $_value !== null )
        {
            if ( !$flattenValues )
            {
                $return[$valueKey] = $_value;
            }
            else
            {
            }
        }
        $children = array( );
        $first = true;
        foreach ( $xml->children( ) as $elementName => $child )
        {
            if ( isset( $children[$elementName] ) )
            {
                if ( $first )
                {
                    unset( $children[$elementName] );
                    $children[$elementName][] = $temp;
                    $first = false;
                }
                $children[$elementName][] = $value;
            }
            else
            {
                $children[$elementName] = $value;
            }
        }
        if ( 0 < count( $children ) )
        {
            if ( !$flattenChildren )
            {
                $return[$childrenKey] = $children;
            }
            else
            {
            }
        }
        $attributes = array( );
        foreach ( $xml->attributes( ) as $name => $value )
        {
            $attributes[$name] = trim( $value );
        }
        if ( 0 < count( $attributes ) )
        {
            if ( !$flattenAttributes )
            {
                $return[$attributesKey] = $attributes;
            }
            else
            {
                $return = $xml->getName;
            }
        }
        return $return;
    }

}

?>
