<?php
/**
* Language file variables for the send management area.
*
* @see GetLang
*
* @version     $Id: send.php,v 1.36 2008/03/04 07:43:44 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the send area... Please backup before you start!
*/

define('LNG_NoLiveNewsletters', 'Nenhuma campanha de e-mail marketing est&aacute; ativa.%s');

define('LNG_Send_CancelPrompt', 'Tem certeza de que deseja cancelar o envio da campanha de Email?');


define('LNG_SendMailingList', LNG_MailingList);
define('LNG_HLP_SendMailingList', 'Clique nos nomes das listas de contatos que pretende enviar a campanha de e-mail. Voc&ecirc; pode enviar para v&aacute;rias listas simplesmente clicando sobre o nome de cada lista.');

define('LNG_Send_Step2_Intro', 'Utilize o formul&aacute;rio abaixo para escolher os assinantes que v&atilde;o receber esta campanha de e-mail.');

define('LNG_NewsletterDetails', 'Detalhes campanha por Email');


define('LNG_SendMultipart', 'Envie seu e-mail como multilo formato?');
define('LNG_SendMultipartExplain', 'Sim, envie um e-mail como multiplo formato');

define('LNG_TrackOpens', 'Rastrear e computar taxas de abertura ao abrir e-mails HTML?');
define('LNG_TrackOpensExplain', 'Sim, rastrear abertura e-mails HTML');

define('LNG_TrackLinks', 'Rastrear links clicados neste Email?');
define('LNG_HLP_TrackLinks', 'Acompanhe todos os cliques no link desse e-mail. Depois que o e-mail for enviado, voc&ecirc; poder&aacute; visualizar os links clicados em detalhes a partir da p&aacute;gina de estat&iacute;sticas .');
define('LNG_TrackLinksExplain', 'Sim, rastrear links');

define('LNG_SelectNewsletterToSend', 'Por favor, selecione uma campanha de Email');

define('LNG_SendImmediately', 'Envie a sua campanha de e-mail agora?');
define('LNG_HLP_SendImmediately', 'Deseja enviar esta campanha de Emailimediatamente? Se n&atilde;o, desmarque essa caixa, voc&ecirc; pode escolher uma data e hora para que a campanha de Emailseja enviada.');
define('LNG_SendImmediatelyExplain', 'Sim, envie minha campanha de e-mail agora (Para agendar desmarque)');

define('LNG_SelectNewsletterPreviewPrompt', 'Por favor, selecione primeiro uma campanha de e-mail.');
define('LNG_SelectNewsletterPrompt', 'Selecione uma campanha de e-mail para enviar a partir da lista.');

define('LNG_ReadMore', 'Porque aproximadamente?');

define('LNG_EnterSendFromName','Por favor, Digite um \\\'Nome de envio\\\'');
define('LNG_EnterSendFromEmail','Por favor, Digite um \\\'Email de envio\\\'');
define('LNG_EnterReplyToEmail','Por favor, Digite um \\\'Email de resposta\\\'');
define('LNG_EnterBounceEmail','Por favor, Digite um \\\'Email de Bounce\\\'');

define('LNG_CronSendOptions', 'Defini&ccedil;&otilde;es de Agendamento de Email');
define('LNG_SendTime', 'Hora de Envio');
define('LNG_SendDate', 'Data de Envio');
define('LNG_HLP_SendTime', 'Selecione a hora e data em que voc&ecirc; gostaria que sua campanha de e-mail inicie o envio.');
define('LNG_NotifyOwner', 'Notificar propriet&aacute;rio sobre o envio?');
define('LNG_HLP_NotifyOwner', 'Notificar propriet&aacute;rio lista (s) quando iniciar o envio e quando o envio terminar?');
define('LNG_NotifyOwnerExplain', 'Sim, notificar o propriet&aacute;rio da lista, quando come&ccedil;a e termina o envio');

