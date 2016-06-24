<?php
/**
* Language file variables for the templates area.
*
* @see GetLang
*
* @version     $Id: templates.php,v 1.28 2008/01/22 03:18:37 scott Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the template area... Please backup before you start!
*/
define('LNG_CreateTemplateCancelButton', 'Tem certeza de que deseja cancelar a cria&ccedil;&atilde;o de um novo modelo?');
define('LNG_CreateTemplateHeading', 'Novo modelo detalhes');

define('LNG_EditTemplate', 'Atualizar Modelo');
define('LNG_EditTemplateIntro', 'Preencha o formul&aacute;rio abaixo para atualizar o modelo.');
define('LNG_EditTemplateCancelButton', 'Tem certeza de que deseja cancelar a atualiza&ccedil;&atilde;o deste modelo?');
define('LNG_EditTemplateHeading', 'Modelo Detalhes');

define('LNG_EditTemplateIntro_Step2', 'Por favor, atualize o conte&uacute;do abaixo. Clique em "Salvar" quando terminar.');

define('LNG_NoTemplatesBuiltIn', 'N&atilde;o est&atilde;o dispon&iacute;veis modelos constru&iacute;dos. Entre em contato com o administrador.');

define('LNG_EnterTemplateName', 'Digite um nome para este modelo');

define('LNG_TemplateName', 'Nome do modelo');

define('LNG_TemplateNameIsNotValid', 'Nome do modelo n&atilde;o &eacute; v&aacute;lido');
define('LNG_UnableToCreateTemplate', 'Ocorreu um erro durante a tentativa de criar o seu novo modelo.');
define('LNG_TemplateCreated', 'Seu novo modelo foi criado com sucesso');

define('LNG_DeleteTemplatePrompt', 'Tem certeza de que deseja excluir este modelo?');

define('LNG_HLP_TemplateName', 'Escolha um nome para este modelo. Este nome s&oacute; ser&aacute; visto no painel de controle e n&atilde;o ser&atilde;o utilizados em qualquer um dos seus Emails.');

define('LNG_UnableToUpdateTemplate', 'N&atilde;o foi poss&iacute;vel atualizar o modelo');
define('LNG_TemplateUpdated', 'Modelo atualizado com sucesso');

define('LNG_TemplateDeleteFail', 'N&atilde;o foi poss&iacute;vel excluir o modelo');
define('LNG_TemplateDeleteSuccess', 'Modelo exclu&iacute;do com sucesso');
define('LNG_NoTemplates', 'No templates are available.%s');
define('LNG_NoTemplates_HasAccess', ' Clique no bot&atilde;o "Criar Modelo" para criar um novo modelo.');

define('LNG_TemplateFormat', 'Formato do Modelo');
define('LNG_HLP_TemplateFormat', 'Em quais formatos voc&ecirc; gostaria de criar esse modelo? Escolha entre HTML, Texto ou Texto e HTML.');
define('LNG_TemplateContent', 'Insira o conte&uacute;do do modelo abaixo');

define('LNG_TemplateCopySuccess', 'Modelo foi copiado com sucesso.');
define('LNG_TemplateCopyFail', 'Modelo n&atilde;o foi copiado com sucesso.');

define('LNG_Template_Title_Enable', 'Habilitar Modelo');
define('LNG_Template_Title_Disable', 'Desabilitar Modelo');

define('LNG_Template_Title_Global_Enable', 'Marcar como Template Global');
define('LNG_Template_Title_Global_Disable', 'Marcar como Template N&atilde;o Global');

define('LNG_Template_DeactivatedSuccessfully', 'Modelo desativado com sucesso.');
define('LNG_Template_ActivatedSuccessfully', 'Modelo ativado com &ecirc;xito.');

define('LNG_Template_Global_DeactivatedSuccessfully', 'Modelo desativado com sucesso.');
define('LNG_Template_Global_ActivatedSuccessfully', 'Modelo ativado com &ecirc;xito.');

