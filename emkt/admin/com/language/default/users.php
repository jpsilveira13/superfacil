<?php
/**
* Language file variables for the user management area.
*
* @see GetLang
*
* @version     $Id: users.php,v 1.45 2008/03/05 04:00:38 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the user area... Please backup before you start!
*/
define('LNG_UserDetails', 'Detalhes do usu&aacute;rio');
define('LNG_UserAdd', 'Criar uma conta de usu&aacute;rio...');
define('LNG_UserName', 'Nome de usu&aacute;rio');
define('LNG_FullName', 'Nome Completo');

define('LNG_UserType', 'Tipo de usu&aacute;rio');


define('LNG_EditUser', 'Editar uma conta de usu&aacute;rio');
define('LNG_Help_EditUser', 'Utilize o formul&aacute;rio abaixo para fazer altera&ccedil;&otilde;es em uma conta de usu&aacute;rio. O usu&aacute;rio deve fazer logout e login novamente para que as mudan&ccedil;as nas permiss&otilde;es sejam aplicadas.');

define('LNG_Admin', 'Administrador');
define('LNG_YesIsActive','Sim, este usu&aacute;rio est&aacute; ativo');

define('LNG_SupplyUserPassword', 'Informe uma senha');
define('LNG_SupplyUserUsername', 'Informe um nome de usu&aacute;rio');

define('LNG_UserUpdated', 'Os dados da conta de usu&aacute;rio foram atualizadas.');
define('LNG_UserNotUpdated', 'Os dados da conta de usu&aacute;rio n&atilde;o foram atualizadas. Tente novamente.');

define('LNG_UserCreated', 'O usu&aacute;rio foi criado com sucesso.');
define('LNG_UserNotCreated', 'Um ocorreu um erro. O usu&aacute;rio n&atilde;o foi criado.');
define('LNG_UserAlreadyExists', 'J&aacute; existe um usu&aacute;rio com esse nome de usu&aacute;rio. Digite um nome de usu&aacute;rio diferente.');

define('LNG_EnterEmailaddress', 'Digite um endere&ccedil;o de e-mail v&aacute;lido.');

define('LNG_DeleteUserPrompt', 'Tem certeza de que deseja excluir este usuario?');
define('LNG_User_CantDeleteOwn', 'Voc&ecirc; pode excluir sua pr&oacute;pria conta de usu&aacute;rio.');
define('LNG_UserDeleted', 'As contas de usu&aacute;rio selecionadas foram exclu&iacute;das com sucesso.');

define('LNG_Help_DisplayMyAccount','Seus detalhes s&atilde;o apresentados abaixo. Entre em contato com o administrador para atualizar as informa&ccedil;&otilde;es');

define('LNG_HLP_Active', 'Usu&aacute;rio inativo no sistema, usu&aacute;rios inativos n&atilde;o conseguem fazer login. essa op&ccedil;&atilde;o pode ser usada para suspender temporariamente o acesso a um determinado usu&aacute;rio.');

define('LNG_AdministratorType', 'Tipo de Administrador');
define('LNG_HLP_AdministratorType', 'Escolha as &aacute;reas que este usu&aacute;rio pode acessar.<br/>voc&ecirc; pode escolher entre o tipo padr&atilde;o de administradores ou escolher permiss&otilde;es personalizadas.');

define('LNG_RegularUser', 'Controlar Usu&aacute;rio');

define('LNG_CreateUser', 'Criar usu&aacute;rio');

define('LNG_EditOwnSettings', 'Editar Configura&ccedil;&otilde;es Pr&oacute;prias');
define('LNG_HLP_EditOwnSettings', 'Esse usu&aacute;rio deve ser capaz de editar suas pr&oacute;prias configura&ccedil;&otilde;es de conta? Eles ser&atilde;o capazes de editar tudo, exceto permiss&otilde;es.');
define('LNG_YesEditOwnSettings', 'Sim, deixe este usu&aacute;rio editar as suas pr&oacute;prias defini&ccedil;&otilde;es');

define('LNG_ShowInfoTips', 'Exibir dicas');
define('LNG_HLP_ShowInfoTips', 'Se sim, esse cliente vai ver dicas sobre e-mail marketing na parte parte superior da tela de login. Cada link de dica leva para um artigo com mais informa&ccedil;&otilde;es.');
define('LNG_YesShowInfoTips', 'Sim, exibir dicas');

define('LNG_TimeZone', 'Fuso hor&aacute;rio do usu&aacute;rio');
define('LNG_HLP_TimeZone', 'Fuso hor&aacute;rio em que seu cliente est&aacute; localizado. Quando o cliente estiver visualizando relat&oacute;rios e estat&iacute;sticas, todos os hor&aacute;rios e as datas ser&atilde;o convertidos para esse fuso hor&aacute;rio.');

define('LNG_UserRestrictions', 'Restri&ccedil;&otilde;es do Usu&aacute;rio');

define('LNG_LimitEmailsPerHour', 'Emails por Hora');
define('LNG_LimitEmailsPerHourExplain', 'Emails Ilimitados por Hora');
define('LNG_HLP_LimitEmailsPerHour', 'Assinale esta op&ccedil;&atilde;o para definir o n&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar por hora.');
define('LNG_EmailsPerHour', 'N&uacute;mero M&aacute;ximo de e-mails por Hora');
define('LNG_HLP_EmailsPerHour', 'N&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar por hora..<br/><br/>Se duas campanhas por e-mail est&atilde;o marcadas para a mesma hora, isso n&atilde;o afetar&aacute; o n&uacute;mero total de e-mails enviados, apenas vai afetar cada campanha de Emailseparadamente.');

define('LNG_LimitEmailsPerMonth', 'Emails por M&ecirc;s');
define('LNG_LimitEmailsPerMonthExplain', 'Emails Ilimitados por M&ecirc;s');
define('LNG_HLP_LimitEmailsPerMonth', 'Assinale esta op&ccedil;&atilde;o para definir o n&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar por m&ecirc;s.');
define('LNG_EmailsPerMonth', 'N&uacute;mero m&aacute;ximo de e-mails por m&ecirc;s');
define('LNG_HLP_EmailsPerMonth', 'N&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar por m&ecirc;s.');