define('LNG_StartSending', 'Enviar campanha agora');
define('LNG_Send_Step4_Intro', 'Para enviar a sua campanha de e-mail agora, basta clicar no bot&atilde;o <em>Enviar Minha e-mail de campanha agora</ em> abaixo.');

define('LNG_Send_TotalRecipients', 'Ela ser&aacute; enviada para um total de <b> %s </b> contato(s)');


define('LNG_Send_Step4_CronIntro', 'Para enviar a sua campanha de e-mail utilizando o sistema de envio programado, basta clicar no bot&atilde;o <em>Agendar campanha de email</em> abaixo.');

define('LNG_Send_Step4_CannotSendInPast', 'Voc&ecirc; tentou agendar a campanha de Emailpara enviar no passado. Por favor, escolha uma data no futuro.');

define('LNG_Send_Step5', 'Processo de envio em andamento...');
define('LNG_Send_NumberLeft_One', '1 e-mail est&aacute; &agrave; espera de ser enviado');
define('LNG_Send_NumberLeft_Many', '%s e-mails ainda est&atilde;o aguardando envio');

define('LNG_Send_NumberSent_One', '1 e-mail foi enviado para os contatos at&eacute; agora');

define('LNG_Send_NumberSent_Many', '%s e-mails foram enviados para os contatos at&eacute; agora');

define('LNG_Send_TimeSoFar', '%s j&aacute; se passou desde que voc&ecirc; come&ccedil;ou o envio');
define('LNG_Send_TimeLeft', '%s permanecer&aacute; at&eacute; que o envio seja feito');

define('LNG_Send_Finished', 'A campanha de e-mail selecionada foi enviada. Demorou %s para concluir.');
define('LNG_SendReport_Intro', 'A campanha de e-mail selecionada foi enviada. Demorou %s para concluir.');

define('LNG_PauseSending', 'Envio Pausado (voc&ecirc; pode retomar mais tarde)');
define('LNG_Send_Paused_Heading', 'Envio Pausado');
define('LNG_Send_Paused_Success', 'O envio da sua campanha de e-mail foi pausado. Voc&ecirc; pode retomar o envio clicando sobre o link <em> Retomar </em> na p&aacute;gina<em> Campanhas de e-mail </em>.');
define('LNG_Send_Paused_Failure', 'Algum erro correu ao se tentar pausar o envio de sua campanha de e-mail.');
define('LNG_Send_Paused', 'Voc&ecirc; pode retomar envio de sua campanha de e-mail a partir da p&aacute;gina "Exibir Campanhas de Email".<br/>');

define('LNG_JobScheduled', 'Seu trabalho foi agendado para ser executado em %s');
define('LNG_JobNotScheduled', 'O seu trabalho n&atilde;o foi programado para ser executado na %s');

define('LNG_SendFinished', 'O envio da sua campanha de e-mail foi finalizado.');

define('LNG_ApproveScheduledSend', 'Agendar Envio');
define('LNG_CancelScheduledSend', 'N&atilde;o Enviar');

/**
* different helptips for sending a newsletter for "date subscribed", "opened newsletter" and "clicked link".
*/
define('LNG_Send_FilterByDate', LNG_FilterByDate);

define('LNG_Send_OpenedNewsletter', LNG_OpenedNewsletter);

define('LNG_Send_ClickedOnLink', LNG_ClickedOnLink);


/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_Send_NewsletterSubject', 'O assunto da mesma &eacute; <b>%s</b>');

define('LNG_Send_Step1', 'Enviar uma campanha de Email');
define('LNG_Send_Step2', 'Enviar uma campanha de Email');
define('LNG_Send_Step3', 'Enviar uma campanha de Email');
define('LNG_SendNewsletter', 'Enviar uma campanha de Email');
define('LNG_Send_Step4', 'Enviar uma campanha de Email');

define('LNG_NoLiveNewsletters_HasAccess', ' Por favor, v&aacute; at&eacute; <a href="index.php?Page=Newsletters">Exibir campanha de email</a> para ativar a campanha de e-mail.');

