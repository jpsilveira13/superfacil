<?php
/**
* Language file variables for the stats area.
*
* @see GetLang
*
* @version     $Id: stats.php,v 1.64 2008/02/15 00:58:43 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the stats area... Please backup before you start!
*/

define('LNG_Stats_PrintReport', 'Imprimir Relat&oacute;rio');
define('LNG_Stats_ExportReport', 'Exportar Relat&oacute;rio');

define('LNG_Stats_TotalDelivered', 'Total Entregue');
define('LNG_Stats_TotalForwards', 'Total Encaminhado');
define('LNG_Stats_TotalOpens', 'Total Abertos');
define('LNG_Stats_TotalUniqueOpens', 'Total abertura &uacute;nica');
define('LNG_Stats_TotalLinkClicks', 'Total de Cliques link');
define('LNG_Stats_TotalClicks', 'Total de Cliques');
define('LNG_Stats_MostPopularLink', 'Mais Popular');
define('LNG_Stats_AverageClicks', 'M&eacute;dia de cliques (por e-mail aberto)');
define('LNG_LinksClickedChart', 'Gr&aacute;fico Links clicado ');
define('LNG_OpensChart', 'Abrir Gr&aacute;fico');
define('LNG_ForwardsChart', 'Gr&aacute;fico de Encaminhados');
define('LNG_Stats_TotalUnsubscribes', 'Total de Removidos');
define('LNG_Stats_MostUnsubscribes', 'Mais Remo&ccedil;&atilde;o');
define('LNG_UnsubscribesChart', 'Gr&aacute;fico de Remo&ccedil;&atilde;o');
define('LNG_UnsubscribeDate', 'Data de Remo&ccedil;&atilde;o');

define('LNG_Stats_ViewSummary', 'Ver Relat&oacute;rio');

define('LNG_Unsubscribe_Summary', 'Resumo de Removidos');
define('LNG_LinkClicks_Summary', 'Resumo cliques Link  ');
define('LNG_Opens_Summary', 'Abrir Resumo');
define('LNG_Forwards_Summary', 'Resumo de Encaminhados');

define('LNG_StatsDeleteDisabled', 'Voc&ecirc; n&atilde;o pode excluir as estat&iacute;sticas enquanto uma campanha de e-mail estiver sendo enviado.');
define('LNG_Delete_Stats_Selected', 'Excluir');
define('LNG_ChooseStatsToDelete', 'Escolha estat&iacute;sticas para excluir');
define('LNG_DeleteStatsPrompt', 'Tem certeza  que deseja excluir essas estatisticas?\nAssim que forem apagados nao podera ser recuperada.');

define('LNG_StatisticsDeleteSuccess_One', 'Estat&iacute;stica exclu&iacute;da com sucesso.');
define('LNG_StatisticsDeleteSuccess_Many', '%s Estat&iacute;stica exclu&iacute;da com sucesso.');

define('LNG_StatisticsDeleteFail_One', 'Estat&iacute;stica n&atilde;o foi exclu&iacute;da com sucesso. Por favor, tente novamente.');
define('LNG_StatisticsDeleteFail_Many', '%s Estat&iacute;stica n&atilde;o foi exclu&iacute;da com sucesso. Por favor, tente novamente.');

define('LNG_StatisticsDeleteNotFinished_One', 'Uma estat&iacute;stica n&atilde;o podem ser apagados enquanto uma campanha de e-mail ainda est&aacute; sendo enviada.');
define('LNG_StatisticsDeleteNotFinished_Many', '%s Uma estat&iacute;stica n&atilde;o podem ser apagados enquanto uma campanha de e-mail ainda est&aacute; sendo enviada.');

define('LNG_DateStarted', 'Data de in&iacute;cio');
define('LNG_DateFinished', 'Data de T&eacute;rmino');
define('LNG_TotalRecipients', 'Destinat&aacute;rios');
define('LNG_UnsubscribeCount', 'Remo&ccedil;&otilde;es');
define('LNG_ExportReport', 'Exportar Relat&oacute;rio');
define('LNG_PrintReport', 'Imprimir Relat&oacute;rio');
define('LNG_ViewSummary', 'Exibir');

define('LNG_TotalEmails', 'Total Emails: ');
define('LNG_TotalOpens', 'Total aberturas: ');
define('LNG_TotalUniqueOpens', 'Total cliques &uacute;nicos: ');
define('LNG_AverageOpens', 'M&eacute;dia de Aberturas: ');
define('LNG_MostOpens', 'Maiores Abertura (Data/Hora): ');

/**
* Newsletter statistics language variables.
*/
define('LNG_Stats_NewsletterStatistics', 'Estat&iacute;sticas de Campanhas Enviadas');
define('LNG_Stats_ChooseNewsletter', '-- Escolha uma campanha de e-mail a partir da lista abaixo --');
define('LNG_Stats_Newsletters_Step1_Heading', 'Estat&iacute;sticas de campanhas enviadas por Email');
define('LNG_Stats_Newsletters_Cancel', 'Tem certeza que deseja cancelar a visualiza&ccedil;&atilde;o das estat&iacute;sticas dessa campanha de Email?');
define('LNG_Stats_Newsletters_SelectList_Heading', 'Detalhes campanha de Email');
define('LNG_Stats_Newsletters_SelectList_Intro', 'campanha de Email');
define('LNG_Stats_Newsletters_NoSelection', 'Por favor, escolha uma campanha de e-mail.');
define('LNG_Stats_Newsletters_Step2_Heading', 'Estat&iacute;stica de Campanhas Enviadas');
define('LNG_Stats_Newsletters_Step2_Intro', 'Ver estat&iacute;stica cde Campanhas Enviadas \'%s\'');
define('LNG_NoNewsletterStats', 'Nenhuma estat&iacute;stica da campanha de Email\'%s\' foi registrada.');
define('LNG_NewsletterSummaryChart', 'Resumo grafico da campanha de e-mail ');



