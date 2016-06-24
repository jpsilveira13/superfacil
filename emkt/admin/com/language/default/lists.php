<?php
/**
* Language file variables for the mailing lists area. This includes creating, editing, deleting, managing.
*
* @see GetLang
*
* @version     $Id: lists.php,v 1.38 2008/02/18 06:41:11 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the mailing lists area... Please backup before you start!
*/
define('LNG_CreateMailingListHeading', 'Nova lista');

define('LNG_ListName', 'Nome da Lista');
define('LNG_ListOwnerName', 'Nome do Propriet&aacute;rio');
define('LNG_ListOwnerEmail', 'Email do Propriet&aacute;rio');
define('LNG_ListBounceEmail', 'Email para receber retornos(erros)');
define('LNG_ListReplyToEmail', 'Email para receber Respostas');

define('LNG_UnableToCreateList', 'N&atilde;o foi poss&iacute;vel criar a lista');


define('LNG_HLP_ListName', 'O nome da lista, ir&aacute; aparecer no painel de controle e no formul&aacute;rio de inscri&ccedil;&atilde;o.');

define('LNG_UnableToUpdateList', 'N&atilde;o foi poss&iacute;vel atualizar a lista');

define('LNG_ChooseList', 'Por favor, escolha primeiro uma ou mais listas.');
define('LNG_ChooseMultipleLists', 'Para executar esta a&ccedil;&atilde;o, voc&ecirc; precisa escolher mais de uma lista.');

define('LNG_ListCopyFail', 'A lista selecionada n&atilde;o p&ocirc;de ser copiada.');

define('LNG_ListBounceServer', 'Nome do servidor de e-mails Bounce Server');
define('LNG_HLP_ListBounceServer', 'Este &eacute; utilizado para processar e-mails que retornaram com erro. Se voc&ecirc; digitar um servidor de Email, nomes de usu&aacute;rio e senha, voc&ecirc; pode processar essas rejei&ccedil;&otilde;es usando o agendador de tarefas.');

define('LNG_ListBounceUsername', 'Nome do Usu&aacute;rio Bounce Server');
define('LNG_HLP_ListBounceUsername', '&Eacute; utilizado para processar emails. Se voc&ecirc; digitar o seu servidor de Email, nome de usu&aacute;rio e senha, para processar os bounces usando o agendador de tarefas.');

define('LNG_ListBouncePassword', 'Senha Bounce Server');
define('LNG_HLP_ListBouncePassword', '&eacute; utilizado para processar emails. Se voc&ecirc; digitar o seu servidor de Email, nome de usu&aacute;rio e senha, para processar os bounces usando o agendador de tarefas.');

define('LNG_IMAPAccount', 'Conta de e-mail IMAP');
define('LNG_IMAPAccountExplain', 'Sim, esta &eacute; uma conta IMAP');
define('LNG_HLP_IMAPAccount', 'A conta de e-mail para Bounce &eacute; uma conta IMAP? Se n&atilde;o for uma conta IMAP &eacute; uma conta POP3.');

define('LNG_UseExtraMailSettingsExplain', 'Sim, utilizar configura&ccedil;&otilde;es avan&ccedil;adas de Email');
define('LNG_HLP_UseExtraMailSettings', 'Pode ser necess&aacute;rio configurar op&ccedil;&otilde;es adicionais para se conectar a servidor de e-mail para processar os e-mail devolvidos. Em caso afirmativo, ative esta op&ccedil;&atilde;o e escolha a op&ccedil;&atilde;o preencher as informa&ccedil;&otilde;es solicitadas abaixo. Se n&atilde;o tiver a certeza, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_MergeSuccessful', '%s listas foram mesclados com sucesso');
define('LNG_MergeUnsuccessful', '%s listas n&atilde;o puderam ser mesclados.');

