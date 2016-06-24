<?php
/**
* Language file variables for the autoresponders area.
*
* @see GetLang
*
* @version     $Id: autoresponders.php,v 1.39 2008/02/15 06:07:47 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the autoresponders area... Please backup before you start!
*/

define('LNG_AutorespondersManage', 'Exibir resposta autom&aacute;tica');

define('LNG_AutoresponderCreate', '&nbsp;Clique no bot&atilde;o "Criar resposta autom&aacute;tica" para criar uma.');

define('LNG_Autoresponder_Step1', 'Exibir resposta autom&aacute;tica');
define('LNG_Autoresponder_Step1_CancelPrompt', 'Tem certeza de que deseja cancelar o gerenciamento de resposta automatica?');

define('LNG_Autoresponders_Step2', LNG_Autoresponder_Step1);

define('LNG_CreateAutoresponder', 'Criar resposta autom&aacute;tica');

define('LNG_CreateAutoresponderCancelButton', 'Tem certeza que deseja cancelar a cria&ccedil;&atilde;o de nova resposta autom&aacute;tica?');
define('LNG_CreateAutoresponderHeading', 'Exibir detalhes da nova resposta autom&aacute;tica');

define('LNG_CreateAutoresponderIntro_Step4', 'Insira o conte&uacute;do de sua resposta autom&aacute;tica no formul&aacute;rio abaixo. Clique no bot&atilde;o "Salvar e Sair" bot&atilde;o quando tiver terminado.');

define('LNG_EditAutoresponderIntro_Step4', 'Atualize seu conte&uacute;do abaixo. Clique no bot&atilde;o "Salvar e Sair" bot&atilde;o quando tiver terminado.');

define('LNG_AutoresponderDetails', 'Ver detalhes da resposta autom&aacute;tica');

define('LNG_EditAutoresponder', 'Editar resposta autom&aacute;tica');
define('LNG_EditAutoresponderIntro', 'Preencha o formul&aacute;rio abaixo para atualizar a resposta autom&aacute;tica selecionada. Voc&ecirc; tamb&eacute;m pode <a href="#" onClick="LaunchHelp(\'797\'); return false;">aprender mais sobre resposta autom&aacute;tica</a>.');
define('LNG_EditAutoresponderCancelButton', 'Tem certeza de que deseja cancelar a atualiza&ccedil;&atilde;o da resposta autom&aacute;tica?');
define('LNG_EditAutoresponderHeading', 'Ver detalhes da resposta autom&aacute;tica');

define('LNG_EnterAutoresponderName', 'Por favor, digite um nome para esta resposta autom&aacute;tica.');
define('LNG_PleaseEnterAutoresonderSubject', 'Por favor, digite um assunto para esta resposta autom&aacute;tica.');

define('LNG_AutoresponderName', 'Nome da resposta autom&aacute;tica');

define('LNG_AutoresponderNameIsNotValid', 'Nome da resposta autom&aacute;tica n&atilde;o &eacute; v&aacute;lido');
define('LNG_UnableToCreateAutoresponder', 'n&atilde;o foi poss&iacute;vel criar a resposta autom&aacute;tica');

define('LNG_DeleteAutoresponderPrompt', 'Tem certeza de que deseja excluir esta resposta automatica?');

define('LNG_UnableToUpdateAutoresponder', 'n&atilde;o foi poss&iacute;vel atualizar a resposta autom&aacute;tica');

define('LNG_AutoresponderDeleteFail', 'n&atilde;o &eacute; poss&iacute;vel excluir a resposta autom&aacute;tica');
define('LNG_AutoresponderDeleteSuccess', 'Resposta autom&aacute;tica exclu&iacute;da com sucesso');

define('LNG_AutoresponderFormat', 'Formato da resposta autom&aacute;tica');
define('LNG_HLP_AutoresponderFormat', 'Que formato deve ser esta resposta autom&aacute;tica?');
define('LNG_AutoresponderContent', 'Digite abaixo o conte&uacute;do da resposta autom&aacute;tica');

define('LNG_AutoresponderCopySuccess', 'A resposta autom&aacute;tica selecionada foi copiada e pode ser editada a seguir.');
define('LNG_AutoresponderCopyFail', 'Resposta autom&aacute;tica N&Atilde;O foi copiada com sucesso.');

