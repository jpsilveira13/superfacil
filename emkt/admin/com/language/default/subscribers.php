<?php
/**
* Language file variables for the subscribers area (including adding, importing, removing, exporting, managing).
*
* @see GetLang
*
* @version     $Id: subscribers.php,v 1.74 2008/02/25 23:42:35 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the subscribers area... Please backup before you start!
*/

define('LNG_ChooseValueForCustomField', 'Escolha um valor para o campo personalizado \'%s\'');
define('LNG_EnterValueForCustomField', 'Digite um valor para o campo personalizado \'%s\'');
define('LNG_ChooseOptionForCustomField', 'Escolha uma op&ccedil;&atilde;o para o campo personalizado \'%s\'');


define('LNG_RemoveOptions', 'Para os contatos acima');
define('LNG_EnterEmailAddressesToRemove', 'Digite alguns endere&ccedil;os de e-mail para remover ou escolha um arquivo para fazer upload.');

define('LNG_Unsubscribe', 'Remo&ccedil;&atilde;o');


define('LNG_HLP_RemoveEmails', 'Digite ou cole a lista de endere&ccedil;os de e-mail que deseja remover. Voc&ecirc; deve colocar cada e-mail em uma nova linha.<br><br/>Use esta op&ccedil;&atilde;o se voc&ecirc; tiver um pequeno n&uacute;mero de endere&ccedil;os de e-mail para remover.');

define('LNG_EmptyRemoveList', 'O arquivo que voc&ecirc; carregou n&atilde;o cont&eacute;m endere&ccedil;os de e-mail.');

define('LNG_MassUnsubscribeFailed', 'Os seguintes endere&ccedil;os de e-mail n&atilde;o puderam ser removidos ou exclu&iacute;dos:<br/>');
define('LNG_MassUnsubscribeSuccessful', '%s endere&ccedil;os de e-mail foram removidos da lista com sucesso.');
define('LNG_MassUnsubscribeSuccessful_Single', '1 e-mail foi removido da lista com sucesso.');

define('LNG_SubscriberEmailaddress', 'Email');

define('LNG_SubscriberFormat', 'Formato');

define('LNG_SubscriberStatus', 'Status');
define('LNG_SubscriberConfirmed', 'Confirmado');


define('LNG_SubscriberAddFail_InvalidData', 'Foram inseridos dados inv&aacute;lidos para o campo personalizado \'%s\'.');
define('LNG_SubscriberAddFail_EmptyData_ChooseOption', '\'%s\' &eacute; um campo obrigat&oacute;rio. Por favor, escolha uma op&ccedil;&atilde;o.');
define('LNG_SubscriberAddFail_EmptyData_EnterData', '\'%s\' &eacute; um campo obrigat&oacute;rio. Preencha o campo abaixo.');

define('LNG_SubscriberEditFail_Duplicate', 'Algu&eacute;m j&aacute; est&aacute; inscrito para esta lista com este endere&ccedil;o de e-mail \'%s\'.');
define('LNG_SubscriberEditFail_InvalidData', 'Foram inseridos dados inv&aacute;lidos para o campo personalizado \'%s\'.');

define('LNG_Save_AddAnother', 'Salvar e adicionar outro');

define('LNG_UnsubscribeTime', 'Hora de Remo&ccedil;&atilde;o');
define('LNG_UnsubscribeIP', 'IP de Remo&ccedil;&atilde;o');

/**
* Import Subscriber language variables.
*/

define('LNG_Import_From_file', 'Arquivo');

define('LNG_ImportType', 'Importar Tipos');
define('LNG_ImportDetails', 'Importar Detalhes');

define('LNG_ImportFormat', 'Formato');

define('LNG_IncludeAutoresponder', 'Respostas Autom&aacute;ticas');

define('LNG_ImportFileDetails', 'Arquivo Detalhes');
define('LNG_ContainsHeaders', 'Conte&uacute;do Cabe&ccedil;alhos');
define('LNG_YesContainsHeaders', 'Sim, este arquivo cont&eacute;m cabe&ccedil;alhos');
define('LNG_HLP_ContainsHeaders', 'A primeira linha do seu arquivo de importa&ccedil;&atilde;o cont&ecirc;m cabe&ccedil;alhos? Se sim, cada um cabe&ccedil;alho devem ser separados com um separador, exemplo:<br><br>Email, Nome, Sexo.');
define('LNG_FieldSeparator', 'Separador');
define('LNG_EnterFieldSeparator', 'Digite um Separador');


define('LNG_FieldEnclosed', 'Delimitador de Campos');
define('LNG_HLP_FieldEnclosed', 'Qual caracter vai delimitar cada campo? Todos os campos devem ter esse car&aacute;ter em torno deles. Por exemplo, podemos utilizar aspas:<br><br>&quot;test@test.com&quot;, &quot;21 anos&quot;, &quot;Masculino&quot;');
define('LNG_ImportFile', 'Importar Arquivo');
define('LNG_ImportFile_FieldSeparatorEmpty', 'Digite um Delimitador de campo.');
define('LNG_ImportFile_FileEmpty', 'Escolha um arquivo para importar.');

define('LNG_MatchOption', 'Igualar op&ccedil;&otilde;es \'%s\' para o campo');
define('LNG_ImportFields', 'Link importar campos');

define('LNG_MappingOption', 'Mapear Campo');
define('LNG_HLP_MappingOption', 'Qual o campo de dados \\\'%s\\\' referem-se ao arquivo?');

define('LNG_ImportStart', 'Iniciar Importa&ccedil;&atilde;o...');


define('LNG_InvalidSubscribeDate', ' <-- Data de assinatura inv&aacute;lida');
define('LNG_InvalidCustomFieldData', ' <-- Dados do Campo personalizado inv&aacute;lido para este campo \'%s\'');
define('LNG_InvalidSubscriberEmailAddress', ' <-- Endere&ccedil;o de e-mail inv&aacute;lido');
define('LNG_InvalidSubscriberImportLine_NotEnough', ' <-- Faltando um delimitador');
define('LNG_InvalidSubscriberImportLine_TooMany', ' <-- Excesso de delimitadores');

define('LNG_InvalidReportURL', 'Voc&ecirc; acessou uma url de relat&oacute;rios inv&aacute;lida. Por favor, tente novamente.');
define('LNG_ImportResults_Report_Invalid_Heading', 'URL de Relat&oacute;rio inv&aacute;lida.');
define('LNG_ImportResults_Report_Invalid_Intro', 'Voc&ecirc; acessou uma url inv&aacute;lida. Por favor, feche esta janela e tentar novamente.');

define('LNG_ImportResults_Report_Duplicates_Heading', 'Encontrado e-mail duplicado');

define('LNG_ImportResults_Report_Failures_Heading', 'Falha ao importar endere&ccedil;os de Email');
define('LNG_ImportResults_Report_Failures_Intro', 'Os seguintes endere&ccedil;os de e-mail n&atilde;o puderam ser importados. Por favor, tente novamente.');

define('LNG_ImportResults_Report_Unsubscribed_Heading', 'Endere&ccedil;os de e-mail Removidos');