define('LNG_TemplateCannotBeInactiveAndGlobal', 'Um modelo n&atilde;o pode ser Global e Inativo ao mesmo tempo.');

define('LNG_TemplateIsActive', 'Ativar Modelo');
define('LNG_TemplateIsActiveExplain', 'Sim, este modelo est&aacute; ativo');
define('LNG_HLP_TemplateIsActive', 'Este modelo dever&aacute; ser marcada como ativo? Modelos Inativo n&atilde;o podem ser usados para criar campanhas por e-mail ou resposta autom&aacute;tica.');

define('LNG_TemplateIsGlobal', 'Modelo Global');
define('LNG_TemplateIsGlobalExplain', 'Sim, este modelo &eacute; global');
define('LNG_HLP_TemplateIsGlobal', 'Este modelo deve ser marcado como global? Desta forma, todos os usu&aacute;rios ser&atilde;o capazes de v&ecirc;-lo ao criar uma campanha de e-mail ou resposta autom&aacute;tica.');

define('LNG_UnableToLoadTemplate', 'N&atilde;o &eacute; poss&iacute;vel carregar o modelo. Por favor, tente novamente.');
define('LNG_UnableToLoadTemplateFromServer', 'N&atilde;o foi poss&iacute;vel localizar o modelo no servidor. Por favor, tente novamente.');

define('LNG_TemplateFile', 'Arquivo do Modelo ');
define('LNG_HLP_TemplateFile', 'Fazer upload de um arquivo html do seu computador para usar como seu modelo');
define('LNG_UploadTemplate', 'Upload');
define('LNG_TemplateFileEmptyAlert', 'Por favor, escolha um arquivo do seu computador antes de tentar enviar.');
define('LNG_TemplateFileEmpty', 'Por favor, escolha um arquivo do seu computador antes de tentar carreg&aacute;-lo.');

define('LNG_TemplateURL', 'URL do Modelo');
define('LNG_HLP_TemplateURL', 'Importa&ccedil;&atilde;o de um modelo a partir de uma url');
define('LNG_ImportTemplate', 'Importar');
define('LNG_TemplateURLEmptyAlert', 'Digite uma url para importar o modelo a partir dela');
define('LNG_TemplateURLEmpty', 'Digite uma url para importar o modelo a partir dela');