define('LNG_AutoresponderSubject', 'Assunto do E-mail');

define('LNG_HLP_AutoresponderSubject', 'O assunto do e-mail resposta autom&aacute;tica. Voc&ecirc; pode incluir campos personalizados no assunto, copiando simplesmente o espa&ccedil;o reservado e colocando-o na caixa de texto.');

define('LNG_Autoresponder_Edit_Disabled', 'Voc&ecirc; n&atilde;o pode editar essa resposta autom&aacute;tica, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Autoresponder_Copy_Disabled', 'Voc&ecirc; n&atilde;o pode copiar esta resposta autom&aacute;tica, voc&ecirc; n&atilde;o tem acesso.');
define('LNG_Autoresponder_Delete_Disabled', 'Voc&ecirc; n&atilde;o pode excluir esta resposta autom&aacute;tica, voc&ecirc; n&atilde;o tem acesso.');

define('LNG_UnableToLoadAutoresponder', 'n&atilde;o foi poss&iacute;vel carregar a resposta autom&aacute;tica. Por favor, tente novamente.');

define('LNG_MatchEmail', 'Igualar E-mail');

define('LNG_MatchFormat', 'Igualar Formato');

define('LNG_MatchConfirmedStatus', 'Igualar Status de confirma&ccedil;&atilde;o');


define('LNG_SendMultipart', 'Enviar e-mail em multi-formato, texto e html?');
define('LNG_SendMultipartExplain', 'Sim, envie um e-mail como em multi-formato');

define('LNG_TrackOpens', 'Monitorar as taxas de abertura de e-mails HTML?');
define('LNG_TrackOpensExplain', 'Sim, monitorar abertura de e-mails HTML');

define('LNG_TrackLinks', 'Monitorar links clicados neste e-mail?');
define('LNG_HLP_TrackLinks', 'Deseja acompanhar todos os cliques no link desta campanha por e-mail? Em caso afirmativo, voc&ecirc; poder&aacute; visualizar relat&oacute;rios e estat&iacute;sticas sobre cliques, nos links na guia da parte superior da p&aacute;gina.');
define('LNG_TrackLinksExplain', 'Sim, monitorar todos os links desta campanha por e-mail');

define('LNG_EmailFormat', 'Formato de e-mail ');

define('LNG_AutoresponderFile', 'Arquivo de resposta autom&aacute;tica');
define('LNG_HLP_AutoresponderFile', 'Fazer upload de um arquivo html do seu computador para usar como sua resposta autom&aacute;tica');
define('LNG_UploadAutoresponder', 'Upload');
define('LNG_AutoresponderFileEmptyAlert', 'Por favor, escolha um arquivo do seu computador antes de tentar enviar.');
define('LNG_AutoresponderFileEmpty', 'Por favor, escolha um arquivo do seu computador antes de tentar carreg&aacute;-lo.');

define('LNG_AutoresponderURL', 'URL da Resposta autom&aacute;tica');
define('LNG_HLP_AutoresponderURL', 'Importar uma resposta autom&aacute;tica a partir de uma URL');
define('LNG_ImportAutoresponder', 'Importar');
define('LNG_AutoresponderURLEmptyAlert', 'Por favor, digite a URL para importar o arquivo de resposta automatica');
define('LNG_AutoresponderURLEmpty', 'Por favor, digite a URL para importar o arquivo de resposta autom&aacute;tica');

define('LNG_AutoresponderActivatedSuccessfully', 'A resposta autom&aacute;tica selecionada est&aacute; ativa.');
define('LNG_AutoresponderDeactivatedSuccessfully', 'A resposta autom&aacute;tica selecionado n&atilde;o est&aacute; mais ativa.');

define('LNG_Autoresponder_Title_Enable', 'Ativar esta resposta autom&aacute;tica');
define('LNG_Autoresponder_Title_Disable', 'Desativar esta resposta autom&aacute;tica');