define('LNG_ListCopyDisabled', 'Voc&ecirc; n&atilde;o pode copiar esta lista, porque voc&ecirc; n&atilde;o tem acesso.');
define('LNG_ListEditDisabled', 'Voc&ecirc; n&atilde;o pode editar essa lista, porque voc&ecirc; n&atilde;o tem acesso.');
define('LNG_ListDeleteDisabled', 'Voc&ecirc; n&atilde;o pode excluir esta lista, porque voc&ecirc; n&atilde;o tem acesso.');
define('LNG_ListCopyDisabled_TooMany', 'Voc&ecirc; n&atilde;o pode copiar esta lista, voc&ecirc; j&aacute; atingiu o m&aacute;ximo de listas que voc&ecirc; pode criar');

define('LNG_BounceAccountDetails', 'Detalhes da Conta de Retornos');

define('LNG_ArchiveLists', 'Arquivo');


/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_UseExtraMailSettings', 'Utilizar configura&ccedil;&otilde;es avan&ccedil;adas de Email');


/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_TestBounceSettings', 'Testar Configura&ccedil;&otilde;es ');
define('LNG_TestBounceSettings_Server_Alert', 'Digite o nome do servidor da sua conta de e-mail de retornos.');
define('LNG_TestBounceSettings_Username_Alert', 'Por favor, digite o nome de usuario da sua conta de e-mail de retorno.');
define('LNG_TestBounceSettings_Password_Alert', 'Por favor, digite a senha da sua conta de e-mail de retorno.');

define('LNG_Bounce_Checking', '<span style="font-family: Tahoma, Verdana; font-size: 12px;">Verificar detalhes da conta Bounce.<br/><br/>Isso pode levar at&eacute; 2 minutos, aguarde...</span>');

define('LNG_PredefinedCustomFields', 'Detalhes da Empresa');
define('LNG_CompanyName', 'Raz&atilde;o Social');
define('LNG_CompanyAddress', 'Endere&ccedil;o da empresa');
define('LNG_CompanyPhone', 'N&uacute;mero de Telefone');
define('LNG_HLP_CompanyName', 'Voc&ecirc; pode adicionar o nome da sua empresa aqui para ser utilizado como um campo personalizado em seus e-mails para que voc&ecirc; possa aderir ao movimento contra o SPAM na rede chamado CAN-SPAM.<br><br>O movimento CAN-SPAM pede que voc&ecirc; inclua o logotipo do movimento em seus Emails.');
define('LNG_HLP_CompanyAddress', 'Voc&ecirc; pode adicionar aqui o endere&ccedil;o da sua empresa para ser utilizado como um campo personalizado em seus e-mails para que voc&ecirc; possa aderir ao movimento contra o SPAM na rede chamado CAN-SPAM.<br><br>O movimento CAN-SPAM pede que voc&ecirc; inclua o logotipo do movimento em seus Emails.');
define('LNG_HLP_CompanyPhone', 'Voc&ecirc; pode adicionar aqui o telefone da sua empresa para ser utilizado como um campo personalizado em seus e-mails para que voc&ecirc; possa aderir ao movimento contra o SPAM na rede chamado CAN-SPAM.<br><br>O movimento CAN-SPAM pede que voc&ecirc; inclua o logotipo do movimento em seus Emails.');

define('LNG_NotifyOwner', 'Notificar Propriet&aacute;rio da Lista');
define('LNG_NotifyOwnerExplain', 'Sim, enviar uma notifica&ccedil;&atilde;o ao propriet&aacute;rio da lista quando ocorer uma inclus&atilde;o ou remo&ccedil;&atilde;o');



/**
**************************
* Changed/added in NX 1.4
**************************
*/
define('LNG_ExtraMailSettingsNoValidate_field', 'N&atilde;o validar Certificado');
define('LNG_ExtraMailSettingsNoValidate', 'Configura&ccedil;&atilde;o adicional de email: N&atilde;o validar Certificado');
define('LNG_HLP_ExtraMailSettingsNoValidate', 'Por favor, assinale esta op&ccedil;&atilde;o se voc&ecirc; n&atilde;o quiser validar o certificado SSL. &eacute; necess&aacute;rio selecionar esta op&ccedil;&atilde;o se voc&ecirc; precisa se conectar a um servidor de correio eletr&ocirc;nico que usa certificado auto-assinado. Se n&atilde;o tiver a certeza, deixe essa op&ccedil;&atilde;o como esta.');

