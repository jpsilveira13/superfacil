<?php

/**
* Language file variables for the jobs bouncing area.
*
* @see GetLang
*
* @version     $Id: bounce.php,v 1.24 2008/03/05 03:02:59 scott Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the jobs bouncing area... Please backup before you start!
*/

// we need some variables from the lists language file.
require_once(dirname(__FILE__) . '/lists.php');

define('LNG_BadLogin_Details', 'N&atilde;o &eacute; poss&iacute;vel autenticar-se utilizando os dados fornecidos, o servidor retornou esta mensagem de erro:: %s<br/>Confira a mensagem de erro e tente novamente.');

define('LNG_Bounce_No_ImapSupport_Heading', 'Processar e-mails Devolvidos');

define('LNG_Bounce_Step1', 'Processar e-mails Devolvidos');
define('LNG_Bounce_CancelPrompt', 'Tem certeza de que deseja cancelar o processamento e-mails devolvidos?');

define('LNG_Bounce_Step2', 'Processar e-mails Devolvidos');

define('LNG_Bounce_Step3', 'Processar e-mails Devolvidos');
define('LNG_StartProcessing', 'Iniciar Processamento');

define('LNG_EnterBouncePassword', 'Por favor, a senha da conta de e-mails devolvidos.');
define('LNG_BounceUsername', LNG_ListBounceUsername);
define('LNG_HLP_BounceUsername', 'Digite o nome de usu&aacute;rio para a conta de e-mails devolvidos.<br/>Podendo ser \\\'username\\\' ou \\\'username@domain.com\\\' dependendo do host.');



define('LNG_BouncePassword', LNG_ListBouncePassword);
define('LNG_HLP_BouncePassword', 'Insira a senha da conta do e-mail Bounce.');

define('LNG_BounceResults_InProgress', 'Processamento de Bounce em progresso');
define('LNG_BounceResults_InProgress_Message', 'Por favor espere o processo dos %s email(s) encontrados na sua conta...');

define('LNG_BounceResults_InProgress_HardBounces_Many', '%s retornos criticos foram encontrados at&eacute; agora');
define('LNG_BounceResults_InProgress_HardBounces_One', '1  retorno critico foi encontrado at&eacute; agora');

define('LNG_BounceResults_InProgress_SoftBounces_Many', '%s retornos leves foram encontrados at&eacute; agora');
define('LNG_BounceResults_InProgress_SoftBounces_One', '1  retorno leve foi encontrado at&eacute; agora');

define('LNG_BounceResults_InProgress_EmailsIgnored_Many', '%s e-mails ignorados at&eacute; agora.');
define('LNG_BounceResults_InProgress_EmailsIgnored_One', '1  e-mail ignorado at&eacute; agora.');

define('LNG_BounceResults_HardBounces_Many', '%s e-mails foram processados com "retornos criticos"');
define('LNG_BounceResults_HardBounces_One', '1 e-mail foi processado com um "retorno critico"');

define('LNG_BounceResults_SoftBounces_Many', '%s e-mails foram processados com "retorno leve"');
define('LNG_BounceResults_SoftBounces_One', '1 e-mail foi processado com um "retorno leve"');

define('LNG_BounceResults_Finished', 'Processo de e-mails Retornados');
define('LNG_BounceResults_Message_Multiple', '%s e-mails foram encontrados na conta de e-mail.');
define('LNG_BounceResults_Message_One', '1 e-mail foi encontrado na conta de e-mail.');

define('LNG_ViewBounceStatistics', 'Ver Estatisticas de Retorno');

/**
**************************
* Changed/Added in NX1.0.5
**************************
*/

define('LNG_BounceServer', LNG_ListBounceServer);
define('LNG_HLP_BounceServer', 'Digite o nome do servidor de e-mail para conectar-se assim Retornar e-mails podem ser processados. Isso pode ser tanto no formato de apenas hostname ou pode incluir uma porta alternativa com hostname:porta');

define('LNG_AddOwnBounceRules', '<br/>Voc&ecirc; ou seu administrador pode modificar as regras utilizadas pela rejei&ccedil;&atilde;o editando o arquivo admin/resources/user_bounce_rules.php');