define('LNG_ChooseAutoresponders', 'Por favor, escolha pelo menos uma resposta autom&aacute;tica.');
define('LNG_ActivateAutoresponders', 'Ativar resposta autom&aacute;tica selecionada(s)');
define('LNG_DeactivateAutoresponders', 'Desativar resposta autom&aacute;tica selecionada(s)');

define('LNG_Autoresponder_Approved', 'A resposta autom&aacute;tica selecionada foi ativada.');
define('LNG_Autoresponders_Approved', 'A %s resposta autom&aacute;tica selecionada foi ativada.');

define('LNG_Autoresponder_NotApproved', 'A resposta autom&aacute;tica selecionada n&atilde;o p&ocirc;de ser ativada. Por favor, tente novamente.');
define('LNG_Autoresponders_NotApproved', 'A %s resposta autom&aacute;tica selecionada n&atilde;o p&ocirc;de ser ativada. Por favor, tente novamente.');

define('LNG_Autoresponder_Disapproved', 'A resposta autom&aacute;tica selecionada foi desativada.');
define('LNG_Autoresponders_Disapproved', 'A %s resposta autom&aacute;tica selecionada foi desativada.');

define('LNG_Autoresponder_NotDisapproved', '1 resposta autom&aacute;tica n&atilde;o foi desativada. Por favor, tente novamente.');
define('LNG_Autoresponders_NotDisapproved', '%s resposta autom&aacute;tica n&atilde;o foi desativada. Por favor, tente novamente.');

define('LNG_Autoresponder_Deleted', 'A resposta autom&aacute;tica selecionada foi exclu&iacute;da.');
define('LNG_Autoresponders_Deleted', 'A %s resposta autom&aacute;tica selecionada foi exclu&iacute;da.');

define('LNG_Autoresponder_NotDeleted', '1 resposta autom&aacute;tica n&atilde;o foi exclu&iacute;da. Por favor, tente novamente.');
define('LNG_Autoresponders_NotDeleted', '%s resposta autom&aacute;tica n&atilde;o foi exclu&iacute;da. Por favor, tente novamente.');

define('LNG_Autoresponder_Details', 'Detalhes da resposta autom&aacute;tica');

define('LNG_Autoresponder_OpenedNewsletter', LNG_OpenedNewsletter);
define('LNG_Autoresponder_YesFilterByOpenedNewsletter', LNG_YesFilterByOpenedNewsletter);

define('LNG_Autoresponder_ClickedOnLink', LNG_ClickedOnLink);
define('LNG_Autoresponder_YesFilterByLink', LNG_YesFilterByLink);

define('LNG_ChooseATime', 'Escolha uma op&ccedil;&atilde;o');
define('LNG_1Day', '1 Dia');
define('LNG_2Days', '2 Dias');
define('LNG_3Days', '3 Dias');
define('LNG_4Days', '4 Dias');
define('LNG_5Days', '5 Dias');
define('LNG_6Days', '6 Dias');
define('LNG_1Week', '1 Semana');
define('LNG_2Weeks', '2 Semanas');
define('LNG_3Weeks', '3 Semanas');
define('LNG_1Month', '1 m&ecirc;s');
define('LNG_2Months', '2 Meses');
define('LNG_3Months', '3 Meses');
define('LNG_4Months', '4 Meses');
define('LNG_5Months', '5 Meses');
define('LNG_6Months', '6 Meses');
define('LNG_7Months', '7 Meses');
define('LNG_8Months', '8 Meses');
define('LNG_9Months', '9 Meses');
define('LNG_10Months', '10 Meses');
define('LNG_11Months', '11 Meses');
define('LNG_1Year', '1 Ano');
define('LNG_2Years', '2 Anos');
define('LNG_3Years', '3 Anos');

/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_HoursDelayed', 'Enviar esta resposta autom&aacute;tica');

define('LNG_TemplateDetails','Conte&uacute;do da Resposta Autom&aacute;tica');