/**
* User statistics language variables.
*/

// this is used if someone tries to view another users statistics. This is so they can't get someone elses' username.
// whether the other user actually exists is not displayed.
define('LNG_Stats_Unknown_User', 'O usu&aacute;rio n&atilde;o existe ou voc&ecirc; n&atilde;o tem acesso para ler as suas informa&ccedil;&otilde;es.');
define('LNG_Stats_ChooseUser', '-- Escolha um usu&aacute;rio na lista abaixo --');
define('LNG_Stats_Users_SelectList_Heading', 'Detalhes do usu&aacute;rio');
define('LNG_Stats_Users_SelectList_Intro', 'Nome de Usu&aacute;rio');
define('LNG_Stats_Users_NoSelection', 'Por favor, escolha um usu&aacute;rio.');

define('LNG_User_Summary_Graph', 'Usu&aacute;rio gr&aacute;fico resumo ');
define('LNG_User_Email_Campaigns_Sent_Graph', 'Gr&aacute;fico Campanhas de e-mail enviada ');
define('LNG_UserStatisticsSnapshot', 'Estat&iacute;sticas Instantaneas');
define('LNG_Stats_Users_Step3_Intro', 'Visualize resumo do usu&aacute;rio\'%s\'');
define('LNG_UserStatistics_Snapshot_EmailsSent', 'Emails Enviados');
define('LNG_Stats_UserCreateDate', 'Usu&aacute;rio Criados');
define('LNG_Stats_UserLastLoggedIn', '&Uacute;ltimos usu&aacute;rios Identificados');
define('LNG_UserLastNewsletterSent', '&Uacute;ltima campanha de e-mail enviada');
define('LNG_UserNewslettersSent', 'Campanhas de e-mail enviada');
define('LNG_UserAutorespondersCreated', 'Resposta Autom&aacute;tica Criada');
define('LNG_Stats_TotalEmailsSent', 'Emails Enviados');

define('LNG_UserHasNotSentAnyNewsletters', 'O usu&aacute;rio selecionado n&atilde;o tem qualquer campanhas de e-mail enviada.');
define('LNG_UserHasNotLoggedIn', 'O usu&aacute;rio n&atilde;o logado no sistema');

define('LNG_Stats_ViewNewsletterStatistics_User', 'Exibir estat&iacute;sticas do usu&aacute;rio \'%s\'');
define('LNG_Stats_ViewNewsletterStatistics_Introduction_User', 'Exibir estat&iacute;sticas do usu&aacute;rio \'%s\'');
define('LNG_Stats_Users_Step3_EmailsSent_Intro', 'Exibir o n&uacute;mero de e-mails enviados pelo usu&aacute;rio \'%s\'. Isso n&atilde;o inclui campanhas por e-mail que ainda est&atilde;o sendo enviados. (em processamento)');

/**
* Autoresponder statistics language variables.
*/
define('LNG_Stats_AutoresponderStatistics', 'Estat&iacute;sticas respostas autom&aacute;ticas');
define('LNG_Stats_ChooseAutoresponder', '-- Escolha uma resposta autom&aacute;tica a partir da lista abaixo --');
define('LNG_Stats_Autoresponders_Step1_Heading', 'Estat&iacute;sticas resposta autom&aacute;tica');
define('LNG_Stats_Autoresponders_Cancel', 'Tem certeza de que deseja cancelar a visualiza&ccedil;&atilde;o de estat&iacute;sticas de resposta autom&aacute;tica?');
define('LNG_Stats_Autoresponders_SelectList_Heading', 'Detalhes resposta autom&aacute;tica');
define('LNG_Stats_Autoresponders_SelectList_Intro', 'resposta autom&aacute;tica');
define('LNG_Stats_Autoresponders_NoSelection', 'Por favor, escolha uma resposta autom&aacute;tica.');

define('LNG_Stats_Autoresponders_Step2_Heading', 'Estat&iacute;sticas resposta autom&aacute;tica');
define('LNG_Stats_Autoresponders_Step2_Intro', 'Exibir Estat&iacute;sticas resposta autom&aacute;tica \'%s\'');
define('LNG_NoAutoresponderStats', 'Nenhuma estat&iacute;stica de resposta autom&aacute;tica \'%s\' Foi registrada.');
define('LNG_NoStatisticsToDelete', 'N&atilde;o existem estat&iacute;sticas para excluir.');
define('LNG_StatisticsDeleteNoStatistics_One', 'N&atilde;o &eacute; poss&iacute;vel excluir nenhum estat&iacute;sticas quando estiverem dispon&iacute;veis.');
define('LNG_StatisticsDeleteNoStatistics_Many', 'Cannot delete statistics when none are available.');
define('LNG_NoAutorespondersHaveBeenSent', 'Nenhuma resposta estat&iacute;stica de autom&aacute;tica dispon&iacute;vel. Voc&ecirc; fez configura&ccedil;&atilde;o para uma resposta autom&aacute;tica?');

/**
* Subscriber statistics language variables.
*/
define('LNG_Stats_ListStatistics', 'Estat&iacute;sticas Lista de Contatos');


/**
* Newsletter Stats Snapshot
*/
define('LNG_Stats_Newsletter_Summary_Graph', 'Resumo da campanha de Email');

define('LNG_Newsletter_Summary_Graph_openchart', 'Aberturas campanha de Email');
define('LNG_Newsletter_Summary_Graph_unsubscribechart', 'Campanha de e-mail removidos');
define('LNG_Newsletter_Summary_Graph_forwardschart', 'Campanha de e-mail Encaminhados');
define('LNG_Newsletter_Summary_Graph_linkschart', 'Campanha de e-mail Links');
define('LNG_Newsletter_Summary_Graph_bouncechart', 'Campanha de e-mail (Retornos)');
define('LNG_Newsletter_Summary_Graph_userchart', 'Emails Enviados');