define('LNG_DuplicateReport', '<b>Endere&ccedil;os de e-mail Duplicados</b>');
define('LNG_FailureReport', '<b>N&atilde;o &eacute; poss&iacute;vel subscrever estes endere&ccedil;os de Email</b>');

define('LNG_ImportResults_InProgress', 'Importa&ccedil;&atilde;o em andamento');

define('LNG_ImportSubscribers_InProgress_unsubscribes_Many', '%s endere&ccedil;os de e-mail removidos at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_unsubscribes_One', '1 e-mail removido at&eacute; agora');


/**
* Export Subscribers.
*/


define('LNG_ExportStart', 'Iniciar Exporta&ccedil;&atilde;o...');
define('LNG_IncludeFields', 'Incluir Campos');
define('LNG_ExportOptions', 'Exportar Op&ccedil;&otilde;es');

define('LNG_IncludeHeader', 'Incluir campo de cabe&ccedil;alho?');
define('LNG_HLP_IncludeHeader', 'O arquivo a ser exportado cont&eacute;m cabe&ccedil;alhos? Se sim, a primeira linha do arquivos ficamos os campos...:<br><br>Email, Status, Format');

define('LNG_FieldEnclosedBy', 'Campo delimitado por');
define('LNG_HLP_FieldEnclosedBy', 'Qual ser&aacute; o campo delimitador (se houver) de cada campo? Por exemplo, aspas o conte&uacute;do ficaria assim:<br><br>&quot;test@test.com&quot;, &quot;21&quot;, &quot;James&quot;');

define('LNG_Export_FieldSeparator', LNG_FieldSeparator);
define('LNG_HLP_Export_FieldSeparator', 'Qual ser&aacute; o campo delimitador deve ser acrescentado a este arquivo para separar o conte&uacute;do de cada campo em um novo record?');

define('LNG_ExportField', 'Campos #%s');
define('LNG_SubscriberNone', 'Nenhum');

define('LNG_Subscribers_Export_Step4_Intro', 'Clique no bot&atilde;o "Iniciar exporta&ccedil;&atilde;o" para come&ccedil;ar a exportar.');

define('LNG_ExportResults_Heading', 'Exportar Resultados');

define('LNG_SubscriberEmail', 'Email');

define('LNG_SubscribeDate_DMY', 'Data de assinatura (dd/mm/yyyy)');
define('LNG_SubscribeDate_MDY', 'Data de assinatura (mm/dd/yyyy)');
define('LNG_SubscribeDate_YMD', 'Data de assinatura (yyyy/mm/dd)');

define('LNG_IncludeField', 'Incluir esta campo?');

define('LNG_DeleteExportFile', 'Excluir o arquivo');



/**
* Now for banned subscribers.
*/


define('LNG_EmptyBannedList', 'O arquivo que voc&ecirc; carregou n&atilde;o cont&eacute;m endere&ccedil;os de e-mail.');

define('LNG_BannedSubscriberEmail', 'E-mail');
define('LNG_Delete_Banned_Selected', 'Excluir selecionados');
define('LNG_ConfirmBannedSubscriberChanges', 'Tem certeza de que deseja fazer essas mudan&ccedil;as?\NEsta a&ccedil;&atilde;o n&atilde;o pode ser desfeita.');


/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_ImportResults_Report_Bads_Heading', 'Dados corrompidos encontrados');
define('LNG_ImportResults_Report_Bads_Intro', 'Os endere&ccedil;os de e-mail do arquivo de importa&ccedil;&atilde;o listados foram abaixo por conter dados incorretos.');

define('LNG_ImportSubscribers_InProgress_bads_Many', '%s  linhas cont&ecirc;m dados corrompidos at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_bads_One', '1 linhas cont&ecirc;m dados corrompidos at&eacute; agora');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_SubscriberIP_Unknown', 'Endere&ccedil;o IP desconhecido');
define('LNG_SubscriberBounceTime', 'Tempo de devolvidos');
define('LNG_SubscriberBounceType', 'Tipo de devolvidos');
define('LNG_BounceTimeFormat', 'Y/m/d');
define('LNG_BounceTypeFormat', '%s (%s Retorno)');

define('LNG_RemoveEmails', 'Contatos para remover');

define('LNG_RemoveFile', 'Fazer upload de um arquivo do meu computador');
define('LNG_HLP_RemoveFile', 'Se voc&ecirc; tem um arquivo que cont&eacute;m os endere&ccedil;os de e-mail voc&ecirc; deseja excluir, voc&ecirc; pode selecion&aacute;-lo aqui. Seu arquivo deve conter um endere&ccedil;o por linha. Por exemplo:<br /><br />email1@domain.com<br>email2@domain2.com');


define('LNG_ImportConfirmedStatus', 'Marcar como Confirmado');

define('LNG_OverwriteExistingSubscriber', 'Substituir detalhes');

define('LNG_Subscribers_Export_Step3_Intro', 'Escolha como voc&ecirc; deseja exportar seus contatos, preencha o formul&aacute;rio abaixo. Voc&ecirc; pode escolher quais os campos deseja incluir <em>Campos a Incluir</em>.');

define('LNG_SubscriberBanListEmpty', '%s n&atilde;o tem endere&ccedil;os de e-mail retirados.');

define('LNG_SubscriberBan_Updated', 'e-mais retirados com sucesso');
define('LNG_SubscriberBan_NotUpdated', 'Email n&atilde;o foi atualizado.');
define('LNG_SubscriberBan_UnableToUpdate', 'N&atilde;o &eacute; poss&iacute;vel atualizar as informa&ccedil;&otilde;es. Por favor, tente novamente.');

define('LNG_ConfirmRemoveBannedSubscribers', 'Voc&ecirc; tem certeza que quer remover estes Emails?');
define('LNG_ChooseBannedSubscribers', 'Por favor, escolha algum e-mails para remover.');

define('LNG_BannedAddButton', 'Bloquear e-mail ou um Dom&iacute;nio...');

define('LNG_Subscriber_Ban_NotDeleted_One', '1 e-mail bloqueado n&atilde;o foi excluido da lista \'%s\'.');
define('LNG_Subscriber_Ban_Deleted_One', '1 e-mail bloqueado n&atilde;o foi excluido da lista\'%s\'.');

define('LNG_Subscriber_Ban_NotDeleted_Many', '%s e-mail bloqueado n&atilde;o foi excluido da lista \'%s\'.');

define('LNG_Subscribers_Banned_Edit', 'Editar e-mails bloqueados');
define('LNG_Subscribers_Banned_Edit_Intro', 'Modifique os detalhes de e-mails suprimidos no formul&aacute;rio abaixo e clique no bot&atilde;o \'Salvar\'.');
define('LNG_Subscribers_Banned_Edit_CancelPrompt', 'Tem certeza que deseja cancelar a edicao do endereco de e-mail suprimido?');
define('LNG_Banned_Edit_Empty', 'Digite um e-mail para suprimir.');
define('LNG_Banned_Edit_ChooseList', 'Por favor, escolha uma lista para suprimir esse e-mail.');