define('LNG_LimitMaximumEmails', 'N&uacute;mero Total de Emails');
define('LNG_LimitMaximumEmailsExplain', 'Emails Ilimitados');
define('LNG_HLP_LimitMaximumEmails', 'Assinale esta op&ccedil;&atilde;o para definir o n&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar');
define('LNG_MaximumEmails', 'N&uacute;mero m&aacute;ximo de Emails');
define('LNG_HLP_MaximumEmails', 'O n&uacute;mero m&aacute;ximo de e-mails que esse usu&aacute;rio pode enviar. N&atilde;o &eacute; limita&ccedil;&atilde;o de tempo. Por exemplo, se voc&ecirc; especificar 500, esse usu&aacute;rio s&oacute; poder&aacute; enviar at&eacute; 500 Emails.<br/><br/>Este n&uacute;mero ser&aacute; alterado para refletir o n&uacute;mero de e-mails que o usu&aacute;rio pode ainda enviar.');

define('LNG_TextFooter', 'Rodap&eacute; Texto ');
define('LNG_HLP_TextFooter', 'Qualquer texto digitado aqui ser&aacute; adicionado ao final de cada e-mail formato texto enviado ao cliente.');

define('LNG_HTMLFooter', 'Rodap&eacute; HTML');
define('LNG_HLP_HTMLFooter', 'Qualquer texto digitado aqui ser&aacute; adicionado ao final de cada e-mail formato HTML enviado ao cliente.');

define('LNG_HLP_EmailAddress', 'Se o seu cliente esquecer a sua senha, ela ser&aacute; enviada para este e-mail.');


define('LNG_AccessPermissions', 'Permiss&otilde;es de Acesso');
define('LNG_NewsletterPermissions', 'Permiss&otilde;es Campanha de Email');
define('LNG_CreateNewsletters', 'Criar Campanha de Email');
define('LNG_EditNewsletters', 'Editar Campanha de Email');
define('LNG_DeleteNewsletters', 'Excluir Campanha de Email');
define('LNG_ApproveNewsletters', 'Aprovar Campanha de Email');

define('LNG_TemplatePermissions', 'Permiss&otilde;es de Modelos');
define('LNG_CreateTemplates', 'Criar Modelos');
define('LNG_EditTemplates', 'Editar Modelos');
define('LNG_DeleteTemplates', 'Excluir Modelos');
define('LNG_ApproveTemplates', 'Aprovar Modelos');
define('LNG_GlobalTemplates', 'Modelos Globais');

define('LNG_AdminPermissions', 'Permiss&otilde;es do Administrador');
define('LNG_SystemAdministrator', 'Administrador do sistema');
define('LNG_UserAdministrator', 'Administrador de Usu&aacute;rio');
define('LNG_ListAdministrator', 'Administrador de Listas');
define('LNG_TemplateAdministrator', 'Administrador de Modelos');

define('LNG_ListPermissions', 'Lista de Permiss&otilde;es');
define('LNG_MailingListsBounce', 'Processar e-mails Devolvidos');

define('LNG_CustomFieldPermissions', 'Permiss&otilde;es Editar Campo Personalizado ');
define('LNG_CreateCustomFields', 'Criar Campos Personalizados');
define('LNG_EditCustomFields', 'Editar Campos Personalizados');
define('LNG_DeleteCustomFields', 'Excluir Campos Personalizados');

define('LNG_FormPermissions', 'Permiss&otilde;es Formul&aacute;rios Website ');
define('LNG_CreateForms', 'Criar Formul&aacute;rios Site');
define('LNG_EditForms', 'Editar Formul&aacute;rios Site');
define('LNG_DeleteForms', 'Excluir Formul&aacute;rios Site');

define('LNG_AutoresponderPermissions', 'Permiss&otilde;es Respostas Autom&aacute;ticas');
define('LNG_CreateAutoresponders', 'Criar Respostas Autom&aacute;ticas');
define('LNG_EditAutoresponders', 'Editar Respostas Autom&aacute;ticas');
define('LNG_DeleteAutoresponders', 'Excluir Respostas Autom&aacute;ticas');
define('LNG_ApproveAutoresponders', 'Aprovar Respostas Autom&aacute;ticas');


define('LNG_TemplateAccessPermissions', 'Permiss&otilde;es Acesso a Modelos');
define('LNG_ChooseTemplates', 'Modelos');
define('LNG_HLP_ChooseTemplates', 'Quais modelos esse usu&aacute;rio n&atilde;o ter&aacute; acesso? As permiss&otilde;es selecionados ser&atilde;o aplicadas a estes modelos.');
define('LNG_AllTemplates', 'Todos os Modelos');


define('LNG_AdministratorType_SystemAdministrator', 'Administrador do Sistema');
define('LNG_AdministratorType_ListAdministrator', 'Administrador de Listas');
define('LNG_AdministratorType_NewsletterAdministrator', 'Administrador de Campanhasl');
define('LNG_AdministratorType_TemplateAdministrator', 'Administrador de Modelos');
define('LNG_AdministratorType_UserAdministrator', 'Administrador de Usu&aacute;rios');
define('LNG_AdministratorType_RegularUser', 'Usu&aacute;rios Controlados');
define('LNG_AdministratorType_', '(descomnhecido)');
define('LNG_AdministratorType_Custom', 'Personalizar');

define('LNG_TemplateAdministratorType_AllTemplates', 'Todos os Modelos');

define('LNG_OtherPermissions', 'Outras Permiss&otilde;es');
define('LNG_NewsletterStatistics', 'Exibir Estat&iacute;sticas de Campanhas');

define('LNG_AutoresponderStatistics', 'Ver Estat&iacute;sticas Resposta Autom&aacute;tica');

define('LNG_NoTemplatesAvailable', '<font color=gray>[Nenhum modelo foi criado]</font>');

