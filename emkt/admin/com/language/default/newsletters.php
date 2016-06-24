<?php
/**
* Language file variables for the newsletters area. (Now referred to as e-mail campaigns)
*
* @see GetLang
*
* @version     $Id: newsletters.php,v 1.31 2008/01/07 06:54:01 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the newsletters area... Please backup before you start!
*/
define('LNG_CreateNewsletterCancelButton', 'Tem certeza de que deseja cancelar a cria&ccedil;&atilde;o da nova campanha por Email?');
define('LNG_CreateNewsletterHeading', 'Detalhes da Campanha');

define('LNG_CreateNewsletterIntro_Step2', 'Utilize o formul&aacute;rio abaixo para criar sua campanha de e-mail. Voc&ecirc; tamb&eacute;m pode verificar seu e-mail cont&eacute;m palavras-chave de spam e verificar como ele &eacute; exibido em diferentes clientes de e-mail.');
define('LNG_Newsletter_Details', 'Detalhes campanha por Email');

define('LNG_EditNewsletterIntro', 'Preencha o formul&aacute;rio abaixo para atualizar a campanha por e-mail.');
define('LNG_EditNewsletterCancelButton', 'Tem certeza de que deseja cancelar a atualiza&ccedil;&atilde;o desta campanha por Email?');
define('LNG_EditNewsletterHeading', 'Detalhes da Campanha');

define('LNG_EditNewsletterIntro_Step2', 'Utilize o formul&aacute;rio abaixo para criar sua campanha de e-mail marketing. Voc&ecirc; tamb&eacute;m pode verificar se seu e-mail cont&eacute;m palavras-chave que podem classificar sua mensagem como SPAM e verificar como a mensagem ser&aacute; exibida em diferentes clientes de e-mail.');

define('LNG_EnterNewsletterName', 'Digite um nome para sua campanha de e-mail.');

define('LNG_NewsletterName', 'Nome da Campanha');

define('LNG_NewsletterNameIsNotValid', 'O nome da campanha n&atilde;o &eacute; v&aacute;lido');
define('LNG_UnableToCreateNewsletter', 'N&atilde;o &eacute; poss&iacute;vel criar essa campanha de Email');

define('LNG_HLP_NewsletterName', 'Nome da campanha de e-mail. &Eacute; usada apenas para sua refer&ecirc;ncia e n&atilde;o ser&aacute; inclu&iacute;da na sua mensagem quando for enviada.');

define('LNG_UnableToUpdateNewsletter', 'N&atilde;o foi poss&iacute;vel atualizar a campanha de Email');

define('LNG_NoNewslettersToDelete', 'Nenhuma campanha de e-mail foi selecionada. Por favor, tente novamente.');
define('LNG_Newsletter_NotDeleted', 'N&atilde;o foi poss&iacute;vel excluir a campanha de e-mail selecionada');
define('LNG_Newsletters_NotDeleted', 'N&atilde;o &eacute; poss&iacute;vel excluir a campanha de e-mail %s selecionada');
define('LNG_Newsletter_Deleted', '1 campanha de e-mail foi exclu&iacute;da com sucesso');
define('LNG_Newsletters_Deleted', '%s campanha de e-mail foi exclu&iacute;da com sucesso');

define('LNG_Newsletter_NotDeleted_SendInProgress', 'N&atilde;o foi poss&iacute;vel excluir a campanha de e-mail \'%s\' - ela est&aacute; sendo enviada.');
define('LNG_Newsletters_NotDeleted_SendInProgress', 'N&atilde;o &eacute; poss&iacute;vel excluir as seguintes campanhas de e-mail - \'%s\' - ela est&atilde;o sendo enviadas.');

define('LNG_NoNewslettersToAction', LNG_NoNewslettersToDelete);
define('LNG_InvalidNewsletterAction', 'A&ccedil;&atilde;o inv&aacute;lida. Por favor, tente novamente.');

define('LNG_Newsletter_NotApproved', 'N&atilde;o &eacute; poss&iacute;vel aprovar a campanha de e-mail selecionada');
define('LNG_Newsletters_NotApproved', 'N&atilde;o &eacute; poss&iacute;vel aprovar a campanhas de e-mail %s selecionada');
define('LNG_Newsletter_Approved', '1 campanha de e-mail foi ativada com sucesso');
define('LNG_Newsletters_Approved', '%s campanha de e-mail foram ativadas com sucesso');