define('LNG_NewsletterStatistics_Snapshot', 'Estat&iacute;sticas Instantaneas');
define('LNG_NewsletterStatistics_Snapshot_OpenStats', 'Abrir Stats');
define('LNG_NewsletterStatistics_Snapshot_LinkStats', 'Link Stats');
define('LNG_NewsletterStatistics_Snapshot_UnsubscribeStats', 'Removidos Stats');
define('LNG_NewsletterStatistics_Snapshot_ForwardStats', 'Encaminhados Stats');
define('LNG_NewsletterStatistics_Snapshot_Heading', 'Estat&iacute;sticas Instantaneas');
define('LNG_NewsletterStatistics_StartSending', 'Envios Iniciados');
define('LNG_NewsletterStatistics_FinishSending', 'Envios finalizados');
define('LNG_NewsletterStatistics_SendingTime', 'Enviados Hora');
define('LNG_NewsletterStatistics_SentTo', 'Enviado Para');
define('LNG_NewsletterStatistics_SentBy', 'Enviado Por');
define('LNG_NewsletterStatistics_Opened', 'Aberturas');
define('LNG_NotFinishedSending', 'Envio n&atilde;o Finalizado');
define('LNG_NewsletterStatistics_Snapshot_SendSize', '%s de %s');
Define('LNG_EmailOpens_Unique', '%s abertura &uacute;nica');
Define('LNG_EmailOpens_Total', '%s Total aberturas');
define('LNG_PreviewThisNewsletter', 'Visualizar esta campanha de Email');

define('LNG_DateOpened', 'Data Abertura');
define('LNG_NewsletterStatistics_Snapshot_OpenHeading', 'Exibir taxas de abertura dos endere&ccedil;os de e-mail para a campanha de e-mail \'%s\', enviada %s');
define('LNG_NewsletterStatistics_Snapshot_OpenHeading_Unique', 'Exibir taxas de abertura <b>Ünica</b> dos endere&ccedil;os de e-mail para a campanha de e-mail \'%s\', enviada %s');

define('LNG_NewsletterHasNotBeenOpened', 'Esta campanha de e-mail ainda n&atilde;o foi visualizada por qualquer destinat&aacute;rios.');
define('LNG_NewsletterHasNotBeenOpened_CalendarProblem', 'Esta campanha de e-mail ainda n&atilde;o foi visualizada por qualquer destinat&aacute;rio durante o per&iacute;odo selecionado.');


define('LNG_NewsletterStatistics_Snapshot_LinkHeading', 'Exibir estat&iacute;sticas de link clicado durante campanha de e-mail \'%s\', enviada %s');
define('LNG_NewsletterWasNotOpenTracked', 'O monitoramento de aberturas foi desativado para esta campanha de e-mail.');
define('LNG_NewsletterHasNotBeenClicked_NoLinksFound', 'N&atilde;o foram encontrados links nesta campanha de e-mail.');
define('LNG_NewsletterWasNotTracked_Links', 'O monitoramento de aberturas foi desativado para esta campanha de e-mail.');

define('LNG_NewsletterStatistics_Snapshot_UnsubscribesHeading', 'Exibir taxas de remo&ccedil;&atilde;o e endere&ccedil;os de e-mail que recebem boletins informativos \'%s\', enviada %s');
define('LNG_NewsletterHasNoUnsubscribes', 'Esta campanha de e-mail ainda n&atilde;o recebeu qualquer pedido de remo&ccedil;&atilde;o.');
define('LNG_NewsletterHasNoUnsubscribes_CalendarProblem', 'Esta campanha de e-mail ainda n&atilde;o recebeu qualquer pedido de remo&ccedil;&atilde;o durante o per&iacute;odo selecionado.');

define('LNG_NewsletterStatistics_Snapshot_ForwardsHeading', 'Exibir informa&ccedil;&otilde;es de e-mails enviandos para essa campanha de e-mail \'%s\', enviada %s');
define('LNG_NewsletterHasNoForwards', 'Esta campanha de e-mail ainda n&atilde;o foi enviada ou n&atilde;o inclui um Link envie a um amigo.');
define('LNG_NewsletterHasNoForwards_CalendarProblem', 'Esta campanha de e-mail n&atilde;o foi enviada a qualquer pessoa durante o per&iacute;odo selecionado ou n&atilde;o inclui um Link envie a um amigo.');


/**
* autoresponder stuff
*/
define('LNG_AutoresponderStatistics_Snapshot', 'Estat&iacute;stica Instantânea');
define('LNG_AutoresponderStatistics_Snapshot_OpenStats', 'Abertura Stats');
define('LNG_AutoresponderStatistics_Snapshot_LinkStats', 'Link Stats');
define('LNG_AutoresponderStatistics_Snapshot_UnsubscribeStats', 'Remo&ccedil;&atilde;o Stats');
define('LNG_AutoresponderStatistics_Snapshot_ForwardStats', 'Encaminhados Stats');
define('LNG_AutoresponderStatistics_Snapshot_Summary', 'Visualizar resumo de resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_Heading', 'Estat&iacute;stica Instantânea');
define('LNG_AutoresponderStatistics_StartSending', 'in&iacute;cio do Envio');
define('LNG_AutoresponderStatistics_FinishSending', 'Finaliza&ccedil;&atilde;o do Envio');
define('LNG_AutoresponderStatistics_SendingTime', 'Tempo de Envio');
define('LNG_AutoresponderStatistics_SentTo', 'Enviado para');
define('LNG_AutoresponderStatistics_SentBy', 'Enviado por');
define('LNG_AutoresponderStatistics_Opened', 'Aberturas');
define('LNG_AutoresponderStatistics_Snapshot_SendSize', '%s de %s');
define('LNG_PreviewThisAutoresponder', 'Visualizar esta resposta autom&aacute;tica');
define('LNG_AutoresponderStatistics_Snapshot_OpenHeading', 'Exibir taxa de abertura de endere&ccedil;os de e-mail para resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_OpenHeading_Unique', 'Exibir taxa de abertura <b>&uacute;nica</b> de endere&ccedil;os de e-mail para resposta autom&aacute;tica \'%s\'');