define('LNG_Delete_User_Selected', 'Excluir Selecionados');
define('LNG_ChooseUsersToDelete', 'Escolha pelo menos uma conta de usu&aacute;rio para apagar.');
define('LNG_ConfirmRemoveUsers', 'Tem certeza de que deseja excluir os usu&aacute;rios selecionados? essa a&ccedil;&atilde;o n&atilde;o pode ser desfeita.');

define('LNG_UserDeleteFail', 'User \'%s\' n&atilde;o poderia ser excluido: %s');
define('LNG_UserDeleteSuccess_One', 'A conta de usu&aacute;rio selecionada foi exlcu&iacute;da.');
define('LNG_UserDeleteSuccess_Many', 'As %s contas de usu&aacute;rio selecionada foram exclu&iacute;das.');

define('LNG_User_Delete_Disabled', 'Voc&ecirc; n&atilde;o pode excluir este usu&aacute;rio.');
define('LNG_User_Delete_Own_Disabled', 'Voc&ecirc; n&atilde;o pode excluir sua pr&oacute;pria conta de usu&aacute;rio.');

/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_ListAdministratorType_Custom', 'Os usu&aacute;rios possuem as seguintes listas');
define('LNG_TemplateAdministratorType_Custom', 'Os usu&aacute;rios possuem as seguintes modelos');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_StatisticsPermissions', 'Permiss&otilde;es estat&iacute;sticas');
define('LNG_User_SMTP', 'Configura&ccedil;&otilde;es de usu&aacute;rio SMTP');
define('LNG_HLP_User_SMTP', 'Um usu&aacute;rio pode editar as suas pr&oacute;prias configura&ccedil;&otilde;es de SMTP se puder gerenciar sua conta.');

define('LNG_BuiltInTemplates', 'Exibir Modelos Prontos');

define('LNG_MailingListsBounceSettings', 'Editar informa&ccedil;&otilde;es de e-mails Devolvidos');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_SendNewsletters', 'Envie uma campanha de Email');

define('LNG_ManageBannedSubscribers', 'Exibir listas de e-mail suprimida');

define('LNG_Help_Users', 'Cada conta de usu&aacute;rio tem suas pr&oacute;prias listas de contatos, os contatos e as campanhas de e-mail est&atilde;o separadas por usu&aacute;rios. Clique <em>Criar uma conta de usu&aacute;rio...</em> para criar uma nova conta.');

define('LNG_Help_CreateUser', 'Cada conta de usu&aacute;rio tem suas pr&oacute;prias listas de contatos. Voc&ecirc; tamb&eacute;m pode configurar permiss&otilde;es diferentes para cada usu&aacute;rio.');

define('LNG_UserStatistics', 'Estat&iacute;sticas Conta de Usu&aacute;rio ');

define('LNG_UseWysiwygEditor', 'Ativar Editor WYSIWYG');
define('LNG_YesUseWysiwygEditor', 'Sim, utilizar editor WYSIWYG');
define('LNG_HLP_UseWysiwygEditor', 'essa op&ccedil;&atilde;o s&oacute; deve ser desativada se o usu&aacute;rio for um usu&aacute;rio avan&ccedil;ado. Se essa op&ccedil;&atilde;o estiver desativada, o usu&aacute;rio far&aacute; o conte&uacute;do em uma &aacute;rea de texto em vez de um editor WYSIWYG.');

define('LNG_UseWysiwygXHTML', 'Criar XHTML');
define('LNG_YesUseXHTML', 'Sim, criar XHTML com editor WYSIWYG');
define('LNG_HLP_UseWysiwygXHTML', 'Desabilitar formata&ccedil;&atilde;o XHTML com editor WYSIWYG. Atualmente, isso s&oacute; vai afetar as defini&ccedil;&otilde;es de formata&ccedil;&atilde;o no Microsoft Internet Explorer. Se voc&ecirc; n&atilde;o sabe para que &eacute; utilizado, &eacute; melhor deixar marcado.');

define('LNG_UserSettings_Heading', 'Defini&ccedil;&otilde;es do usu&aacute;rio');
define('LNG_UserRestrictions_Heading', 'Restri&ccedil;&otilde;es do usu&aacute;rio');
define('LNG_EmailSettings_Heading', 'Configura&ccedil;&otilde;es de Email');
define('LNG_UserPermissions_Heading', 'Permiss&otilde;es do usu&aacute;rio');

/**
**************************
* Changed/added in NX 1.4
**************************
*/
define('LNG_UseXMLAPI', 'Ativar XML API');
define('LNG_YesUseXMLAPI', 'Sim, permitir ao usu&aacute;rio utilizar XML API');
define('LNG_XMLToken', 'S&iacute;mbolo XML');
define('LNG_HLP_XMLToken', 'Esse s&iacute;mbolo indica que usu&aacute;rio necessita incluir um XML. Se esse s&iacute;mbolo n&atilde;o estiver presente no XML n&atilde;o corresponde ao que foi definido aqui, o pedido apresentou falha.');
define('LNG_XMLToken_Regenerate', 'Gerar novamente XML API Token');
define('LNG_XMLPath', 'Caminho XML');
define('LNG_HLP_XMLPath', 'Este &eacute; o caminho para o arquivo API XML para onde todos os pedidos dever&atilde;o ser enviados.');
define('LNG_UserPerHourOverMaxHourlyRate', 'O sistema foi limitado a enviar %s e-mails por hora. Voc&ecirc; definiu este usu&aacute;rio enviar %s e-mails por hora, no entanto, eles ser&atilde;o restritos a enviar o m&aacute;ximo definido para o sistema.');
define('LNG_UserPerHour_Unlimited', 'Ilimitado');

