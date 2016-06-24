<?php
/**
* Language file variables for the forms area.
*
* @see GetLang
*
* @version     $Id: forms.php,v 1.41 2008/02/28 00:11:44 hendri Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the forms area... Please backup before you start!
*/

define('LNG_FormConfirmPage_Unubscribe_Subject', 'Cancelar cadastro');
define('LNG_FormThanksPage_Unubscribe_Subject', '');

define('LNG_Form_Edit_Disabled', 'Voc&ecirc; n&atilde;o pode editar esse formul&aacute;rio porque voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Form_Delete_Disabled', 'Voc&ecirc; n&atilde;o pode excluir esse formul&aacute;rio porque voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Form_Copy_Disabled', 'Voc&ecirc; n&atilde;o pode copiar esse formul&aacute;rio porque voc&ecirc; n&atilde;o tem acesso.');

define('LNG_Preview_Form', 'Visualizar formul&aacute;rio');

define('LNG_CreateForm', 'Criar formul&aacute;rio para website');
define('LNG_CreateFormButton', 'Criar formul&aacute;rio para website');

define('LNG_CreateFormCancelButton', 'Tem certeza de que deseja cancelar a cria&ccedil;&atilde;o do novo formul&aacute;rio?');
define('LNG_CreateFormHeading', 'Nome do Formul&aacute;rio &amp; Tipo');

define('LNG_EditForm', 'Editar formul&aacute;rio do seu site');
define('LNG_EditFormIntro', 'Preencha o formul&aacute;rio abaixo para atualizar o formul&aacute;rio do site selecionado. Quando estiver pronto voc&ecirc;\ pode fazer o novo HTML para adicionar ao seu site.');
define('LNG_EditFormCancelButton', 'Tem certeza de que deseja cancelar a atualiza&ccedil;&atilde;o do seu formul&aacute;rio?');
define('LNG_EditFormHeading', 'Editar detalhes do formul&aacute;rio');

define('LNG_FormDetails', 'Detalhes do formul&aacute;rio');

define('LNG_NoSuchFormDesign', 'A estrutura deste formul&aacute;rio n&atilde;o existe. Por favor, tente novamente.');
define('LNG_NoSuchForm', 'Esse formul&aacute;rio n&atilde;o existe mais. Por favor, tente novamente.');

define('LNG_FormsManage', 'Exibir detalhes do formul&aacute;rio');

define('LNG_EnterFormName', 'Digite um nome para esse formul&aacute;rio.');

define('LNG_EnterSendFromName', 'Digite um nome para exibi&ccedil;&atilde;o no campo \'De\' ');
define('LNG_EnterSendFromEmail', 'Digite um e-mail para enviar os e-mails a partir do campo De (remetente).');
define('LNG_EnterConfirmSubject', 'Digite um assunto para o e-mail de confirmacao.');
define('LNG_EnterThanksSubject', 'Digite um assunto para o e-mail de agradecimento.');

define('LNG_FormName', 'Nome do formul&aacute;rio');

define('LNG_FormNameIsNotValid', 'Nome do formul&aacute;rio n&atilde;o &eacute; v&aacute;lido');
define('LNG_FormChooseList', 'Escolha as listas a incluir neste formul&aacute;rio');
define('LNG_UnableToCreateForm', 'N&atilde;o foi poss&iacute;vel criar o formul&aacute;rio');
define('LNG_FormCreated', 'O novo formul&aacute;rio foi criado com sucesso');

define('LNG_DeleteFormPrompt', 'Tem certeza de que deseja excluir este formulario?');

define('LNG_FormDeleteSuccess_One', 'O formul&aacute;rio selecionado foi exclu&iacute;do com sucesso. Certifique-se de remov&ecirc;-los de seus websites, pois deixar&aacute; de funcionar.');
define('LNG_FormDeleteSuccess_Many', '%s Formul&aacute;rio deletado com sucesso. Por favor, certifique-se de remov&ecirc;-los de seus websites.');
define('LNG_FormDeleteFail_One', 'Formul&aacute;rio n&atilde;o foi exclu&iacute;do com sucesso. Por favor, tente novamente.');
define('LNG_FormDeleteFail_Many', '%s formul&aacute;rio n&atilde;o foi exclu&iacute;do com sucesso. Por favor, tente novamente.');

define('LNG_ConfirmRemoveForms', 'Tem certeza de que deseja excluir os formularios selecionados?');
define('LNG_ChooseFormsToDelete', 'Por favor, em primeiro lugar escolha uma ou mais formul&aacute;rios.');
define('LNG_Delete_Form_Selected', 'Excluir selecionados');

define('LNG_HLP_FormName', 'Nome do formul&aacute;rio. essa op&ccedil;&atilde;o somente &eacute; exibida na &aacute;rea administrativa, n&atilde;o aparece em seu website.');

define('LNG_UnableToUpdateForm', 'N&atilde;o foi poss&iacute;vel atualizar o formul&aacute;rio');
define('LNG_FormUpdated', 'Formul&aacute;rio atualizado com sucesso');

define('LNG_NoForms', 'Nenhum formul&aacute;rio foi criado.%s');
define('LNG_NoForms_HasAccess', 'Clique no bot&atilde;o <em> Criar um Formul&aacute;rio para Website...</em>.');

define('LNG_FormCopySuccess', 'Formul&aacute;rio foi copiado com sucesso.');
define('LNG_FormCopyFail', 'Formul&aacute;rion&atilde;o foi copiado com sucesso');

define('LNG_SubscriberChooseFormat', 'Op&ccedil;&otilde;es de formato');
define('LNG_ForceHTML', 'HTML');
define('LNG_ForceText', 'Texto');