define('LNG_Ban_Count_Many', ' (%s suprimidos)');
define('LNG_Ban_Count_One', ' (1 suprimidos)');

define('LNG_BannedDate', 'Suprimir Data');
define('LNG_DeleteBannedSubscriberPrompt', 'Tem certeza de que deseja remover?');

define('LNG_MassBanSuccessful', '%s endere&ccedil;os de e-mail foi adicionado com sucesso &agrave; sua lista de e-mail suprimida.');
define('LNG_MassBanSuccessful_Single', '1 e-mail foi suprimida com sucesso');
define('LNG_MassBanFailed', '<br>Um erro ocorreu durante a tentativa de suprimir os seguintes endere&ccedil;os de Email:<br/>');
define('LNG_Subscriber_AlreadyBanned', 'Email j&aacute; est&aacute; suprimido');

define('LNG_Subscribers_Banned', 'Exibir lista de e-mail suprimida');

define('LNG_Subscribers_BannedManage_CancelPrompt', 'Tem certeza de que deseja cancelar o gerenciamento da sua listas de e-mail suprimidos?');

define('LNG_Banned_Subscribers_FoundOne', 'Encontrado 1 e-mail suprimido.');
define('LNG_Banned_Subscribers_FoundMany', 'Encontrado %s e-mails suprimidos.');

define('LNG_SubscribersManageBanned', 'Visualizar e-mails suprimidos para %s');

define('LNG_BannedFile', 'Arquivo de e-mail Suprimido');
define('LNG_HLP_BannedFile', 'Escolha um arquivo para fazer upload que cont&eacute;m uma lista de endere&ccedil;os de e-mail ou dom&iacute;nios para suprimir. O arquivo deve conter uma entrada por linha. Para suprimir um dom&iacute;nio inteiro, basta usar:<br /><br />@hotmail.com<br />@gmail.com<br />@compania.com');
define('LNG_Subscribers_GlobalBan', '-- Suprimir Global (todas as listas) --');
define('LNG_Subscribers_Banned_CancelPrompt', 'Tem certeza de que deseja cancelar?');
define('LNG_Banned_Add_EmptyList', 'Digite um e-mail ou nome de dom&iacute;nio para suprimir.');
define('LNG_Banned_Add_EmptyFile', 'Selecione um arquivo que cont&eacute;m endere&ccedil;os de e-mail que pretende suprimir.');
define('LNG_Banned_Add_ChooseList', 'Por favor, escolha uma lista para suprimir esses endere&ccedil;os de e-mail.');

define('LNG_BannedEmailDetails', 'Suprimir Email/Dom&iacute;ni detalhes');
define('LNG_Subscribers_Banned_Add', 'Adicionar Emails/Dom&iacute;nio para Suprimir');

define('LNG_BannedEmails', 'Os dom&iacute;nios de e-mails ou &agrave; Suprimir');
define('LNG_HLP_BannedEmails', 'Introduza a lista de endere&ccedil;os e-mails para suprimir. Separe cada e-mail com uma nova linha. Se voc&ecirc; gostaria de suprimir todo um dom&iacute;nio, basta digitar @DOMAINNAME. Por exemplo, para suprimir todos do Hotmail, digite @hotmail.com.');
define('LNG_Banned_AddEmailsUsingForm','Eu quero digitar os Emails/dominios para ser suprimido em uma caixa de texto');

define('LNG_BanSingleEmail', 'Email para Suprimir');
define('LNG_HLP_BanSingleEmail', 'Digite o endere&ccedil;o de e-mail para suprimir. Se voc&ecirc; gostaria de suprimir todo um dom&iacute;nio, basta digitar @DOMAINNAME. Por exemplo, para suprimir todos do Hotmail, digite @hotmail.com.');

define('LNG_HLP_BannedEmailsChooseList', 'Selecione uma lista de e-mails suprimidos.');

define('LNG_ImportSubscribers_InProgress_bans_Many', '%s linhas cont&ecirc;m e-mails ou dom&iacute;nios suprimidos at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_bans_One', '1 linhas cont&ecirc;m e-mails ou dom&iacute;nios suprimidos at&eacute; agora');

define('LNG_ImportResults_Report_Banned_Heading', 'Suprimir endere&ccedil;o de email');

define('LNG_FilterOptions_Subscribers', 'Op&ccedil;&otilde;es de Pesquisa');

define('LNG_ImportFile_ServerFileEmpty', 'Escolha um arquivo para importar.');
define('LNG_ImportFile_ServerFileDoesNotExist', 'Arquivo selecionado n&atilde;o existe no diret&oacute;rio "importa&ccedil;&atilde;o"');
define('LNG_ImportFile_ServerFileEmptyList', 'Nenhum arquivo foi encontrado no seu servidor. Para usar essa op&ccedil;&atilde;o, fa&ccedil;a o upload do arquivo pela op&ccedil;&atilde;o "importa&ccedil;&atilde;o" (admin/importa&ccedil;&atilde;o).');
define('LNG_ImportFile_SourceUpload', 'Nenhum arquivo foi encontrado no servidor. Para usar essa op&ccedil;&atilde;o, fa&ccedil;a o upload do arquivo a partir do computador ('.ini_get('upload_max_filesize').' m&aacute;ximo)');
define('LNG_ImportFile_SourceServer', 'Importar um arquivo do meu site');
define('LNG_ImportFileFromServer', LNG_ImportFile);

define('LNG_ExportFileType', 'Formato do Arquivo');
define('LNG_ExportFileTypeCSV', 'Arquivo CSV');
define('LNG_ExportFileTypeXML', 'Arquivo XML');

define('LNG_ImportFile_HeaderInFile', 'O arquivo de importa&ccedil;&atilde;o cont&ecirc;m esses campos:');

define('LNG_HLP_FieldSeparator', 'Indique o car&aacute;cter que ser&aacute; usado como separador do seu arquivo CSV. Certifique-se que este car&aacute;ter n&atilde;o apare&ccedil;a em outros locais do arquivo CSV. Normalmente, em um CSV (valores separados por v&iacute;rgula) este separador &eacute; uma  \\\',\\\'. Certifique-se que as colunas n&atilde;o contenham v&iacute;rgulas, caso tenha, substitua todas as v&iacute;rgulas, com um espa&ccedil;o em branco.<br/><br>Se voc&ecirc; quiser usar o caractere separador espa&ccedil;o pressione a tecla &quot;TAB&quot; .<br><br>Se voc&ecirc; n&atilde;o tiver certeza, deixe essa op&ccedil;&atilde;o como ela &eacute;.');

/**
**************************
* Changed/added in NX 1.4.1
**************************
*/
define('LNG_SubscriberIsAlreadyUnsubscribed', 'O e-mail \'%s\' j&aacute; cancelaram.');

/**
**************************
* Changed/added in NX 1.5
**************************
*/
define('LNG_Subscribers_Add_CancelPrompt', 'Tem certeza de que deseja cancelar a adicao um novo contato?');

define('LNG_Subscribers_EnterEmailAddress', 'Digite um e-mail para este contato.');