/**
**************************
* Changed/added in NX1.1.1
**************************
*/
define('LNG_AutoresponderFilesCopyFail', 'As imagens e ou anexos desta resposta autom&aacute;tica, n&atilde;o foram copiados com sucesso.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_AutoresponderActivateFailed_HasAttachments', 'A resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque voc&ecirc; n&atilde;o tem permiss&atilde;o para enviar anexos. Para ativar essa resposta autom&aacute;tica, por favor, edite e remova os anexos.');
define('LNG_AutoresponderActivateFailed_HasAttachments_Multiple', '%s A resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque voc&ecirc; n&atilde;o tem permiss&atilde;o para enviar anexos. Para ativar essa resposta autom&aacute;tica, por favor, edite e remova os anexos.');

define('LNG_UnableToLoadImage_Autoresponder_List_Embed', 'n&atilde;o &eacute; poss&iacute;vel carregar as seguintes imagens para compor a resposta autom&aacute;tica. Provavelmente a imagem n&atilde;o exista.<br/>%s');
define('LNG_UnableToLoadImage_Autoresponder_List', 'n&atilde;o &eacute; poss&iacute;vel carregar as imagens na resposta autom&aacute;tica. Provavelmente a imagem n&atilde;o exista.<br/>%s');

define('LNG_AutoresponderUpdated', 'Resposta autom&aacute;tica atualizada com sucesso. %s');

define('LNG_AutoresponderCreated', 'Sua resposta autom&aacute;tica de e-mail foi criada com sucesso. %s');

define('LNG_FormatDetails', 'Op&ccedil;&otilde;es avan&ccedil;adas');
// removed
// define('LNG_HTMLFormatDetails','HTML Format Details');

define('LNG_CreateAutoresponderButton', 'Criar resposta autom&aacute;tica...');


define('LNG_Autoresponder_Size_Over_EmailSize_Maximum_Embed', 'Esta resposta autom&aacute;tica &eacute; maior do que %s. Voc&ecirc; n&atilde;o poder&aacute; ativar esta resposta autom&aacute;tica at&eacute; que voc&ecirc; reduza o tamanho das imagens ou anexos, ou voc&ecirc; poder&aacute; envi&aacute;-la sem imagens incorporadas.');
define('LNG_Autoresponder_Size_Over_EmailSize_Maximum_No_Embed', 'Esta resposta autom&aacute;tica &eacute; maior do que %s. Voc&ecirc; n&atilde;o poder&aacute; ativar esta resposta autom&aacute;tica at&eacute; que voc&ecirc; reduza o tamanho dos anexos.');

define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Embed', 'A resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque ela &eacute; maior do que %s. Voc&ecirc; ter&aacute; que reduzir o tamanho das imagens ou anexos, ou Voc&ecirc; poder&aacute; edit&aacute;-la e desativar as imagens incorporadas.');
define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Embed_Multiple', '%s a resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque ela &eacute; maior do que %s. Voc&ecirc; ter&aacute; que reduzir o tamanho das imagens ou anexos, ou voc&ecirc; poder&aacute; edit&aacute;-la e desativar as imagens incorporadas.');

define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum', 'A resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque ela &eacute; maior do que %s. Voc&ecirc; ter&aacute; que reduzir o tamanho dos anexos.');
define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Multiple', '%s a resposta autom&aacute;tica n&atilde;o p&ocirc;de ser ativada porque ela &eacute; maior do que %s. Voc&ecirc; ter&aacute; que reduzir o tamanho dos anexos.');

define('LNG_Autoresponder_Title_Disable_Too_Big', 'Voc&ecirc; n&atilde;o pode ativar esta resposta autom&aacute;tica porque &eacute; muito grande.');

// this needs to have no single quotes in it.
define('LNG_Autoresponder_Title_Disable_Too_Big_Alert', LNG_Autoresponder_Title_Disable_Too_Big);

define('LNG_FilterOptions_Autoresponders', 'Op&ccedil;&otilde;es de Pesquisa');
define('LNG_ShowFilteringOptions_Autoresponders', 'Esta resposta autom&aacute;tica deve ir para');

define('LNG_AutoresponderFilterDetails', 'Filtrar por informa&ccedil;&otilde;es b&aacute;sicas ');

define('LNG_EditAutoresponderIntro_Step3', LNG_EditAutoresponderIntro);


/**
**************************
* Changed/added in NX 5.0
**************************
*/