define('LNG_ExtraMailSettingsNoTLS_field', 'N&atilde;o usar TLS');
define('LNG_ExtraMailSettingsNoTLS', 'Configura&ccedil;&atilde;o adicional de email: Sem TLS');
define('LNG_HLP_ExtraMailSettingsNoTLS', 'Por favor, marque esta op&ccedil;&atilde;o se voc&ecirc; n&atilde;o quiser usar TLS para se conectar ao servidor bounce. Se n&atilde;o tiver a certeza, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_ExtraMailSettingsNoSSL_field', 'N&atilde;o usar SSL');
define('LNG_ExtraMailSettingsNoSSL', 'Configura&ccedil;&atilde;o adicional de email: sem SSL');
define('LNG_HLP_ExtraMailSettingsNoSSL', 'Por favor, marque esta op&ccedil;&atilde;o se voc&ecirc; n&atilde;o quiser usar o SSL para conectar ao servidor Bounce. Se n&atilde;o tiver a certeza, deixe desmarcada.');

define('LNG_ExtraMailSettingsOthers_field', 'Outros');
define('LNG_ExtraMailSettingsOthers', 'Outras configura&ccedil;&otilde;es adicionais');
define('LNG_HLP_ExtraMailSettingsOthers', 'Favor adicionar quaisquer outras op&ccedil;&otilde;es configura&ccedil;&otilde;es adicionais que podem ser necess&aacute;rias para se conectar corretamente a um conta de Bounces.');

define('LNG_YesProcessBounces', 'Sim, eu quero processar e-mails inv&aacute;lidos para esta lista');
define('LNG_ProcessBounceGuideLink', 'Quais s&atilde;o os e-mails inv&aacute;lidos e como eles s&atilde;o tratados?');
define('LNG_ProcessBouncesLabel', 'Processar e-mails inv&aacute;lidos (bounces)');
define('LNG_ProcessBounceDelete', 'Eu fa&ccedil;o o gerenciamento dos e-mail inv&aacute;lidos e estou ciente de que e-mails inv&aacute;lidos ser&atilde;o removidos da caixa de entrada');
define('LNG_AgreeDeleteLabel', 'Aceito apagar os Emails');

define('LNG_ListOwnerEmailNotValidEmail', 'O e-mail do propriet&aacute;rio da lista n&atilde;o &eacute; v&aacute;lido. Digite um endere&ccedil;o de e-mail v&aacute;lido.');
define('LNG_ListBounceEmailNotValidEmail', 'O e-mail para Bounces n&atilde;o &eacute; v&aacute;lido. Digite um endere&ccedil;o de e-mail v&aacute;lido.');
define('LNG_ListReplyToEmailNotValidEmail', 'O e-mail de resposta n&atilde;o &eacute; v&aacute;lido. Digite um endere&ccedil;o de e-mail v&aacute;lido.');


/**
**************************
* Changed/added in NX 1.4.1
**************************
*
* These were changed again for NX 5.0
*
*/

/**
**************************
* Changed/added in 5.0.0
**************************
*/

define('LNG_DeleteAllSubscribers', 'Apagar os contatos da(s) lista(s) selecionada(s)');
define('LNG_DeleteAllSubscribersPrompt', 'Tem certeza de que deseja apagar todos os contatos desta lista de contatos?');
define('LNG_ListDeleteAllSubscribersFail', 'N&atilde;o &eacute; poss&iacute;vel excluir todos os contatos desta lista de contatos');
define('LNG_ListDeleteAllSubscribersSuccess', 'Todos os contatos desta lista de contatos foram exclu&iacute;dos com sucesso');

define('LNG_ListsDeleteAllSubscribersFail', 'N&atilde;o &eacute; poss&iacute;vel excluir todos os contatos desta lista de contatos');
define('LNG_ListsDeleteAllSubscribersSuccess', 'Todos os contatos desta lista de contatos foram exclu&iacute;dos com sucesso');