define('LNG_NewSubscriberDetails', 'Novos contatos detalhes');

define('LNG_SubscriberAddFail', 'Contato n&atilde;o foi adicionado com sucesso');
define('LNG_SubscriberAddFail_Duplicate', 'Um contato com o endere&ccedil;o de e-mail \'%s\' j&aacute; existe.');
define('LNG_SubscriberAddFail_Unsubscribed', 'Um contato com o endere&ccedil;o de e-mail \'%s\' j&aacute; cancelaram a partir desta lista de contatos. Para reativar o contato altere o status para "Ativo".');
define('LNG_SubscriberAddFail_InvalidEmailAddress', 'Um contato com o endere&ccedil;o de e-mail \'%s\' n&atilde;o podem ser acrescentados a esta lista. &eacute; um endere&ccedil;o de e-mail inv&aacute;lido.');

define('LNG_SubscriberAddSuccessful', 'O novo contato foi adicionado &agrave; sua lista.');
define('LNG_SubscriberAddSuccessfulList', 'Contato adicionado &agrave; lista de contatos \'%s\' com sucesso.');

define('LNG_Subscribers_Remove_Heading', 'Remover Contatos');

define('LNG_Subscribers_Remove', 'Remover Contatos');
define('LNG_Subscribers_Remove_CancelPrompt', 'Tem certeza de que deseja cancelar remocao de contatos?');

define('LNG_Subscribers_Remove_Step2', 'Remover Contatos');

define('LNG_Subscribers_RemoveMore', 'Remover outros contatos');

define('LNG_DeleteSubscriberPrompt', 'Tem certeza de que deseja apagar este contato?');

define('LNG_NoSubscribersToDelete', 'Sem contatos para apagar. Por favor, tente novamente.');

define('LNG_Subscriber_Deleted', '1 contato foi exclu&iacute;do com sucesso');
define('LNG_Subscribers_Deleted', '%s contatos foram exclu&iacute;dos com sucesso');

define('LNG_Subscriber_NotDeleted', '1 contato n&atilde;o foi exclu&iacute;do.');
define('LNG_Subscribers_NotDeleted', '%s contatos n&atilde;o foram exclu&iacute;dos.');

define('LNG_NoSubscribersToChangeFormat', 'N&atilde;o existem contatos para alterar formatos de e-mail.');

define('LNG_Subscriber_NotChangedFormat', '1 contato n&atilde;o foi alterado para receber e-mails no %s formato.');
define('LNG_Subscribers_NotChangedFormat', '%s contato n&atilde;o foi alterado para receber e-mails no %s formato.');

define('LNG_Subscriber_ChangedFormat', '1 contato foi alterado para receber e-mails no %s formato.');
define('LNG_Subscribers_ChangedFormat', '%s contato foi alterado para receber e-mails no %s formato.');

define('LNG_NoSubscribersToChangeStatus', 'N&atilde;o existem contatos para alterar status.');

define('LNG_Subscriber_NotChangedStatus', '1 n&atilde;o existem contatos para alterar status %s');
define('LNG_Subscribers_NotChangedStatus', '%s n&atilde;o existem contatos para alterar status %s');

define('LNG_Subscriber_ChangedStatus', '1 contato foi alterado para o status %s');
define('LNG_Subscribers_ChangedStatus', '%s contato foi alterado para o status %s');

define('LNG_NoSubscribersToChangeConfirm', 'N&atilde;o existem contatos para mudar o status de confirmado.');

define('LNG_Subscriber_NotChangedConfirm', '1 contato n&atilde;o foi alterado para o status de confirmado \'%s\'.');
define('LNG_Subscribers_NotChangedConfirm', '%s contato n&atilde;o foi alterado para o status de confirmado \'%s\'.');

define('LNG_Subscriber_ChangedConfirm', '1 contato foi alterado para o status de confirmado \'%s\'.');
define('LNG_Subscribers_ChangedConfirm', '%s contato foi alterado para o status de confirmado \'%s\'.');

define('LNG_Subscribers_Edit', 'Editar Contato');
define('LNG_Subscribers_Edit_CancelPrompt', 'Tem certeza de que deseja cancelar a edicao deste contato?');
define('LNG_EditSubscriberDetails', 'Modificar detalhes de contatos');

define('LNG_SubscriberEditSuccess', 'Os detalhes do contato foram atualizados. Voc&ecirc; pode continuar fazendo altera&ccedil;&otilde;es abaixo.');
define('LNG_SubscriberEditFail', 'N&atilde;o &eacute; poss&iacute;vel atualizar informa&ccedil;&otilde;es de contato. Por favor, tente novamente.');

define('LNG_ChooseSubscribers', 'Escolha pelo menos um contato.');

define('LNG_HLP_UnsubscribeTime', 'Quando o contato foi removido da lista do contato.');


define('LNG_HLP_UnsubscribeIP', 'O endere&ccedil;o IP que o contato pediu remo&ccedil;&atilde;o da lista de contatos.');

define('LNG_HLP_ConfirmedStatus', 'A op&ccedil;&atilde;o &eacute; confirma&ccedil;&atilde;o &eacute; feita utilizando double OptIn processo em que o assinante confirma a inscri&ccedil;&atilde;o clicando no link de um e-mail de confirma&ccedil;&atilde;o. Se voc&ecirc; selecionar os contatos n&atilde;o confirmados voc&ecirc; enviar pode enviar um novo e-mail de confirma&ccedil;&atilde;o em uma data posterior.');

define('LNG_HLP_Format', 'Qual formato de e-mail dever&aacute; ser \\\'sinalizado\\\' como padr&atilde;o? HTML or Text? HTML ou ambos HTML e Texto, ou somente podem receber e-mails somnte em formato Texto.<br><br>Se estiver inseguro, selecione HTML.');

define('LNG_HLP_SubscriberStatus', 'Contatos ativos s&atilde;o aqueles que n&atilde;o retornaram com erro e que n&atilde;o cancelaram a participa&ccedil;&atilde;o na lista de contatos.<br/>O status\\\'bounced\\\' s&atilde;o aqueles que foram desativados em lista de contatos porque retornaram muitas vezes ou foram classificados como inexistentes.<br/>The \\\'Removidos\\\' &eacute; o status para aqueles que t&ecirc;m especificamente cancelaram a partir da lista de contatos.');

define('LNG_Subscribers_Import', 'Importar contatos de um arquivo');
define('LNG_Subscribers_Import_Intro', 'Para importar contatos de um arquivo CSV no seu computador, comece escolhendo quais as listas de contatos ser&atilde;o importadas.');

define('LNG_Subscribers_Import_Step2', 'Importar contatos de um arquivo');

define('LNG_HLP_ImportType', 'Como voc&ecirc; vai importar sua lista de contatos?');
define('LNG_Subscribers_Import_CancelPrompt', 'Tem certeza de que deseja cancelar importar contatos?');
define('LNG_ImportStatus', 'Status');
define('LNG_HLP_ImportStatus', 'Quando estes contatos forem importados, qual dever&aacute; ser o seu status?');