define('LNG_AutoresponderStatistics_Snapshot_LinkHeading', 'Exibir estat&iacute;sticas clique por link para resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderWasNotOpenTracked', 'Monitoramento de abertura foi desativado para esta resposta autom&aacute;tica.');
define('LNG_AutoresponderHasNotBeenClicked_NoLinksFound', 'Nenhum links encontrado nesta resposta autom&aacute;tica.');
define('LNG_AutoresponderWasNotTracked_Links', 'Link de monitoramento foi desativad para esta resposta autom&aacute;tica.');

define('LNG_AutoresponderStatistics_Snapshot_UnsubscribesHeading', 'Exibir taxas de remo&ccedil;&atilde;o e endere&ccedil;os de e-mail para resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderHasNoUnsubscribes', 'A resposta autom&aacute;tica n&atilde;o teve at&eacute; o momento solicita&ccedil;&atilde;o de remo&ccedil;&atilde;o.');
define('LNG_AutoresponderHasNoUnsubscribes_CalendarProblem', 'A resposta autom&aacute;tica n&atilde;o at&eacute; o momento nenhuma pedido de remo&ccedil;&atilde;o durante o per&iacute;odo selecionado.');

define('LNG_AutoresponderStatistics_Snapshot_ForwardsHeading', 'Ver e-mail encaminhando para resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderHasNoForwards', 'A resposta autom&aacute;tica n&atilde;o foi enviada a qualquer pessoa durante o per&iacute;odo selecionado ou n&atilde;o inclui um Link envie a um amigo.');
define('LNG_AutoresponderHasNoForwards_CalendarProblem', 'A resposta autom&aacute;tica n&atilde;o foi enviada para ningu&eacute;m durante o per&iacute;odo selecionado.');

define('LNG_AutoresponderStatistics_CreatedBy', 'Criado por');
define('LNG_AutoresponderStatistics_SentWhen', 'Enviado em');

define('LNG_ForwardedBy', 'Encaminhado por');
define('LNG_ForwardedTo', 'Encaminhado para');
define('LNG_ForwardTime', 'Encaminhado data');
define('LNG_HasSubscribed', 'Lista de Inscritos?');

define('LNG_LinkClicked', 'Link Clicado');
define('LNG_LinkClickTime', 'Hora Clique ');
define('LNG_AnyLink', '-- Exibir estat&iacute;sticas para todos os links --');

define('LNG_Today', 'Hoje');
define('LNG_Yesterday', 'Ontem');
define('LNG_Last24Hours', '&Uacute;ltimas 24 Horas');
define('LNG_Last7Days', '&Uacute;ltimos 7 dias');
define('LNG_Last30Days', '&Uacute;ltimos 30 Dias');
define('LNG_ThisMonth', 'Este M&ecirc;s');
define('LNG_LastMonth', 'M&ecirc;s passado');
define('LNG_AllTime', 'Todos Hor&aacute;rios');
define('LNG_DateRange', 'Periodo');

define('LNG_Newsletter_Summary_Graph', 'Grafico Resumo da campanha de e-mail ');
define('LNG_Summary_Graph_Opened', 'Aberturas (%s %%)');
define('LNG_Summary_Graph_Unopened', 'Nao abertos (%s %%)');

define('LNG_Autoresponder_Summary_Graph', 'Resumo gr&aacute;fico de resposta autom&aacute;tica');

define('LNG_Autoresponder_Summary_Graph_openchart', 'Abertura de resposta autom&aacute;tica');
define('LNG_Autoresponder_Summary_Graph_unsubscribechart', 'Removidos resposta autom&aacute;tica');
define('LNG_Autoresponder_Summary_Graph_forwardschart', 'resposta autom&aacute;tica encaminhada');
define('LNG_Autoresponder_Summary_Graph_linkschart', 'resposta autom&aacute;tica Links');

/**
* subscriber/mailing list stats.
*/
define('LNG_Subscribes', 'Assinantes');
define('LNG_Unsubscribes', 'Removidos');
define('LNG_Forwards', 'Encaminhados');
define('LNG_DateTime', 'Data/Hora');
define('LNG_New_Subscribes', 'Novos assinantes');
define('LNG_DomainName', 'Nome Dom&iacute;nio');
define('LNG_SubscribeCount', 'Assinantes');
define('LNG_ForwardCount', 'Encaminhados');
define('LNG_Summary_Domain_Name', '\'%s\' (%s %%)');
define('LNG_ListStatsTotalUnsubscribes', 'Total Assinantes: ');
define('LNG_ListStatsTotalForwards', 'Total Encaminhados: ');
define('LNG_ListStatsTotalForwardSignups', 'Total assinaturas: ');

define('LNG_List_Summary_Graph_openchart', 'Abrir Estat&iacute;sticas');
define('LNG_ListStatistics_Snapshot_OpenStats', 'Abrir Stats');
define('LNG_ListStatistics_Snapshot_OpenHeading', 'Exibir taxas de abertura de endere&ccedil;os de e-mail para campanhas por e-mail e resposta autom&aacute;tica \'%s\'');
define('LNG_ListStatistics_Snapshot_OpenHeading_Unique', 'Exibir taxas de abertura <b>&uacute;nica</b> de endere&ccedil;os de e-mail para campanhas por e-mail e resposta autom&aacute;tica para a lista \'%s\'');
define('LNG_ListOpenStatsHasNotBeenOpened', 'Nenhuma resposta autom&aacute;tica ou campanhas por Email, foram abertos.');
define('LNG_ListOpenStatsHasNotBeenOpened_CalendarProblem', 'Nenhuma campanhas por e-mail ou resposta autom&aacute;tica, foi aberta no intervalo de datas selecionado.');