define('LNG_Newsletter_NotDisapproved', 'N&atilde;o foi poss&iacute;vel desativar a campanha de e-mail selecionada');
define('LNG_Newsletters_NotDisapproved', 'N&atilde;o foi poss&iacute;vel desativar %s campanhas de e-mail selecionadas');
define('LNG_Newsletter_Disapproved', '1 campanha de e-mail foi desativada com sucesso');
define('LNG_Newsletters_Disapproved', '%s campanhas de e-mail foram desativados com sucesso');

define('LNG_Newsletter_NotArchived', 'N&atilde;o &eacute; poss&iacute;vel arquivar a campanha de e-mail selecionada');
define('LNG_Newsletters_NotArchived', '&eacute; poss&iacute;vel arquivar %s campanhas de e-mail selecionadas');
define('LNG_Newsletter_Archived', '1 campanha de e-mail foi arquivada com sucesso');
define('LNG_Newsletters_Archived', '%s campanhas de e-mail foram arquivadas com sucesso');

define('LNG_Newsletter_NotUnarchived', 'N&atilde;o foi desarquivar a campanha de e-mail selecionada');
define('LNG_Newsletters_NotUnarchived', '&atilde;o foi desarquivar a %s campanha de e-mail selecionada');
define('LNG_Newsletter_Unarchived', '1 campanha de e-mail foi desarquivada com sucesso');
define('LNG_Newsletters_Unarchived', '%s campanha de e-mail foi desarquivada com sucesso');

define('LNG_NewsletterFormat', 'Formato da Campanha de Email');
define('LNG_NewsletterContent', 'Digite o conte&uacute;do da campanha');

define('LNG_NewsletterCopySuccess', 'Campanha de e-mail foi copiada com sucesso.');
define('LNG_NewsletterCopyFail', 'Campanha de e-mail n&atilde;o foi copiada com sucesso.');

// newslettersubject is in language.php
define('LNG_PleaseEnterNewsletterSubject', 'Digite o assunto da campanha por e-mail.');

define('LNG_Newsletter_Send_Disabled_Inactive', 'Voc&ecirc; n&atilde;o pode enviar essa campanha de e-mail porque ela est&aacute; inativa.');
define('LNG_Newsletter_Send_Disabled', 'Voc&ecirc; n&atilde;o pode enviar essa campanha por Email, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Newsletter_Edit_Disabled', 'Voc&ecirc; n&atilde;o pode editar essa campanha por Email, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Newsletter_Copy_Disabled', 'Voc&ecirc; n&atilde;o pode copiar esta campanha por Email, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Newsletter_Delete_Disabled', 'Voc&ecirc; n&atilde;o pode excluir esta campanha por Email, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Newsletter_Delete_Disabled_SendInProgress', 'Voc&ecirc; n&atilde;o pode excluir uma campanha de Email, enquanto ela est&aacute; sendo enviado.');

define('LNG_Archive', 'Arquivo');

define('LNG_DeleteNewsletterPrompt', 'Tem certeza de que deseja excluir esta campanha de Email?');

define('LNG_ArchiveNewsletters', 'Arquivar');
define('LNG_UnarchiveNewsletters', 'Desarquivar');
define('LNG_ApproveNewsletters', 'Ativar');
define('LNG_DisapproveNewsletters', 'desativar');

define('LNG_Newsletter_Title_Enable', 'Habilitar esta campanha de Email');
define('LNG_Newsletter_Title_Disable', 'Desabilitar esta campanha de Email');

define('LNG_Newsletter_Title_Archive_Enable', 'Habilitar arquivamento desta campanha de Email');
define('LNG_Newsletter_Title_Archive_Disable', 'Desabilitar arquivamento desta campanha de Email');

define('LNG_NewsletterArchive', 'Arquivar campanha de Email');
define('LNG_NewsletterArchiveExplain', 'Sim, arquivar esta campanha de Email');

define('LNG_NewsletterIsActive', 'Ativar campanha por Email');
define('LNG_NewsletterIsActiveExplain', 'Sim, ativar esta campanha de Email');

