<?php
/**
* Language file variables for the frontend area.
*
* @see GetLang
*
* @version     $Id: frontend.php,v 1.16 2008/01/03 01:11:29 scott Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/


/**
* Frontend form stuff.
*/
define('LNG_FormFail_InvalidField', 'Campo %s n&atilde;o existe mais.');
define('LNG_FormFail_InvalidList', 'Lista %s n&atilde;o existe mais.');
define('LNG_FormFail_AlreadySubscribedToList', 'Voc&ecirc; j&aacute; esta inscrito para esta lista %s');
define('LNG_FormFail_NotOnList', 'Voc&ecirc; n&atilde;o est&aacute; inscrito para a lista %s');


define('LNG_FormFail_InvalidData_Subscribe', 'Digite dados v&aacute;lidos ou escolha op&ccedil;&otilde;es v&aacute;lidas para o %s campo.');
define('LNG_FormFail_InvalidData_Unsubscribe', 'Voc&ecirc; n&atilde;o\ precisa digitar nada para ser removido.');
define('LNG_FormFail_InvalidData_ModifyDetails', 'Digite dados v&aacute;lidos ou escolha op&ccedil;&otilde;es v&aacute;lidas para o %s campo.');

define('LNG_FormFail_PageTitle_Subscribe', 'Formul&aacute;rio de inscri&ccedil;&atilde;o cont&eacute;m erros');
define('LNG_FormFail_PageTitle_Confirm', 'Erro confirmando seus dados');
define('LNG_FormFail_PageTitle_Unsubscribe', 'Formul&aacute;rio de remo&ccedil;&atilde;o cont&eacute;m erros');
define('LNG_FormFail_PageTitle_ModifyDetails', 'Erro ao modificar dados do formul&aacute;rio');

define('LNG_Form_EmailEmpty_Subscribe', 'Digite um endere&ccedil;o de e-mail v&aacute;lido.');
define('LNG_Form_EmailEmpty_Unsubscribe', 'Digite um endere&ccedil;o de e-mail v&aacute;lido.');
define('LNG_Form_EmailEmpty_ModifyDetails', 'Digite um endere&ccedil;o de e-mail v&aacute;lido.');

define('LNG_Form_CaptchaIncorrect', 'A resposta da imagem do c&oacute;digo de seguran&ccedil;a n&atilde;o corresponde a imagem exibida. Por favor, tente novamente.');

define('LNG_SubscriberNotification_Field', '%s: %s' . "\n");

define('LNG_UnsubscribeNotification_Field', '%s: %s' . "\n");

define('LNG_UnsubscribeFail_InvalidList', 'Uma das listas que voc&ecirc; est&aacute; tentando cancelar a sua inscri&ccedil;&atilde;o n&atilde;o\ existe.');

define('LNG_UnsubscribeFail_AlreadyUnsubscribed', 'Voc&ecirc; j&aacute; foi removido desta lista %s');



/**
* This is used for the default "error" message. For example if you import subscribers and then send them a confirmation link, if they change the confirmation link manually then this will be used.
*/
define('LNG_DefaultErrorMessage', 'Ocorreram alguns erros, verifique seu e-mail.<br/>%s');

define('LNG_InvalidUnsubscribeURL', 'O link de remo&ccedil;&atilde;o que voc&ecirc; clicando &eacute; inv&aacute;lido.');
define('LNG_InvalidSendFriendURL', 'O link Indique a um Amigo que voc&ecirc; esta clicando &eacute; inv&aacute;lido.');
define('LNG_InvalidModifyURL', 'O link modificar detalhes que voc&ecirc; esta clicando &eacute; inv&aacute;lido.');
define('LNG_InvalidConfirmURL', 'O link para Confirmar inscri&ccedil;&atilde;o que voc&ecirc; esta clicando &eacute; inv&aacute;lido. Voc&ecirc; j&aacute; pode ter confirmado a sua inscri&ccedil;&atilde;o.');

define('LNG_DefaultUnsubscribeMessage', 'Voc&ecirc; foi removido com sucesso.');

/**
* Check for banned subscribers.
*/
define('LNG_AllLists', 'todas as listas');

define('LNG_InvalidEmailAddress', 'Voc&ecirc; inseriu um endere&ccedil;o de e-mail inv&aacute;lido.');
define('LNG_ConfirmCodeDoesntMatch', 'Voce ja confirmou o seu e-mail nesta lista.');


