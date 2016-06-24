<?php
/**
* Language file variables for the settings area.
*
* @see GetLang
*
* @version     $Id: settings.php,v 1.56 2008/02/06 03:43:27 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the settings area... Please backup before you start!
*/

define('LNG_SettingsSaved', 'As defini&ccedil;&otilde;es modificadas foram salvas com &ecirc;xito.');
define('LNG_SettingsNotSaved', 'As configura&ccedil;&otilde;es modificadas n&atilde;o foram salvas.');

define('LNG_DatabaseIntro', 'Detalhes de Dados');
define('LNG_DatabaseType', 'Tipo de dados');
define('LNG_DatabaseUser', 'Banco Dados do Usu&aacute;rio');
define('LNG_DatabasePassword', 'Base de dados de Senha');
define('LNG_DatabaseHost', 'Banco Dados Hostname');
define('LNG_DatabaseName', 'Banco Dados Nome');
define('LNG_DatabaseTablePrefix', 'Banco Dados Tabela Prefixo');

define('LNG_Miscellaneous', 'Configura&ccedil;&otilde;es Diversas');
define('LNG_ApplicationURL', 'Aplicativo URL');

define('LNG_LicenseKeyIntro', 'License Key Detalhes');
define('LNG_LicenseKey', 'License Key');
define('LNG_LicenseKeyUpdated', 'Sua chave de licen&ccedil;a foi atualizada. Voc&ecirc; ser&aacute; desconectado completamente e voc&ecirc; precisar&aacute; fazer login novamente para que a altera&ccedil;&atilde;o tenha efeito.');

define('LNG_HLP_DatabaseUser','Nome de usu&aacute;rio usado para acessar o banco de dados.');
define('LNG_HLP_DatabasePassword','Senha usada para acessar o banco de dados.');
define('LNG_HLP_DatabasePasswordConfirm','Re-digite a senha para confirmar se o banco de dados que &eacute; correto.');
define('LNG_HLP_DatabaseHost', 'Hostname ou endere&ccedil;o IP do servidor de banco de dados. por exemplo. localhost.');
define('LNG_HLP_DatabaseName', 'O nome do banco de dados a ser utilizado.');
define('LNG_HLP_DatabaseTablePrefix', 'Texto opcional para colocar nas tabelas. Isso &eacute; recomend&aacute;vel se estiver usando um banco de dados que cont&eacute;m outras tabelas.');

define('LNG_HLP_ApplicationURL', 'URL completa para essa aplica&ccedil;&atilde;o, por exemplo. http://www.seusite.com.br/newsletter/');
define('LNG_HLP_LicenseKey', 'A chave de licen&ccedil;a gerada quando voc&ecirc; comprou este produto. Em caso de d&uacute;vidas entre em contato com o administrador.');

define('LNG_GlobalHTMLFooter', 'Texto Global HTML Rodap&eacute;');
define('LNG_HLP_GlobalHTMLFooter', 'Tudo o que voc&ecirc; escrever aqui ser&aacute; adicionado ao final de cada e-mail HTML (Logo ap&oacute;s o texto do rodap&eacute;). Ser&aacute; adicionado uma quebra de linha, tipo <br/>');

define('LNG_GlobalTextFooter', 'Texto Global TEXT Rodap&eacute;');
define('LNG_HLP_GlobalTextFooter', 'Tudo o que voc&ecirc; escrever aqui ser&aacute; adicionado ao final de cada e-mail TEXTO (Logo ap&oacute;s o texto do rodap&eacute;). Ser&aacute; adicionado uma quebra de linha, tipo <br/>');

define('LNG_ForceUnsubLink', 'For&ccedil;ar Link de Remo&ccedil;&atilde;o');
define('LNG_HLP_ForceUnsubLink', 'Esta op&ccedil;&atilde;o ir&aacute; for&ccedil;ar todas as campanhas de e-mail e uma resposta autom&aacute;tica a ter obrigatoriamente um link de remo&ccedil;&atilde;o antes de serem enviadas.<br/><br/>Se um link de remo&ccedil;&atilde;o n&atilde;o for detectado em um Email, ele ser&aacute; adicionado automaticamente. Se for detectado, esta op&ccedil;&atilde;o ser&aacute; ignorada.');
define('LNG_ForceUnsubLinkExplain', 'Sim, for&ccedil;ar link de remo&ccedil;&atilde;o');

define('LNG_MaxOverSize', 'Cr&eacute;dito Mensal');