define('LNG_List_Summary_Graph_linkschart', 'Links Gr&aacute;ficos');
define('LNG_ListStatistics_Snapshot_LinksStats', 'Link Stats');
define('LNG_ListLinkStatsHasNotBeenClicked', 'Nenhum Link na resposta autom&aacute;tica ou campanhas de e-mail desta lista, foram clicados.');

define('LNG_ListLinkStatsHasNotBeenClicked_CalendarLinkProblem', 'O link selecionado n&atilde;o foi clicado no per&iacute;odo selecionado.');
define('LNG_ListLinkStatsHasNotBeenClicked_LinkProblem', 'Nenhuma clique foi detectado para o link escolhido');

define('LNG_List_Summary_Graph_unsubscribechart', 'Gr&aacute;fico de Removidos');
define('LNG_ListStatistics_Snapshot_UnsubscribeStats', 'Removidos Stats');

define('LNG_List_Summary_Graph_forwardschart', 'Estat&iacute;sticas de Encaminhados');
define('LNG_ListStatistics_Snapshot_ForwardsStats', 'Encaminhados Stats');


/**
* Bounce messages
*/
define('LNG_NewsletterStatistics_Snapshot_BounceStats', 'Estatisticas de retorno');
define('LNG_NewsletterStatistics_Bounced', 'Retornados');
define('LNG_NewsletterStatistics_Snapshot_BounceHeading', 'Ver  estat&iacute;sticas de devolu&ccedil;&atilde;o de campanhas por e-mail \'%s\', enviada %s');
define('LNG_NewsletterHasNotBeenBounced', 'Nenhum relat&oacute;rio de bounce foi gerado para esta campanha por e-mail.');
define('LNG_NewsletterHasNotBeenBounced_BounceType', 'Nenhum %ss foram recebidos para esta campanha por e-mail.');
define('LNG_NewsletterHasNotBeenBounced_CalendarProblem', 'Nenhum relat&oacute;rio de bounce foi gerado para esta campanha de Emailno per&iacute;odo selecionado.');
define('LNG_NewsletterHasNotBeenBounced_CalendarProblem_BounceType', 'Nenhum %ss ocorreu no per&iacute;odo selecionado.');
define('LNG_AutoresponderStatistics_Snapshot_BounceStats', 'Bounce Stats');
define('LNG_AutoresponderStatistics_Bounced', 'Retornados');
define('LNG_AutoresponderStatistics_Snapshot_BounceHeading', 'Ver  estat&iacute;sticas de devolu&ccedil;&atilde;o de respostas autom&aacute;ticas \'%s\'');

define('LNG_AutoresponderHasNotBeenBounced', 'Nenhum relat&oacute;rio de bounces foi gerado para esta resposta autom&aacute;tica.');
define('LNG_AutoresponderHasNotBeenBounced_BounceType', 'Nenhum %ss foi recebido para esta resposta autom&aacute;tica.');
define('LNG_AutoresponderHasNotBeenBounced_CalendarProblem', 'Nenhum relat&oacute;rio de bounce foi gerado para esta resposta autom&aacute;tica no per&iacute;odo selecionado.');
define('LNG_AutoresponderHasNotBeenBounced_CalendarProblem_BounceType', 'Nenhum %ss ocorreu no per&iacute;odo selecionado.');

define('LNG_Summary_Graph_Bounced', 'Retornados (%s %%)');
define('LNG_Bounces', 'Retornos');
define('LNG_ListStatistics_Snapshot_BounceStats', 'Estatisticas de retorno');
define('LNG_ListStatsHasNotBeenBounced', 'Nenhum e-mails que foram enviados a esta lista foi devolvido.');
define('LNG_ListStatsHasNotBeenBounced_CalendarProblem_BounceType', 'Nenhum %ss ocorreu no per&iacute;odo selecionado.');

define('LNG_BounceCount', 'Retornos');
define('LNG_Stats_TotalBounces', 'Total de Retornos: ');
define('LNG_Bounce_Summary', 'Resumo de Retorno');
define('LNG_Stats_TotalSoftBounces', 'Total de Retorno Leve: ');
define('LNG_Stats_TotalHardBounces', 'Total de Retorno Criticos: ');
define('LNG_BounceChart', 'Carta de Retorno');
define('LNG_Bounce_Type_hard', 'Retornos criticos');
define('LNG_Bounce_Type_soft', 'Retornos leves');
define('LNG_Bounce_Type_any', 'Todos os tipos de retorno');
define('LNG_BounceType', 'Tipo de Retorno');
define('LNG_BounceRule', 'Regra de Retorno');
define('LNG_BounceDate', 'Data de Retorno');
define('LNG_Bounce_Type_hard_bounce', LNG_Bounce_Type_hard);
define('LNG_Bounce_Type_soft_bounce', LNG_Bounce_Type_soft);
define('LNG_Bounce_Type_unknown_bounce', 'Retorno Desconhecido');

define('LNG_Bounce_Rule_emaildoesntexist', 'Endere&ccedil;o de e-mail n&atilde;o existe');
define('LNG_Bounce_Rule_domaindoesntexist', 'Nome de dom&iacute;nio n&atilde;o existe');
define('LNG_Bounce_Rule_invalidemail', 'Endere&ccedil;o de e-mail inv&aacute;lido');
define('LNG_Bounce_Rule_relayerror', 'Chave de erro');

define('LNG_Bounce_Rule_overquota', 'Cota excedida');
define('LNG_Bounce_Rule_inactive', 'Conta de e-mail Inativa');