define('LNG_AllListSubscribersChangedFormat', 'Todos os contatos foram atualizados para receber e-mails da campanha \'%s\' format.');
define('LNG_AllListSubscribersNotChangedFormat', 'N&atilde;o foi poss&iacute;vel alterar todos os contatos para receber e-mails da campanha \'%s\' format. Por favor, tente novamente.');

define('LNG_AllListSubscribersChangedStatus', 'Todos os contatos tiveram seus status alterado para \'%s\'.');

define('LNG_AllListSubscribersChangedConfirm', 'Todos os contatos tiveram seus status alterado para \'%s\'.');
define('LNG_AllListSubscribersNotChangedConfirm', 'Todos os contatos n&atilde;o tiveram seu status alterado para \'%s\'.');

define('LNG_MergeDuplicatesRemoved_Success', 'Contato(s) duplicado(s) %s foram removidos com sucesso a partir da nova lista.');
define('LNG_MergeDuplicatesRemoved_Fail', 'Falha ao remover %s contatos duplicados a partir da nova lista.');

define('LNG_Lists_DeleteAllSubscribers_Disabled', 'Voc&ecirc; n&atilde;o pode excluir contatos desta lista, porque voc&ecirc; n&atilde;o tem acesso.');

define('LNG_AllListSubscribersNotChangedStatus', 'Todos os contatos n&atilde;o tiveram seu status alterado para \'%s\'.');

define('LNG_CreateMailingListIntro', LNG_Help_ListsManage);

define('LNG_HLP_NotifyOwner', 'Se esta op&ccedil;&atilde;o for selecionada,<br> o propriet&aacute;rio desta lista de contatos ser&aacute; <br> notificado quando algum contato desta lista de e-mail for adicionado ou removido.');

define('LNG_CreateListCancelButton', 'Tem certeza de que deseja cancelar a cria&ccedil;&atilde;o da nova lista de contatos?');

define('LNG_EditMailingList', 'Editar lista de contatos');
define('LNG_EditMailingListIntro', 'Preencha o formul&aacute;rio abaixo para atualizar a lista de contatos selecionada.');
define('LNG_EditListCancelButton', 'Tem certeza de que deseja cancelar a atualiza&ccedil;&atilde;o lista de contatos?');
define('LNG_EditMailingListHeading', 'Detalhes da Lista de Contatos');

define('LNG_EnterOwnerName', 'Digite o nome do propriet&aacute;rio dessa lista de contatos.');
define('LNG_EnterOwnerEmail', 'Digite o e-mail do propriet&aacute;rio essa lista de contatos.');
define('LNG_EnterReplyToEmail', 'Por favor, digite o e-mail que receber&aacute; as mensagens de resposta \'Reply-To\' dessa lista de contatos.');
define('LNG_EnterBounceEmail', 'Por favor, digite o e-mail que receber&aacute; as mensagens de resposta de e-mails inv&aacute;lidos \'Bounce\' dessa lista de contatos.');

define('LNG_ListCreated', 'A lista de contatos foi salva com sucesso');

define('LNG_DeleteListPrompt', 'Tem certeza que deseja excluir esta lista de contatos?');

define('LNG_ListDeleteFail', 'Ocorreu um erro ao tentar excluir a lista de contatos selecionada.');
define('LNG_ListsDeleteFail', 'Ocorreu um erro ao tentar excluir as listas de contatos selecionadas.');

define('LNG_ListDeleteSuccess', 'A lista de contatos selecionada foi exclu&iacute;da com sucesso');
define('LNG_ListsDeleteSuccess', 'As listas de contatos selecionadas foram exclu&iacute;das com sucesso');

define('LNG_RSS_Tip', 'Clique aqui para ler os arquivos das campanhas de e-mail enviadas a esta lista de contatos.');

define('LNG_CreateMailingList', 'Criar lista de contatos');

define('LNG_ListsManage', 'Exibir listas de contatos');