define('LNG_CronEnabled', 'Ativar Agendador');
define('LNG_CronEnabledExplain', 'Sim, desejo ativar suporte ao Agendador');
define('LNG_HLP_CronEnabled', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; agende com anteced&ecirc;ncia o envio de e-mails e respostas autom&aacute;ticas. Promove o envio de mensagens mais rapidamente. Voc&ecirc; deve ter o agendador instalado e configurado corretamente no seu servidor para o sistema funcionar corretamente.');

define('LNG_IpTracking', 'Endere&ccedil;o de rastreamento IP');
define('LNG_IpTrackingExplain', 'Sim, o endere&ccedil;o IP de rastreamento est&aacute; ativado');

define('LNG_ApplicationEmail', 'Contato Email');
define('LNG_HLP_ApplicationEmail', 'Enviar <b>Esqueci minha Senha</b> para o e-mail.');

define('LNG_CronPath', 'Comando para executar o agendador');
define('LNG_HLP_CronPath', 'Este &eacute; o caminho utilizado para agendar o envio programado de tarefas. O script assegura o envio programado, resposta autom&aacute;tica e processamento autom&aacute;tico das tarefas executadas.<br /><br />Voc&ecirc; precisar&aacute; desse caminho quando configurar seu servidor (Clque em <em>Como ativar agendador?</em> no link de ajuda acima).');

/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_MaxImageWidth', 'Largura m&aacute;xima de imagem');
define('LNG_HLP_MaxImageWidth', 'Defina a largura m&aacute;xima das imagens que os usu&aacute;rios est&atilde;o autorizados a carregar. Deve ser ajustada para parar impedir que imagens excessivamente grandes sejam enviadas por e-mail.');
define('LNG_MaxImageHeight', 'Altura m&aacute;xima de imagem');
define('LNG_HLP_MaxImageHeight', 'Defina a altura m&aacute;xima das imagens que os usu&aacute;rios est&atilde;o autorizados a carregar. Deve ser ajustada para parar impedir que imagens excessivamente grandes sejam enviadas por e-mail.');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_BounceAccountIntro', 'Habilitar Retorno?');
define('LNG_SetDefaultBounceAccountDetails', 'Retornos');
define('LNG_SetDefaultBounceAccountDetailsExplain', 'Sim, definir conta de retorno');

define('LNG_DefaultBounceAddress', 'E-mail de Retorno');
define('LNG_HLP_DefaultBounceAddress', 'Este &eacute; o endere&ccedil;o que os e-mails ser&atilde;o devolvidos.');

define('LNG_DefaultBounceServer', 'Servidor desta Conta');

define('LNG_DefaultBounceUsername', 'Nome de usu&aacute;rio');

define('LNG_DefaultBouncePassword', 'Senha desta Conta');

define('LNG_DefaultBounceImap', ' Conta de e-mail IMAP');
define('LNG_DefaultBounceImapExplain', 'Sim, esta &eacute; uma conta IMAP');

define('LNG_UseDefaultBounceExtraSettings', 'Utilizar Defini&ccedil;&otilde;es Extras');
define('LNG_UseDefaultBounceExtraSettingsExplain', 'Sim, utilizar extras');

define('LNG_DefaultBounceExtraSettings', 'Defini&ccedil;&otilde;es Extras');

define('LNG_Charset', 'Conjunto de Caracteres');

define('LNG_EmailSettings', 'Configura&ccedil;&otilde;es de E-mail');
define('LNG_CurrentServerTime', 'Hor&aacute;rio atual do servidor');

define('LNG_ServerTimeZone', 'Fuso hor&aacute;rio do Servidor');


/**
**************************
* Changed/Added in NX1.1.3
**************************
*/
define('LNG_DatabaseUpgraded', 'Sua base de dados foi atualizada para a vers&atilde;o %s.');
define('LNG_DatabaseUpgradesFailed', 'O seu banco de dados n&atilde;o foi atualizado com sucesso. Os seguintes erros ocorreram:');

/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_ApplicationSettings_Heading', 'Configura&ccedil;&otilde;es do aplicativo');
define('LNG_EmailSettings_Heading', 'Configura&ccedil;&otilde;es de Email');

define('LNG_AllowAttachments', 'Permitir Anexos');
define('LNG_AllowAttachmentsExplain', 'Sim, permitir anexos');
define('LNG_HLP_AllowAttachments', 'Se esta op&ccedil;&atilde;o for ativada, os usu&aacute;rios poder&atilde;o enviar anexos em suas campanhas de e-mail e resposta autom&aacute;tica.');

define('LNG_AllowEmbeddedImages', 'Permitir incorporar imagens');
define('LNG_AllowEmbeddedImagesExplain', 'Sim, permitir incorporar imagens');
define('LNG_HLP_AllowEmbeddedImages', 'Se esta op&ccedil;&atilde;o for ativada, os usu&aacute;rios ser&atilde;o capazes de inserir imagens em suas campanhas por e-mail e respostas autom&aacute;ticas.');

define('LNG_DefaultEmbeddedImages', 'Padr&atilde;o incorporar imagens');
define('LNG_DefaultEmbeddedImagesExplain', 'Sim, as imagens incorporadas ser&atilde;o ativadas por padr&atilde;o');
define('LNG_HLP_DefaultEmbeddedImages', 'Se esta op&ccedil;&atilde;o estiver marcada as imagens incorporadas ser&atilde;o ativadas por padr&atilde;o.');

define('LNG_Autoresponders_Disabled_Attachments_One_Link', '<a href="#" onclick="javascript: ShowReport(\'autoresponder\'); return false;">1 resposta autom&aacute;tica foi desativada porque tem um ou mais anexos.</a> Um e-mail foi enviado para a lista informando o propriet&aacute;rio desta a&ccedil;&atilde;o.');
define('LNG_Autoresponders_Disabled_Attachments_Many_Link', '<a href="#" onclick="javascript: ShowReport(\'autoresponder\'); return false;">%s resposta autom&aacute;tica foi desativada porque tem um ou mais anexos.</a> Um e-mail foi enviado para a lista informando o propriet&aacute;rio desta a&ccedil;&atilde;o.');

define('LNG_Autoresponders_Disabled_Heading', 'Resposta Autom&aacute;tica Desativada');
define('LNG_Autoresponders_Disabled_Heading_Intro', 'A resposta autom&aacute;tica seguinte foi desativada.');

define('LNG_Autoresponders_Disabled_Email_Subject', 'Resposta autom&aacute;tica foi desativada');

define('LNG_MaxAttachmentSize', 'Tamanho m&aacute;ximo do anexo');
define('LNG_HLP_MaxAttachmentSize', 'Este &eacute; o tamanho m&aacute;ximo <b> por anexo </b> voc&ecirc; pode fazer o upload. O tamanho esta em kilobytes (KB) - 1 megabyte (MB) &eacute; equivalente a 1,024 KB');
define('LNG_MaxAttachmentSizeKB', 'KB');

define('LNG_Newsletters_Disabled_Attachments_One_Link', '<a href="#" onclick="javascript: ShowReport(\'newsletter\'); return false;">1 campanha de e-mail foi desativada porque tem um ou mais anexos.</a>');
define('LNG_Newsletters_Disabled_Attachments_Many_Link', '<a href="#" onclick="javascript: ShowReport(\'newsletter\'); return false;">%s campanha de e-mail foi desativada porque tem um ou mais anexos..</a>');

define('LNG_Newsletters_Disabled_Heading', 'Campanhas de e-mail Desativada');
define('LNG_Newsletters_Disabled_Heading_Intro', 'A seguinte de campanha e-mail foi desativada.');
define('LNG_DisabledNewsletter_Item', 'Nome Campanha de Email: \'%s\'');

define('LNG_DatabaseVersion', 'Database Vers&atilde;o');

define('LNG_ServerSoftware', 'Server Software');
define('LNG_SafeModeEnabled', 'Modo de seguran&ccedil;a ativado');
define('LNG_ImapSupportFound', 'Imap localizado');
define('LNG_GDVersion', 'GD Version');
define('LNG_CurlSupportFound', 'Curl localizado');
define('LNG_GD_NotDetected', 'GD n&atilde;o detectado');
define('LNG_ModSecurity', 'Modo de seguran&ccedil;a ativado');
define('LNG_ModSecurity_Unknown', 'Desconhecido ou PHP est&aacute; sendo executado em CGI mode');
define('LNG_ProductVersion', 'Product Version');
define('LNG_PHPVersion', 'PHP Version');
define('LNG_CronRunTime', 'Cron Tempo de Execu&ccedil;&atilde;o');
define('LNG_CronRunTime_Never', 'Cron ainda n&atilde;o foi executado');
define('LNG_CronRunTime_Once', 'Cron executado apenas uma vez');
define('LNG_CronRunTime_Difference', 'Cron executa todos os %s');

define('LNG_CronSettings_Heading', 'Cron Defini&ccedil;&otilde;es');
define('LNG_CronSettings', 'Enviar Configura&ccedil;&otilde;es Agendadas');
define('LNG_Cron_Option_HasNotRun', 'N&atilde;o executado ainda');

define('LNG_Cron_NextRun', 'Pr&oacute;ximo Execu&ccedil;&atilde;o');
define('LNG_Cron_LastRun', '&Uacute;ltima Execu&ccedil;&atilde;o');
define('LNG_Cron_RunsEvery', 'Todos Executados');

define('LNG_Cron_Option_disabled', 'Desativado');
define('LNG_Cron_Option_1_minute', '1 Minuto');
define('LNG_Cron_Option_2_minutes', '2 Minutos');
define('LNG_Cron_Option_5_minutes', '5 Minutos');
define('LNG_Cron_Option_10_minutes', '10 Minutos');
define('LNG_Cron_Option_15_minutes', '15 Minutos');
define('LNG_Cron_Option_20_minutes', '20 Minutos');
define('LNG_Cron_Option_30_minutes', '30 Minutes');
define('LNG_Cron_Option_1_hour', '1 Hora');
define('LNG_Cron_Option_2_hours', '2 Horas');
define('LNG_Cron_Option_4_hours', '4 Horas');
define('LNG_Cron_Option_6_hours', '6 Horas');
define('LNG_Cron_Option_12_hours', '12 Horas');
define('LNG_Cron_Option_1_day', 'Diariamente');

define('LNG_Cron_DateFormat', 'g:i a, d M Y');

define('LNG_Cron_Option_Disabled', 'A op&ccedil;&atilde;o foi desativada.');

define('LNG_Cron_Option_send_Heading', 'Envio agendado');

define('LNG_Cron_Option_autoresponder_Heading', 'Resposta Autom&aacute;tica');

define('LNG_Cron_Option_bounce_Heading', 'Processamento de Retornos');

define('LNG_EmailSize_Warning_KB', 'KB');
define('LNG_EmailSize_Maximum_KB', 'KB');

define('LNG_EmailSize_Warning', 'Alerta de tamanho de e-mail');
define('LNG_HLP_EmailSize_Warning', 'Isto ir&aacute; mostrar uma mensagem de aviso se uma campanha de e-mail ou resposta autom&aacute;tica vai exceder a um determinado tamanho. Defina a 0 para desativar.<br/>Medido em kilobytes (KB) - 1 megabyte (MB) equivale a 1,024 KB');

define('LNG_EmailSize_Maximum', 'Email tamanho m&aacute;ximo');
define('LNG_HLP_EmailSize_Maximum', 'N&atilde;o ir&aacute; permitir uma campanha de e-mail para enviar resposta autom&aacute;tica ou se tiver mais que um tamanho. Defina a 0 para desativar.<br/>Medido em kilobytes(KB) - 1 megabyte(MB) equivale a 1,024 KB');

define('LNG_TestSendTo', 'Envie um e-mail para testar');

define('LNG_Help_Settings', 'Estas s&atilde;o as defini&ccedil;&otilde;es que controlam o aplicativo. A partir desse ponto voc&ecirc; pode definir as configura&ccedil;&otilde;es globais, ver o status do sistema, criar e configurar controles globais de e-mail.');

define('LNG_CronTutorialLink', 'Aprenda a configurar o Agendador de Tarefas no seu servidor');

define('LNG_Send_TestMode', 'Enviar em modo de teste');
define('LNG_Send_TestModeExplain', 'Sim, colocar a aplica&ccedil;&atilde;o em modo de teste');

define('LNG_Send_TestMode_JobsWaiting', 'Se voc&ecirc; deixar o aplicativo no modo de teste, suas campanhas por e-mail n&atilde;o ser&atilde;o enviadas.');

define('LNG_Resend_Maximum', 'M&aacute;ximo de Tentativas de Envio');
define('LNG_HLP_Resend_Maximum', 'O n&uacute;mero m&aacute;ximo de vezes que uma campanha de e-mail podem ser re-enviadas.');

define('LNG_DatabaseUpgradeFailed', '<font color="red"><b>Falha durante a Upgrade! Entre em contato com o administrador e informe as mensagens de erro exibidas.</b></font>');

/**
**************************
* Changed/Added in NX 1.4
**************************
*/
define('LNG_ConfigFileNotWritable', 'O arquivo de configura&ccedil;&atilde;o (%s) n&atilde;o &eacute; grav&aacute;vel. Por favor, mude o servidor FTP CHMOD para 664, 646 or 666. Se voc&ecirc; n&atilde;o tiver certeza sobre isso, por favor entre em contato com o administrador do sistema.');

/**
**************************
* Changed/Added in NX 1.4.1
**************************
*/
define('LNG_CronRunTime_Explain', 'Quando voc&ecirc; adicionar o comando para agendamento (acima)  ele precisa ser utilizado frequentemente para <em>Executar todas as</em> as op&ccedil;&otilde;es abaixo. <a onclick="LaunchHelp(842); return false;" href="#">Saiba porque</a>.');

/**
**************************
* Changed/Added in NX 5
**************************
*/
/**
* Do not change the <a href onclick> event! It will stop the upgrade from working!
*/
define('LNG_DatabaseUpgradeIntro', '<font color="red"><b>Existe uma atualiza&ccedil;&atilde;o de dados exigida. %S se houver atualiza&ccedil;&otilde;es precisam ser executadas.</b></font>&nbsp;<a href="#" onclick="UpgradeDb(); return false;">Clique aqui para atualizar o banco de dados.</a>');

define('LNG_HLP_MaxOverSize', 'Limite m&aacute;ximo de Mensagens. Se um usu&aacute;rio tentar enviar e-mails mais do que lhe &eacute; permitido, o sistema oferece uma margem extra permitindo o envio de mais alguns Emails.<br/><br/>Deixe 0 para nenhum cr&eacute;dito.');

define('LNG_HLP_IpTracking', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; ative ou desative endere&ccedil;os IP quando contatos forem inscritos ou cancelem a inscri&ccedil;&atilde;o em listas de contatos.');

define('LNG_HLP_Send_TestMode', 'Quando o sistema estiver no modo de Teste, voc&ecirc; n&atilde;o poder&aacute; enviar uma campanha de e-mail. Apenas uma campanha e-mail enviada &eacute; afetada por esta configura&ccedil;&atilde;o, formul&aacute;rios e respostas autom&aacute;ticas n&atilde;o s&atilde;o afetadas por essa configura&ccedil;&atilde;o.');

define('LNG_HLP_SetDefaultBounceAccountDetails', 'Complete os detalhes abaixo para especificar informa&ccedil;&otilde;es de bounce quando uma nova lista de contatos for criada.<br/><br/>Se voc&ecirc; n&atilde;o especificar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o, todos os e-mails ser&atilde;o devolvidos ao endere&ccedil;o \\\'DE\\\' configurados para um determinado contato da lista.');

define('LNG_HLP_DefaultBounceServer', 'Digite o nome do servidor de e-mail que porcessa os e-mails devolvidos. Isso pode ser tanto no formato do nome de host ou pode simplesmente incluir uma porta alternativa  hostname:port.<br/><br/>Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criada, caso <b>Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o</b> n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');

define('LNG_HLP_DefaultBounceUsername', '&Eacute; utilizado para processar emails. Se voc&ecirc; digitar o seu servidor de Email, nomes de usu&aacute;rio e senha, voc&ecirc; pode processar rejei&ccedil;&otilde;es usando o agendador de tarefas.<br/><br/>Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criada, caso a op&ccedil;&atilde;o  <b>Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o</b> n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');

define('LNG_HLP_DefaultBouncePassword', '&Eacute; utilizado para processar emails. Se voc&ecirc; digitar o seu servidor de Email, nome de usu&aacute;rio e senha, voc&ecirc; pode processar e-mail devolvidos com o agendador de tarefas.<br/><br/>Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criada, caso a op&ccedil;&atilde;o\\\'Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o\\\' n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');

define('LNG_HLP_DefaultBounceImap', 'Os bounces ser&atilde;o devolvidos para uma conta IMAP? Se n&atilde;o for uma conta IMAP, &eacute; uma conta POP3. <br/> <br/> Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criado, caso a op&ccedil;&atilde;o \\\'Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o\\\' n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');


define('LNG_HLP_UseDefaultBounceExtraSettings', 'Pode ser necess&aacute;rio configurar op&ccedil;&otilde;es adicionais o processamento de bounces. Em caso afirmativo, ative esta op&ccedil;&atilde;o e preencha as informa&ccedil;&otilde;es requeridas abaixo. Se n&atilde;o tiver a certeza, deixe desmarcado.<br/><br/>Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criado, caso a op&ccedil;&atilde;o \\\'Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o\\\' n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');

define('LNG_HLP_DefaultBounceExtraSettings', 'Favor adicionar quaisquer op&ccedil;&otilde;es extras que podem ser requisitados para conectar corretamente servidor de bounces. Por exemplo \\\'/notls\\\' Ou \\\'/nossl\\\'.<br/><br/>Esta defini&ccedil;&atilde;o s&oacute; &eacute; utilizada quando uma nova lista de contatos &eacute; criado, caso a op&ccedil;&atilde;o \\\'Ocultar informa&ccedil;&otilde;es sobre devolu&ccedil;&atilde;o\\\' n&atilde;o estiver marcada o usu&aacute;rio ser&aacute; capaz de mudar esta informa&ccedil;&atilde;o para a sua lista de contatos.');

define('LNG_DisabledAutoresponder_Item', 'Nome da Resposta Autom&aacute;tica: \'%s\' na lista de contatos \'%s\'');

define('LNG_Autoresponders_Disabled_Email_Message', 'Seu administrador de sistemas desativou os anexos em resposta autom&aacute;tica. Devido a isto, a resposta autom&aacute;tica \'%s\' on contact list \'%s\' foi desativada porque tem um ou mais anexos.' . "\n\n" . 'Para reativar a resposta autom&aacute;tica, editar a resposta autom&aacute;tica de seu painel de controle e removea todos os anexos.');

define('LNG_MaxHourlyRate', 'Envio m&aacute;ximo por Hora');

define('LNG_Settings_SystemInformation', 'Informa&ccedil;&atilde;o do Sistema');
define('LNG_Help_Settings_SystemInformation', 'Uma vis&atilde;o geral da configura&ccedil;&atilde;o de seu servidor pode ser visto abaixo.');

define('LNG_ProductEdition', 'Edi&ccedil;&atilde;o do Produto ');

define('LNG_ShowFullSystemInfo', 'Vis&atilde;o completa do sistema');

define('LNG_ServerInfo_Heading', 'Informa&ccedil;&atilde;o do Servidor');

define('LNG_ServerInfo', 'Informa&ccedil;&atilde;o do Servidor');
define('LNG_CronJobTimeSettings', 'Hor&aacute;rio configura&ccedil;&otilde;es da Agenda &amp; Log');

define('LNG_ErrorAlertMessage_BlankContactEmail', 'Favor entrar contato com o administrador de e-mail.');
define('LNG_ErrorAlertMessage_BlankLicenseKey', 'Digite um serial.');

define('LNG_SystemMessage', 'Mensagem do Sistema');
define('LNG_HLP_SystemMessage', 'Adicione uma mensagem de sistema para informar aos seus clientes sobre acontecimentos importantes, tais como a manuten&ccedil;&atilde;o do sistema. Eles v&atilde;o ver esta mensagem na p&aacute;gina inicial do sistema.<br/> Quando excluir a mensagem inteira do campo ao lado para ela deixar&aacute; de ser exibida.');

/**
**************************
* Changed/Added in 5.0.10
**************************
*/

define('LNG_HLP_MaxHourlyRate', 'O n&uacute;mero m&aacute;ximo de e-mail enviados por hora. A taxa por hora para usu&aacute;rios pode ser menos que este, n&atilde;o mais. Coloque 0 para ilimitado.');


/**
**************************
* Changed/Added in 5.5.0
**************************
*/
define('LNG_Addon_NoAddonsAvailable', 'N&atilde;o h&aacute; nenhum addons atualmente dispon&iacute;vel.');
define('LNG_Addon_Name', 'Nome');
define('LNG_Addon_Description', 'Descri&ccedil;&atilde;o');
define('LNG_Addon_RunningVersion', 'Vers&atilde;o');
define('LNG_Addon_Installed', 'Instalado?');
define('LNG_Addon_Enabled', 'Ativo?');
define('LNG_Addon_Configure', 'Configurar Addon');
define('LNG_Addon_Alert_NeedToConfigure', 'Configurar este addon antes de ativar.');
define('LNG_Addon_Alert_NeedToInstall', 'Instale este addon antes de ativar.');
define('LNG_Addon_NoneAvailable', 'Nenhum addons est&aacute; atualmente dispon&iacute;vel');
define('LNG_Addon_Edit_Settings', 'Editar configura&ccedil;&otilde;es');
define('LNG_Addon_Alert_NeedToInstallBeforeConfigure', 'Instale este addon antes de configurar.');
define('LNG_Addon_Uninstall_Confirm', 'Voc&ecirc; tem certeza que deseja desinstalar este addon? Todas as configura&ccedil;&otilde;es deste addon ser&atilde;o removidas. Isto n&atilde;o pode ser recuperado.');
define('LNG_Addon_Alert_NoConfiguration', 'Addon sem campos configuraveis.');

define('LNG_Addon_Action_NotAllowed', 'Esta a&ccedil;&atilde;o n&atilde;o &eacute; permitida!');

define('LNG_Addon_Success_install', 'O addon selecionado foi instalado com sucesso.');
define('LNG_Addon_Success_uninstall', 'O addon selecionado foi desinstalado e n&atilde;o est&aacute; dispon&iacute;vel para o uso.');
define('LNG_Addon_Success_disable', 'O addon selecionado foi desativado.');
define('LNG_Addon_Success_enable', 'O addon selecionado foi ativado com sucesso.');
define('LNG_Addon_Success_savesettings', 'O addon selecionado foi configurado com sucesso.');

define('LNG_Addon_Failure_install', 'Um erro ocorreu ao tentar instalar o addon selecionado. Tente por favor outra vez.');
define('LNG_Addon_Failure_uninstall', 'Um erro ocorreu ao tentar remover o addon selecionado. Tente por favor outra vez.');
define('LNG_Addon_Failure_disable', 'Um erro ocorreu ao tentar desativar o addon selecionado. Tente por favor outra vez.');
define('LNG_Addon_Failure_enable', 'Um erro ocorreu ao tentar ativar o addon selecionado. Tente por favor outra vez.');
define('LNG_Addon_Failure_savesettings', 'Um erro ocorreu ao tentar configurar o addon selecionado. Tente por favor outra vez.');

define('LNG_Addon_Tooltip_ClickToEnable', 'Clique aqui para ativar este addon');
define('LNG_Addon_Tooltip_ClickToDisable', 'Clique aqui para desativar este addon');
define('LNG_Addon_Tooltip_ClickToInstall', 'Clique aqui para instalar este addon');
define('LNG_Addon_Tooltip_ClickToUninstall', 'Clique aqui para desinstalar este addon');

define('LNG_Addon_Action_Text_Install', 'Instalar');
define('LNG_Addon_Action_Text_Uninstall', 'Desinstalar');
define('LNG_Addon_Action_Text_Enable', 'Ativar');
define('LNG_Addon_Action_Text_Disable', 'Desativar');
define('LNG_Addon_Action_Text_Upgrade', 'Atualizar');
define('LNG_Addon_Action_Text_Configure', 'Configurar');

define('LNG_Cron_Option_triggeremails_s_Heading', 'Emiss&atilde;o dos disparadores');

define('LNG_Cron_Option_triggeremails_p_Heading', 'Processamento dos disparadores');

define('LNG_AddonsSettings_Heading', 'Addons&nbsp;Configura&ccedil;&otilde;es');

define('LNG_SecuritySettings_Heading', 'Configura&ccedil;&otilde;es&nbsp;de&nbsp;Seguran&ccedil;a');

define('LNG_SecuritySettings_LoginSecurity_EnableLoginWait_Title', 'Configura&ccedil;&otilde;es de Seguran&ccedil;a - Tempo para login');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginWait', 'Ativar falha de espera para login');
define('LNG_SecuritySettings_LoginSecurity_YesEnableLoginWait', 'Sim, ative a espera por falha de login (caracteristica de seguran&ccedil;a)');
define('LNG_HLP_SecuritySettings_LoginSecurity_EnableLoginWait', 'Quando esta op&ccedil;&atilde;o &eacute; ativa, as tentativas falhas do login ser&atilde;o atrasadas para um n&uacute;mero especifico de segundos.');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginWait_DelayFor', 'Tempo de login falho para');

define('LNG_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold_Title', 'Falha de Login - Banir IP - Configura&ccedil;&otilde;es');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold', 'Ativar Falha de Login / Banir IP');
define('LNG_SecuritySettings_LoginSecurity_YesEnableLoginFailureThreshold', 'Sim, ativar caracter&iacute;stica de falha de login / banir IP');
define('LNG_HLP_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold', 'Quando esta op&ccedil;&atilde;o &eacute; ativa, o usu&aacute;rio &eacute; banido pelo IP por um determinado tempo.');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold_Threshold', 'Ponto inicial');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold_FailedAttemptsIn', 'tentativas falhas em');
define('LNG_SecuritySettings_LoginSecurity_EnableLoginFailureThreshold_BanIPFor', 'Banir IP para');

/**
**************************
* Changed/Added in 5.6.0
**************************
*/
define('LNG_CreditSettings_UserCredit_Section', 'Config. de Cr&eacute;ditos');
define('LNG_CreditSettings_UserCredit_AutorespondersTakeCredit', 'Debitar cr&eacute;ditos em auto-respostas?');
define('LNG_CreditSettings_UserCredit_AutorespondersTakeCredit_Description', 'Sim, debite os cr&eacute;ditos de e-mails com as auto-respostas');
define('LNG_HLP_CreditSettings_UserCredit_AutorespondersTakeCredit', "Quando marcado, todas as auto-respostas enviadas s&atilde;o debitadas nos cr&eacute;ditos de envio do usu&aacute;rio. Se &eacute; isso que voc&ecirc; quer, marque esta op&ccedil;&atilde;o.");
define('LNG_CreditSettings_UserCredit_TriggersTakeCredit', 'Debitar Cr&eacute;ditos em Disparos?');
define('LNG_CreditSettings_UserCredit_TriggersTakeCredit_Description', 'Sim, debitar cr&eacute;ditos de e-mails nos disparadores de e-mails');
define('LNG_HLP_CreditSettings_UserCredit_TriggersTakeCredit', "Quando marcado, atodos os e-mails enviaddos como um resultado de um disparador s&atilde;o debitatos nos cr&eacute;ditos de envio do usu&aacute;rio. Se &eacute; isso que deseja, marque esta op&ccedil;&atilde;o.");

define('LNG_CreditSettings_Warnings_Section', 'Configura&ccedil;&otilde;es de Cr&eacute;ditos Baixos');
define('LNG_CreditSettings_Warnings_Enabled', 'E-mail de Lembrete de Cr&eacute;dito Baixo:');
define('LNG_CreditSettings_Warnings_Enabled_Description', "Sim, envie um lembrete por e-mail quando os cr&eacute;ditos do usu&aacute;rio terminar para comprar mais");
define('LNG_HLP_CreditSettings_Warnings_Enabled', "Marque esta op&ccedil;&atilde;o se voc&ecirc; gostaria que o sistema lembrasse automaticamente o cliente para comprar mais cr&eacute;ditos quando o mesmo possui cr&eacute;dito zerado. Note que este sistema trabalha desta forma caso voc&ecirc; use um cr&eacute;dito mensal no sistema.<br/><br/>Est&aacute; dispon&iacute;vel o uso de campos personalizados para uso no e-mail de aviso:<br/>- %%user_fullname%%<br/>- %%user_firstname%%<br/>- %%user_lastname%%<br/>-%%credit_total%%<br/>- %%credit_remains%%<br/>- %%credit_remains_precentage%%<br/>- %%credit_used%%<br/>- %%credit_used_percentage%%");
define('LNG_CreditSettings_Warnings_LevelPrompt_PRE', 'Envie um lembrete por e-mail caso o usu&aacute;rio use sempre');
define('LNG_CreditSettings_Warnings_LevelPrompt_POST', 'de cr&eacute;ditos restantes');
define('LNG_CreditWarnings_Warnings_EmailSubjectDefaultText', 'Urgente: Voc&ecirc; est&aacute; com um limite de cr&eacute;dito baixo');
define('LNG_CreditSettings_Warnings_PercentageDefaultText', "Ol&aacute; %%user_firstname%%,

Este &eacute; um lembrete autom&aacute;tico para voc&ecirc; saber que tem %%credit_remains_precentage%%% de cr&eacute;dito, dos seus cr&eacute;ditos restantes. Quando voc&ecirc; usar todos seus cr&eacute;ditos, voc&ecirc; receber&aacute; outro aviso de t&eacute;rmino dos cr&eacute;ditos.

Voc&ecirc; tem usado %%credit_used%% de %%credit_total%% cr&eacute;ditos deste m&ecirc;s.

Para desfrutar mais de seu servi&ccedil;o de E-mail Marketing, voc&ecirc; precisa comprar mais cr&eacute;ditos. Para comprar mais cr&eacute;ditos entre em contato conosco.

Obrigado.");

define('LNG_CreditSettings_Warnings_Alert_EnterEmailSubject', 'Coloque o assunto do e-mail de aviso.');
define('LNG_CreditSettings_Warnings_Alert_EnterEmailContents', 'Coloque o conte&uacute;do do e-mail de aviso.');

/**
**************************
* Changed/Added in 5.7.0
**************************
*/

define('LNG_Cron_Option_maintenance_Heading', 'Processo de Manuten&ccedil;&atilde;o');
define('LNG_Cron_Option_3_hours', '3 Horas');
define('LNG_Cron_Option_9_hours', '9 Horas');

define('LNG_PrivateLabelSettings_ApplicationName', 'Nome da Aplica&ccedil;&atilde;o');
define('LNG_HLP_PrivateLabelSettings_ApplicationName', 'Texto exibido no painel de controle?');
define('LNG_PrivateLabelSettings_ApplicationFooter', 'Rodap&eacute; da Aplica&ccedil;&atilde;o');
define('LNG_HLP_PrivateLabelSettings_ApplicationFooter', 'Texto do rodap&eacute; da aplica&ccedil;&atilde;o, exemplo: Desenvolvido por: Filipe Monteiro.');
define('LNG_PrivateLabelSettings_DefaultHtmlEmailFooter', 'HTML Padr&atilde;o do Rodap&eacute;');
define('LNG_HLP_PrivateLabelSettings_DefaultHtmlEmailFooter', 'Este &eacute; um HTML padr&atilde;o que ser&aacute; exibido no rodap&eacute; dos e-mails enviados em cada usu&aacute;rio que cadastrar. Este tamb&eacute;m mostra em todos os e-mails enviados.');
define('LNG_PrivateLabelSettings_DefaultTextEmailFooter', 'Texto Padr&atilde;o do Rodap&eacute;');
define('LNG_HLP_PrivateLabelSettings_DefaultTextEmailFooter', 'Este &eacute; um Texto padr&atilde;o que ser&aacute; exibido no rodap&eacute; dos e-mails enviados em cada usu&aacute;rio que cadastrar. Este tamb&eacute;m mostra em todos os e-mails enviados.');
define('LNG_PrivateLabelSettings_UpgradeMessage', 'Mensagem de Upgrade');
define('LNG_HLP_PrivateLabelSettings_UpgradeMessage', 'Esta mensagem aparece no topo do painel de controle para usu&aacute;rios de contas de "Contas de Teste". As vari&aacute;veis dispon&iacute;veis s&atilde;o:<br /><br /> - <b>%%trial_days_current%%</b> - Dias de uso da conta.<br /> - <b>%%trial_days_left%%</b> - Dias que restam da conta de teste.');
define('LNG_PrivateLabelSettings_ApplicationLogoImage', 'Logomarca da Aplica&ccedil;&atilde;o');
define('LNG_HLP_PrivateLabelSettings_ApplicationLogoImage', 'Esta &eacute; a imagem (logomarca) exibida no topo do painel de controle do sistema em todas as p&aacute;ginas.');
define('LNG_PrivateLabelSettings_ApplicationFavicon', 'Icone do Navegador');
define('LNG_HLP_PrivateLabelSettings_ApplicationFavicon', 'Uma imagem opcional, no formato .ico de 16x16 pixels que &eacute; exibida no seu navegador ao acessar a aplica&ccedil;&atilde;o.');

define('LNG_PrivateLabelSettings_UpdatesCheck', 'Checagem de Update?');
define('LNG_PrivateLabelSettings_YesUpdatesCheck', 'Sim, habilitar checagem autom&aacute;tica de update');
define('LNG_HLP_PrivateLabelSettings_UpdatesCheck', 'Marque esta op&ccedil;&atilde;o para que a aplica&ccedil;&atilde;o procure por ves&otilde;es mais novas e notifique-as com uma mensagem no painel de controle.');

define('LNG_PrivateLabelSettings_SmtpSending', 'Enviar com SMTP.com?');
define('LNG_PrivateLabelSettings_YesSmtpSending', 'Sim, mostrar op&ccedil;&otilde;es do SMTP.com');
define('LNG_HLP_PrivateLabelSettings_SmtpSending', 'Marque esta op&ccedil;&atilde;o caso queira criar ou editar os dados da sua conta do SMTP.com. SMTP.com &eacute; um site que presta servi&ccedil;os de servidores de SMTP dedicados, por&eacute;m voc&ecirc; pode escolher outros e integrar a esta applica&ccedil;&atilde;o.');

define('LNG_PrivateLabelSettings_GettingStartedVideo', 'Iniciar com o guia em v&iacute;deo?');
define('LNG_PrivateLabelSettings_YesGettingStartedVideo', 'Sim, mostre o v&iacute;deo e guia inicial');
define('LNG_HLP_PrivateLabelSettings_GettingStartedVideo', 'Marque esta op&ccedil;&atilde;o para mostrar os links do guia em video e documenta&ccedil;&otilde;es na p&aacute;gina inicial do painel de controle para seu usu&aacute;rio.');

define('LNG_PrivateLabelSettings_ExpiredTrial_LoginMessage', 'Mensagem de Conta Expirada');
define('LNG_HLP_PrivateLabelSettings_ExpiredTrial_LoginMessage', 'Esta mensagem &eacute; exibida para usu&aacute;rios de contas de teste quando fazem login na aplica&ccedil;&atilde;o ap&oacute;s o t&eacute;rmino do prazo de uso da sua Conta de Teste e n&atilde;o conseguem mais utilizar.');

define('LNG_ErrorAlertMessage_BlankApplicationName', 'Digite o nome para esta aplicacao.');
define('LNG_ErrorAlertMessage_BlankAccountUpgradeMessage', 'Digite a mensagem de upgrade de conta.');
define('LNG_ErrorAlertMessage_BlankExpiredLogin', 'Digite a mensagem de expiracao e upgrade de conta.');
define('LNG_ErrorAlertMessage_ErrorApplicationLogoImage', 'Erro ao fazer upload da imagem da logomarca.');
define('LNG_ErrorAlertMessage_InvalidFormatApplicationLogoImage', 'O arquivo da logomarca enviado parece ser invalido. Envia no formato GIF ou JPG e tente novamente.');
define('LNG_ErrorAlertMessage_InvalidNameApplicationLogoImage', 'O nome do arquivo da logomarca enviado parece ser invalido. Envia no formato GIF ou JPG e tente novamente.');
define('LNG_ErrorAlertMessage_ErrorApplicationFavicon', 'Erro ao enviar o arquivo do icone do navegador.');
define('LNG_ErrorAlertMessage_InvalidFormatApplicationFavicon', 'O arquivo do seu icone do navegador parece ser invalido. Envie um arquivo de icone valido, com a extensao .ico');
define('LNG_ErrorAlertMessage_InvalidNameApplicationFavicon', 'O nome do arquivo do seu icone do navegador parece ser invalido. Envie um arquivo de icone valido, com a extensao .ico.');


/**
 **************************
 * Changed/Added in 5.7.3
 **************************
 */
define('LNG_MultipleUnsubscribe', 'Use "Multiplos Descadastros"');
define('LNG_MultipleUnsubscribe_Explain', 'Sim, apresente uma lista de "Lista de Contatos" onde os contatos poder&atilde;o excluir-se das mesmas.');
define('LNG_HLP_MultipleUnsubscribe', 'Quando voc&ecirc; permite esta op&ccedil;&atilde;o, seus contatos ver&atilde;o listas de contatos as quais eles podem descadastrar. (Note por favor que o nome da sua lista de contatos ser&aacute; exibida para o cliente).');

/**
 **************************
 * Changed/Added in 5.7.4
 **************************
 */
define('LNG_ContactCanModifyEmail', 'Os propriet&aacute;rios dos contatos podem modificar seu pr&oacute;prio e-mail');
define('LNG_ContactCanModifyEmail_Explain', 'Sim, permitir que os donos dos contatos modifiquem seus e-mails.');
define('LNG_HLP_ContactCanModifyEmail', 'Permitindo esta op&ccedil;&atilde;o os propriet&aacute;rios de cada contato poder&atilde;o alterar seus endere&ccedil;os de e-mail atrav&eacute;s de um mecanismo de confirma&ccedil;&atilde;o de cadastro.');
