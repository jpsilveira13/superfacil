<?php
/**
* Language file variables for the login page.
*
* @see GetLang
*
* @version     $Id: login.php,v 1.11 2008/01/08 04:09:40 scott Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the login area... Please backup before you start!
*/

define('LNG_Login', 'Entrar');
define('LNG_UserName', 'Usu&aacute;rio ');
define('LNG_NoUsername', 'Por favor, entre com o seu nome de usu&aacute;rio.');
define('LNG_NoPassword', 'Por favor, entre com a sua senha.');

/**
* Forgot password page.
*/
define('LNG_ForgotPasswordDetails', 'Digite os seus dados.');
define('LNG_NewPassword', 'Nova senha');
define('LNG_BadLogin_Forgot', 'Esse nome de usu&aacute;rio n&atilde;o existe. Por favor, tente novamente.');
define('LNG_ChangePasswordSubject', 'Por favor, confirme a altera&ccedil;&atilde;o da senha');
define('LNG_ChangePasswordEmail', 'Voc&ecirc; escolheu recentemente para alterar sua senha do painel de controle. Para confirmar essa altera&ccedil;&atilde;o, clique no link a seguir: %s');
define('LNG_PasswordUpdated', 'Sua senha foi atualizada com sucesso. Identifique-se abaixo.');
define('LNG_BadLogin_Link', 'O link que voc&ecirc; recebeu no e-mail n&atilde;o &eacute;  mais v&aacute;lido. Por favor, tente novamente.');
define('LNG_ChangePassword', 'Alterar Senha');

define('LNG_LoginTitle', 'Login');


/**
***************************
* Changed/added in v5.0
***************************
*/
define('LNG_SendPassword', 'Enviar Email');
define('LNG_BadLogin', 'O nome de usu&aacute;rio ou a senha que voc&ecirc; forneceu est&atilde;o incorretos. Verifique e tente novamente.');
define('LNG_Help_ForgotPassword', 'Preencha o formul&aacute;rio abaixo para cadastrar uma nova senha. Um e-mail contendo um link ser&aacute; enviado para voc&ecirc;, clique nesse link para voc&ecirc; confirmar a altera&ccedil;&atilde;o de senha.');
define('LNG_Help_Login', 'Digite os seus dados para acesso');
define('LNG_RememberMe', 'Relembrar meus dados');
define('LNG_ChangePassword_Emailed', 'Antes de sua senha seja alterada...<br /><br />Por favor, verifique sua caixa de entrada/pasta de lixo eletr&ocirc;nico' . SENDSTUDIO_EMAIL_ADDRESS . '. Foi enviado um e-mail contendo um link, voc&ecirc; deve clicar neste link para confirmar a altera&ccedil;&atilde;o da sua senha.');
define('LNG_ForgotPasswordReminder', '<a href="index.php?Page=Login&Action=ForgotPass" style="font-size: 11px;">Esqueceu sua senha?</a>');

define('LNG_TakeMeTo', 'Ir para');
define('LNG_TakeMeTo_HomePage', 'P&aacute;gina Principal');
define('LNG_TakeMeTo_Contacts', 'Meus Contatos');
define('LNG_TakeMeTo_Lists', 'Minhas Listas de Contato');
define('LNG_TakeMeTo_Campaign', 'Minhas Campanhas');
define('LNG_TakeMeTo_Autoresponder', 'Respostas Autom&aacute;ticas');
define('LNG_TakeMeTo_Statistics', 'Estat&iacute;sticas de Campanha');
define('LNG_TakeMeTo_Segments', 'Minhas Segmenta&ccedil;&otilde;es');

/**
***************************
* Changed/Added in v5.0.10
***************************
*/
define('LNG_PleaseWaitAWhile', 'Foram detectadas v&aacute;rias falhas de logins simultaneas, Por favor espere 15 minutos antes de tentar novamente.');

/**
***************************
* Changed/Added in v5.7.0
***************************
*/
define('LNG_ApplicationInactive_Admin', 'Este software foi desativado por problemas no keygen.');
define('LNG_ApplicationInactive_Regular', 'Esta aplica&ccedil;&atilde;o est&aacute; em manuten&ccedil;&atilde;o. Tente novamente mais tarde.');