define('LNG_SaveBounceServerDetails','Salvar Detalhes do Servidor de Retorno');
define('LNG_SaveBounceServerDetailsExplain','Sim, salve estes detalhes');

define('LNG_BounceDetailsSaved', 'Detalhes de retornos salvos.');


/**
**************************
* Changed/Added in NX1.0.7
**************************
*/
define('LNG_BounceResults_InProgress_Progress', 'Processando %s de %s emails');

/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_BounceLogin_Successful', 'Seu retorno de e-mail foi registrado em.');
define('LNG_Bounce_TestHeading', 'Testar configura&ccedil;&otilde;es de e-mail de retorno.');

define('LNG_Bounce_StartTesting', 'Checando sua conta de "retorno"... <br />Este processo dura at&eacute; 2 minutos...');

/**

**************************
* Changed/Added in NX 1.4
**************************
*/
define('LNG_BounceResults_InProgress_EmailsDeleted_Many', '%s e-mails foram apagados at&eacute; agora.');
define('LNG_BounceResults_InProgress_EmailsDeleted_One', '1  e-mail foi apagado at&eacute; agora.');

define('LNG_BounceResults_EmailsIgnored_Many', '%s e-mails ignorados nesta conta de e-mail. Estes podem n&atilde;o ser retornos (por exemplo, spam) ou elas n&atilde;o corresponde a nenhuma das regras de retorno.' . LNG_AddOwnBounceRules);
define('LNG_BounceResults_EmailsIgnored_One', '1 e-mail foi ignorado na conta de e-mail. Este pode n&atilde;o ser retorno (por exemplo, spam) ou ele n&atilde;o corresponde a nenhuma das regras de retorno.' . LNG_AddOwnBounceRules);

define('LNG_BounceResults_EmailsDeleted_Many', '%s e-mails foram apagados na conta de e-mail. Este &eacute; mais prov&aacute;vel ser AutoResposta, (por exemplo, Configura&ccedil;&otilde;es de F&eacute;rias ou tempo offline).');
define('LNG_BounceResults_EmailsDeleted_One', '1 e-mail apagado da conta de e-mail. Este &eacute; mais prov&aacute;vel ser AutoResposta, (por exemplo, Configura&ccedil;&otilde;es de F&eacute;rias ou tempo offline).');

define('LNG_AgreeToDelete','Voc&ecirc; deve permitir que seus e-mails sejam excluidos do seu Inbox para continuar.');

define('LNG_BounceResults_Intro', 'Os e-mails retornados na sua conta foram processados com sucesso.');

/**
**************************
* Changed/Added in NX 1.4.1
**************************
*/
// these first two are used by cron bounce processing.
define('LNG_BadLogin_Subject_Cron', 'Detalhes de login inv&aacute;lidos para processamento de retorno');


/**
**************************
* Changed/Added in NX 1.5
**************************
*/
define('LNG_Bounce_Step1_Intro', 'O processamento de retorno ir&aacute; limpar o seu e-mail de listas de e-mails devolvidos para que n&atilde;o continuem a enviar para e-mails inv&aacute;lidos. Selecione uma lista de contactos para processar e-mails para retornar.');

define('LNG_BadLogin_Details_Cron', "Processamento autom&aacute;tico de retorno estava tentando acessar a conta e-mail (username '%s' do servidor '%s') mas foi incapaz de acessar.\n\nO mesmo recebeu a seguinte mensagem de erro: '%s'.\n\nLog do painel de controle aqui: %s\n\nEdite a lista de contatos aqui: %s\n\nFavor confirmar se os dados de acesso a conta de e-mail e servidores est&atilde;o corretas. Voc&ecirc; pode precisar usar o 'Configura&ccedil;&otilde;es extras de email' para corrigir o erro.\n\nDepois de ter feito isso clique em 'Testar configura&ccedil;&otilde;es de retorno' para checar a funcionalidade.\n\nApos confirmar o funcionamento, clique em 'Salvar' para certificar-se se as altera&ccedil;&otilde;es s&atilde;o mantidas.\n");

