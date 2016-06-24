<?php

    $tituloemail = 'Rastreamento Correios - '.$objeto.' em '.date('d/m/Y');

    // Mensagem que é enviado ao cliente
    $msg = "
        <table width=600 border=0>
            <tr>
                <td>
                    <p><b>RASTREAMENTO DE SUA ENCOMENDA!</b></p>
                    <p>Prezado cliente, Seu pedido já foi despachado pelo Correios.<br />
                    Este e-mail está sendo enviado para lhe informar a situação da entrega.</p>
                    <br />
                    <p><i>Histórico do Objeto: <b><a href='".$url."' target='_blank'>".$objeto."</a></b>
                    <br />
                    <br />
                    N° do pedido: <b>".$pedido."</b> - Status: <b>".$var['status']."</b> em <b>".$var['data_status']." ".$var['hora_status']."</b>
                </td>
            </tr>
        </table>

        <table width=600 border=1>
            <tr>";
    $msg .= "<td width=20%>Data</td>";
    $msg .= "<td width=60%>Local</td>";
    $msg .= "<td width=20%>Situacao</td></tr>";
    $msg .= "<tr>".$var['tabela']."</tr>";
    $msg .= "</table><br><i>Mais informações acesse: <a href='".$urlsite."' target='_blank'>".$nomeloja."</a></i>";
    $msg .= "</table><br><i></a></i>";
    $msg .= "</table><br><i>Agradecemos por comprar conosco!</a></i>";
    $msg .= "</table><br><i></a></i>";
?>