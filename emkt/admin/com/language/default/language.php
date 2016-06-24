<?php
/**
* Language file variables. These are used all over the place - menus, paging, searching, templates, newsletters and so on.
*
* @see GetLang
*
* @version     $Id: language.php,v 1.153 2008/02/22 04:45:13 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

define('LNG_EmailAddress', 'Email');

define('LNG_ControlPanel', "E-Marketer - Painel de Controle ");
define('LNG_Statistics', "Estat&iacute;sticas");
define('LNG_Forms', 'Formul&aacute;rios');
define('LNG_Settings', "Gerenciamento");
define('LNG_Go', 'Ir');
define('LNG_ShowHelp', '');
define('LNG_HideHelp', 'Ocultar ajuda');
define('LNG_Logout', 'Sair');
define('LNG_To', 'De');
define('LNG_From', 'De');
define('LNG_N/A', 'N/A');

define('LNG_Action', 'A&ccedil;&atilde;o');

define('LNG_ViewAll', 'Ver todos');

define('LNG_Page', 'P&aacute;gina');
define('LNG_Of', 'De');

define('LNG_GoToFirst', 'Ir para a primeira p&aacute;gina');
define('LNG_GoToLast', 'Ir para a &uacute;ltima p&aacute;gina');

define('LNG_Delete_Selected', 'Excluir selecionados');

define('LNG_NumberFormat_Dec', '.');
define('LNG_NumberFormat_Thousands', ',');
define('LNG_DateFormat', 'd M Y');
define('LNG_Quickstats_DateFormat', 'd-M-Y');
define('LNG_TimeFormat', 'F j Y, g:i a');
define('LNG_UserDateFormat', 'g:i a, d M Y');
define('LNG_Stats_TimeFormat', 'g:i a');

define('LNG_Yesterday_Date', 'Ontem');
define('LNG_Today_Date', 'Hoje');
define('LNG_Tomorrow_Date', 'Amanh&atilde;');

define('LNG_Yesterday_Time', 'Ontem @ %s');
define('LNG_Today_Time', 'Hoje @ %s');
define('LNG_Tomorrow_Time', 'Amanh&atilde; @ %s');

define('LNG_ViewingResultsFor', 'Visualiza&ccedil;&atilde;o atualizada dos resultados');

define('LNG_Home', "Inicio");

define('LNG_Either_Confirmed', 'Ambos confirmados e n&atilde;o confirmados');
define('LNG_Either_Format', 'Ambos os formatos');
define('LNG_Either_Status', 'Ambos os status');

define('LNG_Total', "Total");

define('LNG_Yes', 'Sim');
define('LNG_No', 'N&atilde;o');

define('LNG_ShowMore', 'Mostrar mais');
define('LNG_HideMore', 'Ocultar mais');

define('LNG_Created', 'Criado');
define('LNG_Date_Created', 'Data de cria&ccedil;&atilde;o');


define('LNG_Mon', 'Seg');
define('LNG_Tue', 'Ter');
define('LNG_Wed', 'Qua');
define('LNG_Thu', 'Qui');
define('LNG_Fri', 'Sex');
define('LNG_Sat', 'Sab');
define('LNG_Sun', 'Dom');

define('LNG_Jan', 'Jan');
define('LNG_Feb', 'Fev');
define('LNG_Mar', 'Mar');
define('LNG_Apr', 'Abr');
define('LNG_May', 'Mai');
define('LNG_Jun', 'Jun');
define('LNG_Jul', 'Jul');
define('LNG_Aug', 'Ago');
define('LNG_Sep', 'Set');
define('LNG_Oct', 'Out');
define('LNG_Nov', 'Nov');
define('LNG_Dec', 'Dez');

define('LNG_HoldMouseOver', "Aponte o mouse sobre o texto sublinhado para mais informa&ccedil;&otilde;es");

define('LNG_PagingNext', "Pr&oacute;ximo");
define('LNG_PagingBack', "Voltar");

define('LNG_Next', "Pr&oacute;ximo >>");
define('LNG_Back', "Voltar");
define('LNG_ResultsPerPage',"Resultados por p&aacute;gina");

define('LNG_ErrCouldntLoadTemplate', 'N&atilde;o foi poss&iacute;vel carregar o modelo: %s');
define('LNG_PageTitle', 'Inicio');
define('LNG_Edit', 'Editar');
define('LNG_Delete', 'Excluir');
define('LNG_Save', 'Salvar');
define('LNG_SaveAndExit', 'Salvar e Sair');
define('LNG_Cancel', 'Cancelar');
define('LNG_Copy', 'Copiar');

define('LNG_Password', 'Senha');
define('LNG_PasswordConfirm', 'Senha (confirmar)');
define('LNG_PasswordConfirmAlert', 'Por favor confirme a sua nova senha');
define('LNG_PasswordsDontMatch', 'As senhas n&atilde;o\ coincidem. Por favor, tente novamente.');

define('LNG_GoBack', 'Voltar');
define('LNG_NoAccess', 'Permiss&atilde;o negada. Voc&ecirc; n&atilde;o tem acesso a esta &aacute;rea ou para executar a a&ccedil;&atilde;o solicitada. Entre em contato com o administrador.');

define('LNG_ConfirmCancel', 'Tem certeza de que deseja cancelar?');

define('LNG_MyAccount', 'Minha Conta');

define('LNG_Format_Text', 'Texto');
define('LNG_Format_HTML', 'HTML');
define('LNG_Format_TextAndHTML', 'HTML e Texto');


define('LNG_HTMLContent', 'Conte&uacute;do HTML ');
define('LNG_TextContent', 'Conte&uacute;do Texto ');

define('LNG_HTMLPreview', 'HTML Pr&eacute;-visualizar');
define('LNG_TextPreview', 'Texto Pr&eacute-visualizar');

define('LNG_Step1', 'Passo 1');
define('LNG_Step2', 'Passo 2');
define('LNG_Step3', 'Passo 3');
define('LNG_Step4', 'Passo 4');

define('LNG_CustomFieldRequired_Popup', '* ');
define('LNG_PopupCloseWindow', '[ x Fechar ]');

define('LNG_View', 'Visualizar');

define('LNG_Menu_MailingLists_Bounce', 'Processar e-mails com erros');

define('LNG_Menu_Templates_Title', 'Criar, gerenciar e apagar seus modelos.');

define('LNG_Menu_Statistics_Title', 'Ver estat&iacute;sticas');
define('LNG_Menu_Statistics_Newsletters', 'Estat&iacute;sticas de campanha de Email');
define('LNG_Menu_Statistics_Users', 'Estat&iacute;sticas de conta de usu&aacute;rio');
define('LNG_Menu_Statistics_Autoresponders', 'Estat&iacute;sticas de respostas autom&aacute;ticas');

define('LNG_RSS', 'RSS');


define('LNG_Email', 'Email');
define('LNG_HLP_Email', 'Email');

define('LNG_FilterEmailAddress', LNG_Email);

define('LNG_ConfirmedStatus', 'Status de Confirma&ccedil;&atilde;o');
define('LNG_FilterConfirmedStatus', LNG_ConfirmedStatus);

define('LNG_Active', 'Ativo');

define('LNG_Inactive', 'Inativo');

define('LNG_Confirmed', 'Confirmado');
define('LNG_Unconfirmed', 'N&atilde;o Confirmado');

define('LNG_UnableToOpenFile', 'N&atilde;o &eacute; poss&iacute;vel abrir o arquivo \'%s\'');
define('LNG_EmptyFile', 'Arquivo \'%s\' est&aacute; vazio');

define('LNG_FilterSearch', 'Filtrar por informa&ccedil;&otilde;es b&aacute;sicas');

define('LNG_OK', 'OK');

define('LNG_Preview', 'Pr&eacute;-visualizar');
define('LNG_SelectTemplate', 'Por favor, escolha um modelo para pr&eacute;-visualizar.');
define('LNG_ChooseTemplate', 'Modelo de Email');
define('LNG_HLP_ChooseTemplate', 'Escolha um modelo Pronto de e-mail  para ser a base da sua campanha de e-mail. Para criar um novo modelo, utilize a op&ccedil;&atilde;o MODELOS no menu do topo da p&aacute;gina.');

define('LNG_Preview_Template', 'Ampliar Pr&eacute;-Visualiza&ccedil;&atilde;o ');

define('LNG_SelectAll', 'Selecione Todos');
define('LNG_UnselectAll', 'Desmarcar Todos');

define('LNG_PleaseChooseAction', 'Por favor, escolha a primeira a&ccedil;&atilde;o.');
define('LNG_ConfirmSubscriberChanges', 'Tem certeza de que deseja executar a a&ccedil;&atilde;o selecionada? Ela n&atilde;o pode ser desfeita.');
define('LNG_BulkAction', 'A&ccedil;&atilde;o em Massa');
define('LNG_ChooseAction', 'Escolha uma a&ccedil;&atilde;o');

define('LNG_ConfirmChanges', 'Tem certeza de que deseja executar a a&ccedil;&atilde;o selecionada? Ela n&atilde;o pode ser desfeita.');
define('LNG_NextButton', 'Pr&oacute;ximo &raquo;');

define('LNG_FileNotUploadedSuccessfully', 'Arquivo n&atilde;o foi carregado com &ecirc;xito. Por favor, tente novamente.');
define('LNG_FileNotUploadedSuccessfully_TooBig', 'Arquivo n&atilde;o foi carregado com &ecirc;xito. O seu tamanho pode ser muito grande para fazer o upload atrav&eacute;s do seu navegador.');

define('LNG_None', 'None');

define('LNG_CopyPrefix', 'Copia do '); // this is used for lists, templates and newsletters.

define('LNG_MergePrefix', 'Mesclar com '); // this is used for lists.

define('LNG_Bounced', 'Emails com erro');
define('LNG_Unsubscribed', 'Removidos');
define('LNG_AllStatus', 'Qualquer status');

define('LNG_Attachments', 'Anexos');
define('LNG_HLP_Attachments', 'Para adicionar um anexo, clique no bot&atilde;o Procurar e selecione o arquivo do seu computador. Depois de selecionar um arquivo, voc&ecirc; pode\\\ adicionar outro anexo e assim por diante. Voc&ecirc; pode fazer o upload de 5 anexos, a qualquer momento.');
define('LNG_ExistingAttachments', 'Anexos existentes:');

define('LNG_UnableToCreateDirectory', 'N&atilde;o foi poss&iacute;vel criar o diret&oacute;rio para salvar os anexos. Verifique se o seu servidor tem permiss&otilde;es ou entre em contato com o administrador.');

define('LNG_FileUploadSuccessful_One', 'Upload realizado com sucesso.');
define('LNG_FileUploadSuccessful_Many', 'Upload realizado com sucesso %s.');
define('LNG_FileUploadFailure', 'N&atilde;o foi poss&iacute;vel fazer o upload dos seguintes arquivos:');
define('LNG_FileExtensionNotValid', 'A extens&atilde;o do arquivo %s n&atilde;o &eacute; permitida para ser carregada.');
define('LNG_NotUploadedFile', 'Este arquivo n&atilde;o foi carregado atrav&eacute;s do navegador.');
define('LNG_FileTooBig', 'O arquivo &eacute; muito grande (%s). O arquivo deve ser inferior a %s');
define('LNG_UnableToUploadFile', 'N&atilde;o foi poss&iacute;vel fazer upload do arquivo.');
define('LNG_DirectoryNotWritable', 'O diret&oacute;rio destino \'%s\' n&atilde;o &eacute; grav&aacute;vel. Por favor, verifique as permiss&otilde;es no diret&oacute;rio e tente novamente ou entre em contato com o administrador.');

define('LNG_HLP_DeleteAttachment', 'Marque a caixa para apagar o anexo. O anexo ser&aacute; exclu&iacute;do depois de ter salvo. essa a&ccedil;&atilde;o pode ser desfeita.');
define('LNG_DeleteAttachment', 'Excluir Anexo? ');

define('LNG_FileDeleteSuccessful_One', 'Arquivo excluido com sucesso.');
define('LNG_FileDeleteSuccessful_Many', 'Foram excluidos com sucesso %s arquivos.');
define('LNG_FileDeleteFailure', 'N&atilde;o foi poss&iacute;vel excluir os seguintes arquivos:');
define('LNG_FileNotFound', 'Arquivo n&atilde;o encontrado');

define('LNG_ChangeStatus_Active', 'Alterar Status (Ativo)');
define('LNG_ChangeStatus_Inactive', 'Alterar Status (Inativo)');

define('LNG_Status_Active', 'Ativo');
define('LNG_Status_Inactive', 'Inativo');
define('LNG_Status_Confirmed', 'Confirmado');
define('LNG_Status_Unconfirmed', 'N&atilde;o Confirmado');

// used in forms.


define('LNG_NoTemplate', 'Sem Modelos');

define('LNG_Global', 'Global');

// used anywhere to do with lists.
define('LNG_CustomFields', 'Filtrar por campos personalizados');
define('LNG_CustomFields_Manage', 'Exibir campos personalizados');

// used for preview emails.
define('LNG_SendPreview', 'Pr&eacute;-Visualizar Campanha');

define('LNG_EnterPreviewEmail', 'Digite um e-mail.');
define('LNG_NoContentToEmail', 'N&atilde;o h&aacute; conte&uacute;do, n&atilde;o ser&aacute; enviado nenhuma pr&eacute;-visualiza&ccedil;&atilde;o.');
define('LNG_NoEmailAddressSupplied', 'Nenhum e-mail foi fornecido. Por favor, tente novamente.');

define('LNG_PreviewEmailSent', 'Uma pr&eacute;-visualiza&ccedil;&atilde;o foi enviada para o endere&ccedil;o de e-mail %s.');

define('LNG_Send', 'Enviar');
define('LNG_Resume', 'Retomar');
define('LNG_Pause', 'Pausar');

define('LNG_DefaultUnsubscribeFooter_html', '<br/><a href="%%UNSUBSCRIBELINK%%">Clique aqui para ser removido</a>');
// need to use " so \n gets processed correctly.
define('LNG_DefaultUnsubscribeFooter_text', "\nClique neste link para ser removido: %%UNSUBSCRIBELINK%%");

define('LNG_DefaultModifyFooter_html', '<br/><a href="%%MODIFYLINK%%">Clique aqui para atualizar seus dados</a>');
// need to use " so \n gets processed correctly.
define('LNG_DefaultModifyFooter_text', "\nClique neste link para atualizar seus dados: %%MODIFYLINK%%");

define('LNG_TimeTaken_Seconds_One', '1 segundo');
define('LNG_TimeTaken_Seconds_Many', '%s segundos');

define('LNG_TimeTaken_Minutes_One', '1 minuto');
define('LNG_TimeTaken_Minutes_Many', '%s minutos');

define('LNG_TimeTaken_Hours_One', '1 hora');
define('LNG_TimeTaken_Hours_One_Minutes', '1 hora, %s minutos');
define('LNG_TimeTaken_Hours_Many', '%s horas');
define('LNG_TimeTaken_Hours_Many_Minutes', '%s horas, %s minutos');

define('LNG_TimeTaken_Days_One', '1 dia');
define('LNG_TimeTaken_Days_One_Hours', '1 dia, %s horas');
define('LNG_TimeTaken_Days_Many', '%s dias');
define('LNG_TimeTaken_Days_Many_Hours', '%s dias, %s horas');

define('LNG_TimeTaken_Months_One', '1 m&ecirc;s');
define('LNG_TimeTaken_Months_One_Days', '1 m&ecirc;s, %s dias');
define('LNG_TimeTaken_Months_Many', '%s meses');
define('LNG_TimeTaken_Months_Many_Days', '%s meses, %s dias');

define('LNG_TimeTaken_Years_One', '1 ano');
define('LNG_TimeTaken_Years_Many', '%s anos');

define('LNG_CronNotEnabled', 'O agendador de envio n&atilde;o foi ativado. Por favor, fale com o seu administrador para saber como fazer essa configura&ccedil;&atilde;o.');

define('LNG_Custom', 'Personalizar');

define('LNG_ShowCustomFields', 'Inserir Campo Extra');
define('LNG_InsertUnsubscribeLink', 'Inserir link de Remo&ccedil;&atilde;o');

define('LNG_Approve', 'Aprovar ');
define('LNG_Approved', 'Aprovado ');
define('LNG_Disapprove', 'Desaprovar');
define('LNG_Disapproved', 'Desaprovado');

define('LNG_NewsletterSubject', 'Assunto do Email');
define('LNG_Subject', 'Assunto');
define('LNG_Name', 'Nome');

define('LNG_YesFilterByCustomDate', 'Sim, por filtrar campo \'%s\'');

define('LNG_AlreadySentTo_Heading', 'Enviar &uacute;ltimas informa&ccedil;&otilde;es');
define('LNG_AlreadySentTo_SoFar', 'Enviar para %s / %s enviados at&eacute; agora');

// used by "manage schedule" page.
define('LNG_AlreadySentTo', ' (Enviado para %s de %s)');

define('LNG_ShowFilteringOptions', 'Mostrar op&ccedil;&otilde;es de filtragem');
define('LNG_ShowFilteringOptionsExplain', 'Sim, mostrar op&ccedil;&otilde;es de filtragem na pr&oacute;xima p&aacute;gina');

/**
* Common custom field stuff.
* This is used by searching, exporting.
*/
define('LNG_YesFilterByDate', 'Sim, filtrar por data de inscri&ccedil;&atilde;o');
define('LNG_After', 'Depois');
define('LNG_Before', 'Antes');
define('LNG_Between', 'Entre');
define('LNG_Exactly', 'Exatamente');
define('LNG_AND', 'E');