define('LNG_HLP_AutoresponderName', 'Digite um nome para esta resposta autom&aacute;tica. Esse nome ser&aacute; usado para identificar a resposta autom&aacute;tica no painel de controle e n&atilde;o ir&aacute; ser exibido para os seus contatos.');

define('LNG_AutoresponderIncludeExisting', 'Enviar para contatos existentes?');

define('LNG_AutoresponderIncludeExistingExplain', ' Sim, enviar esta resposta autom&aacute;tica para contatos existentes');

define('LNG_HLP_MatchEmail', 'Respostas autom&aacute;ticas s&oacute; ser&atilde;o enviadas para os contatos que correspondem a esse e-mail. Voc&ecirc; pode especificar todos ou parte de um e-mail. Por exemplo, para enviar para todos os endere&ccedil;os de e-mail do Hotmail, voc&ecirc; pode usar \\\'@hotmail.com\\\'. Para enviar a todos os endere&ccedil;os de e-mail, basta deixar este campo em branco.');

define('LNG_HLP_MatchFormat', 'Respostas autom&aacute;ticas s&oacute; ser&atilde;o enviados aos contatos que tenham escolhido este formato na inscri&ccedil;&atilde;o. Se voc&ecirc; selecionar \\\'HTML\\\' ent&atilde;o essa resposta autom&aacute;tica s&oacute; ser&aacute; enviado aos usu&aacute;rios que tenham selecionado \\\'HTML\\\' como seu formato preferido quando aderiu &agrave; sua lista de contatos.');

define('LNG_HLP_MatchConfirmedStatus', 'Respostas autom&aacute;ticas s&oacute; ser&atilde;o enviados aos contatos que tenham confirmado a sua inscri&ccedil;&atilde;o e-mail. Quando se utiliza double-OptIn para confirmar a inscri&ccedil;&atilde;o, seus contatos receber&atilde;o um e-mail para confirmar sua inscri&ccedil;&atilde;o. Caso tenham confirmado a sua inscri&ccedil;&atilde;o, em seguida, seu status ser&aacute; \\\'CONFIRMADO\\\'. Sugerimos enviar e-mails somente para contatos confirmados.');

define('LNG_HLP_SendMultipart', 'O envio de e-mails em multi-formato permite que os contatos possam decidir qual formato (HTML ou Texto) desejam receber.<br/><br/>&eacute; melhor usar esta op&ccedil;&atilde;o \\\ se voc&ecirc; n&atilde;o consegue oferecer aos seus contatos a op&ccedil;&atilde;o para escolha de um formato para receber (por exemplo: Todos inscritos recebem somente e-mails em formato HTML), quando recebem o e-mail seu software de e-mail (Exemplo: Outlook) vai mostrar automaticamente o formato correto.<br/><br/>Se n&atilde;o tiver certeza, deixe essa op&ccedil;&atilde;o assinalada.');

define('LNG_HLP_TrackOpens', 'Deseja monitorar a abertura de e-mails quando um contato receber um e-mail da campanha? Em caso afirmativo, voc&ecirc; poder&aacute; visualizar relat&oacute;rios estat&iacute;sticos a partir da guia na parte superior da p&aacute;gina. Isso se aplica apenas a e-mails enviados no formato HTML.');

define('LNG_HLP_EmailFormat', 'Como esta resposta autom&aacute;tica ser&aacute; composta e enviada? Selecione HTML, se quiser incluir texto colorido, imagens, tabelas e outros elementos HTML. Escolha Texto para criar e enviar a sua resposta autom&aacute;tica em texto sem formata&ccedil;&atilde;o. Alternativamente, voc&ecirc; pode escolher \\\'Ambos HTML e de Texto\\\' para criar duas vers&otilde;es de sua resposta autom&aacute;tica. Os contatos que podem visualizar HTML visualizar&atilde;o a vers&atilde;o em HTML. Aqueles que n&atilde;o podem\\\visualizar&atilde;o a vers&atilde;o apenas de texto simples.');

define('LNG_AutoresponderHasBeenDisabled', 'Para evitar que uma resposta autom&aacute;tica incompleta seja enviada para seus contatos, deve ser marcada como inativa. Para ativar a sua resposta autom&aacute;tica, clique no \'X\' para ativar a coluna.');