define('LNG_Stats_TotalBouncedEmails', 'Total e-mails Devolvidos');
define('LNG_HardBounces', 'Retornos criticos');
define('LNG_SoftBounces', 'Retornos leves');

/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_Bounce_Rule_blockedcontent', 'Bloqueado devido ao conte&uacute;do');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_Bounce_Rule_remoteconfigerror', 'Problema com configura&ccedil;&atilde;o remota de servidores');
define('LNG_Bounce_Rule_localconfigerror', 'Problema com configura&ccedil;&atilde;o de servidores locais ');

/**
**************************
* Changed/added in NX1.1.2
**************************
*/
define('LNG_Daily_Time_Display', 'ga');
define('LNG_DOW_Word_Display', 'D');
define('LNG_DOW_Word_Full_Display', 'l');
define('LNG_DOM_Number_Display', 'd');
define('LNG_Date_Display', 'D, jS M');

/**
**************************
* Changed/added in NX1.1.3
**************************
*/
define('LNG_Date_Display_Display', 'D, d. M');


/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_UserHasNotSentAnyNewsletters_SelectedDateRange', 'O usu&aacute;rio selecionado n&atilde;o tem  e-mail enviado para campanhas no per&iacute;odo selecionado.');

define('LNG_Stats_TotalUniqueClicks', 'Determinados links que foram clicados');

define('LNG_Stats_UserStatistics', 'Estat&iacute;sticas Contas de Usu&aacute;rio');
define('LNG_Stats_Users_Step1_Heading', 'Estat&iacute;sticas Contas de Usu&aacute;rio');
define('LNG_Stats_Users_Cancel', 'Tem certeza que deseja cancelar visualizar estat&iacute;sticas para este usu&aacute;rio?');
define('LNG_Stats_Users_Step3_Heading', 'Estat&iacute;sticas Contas de Usu&aacute;rio');

define('LNG_OpenedEmailAsType', 'Email abertos como');
define('LNG_OpenedEmailAs_Unknown', 'Desconhecido (n&atilde;o registrado)');
define('LNG_OpenedEmailAs_HTML', 'HTML Email');
define('LNG_OpenedEmailAs_Text', 'Texto Email');


// removed
// define('LNG_ListStatsTotalSubscribers', 'Total Subscribers: ');


/**
***************************
* Changed/added in NX 1.3.2
***************************
*/


define('LNG_Bounce_Rule_unknown', 'Desconhecido');

/**
***************************
* Changed/added in NX 1.4
***************************
*/

define('LNG_Export_Stats_Selected','Exportar');
define('LNG_Export_Not_Writable','N&atilde;o &eacute; poss&iacute;vel exportar Estat&iacute;sticas: N&atilde;o foi poss&iacute;vel gravar para %s');
define('LNG_Export_Newsletter_Statistics','As estat&iacute;sticas para as campanhas selecionadas foram exportadas. <a href="%s">Click here</a> para download.');
define('LNG_Print_Stats_Selected','Imprimir');
define('LNG_Stats_Export_Header_Subject','Assunto');
define('LNG_Stats_Export_Header_Date','Data');
define('LNG_Stats_Export_Header_Time','Hora');
define('LNG_Stats_Export_Header_Duration','Dura&ccedil;&atilde;o (min)');
define('LNG_Stats_Export_Header_Recipients','Destinat&aacute;rios');
define('LNG_Stats_Export_Header_Send_Rate','Taxa de envio (/min)');
define('LNG_Stats_Export_Header_Unique_Opened','Abertura &uacute;nica');
define('LNG_Stats_Export_Header_Total_Opened','Abertura Total');
define('LNG_Stats_Export_Header_Percent_Opened','% Aberturas');
define('LNG_Stats_Export_Header_Recipients_who_Clicked_Links','Destinat&aacute;rios que clicaram em links');
define('LNG_Stats_Export_Header_Percent_Recipients_who_Clicked','% Destinat&aacute;rios que clicaram');
define('LNG_Stats_Export_Header_Total_Links_Clicked','Total Links clicados');
define('LNG_Stats_Export_Header_Hard_Bounced','Hard Bounced');
define('LNG_Stats_Export_Header_Soft_Bounced','Soft Bounced');
define('LNG_Stats_Export_Header_Total_Bounced','Total Bounced');
define('LNG_Stats_Export_Header_Percent_Bounced','% Bounced');
define('LNG_Stats_Export_Header_Unsubscribed','Removidos');
define('LNG_Stats_Export_Header_Percent_Unsubscribed','% Removidos');
define('LNG_Stats_Export_Header_Forwarded','Encaminhados');
define('LNG_Stats_Export_Header_Recipients_who_Forwarded','Destinat&aacute;rios Encaminhados');
define('LNG_Stats_Export_Header_Percent_Recipients_who_Forwarded','% Destinat&aacute;rios Encaminhados');
define('LNG_Stats_OpenStatisticsSummary','Abrir Resumo Estat&iacute;sticas ');

define('LNG_Stats_Print_IncludeDetailsOf','Incluir detalhes de %d %s');
define('LNG_Stats_Print_open','pessoas que j&aacute; abriram este Email');
define('LNG_Stats_Print_click','pessoas que clicaram em um link');
define('LNG_Stats_Print_bounce','pessoas com Retorno de Email');
define('LNG_Stats_Print_unsubscribe','pessoas que cancelaram');
define('LNG_Stats_Print_forward','pessoas que j&aacute; encaminharam este Email');
define('LNG_Stats_Print_perdomain','dom&iacute;nios');

define('LNG_PrintEmailCampaignStatistics','Imprimir estat&iacute;sticas campanha de e-mail ');
define('LNG_PrintAutoresponderStatistics','Imprimir estat&iacute;sticas resposta autom&aacute;tica ');
define('LNG_SelectStatisticsToPrint','Por favor, escolha as estat&iacute;sticas que voc&ecirc; gostaria de imprimir');