define('LNG_ExportFileDeleted', 'O arquivo de exporta&ccedil;&atilde;o selecionado  foi exclu&iacute;do.');
define('LNG_ExportFileNotDeleted', 'O arquivo de exporta&ccedil;&atilde;o n&atilde;o foi exclu&iacute;do com sucesso. Por favor, tente novamente.');

/**
* Jobs
*/
define('LNG_Waiting', 'Aguardando');
define('LNG_Job_Waiting', 'Enviando');
define('LNG_Job_Complete', 'Completo');
define('LNG_Job_InProgress', 'Andamento');
define('LNG_Job_Paused', 'Pausado');
define('LNG_WaitingToSend', 'Aguardando para Envio'); // this is used if 2 cron jobs have not run yet, so we can't work out the time difference.
define('LNG_ImapSupportMissing', 'IMAP n&atilde;o est&aacute; dispon&iacute;vel. e-mails n&atilde;o podem ser processados sem suporte para IMAP.');


define('LNG_AnyList', '-- TODAS AS LISTAS --');

/**
* Subscriber stuff.
*/
define('LNG_UserChooseFormat', 'Formato da Campanha');
define('LNG_Unknown', 'Desconhecido');
define('LNG_SubscribeRequestDate', 'Contatos por Data');

define('LNG_Subscriber_NotSubscribed', 'O e-mail \'%s\' n&atilde;o est&aacute; inscrito nesta lista');

define('LNG_ViewSchedule', 'Exibir agenda de envio');

/**
* Handles importing / uploading of a template / newsletter / autoresponder.
*/
define('LNG_UploadedFileEmpty', 'O arquivo carregado est&aacute; vazio. Por favor, tente novamente.');
define('LNG_UploadedFileBad', 'N&atilde;o foi poss&iacute;vel carregar arquivos. Por favor, tente novamente.');
define('LNG_UploadFileTooBig', 'N&atilde;o foi poss&iacute;vel carregar arquivos. &eacute; muito grande. Por favor, tente um arquivo menor.');

define('LNG_UploadedFileCantBeRead', 'N&atilde;o &eacute; poss&iacute;vel ler o arquivo carregado. Por favor, tente novamente.');
define('LNG_URLIsEmpty', 'URL est&aacute; vazia. Por favor, tente novamente.');
define('LNG_URLCantBeRead', 'N&atilde;o foi poss&iacute;vel localizar a url. Por favor, certifique-se que ela seja v&aacute;lida e, em seguida, tente novamente.');
define('LNG_NoCurlOrFopen', 'Infelizmente o servidor n&atilde;o consegue abrir arquivos remotos. <br/> Por favor, pergunte ao seu administrador de sistema para permitir essa op&ccedil;&atilde;o.');

/**
* Used for the settings page and the users page.
*/
define('LNG_UseSMTP', 'Utilizar servidor SMTP');
define('LNG_UseSMTPExplain', 'Sim, utilizar um servidor SMTP');

define('LNG_SmtpServer', 'Servidor SMTP');
define('LNG_HLP_SmtpServer', 'Escolha servidor SMTP padr&atilde;o configurado a partir da p&aacute;gina de defini&ccedil;&otilde;es, ou escolha um servidor SMTP personalizado para este cliente.');

define('LNG_SmtpServerIntro', 'Servidor de e-mail detalhes');
define('LNG_SmtpServerName', 'Hostname SMTP');
define('LNG_HLP_SmtpServerName', 'Digite o nome do host SMTP aqui, exemplo &quot;192.168.0.50&quot; ou &quot;mail.meusite.com&quot;');
define('LNG_SmtpServerUsername', 'Usu&aacute;rio SMTP');
define('LNG_HLP_SmtpServerUsername', 'Se o seu servidor SMTP requer autentica&ccedil;&atilde;o, digite o nome do usu&aacute;rio aqui.');
define('LNG_SmtpServerPassword', 'Senha SMTP');
define('LNG_HLP_SmtpServerPassword', 'Se o seu servidor SMTP requer autentica&ccedil;&atilde;o, digite a senha aqui.');
define('LNG_SmtpServerPort', 'Porta SMTP ');
define('LNG_HLP_SmtpServerPort', 'Para usar uma porta SMTP n&atilde;o padr&atilde;o(o padr&atilde;o &eacute; a porta 25), digite aqui.');