define('LNG_BounceAccountEmpty', 'Esta conta de e-mail nao cont&eacute;m e-mails para processar.');
define('LNG_Bounce_No_ImapSupport_Intro', 'Seu servidor nao tem os recursos necessarios para utilizar o RETORNO. Por favor entre em contato com o administrador do seu servidor de hospedagens para solicitar a instala&ccedil;&atilde;o do m&oacute;dulo "PHP-IMAP".<br/>Para mais informa&ccedil;&otilde;es <a href="http://www.php.net/imap" target="_blank">acesse aqui</a> no site do PHP.');
define('LNG_Bounce_Step3_Intro', 'Clique no botao a seguir para checar e processar as entradas de retornos de emails.');
define('LNG_HLP_SaveBounceServerDetails','Gostaria de guardar os detalhes de retorno deste servidor para esta campanha, para que voce nao precise digita-los novamente? Em caso afirmativo, assinale esta caixa.');
define('LNG_Bounce_Step2_Intro', 'Voc&ecirc; pode remover contatos da sua lista cujos endere&ccedil;os de e-mail s&atilde;o inv&aacute;lidos, bem como aqueles que nao podem receber e-mails porque a sua caixa de entrada est&aacute; cheia, etc.');

define('LNG_SelectAContactList', 'Selecione uma lista de contatos');

define('LNG_SelectContactList_Explain', 'Eu quero processar e-mail retornados para');

/**
*************************
* Changed/added in 5.5.0

*************************
*/

define('LNG_ExplainBounceDeleteAll', 'Aten&ccedil;&atilde;o: Esta op&ccedil;&atilde;o &eacute; perigosa para se usar em v&aacute;rias listas, use a mesma conta de retorno. <a href="#" onClick="LaunchHelp(\'845\'); return false;">O que &eacute; isso ?</a>');


/**
*************************
* Changed/added in 5.6.0
*************************
*/

define('LNG_SaveBounceServerDetails','Salvar estes detalhes?');
define('LNG_SaveBounceServerDetailsExplain','Sim, salve estes detalhes para eu n&atilde;o ter que escolher novamente posteriormente');

define('LNG_Bounce_NoLists', 'Nenhuma lista de contatos foi criada. Crie uma lista de contatos para processar os retornos.');
define('LNG_Bounce_CreateList', 'Criar Lista de Contatos...');

define('LNG_Bounce_Step1_Intro', 'Processando retornos de e-mail voc&ecirc; limpa sua lista de contatos retirando os e-mails inv&aacute;lidos, antigos ou com problemas, reduzindo a chance so seu servidor de e-mail entrar na blacklist de spam.');

define('LNG_SelectBounceEmail', 'Processar Retornos de');
define('LNG_WhyListsGrouped', 'Multiplas Listas Agrupadas?');
define('LNG_BounceProcessHelp', 'Ajuda para processar os retornos');
define('LNG_HLP_SelectBounceEmail', 'Selecione uma lista ou grupo de listas para processar os retornos de e-mail.<br /><br />Listas com detalhes comuns de retorno s&atilde;o agrupadas e processadas posteriormente.');
define('LNG_Bounce_PleaseChooseList', 'Primeiro escolha uma lista.');

define('LNG_BounceIWouldLikeTo', 'Eu gostaria de');
define('LNG_Bounce_Auto_Process', 'Processar retornos automaticamente (recomendado - Usando Cron)');
define('LNG_Bounce_Auto_Process_Steps', 'Para ter retornos processados automaticamente siga os passos');
define('LNG_Bounce_Auto_Process_Step1', 'V&aacute; at&eacute; <a href="%s" target="_blank">Editar</a> da sua lista "%s"');
define('LNG_Bounce_Auto_Process_Step2', 'Clique em "Detalhes" e acesse os detalhes');
define('LNG_Bounce_Auto_Process_Step3', 'Instale a tarefa de cron em seu servidor de hospedagem');
define('LNG_Bounce_Auto_Process_Step4', 'Habilite o processamento de retornos em "<a href="%s" target="_blank">Config. Automa&ccedil;&atilde;o (Cron)</a>"');
define('LNG_Bounce_Auto_Process_Step5', 'Pronto, voc&ecirc; j&aacute; instalou o processamento autom&aacute;tico de tratamento de e-mails retornados!');
define('LNG_Bounce_Auto_Button', 'Ok, obrigado pela ajuda');