define('LNG_HLP_ListOwnerName', 'Este nome &eacute; exibido quando voc&ecirc; for enviar uma campanha de e-mail para essa lista de contatos.');
define('LNG_HLP_ListOwnerEmail', '&Eacute; enviado para esse e-mail uma mensagem quando algu&eacute;m se inscreve ou pede remo&ccedil;&atilde;o da sua lista de contatos.<br/>Este tamb&eacute;m &eacute; o e-mail padr&atilde;o \\\'DE\\\' utilizado para enviar uma campanha de Emailpara essa lista de contato.');
define('LNG_HLP_ListBounceEmail', 'Este &eacute; o endere&ccedil;o padr&atilde;o para receber os e-mails devolvidos enviados na sua campanha de e-mail contidos nesta lista de contatos. Ele &eacute; utilizado quando um endere&ccedil;o de e-mail inv&aacute;lido for adicionado &agrave; sua lista de contatos.');
define('LNG_HLP_ListReplyToEmail', 'Esta &eacute; o endere&ccedil;o de resposta padr&atilde;o usado quando voc&ecirc; enviar uma campanha de Emailpara essa lista de contato.');

define('LNG_ListOwner','Propriet&aacute;rio de Listas');

define('LNG_ListDoesntExist', 'A lista de contatos que voc&ecirc; tentou editar n&atilde;o existe. Por favor, tente novamente.');

define('LNG_Delete_Lists', 'Excluir lista(s) seleciona(s)');

define('LNG_ListNameIsNotValid', 'Digite o nome da lista.');
define('LNG_EnterListName', LNG_ListNameIsNotValid);

define('LNG_ListOwnerNameIsNotValid', 'Digite o nome do propriet&aacute;rio da lista.');
define('LNG_ListOwnerEmailIsNotValid', 'Digite o e-mail do propriet&aacute;rio da lista, precisa ser um endere&ccedil;o v&aacute;lido.');
define('LNG_ListBounceEmailIsNotValid', 'Digite o e-mail para receber os e-mails inv&aacute;lidos desta lista, precisa ser um endere&ccedil;o v&aacute;lido.');
define('LNG_ListReplyToEmailIsNotValid', 'Digite o e-mail para receber os e-mails de resposta desta lista, precisa ser um endere&ccedil;o v&aacute;lido.');

define('LNG_ListUpdated', 'A lista de contatos selecionada foi atualizada com sucesso.');
define('LNG_MergeLists', 'Mesclar as listas selecionadas');
define('LNG_ListCopySuccess', 'A lista de contatos selecionada foi copiada com sucesso.');

define('LNG_Add_Customfields_To_List', 'Personalizar Campos');
define('LNG_HLP_AddTheseFields', 'Selecione os campos personalizados que voc&ecirc; deseja associar a esta lista de contatos.');

/**
*************************
* Changed/added in 5.5.0
*************************
*/

define('LNG_ProcessBounceDeleteAll', 'Remova todos os e-mail do inbox, n&atilde;o apenas e-mail de retorno');
define('LNG_ProcessBounceDeleteAll_ManualPrompt', 'Marcando esta opcao significa que todos os e-mail no inbox do cliente do salto estarao suprimidos. Voce esta certo disso?');
define('LNG_ProcessBounceDeleteAll_AutoPrompt', 'Marcando esta opcao significa que todos os e-mail no inbox do cliente de retorno serao processados automatico todas as vezes que suprimidos do retorno.. Esta certo disso?');
define('LNG_HLP_ProcessBounceDeleteAll', 'Se marcar, todos os e-mails desta conta de retorno\\\'s ser&atilde;o excluidos sempre que o processo for executado. Voce deve marcar esta op&ccedil;&atilde;o se esta conta de e-mail for usada somente para processar retornos');
define('LNG_AddTheseFields', 'Adicione estes campos &agrave; lista');
/**
*************************
* Changed/added in 5.6.6
*************************
*/

define('LNG_DeleteListPrompt', 'Deletando esta lista de contatos voc&ecirc; exclui todas as estat&iacute;sticas associadas a ela, tem certeza do que est&aacute; fazendo?');