define('LNG_LastActiveUser', 'Voc&ecirc; n&atilde;o pode excluir esse usu&aacute;rio ou torn&aacute;-lo inativo. Voc&ecirc; precisar&aacute; de pelo menos um usu&aacute;rio ativo, nesse caso ele ser&aacute; o administrador do sistema.');
define('LNG_LastUser', 'Voc&ecirc; n&atilde;o pode excluir esse usu&aacute;rio ou alterar suas permiss&otilde;es. Voc&ecirc; precisa de pelo menos um usu&aacute;rio ativo, nesse caso ele ser&aacute; administrador do sistema.');
define('LNG_LastAdminUser', 'Voc&ecirc; n&atilde;o pode excluir esse usu&aacute;rio ou alterar suas permiss&otilde;es. Voc&ecirc; precisa de pelo menos um usu&aacute;rio ativo, nesse caso ele ser&aacute; administrador do sistema.');
define('LNG_UserNotCreated_License', 'Voc&ecirc; atingiu limite de licen&ccedil;a contratadas e n&atilde;o pode mais criar usu&aacute;rios. Atualize sua licen&ccedil;a antes de tentar criar outros usu&aacute;rios .');

/**
**************************
* Changed/added in NX 1.4.3
**************************
*/
define('LNG_XMLUsername', 'XML nome de usu&aacute;rio');
define('LNG_HLP_XMLUsername', 'O nome de usu&aacute;rio usado nos pedidos de XML API ');

/**
**************************
* Changed/added in 5.0.0
**************************
*/
define('LNG_SubscriberPermissions', 'Permiss&otilde;es de Contatos');
define('LNG_ManageSubscribers', 'Exibir Contatos');
define('LNG_AddSubscribers', 'Adicionar Contatos');
define('LNG_EditSubscribers', 'Editar Contatos');
define('LNG_DeleteSubscribers', 'Excluir Contatos');
define('LNG_ImportSubscribers', 'Importar Contatos');

define('LNG_ExportSubscribers', 'Exportar contatos para um arquivo');

define('LNG_HLP_UseXMLAPI', 'essa op&ccedil;&atilde;o permite ao usu&aacute;rio criar listas, modelos, boletins de not&iacute;cias, busca de contatos e assim por diante usando o API XML . S&oacute; deve ser ativado para usu&aacute;rios avan&ccedil;ados.');

define('LNG_LimitLists', 'N&uacute;mero de Listas de Contatos');
define('LNG_LimitListsExplain', 'Listas de contatos Ilimitada');
define('LNG_HLP_LimitLists', 'Assinale esta op&ccedil;&atilde;o para definir o n&uacute;mero m&aacute;ximo de listas de contatos que esse usu&aacute;rio pode criar.');
define('LNG_MaximumLists', 'N&uacute;mero m&aacute;ximo de listas de contatos');
define('LNG_HLP_MaximumLists', 'O n&uacute;mero de listas de contatos que esse usu&aacute;rio pode criar.');

define('LNG_CreateMailingLists', 'Criar Listas de Contatos');
define('LNG_EditMailingLists', 'Editar Listas de Contatos');
define('LNG_DeleteMailingLists', 'Excluir Listas de Contatos');

define('LNG_MailingListAccessPermissions', 'Lista de Permiss&otilde;es para Contatos');
define('LNG_ChooseMailingLists', 'Listas de Contato');
define('LNG_HLP_ChooseMailingLists', 'Listas de contatos que o usu&aacute;rio ter&aacute; acesso? As permiss&otilde;es selecionados ser&aacute; aplicadas a estas listas.');
define('LNG_AllMailingLists', 'Todas as Listas de Contato');

define('LNG_ListAdministratorType_AllLists', 'Todas as Listas de Contato');

define('LNG_ListStatistics', 'Estat&iacute;sticas Lista de Contatos ');

define('LNG_NoListsAvailable', '<font color=gray>[Nenhuma lista de ontatos foi criada]</font>');

define('LNG_Help_MyAccount','Estes s&atilde;o os seus dados de usu&aacute;rio, voc&ecirc; pode atualiz&aacute;-los para que as listas criadas sejam preenchidas automaticamentes com esses dados.');

define('LNG_SegmentPermissions', 'Segmentos Permiss&otilde;es');
define('LNG_SegmentViewPermission', 'Exibir Segmentos');
define('LNG_SegmentCreatePermission', 'Criar Segmentos');
define('LNG_SegmentEditPermission', 'Editar Segmentos');
define('LNG_SegmentDeletePermission', 'Excluir Segmentos');
define('LNG_SegmentSendPermission', 'Enviar para Segmento');

define('LNG_SegmentAccessPermissions', 'Segmentos Permiss&otilde;es de Acesso');
define('LNG_ChooseAllowedSegments', 'Listar Segmentos');
define('LNG_HLP_ChooseAllowedSegments', 'Segmentos que o cliente ter&aacute; acesso? As permiss&otilde;es selecionadas ser&atilde;o aplicadas a estas listas');

define('LNG_SegmentAdministratorType_AllSegments', 'Todos Segmentos');
define('LNG_SegmentAdministratorType_Custom', 'Segmentos do pr&oacute;prios  usu&aacute;rios, mais os segmentos atribu&iacute;dos');

define('LNG_NoSegmentsAvailable', '<font color=gray>[Nenhum segmento foi criado]</font>');

define('LNG_UserDoesntExist', 'O usu&aacute;rio que est&aacute; tentando editar n&atilde;o existe. Por favor, tente novamente.');