define('LNG_Stats_Clickthrough','Taxas Click-through');
define('LNG_OpenRate','Open Rate: ');

define('LNG_Autoresponder_Summary_Graph_bouncechart', 'resposta autom&aacute;tica Bounces');
define('LNG_List_Summary_Graph_bouncechart', 'Bounce Gr&aacute;ficos');

define('LNG_NoNewslettersHaveBeenSent', 'Nenhuma estat&iacute;stica esta dispon&iacute;vel para essa campanha de e-mail marketing porque voc&ecirc; ainda n&atilde;o h&aacute; enviou. Clique em <em> Enviar uma Campanha de e-mail...</em> para enviar uma campanha.');

define('LNG_NewsletterStatistics_Send_TestMode_Enabled', '<br/>Esta campanha de e-mail foi enviada com o "Modo Teste" ativado. Isto significa que n&atilde;o foram enviados e-mails reais e este teste foi para ver qu&atilde;o r&aacute;pido o pedido poderia enviar e-mails independente do servidor de e-mail.');

define('LNG_NewsletterStatistics_Snapshot_Summary', 'Visualize um resumo da campanha de e-mail \'%s\', enviada %s.%s');

define('LNG_AutoresponderSentStatus_Mail_error', ' (O servidor de e-mail abaixo ou n&atilde;o aceitou o Email)');

define('LNG_AutoresponderSentStats_NotSent', 'Nenhuma resposta autom&aacute;tica foi enviada.');
define('LNG_AutoresponderSentStats_NotSent_CalendarProblem', 'Nenhuma resposta autom&aacute;tica foi enviada no intervalo de datas selecionado.');

define('LNG_EmailSent', 'Email enviado com sucesso');

/**
***************************
* Changed/added in NX 1.4.1
***************************
*/
define('LNG_Stats_TotalOpens_Description', 'N&uacute;mero total de aberturas registradas para este e-mail (incluindo m&uacute;ltiplas aberturas)');
define('LNG_Stats_TotalUniqueOpens_Description', 'Aberturas &uacute;nicas registradas');

/**
***************************
* Changed/added in 5.0.0
***************************
*/
define('LNG_Stats_TotalSubscribers', 'Total de Contatos');
define('LNG_NoSubscribersStats', 'Sem contatos est&atilde;o na lista de contatos \'%s\'');

define('LNG_NewsletterHasNotBeenClicked', 'N&atilde;o h&aacute; links clicados por quaisquer contato ainda.');

define('LNG_NewsletterHasNotBeenClicked_CalendarProblem', 'N&atilde;o h&aacute; links clicados por quaisquer contato durante o per&iacute;odo selecionado.');
define('LNG_NewsletterHasNotBeenClicked_LinkProblem', 'O link escolhido n&atilde;o foi clicado por qualquer contato.');
define('LNG_NewsletterHasNotBeenClicked_CalendarLinkProblem', 'O link escolhido n&atilde;o foi clicado por qualquer contato durante o per&iacute;odo selecionado.');

define('LNG_AutoresponderHasNotBeenOpened', 'A resposta autom&aacute;tica ainda n&atilde;o foi aberta por um contato at&eacute; o momento.');
define('LNG_AutoresponderHasNotBeenOpened_CalendarProblem', 'A resposta autom&aacute;tica ainda n&atilde;o foi aberta por um contato durante o per&iacute;odo selecionado.');

define('LNG_AutoresponderHasNotBeenClicked', 'N&atilde;o h&aacute; links clicados por qualquer contatos.');

define('LNG_AutoresponderHasNotBeenClicked_CalendarProblem', 'N&atilde;o h&aacute; links clicados por um contato durante o per&iacute;odo selecionado.');

define('LNG_AutoresponderHasNotBeenClicked_LinkProblem', 'O link escolhido n&atilde;o foi clicado por qualquer contato.');
define('LNG_AutoresponderHasNotBeenClicked_CalendarLinkProblem', 'O link escolhido n&atilde;o foi clicado por qualquer contato durante o per&iacute;odo selecionado.');

define('LNG_List_Summary_Graph_subscribersummary', 'Resumo Contatos');
define('LNG_ListStatistics_Snapshot', 'Contato Instantâneo');

define('LNG_ListHasNoUnsubscribes', 'Nenhum contato foi removido a partir desta lista de contato.');
define('LNG_ListHasNoUnsubscribes_CalendarProblem', 'Nenhum contato foi removido a partir desta lista de contato durante o intervalo de datas selecionado.');


define('LNG_ListHasNoForwards', 'Nenhum contato encaminhou resposta autom&aacute;tica ou campanhas por e-mail para esta lista.');
define('LNG_ListHasNoForwards_CalendarProblem', 'Nenhum contato encaminhou resposta autom&aacute;tica ou campanhas por e-mail para esta lista, no intervalo de datas selecionado.');


define('LNG_ListStatsHasNotBeenBounced_BounceType', 'Nenhum %ss contato foi recebidos para esta lista de contatos.');
define('LNG_ListStatsHasNotBeenBounced_CalendarProblem', 'Nenhum relat&oacute;rio de bounce foi recebidos para contatos dessa lista de contatos no per&iacute;odo selecionado.');

define('LNG_Stats_NoSubscribersOnList', 'N&atilde;o existem contatos nessa lista de contatos.');
define('LNG_Stats_NoSubscribersOnList_DateRange', 'N&atilde;o existem contatos nessa lista de contatos no per&iacute;odo selecionado.');

define('LNG_Stats_Autoresponders_Step1_Intro', 'Use estat&iacute;sticas de resposta autom&aacute;tica  para saber qual resposta autom&aacute;tica foi enviada, quantas pessoas est&atilde;o abrindo, as taxas de abertura e os que a recebem.');

define('LNG_Unconfirms', 'Faltam confirmar');
define('LNG_Confirms', 'Confirmados');