define('LNG_NewsletterCannotBeInactiveAndArchive', 'Este e-mail n&atilde;o ser&aacute; inclu&iacute;do no seu arquivo porque ele foi desativado. Depois que ele for reativado ele ser&aacute; inclu&iacute;do no seu arquivo.');

define('LNG_UnableToLoadNewsletter', 'N&atilde;o foi poss&iacute;vel carregar a campanha de e-mail. Por favor, tente novamente.');

define('LNG_NewsletterFile', 'Arquivo Campanha por Email');
define('LNG_HLP_NewsletterFile', 'Fazer upload de um arquivo html do seu computador para usar como sua campanha de Email');
define('LNG_UploadNewsletter', 'Upload');
define('LNG_NewsletterFileEmptyAlert', 'Por favor, escolha um arquivo do seu computador antes de tentar enviar.');
define('LNG_NewsletterFileEmpty', 'Por favor, escolha um arquivo do seu computador antes de tentar carreg&aacute;-lo.');

define('LNG_NewsletterURL', 'URL da Campanha de Email');
define('LNG_HLP_NewsletterURL', 'Importar uma campanha de e-mail a partir de uma url');
define('LNG_NewsletterURLEmptyAlert', 'Digite uma URL para importar as campanhas de e-mail');
define('LNG_NewsletterURLEmpty', 'Digite uma URL para importar as campanhas de Email');

define('LNG_NewsletterActivatedSuccessfully', 'Campanha de e-mail foi ativada com sucesso');
define('LNG_NewsletterDeactivatedSuccessfully', 'Campanha de e-mail foi desativada com sucesso');

define('LNG_NewsletterArchive_ActivatedSuccessfully', 'Arquivo da campanha de e-mail foi ativada com sucesso');
define('LNG_NewsletterArchive_DeactivatedSuccessfully', 'Arquivo da campanha de e-mail foi desativada com sucesso');

define('LNG_ChooseNewsletters', 'Por favor, escolha uma ou mais campanhas por e-mail.');

define('LNG_LastSent', '&Uacute;ltimos Enviados');
define('LNG_NotSent', 'N&atilde;o Enviados');

define('LNG_Newsletter_Edit_Disabled_SendInProgress', 'Voc&ecirc; n&atilde;o pode editar uma campanha de Email, enquanto a campanha est&aacute; sendo enviada');
define('LNG_Newsletter_ChangeActive_Disabled_SendInProgress', 'Voc&ecirc; n&atilde;o pode alterar o status enquanto esta campanha de Emailest&aacute; sendo enviada');


/**
**************************
* Changed/added in NX1.1.1
**************************
*/
define('LNG_NewsletterFilesCopyFail', 'As imagens e/ou anexos desta campanha de e-mail marketing n&atilde;o foram copiados com sucesso.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_CreateNewsletter', 'Criar Campanha de Email');

define('LNG_EditNewsletter', 'Editar Campanhade de Email');

define('LNG_NewslettersManage', 'Exibir Campanha de Email');
define('LNG_Help_NewslettersManage_HasAccess', ' Para criar uma campanha de Email, clique no bot&atilde;o "Criar Campanha" abaixo.');

define('LNG_HLP_NewsletterSubject', 'O assunto do e-mail. Para a maioria das pessoas o Assunto do e-mail &eacute; determinante para leitura do conte&uacute;do.<br /><br />voc&ecirc; pode incluir campos personalizados no assunto, clicando sobre \\\'Inserir campos personalizados\\\' copie e cole o link gerado na caixa de texto do Assunto.');

define('LNG_ArchiveHelp', 'Uma campanha de e-mail pode ser adicionada automaticamente a seu arquivo de campanha de e-mail. Voc&ecirc; pode ativar ou desativar, clicando na op&ccedil;&atilde;o Arquivo na coluna.');

define('LNG_NewsletterActivateFailed_HasAttachments', 'A campanha de e-mail n&atilde;o p&ocirc;de ser ativada porque o administrador desativou os anexos. Para ativar esta campanha por Email, por favor, edite-a retirando os anexos.');
define('LNG_NewsletterActivateFailed_HasAttachments_Multiple', '%s as campanha de e-mail n&atilde;o puderam ser ativadas porque o administrador desativou os anexos. Para ativar esta campanha por Email, por favor, edite-a retirando os anexos.');