define('LNG_Bounce_Why_Group_Lists', 'Listas com algum servidor de retorno s&atilde;o agrupadas aqui. Isso facilita a limpeza total de e-mails com erro');
define('LNG_Bounce_Why_Use_Auto', 'O processamento de retorno autom&aacute;tico &eacute; mais vi&aacute;vel, por causa que n&atilde;o depender&aacute; da sua m&aacute;quina ou do seu browser para executar, causando travamento e etc. Portanto deixe o servidor respons&aacute;vel por isto.');
define('LNG_Bounce_Why_Not_Manual', 'O processamento de retorno manual &eacute; suspeito de travamentos e falhas de navegador, causando processos incompletos. Isto tamb&eacute;m causa uma irregularidade no servidor por causa dos e-mails inv&aacute;lidos presos em grande quantidade, podendo acontecer o fato do seu servidor entrar na BlackList de Spam. Se voc&ecirc; &eacute; teimoso para ainda usar isto, n&atilde;o nos responsabilizamos pelas consequ&ecirc;ncias');
define('LNG_Bounce_Auto_Process_Why', 'Porqu&ecirc; o processamento de retorno autom&aacute;tico &eacute; recomendado?');
define('LNG_Bounce_Manual_Process_Why', 'Porqu&ecirc; o processamento de retorno manual n&atilde;o &eacute; recomendado?');
define('LNG_Bounce_Manual_Process', 'Processamento de retornos manual (n&atilde;o recomendado - N&atilde;o seja teimoso(a))');

define('LNG_Bounce_Help_HowTo', 'Processar retorno com Guia Passo-a-passo');
define('LNG_Bounce_Help_Work', 'Como o processamento de retorno trabalha?');
define('LNG_Bounce_Help_Customise', 'Como personalizar seu processamento de retorno');
define('LNG_Bounce_Help_Gmail', 'Eu posso usar uma conta do Gmail para retornos');
define('LNG_Bounce_Help_More', 'Veja mais ajudas sobre retornos');

define('LNG_Bounce_Connecting', 'Conectando no Servidor de E-mail...');
define('LNG_Bounce_Connecting_Msg', 'Espere enquanto conectamos no servidor.');
define('LNG_Bounce_Connecting_To', 'Conectando para %s...');

define('LNG_Bounce_Connection_Failed', 'Impossivel logar no servidor de e-mail (%s). A mensagem de erro e uma poss&iacute;vel solu&ccedil;&atilde;o segue abaixo.');
define('LNG_Bounce_Connection_Success', 'Uma conex&atilde;o para seu servidor de e-mail (%s) foi estabelecida com sucesso! Clique no bot&atilde;o a seguir para rastrear os retornos.');
define('LNG_Bounce_Find_Email_Step', 'Processando retornos para %s');
define('LNG_Bounce_Remove_Contact_Step', 'Processando retornos para %s');
define('LNG_Bounce_Review_Settings', '<< Rever configura&ccedil;&otilde;es');
define('LNG_Bounce_Find_Bounces', 'Rastrear retornos >>');
define('LNG_Bounce_Finding_Bounces', 'Rastreando retornos...');
define('LNG_Bounce_Attempt_To_Find', 'Espere o rastreamento. N&atilde;o feche esta janela... teimoso(a)...');

define('LNG_Bounce_Help_PossibleSolutions', 'Veja a poss&iacute;vel solu&ccedil;&atilde;o abaixo. Clique no link para ver mais informa&ccedil;&otilde;es:');
define('LNG_Bounce_Help_PossibleSolutions_Unknown', "Imposs&iacute;vel ler informa&ccedil;&otilde;es deste erro, mas ainda temos uma esperan&ccedil;a:");

define('LNG_Bounce_Error_Unknown', '(Erro Desconhecido - Putz!!)');

define('LNG_Bounce_Error_CertFailure', 'Certificado SSL expirado ou inv&aacute;lido');
define('LNG_Bounce_Help_CertFailure1', 'Use a op&ccedil;&atilde;o para n&atilde;o validar certificados');