define('LNG_AutoresponderHasBeenDisabled_Save', 'Para evitar que uma resposta autom&aacute;tica incompleta seja enviada para seus contatos, deve ser marcada como inativa.<br>Voc&ecirc; ter&aacute; que ativar esta resposta autom&aacute;tica quando for para a p&aacute;gina "Gerenciador de resposta autom&aacute;tica".');

define('LNG_HLP_Autoresponder_OpenedNewsletter', 'Esta op&ccedil;&atilde;o permite que voc&ecirc; filtre Os contatos de uma lista que abriram uma determinada campanha de e-mail. Se selecionado, ser&aacute; enviado esta resposta autom&aacute;tica apenas para os contatos que abriram o e-mail. Para enviar a todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_Autoresponder_ClickedOnLink', 'Esta op&ccedil;&atilde;o permite filtrar os contatos que clicaram em um link espec&iacute;fico de uma campanha de Email, enviada uma lista de contatos. Se selecionado, ser&aacute; enviado esta resposta autom&aacute;tica apenas para os contatos que clicaram no link escolhido. Para enviar a todos os contatos, deixe essa op&ccedil;&atilde;o desmarcada.');

define('LNG_HLP_HoursDelayed', 'Quanto tempo depois de aderir a sua lista o usu&aacute;rio dever&aacute; receber esta resposta autom&aacute;tica? Escolha \\\'Logo que o contato aderir a minha lista\\\' para enviar a resposta autom&aacute;tica para os contatos logo que aderirem a sua lista.<br /><br />Escolha \\\'Ap&oacute;s o contato ter aderido a minha lista\\\' para enviar a resposta autom&aacute;tica para novos contatos Ap&oacute;s o per&iacute;odo de tempo especificado.');

define('LNG_Autoresponder_Size_Approximate', 'Esta resposta autom&aacute;tica ser&aacute; aproximadamente de %s por contato.');



define('LNG_Autoresponder_Size_Over_EmailSize_Warning_Embed', 'Esta resposta autom&aacute;tica &eacute; maior do que %s, o que significa que pode demorar um pouco para os seus contatos conclu&iacute;rem o download. Se voc&ecirc; n&atilde;o inserir imagens, isso reduzir&aacute; o tamanho do e-mail que os seus contatos receber&atilde;o.');
define('LNG_Autoresponder_Size_Over_EmailSize_Warning_No_Embed', 'Esta resposta autom&aacute;tica &eacute; maior do que %s, o que significa que pode demorar um pouco para os seus contatos conclu&iacute;rem o download.');

define('LNG_AutorespondersShowFilteringOptionsOneListExplain', 'Somente contatos que correspondam aos crit&eacute;rios de pesquisa (abaixo)');
define('LNG_AutorespondersDoNotShowFilteringOptionsOneListExplain', 'Todos os contatos na minha lista com um status de "confirmados"');


define('LNG_AutoresponderAlreadySentTo', "*** IMPORTANTE **** \n\nEsta resposta autom&aacute;tica j&aacute; foi enviada para %s contatos. Se voc&ecirc; deixar esta op&ccedil;&atilde;o ativada, todos esses contatos ir&atilde;o receber essa resposta autom&aacute;tica novamente. Se voc&ecirc; n&atilde;o quiser enviar esta resposta autom&aacute;tica para eles novamente, basta desmarcar esta op&ccedil;&atilde;o.\n\nNovos contatos adicionados a sua lista de contatos atrav&eacute;s de um formul&aacute;rio em seu site ou que sejam adicionados atrav&eacute;s da op&ccedil;&atilde;o 'Adicionar Contatos' receber&atilde;o automaticamente essa resposta autom&aacute;tica.");

define('LNG_NoAutoresponders', 'n&atilde;o foi criada nenhuma resposta autom&aacute;tica para esta lista de contatos. Clique no bot&atilde;o abaixo <em>Criar resposta autom&aacute;tica...</em> para criar uma.');

define('LNG_AutoresponderAssign', '&nbsp;Por favor, fale com o administrador do sistema para atribuir-lhe uma lista de contatos.');