define('LNG_Template_Edit_Disabled', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para editar este modelo');
define('LNG_Template_Delete_Disabled', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para excluir este modelo');
define('LNG_Template_Copy_Disabled', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para c&oacute;piar deste modelo');

define('LNG_ChooseTemplates', 'Por favor, escolha primeiro um ou mais modelos.');
define('LNG_ApproveTemplates', 'Ativar');
define('LNG_DisapproveTemplates', 'Desativar');
define('LNG_GlobalTemplates', 'Esse Modelo &eacute; Global');
define('LNG_DisableGlobalTemplates', 'Remover Modelo Global');

define('LNG_NoTemplatesSelected', 'Nenhum modelo foi selecionado. Por favor, tente novamente.');

define('LNG_Template_NotDeleted', '1 O modelo n&atilde;o foi exclu&iacute;do. Por favor, tente novamente.');
define('LNG_Templates_NotDeleted', '%s modelo n&atilde;o foram exclu&iacute;dos. Por favor, tente novamente.');
define('LNG_Template_Deleted', '1 modelo foi exclu&iacute;do com sucesso.');
define('LNG_Templates_Deleted', '%s modelos foram exclu&iacute;dos com sucesso.');

define('LNG_Template_NotApproved', 'N&atilde;o foi poss&iacute;vel aprovar o modelo selecionado');
define('LNG_Templates_NotApproved', 'N&atilde;o foi poss&iacute;vel aprovar os modelos selecionados %s');
define('LNG_Template_Approved', '1 modelo foi ativado com sucesso');
define('LNG_Templates_Approved', '%s modelos foram ativados com sucesso');

define('LNG_Template_NotDispproved', 'N&atilde;o &eacute; poss&iacute;vel reprovar o modelo selecionado');
define('LNG_Templates_NotDispproved', 'N&atilde;o &eacute; poss&iacute;vel reprovar o %s modelos selecionados');
define('LNG_Template_Disapproved', '1 modelo foi desativado com sucesso');
define('LNG_Templates_Disapproved', '%s modelos foram desativados com sucesso');

define('LNG_Template_NotGlobal', 'Imposs&iacute;vel de tornar Global o modelo selecionado');
define('LNG_Templates_NotGlobal', 'Imposs&iacute;vel de tornar Global %s os modelos selecionados');
define('LNG_Template_Global', '1 modelo foi globalizado com sucesso');
define('LNG_Templates_Global', '%s modelos foram globalizados com sucesso');

define('LNG_Template_NotDisableGlobal', 'N&atilde;o &eacute; poss&iacute;vel parar o compartilhamento %s do modelo selecionado');
define('LNG_Templates_NotDisableGlobal', 'N&atilde;o &eacute; poss&iacute;vel parar o compartilhamento %s do modelo selecionado');
define('LNG_Template_DisableGlobal', '1 modelo n&atilde;o foi compartilhado com sucesso');
define('LNG_Templates_DisableGlobal', '%s modelos n&atilde;o foram compartilhados com sucesso');

define('LNG_CannotDeleteGlobalTemplate_NoAccess', 'Voc&ecirc; n&atilde;o pode excluir modelo \"%s\" porque voc&ecirc; n&atilde;o tem acesso.');

define('LNG_ActivateTemplates', LNG_ApproveTemplates);
define('LNG_InactivateTemplates', LNG_DisapproveTemplates);

define('LNG_InvalidTemplateAction', 'Voc&ecirc; tentou executar uma opera&ccedil;&atilde;o n&atilde;o autorizada. Por favor, tente novamente.');

define('LNG_DeleteTemplatePreview_Image', 'Voc&ecirc; ter&aacute; que excluir manualmente o arquivo em admin/resources/user_template_previews/%s_preview.gif .');

define('LNG_TemplateID', '<span style="color: #A1A1A1">&nbsp;- id: %s</span>');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_BuiltInTemplate_Preview_TemplatePack', '%s (%s)');
define('LNG_BuiltInTemplate_Preview_Template', '%s');

/**
**************************
* Changed/added in NX1.1.1
**************************
*/
define('LNG_TemplateFilesCopyFail', 'As imagens e/ou acess&oacute;rios para este modelo n&atilde;o foram copiados com sucesso.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_TemplatesManage', 'Exibir modelo personalizado');
define('LNG_Help_TemplatesManage_Create', ' Para criar um novo modelo, clique no bot&atilde;o "Criar um modelo personalizado" bot&atilde;o abaixo.');

define('LNG_CreateTemplate', 'Criar um modelo de e-mail personalizado');
define('LNG_CreateTemplateButton', 'Criar um modelo personalizado...');

/**
**************************
* Changed/added in 5.0
**************************
*/
define('LNG_Help_TemplatesManage', 'Um Modelo personalizado deve ser criado como base na estrat&eacute;gia de suas novas campanhas de e-mail. Saiba mais lendo <a href="" onclick="LaunchHelp(838); return false;">este artigo</a>.');
define('LNG_CreateTemplateIntro', LNG_Help_TemplatesManage);
define('LNG_CreateTemplateIntro_Step2', LNG_Help_TemplatesManage);
define('LNG_TemplatesManageBuiltIn', 'Constru&iacute;ndo Modelos de Email');
define('LNG_Help_TemplatesManageBuiltIn', 'Todos os modelos prontos dispon&iacute;veis s&atilde;o exibidos abaixo. Para utilizar um modelo, basta selecion&aacute;-lo para criar uma campanha de e-mail.');
?>