define('LNG_ListStatsTotalUnconfirms', 'Total de contatos n&atilde;o confirmado: ');
define('LNG_ListStatsTotalConfirms', 'Total de contatos confirmados: ');
define('LNG_UnconfirmsCount', 'Contatos n&atilde;o Confirmados');
define('LNG_ConfirmsCount', 'Contatos Confirmados');

define('LNG_ListStatistics_Snapshot_PerDomain', 'Top 10 dom&iacute;nios de contatos confirmados');

define('LNG_List_Summary_Graph', 'Resumo Contatos');

define('LNG_AutoresponderStatistics_SubscriberInformation_Intro', 'Exibir contatos que foram enviados resposta autom&aacute;tica \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_SubscriberStats', 'Informa&ccedil;&atilde;o de Contatos');

define('LNG_AutoresponderSentStatus_Blankemail_t', ' O contato s&oacute; quer receber resposta autom&aacute;tica no formato texto. Sua resposta autom&aacute;tica s&oacute; tem uma vers&atilde;o HTML e por isso esse contato tem recebido e-mails em branco.');
define('LNG_AutoresponderSentStatus_Blankemail_h', ' O contato s&oacute; quer receber resposta autom&aacute;tica no formato HTML . Sua resposta autom&aacute;tica s&oacute; tem uma vers&atilde;o para formato Texto e por isso esse contato tem recebido e-mails em branco.');

define('LNG_Stats_TotalLists', 'Lista de Contatos');

define('LNG_Stats_List_Step1_Heading', 'Estat&iacute;sticas Lista de Contatos');

define('LNG_Stats_List_Step2_Heading', 'Estat&iacute;sticas Lista de Contatos');
define('LNG_Stats_List_Step2_Intro', 'Exibir estat&iacute;sticas para lista de contatos \'%s\'');

define('LNG_SentToLists', 'Lista de contatos');
define('LNG_SentToList', 'Lista de contatos');

define('LNG_Unknown_List', 'Lista de contatos desconhecida');

define('LNG_ListStatistics_Snapshot_LinkHeading', 'Link estat&iacute;sticas de campanhas por e-mail e resposta autom&aacute;tica para a lista \'%s\'');

define('LNG_ListLinkStatsHasNotBeenClicked_CalendarProblem', 'N&atilde;o h&aacute; links encontrados em qualquer resposta autom&aacute;tica ou campanhas por e-mail enviado a esta lista em contato com o intervalo de datas selecionado.');

define('LNG_ListLinkStatsHasNotBeenClicked_NoLinksFound', 'N&atilde;o h&aacute; links  encontrados em qualquer resposta autom&aacute;tica ou campanhas por e-mail enviado a esta lista de contatos.');

define('LNG_ListStatistics_Snapshot_UnsubscribesHeading', 'Estat&iacute;sticas removidos da campanhas por e-mail e resposta autom&aacute;tica da lista de contatos \'%s\'');

define('LNG_ListStatistics_Snapshot_ForwardsHeading', 'Encaminhar estat&iacute;sticas de campanhas por e-mail e resposta autom&aacute;tica &agrave; lista de contatos \'%s\'');

define('LNG_ListStatistics_Snapshot_BounceHeading', 'Bounce estat&iacute;sticas e resposta autom&aacute;tica para campanhas de e-mail enviado &agrave; lista de contatos \'%s\'');

define('LNG_Stats_List_Step1_Intro', 'Estat&iacute;sticas de listas de contatos de pessoas se inscreveram, cancelaram e voltaram a ativa dessa lista.');
define('LNG_Stats_Users_Step1_Intro', 'Clique em <em>Exibir</em> no link ao lado de uma conta de usu&aacute;rio para ver as estat&iacute;sticas detalhadas.');

define('LNG_PrintListStatistics','Imprimir estat&iacute;sticas da lista de contatos ');

define('LNG_Stats_Newsletters_Step1_Intro', 'Ap&oacute;s o envio de uma campanha de e-mail marketing voc&ecirc; poder&aacute; acompanhar as estat&iacute;sticas detalhadas, como: taxas de abertura, descadastravamentos e taxas de rejei&ccedil;&atilde;o, e ainda visualize quantos assinantes clicaram em um determinado link (caso essa op&ccedil;&atilde;o esteja ativa), etc.');

define('LNG_AutoresponderSentStatus_Unsubscribed', ' (Eles removidos da sua lista de contatos)');

define('LNG_Bounce_Rule_', '(Desconhecido)');

define('LNG_AutoresponderSentStatus_Search_criteria', ' <a href="#" onClick="LaunchHelp(\'803\'); return false;">Porque?</a>');

define('LNG_GD_Not_Enabled', 'Habilitar o m&oacute;dulo GD no PHP para trabalhar com gr&aacute;ficos.');


define('LNG_BounceSoft', 'Leve');
define('LNG_BounceHard', 'Critico');
define('LNG_BounceUnknown', 'Desconhecido');

define('LNG_Stats_UniqueClicks','Total de cliques unicos');

define('LNG_Bounce_Type_unknown', '(Desconhecido)');

/**
***************************
* Changed/added in 5.5.0
***************************
*/
define('LNG_EditThisNewsletter', 'Editar esta campanha de email');
define('LNG_EditThisAutoresponder', 'Editar esta auto-resposta');

/**
***************************
* Changed/added in 5.5.7
***************************
*/
define('LNG_AutoresponderSummaryChart', 'Sum&aacute;rio de Auto-respostas');
define('LNG_AutoresponderSentStatus_Icredit', ' (Cr&eacute;ditos Insuficientes)');

/**
***************************
* Changed/added in 5.6.0
***************************
*/
define('LNG_EditListOwner', 'Editar&nbsp;Conta&nbsp;de&nbsp;Usu&aacute;rio');
