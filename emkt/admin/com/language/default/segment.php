<?php
/**
* Segment language variables.
* This file is used by "Segment" pages.
*
* @see GetLang
*
* @version     $Id: language.php,v 1.153 2008/02/22 04:45:13 chris Exp $
* @author Hendri <hendri@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Please backup before you start.
*/
define('LNG_SegmentName', 'Nome do Segmento');
define('LNG_HLP_SegmentName', 'Digite um nome para este segmento, tais como \\\'Prospects de s&atilde;o Paulo\\\' ou \\\'Os clientes que se inscreveram em mar&ccedil;o\\\'. Este nome &eacute; utilizado apenas para sua refer&ecirc;ncia e nunca &eacute; vis&iacute;vel para os contatos.');

define('LNG_SegmentManage', 'Exibir Segmenta&ccedil;&otilde;es');
define('LNG_Help_SegmentManage', 'Um segmento &eacute; uma visualiza&ccedil;&atilde;o filtrada de uma ou mais listas de contatos. Voc&ecirc; pode ver os contatos por segmentos e at&eacute; mesmo enviar campanhas para um determinado segmento.');
define('LNG_SegmentManageCreateNew', 'Criando um Segmento...');
define('LNG_SegmentManageCreateNew_Title', 'Criar um novo Segmento');

define('LNG_SegmentManageNoSegment', 'Nenhum segmento dispon&iacute;vel. %s');
define('LNG_SegmentManageSegmentCreate', ' Clique no bot&atilde;o abaixo "' . LNG_SegmentManageCreateNew . '" para criar um.');
define('LNG_SegmentManageSegmentAssign', '&nbsp;Entre em contato com o administrador do sistema para atribuir-lhe um segmento.');

define('LNG_SegmentDelete', 'Excluir o(s) segmento(s) seleccionado(s)');
define('LNG_SegmentAlertChooseSegment', 'Por favor, escolha primeiro um ou mais segmentos.');

define('LNG_SegmentManageConfirmDeleteOne', 'Tem certeza de que deseja excluir o segmento selecionado?');
define('LNG_SegmentManageConfirmDeleteMany', 'Tem certeza de que deseja excluir os segmentos selecionados?');

define('LNG_SegmentManageDeleteSuccessOne', 'O segmento selecionado foi exclu&iacute;do.');
define('LNG_SegmentManageDeleteSuccessMany', 'Os segmentos selecionados foram exclu&iacute;dos.');