define('LNG_ConfirmCodeDoesntMatch_Unsubscribe', 'O link em que voc&ecirc; clicou n&atilde;o &eacute; um link v&aacute;lido.');

/**
* Modify details changes.
*/
define('LNG_NewEmailAlreadyOnList', 'O seu e-mail \'%s\' j&aacute; est&aacute; inscrito em lista \'%s\'');

/**
* Send to friend stuff.
*/
define('LNG_FormFail_PageTitle_SendFriend', 'Erros da ferramenta Indique a um Amigo');
define('LNG_EnterYourFriendsEmailAddress', 'Por favor, digite o e-mail dos seus amigos.');
define('LNG_EnterYourEmailAddress', 'Digite seu e-mail.');
define('LNG_NewsletterDoesntExistAnymore', 'Este e-mail n&atilde;o\ existe mais, por isso n&atilde;o\ podemos envi&aacute;-lo para o seu amigo. Desculpe!<br/>');

/**
* RSS Feeds
*/
define('LNG_NewsletterArchives', 'Arquivos de Campanhas de e-mail ');
define('LNG_NewsletterArchives_List', 'Arquivos de campanha e-mail para lista \'%s\'');
define('LNG_NewsletterArchives_NoneSent', 'Nenhuma campanha de e-mail foi enviada');


/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_SubscriberNotification_EmptyField', '[ Esta informa&ccedil;&atilde;o n&atilde;o foi inserida ]');

define('LNG_YouAreABannedSubscriber', 'Voc&ecirc; foi removido da lista %s');



/**
**************************
* Changed/added in NX 1.5
**************************
*/

define('LNG_SubscriberNotification_Subject', 'Um contato foi adicionado a sua lista');
define('LNG_SubscriberNotification_Body', 'Um contato foi adicionado a sua lista de contatos. Os seus detalhes est&atilde;o listados abaixo.' . "\n" . 'Voc&ecirc; pode envi&aacute;-la por e-mail clicando em "Responder".' . "\n\n-----\n" . '%s');
define('LNG_SubscriberNotification_Lists', 'Lista de contatos: %s' . "\n");

define('LNG_SubscriberNotification_Subject_Lists', 'Um contato foi adicionado a sua lista \'%s\'');

define('LNG_UnsubscribeNotification_Body', 'Um contato foi removido da sua lista. Os seus detalhes est&atilde;o listados abaixo.' . "\n" . 'Voc&ecirc; pode envi&aacute;-la por e-mail clicando em "Responder".' . "\n\n-----\n" . '%s');
define('LNG_UnsubscribeNotification_Subject', 'Um contato foi removido sua lista');
define('LNG_UnsubscribeNotification_Subject_Lists', 'Um contato foi removido lista %s');


define('LNG_Form_NoLists_Subscribe', 'Por favor, escolha uma lista de contatos para assinar');
define('LNG_Form_NoLists_Unsubscribe', 'Por favor, escolha um contato para ser removido da sua lista de contatos');
define('LNG_Form_NoLists_ModifyDetails', 'Favor selecione alguns contatos para atualizar suas listas');

/**
* This is used for the default "confirmation" message. For example if you import subscribers and then send them a confirmation link, they will get shown this message (need this because they haven't subscribed through a form so need a final message to show).
*/
define('LNG_DefaultThanksMessage', 'Obrigado por se inscrever na nossa lista de contatos.');

define('LNG_SpecificList', 'lista de contatos \'%s\'');
define('LNG_SpecificLists', 'lista de contatos \'%s\'');

/**
****************************
* Changed/added in IEM 5.0.4
****************************
*/

define('LNG_CannotSendEmail', 'N&atilde;o &eacute; poss&iacute;vel enviar e-mail para esse endere&ccedil;o.');

/**
****************************
* Changed/added in IEM 5.6
****************************
*/

define('LNG_Unsubscribe_Form_Note', 'Escolha uma lista de contatos que voc&ecirc; deseja descadastrar:');
define('LNG_Unsubscribe_InvalidList', 'Selecione pelo menos uma lista de contatos que voc&ecirc; queira descadastrar.');
define('LNG_Unsubscribe_Yes', 'Sim, Descadastre-me');