define('LNG_SubscriberChangeFormat', 'Alterar Formato');


define('LNG_FormType', 'Tipo de formul&aacute;rio');
define('LNG_FormType_Subscribe', 'Inscri&ccedil;&atilde;o');
define('LNG_FormType_Unsubscribe', 'Remo&ccedil;&atilde;o');
define('LNG_FormType_ModifyDetails', 'Modificar Detalhes');
define('LNG_FormType_SendToFriend', 'Enviar a um Amigo');

define('LNG_ContactForm', 'Detalhes dos novos contatos de Email');
define('LNG_HLP_ContactForm', 'Este formul&aacute;rio de inscri&ccedil;&atilde;o tamb&eacute;m ir&aacute; atuar como um formul&aacute;rio de contato. Voc&ecirc; receber&aacute; um e-mail com o conte&uacute;do do formul&aacute;rio depois de ter sido preenchido, o usu&aacute;rio ser&aacute; adicionado a sua lista e em seguida direcionado para a sua p&aacute;gina de agradecimento.<br/><br />Se o usu&aacute;rio j&aacute; estiver inscrito na sua lista, ele tamb&eacute;m ser&aacute; direcionado para a p&aacute;gina de agradecimento.');

define('LNG_UseCaptcha', 'Utilize formul&aacute;rio com seguran&ccedil;a CAPTCHA');

define('LNG_RequireConfirmation', 'Utilize confirmacao Dupla');
define('LNG_RequireConfirmationExplain', 'Sim, utilizar confirma&ccedil;&atilde;o dupla de e-mail');

define('LNG_ListsToInclude', 'Escolha a lista de contato');
define('LNG_HLP_IncludeLists', 'O usu&aacute;rio do seu site poder&aacute; se inscrever ou cancelar a inscri&ccedil;&atilde;o atrav&eacute;s deste formul&aacute;rio?');

define('LNG_FormDesign', 'Escolha um estilo para o formul&aacute;rio');
define('LNG_HLP_FormDesign', 'Isso lhe dar&aacute; uma id&eacute;ia de como o formul&aacute;rio ficar&aacute; no seu site. Caso queira voc&ecirc; pode modificar o c&oacute;digo HTML mais tarde.');

define('LNG_HLP_OrderCustomFields', 'Voc&ecirc; pode alterar a ordem que os campos personalizados aparecem no seu formul&aacute;rio.<br/>Para mover algo para cima ou para baixo, realce o nome do campo e clique na seta para cima ou para baixo.');
define('LNG_Email_Required_For_Form', 'Email (obrigat&oacute;rio)');

define('LNG_ChooseList_For_Form', 'Escolha a lista ');
define('LNG_ChooseCustomFieldsToInclude', 'Por favor, escolha os campos personalizados para incluir no seu formul&aacute;rio.');
define('LNG_ChooseCustomFieldToOrder', 'Por favor, escolha o campo personalizado que pretende voltar a pedir');

define('LNG_FormSubmit', 'Enviar');
define('LNG_FormClear', 'Limpar');

define('LNG_FormOptions', 'Op&ccedil;&otilde;es de Formul&aacute;rio ');

define('LNG_FormSendFromName', 'Enviar para o nome');
define('LNG_FormSendFromEmail', 'Enviar para o Email');
define('LNG_FormReplyToEmail', 'Email para resposta');
define('LNG_FormBounceEmail', ' e-mail para receber Bounce');

define('LNG_ConfirmSubject', 'Assunto do Email');

define('LNG_ConfirmPageHTML', 'P&aacute;gina de confirma&ccedil;&atilde;o');
define('LNG_ConfirmPageURL', '<b><i>ou</i></b> &nbsp;Confirme a URL da P&aacute;gina');

define('LNG_ConfirmTextVersion', 'Confirma&ccedil;&atilde;o de e-mail (Texto)');
define('LNG_ConfirmHTMLVersion', 'Confirma&ccedil;&atilde;o de e-mail (HTML)');

define('LNG_ThanksPageHTML', 'P&aacute;gina de agradecimento');
define('LNG_ThanksPageURL', '<b><i>ou</i></b>&nbsp; URL da sua p&aacute;gina de agradecimento');

define('LNG_ThanksSubject', 'Assunto do Email');
define('LNG_ThanksTextVersion', 'Email de agradecimento (Texto)');
define('LNG_ThanksHTMLVersion', 'Email de agradecimento (HTML)');

define('LNG_FormFormNameIsNotValid', 'Nome do formul&aacute;rio n&atilde;o &eacute; v&aacute;lido');
define('LNG_FormFormDesignIsNotValid', 'Estilo do formul&aacute;rio n&atilde;o &eacute; v&aacute;lido.');
define('LNG_FormFormTypeIsNotValid', 'Tipo de formul&aacute;rio n&atilde;o &eacute; v&aacute;lido.');
define('LNG_FormRequireConfirmationIsNotValid', 'Por favor escolha se este formul&aacute;rio requer confirma&ccedil;&atilde;o ou n&atilde;o.');

define('LNG_FormDisplayPageOptions', 'Op&ccedil;&atilde;o de exibi&ccedil;&atilde;o do Formul&aacute;rio');
define('LNG_FormConfirmEmailOptions', 'Op&ccedil;&otilde;es de confirma&ccedil;&atilde;o por email');
define('LNG_FormThanksEmailOptions', 'Op&ccedil;&otilde;es de e-mail de agradecimento');