define('LNG_NewsletterUpdated', 'Sua campanha foi atualizada. %s');

define('LNG_NewsletterCreated', 'Sua campanha foi salva. %s');


/**
**************************
* Changed/added in NX 1.4
**************************
*/
define('LNG_Newsletter_Send_Disabled_Resend_Maximum', sprintf('Voc&ecirc; j&aacute; tentou reenviar esta campanha de e-mail %s vezes e voc&ecirc; n&atilde;o conseguiu envi&aacute;-la. Por favor, entre em contato com o administrador do sistema.',
SENDSTUDIO_RESEND_MAXIMUM));



/**
**************************
* Changed/added in 5.0.0
**************************
*/
define('LNG_CreateNewsletterIntro', 'Escreva um nome para sua campanha e, opcionalmente, escolha um formato e um modelo abaixo. Clique em <b>Pr&oacute;ximo</b> quando estiver pronto para continuar.');

define('LNG_Help_NewslettersManage', 'Campanhas de e-mail s&atilde;o as mensagens que s&atilde;o enviadas para os seus contatos. Use campanhas por e-mail para enviar boletins informativos, promo&ccedil;&otilde;es ou notifica&ccedil;&otilde;es por e-mail para seus clientes..');

define('LNG_Newsletter_Size_Approximate', 'Esta campanha de e-mail ter&aacute; aproximadamente %s por contato se as imagens estiverem incorporadas como parte do e-mail.');

define('LNG_HLP_NewsletterFormat', 'Mensagens em HTML e Texto permite que seus contatos possam ler seus e-mails em qualquer cliente de e-mail. Este tipo de e-mail ir&aacute; permite medir taxas de abertura e monitoramento do link.<br><br>Seus contatos devem ser capazes ler e-mail em formato HTML. e-mails em formato HTML ir&atilde;o produzir melhores resultados em rela&ccedil;&atilde;o a taxas de abertura e monitoramento do link. <br> <br> Formato Texto s&atilde;o vis&iacute;veis em todos os clientes de e-mail e tamb&eacute;m est&atilde;o menos propensos a ser reportados como spam devido &agrave; falta de c&oacute;digo HTML. Por&eacute;m, este tipo de e-mail n&atilde;o ser&aacute; capaz de fornecer dados de taxas de abertura.');

define('LNG_Newsletter_Size_Approximate_Noimages', 'Esta campanha de e-mail ser&aacute; enviado em aproximadamente de %s por contato se as imagens n&atilde;o forem incorporadas como parte do e-mail.');

define('LNG_HLP_NewsletterArchive', 'Esta campanha de e-mail dever&aacute; ser arquivada? Em caso afirmativo, ela ser&aacute; exibida nos arquivos da lista de contatos. Voc&ecirc; pode ent&atilde;o publicar os arquivos em seu site para que os visitantes do seu site possam v&ecirc;-las. ');

define('LNG_HLP_NewsletterIsActive', 'Esta campanha de e-mail deve ser marcada como ativa? Campanhas de e-mail inativas n&atilde;o podem ser enviadas para uma lista de contatos, antes do envio a campanha de e-mail precisa ser aprovada.');

define('LNG_SendPreviewFrom', 'Enviar e-mail a partir desta Pr&eacute;-Visualiza&ccedil;&atilde;o');
define('LNG_SendPreviewTo', 'Pr&eacute;-visualizar antes do envio');

/**
**************************
* Changed/added in 5.6.6
**************************
*/

define('LNG_DeleteNewsletterPrompt', 'Deletando esta campanha voc&ecirc; deleta as estatisticas associadas. Deseja mesmo deletar?');

define('LNG_NoAttachment_Admin', 'Os anexos foram desabilitados. Voc&ecirc; pode habilitar nas Configura&ccedil;&otilde;es de E-mail');
define('LNG_NoAttachment_User', 'Os anexos foram desabilitados pelo administrador');

define('LNG_NewsletterArchive_DeactivatedWarning', 'Quando o arquivo &eacute; desativado, o RSS e a Vers&atilde;o Web tamb&eacute;m s&atilde;o desativados');