define('LNG_Subscribers_Import_Step3', 'Importar contatos');
define('LNG_Subscribers_Import_Step3_Intro', 'Os campos de seu arquivo CSV s&atilde;o mostradas abaixo, &agrave; esquerda. Escolha os campos  correspondentes &agrave;s informa&ccedil;&otilde;es do contato, selecionando-os a partir da lista &agrave; direita.');

define('LNG_HLP_ImportFormat', 'Qual formato de e-mail dever&aacute; ser \\\'sinalizado \\\' como padr&atilde;o? HTML ou Texto? ');

define('LNG_YesIncludeAutoresponder', 'Sim, adicionar contatos para respostas autom&aacute;ticas');

define('LNG_HLP_ImportFile', 'Escolha um arquivo para fazer upload com os detalhes do contato que pretende importar. Deve ser um arquivo de texto simples.');

define('LNG_EmailAddressNotLinked', 'O campo contato do e-mail n&atilde;o est&aacute; preenchido. N&atilde;o podemos avan&ccedil;ar que seja seja preenchido.');

define('LNG_Subscribers_Import_Step4', 'Importar Contatos');
define('LNG_Subscribers_Import_Step4_Intro', 'Clique no bot&atilde;o abaixo para come&ccedil;ar a importar os seus contatos. Por favor, n&atilde;o feche ou saia desta p&aacute;gina, enquanto os seus contatos est&atilde;o sendo importados.<br /><br />');


define('LNG_ImportSubscribers_success_Many', '%s contatos foram importados com sucesso');
define('LNG_ImportSubscribers_success_One', '1 contatos foram importados com sucesso');

define('LNG_ImportSubscribers_updates_Many', '%s contatos foram atualizados com sucesso');
define('LNG_ImportSubscribers_updates_One', '1 contatos foram atualizados com sucesso');

define('LNG_ImportSubscribers_duplicates_Many', '%s contacts contained duplicate e-mail addresses');

define('LNG_ImportSubscribers_failures_Many', '%s contatos n&atilde;o foram importados com sucesso');

define('LNG_ImportSubscribers_unsubscribes_Many', '%s contatos foram removidos');

define('LNG_ImportResults_Heading', 'Importar Contatos');
define('LNG_ImportResults_Intro', 'A importa&ccedil;&atilde;o do contato foi conclu&iacute;da com sucesso');

define('LNG_ImportResults_InProgress_Message', 'Por favor, aguarde enquanto tentamos importar %s registros de contato(s)...');

define('LNG_ImportSubscribers_InProgress_success_Many', '%s contatos foram importados at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_success_One', '1 contatos foram importados at&eacute; agora');

define('LNG_ImportSubscribers_InProgress_updates_Many', '%s contatos foram atualizados at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_updates_One', '1 contatos foram atualizados at&eacute; agora');

define('LNG_ImportSubscribers_InProgress_duplicates_Many', '%s contatos duplicados foram encontrados at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_duplicates_One', '1 contatos duplicados foram encontrados at&eacute; agora');

define('LNG_ImportSubscribers_InProgress_failures_Many', '%s contatos n&atilde;o foram importados at&eacute; agora');
define('LNG_ImportSubscribers_InProgress_failures_One', '1 contatos n&atilde;o foram importados at&eacute; agora');

define('LNG_Subscribers_Export_Step2', 'Exportar contatos para um arquivo');
define('LNG_Subscribers_Export_Step2_Intro', 'Use o assistente a seguir para exportar uma c&oacute;pia da sua lista de contatos para um arquivo CSV que voc&ecirc; pode baixar para seu computador.');

define('LNG_Subscribers_Export_FoundOne', '1 contato corresponde &agrave; sua pesquisa e podem ser exportado. Escolha a op&ccedil;&atilde;o exportar e clique <em>Pr&oacute;ximo</em> para iniciar a exporta&ccedil;&atilde;o.');
define('LNG_Subscribers_Export_FoundMany', '%s contato corresponde &agrave; sua pesquisa e podem ser exportado. Escolha a op&ccedil;&atilde;o exportar e clique <em>Pr&oacute;ximo</em> para iniciar a exporta&ccedil;&atilde;o.');

define('LNG_ExportSummary_FoundOne', 'Clique no bot&atilde;o abaixo para exportar o seu contato. Por favor, n&atilde;o feche o navegador ou navegue fora desta p&aacute;gina, enquanto o seu contato est&aacute; sendo exportado.<br /><br />');
define('LNG_ExportSummary_FoundMany', 'Clique no bot&atilde;o abaixo para exportar o seu contato. (%s contatos ser&atilde;o exportados). Por favor, n&atilde;o feche o navegador ou navegue fora desta p&aacute;gina, enquanto o seu contato est&aacute; sendo exportado.<br /><br />');

define('LNG_ExportResults_InProgress_Message', 'Aguarde enquanto tenta exportar  %s contato(s).');

define('LNG_ExportResults_InProgress_Status', '%s de %s contatos foram exportados at&eacute; agora...');

define('LNG_ExportResults_Intro', 'Os contatos selecionados foram exportadas com sucesso. <a href=%s target=_blank>Clique aqui para baixar o arquivo exporta&ccedil;&atilde;o</a>. Voc&ecirc; deve excluir esse arquivo depois de ter terminado o download.');
define('LNG_ExportResults_Link', 'Clique aqui para baixar o contatos.');
define('LNG_ExportResults_InProgress', 'Exportando Contatos');

define('LNG_ImportSubscribers_bads_One', '1 contato cont&eacute;m dados corrompidos');
define('LNG_ImportSubscribers_bads_Many', '%s contato cont&eacute;m dados corrompidos');

define('LNG_SubscriberIPAddress', 'Contatos endere&ccedil;o IP');

define('LNG_ImportSubscribers_duplicates_Many_Link', '%s contatos duplicados de endere&ccedil;os de e-mail. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_duplicates_One_Link', '1 contact contained a duplicate e-mail address. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_failures_Many_Link', '%s contatos n&atilde;o foram importados com sucesso. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_failures_One_Link', '1 contatos n&atilde;o foram importados com sucesso. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_unsubscribes_Many_Link', '%s contatos foram removidos a partir desta lista. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_unsubscribes_One_Link', '1 contatos foram removidos a partir desta lista. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_bads_Many_Link', '%s contatos com dados corrompidos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_bads_One_Link', '1 contatos com dados corrompidos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');

define('LNG_Subscribers_Manage', 'Exibir Contatos');
define('LNG_Subscribers_Manage_Intro', 'Um contato &eacute; uma pessoa que tenha sido adicionada ou assinado uma lista de contatos. Voc&ecirc; pode ver todos os seus contatos ou voc&ecirc; pode usar as op&ccedil;&otilde;es de filtragem para localizar contatos espec&iacute;ficos.');
define('LNG_Subscribers_Manage_CancelPrompt', 'Tem certeza de que deseja cancelar a visualizacoes de contatos?');

define('LNG_Subscribers_Add', 'Adicionar um contato');
define('LNG_Subscribers_Add_Step1', LNG_Subscribers_Add);