define('LNG_FormThanksPageOptions', 'Op&ccedil;&otilde;es para p&aacute;gina de agradecimento');
define('LNG_FormErrorPageOptions', 'Op&ccedil;&otilde;es da p&aacute;gina de erro');
define('LNG_ErrorPageHTML', 'Para a p&aacute;gina de erro');
define('LNG_ErrorPageURL', '<b><i>ou</i></b>&nbsp; URL da p&aacute;gina de erro');

define('LNG_Form_ChooseFormat', 'Formato preferido');
define('LNG_Form_EmailAddress', 'Seu endere&ccedil;o de email');
define('LNG_GetHTML', 'Get&nbsp;HTML');

define('LNG_FormGetHTML_Heading', 'Adicionar Formul&aacute;rio ao seu site');
define('LNG_FormGetHTML_Introduction', 'O HTML do formul&aacute;rio do seu site &eacute; exibido abaixo. Para copi&aacute;-lo, clique na caixa de texto e pressione Ctrl + C no teclado.');
define('LNG_FormGetHTML_Options', 'Adicionar formul&aacute;rio ao seu site');
define('LNG_FormHTML', 'C&oacute;digo HTML do formul&aacute;rio');
define('LNG_HLP_FormHTML', 'Este &eacute; o c&oacute;digo para voc&ecirc; colocar no seu site, desta forma  seus visitantes poder&atilde;o se inscrever para receber suas campanhas de e-mail. Basta selecionar todo o c&oacute;digo, clique com o bot&atilde;o direito na caixa de texto, escolha copiar. Em seguida, cole o c&oacute;digo onde deseja exibir o formul&aacute;rio de inscri&ccedil;&atilde;o na sua p&aacute;gina web.');