define('LNG_HLP_AutoresponderIncludeExisting', 'Escolha essa op&ccedil;&atilde;o para enviar a resposta autom&aacute;tica para os novos contatos e os j&aacute; existentes da lista selecionada.<br /><br/>Esta op&ccedil;&atilde;o n&atilde;o ser&aacute; lembrada na pr&oacute;xima vez que voc&ecirc; editar esta resposta autom&aacute;tica. Somente ser&atilde;o adicionados os contatos existentes &agrave; lista de destinat&aacute;rios na pr&oacute;xima vez que a resposta autom&aacute;tica for enviada.');


define('LNG_Autoresponder_Step1_Intro', 'Resposta autom&aacute;tica s&atilde;o e-mails que voc&ecirc; pode configurar para serem enviados automaticamente para contatos em diferentes intervalos ap&oacute;s se inscreverem. <a href="#" onClick="LaunchHelp(\'797\'); return false;">Saiba mais sobre resposta autom&aacute;tica</a>.');

define('LNG_Help_AutorespondersManage', LNG_Autoresponder_Step1_Intro);

define('LNG_CreateAutoresponder_Step1_Intro', 'Criar uma resposta autom&aacute;tica &eacute; um processo de v&aacute;rias etapas. Comece digitando um nome e escolhendo quem deve receb&ecirc;-lo e, em seguida, clique no bot&atilde;o <em>Pr&oacute;ximo &gt;&gt;</em>.  <a href="#" onClick="LaunchHelp(\'797\'); return false;">Obtenha ajuda para criar resposta autom&aacute;tica clicando aqui</a>.');

define('LNG_CreateAutoresponderIntro', LNG_CreateAutoresponder_Step1_Intro);

define('LNG_CreateAutoresponderIntro_Step3', LNG_Autoresponder_Step1_Intro);

define('LNG_AutoresponderCronNotEnabled', 'Antes de seus contatos receberem resposta autom&aacute;tica, voc&ecirc; precisa configurar o envio programado. Por favor, veja <a href="#" onclick="LaunchHelp(\'841\'); return false;">este artigo</a> para saber como, ou entre em contato com o administrador.');

define('LNG_Autoresponder_Name_Reference', 'Este nome &eacute; apenas para sua refer&ecirc;ncia e n&atilde;o ser&aacute; exibido');
define('LNG_Autoresponder_Filter_Help', 'Preencha os campos abaixo para filtrar os contatos. Voc&ecirc; n&atilde;o precisa preencher todos os campos, somente aqueles que desejar filtrar. <a onclick="LaunchHelp(\'832\'); return false;" href="#">Saiba mais sobre a filtros de contatos.</a>');

define('LNG_SchedulingDetails', 'Op&ccedil;&otilde;es de Envio');
define('LNG_Autoresponder_Valid_Time', 'Digite um n&uacute;mero v&aacute;lido para o tempo de espera.');

define('LNG_Autoresponder_Send_ASAP', 'Logo que o contato aderir a minha lista');
define('LNG_Autoresponder_Send_Custom', 'Ap&oacute;s o contato ter aderido a minha lista');

define('LNG_Autoresponder_Period_Hours', 'hora(s)');
define('LNG_Autoresponder_Period_Days', 'dia(s)');
define('LNG_Autoresponder_Period_Weeks', 'semana(s)');
define('LNG_Autoresponder_Period_Months', 'mes(es)');
define('LNG_Autoresponder_Period_Years', 'ano(s)');

define('LNG_Autoresponder_I_Want_To', 'Eu quero');
define('LNG_Autoresponder_From_Scratch', 'Criar o conte&uacute;do da minha resposta autom&aacute;tica a partir do zero');
define('LNG_Autoresponder_From_Tpl', 'Criar o conte&uacute;do da minha resposta autom&aacute;tica a partir de um modelo');

define('LNG_DeleteAutoresponders', 'Excluir a resposta autom&aacute;tica selecionada');

/**
**************************
* Changed/added in 5.6.6
**************************
*/

define('LNG_NoAttachment_Admin', 'Anexos desativados. Voc&ecirc; pode habilitar nas configura&ccedil;&otilde;es de E-mail');
define('LNG_NoAttachment_User', 'Anexos foram desativados pelo administrador');


?>