/**
**************************
* Changed/added in 5.0.4
**************************
*/
/* User Permissions : Autoresponder Permissions */
define('LNG_CreateAutoresponderHelp', 'Criar auto-respostas');
define('LNG_HLP_CreateAutoresponderHelp', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar auto-respostas <b>Nota </b>: O usu&aacute;rio precisa esta assinado em uma lista de permissoes antes destas configura&ccedil;&otilde;es.');
define('LNG_ApproveAutoresponderHelp', 'Aprove auto-respostas');
define('LNG_HLP_ApproveAutoresponderHelp', 'Marque esta caixa se este usu&aacute;rio for permitido para ativar/desativar auto-respotas. Isto &eacute; usado para controle se a auto-resposta ser&aacute; usada ou n&atilde;o.');
define('LNG_EditAutoresponderHelp', 'Edit Autoresponders');
define('LNG_HLP_EditAutoresponderHelp', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para mudar as condi&ccedil;&otilde;es da emiss&atilde;o do disparador de uma auto-resposta ou faz mudan&ccedil;as no layout das auto-respostas.');
define('LNG_DeleteAutoresponderHelp', 'Deletar auto-respostas');
define('LNG_HLP_DeleteAutoresponderHelp', 'Marque esta op&ccedil;&atilde;o se este usu&aacute;rio esttiver permitido para excluir as auto-respostas de ' . LNG_ApplicationTitle . '.');

/* user Permissions :  Website Forms Permissions */
define('LNG_HLP_CreateForms', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar um formulario personalizado para website. Para instanciar um formul&aacute;rio de inscri&ccedil;&atilde;o e adicionar na lista de contatos.');
define('LNG_HLP_EditForms', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar o texto e layout de formul&aacute;rios existentes.');
define('LNG_HLP_DeleteForms', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para excluir formul&aacute;rios.');

/* user Permissions : List Permissions */
define('LNG_HLP_CreateMailingLists', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar nova lista de contato usado para o grupo consecutivamente.');
define('LNG_HLP_EditMailingLists', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar detalhes de uma lista de contato existente.');
define('LNG_HLP_MailingListsBounce', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para processar retornos de e-mail. Fazendo isso os e-mails que foram retornados s&atilde;o marcados conformemente e removidos das campanhas.');
define('LNG_HLP_MailingListsBounceSettings', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar detalhes de retornos existentes. For instance mail server addresses and the accounts bounced e-mails are sent to.

Por exemplo os e-mails do servidor e os e-mail retornados s&atilde;o enviados para.');
define('LNG_HLP_DeleteMailingLists', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para deletar lista de contatos existentes.');

/* User Permissions : Segment Permissions */
define('LNG_HLP_SegmentViewPermission', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver listas de segmentos existentes. Um segmento &eacute; uma vista filtrada para umas ou v&aacute;rias de suas lista do contato. Voc&ecirc; pode ver contatos por segmentos e mesmo emitir campanhas a um segmento espec&iacute;fico.');
define('LNG_HLP_SegmentSendPermission', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para usar uma lista de segmentos para enviar emails');
define('LNG_HLP_SegmentCreatePermission', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar novas listas de segmentos.');
define('LNG_HLP_SegmentEditPermission', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar segmentos existentes e/ou mudar regras para cria&ccedil;&atilde;o de segmentos.');
define('LNG_HLP_SegmentDeletePermission', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar segmentos existentes.');

/* User Permissions : Custom Field Permissions */
define('LNG_HLP_CreateCustomFields', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar campos personalizados. Um campo personalizados &eacute; usado para armazenar a informa&ccedil;&otilde;es adicionais sobre contatos tais como seu n&uacute;mero de telefone, ou mesmo informa&ccedil;&atilde;o avan&ccedil;ada tal como sua posi&ccedil;&atilde;o ou cor do favorito.');
define('LNG_HLP_EditCustomFields', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar campos personalizados existentes.');
define('LNG_HLP_DeleteCustomFields', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para deletar campos personalizados existentes.');

/* User Permissions : e-mail Campaign Permissions */
define('LNG_HLP_CreateNewsletters', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar uma nova campanha de e-mail. As necessidades de usu&aacute;rio promovem permiss&otilde;es autorizar ou emitir uma campanha do e-mail.');
define('LNG_HLP_ApproveNewsletters', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para aprovar uma campanha de e-mail existente. Isso significa que esta permitindo o usu&aacute;rio a <b>ativar</b> uma campanha de e-mail para envio programado.');
define('LNG_HLP_EditNewsletters', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar o layout e mensagem de uma campanha de e-mail existente.');
define('LNG_HLP_SendNewsletters', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para enviar uma campanha de e-mail existente. Um usu&aacute;rio deve ser <b>administrador de campanha de email</b> para poder emitir um e-mail fa&ccedil;a campanha. A campanha do e-mail deve ser aprovada (ativado) antes que um envio possa ser executado.');
define('LNG_HLP_DeleteNewsletters', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para deletar uma campanha de e-mail.');

/* User Permissions : Contact / Event Permissions */
define('LNG_HLP_ManageSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver detalhes de contatos em ' . LNG_ApplicationTitle . '.');
define('LNG_HLP_ImportSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para importar dados (de arquivos locais) em ' . LNG_ApplicationTitle . ' para adicionar contatos automaticamente.');
define('LNG_HLP_AddSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar um novo contato e adicionar para a lista de contatos.');
define('LNG_HLP_ExportSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para exportar as informa&ccedil;&otilde;es da lista de contato em formato de arquivo (.CSV ou .XML).');





define('LNG_HLP_EditSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para alterar dados de um contato.');
define('LNG_HLP_ManageBannedSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver lista de e-mails suprimidos. Contatos suprimidos s&atilde;o marcados para nunca receber um e-mail de uma campanha ou auto-resposta.');
define('LNG_HLP_DeleteSubscribers', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para deletar contatos de ' . LNG_ApplicationTitle . '.');
define('LNG_HLP_EventDelete', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para deletar um evento associado com um contato.');
define('LNG_HLP_EventAdd', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para adicionar um evento associado com um contato. Um evento &eacute; informa&ccedil;&atilde;o adicional para um contato como armazen&aacute;gem da &eacute;poca e dos detalhes de uma chamada de telefone com um contato ou anota&ccedil;&atilde;o do tempo e de detalhes de uma fatura emitida a um contato.');
define('LNG_HLP_EventEdit', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar dados de um evento associado com um contato.');

/* User Permissions : Template Permissions */
define('LNG_HLP_CreateTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar um template personalizado que pode ser usado para envio de campanhas de e-mails e auto-respostas.');
define('LNG_HLP_ApproveTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ativar/desativar template personalizado de modo a serem usados para criar campanhas ou auto-respostas.');
define('LNG_HLP_EditTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para mudar o design e estrutura de um template personalizado existente.');
define('LNG_HLP_GlobalTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar um template global personalizado. Criando um template global, outros usu&aacute;rios podem acessar e usar este template (modelo).');
define('LNG_HLP_DeleteTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para excluir um template personalizado existente.');
define('LNG_HLP_BuiltInTemplates', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para selecionar um template do sistema ' . LNG_ApplicationTitle . ' e usar o mesmo como base para um novo template (modelo).');

/* User Permissions : Statistical Permissions */
define('LNG_HLP_NewsletterStatistics', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver estat&iacute;sticas de campanhas. estatisticas de campanhas de e-mail incluem aberto, retornado, n&atilde;o confirmado, clicado');
define('LNG_HLP_UserStatistics', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver estat&iacute;sticas sobre os usu&aacute;rios. estat&iacute;sticas de usu&aacute;rios mostram dados sobre os usu&aacute;rios configurados em seu ' . LNG_ApplicationTitle . ' . Se este usu&aacute;rio n&atilde;o for administrador, ver&aacute; somente suas pr&oacute;prias estat&iacute;sticas.');
define('LNG_HLP_AutoresponderStatistics', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver estat&iacute;sticas de auto-respostas no ' . LNG_ApplicationTitle . '.');
define('LNG_HLP_ListStatistics', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver informa&ccedil;&otilde;es sobre listas de contatos.');

/* User Permissions : Administrator Permissions */
define('LNG_HLP_ListAdministrator', 'Um administrador da lista pode executar determinadas fun&ccedil;&otilde;es para <i><u>todos</u></i> da lista de contatos, incluindo, deletando e excluindo.');
define('LNG_HLP_SystemAdministrator', 'Um administrador pode acessar as configura&ccedil;&otilde;es de todas as listas de contato e todos usu&aacute;rios.');
define('LNG_HLP_TemplateAdministrator', 'Um administrador de templates (modelos) tem fun&ccedil;&otilde;es para <i><u>todos</u></i> os templates (modelos), incluindo editar e excluir.');
define('LNG_HLP_UserAdministrator', 'Um administrador pode adicionar, deletar e editar contas de usu&aacute;rios no ' . LNG_ApplicationTitle . '.');

/**
**************************
* Changed/added in 5.0.6
**************************
*/
define('LNG_ViewKB_ExplainDefaultFooter', '<a href="#" onclick="LaunchHelp(847); return false;">Como eu posso mudar o rodap&eacute; padr&atilde;o ?</a>');

/**
**************************
* Changed/Added in 5.5.0
**************************
*/
define('LNG_EventTypeList','Tipos de Eventos');
define('LNG_HLP_EventTypeList','Uma lista de tipos de eventos pode ser usado ao registrar um evento para um contato.<br /><br />Insira os tipos de eventos na caixa de texto abaixo separados por linha.');

define('LNG_EventAdd','Adicionar Evento');
define('LNG_EventDelete','Excluir Evento');
define('LNG_EventEdit','Editar Evento');
define('LNG_Permissions_Addons', 'Permiss&otilde;es de Adicionais');

define('LNG_GoogleSettings_Heading','Configura&ccedil;&otilde;es do Calend&aacute;rio do Google');
define('LNG_GoogleCalendarIntro','Detalhes do Calend&aacute;rio do Google');
define('LNG_GoogleCalendarUsername','Usu&aacute;rio do Calend&aacute;rio do Google');
define('LNG_HLP_GoogleCalendarUsername','Insira o usu&aacute;rio para seu acesso ao Calend&aacute;rio do Google. Todos os contatos quando vistos / editados aparecer&atilde;o com um icone que permite que voc&ecirc; adicione um lembrete ao seu calend&aacute;rio do Google');
define('LNG_HLP_GoogleCalendarPassword','Insira a sua senha usada no Calend&aacute;rio do Google. Todos os contatos quando vistos / editados aparecer&atilde;o com um icone que permite que voc&ecirc; adicione um lembrete ao seu calend&aacute;rio do Google');
define('LNG_GoogleCalendarIntroText','Insira seus detalhes do Calend&aacute;rio do Google e todos os contatos quando vistos / editados aparecer&atilde;o com um icone que permite que voc&ecirc; adicione um lembrete ao seu calend&aacute;rio');
define('LNG_GoogleCalendarPassword','Google Calendar Password');
define('LNG_TestLogin','Test Login');
define('LNG_EnterGoogleCalendarPassword','Por favor digite uma senha do seu Calend&aacute;rio do Google.');
define('LNG_EnterGoogleCalendarUsername','Por favor digite um usu&aacute;rio do seu Calend&aacute;rio do Google.');
define('LNG_GoogleCalendarTestLogin','Teste de Login do Calend&aacute;rio do Google.');
define('LNG_GooglecalendarTestSuccess','O login do Calend&aacute;rio do Google est&aacute; correto.');
define('LNG_GooglecalendarTestFailure','O login do Calend&aacute;rio do Google est&aacute; incorreto. Cheque e tente novamente.');
define('LNG_GooglecalendarTestError', 'Unable to test your login details. Please try again later.');

define('LNG_Permissions_Triggeremails', 'Permiss&otilde;es dos disparadores');
define('LNG_Permissions_Triggeremails_Create', 'Criar disparadores');
define('LNG_HLP_Permissions_Triggeremails_Create', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para criar disparadores');
define('LNG_Permissions_Triggeremails_Edit', 'Editar disparadores');
define('LNG_HLP_Permissions_Triggeremails_Edit', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para editar disparadores');
define('LNG_Permissions_Triggeremails_Delete', 'Excluir disparadores');
define('LNG_HLP_Permissions_Triggeremails_Delete', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para excluir disparadores');
define('LNG_Permissions_Triggeremails_Activate', 'Aprovar disparadores');
define('LNG_HLP_Permissions_Triggeremails_Activate', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para aprovar disparadores');
define('LNG_Permissions_Triggeremails_Statistics', 'Ver estat&iacute;sticas de disparadores');
define('LNG_HLP_Permissions_Triggeremails_Statistics', 'Marque esta caixa se este usu&aacute;rio &eacute; permitido para ver estat&iacute;sticas de disparadores');

define('LNG_EnterPassword', 'Por favor coloque a senha (Deve ser pelo menos 3 caracteres).');
define('LNG_EnterUsername', 'Por favor coloque o usu&aacute;rio (Deve ser pelo menos 3 caracteres).');

define('LNG_EnableActivityLog', 'Registro de etividade recente');
define('LNG_YesEnableActivityLog', 'Sim, registre minhas atividades recentes');
define('LNG_HLP_EnableActivityLog', 'Quando permitida, a aplica&ccedil;&atilde;o indicar&aacute; sua atividade recente atrav&eacute;s da parte superior da sua p&aacute;gina.');

/**
**************************
* Changed/Added in 5.6.0
**************************
*/
define('LNG_ForceDoubleOptIn', 'For&ccedil;ar a confirma&ccedil;&atilde;o dupla?');
define('LNG_ForceDoubleOptIn_Explain', 'Sim, force todos os contatos do formul&aacute;rio a confirmar 2 vezes');
define('LNG_HLP_ForceDoubleOptIn', 'For&ccedil;ar cadastros de formul&aacute;rios para sempre enviar uma confirma&ccedil;&atilde;o para cada novo cadastro antes de marcar eles como confirmado.<br /><br />Se esta op&ccedil;&atilde;o n&atilde;o estiver habilitada. os usu&aacute;rios ficam livre para escolher entre criar um formul&aacute;rio com ou sem confirma&ccedil;&atilde;o.');

define('LNG_ForceSpamCheck', 'For&ccedil;ar Verifica&ccedil;&atilde;o de Spam?');
define('LNG_ForceSpamCheck_Explain', 'Sim, for&ccedil;ar todas as auto-respostas de campanhas passarem na checagem de spam antes de serem enviadas');
define('LNG_HLP_ForceSpamCheck', 'For&ccedil;a de campanhas e auto-respostas para checagem de spam.');

define('LNG_LoginAsUser', 'Login');

define('LNG_UserCreatedOn', 'Criado&nbsp;em');
define('LNG_LastLoggedIn', '&uacute;ltimo&nbsp;Login');

define('LNG_UserStatusColumn', 'Status');

define('LNG_UserDeletePopDown', 'Deletar Conta(s)... <img alt="&nabla;" src="images/arrow_blue.gif" />');

define('LNG_UserDeleteNoData_Summary', 'Deletar conta(s) de usuario(s) selecionadas, exceto os dados da conta do cliente');
define('LNG_UserDeleteWithData_Summary', 'Deletar contas de usuarios selecionadas e todos os dados da conta do cliente.');

define('LNG_ConfirmRemoveUsersWithData', 'Deseja mesmo remover as contas de usuarios junto com os dados de cliente do mesmo?');


/**
**************************
* Changed/Added in 5.7.0
**************************
*/
define('LNG_UserDeleteNoData', 'Mantenha os dados do usu&aacute;rio');
define('LNG_UserDeleteWithData', 'Deletar dados do usu&aacute;rio');
define('LNG_UserType_NormalUser', 'Conta de usu&aacute;rio Normal');
define('LNG_UserType_TrialUser', 'Conta de Testes');
define('LNG_AdministratorType_TrialUser', LNG_UserType_TrialUser);

define('LNG_HLP_UserType', "Que tipo de conta de usu&aacute;rio voc&ecirc; gostaria de criar? Escolha '" . LNG_UserType_NormalUser . "' para criar uma conta normal com acesso total. Escolha '" . LNG_UserType_TrialUser . "' para criar uma conta de testes com expira&ccedil;&atilde;o ap&oacute;s %%IEM_SYSTEM_LICENSE_TRIALUSER_TRIALDAYS%% dias e com um limite de  %%IEM_SYSTEM_LICENSE_TRIALUSER_EMAILLIMIT%% e-mails durante o per&iacute;odo de cadastro.");

define('LNG_AdminNotifications_Heading', 'Notifica&ccedil;&otilde;es do Administrador');
define('LNG_AdminNotifications_SubHeading', 'Notifica&ccedil;&otilde;es por e-mail de atividades');
define('LNG_AdminNotifications_EmailInstruction', '(Separe m&uacute;ltiplos e-mails com ponto e v&iacute;rgula)');

define('LNG_AdminNotifications_Notify_Send', 'Notifica&ccedil;&atilde;o por Altos Envios?');
define('LNG_AdminNotifications_Send_Desc', 'Sim, notifique-me caso este usu&aacute;rio envie para mais que (Clique para escolher):');
define('LNG_AdminNotifications_Send_LimitDesc', 'contatos em um &uacute;nico envio');

define('LNG_AdminNotifications_Email_Text', 'Texto da Mensagem:');

define('LNG_AdminNotifications_Notify_Import', 'Notificar Alta importa&ccedil;&atilde;o?');
define('LNG_AdminNotifications_Import_Desc', 'Sim, notifique-me caso este usu&aacute;rio importar mais que (clique para escolher):');
define('LNG_AdminNotifications_Import_LimitDesc', 'contatos em uma &uacute;nica importa&ccedil;&atilde;o');

define('LNG_AdminNotifications_Send_Email', '***Este &eacute; um e-mail automatico, por favor n&atilde;o responda***

%%user_fullname%% Enviou uma campanha de e-mail entitulada como "%%campaign_title%%" com assunto "%%campaign_subject%%" para %%number_of_contacts%% contatos.

Para deixar de receber estas mensagens, efetue login no seu sistema de e-mail e edite o usu&aacute;rio %%user_fullname%% e v&aacute; at&eacute; a aba "Notifica&ccedil;&otilde;es do Administrador".');

define('LNG_AdminNotifications_Import_Email', '***Este &eacute; um e-mail autom&aacute;tico, por favor n&atilde;o responda.***

%%user_fullname%% importou %%number_of_contacts%% contatos em sua lista de contatos nomeada por "%%list_name%%".

Para deixar de receber estas mensagens, efetue login no seu sistema de e-mail e edite o usu&aacute;rio %%user_fullname%% e v&aacute; at&eacute; a aba "Notifica&ccedil;&otilde;es do Administrador".');

define('LNG_EnterNotifyAdminEmail', "Digite um e-mail v&aacute;lido.");
define('LNG_EnterNotifyAdminThresholdNotNumber', "Digite o n&uacute;mero de contatos para disparo deste e-mail.");
define('LNG_EnterNotifyAdminThreshold', "Digite o n&uacute;mero de contatos para disparo deste e-mail." );
define('LNG_EnterNotifyAdminEmailText', "Digite algum texto para a mensagem do e-mail.");

define('LNG_AdminNotifications_Send_Enabled', "Enviar tamanho do disparador");
define('LNG_HLP_AdminNotifications_Send_Enabled', "Quando um usu&aacute;rio enviar uma campanha muitos contatos (ou mais) contatos em um &uacute;nico envio, um e-mail &eacute; enviado para o e-mail do mesmo contendo o texto abaixo.");
define('LNG_AdminNotifications_Import_Enabled', "Importa&ccedil;&atilde;o do Tamanho do Disparador");
define('LNG_HLP_AdminNotifications_Import_Enabled', "Quando o usu&aacute;rio importa muitos (ou mais) contatos em uma &uacute;nica importa&ccedil;&atilde;o, um e-mail &eacute; enviado para o mesmo contendo o texto abaixo.");


define('LNG_AdminNotifications_Send_Text', "Texto da Mensagem");
define('LNG_HLP_AdminNotifications_Send_Text', "O texto digitado aqui &eacute; enviado no corpo das notifica&ccedil;&otilde;es dos e-mails. Voc&ecirc; pode usar vari&aacute;veis para incluir detalhes sobre o alto envio como a seguir:<ul><li><b>%%user_fullname%%</b> - O Nome Completo do usu&aacute;rio da campanha</li><li><b>%%campaign_title%%</b> - O nome da campanha enviada</li><li><b>%%campaign_subject%%</b> - O assunto do e-mail da campanha enviada</li><li><b>%%number_of_contacts%%</b> - O n&uacute;mero de contatos da campanha a qual est&aacute; sendo enviada</li></ul>");

define('LNG_AdminNotifications_Import_Text', "Texto da Mensagem");
define('LNG_HLP_AdminNotifications_Import_Text', "O texto digitado aqui &eacute; enviado no corpo das notifica&ccedil;&otilde;es dos e-mails. Voc&ecirc; pode usar vari&aacute;veis para incluir detalhes sobre o alto n&iacute;vel de importa&ccedil;&atilde;o, veja a seguir:<ul><li><b>%%user_fullname%%</b> - O Nome Completo do usu&aacute;rio da importa&ccedil;&atilde;o</li><li><b>%%list_name%%</b> - O nome da lista usada para importada</li><li><b>%%number_of_contacts%%</b> - O n&uacute;mero de contatos da importa&ccedil;&atilde;o</li></ul>");

define('LNG_NotifyEmailAddress', 'E-mail');
define('LNG_HLP_NotifyEmailAddress', 'Para usar mais de um e-mail, separe com ponto e virgula, exemplo:<br /><br />usuario1@exemplo.com.br, usuario2@exemplo.com.br');

define('LNG_AdminNotifications_Notify_SendEnable', 'Notificar Alto Envio (Demasiado)?');
define('LNG_HLP_AdminNotifications_Notify_SendEnable', 'Gostaria mesmo de notificar o usu&aacute;rio quando o mesmo enviar um e-mail para uma alta quantidade de listagem de contatos? Se sim, marque esta op&ccedil;&atilde;o e customize as configura&ccedil;&otilde;es a seguir.');

define('LNG_AdminNotifications_Notify_ImportEnable', 'Notificar Alta Importa&ccedil;&atilde;o (Demasiada)?');
define('LNG_HLP_AdminNotifications_Notify_ImportEnable', 'Gostaria mesmo de notitificar o usu&aacute;rio quando o mesmo importar uma larga quantidade de listas de contatos? Se sim, marque a op&ccedil;&atilde;o e customize a configura&ccedil;&atilde;o a seguir.');

define('LNG_UserNotCreated', 'Um erro ocorreu ao tentar criar este usu&aacute;rio. Se este problema persistir, contate o administrador do sistema.');
define('LNG_AdministratorType', 'Tipo de Conta');
define('LNG_Permissions_Triggeremails', 'Permiss&otilde;es de Disparos');

/**
**************************
* Changed/Added in 5.7.1
**************************
*/
define('LNG_QuickUserSearchIntro', 'Buscar por: usuario, e-mail ou nome...');

/**
**************************
* Changed/Added in 5.7.2
**************************
*/
define('LNG_SearchRecordNotFound', 'Nenhuma conta foi encontrada com suas condi&ccedil;&otilde;es de pesquisa.');



/**
 * 6.0.0
 */
define('LNG_UsersGroups', 'Grupo de Usu&aacute;rio');
define('LNG_HLP_UsersGroups', 'A que grupo este usu&aacute;rio pertence? Cada grupo cont&eacute;m suas próprias permiss&otilde;es e e-mails que emitem op&ccedil;&otilde;es. Voc&ecirc; pode gerenciar grupos no menu Contas de Usu&aacute;rios no menu superior da p&aacute;gina.');
define('LNG_UsersGroups_Intro', '-- Selecione um grupo de usu&aacute;rios --');
define('LNG_UsersGroups_Choose_Group', 'Selecione um grupo.');
define('LNG_UserDetailsAdvanced', 'Avan&ccedil;ado');
define('LNG_UserSettingsAdvanced_Heading', 'Configura&ccedil;&otilde;es avan&ccedil;adas');
define('LNG_HeaderFooter_Heading', 'Configura&ccedil;&otilde;es de Rodap&eacute;');
define('LNG_AdminCannotChangeGroup', 'N&atilde;o pode mudar o grupo de usu&aacute;rio. Deve haver pelo menos um administrador de sistema.');