define('LNG_Subscribers_Remove_Step2_Intro', 'Utilize o formul&aacute;rio abaixo para remover contatos de sua lista. Voc&ecirc; pode definir o status como removido ou pode exclu&iacute;-los definitivamente da sua lista.');

define('LNG_YesOverwriteExistingSubscriber', 'Sim, sobrescrever os contatos existentes');

define('LNG_Subscribers_Export', 'Exportar contatos para um arquivo');
define('LNG_Subscribers_Export_Intro', 'Uma c&oacute;pia da sua lista de contatos podem ser exportada para um arquivo CSV e voc&ecirc; pode baixar para seu computador. Favor selecionar a lista de contatos que voc&ecirc; deseja exportar a partir.');

define('LNG_Subscribers_Export_CancelPrompt', 'Tem certeza de que deseja cancelar a exportacao dos seus contatos?');

define('LNG_Subscribers_Export_Step3', 'Exportar contatos para um arquivo');

define('LNG_Subscribers_Export_Step4', 'Exportar contatos para um arquivo');

define('LNG_Subscribers_Edit_Intro', 'Atualize os detalhes do contato atrav&eacute;s do formul&aacute;rio abaixo.');

define('LNG_Subscribers_Add_Step1_Intro', 'Para adicionar um &uacute;nico contato escolha a lista e digite os dados do contato. Alternativa voc&ecirc; pode <a href="index.php?Page=Subscribers&Action=Import">importar contatos de um arquivo</a>.');

define('LNG_Subscribers_Add_Step2_Intro', 'Escreva os detalhes do novo contato no formul&aacute;rio abaixo. Ap&oacute;s clicar em Salvar, eles ser&atilde;o adicionados &agrave; sua lista.');

define('LNG_ImportSubscribers_bans_One_Link', '1 contato foi suprimido ao entrar nesta lista de contatos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');
define('LNG_ImportSubscribers_bans_Many_Link', '%s contato foi suprimido ao entrar nesta lista de contatos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Clique aqui para mais informa&ccedil;&otilde;es ]</a>');

define('LNG_ImportSubscribers_bans_Many', '%s contatos foram suprimidos ao entrar nesta lista de contatos');


define('LNG_Subscribers_FoundOne', 'Sua pesquisa retornou 1 contato. Os detalhes s&atilde;o mostrados abaixo.');
define('LNG_Subscribers_FoundMany', 'Sua pesquisa retornou %s contato. Os detalhes s&atilde;o mostrados abaixo.');

define('LNG_Subscribers_OneList_FoundOne', 'Voc&ecirc; tem 1 contato no sua lista de e-mail. Os detalhes s&atilde;o mostrados abaixo.');
define('LNG_Subscribers_OneList_FoundMany', 'Voc&ecirc; tem  %s contato no sua lista de e-mail. Os detalhes s&atilde;o mostrados abaixo.');
define('LNG_Subscribers_ManyList_FoundOne', 'Voc&ecirc; tem 1 contato em toda a sua lista. Os detalhes s&atilde;o apresentados abaixo.');
define('LNG_Subscribers_ManyList_FoundMany', 'Voc&ecirc; teme %s contato em toda a sua lista. Os detalhes s&atilde;o apresentados abaixo.');
define('LNG_Subscribers_AllList_FoundOne', 'Voc&ecirc; tem 1 contato em toda a sua lista. Os detalhes s&atilde;o apresentados abaixo..');
define('LNG_Subscribers_AllList_FoundMany', 'Voc&ecirc; tem %s contato em toda a sua lista. Os detalhes s&atilde;o apresentados abaixo..');

define('LNG_Subscribers_Segment_FoundOne', 'Voc&ecirc; tem 1 contato no seu segmento. Os detalhes s&atilde;o mostrados abaixo.');
define('LNG_Subscribers_Segment_FoundMany', 'Voc&ecirc; tem %s contato no seu segmento. Os detalhes s&atilde;o mostrados abaixo.');

define('LNG_SubscribersManageAnyList', 'Todos Contatos');
define('LNG_SubscribersManageMultipleList', 'Contatos para m&uacute;ltiplas listas');
define('LNG_SubscribersManageSearchResult', 'Resultados de pesquisa');
define('LNG_SubscribersManageSingleList', '%s');
define('LNG_SubscribersManageSegment', '%s');

define('LNG_SubscribersShowFilteringOptionsExplain', 'Ver contatos espec&iacute;ficos a partir das listas abaixo');
define('LNG_SubscribersDoNotShowFilteringOptionsExplain', 'Ver todos os contatos selecionados nas listas de contatos abaixo');
define('LNG_SubscribersShowSegmentsExplain', 'Ver todos os contatos selecionados dentro dos segmentos abaixo');

define('LNG_SubscribersShowFilteringOptionsOneListExplain', 'Contatos espec&iacute;ficos de dentro da sua lista de contatos');
define('LNG_SubscribersDoNotShowFilteringOptionsOneListExplain', 'Todos os contatos de sua lista de contatos');

define('LNG_SubscribersExportShowFilteringOptionsExplain', 'Exporta&ccedil;&atilde;o de contatos espec&iacute;ficos dentro da lista de contatos selecionada');
define('LNG_SubscribersExportDoNotShowFilteringOptionsExplain', 'Exportar todos os contatos selecionados na lista de contatos');

define('LNG_SubscribersExportShowFilteringOptionsOneListExplain', 'Exportar contatos espec&iacute;ficos de sua lista de contatos');
define('LNG_SubscribersExportDoNotShowFilteringOptionsOneListExplain', 'Exportar todos os contatos da minha lista de contatos');

define('LNG_Subscribers_Add_Step2', 'Adicionar um contato para %s');

define('LNG_HLP_ImportFileFromServer', htmlentities('Fa&ccedil;a o upload de um arquivo a partir da op&ccedil;&atilde;o "admin/import". Normalmente fa&ccedil;a o upload de um arquivo para o seu servidor usando "Upload do Arquivo..." para uma grande importa&ccedil;&atilde;o contendo milhares de Contatos.'));

define('LNG_HLP_ExportFileTypeCSV', 'Escolha esta op&ccedil;&atilde;o para exportar os seus dados de contato atrav&eacute;s de arquivo (CSV). Este tipo de arquivo pode ser aberto pela maioria dos programas de planilhas, inclusive Microsoft Excel.');
define('LNG_HLP_ExportFileTypeXML', 'Escolha esta op&ccedil;&atilde;o para exportar os seus dados de contato em formato de arquivo XML. Alguns aplicativos de terceiros permitem que voc&ecirc; trabalhe com dados atrav&eacute;s de um arquivo XML, ou voc&ecirc; pode extrair atrav&eacute;s de programa&ccedil;&atilde;o seus contatos a partir deste arquivo XML usando uma linguagem de programa&ccedil;&atilde;o.');

define('LNG_Subscribers_Export_MultipleList', 'Exportar contatos para: %s listas de contatos');
define('LNG_Subscribers_Export_AnyList', 'Exportar para todas as listas de contatos');