define('LNG_OverLimit_MaxEmails', 'Voc&ecirc; tem ultrapassado o n&uacute;mero de e-mails que esta autorizado a enviar..<br/>Favor enviar at&eacute; o limite determinado, ou fale com o seu administrador sobre o aumento desse limite.');
define('LNG_OverLimit_PerMonth', 'Voc&ecirc; tem ultrapassado o n&uacute;mero de e-mails que esta autorizado a enviar..<br/>Favor enviar at&eacute; o limite determinado, ou fale com o seu administrador sobre o aumento desse limite.');

/**
* Used by the e-mail class and testsmtp scripts.
*/
define('LNG_UnableToConnectToEmailServer', 'N&atilde;o foi poss&iacute;vel conectar ao servidor de Email: %s');
define('LNG_UnableToSendEmail_MailFrom', 'N&atilde;o foi poss&iacute;vel definir endere&ccedil;o de e-mail.');
define('LNG_UnableToSendEmail_RcptTo', 'N&atilde;o foi poss&iacute;vel ter devolvidos do endere&ccedil;o.');
define('LNG_UnableToSendEmail_Data', 'N&atilde;o foi poss&iacute;vel definir dados.');
define('LNG_UnableToSendEmail_DataWriting', 'N&atilde;o &eacute; poss&iacute;vel enviar dados.');
define('LNG_UnableToSendEmail_DataFinished', 'N&atilde;o &eacute; poss&iacute;vel enviar "." para o servidor.');
define('LNG_UnableToConnectToMailServer_EHLO', 'N&atilde;o &eacute; poss&iacute;vel enviar comando "EHLO" .');
define('LNG_UnableToConnectToMailServer_RequiresAuthentication', 'Servidor requer autentica&ccedil;&atilde;o de usu&aacute;rio ou senha, mas n&atilde;o foi definida.');
define('LNG_UnableToConnectToMailServer_AuthLogin', 'N&atilde;o &eacute; poss&iacute;vel enviar "auth login" para o servidor.');
define('LNG_UnableToConnectToMailServer_AuthLoginNotSupported', 'N&atilde;o &eacute; poss&iacute;vel autenticar no servidor. N&atilde;o\ suporta "AUTH LOGIN"');
define('LNG_UnableToConnectToMailServer_UsernameNotWritten', 'N&atilde;o &eacute; poss&iacute;vel autenticar no servidor. Nome de usu&aacute;rio n&atilde;o foi inserido.');
define('LNG_UnableToConnectToMailServer_PasswordNotWritten', 'N&atilde;o &eacute; poss&iacute;vel autenticar no servidor. Senha n&atilde;o foi inserida.');

/**
* Used with newsletters, templates, autoresponders, form creation
*/
define('LNG_ImportWebsite', 'Importa&ccedil;&atilde;o');

define('LNG_HTML_Using_Editor', 'Criar conte&uacute;do usando o editor WYSIWYG abaixo');
define('LNG_Editor_Import_Website', 'Importar arquivo de um site na web');
define('LNG_Editor_Use_URL', 'Utilize uma URL existente');
define('LNG_Text_Type', 'Digite o texto na caixa de texto abaixo');
define('LNG_Editor_Import_File_Wait', 'Importando arquivo, aguarde...');
define('LNG_Editor_Import_Website_Wait', 'Importando website, aguarde...');
define('LNG_Editor_ProblemImportingWebsite', 'Houve um problema ao importar a partir da URL especificada. Por favor, tente novamente.');
define('LNG_Editor_ChooseWebsiteToImport', 'Por favor, digite a url completa do site que voc&ecirc; deseja importar.');
define('LNG_Editor_ImportButton', 'Importar');

/**
* Used for sending and autoresponders
*/
define('LNG_EmbedImages', 'Incluir imagens como anexos?');
define('LNG_EmbedImagesExplain', 'Sim, inclua imagens do conte&uacute;do');

define('LNG_SendTo_FirstName', 'Campo personalizado do meu "Primeiro Nome" &eacute;');

define('LNG_SendTo_LastName', 'Campo personalizado do meu "&Uacute;ltimo Nome" &eacute;');

define('LNG_SelectNameOption', 'Selecione o campo personalizado seu "Nome"');

// used all over the place with newsletters
define('LNG_CreateNewsletterButton', 'Criar Campanha de e-mail...');
define('LNG_NoNewsletters', 'Nenhuma campanha de e-mail foi criada.%s');

// used by autoresponders & stats
define('LNG_SentWhen', 'Enviar');
define('LNG_Immediately', 'Imediatamente ap&oacute;s a inscri&ccedil;&atilde;o');
define('LNG_HoursAfter_One', '1 hora ap&oacute;s a inscri&ccedil;&atilde;o');
define('LNG_HoursAfter_Many', '%s horas ap&oacute;s a inscri&ccedil;&atilde;o');

define('LNG_ClickedOnLink', 'Clicaram no link');
define('LNG_YesFilterByLink', 'Sim, filtro por link');
define('LNG_LoadingMessage', 'Carregando, por favor, aguarde...');
define('LNG_FilterAnyLink', 'Qualquer Link');

define('LNG_OpenedNewsletter', 'Aberturas da Campanha');
define('LNG_YesFilterByOpenedNewsletter', 'Sim, filtrar por abertura da campanha de Email');
define('LNG_FilterAnyNewsletter', 'Qualquer campanha de Email');

define('LNG_UnableToOpenPopupWindow', 'Erro: N&atilde;o foi poss&iacute;vel abrir a janela do navegador. Verifique se voc&ecirc; desativou o bloqueador de pop-ups e voc&ecirc; n&atilde;o tem Norton Internet Security, ZoneAlarm ou qualquer outro script de \"seguran&ccedil;a\" que possa bloquear a abertura da janela do navegador, em seguida, tente novamente.');



/**
* used by sending and forms.
*/
define('LNG_SendFromName', 'Enviado de:');

define('LNG_SendFromEmail', 'Envie a partir deste Email');

define('LNG_ReplyToEmail', 'Enviar e-mail de resposta para');

define('LNG_BounceEmail', 'Enviar e-mail de erro para');

/**
* Searching custom fields.
*/
define('LNG_Filter_Number', 'Filtro campo n&uacute;mero');

define('LNG_Filter_Checkbox', 'Filtro checkbox');
define('LNG_HLP_Filter_Checkbox', 'Para restringir a filtragem deste campo, assinale a op&ccedil;&atilde;o que deseja pesquisar.');

define('LNG_Filter_Date', 'Filtro data');

define('LNG_Filter_Dropdown', 'Filtro dropdown');
define('LNG_HLP_Filter_Dropdown', 'Para filtrar esse campo de pesquisa, escolha a op&ccedil;&atilde;o que voc&ecirc; deseja pesquisar.');

define('LNG_Filter_Radiobutton', 'Filtro Radio Button');
define('LNG_HLP_Filter_Radiobutton', 'To filter searching of this field, choose an option you want to search for.');

define('LNG_Filter_Text', 'Filtro Campo Texto');
define('LNG_HLP_Filter_Text', 'Filtre pelo campo de busca, digite o texto que deseja localizar. Ser&aacute; procurado em qualquer texto, n&atilde;o garante uma correspond&ecirc;ncia exata.');

define('LNG_Link_WebVersion', 'Vers&atilde;o web do Email');
define('LNG_Link_Unsubscribe', 'Link de Remo&ccedil;&atilde;o');


define('LNG_SendingSystem_From', 'Email@dominio.com.br');
define('LNG_UserLimitReached', 'Voc&ecirc; atingiu o n&uacute;mero m&aacute;ximo de usu&aacute;rios e n&atilde;o pode criar mais.');