/**
* Confirmation options.
*/
define('LNG_FormConfirmPage_Subscribe_HTML',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Sua inscri&ccedil;&atilde;o est&aacute; quase completa...</b><br><br>
		Uma mensagem foi enviada para o e-mail que voc&ecirc; digitou. Neste e-mail tem um link para confirma&ccedil;&atilde;o. Por favor, clique neste link para confirmar sua inscri&ccedil;&atilde;o.<br><br>
		Uma vez que voc&ecirc; fa&ccedil;a isso a sua assinatura esta completa.<br><br>
		<a href="javascript:history.back()">&laquo; Voltar</a>
	</div>
</div>
</body>
</html>');


define('LNG_FormConfirmPage_Subscribe_Subject', 'Confirme a sua inscri&ccedil;&atilde;o');

define('LNG_FormConfirmPage_Subscribe_Email_Text', "Obrigado por se inscrever para receber nossa newsletter. \n\nPara finalizar a sua inscri&ccedil;&atilde;o, por favor clique no link de confirma&ccedil;&atilde;o abaixo. Assim que fizer isso, sua inscri&ccedil;&atilde;o estar&aacute; completa.\n\n%%CONFIRMLINK%%\n\n");

define('LNG_FormConfirmPage_Subscribe_Email_HTML', "
<html>
<body style='font:12px tahoma'>
<b>Por favor, confirme a sua inscri&ccedil;&atilde;o</b>
<br><br>
Obrigado por se inscrever para receber nossa newsletter.<br><br>Para finalizar a sua inscri&ccedil;&atilde;o, por favor clique no link de confirma&ccedil;&atilde;o abaixo. Assim que fizer isso, sua inscri&ccedil;&atilde;o ser&aacute; completa.<br><br>
<a href='%%CONFIRMLINK%%' target='_blank'>Por favor, clique aqui para confirmar a sua inscri&ccedil;&atilde;o</a><br><br>ou copie e cole a seguinte da URL no seu navegador:<br>
%%CONFIRMLINK%%");

define('LNG_FormConfirmPage_Unubscribe_HTML', 'Por favor, confirme que voc&ecirc; deseja ser removido da lista.<br/>');
define('LNG_FormConfirmPage_Unsubscribe_Subject', 'Por favor, confirme que voc&ecirc; deseja cancelar a inscri&ccedil;&atilde;o');

/**
* Some form options are disabled.
*/
define('LNG_GetHTML_ModifyDetails_Disabled', 'Voc&ecirc; n&atilde;o pode modificar o c&oacute;digo HTML do formul&aacute;rio.');
define('LNG_GetHTML_ModifyDetails_Disabled_Alert', 'Voce nao pode modificar um formulario do seu site.');
define('LNG_GetHTML_SendFriend_Disabled', 'Voc&ecirc; n&atilde;o pode colocar um formul&aacute;rio Indique para um Amigo em seu site.\nPara utilizar este formul&aacute;rio, editar uma campanha de e-mail ou resposta autom&aacute;tica inclua um novo campo para o formul&aacute;rio.');
define('LNG_GetHTML_SendFriend_Disabled_Alert', 'Voce nao pode colocar um formulario INDIQUE PARA UM AMIGO em seu site.');

/**
* For modify details and send-to-friend forms, we have extra html editing options.
*/
define('LNG_FormEditHTMLOptions', 'Editar formul&aacute;rio HTML');
define('LNG_EditFormHTML', 'Editar formul&aacute;rio HTML');
define('LNG_HLP_EditFormHTML', 'Personalize o modo como a seu formul&aacute;rio parece, alterando o c&oacute;digo HTML padr&atilde;o.<br/><br/>Voc&ecirc; deve deixar a tag form, os nomes dos campos e os espa&ccedil;os reservados exatamente como eles s&atilde;o.');

define('LNG_FormHasBeenChanged', 'Aviso - o formul&aacute;rio foi alterado. Um novo c&oacute;digo HTML ser&aacute; gerado para este formul&aacute;rio.\nDeseja continuar?');

define('LNG_FormThanksPage_Subscribe_Subject', 'Sua inscri&ccedil;&atilde;o agora est&aacute; completa.');

/**
* These are used if the signup form is a contact form as well.
*/

define('LNG_FormThanksPage_Unsubscribe_Subject', 'Voc&ecirc; foi removido.');



/**
* Error page
*/

define('LNG_FormThanksPageHTML_Modify', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Suas altera&ccedil;&otilde;es foram completas com &ecirc;xito.</b><br><br>
		A altera&ccedil;&atilde;o dos seus dados foi completa com &ecirc;xito.
		<br><br>
	</div>
</div>
</body>
</html>
');


define('LNG_FormErrorPageHTML_Modify', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ocorreu um erro .</b><br><br>
		Ocorreram erro(s) ao tentar processar as informa&ccedil;&otilde;es:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Voltar</a>
	</div>
</div>
</body>
</html>
');


/**
* Send-to-Friend stuff.
*/

define('LNG_FormThanksPageHTML_SendFriend', '<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Seu e-mail foi enviado com sucesso.</b><br><br>
		Obrigado por ter encaminhado este e-mail. A mensagem foi enviada para o seu amigo.
	</div>
</div>
</body>
</html>');
define('LNG_FormErrorPageHTML_SendFriend', '<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ocorreu um erro</b><br><br>
		Ocorreu um erro na tentativa de enviar este e-mail para seu amigo:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Voltar</a>
	</div>
</div>
</body>
</html>');
define('LNG_SendFriendTextVersion', 'Cabe&ccedil;alho do e-mail (Texto)');
define('LNG_SendFriendHTMLVersion', 'Cabe&ccedil;alho do e-mail (HTML)');


/**
* Javascript/customfield stuff.
*/
define('LNG_Form_Javascript_Field', 'Digite um valor para o campo %s');
define('LNG_Form_Javascript_Field_Choose', 'Por favor, escolha uma op&ccedil;&atilde;o para o campo %s');
define('LNG_Form_Javascript_Field_Choose_Multiple', 'Por favor, escolha uma ou mais op&ccedil;&otilde;es para o campo %s');
define('LNG_Form_Javascript_Field_NumberCheck', 'Digite um valor num&eacute;rico para o campo %s');
define('LNG_Form_Javascript_EnterEmailAddress', 'Digite seu e-mail.');
define('LNG_Form_Javascript_ChooseFormat', 'Escolha um formato para receber seus Emails');
define('LNG_Form_Javascript_EnterCaptchaAnswer', 'Digite o c&oacute;digo de seguran&ccedil;a exibido');
define('LNG_Form_EnterCaptcha', 'Digite o c&oacute;digo de seguran&ccedil;a exibido');

/**
* Buttons etc for form designs.
*/
define('LNG_Form_Subscribe_Button', 'Inscri&ccedil;&atilde;o');

define('LNG_Form_Unsubscribe_Button', 'Remo&ccedil;&atilde;o');

define('LNG_Form_ModifyDetails_Button', 'Atualize seus dados');

define('LNG_Form_SendFriend_Button', 'Envie para um amigo');
define('LNG_Form_SendFriend_YourName', 'Seu Nome : ');
define('LNG_Form_SendFriend_YourEmailAddress', 'Seu endere&ccedil;o de e-mail : ');
define('LNG_Form_SendFriend_FriendsName', 'Nome do seu amigo : ');
define('LNG_Form_SendFriend_FriendsEmailAddress', 'Email do seu amigo : ');
define('LNG_Form_SendFriend_Introduction', 'Ola, eu achei muito interessante esta newsletter eu achei que voc&ecirc; gostaria de ler.');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_FormContentsHaveChanged', 'Aviso - o formul&aacute;rio foi alterado. Um novo c&oacute;digo HTML foi gerado para este formul&aacute;rio. <a href="index.php?Page=Forms&Action=View&id=%d" target="_blank">Exibir antigo c&oacute;digo html.</a>');

/**
**************************
* Changed/added in NX 1.3
**************************
*/

define('LNG_HLP_ErrorPageHTML', 'Digite o conte&uacute;do que dever&aacute; aparecer na P&aacute;gina de erro.');

define('LNG_FormSendFriendPage_Email_HTML', '<div style="padding: 5px; border: 1px solid #EFECBA; background-color: #FBFAE7; text-align: center; font-family: tahoma; font-size: 11px;">Este e-mail foi enviado a voc&ecirc; por %%REFERRER_EMAIL%%.</div>');
define('LNG_FormSendFriendPage_Email_Text', "This e-mail was forwarded to you by %%REFERRER_EMAIL%%.");

define('LNG_ErrorPageHTML_Modify', LNG_ErrorPageHTML);
define('LNG_HLP_ErrorPageHTML_Modify', 'Esta &eacute; a p&aacute;gina HTML que &eacute; exibida quando ocorre um erro. Voc&ecirc; pode modifica-la usando um
editor HTML padr&atilde;o ou deixar como est&aacute; \\\'Error\\\' page.');

define('LNG_ErrorPageHTML_SendFriend', LNG_ErrorPageHTML);

define('LNG_ErrorPageHTML_Subscribe', LNG_ErrorPageHTML);

define('LNG_FormThanksPageHTML_Unsubscribe',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 30px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
	margin-top: 10px;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		Sorry to see you go!
	</div>
</div>
</body>
</html>
');


/**
***************************
* Changed/Added in NX 1.3.2
***************************
*/
define('LNG_ErrorPageHTML_Unsubscribe', 'Error Page HTML');


/**
**************************
* Changed/added in NX 1.5
**************************
*/

define('LNG_EnterReplyToEmail', 'Digite um e-mail para o contato responder para.');
define('LNG_EnterBouceEmail', 'Digite um e-mail para os casos de BOUNCE.');

define('LNG_HLP_SubscriberChooseFormat', 'Voc&ecirc; gostaria de dar os seus contatos a op&ccedil;&atilde;o de escolher qual formato que ir&atilde;o receber seus Emails?');
define('LNG_ChooseFormat', 'Permitir contato escolher');

define('LNG_HLP_SubscriberChangeFormat', 'Voc&ecirc; gostaria que os seus contatos possam alterar o tipo de e-mails que recebem? Eles poder&atilde;o alterar de html para texto ou de texto para html.');
define('LNG_SubscriberChangeFormatExplain', 'Sim, permitir que o contato altere o formato de e-mail.');

define('LNG_HLP_RequireConfirmation', 'Voc&ecirc; deseja que o contato receba uma confirma&ccedil;&atilde;o por e-mail com um link de confirma&ccedil;&atilde;o antes que o e-mail seja adicionado ou removido de sua lista?<br /><br />Double opt-in &eacute; o padr&atilde;o do mercado, por isso voc&ecirc;\\\deve ter certeza que deseja assinalar esta caixa.');

define('LNG_HLP_SendThanks', 'Se voc&ecirc; assinalar esta caixa, um e-mail de agradecimento ser&aacute; enviado para o contato assim que o formul&aacute;rio for enviado. Voc&ecirc; pode personalizar o conte&uacute;do do e-mail de agradecimento na pr&oacute;xima p&aacute;gina.');
define('LNG_SendThanksExplain', 'Sim, enviar e-mail de agradecimento');

define('LNG_SubscriberFormat_For_Form', 'Formato do Contato');

define('LNG_HLP_ConfirmSubject', 'Assunto do e-mail de confirma&ccedil;&atilde;o enviado para novos contatos.');

define('LNG_HLP_ThanksPageHTML', 'Esta &eacute; a p&aacute;gina HTML que &eacute; exibida quando um contato completa o processo de inscri&ccedil;&atilde;o. Voc&ecirc; pode modificar esta usando HTML ou deixar a p&aacute;gina de \\\'Agradecimento\\\' como est&aacute;.');

define('LNG_HLP_ThanksPageURL', 'Se voc&ecirc; j&aacute; fez o upload da p&aacute;gina de agradecimento, digite a URL para esse arquivo e os contatos ser&atilde;o direcionados para esta p&aacute;gina.');

define('LNG_HLP_ThanksSubject', 'Assunto do e-mail de confirma&ccedil;&atilde;o enviado para novos contatos.');

define('LNG_FormSendThanksIsNotValid', 'Por favor escolha se esta forma exige que um e-mail de agradecimento seja enviado para seus contatos.');
define('LNG_FormSubscriberChooseFormatIsNotValid', 'Por favor, escolha se este formul&aacute;rio permite que o contato escolha o formato do e-mail.');

define('LNG_HLP_ErrorPageURL', 'Se voc&ecirc; j&aacute; fez o upload da sua p&aacute;gina de erro, digite a URL para esse arquivo e os contatos ser&atilde;o direcionados para essa p&aacute;gina.');

define('LNG_SendFriendPageIntro', 'O formul&aacute;rio Indique a um Amigo &eacute; usado para permitir que contatos possam indicar sua newsletter para seus amigos. Este formul&aacute;rio s&oacute; poder&aacute; ser inclu&iacute;do no interior da sua newsletter e &eacute; gerado automaticamente quando um usu&aacute;rio clica nele.');

define('LNG_HLP_SendFriendTextVersion', 'Este texto ser&aacute; colocado no in&iacute;cio do contato que est&aacute; encaminhando o e-mail.<br/><br/>Voc&ecirc; deve incluir no formul&aacute;rio um link para assinatura em seu web site para que os usu&aacute;rios possam inscrever-se quando quiserem.');

define('LNG_HLP_SendFriendHTMLVersion', 'Esse HTML ser&aacute; colocado no in&iacute;cio do e-mail que est&aacute; encaminhando o contato.<br/><br/>Voc&ecirc; deve incluir no formul&aacute;rio um link para assinatura em seu web site para que os usu&aacute;rios possam inscrever-se quando quiserem.');

define('LNG_HLP_ConfirmPageHTML_Subscribe', 'Esta &eacute; a p&aacute;gina HTML &eacute; exibida ao usu&aacute;rio para que ele saiba que &eacute; necess&aacute;ro confirmar sua inscri&ccedil;&atilde;o atrav&eacute;s do e-mail de confirma&ccedil;&atilde;o. Voc&ecirc; pode modificar essa p&aacute;gina usando HTML ou deixar esta p&aacute;gina de \\\'Confirma&ccedil;&atilde;o\\\' como esta.');
define('LNG_HLP_ConfirmTextVersion_Subscribe', 'Esta &eacute; a p&aacute;gina TEXTO &eacute; exibida ao usu&aacute;rio para que ele saiba que &eacute; necess&aacute;ro confirmar sua inscri&ccedil;&atilde;o atrav&eacute;s do e-mail de confirma&ccedil;&atilde;o. Voc&ecirc; pode modificar essa p&aacute;gina usando padr&atilde;o TEXTO ou deixar esta p&aacute;gina de \\\'Confirma&ccedil;&atilde;o\\\' como esta.');
define('LNG_HLP_ConfirmHTMLVersion_Subscribe', 'Esta &eacute; a vers&atilde;o HTML do e-mail exibida ao usu&aacute;rio dizendo que &eacute; necess&aacute;ro confirmar sua inscri&ccedil;&atilde;o atrav&eacute;s do e-mail de confirma&ccedil;&atilde;o. Voc&ecirc; pode modificar esse e-mail usando HTML ou deixar esse e-mail de \\\'Confirma&ccedil;&atilde;o\\\' como esta.\\\' e-mail.');
define('LNG_HLP_ThanksTextVersion_Subscribe', 'Esta &eacute; a vers&atilde;o TEXTO do e-mail exibida ao usu&aacute;rio dizendo que &eacute; necess&aacute;ro confirmar sua inscri&ccedil;&atilde;o atrav&eacute;s do e-mail de confirma&ccedil;&atilde;o. Voc&ecirc; pode modificar esse e-mail usando padr&atilde;o TEXTO ou deixar esse e-mail de \\\'Confirma&ccedil;&atilde;o\\\' como esta.\\\' e-mail.');
Define('LNG_HLP_ThanksHTMLVersion_Subscribe', 'Esta &eacute; a vers&atilde;o HTML do e-mail que ser&aacute; enviado para o contato agradecendo-lhes por sua inscri&ccedil;&atilde;o. Voc&ecirc; pode modificar esse e-mail usando um editor padr&atilde;o HTML ou deixar este e-mail \\\'Agradecimento\\\' como esta.');

define('LNG_HLP_ErrorPageHTML_SendFriend', 'Este conte&uacute;do &eacute; o que os seus contatos ir&atilde;o ver quando ocorrer um erro ao transmitir este boletim para seus amigos.');

define('LNG_HLP_ErrorPageHTML_Subscribe', 'Este conte&uacute;do &eacute; o que os seus contatos ir&atilde;o ver quando ocorrer um erro durante o processo de inscri&ccedil;&atilde;o. Por exemplo, usu&aacute;rio j&aacute; est&aacute; inscrito na lista de contatos.');

define('LNG_Help_FormsManage', 'Os formul&aacute;rios para website podem ser colocados em seu site para cadastrar novos contatos, alterar informa&ccedil;&otilde;es dos contatos j&aacute; cadastrados, ou mesmo cancelar uma inscri&ccedil;&atilde;o. <a href="javascript:LaunchHelp(809);">Saiba mais.</a>');

define('LNG_CreateFormIntro', 'Preencha o formul&aacute;rio abaixo para fazer  inscri&ccedil;&atilde;o, remo&ccedil;&atilde;o ou modificar o formul&aacute;rio Indique para um Amigo do seu site.');

define('LNG_ConfirmPageIntro', 'O quadro abaixo mostra as op&ccedil;&otilde;es que voc&ecirc; selecionou para esta formul&aacute;rio. Preencha o formul&aacute;rio e clique <em>Pr&oacute;ximo&gt;&gt;</em> para criar o formul&aacute;rio.');
define('LNG_ThanksPageIntro', 'Este passo permite que voc&ecirc; crie o e-mail de agradecimento e p&aacute;ginas HTML para seus contatos tomem ci&ecirc;ncia da inscri&ccedil;&atilde;o.');

define('LNG_FinalPageIntro', 'Se algo der errado durante a inscri&ccedil;&atilde;o do contato ser&atilde;o exibidas as op&ccedil;&otilde;es que voc&ecirc; escolher no formul&aacute;rio abaixo.');

define('LNG_ThanksPageIntro_NoEmail', 'Este passo permite que voc&ecirc; crie o e-mail de agradecimento e p&aacute;ginas HTML para seus contatos tomem ci&ecirc;ncia da inscri&ccedil;&atilde;o.');

define('LNG_ThanksPageIntro_Edit', 'Este passo permite configurar a p&aacute;gina de agradecimento e, opcionalmente, o e-mail de agradecimento atrav&eacute;s das op&ccedil;&otilde;es abaixo. essas op&ccedil;&otilde;es somente ser&atilde;o exibidas aos contatos depois de terem aderido &agrave; sua lista.');

define('LNG_ThanksPageIntro_Edit_NoEmail', 'Este passo permite que voc&ecirc; edite a p&aacute;gina HTML de agradecimento, permitindo que o contato fique ciente da sua inscri&ccedil;&atilde;o.');

define('LNG_HLP_ErrorPageHTML_Unsubscribe', 'Esta &eacute; a p&aacute;gina HTML que &eacute; exibida quando um contato encontrar um erro durante o processo de inscri&ccedil;&atilde;o. Voc&ecirc; pode modificar esta usando HTML ou deixar est&aacute; p&aacute;gina de\\\'Erro\\\' como esta.');

define('LNG_ChooseFormLists', 'Por favor, selecione algumas listas de contatos para incluir neste formul&aacute;rio.');

define('LNG_IncludeLists', 'Lista de contatos/Personalizar campos:');

define('LNG_ChooseCustomFields', 'Campos personalizados para \'%s\' Lista de contatos');

define('LNG_FormIncludeListsIsNotValid', 'Por favor, escolha algumas listas de contatos para utilizar este formul&aacute;rio.');

define('LNG_FormConfirmPage_Unsubscribe_Email_Text', "Por favor, confirme que voc&ecirc; deseja cancelar a inscri&ccedil;&atilde;o clicando no link abaixo:\n\n%BASIC:CONFIRMUNSUBLINK%\n\nFa&ccedil;a isso antes de remov&ecirc;-lo da lista de contatos.");

define('LNG_FormDisplaySendFriendOptions', 'Cabe&ccedil;alhos de e-mail enviado');
/**
* Thanks e-mail options.
*/
define('LNG_FormThanksPage_Subscribe_HTML', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Sua inscri&ccedil;&atilde;o est&aacute; agora completa.</b><br><br>
		Obrigado por se inscrever na nossa lista de contatos. Sua inscri&ccedil;&atilde;o est&aacute; agora completa.<br><br>
	</div>
</div>
</body>
</html>');

define('LNG_FormThanksPage_Subscribe_Email_Text', "Obrigado por se inscrever na nossa lista de contatos.\n\nSua inscri&ccedil;&atilde;o est&aacute; agora completa. Se voc&ecirc; tiver alguma d&uacute;vida, pode contactar-nos respondendo a este e-mail.");

define('LNG_FormThanksPage_Subscribe_Email_HTML', "
<html>
<body style='font: 12px tahoma'>
<b>Sua inscri&ccedil;&atilde;o est&aacute; completa</b><br><br>
Obrigado por increver-se na nossa lista de contatos. Sua inscri&ccedil;&atilde;o  agora est&aacute; completa. Se voc&ecirc; tiver alguma d&uacute;vida, pode contactar-nos respondendo a este e-mail.
</body>
</html>
");

define('LNG_FormThanksPage_Subscribe_Subject_Contact', 'Obrigado por se inscrever na nossa lista de contatos');

define('LNG_FormThanksPage_Unsubscribe_Email_Text', "Ola,\nvoc&ecirc; foi removido da nossa lista de contatos.\nSentimos muito em n&atilde;o t&ecirc;-lo mais conosco!");

/**
* Thanks page options.
*/
define('LNG_FormThanksPageHTML_Subscribe', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Sua inscri&ccedil;&atilde;o est&aacute; agora completo.</b><br><br>
		Obrigado por se inscrever na nossa lista de contatos. Sua inscri&ccedil;&atilde;o agora est&aacute; completa.<br><br>
	</div>
</div>
</body>
</html>
');


define('LNG_FormErrorPageHTML_Subscribe',
'<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ocorreu um erro.</b><br><br>
		Ocorreu um erro durante a tentativa de inscri&ccedil;&atilde;o na nossa lista de contatos:<br>
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Voltar</a>
	</div>
</div>
</body>
</html>');


define('LNG_FormErrorPageHTML_Unsubscribe',
'<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ocorreu um erro.</b><br><br>
		Ocorreu um erro ao tentar fazer a remo&ccedil;&atilde;o da nossa lista de contatos:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Voltar</a>
	</div>
</div>
</body>
</html>
');

define('LNG_Form_Javascript_ChooseLists', 'Por favor, escolha uma lista de contato para se inscrever');

define('LNG_FormConfirmPage_Unsubscribe_HTML',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>O seu pedido de remo&ccedil;&atilde;o da nossa lista de contatos est&aacute; quase completa...</b><br><br>
		Por favor, confirme o seu pedido de remo&ccedil;&atilde;o nesta lista de contatos.<br><br>Voc&ecirc; receber&aacute; em breve um e-mail com um link para confirmar sua solicita&ccedil;&atilde;o. Por favor, clique neste link para confirmar a remo&ccedil;&atilde;o de nossa lista de contatos.
	</div>
</div>
</body>
</html>');

define('LNG_FormConfirmPage_Unsubscribe_Email_HTML',
"
<html>
<body style='font:12px tahoma'>
Por favor, confirme que voc&ecirc; deseja cancelar a inscri&ccedil;&atilde;o clicando no link abaixo.<br><br>
<a href='%%CONFIRMLINK%%' target='_blank'>Por favor, clique aqui para confirmar que deseja sair desta lista de contatos</a><br><br>ou copie e cole a URL seguinte no seu navegador:<br>
%%CONFIRMLINK%%<br><br>
Fa&ccedil;a isso antes de remov&ecirc;-lo da lista de contatos.
</body></html>"
);

define('LNG_FormThanksPage_Unsubscribe_Email_HTML', "
<html>
<body style='font:12px tahoma'>
OLa,<br/>Voc&ecirc; foi removido da nossa lista de contatos.<br/>Sentimos muito em n&atilde;o t&ecirc;-lo mais conosco!</body></html>");

define('LNG_FormThanksPage_Subscribe_Email_Text_Contact', "Obrigado por se inscrever na nossa lista de contatos e/ou ter entrado em contato.\n\nSe tiver alguma d&uacute;vida entre em contato respondendo a este e-mail.");

define('LNG_FormThanksPage_Subscribe_Email_HTML_Contact',
"
<html>
<body style='font:12px tahoma'>
Obrigado por se inscrever na nossa lista de contatos e/ou ter entrado em contato.<br><br>Se tiver algum problema entre em contato respondendo a este e-mail.
</body>
</html>
");


define('LNG_HLP_FormType', 'Escolha o tipo de formul&aacute;rio voc&ecirc; estar&aacute; criando. <br><br><i>Inscri&ccedil;&atilde;o</i> este formul&aacute;rio permite que seus visitantes se inscrevam em lista de contatos.<br><br><i>Remo&ccedil;&atilde;o</i> Esse formul&aacute;rio permite aos visitantes cancelar a inscri&ccedil;&atilde;o da sua lista de contatos. &eacute; opcional, um link de remo&ccedil;&atilde;o pode ser adicionado ao seu e-mail automaticamente.<br><br><i>Modificar Detalhes</i> Este formul&aacute;rio permite alterar as informa&ccedil;&otilde;es de seus contatos inscritos.<br><br>Finalmente, <i>Indique a um Amigo</i> Este formul&aacute;rio permite que usu&aacute;rios compartilhem a sua campanha de e-mail com os seus amigos.');

define('LNG_HLP_ConfirmPageHTML_Unsubscribe', 'Esta &eacute; a p&aacute;gina seus contatos ver&atilde;o ap&oacute;s preencher o formul&aacute;rio e solicitar pelo site para ser removido da sua lista de contatos.');

define('LNG_WhatAreTheForms', '<a href="javascript:LaunchHelp(809);">Quais s&atilde;o os diferentes tipos de formul&aacute;rios Web e como us&aacute;-los.</a>');

// these few are needed for the 'heading' of the helptip(s).
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_ConfirmPageHTML_Subscribe', LNG_ConfirmPageHTML);
define('LNG_ConfirmTextVersion_Subscribe', LNG_ConfirmTextVersion);
define('LNG_ConfirmHTMLVersion_Subscribe', LNG_ConfirmHTMLVersion);
define('LNG_ThanksTextVersion_Subscribe', LNG_ThanksTextVersion);
define('LNG_ThanksHTMLVersion_Subscribe', LNG_ThanksHTMLVersion);

// these few are needed for the 'heading' of the helptip(s).
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_ConfirmPageHTML_Unsubscribe', LNG_ConfirmPageHTML);
define('LNG_ConfirmTextVersion_Unsubscribe', LNG_ConfirmTextVersion);
define('LNG_ConfirmHTMLVersion_Unsubscribe', LNG_ConfirmHTMLVersion);
define('LNG_ThanksTextVersion_Unsubscribe', LNG_ThanksTextVersion);
define('LNG_ThanksHTMLVersion_Unsubscribe', LNG_ThanksHTMLVersion);

// make the helptips the same as the subscribe ones for now.
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_HLP_ConfirmTextVersion_Unsubscribe', LNG_HLP_ConfirmTextVersion_Subscribe);
define('LNG_HLP_ConfirmHTMLVersion_Unsubscribe', LNG_HLP_ConfirmHTMLVersion_Subscribe);
define('LNG_HLP_ThanksTextVersion_Unsubscribe', LNG_HLP_ThanksTextVersion_Subscribe);
Define('LNG_HLP_ThanksHTMLVersion_Unsubscribe', LNG_HLP_ThanksHTMLVersion_Subscribe);

define('LNG_HLP_UseCaptcha', 'Captcha (acronimo para \\\'Teste Publico Automatizado de Computadores e Humanos\\\') &eacute; um tipo de desafio usado para determinar se o usu&aacute;rio &eacute; ou n&atilde;o humano. Isto ajuda a prevenir o preenchimento de formul&aacute;rios de forma autom&aacute;tica por programas. Uma vez preenchido, o formul&aacute;rio vai pedir um \\\'c&oacute;digo de seguran&ccedil;a\\\' atrav&eacute;s de uma imagem para ser digitada antes do envio do formul&aacute;rio pelo website. <br> <br> Se voc&ecirc; est&aacute; colocando o seu formul&aacute;rio em um dom&iacute;nio diferente do utilizado para a aplica&ccedil;&atilde;o seus contatos ter&atilde;o sempre que preencher o formul&aacute;rio digitando o c&oacute;digo de seguran&ccedil;a, por exemplo, nos navegadores Safari, em virtude de n&atilde;o permitir que cookies de terceiros possam ser definidos como padr&atilde;o.');

define('LNG_FormDoesntExist', 'O formul&aacute;rio do website que voc&ecirc; est&aacute; tentando editar n&atilde;o existe. Por favor, tente novamente.');

define('LNG_FormCustomFieldSelection', 'Escolha a lista(s) que voc&ecirc; deseja adicionar ou remover da contatos e quais os campos personalizados para incluir no seu formul&aacute;rio. <a href="#" onClick="LaunchHelp(840); return false;">Saiba mais</a>.');

define('LNG_FormCustomFieldSortExplain', 'Arraste e solte para reorganizar a ordem na qual os campos ser&atilde;o exibidos no formul&aacute;rio');

define('LNG_ContactFormExplain', 'Sim, me envie um e-mail com uma c&oacute;pia dos contatos\detalhes ');
define('LNG_UseCaptchaExplain', 'Sim, utilizar c&oacute;digo de seguran&ccedil;a para validar o formul&aacute;rio(recomendado)');
define('LNG_SendThanks', 'Enviar &quot;Obrigado&quot; Email?');
define('LNG_OrderCustomFields', 'Mudar ordem do campo (Arraste e Solte):');
define('LNG_PreviewThisDesign', 'Visualizar Design');
define('LNG_FormName_Hint', 'O nome do formul&aacute;rio &eacute; exibido somente no painel de controle');
define('LNG_NameThisForm', 'Nome deste formul&aacute;rio');
define('LNG_ChooseAFormType', 'Escolha um tipo de formul&aacute;rio');
define('LNG_FormAdvancedOptions', 'Op&ccedil;&otilde;es avan&ccedil;adas');
define('LNG_ShowContentBelow', 'Permite personalizar o que &eacute; exibido na p&aacute;gina');
define('LNG_TakeSubscriberToAURL', 'Conduza o assinante para um endere&ccedil;o de Web site existente');
define('LNG_InsertACustomField', 'Inserir um campo personalizado...');


/**
****************************
* Changed/added in IEM 5.0.2
****************************
*/
define('LNG_FormsNoLists', 'Nenhuma lista de contatos criada.%s');
define('LNG_FormsNoLists_HasAccess', ' Clique em <em>' . LNG_CreateListButton . '</em> para criar uma agora.');
define('LNG_FormsNoLists_NoAccess', ' Por favor, entre em contato com o administrador do sistema.');

/**
 * Added in 6.0.0
 */
define('LNG_UseCaptchaNoGd', 'Biblioteca PHP-GD n&atilde;o encontrada. para usar CAPTCHA\'s em seus formul&aacute;rios voc&ecirc; precisa da mesma instalada em seu servidor.');