define('LNG_Bounce_Error_InvalidServer', 'Servidor Inv&aacute;lido');
define('LNG_Bounce_Help_InvalidServer1', 'Cheque novamente o seu servidor de retornos');

define('LNG_Bounce_Error_TimeOut', 'Conex&atilde;o Pedida');
define('LNG_Bounce_Help_TimeOut1', 'Verifique se seu servidor ainda est&aacute; no ar ou se algum firewall est&aacute; bloqueando');
define('LNG_Bounce_Help_TimeOut2', 'Tente usar um protocolo ou uma porta diferente');

define('LNG_Bounce_Error_LoginFailed', 'Falha de login');
define('LNG_Bounce_Help_LoginFailed1', 'Cheque o usu&aacute;rio e a senha');

define('LNG_Bounce_Error_ConnRefused', 'Falha na Conex&atilde;o');

define('LNG_Bounce_Error_SSLFailed', 'Negocia&ccedil;&atilde;o SSL Falha');
define('LNG_Bounce_Help_SSLFailed1', 'Tente usar a op&ccedil;&atilde;o sem SSL e sem TLS');

define('LNG_Bounce_Error_InvalidSpec', 'Especifica&ccedil;&atilde;o remota inv&aacute;lida');
define('LNG_Bounce_Help_InvalidSpec1', 'O suporte a SSL do PHP em seu servidor precisa est&aacute; habilitado');

define('LNG_Bounce_Found_None_Summary', 'Nenhum retorno brusco ou leve foi encontrado. S&atilde;o %d outros e-mails para deletar.');
define('LNG_Bounce_Found_Summary', '<b>%s</b> e-mails retornados foram encontrados. S&atilde;o <b>%s retornos bruscos</b> e <b>%s retornos leves</b>. Voc&ecirc; pode marcar como inativo ou remover da sua(s) lista(s) abaixo');
define('LNG_Bounce_Flag_Hard_Bounces_Inactive', 'Marque Retornos Bruscos como Inativos (Recomendado)');
define('LNG_Bounce_Delete_Hard_Bounces', 'Exclua permanentemente os retornos bruscos da minha(s) lista(s)');
define('LNG_Bounce_Flag_Soft_Bounces_Inactive', 'Marque Retornos Leves como Inativos (N&atilde;o Recomendado)');
define('LNG_Bounce_Flag_Hard_Bounces_Inactive_Intro', 'Um retorno brusco indica um e-mail inv&aacute;lido que n&atilde;o existe. <br />Escolha esta op&ccedil;&atilde;o para marcar os retornos bruscos como e-mails inativos, assim eles n&atilde;o receber&atilde;o mais e-mails de campanhas.');
define('LNG_Bounce_Flag_Soft_Bounces_Inactive_Intro', 'Um retorno leve indica um problema tempor&aacute;rio, pode ser caixa de entrada cheia ou problemas de entrega de e-mail.<br />Escolha esta op&ccedil;&atilde;o para marcar os retornos leves como inativos para n&atilde;o receberem mais e-mails de campanhas.');
define('LNG_Bounce_Delete_Hard_Bounces_Intro', 'Um retorno brusco indica um e-mail inv&aacute;lido que n&atilde;o existe. <br />Escolha esta op&ccedil;&atilde;o para excluir permanentemente todos os contatos da sua lista de contatos.');
define('LNG_Bounce_Process_Now', 'Processar Retorno Agora');
define('LNG_Bounce_Delete_Now', 'Deletar e-mails Agora');
define('LNG_BounceResults_InProgress', 'Processando retornos...');
define('LNG_Bounce_PleaseChooseOption', 'Escolha pelo menos 1 op&ccedil;&atilde;o para processar os retornos.');

define('LNG_Bounce_Process_Success', '<b>%d retornos</b> foram processados com sucesso. Clique no bot&atilde;o a seguir para processar retornos de outra lista.');
define('LNG_Bounce_Process_Once_More', 'Processar Retornos em Outra Lista');
define('LNG_Bounce_Process_Finished', 'Terminei !');
define('LNG_Bounce_Finished_Step', 'Retornos Processados para %s');