define('LNG_SegmentManageDeleteErrorNoPrivilege', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para excluir o segmento selecionado.');
define('LNG_SegmentManageDeleteErrorOne', 'Um erro ocorreu durante a tentativa de excluir o segmento selecionado. Por favor, tente novamente.');
define('LNG_SegmentManageDeleteErrorMany', 'Um erro ocorreu durante a tentativa de excluir os segmentos selecionados. Por favor, tente novamente.');

define('LNG_SegmentManageCopySuccess', 'O segmento selecionado foi copiado com sucesso');

define('LNG_SegmentManageCopyError', 'Um ocorreu um erro na base de dados ao tentar copiar o segmento selecionado. Por favor, tente novamente.');

define('LNG_SegmentManageCopyErrorNoPrivilege', 'O segmento seleccionado n&atilde;o pode ser copiado, porque voc&ecirc; n&atilde;o tem acesso a todas as listas contidas neste segmento.');
define('LNG_SegmentManageSaveErrorNoPrivilege', 'Suas altera&ccedil;&otilde;es n&atilde;o puderam ser salvas, porque esse segmento cont&eacute;m uma ou mais listas que voc&ecirc; n&atilde;o tem acesso.');

define('LNG_SegmentManageEditWarningPrivilage', 'Depois da &uacute;ltima vez que voc&ecirc; acessou esse segmento foi adicionado um filtro para uma lista que voc&ecirc; n&atilde;o t&ecirc;m acesso, portanto, voc&ecirc; n&atilde;o pode fazer nenhuma altera&ccedil;&atilde;o.');

define('LNG_SegmentFormRuleDescription', 'Filtrar Contatos');

define('LNG_SegmentFormTitleEdit', 'Editar Segmento');
define('LNG_SegmentFormTitleCreate', 'Criar um Segmento');
define('LNG_SegmentFormTitleCreateIntro', 'Um segmento &eacute; um conjunto de listas de contatos com filtros e cruzamentos. Por exemplo, voc&ecirc; poderia criar um segmento para visualizar os contatos de um cidade em todas as suas listas.');
define('LNG_SegmentFormTitleEditIntro', LNG_SegmentFormTitleCreateIntro);

define('LNG_SegmentFormAlertSpecifySegmentName', 'Digite um nome para este segmento.');
define('LNG_SegmentFormAlertAtLeastOneRule', 'Por favor, crie pelo menos um filtro para esse segmento.');
define('LNG_SegmentFormAlertAtLeastOneList', 'Escolha pelo menos uma lista de contatos para esse segmento.');

define('LNG_SegmentFormAlertInitializingValues', 'Erro ao inicializar valores');
define('LNG_SegmentFormAlertCancel', 'Tem certeza de que deseja cancelar?');
define('LNG_SegmentFormAlertErrorRequestingData', 'Impossivel solicitar dados do servidor');

define('LNG_SegmentFormErrorCannotLoadRecord', 'Ocorreu um erro ao tentar exibir o segmento selecionado. Por favor, tente novamente.');
define('LNG_SegmentFormSaveFailed', 'Ocorreu um erro ao tentar salvar o segmento selecionado. Por favor, tente novamente.');
define('LNG_SegmentFormSaveSuccess', 'O segmento selecionado foi atualizado com sucesso.');

define('LNG_SegmentFormHeaderDetails', 'Detalhar Segmento');
define('LNG_SegmentFormHeaderRules', 'Regras do Segmento');

define('LNG_SegmentFormFieldMailingList', 'Contatos do Segmento');
define('LNG_HLP_SegmentFormFieldMailingList', 'Qual lista de contatos(s) deseja segmentar? voc&ecirc; pode selecionar v&aacute;rias listas, se necess&aacute;rio, simplesmente, assinalando aquelas que desejar incluir.');
define('LNG_SegmentFormFieldMatchType', 'Tipo de correspond&ecirc;ncia');
define('LNG_HLP_SegmentFormFieldMatchType', 'Como voc&ecirc; deseja que as regras do segmento que voc&ecirc; criou devem ser aplicada? Escolha \\\'Combinar todas as regras\\\' para ver apenas os contatos correspondentes as regras que voc&ecirc; criou. Escolher \\\'Combinar qualquer regra\\\' para ver os contatos que correspondentes a uma ou mais regras.');
define('LNG_SegmentFormMatchAllRule', 'Combinar todas as regras (e condi&ccedil;&atilde;o)');
define('LNG_SegmentFormMatchAnyRule', 'Combinar com qualquer regra (ou condi&ccedil;&atilde;o)');

define('LNG_SegmentFormOperator_date_equalto', '&eacute; sobrE');
define('LNG_SegmentFormOperator_date_notequalto', 'n&atilde;o &eacute; sobre');
define('LNG_SegmentFormOperator_date_greaterthan', '&eacute; depois');
define('LNG_SegmentFormOperator_date_lessthan', '&eacute; antes');
define('LNG_SegmentFormOperator_date_between', 'est&aacute; entre');

define('LNG_SegmentFormOperator_number_equalto', '&eacute;');
define('LNG_SegmentFormOperator_number_notequalto', 'n&atilde;o &eacute;');
define('LNG_SegmentFormOperator_number_greaterthan', '&eacute; maior do que');
define('LNG_SegmentFormOperator_number_lessthan', '&eacute; inferior a');
define('LNG_SegmentFormOperator_number_between', 'est&aacute; entre');

define('LNG_SegmentFormOperator_multiple_equalto', 'inclui');
define('LNG_SegmentFormOperator_multiple_notequalto', 'n&atilde;o inclui');

define('LNG_SegmentFormOperator_link_equalto', 'tenha clicado');
define('LNG_SegmentFormOperator_link_notequalto', 'n&atilde;o tenha clicado');

define('LNG_SegmentFormOperator_campaign_equalto', 'tenha aberto');
define('LNG_SegmentFormOperator_campaign_notequalto', 'n&atilde;o tenha aberto');

define('LNG_SegmentFormCheckbox_SelectInstruction', 'Clique para selecionar');
define('LNG_SegmentFormCheckbox_SelectTooltip', 'Clique aqui para mudar/acrescentar valor');
define('LNG_SegmentFormCheckbox_SelectWindowTitle', 'Selecione valor(s)');

define('LNG_SegmentDoesntExist', 'O segmento que est&aacute; tentando editar n&atilde;o existe. Por favor, tente novamente.');


/**
*****************************
* Changed/Added in IEM 5.0.1
*****************************
*/
define('LNG_SegmentFormOperator_text_equalto', '&eacute;');
define('LNG_SegmentFormOperator_text_notequalto', 'n&atilde;o &eacute;');
define('LNG_SegmentFormOperator_text_like', 'cont&eacute;m');
define('LNG_SegmentFormOperator_text_notlike', 'n&atilde;o cont&eacute;m');

define('LNG_SegmentFormOperator_dropdown_equalto', '&eacute;');
define('LNG_SegmentFormOperator_dropdown_notequalto', 'n&atilde;o &eacute;');

/**
*****************************
* Changed/Added in IEM 5.0.2
*****************************
*/
define('LNG_SegmentFormOperator_common_customfields_isempty', 'est&aacute; vazio');
define('LNG_SegmentFormOperator_common_customfields_isnotempty', 'n&atilde;o est&aacute; vazio');

/**
*****************************
* Changed/Added in IEM 5.7.1
*****************************
*/
define('LNG_SegmentCustomField_Basic', 'Campos B&aacute;sicos');
define('LNG_SegmentCustomField_CustomField', 'Campos Personalizados');
