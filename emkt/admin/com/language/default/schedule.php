<?php
/**
* Language file variables for the schedule management area.
*
* @see GetLang
*
* @version     $Id: schedule.php,v 1.21 2008/01/16 00:01:46 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the schedule area... Please backup before you start!
*/

define('LNG_ScheduleManage', 'Exibir Fila de e-mails Agendados');

define('LNG_DateScheduled', 'Datas Agendadas');
define('LNG_Schedule_Empty', 'Nada est&aacute; agendado para ser enviado.%s');
define('LNG_NoSchedules_HasAccess', ' Clique no bot&atilde;o "Enviar" para enviar um campanha de e-mail .');

define('LNG_JobPausedSuccess', 'Tarefa pausada com sucesso.');
define('LNG_JobPausedFail', 'Tarefa n&atilde;o foi pausada com sucesso. Voc&ecirc; n&atilde;o pode pausar tarefas que n&atilde;o tenham sido iniciadas.');

define('LNG_JobResumedSuccess', 'Campanha de e-mail foi reiniciada com sucesso.');
define('LNG_JobResumedFail', 'Campanha de e-mail n&atilde;o reiniciada com sucesso.');

define('LNG_UnableToLoadJob', 'N&atilde;o &eacute; poss&iacute;vel carregar tarefa. Por favor, tente novamente.');
define('LNG_UnableToEditJob_InProgress', 'N&atilde;o foi poss&iacute;vel editar esta tarefa. Tarefa atualmente em curso. Pause a tarefa antes de tentar novamente.');

define('LNG_Schedule_Edit', 'Editar Envio Agendado');
define('LNG_Help_Schedule_Edit', 'Utilize o formul&aacute;rio abaixo para atualizar a agenda de sua campanha de e-mail.');
define('LNG_ScheduleEditCancel_Prompt', 'Tem certeza de que deseja cancelar a edicao do agendamento da campanha de Email?');

define('LNG_JobDeleteSuccess', 'O item agendado foi exclu&iacute;do  com &ecirc;xito');
define('LNG_JobsDeleteSuccess', '%s item agendado foi exclu&iacute;do  com &ecirc;xito');
define('LNG_JobDeleteFail', 'O item agendado n&atilde;o foi  exclu&iacute;do. Voc&ecirc; n&atilde;o pode excluir um item agendado enquanto ele estiver em andamento.');
define('LNG_JobsDeleteFail', '%s item agendado n&atilde;o foi  exclu&iacute;do. Voc&ecirc; n&atilde;o pode excluir um item agendado enquanto ele estiver em andamento.');

define('LNG_SendThisNewsletterButton', 'Envie esta campanha de Email');

define('LNG_CronWillRunInApproximately', 'Agendador (Sistema de Envio Programado) ser&aacute; executado em: %s');

define('LNG_ChooseSchedulesToDelete', 'Por favor, escolha um ou mais agendamentos  para apagar.');
define('LNG_ConfirmRemoveSchedules', 'Tem certeza de que deseja remover os agendamento?');
define('LNG_DeleteSchedulePrompt', 'Tem certeza de que deseja excluir este agendamento?');

define('LNG_Refresh', 'Atualizar');

define('LNG_WaitingForApproval', 'Aguardando Aprova&ccedil;&atilde;o');
define('LNG_WaitingForApproval_Description', 'O usu&aacute;rio que enviar este e-mail estava tentando enviar muitos Emails. Clique  Aprovar para permitir o envio do Email, ou exclua o evento agendado.');
define('LNG_JobApprovedFail_NotAdmin', 'Voc&ecirc; n&atilde;o &eacute; um administrador e n&atilde;o pode aprovar esta tarefa.');
define('LNG_JobApprovedSuccess', 'Tarefa aprovada com &ecirc;xito. Ser&aacute; enviada de acordo com o calend&aacute;rio.');
define('LNG_JobApprovedFail', 'Tarefa n&atilde;o foi aprovada com &ecirc;xito. Por favor, tente novamente.');

define('LNG_CannotChangeAScheduleOnceItHasStarted', 'Voc&ecirc; n&atilde;o pode alterar um evento programado, uma vez que j&aacute; se iniciou. Para agendar esta campanha de Emailnovamente, por favor, inicie um novo agendamento.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_Schedule_ViewNewsletter', '<a href="%s" target="_blank">Ver</a>');

/**
***************************
* Changed/added in NX 1.3.1
***************************
*/
define('LNG_Help_ScheduleManage', 'Qualquer e-mails programado para ser enviado s&atilde;o exibidos abaixo. O campo "Status" indica quando cada e-mail ser&aacute; enviado.');

/**
***************************
* Changed/added in NX 1.4
***************************
*/
define('LNG_JobScheduledOK', 'Sua campanha de e-mail foi programada para envio e vai come&ccedil;ar o envio na data e hora que voc&ecirc; selecionou.');

/**
***************************
* Changed/added in 5.0.0
***************************
*/
define('LNG_JobDoesntExist', 'O item agendado que voc&ecirc; esta tentando editar nao existe. Por favor, tente novamente.');

/**
***************************
* Changed/added in 5.5.0
***************************
*/
define('LNG_Schedule_NewsletterType', 'Tipo da campanha');
define('LNG_Schedule_NewsletterType_Newsletter', 'Campanha do email');

?>