define('LNG_User_OverQuota_Email', 'Ol&aacute;,
Este e-mail &eacute; para notific&aacute;-lo que o usu&aacute;rio \'%s\' (Email %s) agendou um envio de campanha para %s. Mas o limite de envios foi ultrapassado em %s email(s).

%s

Voc&ecirc; pode notificar o administrador clicando em "Responder" em seu programa de e-mail.
');
define('LNG_User_OverLimit_MaxEmails', 'N&uacute;mero m&aacute;ximo de Emails');
define('LNG_User_OverLimit_PerMonth', 'N&uacute;mero m&aacute;ximo de e-mails por m&ecirc;s');
define('LNG_User_OverQuota_StoppedSend', 'O envio foi reprovado.');
define('LNG_User_OverQuota_Subject', 'Notifica&ccedil;&atilde;o de excesso de cota de usu&aacute;rio');

define('LNG_User_OverQuota_ToUser_Email', 'Ola,
Este e-mail &eacute; uma notifica&ccedil;&atilde;o de que seu envio, agendado para sair em %s ultrapssou %s limitado a %s email(s).

%s

Notifique o administrador, clicando em "Responder" em seu programa e-mail.
');

define('LNG_User_OverQuota_ToUser_Subject', 'Notifica&ccedil;&atilde;o de cota excedida');

/**
**************************
* Changed/Added in NX1.0.5
**************************
*/

/**
* these MUST be space separated.
* This is only used to display the date/time options when sending a newsletter
* and has to be in the correct format and only contain the 3 options mentioned:
* - 'd' for day
* - 'm' for month
* - 'y' for year
* The order does not matter but the values do.
*/
define('LNG_DateTimeBoxFormat', 'd m y');

/**
**************************
* Changed/Added in NX1.0.7
**************************
*/


/**
**************************
* Changed/Added in NX1.1.3
**************************
*/
define('LNG_PreviewEmailNotSent', 'A Pr&eacute;-Visualiza&ccedil;&atilde;o n&atilde;o pode ser enviada para o e-mail %s: %s');


/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_TestSMTPSettings', 'Teste de SMTP');
define('LNG_HLP_TestSMTPSettings', 'Digite um e-mail para enviar um teste usando as defini&ccedil;&otilde;es de SMTP acima.');
define('LNG_EnterTestEmail', 'Digite um e-mail para enviar um teste');
define('LNG_EnterSMTPServer', 'Digite o nome do servidor SMTP para testar');

define('LNG_TestSendingSubject', 'Teste de sistema de Email');
define('LNG_TestSendingEmail', "Ola,\nEste &eacute; um teste do sistema de e-mail. Se voc&ecirc; recebeu esta ok, tudo est&aacute; funcionando como deveria."); // this is in double quotes because of the newline.

define('LNG_SendTestIntro', 'Envio Teste');
define('LNG_TestEmailAddress', 'Enviando teste do sistema');
define('LNG_HLP_TestEmailAddress', 'Digite um e-mail para testar o sistema de envio (usando as defini&ccedil;&otilde;es de SMTP fornecidas acima, se aplic&aacute;vel).');

define('LNG_TestEmailSent', 'O teste e-mail foi enviado com sucesso para o endere&ccedil;o de e-mail %s.');

define('LNG_TestEmailNotSent', 'Um teste de e-mail foi enviado com sucesso para o endere&ccedil;o de e-mail %s: %s');

define('LNG_UnableToLoadImage_Newsletter_List_Embed', 'N&atilde;o foi poss&iacute;vel carregar os seguintes imagens para inclu&iacute;-las na campanha de Email:<br/>%s');
define('LNG_UnableToLoadImage_Newsletter_List', 'N&atilde;o foi poss&iacute;vel carregar as seguintes imagens na campanha de Email:<br/>%s');
define('LNG_UnableToLoadImage', '- <a href="%s" target="_blank">%s</a> (%s)<br/>');

define('LNG_Bytes', ' B');
define('LNG_KiloBytes', ' KB');
define('LNG_MegaBytes', ' MB');
define('LNG_GigaBytes', ' GB');

define('LNG_GetTextContent', 'Puxar texto do HTML acima');

define('LNG_ImageInsert_Editor', 'Inserir ou modificar uma imagem');

define('LNG_ModifyLinkPlaceholder', 'Clique aqui para atualizar seus dados');
define('LNG_SendToFriendLinkPlaceholder', 'Clique aqui para enviar este e-mail para um amigo');

define('LNG_UnableToDelete', 'N&atilde;o &eacute; poss&iacute;vel excluir o arquivo');


define('LNG_AllOfTheFollowing', 'Todas caracter&iacute;sticas seguintes');
define('LNG_AnyOfTheFollowing', 'Qualquer uma das seguintes');

define('LNG_Menu_Templates_Create', 'Criar um Modelo Personalizado');
define('LNG_Menu_Templates_Manage_BuiltIn', 'Exibir Modelos Prontos');
define('LNG_Templates_BuiltIn', LNG_Menu_Templates_Manage_BuiltIn);

define('LNG_Menu_Newsletters_Create', 'Criar Campanha de Email');
define('LNG_Menu_Newsletters_Manage', 'Exibir Campanhas de Email');
define('LNG_Menu_Newsletters_Send', 'Enviar Campanha de Email');
define('LNG_Menu_Newsletters_ManageSchedule', 'Exibir envios programados');
define('LNG_Menu_Newsletters_Title', 'Criar, exibir e excluir campanhas de e-mail.');

define('LNG_Menu_Autoresponders_Title', 'Criar, exibir e excluir respostas autom&aacute;ticas.');
define('LNG_Menu_Autoresponders_Manage', 'Exibir respostas autom&aacute;ticas');
define('LNG_Menu_Autoresponders_Create', 'Criar respostas autom&aacute;ticas');


define('LNG_ActiveEmailCampaignHelp', 'Uma campanha de e-mail pode  ser feita e ter o status ativo e inativo. Uma campanha de e-mail inativa n&atilde;o pode ser enviada, ao passo que uma campanha ativa ser&aacute; autorizado o envio. Voc&ecirc; pode usar essa op&ccedil;&atilde;o se voc&ecirc; quiser criar uma campanha de e-mail que necessita de aprova&ccedil;&atilde;o antes de ser enviada quando, isso ocorre quando uma campanha e pessoa cria uma campanha de e-mail inativa e outra pessoa aprova e  \\\'Ativa\\\' o seu envio.');

define('LNG_ActiveAutoresponderHelp', 'Uma campanha de e-mail pode ser feita e ter o status ativo e inativo. Uma campanha de e-mail inativa n&atilde;o pode ser enviada, ao passo que uma campanha ativa ser&aacute; autorizado o envio. Voc&ecirc; pode usar a op&ccedil;&atilde;o se voc&ecirc; quiser criar uma campanha de e-mail que necessita de aprova&ccedil;&atilde;o antes de ser enviada quando, isso ocorre quando uma pessoa cria uma campanha de e-mail inativa e outra pessoa aprova e  \\\'Ativa\\\' o seu envio.');

define('LNG_HLP_SendPreview', 'Digite seu e-mail e clique no bot&atilde;o \\\'Enviar Preview\\\' para receber uma c&oacute;pia deste e-mail. Se voc&ecirc; deseja enviar para m&uacute;ltiplos endere&ccedil;os de e-mail &eacute; poss&iacute;vel separ&aacute;-los usando uma v&iacute;rgula - por exemplo: email@dominio.com, email2@dominio.com.<br/><br/>Se voc&ecirc; tiver feito o upload de novos anexos, eles n&atilde;o ser&atilde;o inclu&iacute;dos como parte do preview deste e-mail.');

define('LNG_SendNewsletterButton', 'Enviar Agora...');

define('LNG_NoNewsletters_HasAccess', ' Por favor, clique no bot&atilde;o "Criar Campanha de e-mail " para criar uma.');

define('LNG_Format_Text_Description', 'Emails no formato Texto s&atilde;o vis&iacute;veis em todos os clientes de e-mails e s&atilde;o menos propensos a ser reportados como spam devido &agrave; falta de c&oacute;digo HTML. Este tipo de e-mail n&atilde;o ser&aacute; capaz de obter resultados sobre taxas de abertura.');

define('LNG_Newsletter_Size_Over_EmailSize_Maximum', 'Esta campanha de e-mail &eacute; maior do que %s. Voc&ecirc; n&atilde;o ser&aacute; capaz de enviar esta e-mail de campanha at&eacute; voc&ecirc; reduzir o tamanho das imagens ou anexos, ou voc&ecirc; pode enviar essa campanha de e-mail sem imagens incorporadas.');

define('LNG_Editor_Upload_File', 'Fazer upload de um arquivo do meu computador');

define('LNG_Templates_User', 'Modelos Personalizados');

define('LNG_SpamHeading_RuleBroken', 'Regra Quebrada');
define('LNG_SpamHeading_Score', 'Pontua&ccedil;&atilde;o');
define('LNG_Spam_Heading_intro_text', 'A vers&atilde;o <b>texto</b> do seu e-mail quebra as seguintes regras de spam:');
define('LNG_Spam_Heading_intro_html', 'A vers&atilde;o <b>HTML</b> do seu e-mail quebra as seguintes regras de spam:');
define('LNG_Spam_Heading_intro_notspam_text', 'A vers&atilde;o <b>texto</ b> do seu e-mail n&atilde;o quebra qualquer regras de spam.');
define('LNG_Spam_Heading_intro_notspam_html', 'A vers&atilde;o <b>HTML</b> do seu e-mail n&atilde;o quebra qualquer regras de spam.');

define('LNG_Spam_Rating_Message', '<br />Seus e-mails n&atilde;o foram classificados <span style="font-size:15px; font-weight:bold">%s</span> a partir de um limiar de spam %s. %s');

define('LNG_Spam_Rating_notspam', 'Isto significa que h&aacute; uma alta chance que seu e-mail ser&aacute; entregue, mas entrega n&atilde;o esta garantida.');
define('LNG_Spam_Rating_alert', 'Enquanto sua classificacao de spam nao exceder o limite, ainda recomendamos que remova palavras-chave antes de enviar.');
define('LNG_Spam_Rating_spam', 'Isso significa que o seu e-mail cont&eacute;m diversas palavras-chave relacionadas a spam. &eacute; altamente recomend&aacute;vel que voc&ecirc; remova ou substitua estas palavras-chave antes de enviar.');

define('LNG_Banned_Manage_NoList_Message', 'Gerenciar Lista ');
define('LNG_Banned_Add_NoList_Message', 'Adicionar um e-mail para sua lista bloqueada');

define('LNG_Menu_Templates_Description', '\'Modelos\' sao layouts pre-definidos em que os novos e-mails podem ser baseados.');

define('LNG_Menu_Home_Description', 'Navegue devolta para a pagina inicial');
define('LNG_Menu_Forms_Description', 'Formul&aacute;rios para Website permitem &agrave;s pessoas possa se inscrever, pedir remo&ccedil;&atilde;o, alterar os seus dados e indicar e-mails para amigos.');
define('LNG_Menu_Users_Own_Description', 'Edite sua conta pessoal');
define('LNG_Menu_Users_Description', 'A conta do usuario permite que o usuario tenha login para usar o sistema em um nivel permitido.');
define('LNG_Menu_Settings_Description', 'As definicoes do sistema indicam as principais funcionalidades do aplicativo.');
define('LNG_Menu_Help_Description', 'Exibe tutoriais e artigos sobre a funcionalidade e a melhorar os resultados do seu e-mail marketing .');
define('LNG_Menu_Logout_Description', 'Sair do sistema');
define('LNG_Logo_Description', 'Navegue de volta para a p&aacute;gina inicial');

define('LNG_SpamKeywordsCheck', 'Verifique seu e-mail de SPAM');
define('LNG_SpamKeywordsCheck_Button', 'Verifique palavras-chave de SPAM');

define('LNG_EmailClientCompatibility', 'Compatibiidade de Cliente de Email');
define('LNG_EmailClientCompatibility_Button', 'Visualize seu e-mail em diversos programas Email');

define('LNG_MiscellaneousOptions', 'Op&ccedil;&otilde;es Diversas');

define('LNG_Recommended', '(Recomendado)');

define('LNG_Search_HaveClicked', 'Tenha clicado');
define('LNG_Search_HaveNotClicked', 'N&atilde;o tenha clicado');
define('LNG_Search_HaveOpened', 'Tenha Aberto');
define('LNG_Search_HaveNotOpened', 'N&atilde;o tenha Aberto');

define('LNG_OriginalHTMLVersion', 'Vers&atilde;o original em HTML');

define('LNG_DesignRules_Header', '<b>Regras de Formata&ccedil;&atilde;o de Email</b><br/><br/>');

define('LNG_DesignRules_Intro', 'Abaixo est&aacute; uma lista de v&aacute;rios programas e-mail e as diferentes regras de formata&ccedil;&atilde;o que podem ter sido quebradas.<br/><br/>Para ver como um e-mail ser&aacute; exibido em um determinado programa de Email, clique no link correspondente acima.');

define('LNG_Autoresponder_Count_None', '');
define('LNG_Autoresponder_Count_One', ' (1 Resposta Autom&aacute;tica)');
define('LNG_Autoresponder_Count_Many', ' (%s Respostas Autom&aacute;ticas)');

define('LNG_MaximumFileSizeReached', 'Voc&ecirc; est&aacute; tentando enviar arquivos maiores que o servidor permite que voc&ecirc; fa&ccedil;a o upload. O tamanho m&aacute;ximo permitido pelo servidor &eacute;: %s');

define('LNG_NewsletterDefaultTextContents', "Seu cliente de e-mail n&atilde;o pode ler este e-mail.\nPara visualiz&aacute;-lo on-line, por favor, clique aqui: %%webversion%%\n\n\nPara parar de receber nossos Emails:%%unsubscribelink%%");

define('LNG_DesignRules_NoRulesBroken', 'O e-mail deve ser exibido corretamente.');

define('LNG_EmailValidation', 'Valida&ccedil;&atilde;o de Email');

define('LNG_Format_', '');
define('LNG_FormType_', '');


/**
***************************
* Changed/Added in NX 1.3.1
***************************
*/

define('LNG_ShowFilteringOptionsLabel_Manage', 'Mostre-me:');
define('LNG_ShowFilteringOptionsLabel_Export', 'Eu quero:');

/**
***************************
* Changed/Added in NX 1.3.2
***************************
*/
define('LNG_Users', "Contas de acesso");

/**
***************************
* Changed/Added in NX 1.3.3
***************************
*/
define('LNG_DesignRules_PrintNotFinishedLoading', 'A lista de viola&ccedil;&atilde;o das regras ainda n&atilde;o foi carregada. Aguarde at&eacute; que essa lista tenha sido conclu&iacute;da.');
define('LNG_DesignRules_LoadingRules', 'Carregando regras para %s');

/**
***************************
* Changed/Added in NX 1.4
***************************
*/

define('LNG_WhatDoesThisMean', 'O que isso significa?');

define('LNG_Loading_Stats','Carregando, por favor, aguarde...');

define('LNG_AlreadySentTo_Partial', '(Enviado parcialmente)');
define('LNG_ResendTipHeading', 'Reenvie sua campanha de Email');

define('LNG_Resend', 'Reenviar');

define('LNG_NoneOfTheFollowing', 'Nenhuma das seguintes');

define('LNG_Loading_SendingPreview', 'Enviando e-mail de preview...');

define('LNG_UserDateHeader', 'Hora do Sistema: %s - (%s)');
define('LNG_LoggedInAs', 'Voc&ecirc; est&aacute; conectado como "%s" | ');

define('LNG_Job_Resend', 'Reenviar');
define('LNG_JobResendSuccess', 'Sua campanha de e-mail foi definida para ser reenviada.');
define('LNG_JobResendFail', 'Sua campanha de e-mail n&atilde;o pode ser reenviada. Por favor, tente novamente.');

define('LNG_CurrentUserReport', 'Contas de Usu&aacute;rio Atribu&iacute;das: %s&nbsp;&nbsp;Conta Admin: %s&nbsp;(Sua chave de licen&ccedil;a permite que voc&ecirc; crie mais %s  contas)');
define('LNG_CurrentUserReport_Multiple', 'Contas de Usu&aacute;rio Atribu&iacute;das: %s&nbsp;&nbsp;Conta Admin : %s&nbsp;(Sua chave de licen&ccedil;a permite que voc&ecirc; crie mais %s contas)');

define('LNG_Spam_Loading', 'Verificar o conte&uacute;do do seu boletim informativo...');
define('LNG_SendPreview_Loading', 'Enviando preview...');

define('LNG_CronSkippedProblem', 'O agendador n&atilde;o foi acionado para o sua &uacute;ltima %s tarefa. Voc&ecirc; deve entrar em contato com seu host para se certificar de que ela ainda est&aacute; funcional.');

define('LNG_TestModeEnabled', 'Seu aplicativo ainda est&aacute; atualmente em modo de teste. Isto significa que seus e-mails n&atilde;o ser&atilde;o enviados quando voc&ecirc; tentar enviar uma campanha de e-mail.');

define('LNG_Spam_Guide_Heading', 'Verifique seu e-mail de resposta de Spam');

define('LNG_SettingsShowSMTPCOM', 'Exibir op&ccedil;&otilde;es SMTP.com');
define('LNG_SettingsShowSMTPCOMLabel', 'Exibir op&ccedil;&otilde;es SMTP.com');
define('LNG_HLP_SettingsShowSMTPCOM', 'Assinale esta op&ccedil;&atilde;o se voc&ecirc; quiser disponibilizar para seus clientes escolher o SMTP.com como uma op&ccedil;&atilde;o para enviar Emails. SMTP.com oferece servidores de correio para quem quer enviar uma grande quantidade de Emails. Clique no bot&atilde;o \\\'Defini&ccedil;&otilde;es de Email\\\' para obter mais informa&ccedil;&otilde;es sobre SMTP.com.');

define('LNG_SmtpDefault', 'Usar o meu servidor SMTP padr&atilde;o');
define('LNG_SmtpDefaultSettings', 'Usar configura&ccedil;&atilde;o padr&atilde;o');
define('LNG_SmtpCustom', 'Eu vou especificar o meu pr&oacute;prio servidor SMTP');

define('LNG_UseDefaultMail', 'Email padr&atilde;o');
define('LNG_HLP_UseDefaultMail', 'Escolha essa op&ccedil;&atilde;o se voc&ecirc; n&atilde;o tiver o seu pr&oacute;prio servidor SMTP e quer usar a configura&ccedil;&atilde;o padr&atilde;o do seu servidor. Se voc&ecirc; precisar enviar mais do que algumas centenas de e-mails por semana &eacute; necess&aacute;rio que voc&ecirc; tenha o seu pr&oacute;prio servidor SMTP.');

define('LNG_Add_Banned_From_File', 'Eu quero fazer o upload de um arquivo que cont&eacute;m os endere&ccedil;os de Email/dom&iacute;nios para suprimir');

define('LNG_ProblemWithLocalMailServer', 'O servidor de e-mail local n&atilde;o aceitou seu e-mail. Entre em contato com seu host ou administrador do sistemas.');

define('LNG_OR', 'OU');

define('LNG_BounceError_NoDetails', 'Nenhuma conta de e-mail foi fornecida. Por favor, tente novamente.');

/**
***************************
* Changed/Added in NX 1.4.1
***************************
*/
define('LNG_UseSMTP_User', LNG_UseSMTP);
define('LNG_HLP_UseSMTP_User', LNG_HLP_UseSMTP . ' O servidor SMTP configurado aqui sobrep&otilde;e-se a todas as outras configura&ccedil;&otilde;es de SMTP para este usu&aacute;rio.');
define('LNG_FileTooBig_Server', 'O arquivo &eacute; muito grande e n&atilde;o pode ser carregado. Ela deve ser inferior a %s. Se for necess&aacute;rio aumentar este tamanho, entre em contato com o administrador do sistema ou webhost e pergunte-lhes como aumentar as defini&ccedil;&otilde;es de PHP "upload_max_filesize".');
define('LNG_FilePartiallyUploaded', 'O arquivo n&atilde;o foi carregado corretamente. Por favor, tente novamente.');
define('LNG_FileTooBig_NoSpace', 'O arquivo n&atilde;o foi carregado por que o servidor n&atilde;o tem mais espa&ccedil;o em disco. Entre em contato com o administrador do sistema ou webhost.');
define('LNG_FileUploadProblem_NoTmpDir', 'O arquivo n&atilde;o foi carregado por que o servidor n&atilde;o tem um diret&oacute;rio tempor&aacute;rio criado corretamente. Entre em contato com o administrador do sistema ou host e pe&ccedil;a para definir PHP "upload_tmp_dir" .');

/**
***************************
* Changed/Added in v5.0
***************************
*/

define('LNG_DateSubscribed', 'Data adicionada');
define('LNG_VisibleFields','Campos vis&iacute;veis');
define('LNG_HLP_VisibleFields','Escolha quais os campos voc&ecirc; deseja<br>exibirq uando estiver na p&aacute;gina da<br>Lista de contatos.');
define('LNG_ShowTheseFields','Exibir estes campos');
define('LNG_SelectFields','Selecione pelo menos um campo para exibir nesta lista.');

define('LNG_Subscribers', 'Contatos');

define('LNG_HLP_FilterFormat', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; pesquise os contatos inscritos em um formato espec&iacute;fico. Para procurar todos os contatos, deixe essa op&ccedil;&atilde;o definida como \\\'Outro Formato\\\'');

define('LNG_Subscriber_Count_Many', ' (%s Contatos Ativos)');
define('LNG_Subscriber_Count_One', ' (1 Contato Ativo)');

define('LNG_HLP_FilterEmailAddress', 'Esta op&ccedil;&atilde;o permitir&aacute; que voc&ecirc; fa&ccedil;a uma busca por contatos com um determinado nome de dom&iacute;nio ou parte do e-mail. Para pesquisar para todos os assinantes, deixar esta op&ccedil;&atilde;o vazia.');

define('LNG_HLP_FilterConfirmedStatus', 'Esta op&ccedil;&atilde;o permitir&aacute; que voc&ecirc; fa&ccedil;a uma busca na base de contatos com inscri&ccedil;&atilde;o confirmado ou n&atilde;o. Para buscar todos os contatos, deixe essa op&ccedil;&atilde;o definida como \\\'Ambos Confirmedos e N&atilde;o Confirmados\\\'');

define('LNG_HLP_ShowFilteringOptions', 'Escolha a primeira op&ccedil;&atilde;o para exportar todos os contatos da sua lista. Escolha a segunda op&ccedil;&atilde;o para ver op&ccedil;&otilde;es de filtro de modo que voc&ecirc; pode exportar contatos que s&oacute; correspondem aos seus crit&eacute;rios de pesquisa.');

define('LNG_HLP_FilterByDate', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; filtre contatos que se inscreveram antes, depois ou entre datas espec&iacute;ficas. Para procurar todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_SubscribeRequestDate', 'A data e a hora que contatos pediram para participar desta lista de contatos.');
define('LNG_SubscribeRequestIP', 'Confirmar IP');
define('LNG_HLP_SubscribeRequestIP', 'O endere&ccedil;o do I.P. do computador a partir do qual esse contato pediu para participar desta lista de contatos.');
define('LNG_SubscribeConfirmDate', 'Confirma Data Contato');
define('LNG_HLP_SubscribeConfirmDate', 'A data e a hora que este contato confirmou o pedido para participar nesta lista de contatos.');
define('LNG_SubscribeConfirmIP', 'Confirmar IP');
define('LNG_HLP_SubscribeConfirmIP', 'O endere&ccedil;o do I.P. do computador a partir do qual esse contato pediu para participar desta lista de contatos.');

define('LNG_NoSubscribersOnList', 'N&atilde;o existem contatos na lista(s) selecionada(s).');
define('LNG_NoSubscribersMatch', 'Nenhum contato corresponde aos seus crit&eacute;rios de pesquisa. Por favor, tente novamente.');
define('LNG_NoSubscribersOnSegment', 'N&atilde;o existem contatos nos segmentos(s) selecionado(s).');

define('LNG_HLP_EmbedImages', 'Permite inserir as imagens dentro do conte&uacute;do do e-mail. Isso pode tornar o e-mail significativamente mais pesado, mas permitir&aacute; que os contatos visualizem o conte&uacute;do off-line.');

define('LNG_HLP_SendTo_FirstName', 'Se voc&ecirc; tiver um campo personalizado para o \\\'Primeiro Nome\\\' do contato, escolha aqui, desta forma os e-mails ser&atilde;o dirigidos &agrave; pessoa individualmente.<br/>Se voc&ecirc; tem um campo Personalizado combinado (ou seja, apenas um campo chamado \\\'Nome\\\') escolha aqui um campo personalizado.');

define('LNG_HLP_SendTo_LastName', 'Se voc&ecirc; tiver um campo personalizado para o \\\&uacute;ltmo nome\\\' do contato, escolha aqui, desta forma os e-mails ser&atilde;o dirigidos &agrave; pessoa individualmente.<br/>Se voc&ecirc; tem um campo Personalizado combinado (ou seja, apenas um campo chamado \\\'Nome\\\') deixe esta op&ccedil;&atilde;o vazia.');

define('LNG_HLP_ClickedOnLink', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; filtre os contatos que clicarem em um link espec&iacute;fico a partir de uma campanha de e-mail ou resposta autom&aacute;tica enviada para esta lista de contatos. Para procurar todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_OpenedNewsletter', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; filtre os contatos que abriram uma determinada campanha de e-mail ou resposta autom&aacute;tica enviada para esta lista de contatos. Para procurar todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_NoUnsubscribeLinkInHTMLContent', 'N&atilde;o foi encontrado nenhum link de remo&ccedil;&atilde;o na vers&atilde;o html do seu e-mail. &eacute; recomendado que voc&ecirc; adicione esse link para que seus possam remover-se facilmente da sua lista.');

define('LNG_NoUnsubscribeLinkInTextContent', 'N&atilde;o foi encontrado nenhum link de remo&ccedil;&atilde;o na vers&atilde;o Texto do seu e-mail. &eacute; recomendado que voc&ecirc; adicione esse link para que seus possam remover-se facilmente da sua lista.');

define('LNG_HLP_Filter_Number', 'Para restringir a filtragem deste campo, voc&ecirc; pode usar >, = e <. Por exemplo, a busca por contatos que estejam abaixo de 25, introduza < 25.');

define('LNG_HLP_Filter_Date', 'Escolha a data ou o per&iacute;odo para filtrar contatos.<br/>Para pesquisar entre os meses, coloque * como o ano.<br/>Isto s&oacute; funciona quando se pesquisa entre datas.');

define('LNG_Newsletter_SendSize_Approximate', '<li>Cada e-mail ter&aacute; aproximadamente <b>%s</b>, que totaliza <b>%s</b> ao todo.</li>');

define('LNG_Menu_Members_Title', 'Criar, exibir e excluir contatos.');

define('LNG_Subscribers_Search_Step2', 'Pesquise contatos, digitando palavras-chave na busca e alterando as op&ccedil;&otilde;es no formul&aacute;rio abaixo. Saiba como pesquisar contatos de forma mais eficaz atrav&eacute;s da leitura <a href="#" onClick="LaunchHelp(\'832\'); return false;">deste artigo</a>.');

define('LNG_Format_HTML_Description', 'Seus contatos devem ser capazes ler mensagens HTML no seu programa de e-mail. Este tipo de e-mail ir&aacute; produzir melhores taxas de abertura e monitoramento da campanha.');
define('LNG_Format_TextAndHTML_Description', 'essa op&ccedil;&atilde;o permite que seus contatos leia seus e-mails em qualquer tipo de cliente assim o desejarem. Este tipo de e-mail produz resultados limitados.');

define('LNG_Newsletter_Size_Over_EmailSize_Warning', 'Esta campanha de e-mail &eacute; maior do que %s, o que significa que pode demorar um pouco para os seus contatos fa&ccedil;am o download se incorporar imagens.');

define('LNG_Newsletter_Size_Over_EmailSize_Warning_Send', 'Esta campanha de e-mail &eacute; maior do que %s, o que significa que pode demorar um pouco para os seus contatos fa&ccedil;am o download.');

define('LNG_Help_ListsManage', 'As Listas de Contatos s&atilde;o utilizadas para armazenar informa&ccedil;&otilde;es sobre assinantes ou leads, e deve incluir o e-mail e outras informa&ccedil;&otilde;es como nome, empresa, idade, etc.');

define('LNG_Import_Add_NoList_Message', 'importar seus contatos');
define('LNG_Export_Add_NoList_Message', 'exportar seus contatos');
define('LNG_View_NoList_Message', 'exibir seus contatos');
define('LNG_Remove_NoList_Message', 'remover contatos');
define('LNG_Add_NoList_Message', 'adicionar contatos');

define('LNG_Menu_MailingLists_Description', 'Visualizar, adicionar e editar suas listas de contatos ou leads.');
define('LNG_Menu_Members_Description', 'Ver ou buscar contatos em todas as listas.');
define('LNG_Menu_Newsletters_Description', 'Ver ou editar campanhas de e-mail.');
define('LNG_Menu_Autoresponders_Description', 'Ver ou editar e-mails resposta autom&aacute;tica.');

define('LNG_AddSubscriber', 'Adicionar&nbsp;Contatos');
define('LNG_AddSubscriberTitle', 'Adicionar contato &agrave; lista');

define('LNG_ResendTipInfo', 'Sua campanha de e-mail n&atilde;o foi enviada a todos os seus contatos. Escolha o \\\'Reenviar\\\' para nova tentativa de envio para os demais contatos.');

define('LNG_HLP_ReplyToEmail', 'Quando um contato receba e-mail e clica em respondera, para qual e-mail dever&aacute; ser enviada essa resposta?<br/>voc&ecirc; pode alterar o e-mail padr&atilde;o, editando a lista de contatos e mudar o \\\'Email responder para\\\'');

define('LNG_User_Total_CreditsLeft', 'Voc&ecirc; tem %s cr&eacute;ditos de e-mail no total');
//define('LNG_User_Monthly_CreditsLeft', 'Voc&ecirc; tem %s cr&eacute;ditos de e-mail de um total de %s');
define('LNG_Menu_Segments_Manage', 'Ver Segmentos');
define('LNG_Menu_Segment_Description', 'Ver e criar listas segmentadas de seus contatos ou leads.');

define('LNG_UnsubLinkPlaceholder', 'Clique aqui para deixar de receber estes e-mails');
define('LNG_NoLists', 'Nenhuma lista de contatos esta dispon&iacute;vel %s');

define('LNG_ListAssign', '&nbsp;Entre em contato com o administrador do sistema para atribuir-lhe uma lista de contatos.');

define('LNG_Menu_Statistics_Lists', 'Estat&iacute;sticas - Lista de contatos');

define('LNG_MailingLists', 'Lista de contatos');
define('LNG_MailingList', 'Lista de contatos');

define('LNG_Segments', 'Segmentos');

define('LNG_HLP_MailingList', 'Para come&ccedil;ar, escolha uma lista de contatos para trabalhar. Voc&ecirc; tamb&eacute;m pode selecionar uma lista de contatos clicando duas vezes sobre uma op&ccedil;&atilde;o.');

define('LNG_SelectList', 'Selecione pelo menos uma lista de contatos antes de continuar.');
define('LNG_SelectOneList', 'Por favor, selecione uma lista de contatos antes de continuar.');
define('LNG_SelectSegment', 'Selecione pelo menos um segmento antes de continuar.');

define('LNG_Link_MailingListArchives', 'Link para arquivo de lista de contatos');

define('LNG_ListCreate', '&nbsp;Clique no bot&atilde;o "Criar uma Lista de contatos" para criar uma.');
define('LNG_CreateListButton', 'Criar uma lista de contatos...');

define('LNG_Menu_MailingLists_Title', 'Criar, exibir e excluir suas listas de contatos.');

define('LNG_Autoresponder_NoLists', 'Voc&ecirc; precisa de acesso a uma lista de contatos para poder criar uma resposta autom&aacute;tica. %s');
define('LNG_Subscriber_NoLists', 'Voc&ecirc; precisa de acesso a uma lista de contatos %s. %s');

define('LNG_Menu_Statistics_Description', 'Visualize os relat&oacute;rios de cada campanha de e-mail que voc&ecirc; enviou.');

define('LNG_MailingListDetails', 'Selecione uma Lista de contatos(s)');

define('LNG_HLP_SendFromName', 'Que pessoa ou empresa deve ser apresentado no campo \\\'Nome de Origem\\\' para este Email?<br/>voc&ecirc; pode alterar o nome padr&atilde;o, editando sua lista de contatos e alterando o \\\'nome do propriet&aacute;rio da lista\\\'');
define('LNG_HLP_SendFromEmail', 'Qual e-mail dever&aacute; ser apresentado no campo \\\'Email de Origem\\\' para este Email?<br/>voc&ecirc; pode alterar o nome padr&atilde;o, editando sua lista de contatos e alterando o \\\'Email do propriet&aacute;rio da lista\\\'');
define('LNG_HLP_BounceEmail', 'Quando um e-mail retornar, ou seja, for rejeitado pelo servidor de e-mail de destino, para qual e-mail dever&aacute; ser enviado o e-mail de erro? Certifique-se de n&atilde;o enviar outro e-mails para este endere&ccedil;o.<br/>voc&ecirc; pode alterar o nome padr&atilde;o, editando sua lista de contatos e alterando o \\\'Email de Bounce\\\'');

define('LNG_HLP_FilterStatus', 'Esta op&ccedil;&atilde;o permitir&aacute; que voc&ecirc; fa&ccedil;a a busca de contatos com base no seu status na lista de contatos.<br/>Contatos ativos s&atilde;o aqueles que n&atilde;o foram devolvidos e que n&atilde;o cancelaram a partir da lista de contatos.<br/>Os com status \\\'devolvidos (Bounced)\\\' foram desativados da lista de contatos porque forma devolvidos muitas vezes, ou ter sido detectado como um e-mail que n&atilde;o existe..<br/>Os com status \\\'removidos\\\' s&atilde;o aqueles que especificamente cancelaram a partir da lista de contatos.<br/><br/>Para procurar todos os contatos, defina esta op&ccedil;&atilde;o para definir \\\'Qualquer Status\\\'');

define('LNG_Preview_CustomFieldsNotAltered', '<b>Observe:</b> Os campos personalizados, links de remo&ccedil;&atilde;o e anexos n&atilde;o podem ser selecionados neste preview porque s&atilde;o espec&iacute;ficos do contato.<br><br>Para testar seus e-mails com campos personalizados, anexos e links de remo&ccedil;&atilde;o, crie uma lista de contatos teste com voc&ecirc; mesmo como contato e envie o e-mail para essa lista.');

define('LNG_Menu_Members_Remove', 'Remover contatos');
define('LNG_Menu_Members_Manage', 'Exibir todos contatos');
define('LNG_Menu_Members_Import', 'Importar contatos de um arquivo');
define('LNG_Menu_Members_Export', 'Exportar contatos para um arquivo');
define('LNG_Menu_Members_Add', 'Adicionar um contato');
define('LNG_Menu_MailingLists_Manage', 'Exibir listas de contatos');
define('LNG_Menu_MailingLists_Create', 'Criar listas de contatos');
define('LNG_Menu_MailingLists_CustomFields', 'Exibir campos personalizados');
define('LNG_Menu_Members_Banned_Manage', 'Lista de e-mails suprimidos');
define('LNG_Menu_Members_Banned_Add', 'Suprimir um e-mail ou dom&iacute;nio');

define('LNG_Menu_MailingLists_Create_Description', 'Criar uma nova lista de contatos, para que voc&ecirc; possa adicionar contatos ou leads.');
define('LNG_Menu_MailingLists_CustomFields_Description', 'Visualizar e editar os campos personalizados que voc&ecirc; j&aacute; criou.');
define('LNG_Menu_MailingLists_Bounce_Description', 'Localizar e remover os endere&ccedil;os de e-mail inv&aacute;lidos de uma lista.');
define('LNG_Menu_Members_Add_Description', 'Digite os dados de um novo contato em um formul&aacute;rio e adicione &agrave; sua lista.');
define('LNG_Menu_Members_Import_Description', 'Fazer upload de um arquivo do seu computador contendo uma lista de contatos ou leads.');
define('LNG_Menu_Members_Export_Description', 'Exportar contatos de uma/mais listas para um arquivo que voc&ecirc; pode baixar.');
define('LNG_Menu_Members_Remove_Description', 'Cancelar inscri&ccedil;&atilde;o, remove permanentemente o contato de uma lista de contatos.');
define('LNG_Menu_Members_Banned_Manage_Description', 'Emails suprimidos ou bloqueados permanecem em suas listas, mas os contatos n&atilde;o iram receber Emails.');
define('LNG_Menu_Members_Banned_Add_Description', 'Adicionar um e-mail ou dom&iacute;nio para ser suprimido ou bloqueado na lista.');
define('LNG_Menu_Newsletters_Send_Description', 'Enviar uma campanha de e-mail para uma lista de contatos.');
define('LNG_Menu_Newsletters_ManageSchedule_Description', 'Veja quais s&atilde;o as campanhas de e-mail programadas para envio e quando.');
define('LNG_Menu_Newsletters_Create_Description', 'Criar uma nova campanha de e-mail que voc&ecirc; possa enviar e-mails para seus contatos.');
//define('LNG_Menu_Autoresponders_Create_Description', 'Crie uma auto resposta para ser enviada automaticamente depois que a campanha for disparada.');
define('LNG_Menu_Templates_Create_Description', 'Criar um novo modelo personalizado');
define('LNG_Menu_Templates_Manage_BuiltIn_Description', 'Ver modelos constru&iacute;dos e suas aplica&ccedil;&otilde;es');
define('LNG_Menu_Templates_Manage_Description', 'Gerencie modelos personalizados');
define('LNG_Menu_Website_Forms', 'Exibir formul&aacute;rios');
define('LNG_Menu_Website_Forms_Description', 'Ver e copiar o codigo do formulario para website que voce criou.');
define('LNG_Menu_Create_Form', 'Criar formul&aacute;rio');
define('LNG_Menu_Create_Form_Description', 'Construa um formul&aacute;rio de inscri&ccedil;ao para voc&ecirc; colocar em seu website.');

define('LNG_Menu_Templates', 'Modelos');

define('LNG_Menu_Tools', 'Ferramentas');
define('LNG_Menu_Tools_Description', 'Menu ferramentas');

define('LNG_Done','Voltar');

// Used for drop-down boxes
define('LNG_Select', 'Selecione');


define('LNG_TooManyLists', 'Voc&ecirc; est&aacute; com muitas listas e pode ter atingido o limite m&aacute;ximo. Por favor, apague alguma lista ou fale com o seu administrador sobre como alterar o n&uacute;mero de listas que voc&ecirc; est&aacute; autorizado a criar.');

define('LNG_Menu_CustomFields_Create', 'Criar Campo Personalizado');
define('LNG_Menu_CustomFields_Create_Description', 'Campos personalizados armazenam dados para contato, como nome ou n&uacute;mero de telefone.');

define('LNG_AdvancedSearch', 'Busca Avan&ccedil;ada');

define('LNG_Paging_All', 'Todos');
define('LNG_Paging_Confirm_All', 'Se voc&ecirc; tiver um grande n&uacute;mero de registros nesta p&aacute;gina poder&aacute; demorar muito tempo para carregar. Continuar?');

define('LNG_Menu_Tools_SystemInformation', 'Informa&ccedil;&atilde;o do Sistema');
define('LNG_Menu_Tools_SystemInformation_Description', 'Veja informa&ccedil;&otilde;es sobre seu servidor');

define('LNG_ViewContacts', 'Ver&nbsp;Contatos');
define('LNG_SearchContacts', 'Buscar&nbsp;Contatos');

define('LNG_Header_Send_TestMode_WarningMessage_Admin', '<b>Importante:</b> O sistema est&aacute; em "Modo Teste". Isto significa que e-mails n&atilde;o ser&atilde;o enviados quando voc&ecirc; enviar uma campanha por e-mail. Para desativar modo de teste, v&aacute; at&eacute; a p&aacute;gina Configura&ccedil;&otilde;es, escolha a op&ccedil;&atilde;o "Defini&ccedil;&otilde;es de Email" e desative o "Envio no modo de teste".');
define('LNG_Header_Send_TestMode_WarningMessage_User', '<b>Importante:</b> O sistema est&aacute; em "Modo Teste". Isto significa que seus e-mails n&atilde;o ser&atilde;o enviados quando voc&ecirc; enviar uma campanha por e-mail. Para desativar modo de teste, entre em contato com o administrador do sistema.');

define('LNG_Searchbox_Type_Prompt', 'Digite aqui para pesquisar...');
define('LNG_Searchbox_List_Info_Simple', '(Apenas fica vis&iacute;vel listas de contatos que estejam marcadas como selecionadas)');
define('LNG_Searchbox_List_Info', '(Apenas vis&iacute;vel listas de contatos segmentos que marcados como selecionadas)');

define('LNG_Editor_ChooseFileToUpload', 'Escolha um arquivo para fazer upload.');
define('LNG_Menu_Templates_Manage', 'Personalizar Modelo de Email');

define('LNG_Editor_WaitToLoad', 'Por favor, aguarde o editor de carregar antes de salvar.');

define('LNG_CustomFieldsInsert_Editor', 'Inserir um campo personalizado');

define('LNG_TextWidthLimit_Explaination', 'Se poss&iacute;vel, mantenha o seu texto &agrave; esquerda da linha cinza acima. <a href="#" onclick="LaunchHelp(839); return false;" style="color:#999999;">Por que</a>?');

define('LNG_Menu_Autoresponders_Statistics_Description', 'Ver as estat&iacute;sticas dos e-mails de resposta autom&aacute;tica que voc&ecirc; definiu.');
define('LNG_Menu_Statistics_Lists_Description', 'Saiba como fazer para que sua lista de contato aumente ao longo do tempo.');
define('LNG_Menu_Statistics_Users_Description', 'Vis&atilde;o geral de cada usu&aacute;rio no sistema, incluindo e-mails enviados.');
define('LNG_Menu_Search_Contacts', 'Buscar Contatos');
define('LNG_Menu_Contacts_Search_Description', 'Pesquisa por contatos em todas as suas listas e segmentos.');

define('LNG_ChangeFormat_Text', 'Atualizar contatos para receber campanhas em formato Texto');
define('LNG_ChangeFormat_HTML', 'Atualizar contatos para receber campanhas em formato HTML');

define('LNG_ChangeStatus_Confirm', 'Atualizar contatos com status confirmado');
define('LNG_ChangeStatus_Unconfirm', 'Atualizar contatos com status n&atilde;o confirmado');

define('LNG_Status', 'Status de atividade');
define('LNG_Format', 'Formato de email');
define('LNG_FilterByDate', 'Adicionar data');

define('LNG_FilterFormat', LNG_Format);
define('LNG_FilterStatus', LNG_Status);

define('LNG_Pages', 'P&aacute;ginas');
define('LNG_GuideToFiltering', '<a href="#" onClick="LaunchHelp(\'832\'); return false;">Saiba mais sobre filtros de contatos.</a>');
define('LNG_SaveAndKeepEditing', 'Salvar &amp; manter edi&ccedil;&atilde;o');

define('LNG_Jan_Long', 'Janeiro');
define('LNG_Feb_Long', 'Fevereiro');
define('LNG_Mar_Long', 'Mar&ccedil;o');
define('LNG_Apr_Long', 'Abril');
define('LNG_May_Long', 'Maio');
define('LNG_Jun_Long', 'Junho');
define('LNG_Jul_Long', 'Julho');
define('LNG_Aug_Long', 'Agosto');
define('LNG_Sep_Long', 'Setembro');
define('LNG_Oct_Long', 'Outubro');
define('LNG_Nov_Long', 'Novembro');
define('LNG_Dec_Long', 'Dezembro');

/**
***************************
* Changed/Added in v5.0.6
***************************
*/
define('LNG_Subscriber_Count_Active_Confirmed_Many', ' (%s contatos ativos)');
define('LNG_Subscriber_Count_Active_Confirmed_One', ' (1 contato ativo)');

/**
***************************
* Changed/Added in 5.5.0
***************************
*/

define('LNG_Menu_TriggerEmails', 'Ver Disparadores');
define('LNG_Menu_TriggerEmails_Description', 'Um disparador ativa uma a&ccedil;&atilde;o quando um evento espec&iacute;fico ocorre.');
define('LNG_Menu_Statistics_TriggerEmails', 'Estat&iacute;sticas do disparador');
define('LNG_Menu_Statistics_TriggerEmails_Description', 'Veja estat&iacute;sticas para disparadores que voc&ecirc; criou.');

# For more information on the variables you can use for the date call please see http://www.php.net/date
define('LNG_TodaysDate', 'd - F - Y');

define('LNG_EnterBounceUsername', 'Insira por favor o usu&aacute;rio para o endere&ccedil;o de e-mail de retorno.');
define('LNG_EnterBounceEmailAddress', 'Insira por favor a senha para o endere&ccedil;o de e-mail de retorno.');
define('LNG_UnableEvaluateExtraMailSettings', 'Incapaz de avaliar ajustes extra do correio.');
define('LNG_InvalidExtraMailSettings', 'Inv&aacute;lido \" extra mail settings \" detectado.');

define('LNG_UserActivityLogLabel', 'Atividade recente: ');

define('LNG_Second(s)', 'segundo(s)');
define('LNG_Minute(s)', 'minuto(s)');

define('LNG_Owner', 'Propriet&aacute;rio');

define('LNG_Menu_Autoresponders_Create_Description', 'Crie um e-mail que seja emitido automaticamente ap&oacute;s um tempo espec&iacute;fico.');

/**
***************************
* Changed/Added in 5.5.3
***************************
*/
//define('LNG_User_Total_CreditsLeft', 'Voc&ecirc; tem cr&eacute;ditos totais de %s deixados.');
define('LNG_User_Monthly_CreditsLeft', 'Voc&ecirc; tem %s dos cr&eacute;ditos totais de %s deixados para este m&ecirc;s.');

/**
*************************
* Changed/added in 5.6.0
*************************
*/

define('LNG_EnterBounceServer', 'Digite o endere&ccedil;o do seu servidor de e-mail, algo como mail.seusite.com.br');

define('LNG_Pick_Contact_List', 'LISTA DE CONTATOS');
define('LNG_Find_Mail_Server', 'CONECTAR AO SERVIDOR');
define('LNG_Find_Bounces', 'RASTREAR RETORNOS');
define('LNG_Remove_Contacts', 'REMOVER CONTATOS');
define('LNG_Finished', 'CONCLUIDO');

define('LNG_Bounce_Account_Type','Tipo da conta');
define('LNG_Bounce_POP3_Account','POP3 (Recomendado)');
define('LNG_Bounce_IMAP_Account','IMAP');
define('LNG_Bounce_Adv_Settings','Configura&ccedil;&otilde;es Avan&ccedil;adas');
define('LNG_Bounce_Adv_Settings_Autodetect','Auto-detectar configura&ccedil;&otilde;es avan&ccedil;adas (recomendado)');
define('LNG_Bounce_Emp_Inbox','Esvaziar Caixa de Entrada?');
define('LNG_Bounce_Emp_Inbox_Text','Esvaziar a caixa de entrada ap&oacute;s processar os retornos.');
define('LNG_Bounce_Test_Conn_Cont','Conectar & Continuar');
define('LNG_Bounce_Server_Desc','(Algo como mail.seusite.com.br - confirme com seu servidor de hospedagem)');
define('LNG_Bounce_Auto_Process_Short', 'Processar os retornos automaticamente');
define('LNG_Bounce_Manual_Process_Short', 'Processar os retornos manualmente');
define('LNG_HLP_Bounce_Account_Type','Qual o tipo da conta de e-mail que recebe os retornos? Se voc&ecirc; n&atilde;o sabe, tente usar a op&ccedil;&atilde;o POP3.');
define('LNG_HLP_Bounce_Adv_Settings','Voc&ecirc; pode setar op&ccedil;&otilde;es extras para conectar em sua conta de retornos e processar a tarefa. Caso seja necess&aacute;rio, ative esta op&ccedil;&atilde;o e preencha os dados a seguir. Se n&atilde;o sabe, pule esta op&ccedil;&atilde;o.');
define('LNG_HLP_Bounce_Emp_Inbox_Text','Se marcado, todos os e-mails da caixa de entrada em sua conta de retorno ser&atilde;o removidos	ap&oacute;s o processamento. Voc&ecirc; deve marcar esta op&ccedil;&atilde;o caso a conta configurada seja somente para receber os retornos.');

define('LNG_Upload', 'Upload');

define('LNG_Menu_Images_Manage', 'Gerenciador de Imagens');
define('LNG_Menu_Images_Manage_Description', 'Envie uma imagem do seu computador para usar na cria&ccedil;&atilde;o do conte&uacute;do dos seus e-mails.');

define('LNG_ApplicationSettings_Heading', 'Config. Geral');
define('LNG_EmailSettings_Heading', 'Config.&nbsp;E-mail');
define('LNG_BounceSettings_Heading', 'Config.&nbsp;Retornos');
define('LNG_CreditSettings_Heading', 'Config.&nbsp;Cr&eacute;ditos');
define('LNG_CronSettings_Heading', 'Config.&nbsp;Automa&ccedil;&atilde;o&nbsp;(Cron)');
define('LNG_SecuritySettings_Heading', 'Config. de Seguran&ccedil;a');
define('LNG_AddonsSettings_Heading', 'Config. Extras');

define('LNG_Spam_Check_Passed', 'Verifica&ccedil;&atilde;o de spam completa.');
define('LNG_Spam_Check_Failed', 'Falha de verifica&ccedil;&atilde;o de spam');

define('LNG_CreditWarning_EmailSubject', 'Cr&eacute;ditos de E-mails');

define('LNG_Spam_Guide_Forced', 'Seu administrador habilitou a a verifica&ccedil;&atilde;o de spam for&ccedil;ada em todas as campanhas de e-mails e auto-respostas antes de serem enviados. Sua mensagem quebra as regras mostradas abaixo. Por favor, mude sua mensagem para reduzir o seu score de spam, ap&oacute;s isto salve a mesma.');

define('LNG_EnterBouncePassword', 'Insira a senha do servidor da conta de retornos.');

/**
*************************
* Changed/added in 5.6.6
*************************
*/
define('LNG_PreviewHTMLContent','Pr&eacute;-Visualiza&ccedil;&atilde;o');

/**
*************************
* Changed/added in 5.7.0
*************************
*/
define('LNG_PrivateLabelSettings_Heading','Config.&nbsp;Privada');
define('LNG_TrialUserLimitReached', 'Voc&ecirc; excedeu o m&aacute;ximo da sua conta de usu&aacute;rios de teste. Voc&ecirc; pode solicitar sua conta de usu&aacute;rio normal.');


/**
*************************
* Changed/added in 5.7.1
*************************
*/
define('LNG_CurrentUserReport_Unlimited', 'Usu&aacute;rios cadastrados: %s&nbsp;/&nbsp;Administradores: %s&nbsp;(Sua licen&ccedil;a permite criar ilimitadas contas)');
define('LNG_AgencyCurrentUserReport', 'Administradores: <strong style="font-size:14px;">%s</strong>&nbsp;/&nbsp;Contas Limitadas: <strong style="font-size:14px;">%s</strong>&nbsp;/&nbsp;Contas de Teste: <strong style="font-size:14px;">%s</strong>&nbsp;&#151;&nbsp;');
define('LNG_AgencyCurrentUserReport_CreateUnlimitedNormalUnlimitedTrial', 'Sua licen&ccedil;a permite criar ilimitadas contas Limitadas e de Teste');
define('LNG_AgencyCurrentUserReport_CreateUnlimitedNormalFiniteTrial', 'Sua licen&ccedil;a permite criar ilimitadas Contas Limitadas e %s Conta(s) de Teste');
define('LNG_AgencyCurrentUserReport_CreateFiniteNormalUnlimitedTrial', 'Sua licen&ccedil;a permite criar %s Contas Limitadas e Ilimitadas Contas de Teste');
define('LNG_AgencyCurrentUserReport_CreateNormalAndTrial', 'Sua licen&ccedil;a permite criar %s Conta(s) Limitada(s) e %s Conta(s) de Teste');
define('LNG_AgencyCurrentUserReport_NormalOnly', 'Sua licen&ccedil;a permite criar %s Conta(s) Limitada(s)');
define('LNG_AgencyCurrentUserReport_TrialOnly', 'Sua licen&ccedil;a permite criar %s Conta(s) de Teste');

/**
*************************
* Changed/added in 5.7.3
*************************
*/
define('LNG_CannotVerifyAllImages_ExceedThreshold', 'Sua newsletter cont&eacute;m mais que %s imagens!');
define('LNG_CannotVerifyAllImages_OnlyThresholdImagesVerified', 'Somente as primeiras %s imagens foram verificadas.');
define('LNG_CannotVerifyAllImages_SendSizeEstimated', 'Emita o tamanho estimado.');

/**
*************************
* Changed/added in 6.0.0
*************************
*/
define('LNG_Menu_UsersGroups', 'Usuarios & Grupos');
define('LNG_MenuDescription_UsersGroups', 'Gerencie seus usu&aacute;rios e seus grupos com permiss&otilde;es.');
define('LNG_Menu_UsersGroups_ManageUsers', 'Ver Contas de Usu&aacute;rios');
define('LNG_Menu_UsersGroups_CreateUser', 'Criar Conta de Usu&aacute;rio');
define('LNG_Menu_UsersGroups_ManageGroups', 'Ver Grupos');
define('LNG_Menu_UsersGroups_CreateGroup', 'Criar um Grupo');

define('LNG_Menu_ContactLists', 'Lista de Contatos');
define('LNG_Menu_Contacts', 'Contatos');
define('LNG_Menu_EmailCampaigns', 'Campanhas de E-mail');
define('LNG_Menu_Surveys', 'Exames');
define('LNG_Menu_Autoresponders', 'Auto-respostas');
define('LNG_Menu_Statistics', 'Estat&iacute;sticas');

define('LNG_Menu_Surveys_View', 'Ver Exames');
define('LNG_Menu_Surveys_Create', 'Criar um Exame');
define('LNG_Menu_Surveys_Results', 'Resultados de Exames');
define('LNG_Menu_Surveys_Responses_Browse', 'Consultar Respostas');
define('LNG_Menu_Surveys_Responses_Export', 'Exportar Respostas');

define('LNG_Menu_Surveys_View_Description', 'Gerenciar exames existentes');
define('LNG_Menu_Surveys_Create_Description', 'Construa um exame o qual voc&ecirc; possa ligar a uma campanha.');
define('LNG_Menu_Surveys_Results_Description', 'Veja quem respondeu a seu exame e quais respostas escolheram');
define('LNG_Menu_Surveys_Responses_Browse_Description', 'Consulte respostas de exames, uma de cada vez usando as teclas (setas) para frente e para traz.');
define('LNG_Menu_Surveys_Responses_Export_Description', 'Download de respostas para arquivo CSV para futuras an&aacute;lises.');

define('LNG_DynContentTagsInsert_Editor', 'Inserir uma Tag de Conte&uacute;do Dinamico...');
define('LNG_Close', 'Close');
define('LNG_ShowAvalableDynamicContent', 'Conte&uacute;do Din&acirc;mico...');