define('LNG_SubscribersShowFilteringOptionsExplainOne', 'Exibir contatos espec&iacute;ficos da sua lista de contatos');
define('LNG_SubscribersDoNotShowFilteringOptionsExplainOne', 'Ver todos os contatos em sua lista de contatos');

define('LNG_SubscribersExportShowFilteringOptionsExplainOne', 'Pesquisar por contatos para exportar a partir da minha lista de contatos');
define('LNG_SubscribersExportDoNotShowFilteringOptionsExplainOne', 'Exportar todos os contatos da minha lista de contatos');
define('LNG_HLP_RemoveOptions', 'O que voc&ecirc; quer que aconte&ccedil;a com a lista de endere&ccedil;os de Email?<br><br/>Escolha\\\'Excluir essa Lista\\\' para remov&ecirc;-los da lista de contatos completamente.<br/><br/>Escolha \\\'Remover\\\' para remov&ecirc;-los da lista que pediram para ser removidos.');
define('LNG_ImportResults_Report_Duplicates_Intro', 'Os seguintes endere&ccedil;os de e-mail j&aacute; estavam em sua lista de contatos ou no arquivo que voc&ecirc; carregou e n&atilde;o foram importados novamente.');
define('LNG_ImportResults_Report_Unsubscribed_Intro', 'Os seguintes endere&ccedil;os de e-mail n&atilde;o puderam ser importados, pois alguns foram removidos desta lista de contatos.');
define('LNG_HLP_IncludeField', 'Voc&ecirc; quer incluir esse campo na exporta&ccedil;&atilde;o de sua lista de contatos? Em caso negativo, defina esta op&ccedil;&atilde;o como \\\'Nenhuma\\\'');
define('LNG_NoBannedSubscribersOnList', 'A lista de contatos \'%s\' n&atilde;o cont&eacute;m qualquer endere&ccedil;os de e-mail suprimidos.');
define('LNG_Subscribers_Banned_Intro', 'Endere&ccedil;os de e-mail inclu&iacute;dos em uma lista suprimida jamais ser&aacute; enviado por Email, mesmo que os assinantes estejam inscritos em uma outra lista de contatos.');
define('LNG_Manage_Banned_Intro', 'Endere&ccedil;os de e-mail inclu&iacute;dos em uma lista suprimida jamais ser&aacute; enviado por Email, mesmo que os assinantes estejam inscritos em uma outra lista de contatos.');
define('LNG_HLP_BannedEmailsChooseList_Edit', 'Escolha a lista de contatos para suprimir um e-mail ou nome de dom&iacute;nio.');
define('LNG_Subscribers_Banned_Add_Intro', 'Endere&ccedil;os de e-mail inclu&iacute;dos em uma lista suprimida jamais ser&atilde;o enviados por Email, mesmo que os assinates estejam inscritos em outra lista de contatos.');
define('LNG_BannedEmailsChooseList', 'Eu quero suprimir contatos');
// we duplicate it here so we can use a different helptip.
define('LNG_BannedEmailsChooseList_Edit', LNG_BannedEmailsChooseList);
define('LNG_ImportResults_Report_Banned_Intro', 'Os seguintes endere&ccedil;os de e-mail n&atilde;o puderam ser importados porque est&atilde;o suprimidos para entrar nesta lista de contatos.');
define('LNG_SubscriberAddFail_Banned', 'O e-mail \'%s\' est&aacute; suprimido, n&atilde;o pode entrar nesta lista de contatos.');
define('LNG_Subscribers_Remove_Intro', 'Para apagar <em>permanente</em> um contato da sua lista, escolha a lista que voc&ecirc; deseja remov&ecirc;-los. <u>A remo&ccedil;&atilde;o de um contacto da sua lista n&atilde;o pode ser desfeita</u>.');
define('LNG_ImportFile_HeaderInMailingList', '... deve ser salvo como esses campos na lista de contatos:');
define('LNG_Help_SubscribersManage', 'Um contato &eacute; uma pessoa que assinou a sua lista de contatos.');
define('LNG_Subscribers_Import_Step2_Intro', 'Escolha o arquivo a partir do seu computador clicando no bot&atilde;o <em>Browse...</em> abaixo. Voc&ecirc; tamb&eacute;m pode utilizar op&ccedil;&otilde;es avan&ccedil;adas se for necess&aacute;rio.');
define('LNG_ImportTutorialLink', 'Saiba mais aqui sobre importa&ccedil;&atilde;o.');
define('LNG_HLP_ImportConfirmedStatus', 'Contatos importados dever&atilde;o estar marcados como confirmado? Um e-mail &eacute; confirmado utilizando double optin, atrav&eacute;s de um e-mail enviado com um link de confirma&ccedil;&atilde;o de inscr&iacute;&ccedil;&atilde;o.<br><br>Caso tenha sido confirmado o e-mail desses contatos, selecione a op&ccedil;&atilde;o Confirmado, caso contr&aacute;rio, selecione a op&ccedil;&atilde;o N&atilde;o confirmado e envie mais tarde um e-mail para confirmar sua inscri&ccedil;&atilde;o.');

define('LNG_HLP_OverwriteExistingSubscriber', 'Se j&aacute; existir um contato na lista atual de contatos com o mesmo endere&ccedil;o, e voc&ecirc; selecionar esta op&ccedil;&atilde;o, as suas informa&ccedil;&otilde;es atuais ser&atilde;o substitu&iacute;das pelos dados do novo arquivo de importa&ccedil;&atilde;o. Por exemplo, se um contcto tiver um campo \\\'N&uacute;mero de Telefone\\\' atualizado no arquivo CSV selecionado esta op&ccedil;&atilde;o ir&aacute; atualizar o n&uacute;mero de telefone com as novas informa&ccedil;&otilde;es. <br> <br> Se voc&ecirc; n&atilde;o tiver certeza, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_IncludeAutoresponder', 'Se uma resposta autom&aacute;tica for criada para esta lista de contatos, e se em seguida, for iniciado o iniciado o utilit&aacute;rio de resposta, automaticamente ser&aacute; enviada uma resposta autom&aacute;tica, caso contr&aacute;rio, esses contatos nunca ir&atilde;o receber qualquer resposta autom&aacute;tica.<br><br>Se voc&ecirc; n&atilde;o tiver certeza, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_EnterValidDate', 'Digite uma data v&aacute;lida para o campo personalizado \'%s\'');

define('LNG_Subscribers_AdvancedSearch', 'Pesquisa de Contatos');
define('LNG_Subscribers_SimpleSearch_Title', 'Pesquisar e-mails nesta lista de e-mail.');

define('LNG_Subscribers_View', 'Exibir Contato');
define('LNG_Subscribers_View_Intro', 'Detalhes do contato que voc&ecirc; selecionou s&atilde;o mostradas abaixo. Clique <em>Editar Contato</em> para fazer altera&ccedil;&otilde;es ou <em>Exclua o Contato</em> para apagar o contato da sua lista.');

define('LNG_Subscribers_View_Button_Edit', 'Editar Contato');
define('LNG_Subscribers_View_Button_Delete', 'Excluir Contato');