define('LNG_FilterOptions_Send', 'Para quem voc&ecirc; deseja enviar?');
define('LNG_ShowFilteringOptions_Send', 'Eu quero:');

/**
*************************
* Changed/Added in NX 1.4
*************************
*/
define('LNG_Send_Finished_Heading', 'Relat&oacute;rio da Campanha de e-mail envianda ');

define('LNG_Send_Resend', 'Reenvie sua campanha de Email');
define('LNG_Send_Resend_Intro', 'Para reenviar esta campanha de Emailpara os destinat&aacute;rios que n&atilde;o receberam, pela primeira vez, clique no bot&atilde;o "Iniciar Envio" abaixo.');
define('LNG_Send_Resend_TotalRecipients', 'Falta enviar para: %s');
define('LNG_Send_Resend_Count_One', 'Voc&ecirc; tentou reenviar esta campanha de Email1 vez. Voc&ecirc; s&oacute; pode reenviar esta campanha de Email%s vezes mais.');
define('LNG_Send_Resend_Count_One_OneLeft', 'Voc&ecirc; tentou reenviar esta campanha de Email1 vez. Voc&ecirc; s&oacute; pode reenviar esta campanha de Emailmais 1 vez.');
define('LNG_Send_Resend_Count_Many', 'Voc&ecirc; tentou reenviar esta campanha de Email%s vezes. Voc&ecirc; s&oacute; pode reenviar esta campanha e-mail por mais  %s vezes.');
define('LNG_Send_Resend_Count_Many_OneLeft', 'Voc&ecirc; tentou reenviar esta campanha de Email%s vezes. Voc&ecirc; s&oacute; pode reenviar esta campanha de Emailmais 1 vez.');
define('LNG_Send_Resend_Count_Maximum', 'Voc&ecirc; j&aacute; tentou reenviar esta campanha de Email%s vezes e voc&ecirc; n&atilde;o pode envi&aacute;-la mais nenhuma. Entre em contato com o administrador do sistema.');

define('LNG_SendReport_Failure_Link', '<a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_SendReport_Failure_Reason_20', 'houve um problema com o servidor de e-mail. Verifique com o administrador do sistema para ver se houver algum problema com o servidor de Email, ou se existe um limite no n&uacute;mero de e-mails que est&atilde;o autorizados a enviar por hora.');
define('LNG_SendReport_Failure_Reason_30', 'houve um problema com o servidor smtp. Verifique com o administrador do sistema para ver se o servidor smtp informa&ccedil;&otilde;es est&atilde;o corretas antes de tentar novamente.');

define('LNG_SendProblem_Report_Invalid_Heading', 'Relat&oacute;rio inv&aacute;lido');
define('LNG_SendProblem_Report_Invalid_Intro', 'O relat&oacute;rio que voc&ecirc; escolheu &eacute; inv&aacute;lido. Por favor, tente novamente');
define('LNG_SendProblem_InvalidReportURL', LNG_SendProblem_Report_Invalid_Intro);

define('LNG_SendProblem_Report_MailServer_Problem_Heading', 'Problema com servidor de Email');

define('LNG_SendProblem_Report_SMTPMailServer_Problem_Heading', 'Problema com servidor de Email');

define('LNG_Send_Step4_ChooseNewsletter', 'Por favor, escolha uma campanha de e-mail para enviar.');

/**
*************************
* Changed/Added in NX 1.4.1
*************************
*/

define('LNG_Send_NoCronEnabled_Explain_NotAdmin', 'Esta campanha de e-mail ser&aacute; enviado imediatamente. Se quiser habilitar o recurso de agendar o envio de campanhas de e-mail entre em contato com o administrador.');

/**
*************************
* Changed/Added in NX 1.5
*************************
*/
define('LNG_HLP_SendNewsletter', 'Qual campanha de e-mail que voc&ecirc; gostaria de enviar aos seus contatos?');

define('LNG_HLP_SendMultipart', 'Enviando um e-mail em multi-formato voc&ecirc; ira permitir que os contatos decidam o formato (HTML ou Texto) para apresentar programa de e-mail.<br/><br/>&eacute; melhor usar isto se voc&ecirc; n&atilde;o deu a op&ccedil;&atilde;o para seus contatos escolherem um formato de recebimento (por exemplo, que todas elas inscrever como HTML), quando recebem o e-mail seu e-mail programa vai mostrar automaticamente o formato correto. <br/> <br/> Se n&atilde;o, deixe essa op&ccedil;&atilde;o assinalada.');

define('LNG_HLP_TrackOpens', 'Rastrear a abertura do contato em campanha de e-mail. Isso se aplica somente &agrave;s campanhas por e-mail no formato HTML.');

define('LNG_SendSize_One', 'Esta campanha de e-mail ser&aacute; enviado para aproximadamente de 1 contato.');

define('LNG_Send_SubscriberList', 'Ser&aacute; enviado para <b>%s</b>');

define('LNG_SendReport_Success_One', 'A campanha de e-mail selecionada foi enviada com sucesso para 1 contato');
define('LNG_SendReport_Success_Many', 'A campanha selecionada e-mail foi enviado para %s contatos com &ecirc;xito');