define('LNG_SubscriberDoesntExist_View', 'O contato que voc&ecirc; est&aacute; tentando visualizar n&atilde;o existe. Por favor, tente novamente.');
define('LNG_SubscriberDoesntExist_Edit', 'O contato que voc&ecirc; est&aacute; tentando editar nao existe. Por favor, tente novamente.');
define('LNG_BannedSubscriberDoesntExist', 'O e-mail suprimido que voc&ecirc; est&aacute; tentando editar n&atilde;o existe. Por favor, tente novamente.');

define('LNG_SubscriberSegmentDetails', 'Selecionar Segmento(s)');
define('LNG_SubscriberFilterBySegments', LNG_Segments);
define('LNG_HLP_SubscriberFilterBySegments', 'Segmentos que voc&ecirc; gostaria de ver os contatos? Escolha uma ou mais op&ccedil;&otilde;es assinalando os checkboxes.');

define('LNG_SubscriberViewPicker_All', 'Exibir Todos');
define('LNG_SubscriberViewPicker_Search', 'Buscar');

define('LNG_DeleteSelectedContacts', 'Excluir os contatos selecionados');

define('LNG_RemoveUnsubscribe', 'Marque como removidos em minha lista');
define('LNG_RemoveDelete', 'Remov&ecirc;-los da minha lista permanente');
define('LNG_RemoveViaTextbox', 'Digite os endere&ccedil;os de contatos em uma caixa de texto');
define('LNG_RemoveViaFile', 'Eu quero fazer o upload de um arquivo que cont&eacute;m os endere&ccedil;os de e-mail dos contatos');
define('LNG_RemoveConfirmDelete', 'Voc&ecirc; tem certeza que deseja remover permanentemente os contatos selecionados dessa lista de contatos? Essa a&ccedil;&atilde;o n&atilde;o pode ser desfeita.');

define('LNG_ShowSupressionsFor', 'Apresentar e-mails para Suprimir');
define('LNG_Banned_Choose_Action', 'Por favor, escolha como pretende adicionar e-mails reprimidos/dom&iacute;nios.');
define('LNG_Subscriber_Ban_Deleted_Many', '%s e-mails suprimidos foram removidos do dom&iacute;nio \'%s\'.');

define('LNG_Subscribers_Add_Button', 'Adicionar um contato &agrave; minha lista...');

define('LNG_SubscribersEditorCustomfieldHeader', 'Campo personalizado detalhes');

define('LNG_SubscriberQuickSearch_Description', 'Busca por endereco de e-mail...');
define('LNG_SubscriberQuickSearch_ClearSearch', 'Limpar resultados de pesquisa');

/**
**************************
* Changed/Added in 5.5.0
**************************
*/

define('LNG_EventAdd', 'Registro&nbsp;de&nbsp;Eventos');
define('LNG_EventAddTitle', 'Registrar um evento');
define('LNG_EventEditTitle', 'Editar um evento');
define('LNG_ChooseAnAction', 'Escolha uma a&ccedil;&atilde;o');
define('LNG_Date', 'Data');
define('LNG_Notes', 'Anota&ccedil;&otilde;es');
define('LNG_EventType', 'Tipo&nbsp;de&nbsp;Evento');
define('LNG_SelectAnEventType', 'Selecione um tipo de evento.');
define('LNG_Add_Event', 'Adicionar evento');
define('LNG_ConfirmEventDelete', 'Tem certeza que deseja remover este evento?');
define('LNG_EventSpecifyDate', 'N&atilde;o foi possivel analisar a data, use o formato dd/mm/yyyy.');
define('LNG_EventSpecifyTime', 'N&atilde;o foi possivel analisar a hora, use o formato hh:nn am/pm.');
define('LNG_ToggleEvents', 'Clique aqui para para logar eventos deste contato');
define('LNG_EnterEventSubject', 'Insira o assunto');

define('LNG_SubscriberEvents', 'Registro de evento');
define('LNG_SubscriberEvents_Intro', 'O registro de evento para este contato &eacute; mostrado abaixo.');
define('LNG_SubscriberEvents_Intro_AddEvent', ' Clique em <em>Registro de Eventos</em> para registrar um novo evento.');
define('LNG_ConfirmMultipleEventDelete', 'Deseja mesmo excluir os eventos selecionados?');
define('LNG_SubscriberEventsEmpty', 'N&atilde;o h&aacute; nenhum evento registrado para este contato. Clique abaixo para registrar um.');
define('LNG_CreatedBy', 'Criado por');
define('LNG_LastUpdated', 'Ultima modifica&ccedil;&atilde;o');
define('LNG_LogEvent', 'Registrando Evento...');
define('LNG_SelectAnEvent', 'Primeiro selecione um evento.');

define('LNG_AddtoGoogleCalendar', 'Clique aqui para adicionar um lembrete de continua&ccedil;&atilde;o em seu calend&aacute;rio do google.');
define('LNG_FollowUp', 'Continua&ccedil;&atilde;o');
define('LNG_GoogleCalendarDescription', LNG_FollowUp);
define('LNG_GoogleCalendarCaption', 'Adicionar para calend&aacute;rio do google');
define('LNG_Where', 'Onde');
define('LNG_What', 'Qual');
define('LNG_When', 'Quando');
define('LNG_AllDay', 'Todo dia');
define('LNG_to', 'para');
define('LNG_Description', 'Descri&ccedil;&atilde;o');
define('LNG_GoogleCalendarEnterDescription', 'Insira uma descri&ccedil;&atilde;o para este evento do calend&aacute;rio.');

define('LNG_GoogleCalendarException', 'Incapaz de salvar o evento. Assegure-se de que a data e a hora estejam formatadas corretamente.');
define('LNG_GoogleCalendarAuth', 'Seu usu&aacute;rio e senha foram rejeitados. Verifique novamente por favor.');
define('LNG_GoogleCalendarIntro', 'Complete o formul&aacute;rio abaixo para adicionar um evento a seu calend&aacute;rio.');
define('LNG_GoogleCalendarNotEnabled', 'Para adicionar um evento ao calend&aacute;rio do Google voc&ecirc; deve inserir seu login em suas configura&ccedil;&otilde;es do Calend&aacute;rio do Google.');

define('LNG_AddToGoogleCalendar', 'Adicionar em meu calend&aacute;rio do google');
define('LNG_GoogleCalendarUnabletoSave', 'Incapaz de salvar o evento do calend&aacute;rio do Google. Um erro ocorreu: %s');

/**
**************************
* Changed/Added in 5.7.1
**************************
*/
define('LNG_RequireFieldNotLinked', 'Os seguintes campos personalizados requeridos n&atilde;o est&atilde;o ligados: <strong>%s</strong>. N&atilde;o &eacute; poss&iacute;vel prosseguir at&eacute; que todos os campos estejam ligados.');

/*
 * 6.0.2
 */
define('LNG_ShowFilteringOptionsLabel', 'Selecionar Filtro de Contatos?');
define('LNG_ShowFilteringOptionsExplanation', 'Sim, eu gostaria de filtrar os contatos da lista selecionada(s).');