define('LNG_HLP_Send_FilterByDate', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; envie apenas para contatos que se inscreveram antes, depois ou entre datas espec&iacute;ficas. Para enviar a todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_Send_OpenedNewsletter', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; envie apenas para contatos que abriram uma determinada campanha de e-mail ou resposta autom&aacute;tica enviada para esta lista de contatos. Para enviar a todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_Send_ClickedOnLink', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; envie apenas para contatos que clicarem em um link espec&iacute;fico na resposta autom&aacute;tica ou na campanha de e-mail que foi enviada a esta lista de contatos. Para procurar todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_SendShowFilteringOptionsExplain', 'Enviar um e-mail para contatos que correspondam aos crit&eacute;rios de pesquisa selecionados na(s) lista(s) abaixo');
define('LNG_SendDoNotShowFilteringOptionsExplain', 'Enviar um e-mail para todos os contatos da(s) lista(s) selecionada(s) abaixo');

define('LNG_SendShowFilteringOptionsOneListExplain', 'Enviar um e-mail para contatos da minha lista que correspondam aos meus crit&eacute;rios de pesquisa');
define('LNG_SendDoNotShowFilteringOptionsOneListExplain', 'Enviar um e-mail para todos os contatos na minha lista');

define('LNG_SendReport_Failure_One', 'A campanha de e-mail n&atilde;o foi enviado para 1 contato. Assim que o problema for corrigido, voc&ecirc; pode reenviar a sua campanha de e-mail para este contato.');
define('LNG_SendReport_Failure_Many', 'A campanha de e-mail n&atilde;o foi enviado para %s contatos. Assim que o problema for corrigido, voc&ecirc; pode reenviar a sua campanha de e-mail para estes contatos.');

define('LNG_SendReport_Failure_Reason_Many', '%s contatos n&atilde;o recebeu um e-mail porque %s');
define('LNG_SendReport_Failure_Reason_One', '1 contato n&atilde;o recebeu um e-mail porque %s');
define('LNG_SendReport_Failure_Reason_1', 'Houve um problema com os dados dos contatos. Por exemplo, entre eles cancelaram a inscri&ccedil;&atilde;o antes do in&iacute;cio do envio da campanha de e-mail ou quando est&aacute;vamos tentando enviar.');

define('LNG_SendReport_Failure_Reason_10', 'eles teriam recebido um e-mail em branco. Se voc&ecirc; est&aacute; enviando uma campanha de e-mail html para quem solicitou e-mail em formato texto, o conte&uacute;do n&atilde;o ser&aacute; exibido. Para corrigir isso, v&aacute; em "Exibir Contatos", escolha a sua lista de contatos e busque por contatos que est&atilde;o definidas para receber e-mails no formato "Texto". Voc&ecirc; precisar&aacute; alter&aacute;-los para receber e-mails no foramto HTML.');

define('LNG_SendProblem_Report_Subscriber_Problem_Heading', 'Problema com contatos');
define('LNG_SendProblem_Report_Subscriber_Problem_Intro', 'As seguintes contacos cancelaram a partir de sua lista antes de sua campanha de e-mail ser enviado para eles');

define('LNG_SendProblem_Report_Email_Problem_Heading', 'Problema com contatos');
define('LNG_SendProblem_Report_Email_Problem_Intro', 'Aos contatos seguintes n&atilde;o foi enviado a campanha de e-mail porque eles t&ecirc;m mais probabilidade de receber e-mails s&oacute; de texto, eles n&atilde;o podem receber e-mails HTML. Voc&ecirc; pode editar sua campanha de e-mail para incluir tanto uma vers&atilde;o HTML e uma vers&atilde;o para texto, ou voc&ecirc; pode editar os contatos, que lhes permitam receber e-mails HTML.');

define('LNG_SendProblem_Report_MailServer_Problem_Intro', 'Aos seguintes contatos n&atilde;o foram enviados um e-mail porque o servidor dEmail n&atilde;o aceitou o e-mail. Isso pode ter ocorrido porque o servidor de e-mail tem um limite baixo ou porque o administrador do sistema tenha estabelecido um limite para o n&uacute;mero de e-mails que voc&ecirc; pode enviar por hora. Entre em contato com o administrador do sistema ou de empresa de hospedagem para ver se eles t&ecirc;m um limite no n&uacute;mero de e-mails que voc&ecirc; pode enviar por hora.');

define('LNG_SendProblem_Report_SMTPMailServer_Problem_Intro', 'Aos seguintes contatos n&atilde;o foram enviados e-mail porque o servidor de correio eletr&ocirc;nico n&atilde;o aceitou o e-mail. Verifique detalhes de seu servidor SMTP e tente novamente. Se voc&ecirc; n&atilde;o tiver certeza do presente, entre em contato com o administrador do sistema.');

define('LNG_Send_Step5_KeepBrowserWindowOpen', '<div style="padding:10px; background-color:#FAD163">Por favor, mantenha esta janela aberta. Se voc&ecirc; fech&aacute;-la, sua campanha vai parar de enviar e-mails o que significa que alguns de seus contatos n&atilde;o ir&atilde;o receber o e-mail.</div>');

define('LNG_Send_Step1_Intro', 'Antes de poder enviar uma campanha por Email, por favor, selecione qual lista de contato pretende enviar.');

define('LNG_Send_Step3_Intro', 'Preencha o formul&aacute;rio abaixo para enviar uma campanha por e-mail. Se n&atilde;o tiver a certeza do signficado das op&ccedil;&otilde;es avan&ccedil;adas, ent&atilde;o voc&ecirc; ignorar esse item.');

define('LNG_ReadMoreWhyApprox', 'Se voc&ecirc; estiver programando esta campanha de Emailpara ser enviada posteriormente,  o n&uacute;mero de pessoas que &eacute; enviado podem mudar, seja de inscri&ccedil;&atilde;o ou remo&ccedil;&atilde;o da sua lista de contatos.');

define('LNG_SendToTestListWarning', 'Esta campanha de e-mail n&atilde;o foi enviado antes. Voc&ecirc; deve fazer um teste antes de enviar para os seus contatos.');

define('LNG_Send_Step1_ChooseListToSendTo', 'Por favor, escolha uma ou mais lista de contatos para enviar a sua campanha de e-mail.');

define('LNG_Send_Not_Completed', 'Se o seu e-mail n&atilde;o puder ser enviado, ser&aacute; sinalizado na p&aacute;gina <em> Ver Campanhas de e-mail </em> com uma op&ccedil;&atilde;o de reenviar.');

define('LNG_SendShowSegmentOptionsExplain', 'Enviar um e-mail para todos os contatos selecionados no segmento(s) abaixo');
define('LNG_SegmentDetails', 'Selecionar Segmentos');
define('LNG_SendToSegment', LNG_Segments);
define('LNG_HLP_SendToSegment', 'Para enviar a m&uacute;ltiplos segmentos de uma vez, basta assinalar os segmentos que deseja enviar. Observe que apenas segmentos que contenham pelo menos um contato ativo (aqueles que n&atilde;o tenham sido devolvidos ou que cancelaram) ser&aacute; mostrado aqui.');
define('LNG_Send_Step1_ChooseSegmentToSendTo', 'Por favor, escolha um ou mais segmentos para enviar a sua campanha de e-mail.');

define('LNG_Send_Subscribers_Search_Step2', 'Utilize o formul&aacute;rio abaixo para escolher quais os contatos receber o e-mail. Voc&ecirc; n&atilde;o precisa preencher todos os campos, somente aqueles que desejar filtrar.' . LNG_GuideToFiltering);

define('LNG_SendMyEmailCampaignOn', 'Enviar a minha campanha por Email');
define('LNG_Schedule_At', 'em');
define('LNG_AdvancedSendingOptions', 'Defini&ccedil;&otilde;es avan&ccedil;adas (opcional)');
define('LNG_WhichCampaignToSend', 'Configura&ccedil;&otilde;es de campanha por Email');
define('LNG_WhichEmailToSend', 'Envie esta campanha por Email:');
define('LNG_SelectFirstNameOption', 'Selecione campo personalizado "Nome" ');
define('LNG_SelectLastNameOption', 'Selecione campo personalizado "Sobrenome"');
define('LNG_ConfirmCancelSend', 'Tem certeza de que deseja cancelar o envio sua campanha de Email? Se voc&ecirc; cancelar esta n&atilde;o ser&aacute; enviada.');
define('LNG_ConfirmCancelSchedule', 'Tem certeza de que deseja cancelar a programa&ccedil;&atilde;o de sua campanha de Email? Se voc&ecirc; cancelar esta n&atilde;o ser&aacute; enviada.');
define('LNG_PopupSendWarning', '*** Importante, leia ***\n\nUma janela popup ir&aacute; aparecer agora atrav&eacute;s do qual a sua campanha de e-mail ser&aacute; enviada. Por favor, n&atilde;o feche a janela. Quando a sua campanha de e-mail foi finalizada a janela ser&aacute; fechada automaticamente. Se voc&ecirc; fechar a janela, ent&atilde;o sua campanha de e-mail n&atilde;o ser&aacute; enviada.');

/**
**************************
* Changed/Added in 5.5.0
**************************
*/
define('LNG_Send_NewsletterName', 'Sua campanha de e-mail se chama <b>%s</b>');

/**
**************************
* Changed/Added in 5.5.5
**************************
*/
define('LNG_Send_TotalRecipients_Cron', 'Ser&aacute; enviado cerca de <b>%s</b> contatos(s)');

/**
**************************
* Changed/Added in 5.5.8
**************************
*/
define('LNG_SendReport_Failure_Reason_30', 'Ocorreu um problema enviando este e-mail. Ou o mesmo &eacute; inv&aacute;lido (caso seja, verifique novamente o email), ou o servidor SMTP do seu provedor n&atilde;o est&aacute; correto. (caso seja, verifique com seu administrador do sistema).');

/**
**************************
* Changed/Added in 5.6.6

**************************
*/

define('LNG_SendNewsletterArchive_DeactivatedWarning', 'Arquivos est&aacute; desativado para esta campanha, o RSS e a Vers&atilde;o Web tamb&eacute;m est&atilde;o desabilitados.');

