<?php
/**
* Language file variables for the Triggers.
*
* @see GetLang
*
* @author Hendri <hendri@localhost>
*
* @package SendStudio
* @subpackage Language
*/

define('LNG_TriggerEmails_Intro', 'Um disparador ativa uma a&ccedil;&atilde;o quando um evento espec&iacute;fico ocorre, como a emiss&atilde;o de um e-mail de Aniversario em um Aniversario de pessoas dos contatos ou a adi&ccedil;&atilde;o de um contato a uma lista nova quando clicam em um link.');

define('LNG_TriggerEmails_Create', 'Criar um disparador');
define('LNG_TriggerEmails_Edit', 'Editar um disparador');

define('LNG_TriggerEmails_Cannot_Load_Record', 'N&atilde;o pode ser gravado');
define('LNG_TriggerEmails_Cannot_Invalid_ID', 'ID do disparador especificado inv&aacute;lido');


/**
 * Language definitions used in the "Manage" page
 */
define('LNG_TriggerEmails_Manage', 'Disparadores');
define('LNG_TriggerEmails_Manage_CRON_Alert', 'Ative o Cron para usar os disparadores.');

define('LNG_TriggerEmails_Manage_AddListButton', 'Criar uma nova lista de contatos ...');
define('LNG_TriggerEmails_Manage_NoLists', 'Nenhuma lista de contatos foi definida. %s');
define('LNG_TriggerEmails_Manage_NoLists_CanCreate', '&nbsp;Clique no bot&atilde;o "' . LNG_TriggerEmails_Manage_AddListButton . '" abaixo para criar.');
define('LNG_TriggerEmails_Manage_NoLists_AskAdmin', '&nbsp;Contate por favor seu administrador de sistema para criar um para voc&ecirc;.');

define('LNG_TriggerEmails_Manage_AddCampaignButton', 'Criar nova campanha ...');
define('LNG_TriggerEmails_Manage_NoCampaigns', 'Nenhuma campanha de e-mail foi definida. %s');
define('LNG_TriggerEmails_Manage_NoCampaigns_CanCreate', '&nbsp;Clique no bot&atilde;o "' . LNG_TriggerEmails_Manage_AddCampaignButton . '" abaixo para criar.');
define('LNG_TriggerEmails_Manage_NoCampaigns_AskAdmin', '&nbsp;Contate por favor seu administrador de sistema para criar um para voc&ecirc;.');

define('LNG_TriggerEmails_Manage_AddButton', 'Criar um disparador...');
define('LNG_TriggerEmails_Manage_NoRecords', 'Nenhum disparador foi criado. %s');
define('LNG_TriggerEmails_Manage_NoRecords_CreateRecord', '&nbsp;Clique no bot&atilde;o "' . LNG_TriggerEmails_Manage_AddButton . '" abaixo para criar.');
define('LNG_TriggerEmails_Manage_NoRecords_AskAdmin', '&nbsp;Contate por favor seu administrador de sistema para criar um para voc&ecirc;.');

define('LNG_TriggerEmails_Manage_BulkAction_Delete', 'Deletar disparador(es) selecionado(s)');
define('LNG_TriggerEmails_Manage_BulkAction_Activate', 'Marcar disparador(es) selecionado(s) como ativo(s)');
define('LNG_TriggerEmails_Manage_BulkAction_Deactivate', 'Marcar disparador(es) selecionado(s) como inativo(s)');

define('LNG_TriggerEmails_Manage_Column_TriggerName', 'Nome');
define('LNG_TriggerEmails_Manage_Column_CampaignName', 'Campanha');
define('LNG_TriggerEmails_Manage_Column_CreateDate', 'Criado');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy', 'Disparado&nbsp;Por');
define('LNG_TriggerEmails_Manage_Column_TriggerHours', 'Quando');
define('LNG_TriggerEmails_Manage_Column_Owner', 'Criado por');
define('LNG_TriggerEmails_Manage_Column_Status', LNG_Active);

define('LNG_TriggerEmails_Manage_Column_TriggeredBy_CustomField', 'Campo perosonalizado');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_CampaignOpen', 'Campanha&nbsp;de&nbsp;Email&nbsp;Aberta');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_LinkClicked', 'Link Clicado');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_StaticDate', 'Data predefinida');

define('LNG_TriggerEmails_Manage_Column_TriggerDays_Immediate', 'Imediatamente&nbsp;Ap&oacute;s');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_HoursBefore', '%s&nbsp;Horas&nbsp;Antes');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_OneHourBefore', '1&nbsp;Hora&nbsp;Antes');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_HoursAfter', '%s&nbsp;Horas&nbsp;Depois');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_OneHourAfter', '1&nbsp;Hora&nbsp;Depois');

define('LNG_TriggerEmails_Manage_Tips_DisableTrigger', 'Desativar este disparador');
define('LNG_TriggerEmails_Manage_Tips_EnableTrigger', 'Ativar este disparador');

define('LNG_TriggerEmails_Manage_PromptDelete', 'Deletar disparadores selecionados ?');
define('LNG_TriggerEmails_Manage_PromptDelete_One', 'Deletar disparador selecionado?');
define('LNG_TriggerEmails_Manage_PromptChoose', 'Primeiro escolha um disparador.');

define('LNG_TriggerEmails_Manage_Delete_Failed', 'O disparador selecionado n&atilde;o pode ser exclu&iacute;do');
define('LNG_TriggerEmails_Manage_Delete_Success', 'O disparador selecionado foi excluido com sucesso.');

define('LNG_TriggerEmails_Manage_Copy_Failed', 'N&atilde;o foi possivel copiar o disparador');
define('LNG_TriggerEmails_Manage_Copy_Success', 'O disparador selecionado foi copiado para "%s"');

define('LNG_TriggerEmails_Manage_Activate_Failed', 'Erro ao ativar o disparador selecionado.');
define('LNG_TriggerEmails_Manage_Activate_Success', 'O disparador selecionado foi ativado.');

define('LNG_TriggerEmails_Manage_Deactivate_Failed', 'Erro ao desativar o disparador selecionado.');
define('LNG_TriggerEmails_Manage_Deactivate_Success', 'O disparador selecionado foi desativado e n&atilde;o ser&aacute; executado.');

define('LNG_TriggerEmails_Manage_Bulk_Delete_Failed', 'Selecione os disparadores que n&atilde;o podem ser excluidos.');
define('LNG_TriggerEmails_Manage_Bulk_Delete_Success', 'Os disparadores selecionados foram excluidos com sucesso.');
define('LNG_TriggerEmails_Manage_Bulk_Activate_Failed', 'Erro ao ativar o disparador selecionado');
define('LNG_TriggerEmails_Manage_Bulk_Activate_Success', 'O disparador selecionado est&aacute; ativo');
define('LNG_TriggerEmails_Manage_Bulk_Deactivate_Failed', 'Erro ao desativar os disparadores selecionados.');
define('LNG_TriggerEmails_Manage_Bulk_Deactivate_Success', 'Os disparadores selecionados foram desativatos e n&atilde;o ser&atilde;o executados.');




/**
 * Language definitions used in the "Editor Page"
 */
define('LNG_TriggerEmails_Form_Header_TriggerDetails', 'Detalhes do disparador');
define('LNG_TriggerEmails_Form_Header_TriggerEvent', 'Disparador de Eventos');
define('LNG_TriggerEmails_Form_Header_TriggerOptions', 'Configura&ccedil;&otilde;es de envio');

define('LNG_TriggerEmails_Form_Prompt_Cancel', 'Cancelar criacao de disparador?');

define('LNG_TriggerEmails_Tab_General', 'Configura&ccedil;&otilde;es Gerais');
define('LNG_TriggerEmails_Tab_SendingOptions', 'Op&ccedil;&otilde;es de Envio');

define('LNG_TriggerEmails_Form_Field_TriggerName', 'Nome do seu disparador');
define('LNG_TriggerEmails_Form_Field_TriggerName_Description', "(Exemplo: 'disparador de aniversario'. O nome &eacute; apenas para refer&ecirc;ncia)");
define('LNG_TriggerEmails_Form_Field_TriggerName_Error', 'Insira o nome para este disparador.');

define('LNG_TriggerEmails_Form_Field_TriggerAction', 'Quando ser&aacute; executado');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Error', 'Por favor selecione pelo menos uma a&ccedil;&atilde;o a ser executada quando o disparador for acionado.');

define('LNG_TriggerEmails_Form_Field_TriggerType_Title', 'Ative este disparador');
define('LNG_TriggerEmails_Form_Field_TriggerType_Error', 'Selecione o tipo do disparador');

define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField', "Baseado em um campo data de contatos");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_ChooseList_Instruction', '-- Selecione uma lista de contatos --');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_ChooseCustomField_Instruction', '-- Selecione uma data --');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Error_ChooseList', "Selecione a lista de contatos.");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Error_ChooseCustomField', "Selecione a data");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Prompt_CreateCustomField', 'Voce precisa criar pelo menos 1 campo data personalizado para emitir um disparador baseado em data. deseja fazer isto agora? Nao esqueca que todas as mudancas que voce fizer a este disparador serao perdidas. Clique em Ok para cirar um campo personalizado novo.');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_NotAvailable', '<i>Nenhum campo personalizado de data atribuido a "%s" list</i>');

define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate', "Baseado em uma data especifica");
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_Error', 'Especifique uma data para o disparador se basear.');
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_ListTitle', 'Atribuir o disparador a uma lista do contato(s)');
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_List_Error', 'Escolha por favor pelo menos uma lista do contato atribuir este disparador.');

define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked', 'Baseado em um link clicado');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_ChooseNewsletter_Instruction', '-- Selecione uma campanha de e-mail --');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_NotAvailable', '<i>Nenhum link est&aacute; dispon&iacute;vel para esta campanha</i>');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_Error_ChooseNewsletter', 'Selecione um newsletter.');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_Error_ChooseAnotherNewsletter', 'Escolha outro newsletter que contenha pelo menos um link');

define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened', 'Baseado em uma campanha de e-mail aberta');
define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened_ChooseNewsletter_Instruction', '-- Selecione uma campanha de e-mail --');
define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened_Error_ChooseNewsletter', 'Selecione uma newsletter a ser monitorada');


define('LNG_TriggerEmails_Form_Field_When_Context_Before', 'Antes');
define('LNG_TriggerEmails_Form_Field_When_Context_On', 'Em');
define('LNG_TriggerEmails_Form_Field_When_Context_When', 'Quando');
define('LNG_TriggerEmails_Form_Field_When_Context_After', 'Depois');

define('LNG_TriggerEmails_Form_Field_When_Unit_Hours', 'hora(s)');
define('LNG_TriggerEmails_Form_Field_When_Unit_Days', 'dia(s)');
define('LNG_TriggerEmails_Form_Field_When_Unit_Weeks', 'semana(s)');

define('LNG_TriggerEmails_Form_Field_When_Interval_TheDate', 'A data');
define('LNG_TriggerEmails_Form_Field_When_Interval_TheNextAnniversary', 'O pr&oacute;ximo Aniversario da data');
define('LNG_TriggerEmails_Form_Field_When_Interval_TheAnniversaryOfTheDate', 'Cada Aniversario da data');
define('LNG_TriggerEmails_Form_Field_When_Interval_OpenNewsletter', 'Que o e-mail for aberto');
define('LNG_TriggerEmails_Form_Field_When_Interval_LinkClicked', 'Clicando o link');

define('LNG_TriggerEmails_Form_Field_When_Help', 'Disparador baseado na data espec&iacute;fica');
define('LNG_HLP_TriggerEmails_Form_Field_When_Help', "Escolha 'A data' para a&ccedil;&atilde;o do disparador na data espef&iacute;cica. Voc&ecirc; pode usar este se voc&ecirc; tem um pr&oacute;ximo evento tal como uma feira profissional.<br/><br/>Selecione 'O pr&oacute;ximo Aniversario da data' para a&ccedil;&atilde;o do disparador no dia e m&ecirc;s da data, mas n&atilde;o o ano. Por exemplo, se voc&ecirc; tem um campo personalizado de data de Aniversario e voc&ecirc; quer que o disparador efetua a a&ccedil;&atilde;o no pr&oacute;ximo Aniversario do contato(s).<br/><br/>Selecione 'Cada Aniversario da data' para a&ccedil;&atilde;o do disparador no dia e m&ecirc;s da data cada ano. Por exemplo, se voc&ecirc; queira emitir um e-mail anual de lembrete do Dia dos Namorados");

define('LNG_TriggerEmails_Form_Field_TriggerAction_Send', 'Quando Enviar uma campanha');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Instruction', '-- Selecione uma campanha --');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_PreviewAlert', 'Primeiro selecione uma campanha.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Error', 'Selecione uma campanha para enviar o evento disparador.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Help', 'Enviar campanha por email?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Help', 'Quando o disparador &eacute; ativado, que campanha de e-mail deve ser enviada aos contatos do evento dispadador?  (definido abaixo)?');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName', 'Enviar com o nome');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName', 'Que pessoa ou companhia deve ser mostrada no campo \'De:\' deste Email?<br/><br />Voc&ecirc; pode mudar o nome padr&atilde;o editando sua lista de contatos e mudando a lista de administradores');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName_Error', 'Insira um nome de remetente "De:" para o disparador enviar.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail', 'Enviar com o Email');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail', 'Que e-mail deve ser mostrado no campo \'De: e-mail (remetente)\' ?<br/><br />Voc&ecirc; pode mudar o nome padr&atilde;o editando sua lista de contatos e mudando a lista de administradores');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail_EmptyError', 'Insira um e-mail de remetente "De: Email" para o disparador funcionar.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail', 'Enviar respostas para');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail', 'Quando um contato recebe seus e-mails e clica em responder, que e-mail exibir&aacute; para repostas?<br /><br />Voc&ecirc; pode mudar o padr&atilde;o editando em sua lista de contatos e mudando em \'Responder para email\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail_EmptyError', 'Insira um e-mail para respostas para seu disparador funcionar.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail', 'Enviar retornos de e-mails para');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail', 'Quando um e-mail retorna, ou &eacute; rejeitado pelo servidor, que e-mail o erro dever&aacute; ser enviado? Se voc&ecirc; deseja usar o retorno, certifique-se ent&atilde;o que nenhum outro e-mail estar&aacute; enviando para este e-mail.<br /><br />Voc&ecirc; pode mudar o e-mail padr&atilde;o editando sua lista de contatos em \'Retorno\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail_EmptyError', 'Insira o e-mail de retorno para o disparador utilizar.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName', "Campo personalizado 'Primeiro Nome'");
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName', "Se voc&ecirc; tem um campo personalizado para o 'primeiro nome' do contato, Selecione aqui que e-mail pode ser endere&ccedil;ado para pessoas individualmente.<br /><br />Se voc&ecirc; tem um campo personalizado combinado com o nome das pessoas (isto &eacute;, um campo de como se chama a pessoa) ent&atilde;o selecione este campo aqui.");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName_Instruction', "Selecione seu campo personalizado 'Primeiro Nome'");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName', "Campo personalizado '&Uacute;ltimo nome'");
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName', "Se voc&ecirc; tem um campo personalizado para o 'Ultimo Nome' do contato, Selecione aqui que e-mail pode ser endere&ccedil;ado para pessoas individualmente.<br /><br />Se voc&ecirc; tem um campo personalizado combinado com o nome das pessoas (isto &eacute;,, um campo de como se chama a pessoa) ent&atilde;o selecione este campo aqui.");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName_Instruction', "Selecione seu campo personalizado 'Ultimo Nome'");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart', 'Enviar e-mail Multi-formato?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart', 'Enviando um e-mail multi-formato seus contatos decidem se querem ver o e-mail no formato (HTML ou Texto).');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart_Label', 'Sim, enviar o e-mail como multi-formato');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens', 'Siga abertura de e-mails em HTML?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens', 'Siga estat&iacute;sticas de campanhas selecionando esta op&ccedil;&atilde;o, por&eacute;m voc&ecirc; s&oacute; poder&aacute; utilizar esta op&ccedil;&atilde;o de seguir estat&iacute;sticas se o e-mail for em HTML.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens_Label', 'Sim, monitorar aberturas de e-mails HTML');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks', 'Monitorar links clicados neste Email?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks', 'Deseja monitorar todos os links clicados neste email? Se sim, voc&ecirc; poder&aacute; ver relat&oacute;rios de cliques em links na aba estat&iacute;sticas na parte superior da p&aacute;gina.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks_Label', 'Sim, monitorar todos os links desta campanha de Email');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages', 'Inserir imagens como anexos?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages', 'Esta op&ccedil;&atilde;o insere as imagens como anexo, isto cria um envio de e-mail significativamente mais pesado, por&eacute;m possibilita a exibi&ccedil;&atilde;o das imagens mesmo quando estiver offline.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages_Label', 'Sim, colocar as imagens no conte&uacute;do.');

define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList', 'Quando adicionar um contato adicional em uma lista de contatos');
define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList_Error', 'Escola pelo menos uma lista de contatos para adicionar estes contatos quando o evento for disparado.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList_Help', 'Adicionar a que lista?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_AddList_Help', 'Quanto o disparador for executado, que lista o contato deve ser adicionado?');

define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList', 'Quando remover um contato da lista de contatos');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_f', 'Remova o contato da lista de contatos <i>%s</i>');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_s_One', 'Remova o contato da lista de contato <i>%s</i>');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_s_Many', 'Remova o contato das seguintes listas: %s');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_l', 'Remova o contato das listas de contatos que eu envio a <i>%s</i> campanhas quando um link espec&iacute;fico for clicado.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_n', 'Remova o contato da lista de contatos que eu envio a <i>%s</i> campanhas quando abertas.');

define('LNG_TriggerEmails_Form_Field_When_Title', 'Execute os disparadores');
define('LNG_TriggerEmails_Form_Field_When_Instruction', 'Selecione uma op&ccedil;&atilde;o primeiro.');
define('LNG_TriggerEmails_Form_Field_When_Error_InvalidTime', 'Insira um n&uacute;mero inteiro positivo');

define('LNG_TriggerEmails_Form_Field_Active_Title', 'Ativar este disparador?');
define('LNG_TriggerEmails_Form_Field_Active_Instruction', 'Sim, desejo ativar');

define('LNG_TriggerEmails_Form_Save_Success', 'Registro de disparador salvo com sucesso');
define('LNG_TriggerEmails_Form_Save_Failed', 'N&atilde;o foi poss&iacute;vel salvar o disparador');
define('LNG_TriggerEmails_Form_Save_Failed_Permission', 'O disparador n&atilde;o foi salvo... Permiss&atilde;o negada para um ou mais op&ccedil;&otilde;es escolhidas.');




/**
 * Language definitions used in the "Statistic Page"
 */
define('LNG_TriggerEmails_Stats_Title', 'Estat&iacute;sticas de disparadores');
define('LNG_TriggerEmails_Stats_Intro', 'Veja estat&iacute;sticas de disparadores baseadas em datas e links registrados.');
define('LNG_TriggerEamils_Stats_Page_Intro', "A estat&iacute;stica para o disparador '%s' consta a seguir. Clique nas abas para ver outros relat&oacute;rios.");
define('LNG_TriggerEmails_Stats_NoTriggerEmailsDefined', 'Para ver estat&iacute;sticas de disparadores primeiro crie um disparador. Clique no bot&atilde;o a seguir para criar agora.');
define('LNG_TriggerEmails_Stats_TriggerName', 'Nome do disparador');

define('LNG_TriggerEmails_Stats_PromptChoose', 'Selecione a estatistica para pelo menos um disparador.');
define('LNG_TriggerEmails_Stats_PromptDelete', 'Deseja mesmo deletar esta estatistica de disparador? Esta acao nao tem backup.');

define('LNG_TriggerEmails_Stats_BulkAction_Delete', 'Deseja mesmo deletar esta estat&iacute;stica de disparador? Esta a&ccedil;&atilde;o n&atilde;o tem backup.');
define('LNG_TriggerEmails_Stats_BulkAction_Delete_Failed', 'Falha ao deletar estat&iacute;sticas selecionadas.');
define('LNG_TriggerEmails_Stats_BulkAction_Delete_Success', 'A estat&iacute;stica de disparador selecionada foi exclu&iacute;da com sucesso.');
define('LNG_TriggerEmails_Stats_BulkAction_UnknownAction', 'A&ccedil;&atilde;o desconhecida.');

define('LNG_TriggerEmails_Stats_Print', 'Imprimir estat&iacute;stica do disparador');
define('LNG_TriggerEmails_Stats_Delete', 'Deletar estat&iacute;stica do disparador');

define('LNG_TriggerEmails_Stats_Tab_Snapshots', 'Estat&iacute;sticas instant&acirc;neas');
define('LNG_TriggerEmails_Stats_Tab_OpenStats', 'Abertura');
define('LNG_TriggerEmails_Stats_Tab_LinkStats', 'Links clicados');
define('LNG_TriggerEmails_Stats_Tab_BounceStats', 'Retornos');
define('LNG_TriggerEmails_Stats_Tab_UnsubscribeStats', 'Descadastramento');
define('LNG_TriggerEmails_Stats_Tab_ForwardStats', 'Encaminhados');
define('LNG_TriggerEmails_Stats_Tab_SubscriberStats', 'Informa&ccedil;&otilde;es de contatos');
define('LNG_TriggerEmails_Stats_Tab_FailedStats', 'Falha no envio');

define('LNG_TriggerEmails_Stats_Snapshots_Heading', 'Estat&iacute;sticas instant&acirc;neas');
define('LNG_TriggerEmails_Stats_Snapshots_Intro', "Um sum&aacute;rio da performance para o disparador selecionado conta a seguir:");
define('LNG_TriggerEmails_Stats_Snapshots_CreatedBy', 'Criado por');
define('LNG_TriggerEmails_Stats_Snapshots_ChartTitle', 'Atividade para \'%s\'');
define('LNG_TriggerEmails_Stats_Snapshots_Tooltip_Open', 'Clique aqui para ver o endere&ccedil;o de e-mail de todos que abriram o disparador enviado');
define('LNG_TriggerEmails_Stats_Snapshots_Tooltip_UniqueOpen', 'Clique aqui para ver o e-mail de alguns que abriram o disparador enviado');

define('LNG_TriggerEmails_Stats_Open_Intro', "Veja monitora&ccedil;&otilde;es abertas e endere&ccedil;os de e-mails para o disparador '%s'");
define('LNG_TriggerEmails_Stats_Open_Error_NotOpenTracked', 'A monitora&ccedil;&atilde;o foi desabilitada para este disparador.');
define('LNG_TriggerEmails_Stats_Open_Error_HasNotBeenOpened', 'Este disparador n&atilde;o foi aberto por nenhum dos contatos ainda.');
define('LNG_TriggerEmails_Stats_Open_Error_HasNotBeenOpened_CalendarProblem', 'O e-mail disparado n&atilde;o foi aberto por nenhum dos contatos durante as datas selecionadas.');

define('LNG_TriggerEmails_Stats_Links_Intro', "Estat&iacute;sticas de link clicado para o disparador '%s'");
define('LNG_TriggerEmails_Stats_Links_Error_NotLinkTracked', 'Monitoramento de link foi desabilitado para este e-mail disparado.');
define('LNG_TriggerEmails_Stats_Links_Error_NoLinksFound', 'N&atilde;o existe links no e-mail disparado selecionado.');
define('LNG_TriggerEmails_Stats_Links_Error_NoLinksFound_CalendarProblem', 'Nenhum link encontrado para este e-mail disparado.');

define('LNG_TriggerEmails_Stats_Bounces_Intro', "Ver monitoramento de retornos e e-mails para o disparador '%s'");
define('LNG_TriggerEmails_Stats_Bounces_Error_NoBouncesFound', 'Nenhum relat&oacute;rio de retorno foi recebido deste e-mail disparado.');
define('LNG_TriggerEmails_Stats_Bounces_Error_NoBouncesFound_CalendarProblem', 'Nenhum relat&oacute;rio de retorno foi recebido deste e-mail disparado.');

define('LNG_TriggerEmails_Stats_Unsubscribes_Intro', "Ver monitoramento de descadastramentos e endere&ccedil;os de e-mail do e-mail disparado '%s'");
define('LNG_TriggerEmails_Stats_Unsubscribes_Error_NoUnsubscribesFound', 'Este disparador n&atilde;o possui nenhum pedido de descadastramento.');
define('LNG_TriggerEmails_Stats_Unsubscribes_Error_NoUnsubscribesFound_CalendarProblem', 'Nenhum descadastramento encontrado neste e-mail disparado na data especificada.');

define('LNG_TriggerEmails_Stats_Forwards_Intro', "Ver contatos que enviaram o e-mail disparado '%s'");
define('LNG_TriggerEmails_Stats_Forwards_Error_NoForwardFound', 'Este e-mail disparado n&atilde;o possui nenhum encaminhamento ou utiliza&ccedil;&atilde;o da op&ccedil;&atilde;o Indique para um Amigo.');
define('LNG_TriggerEmails_Stats_Forwards_Error_NoForwardFound_CalendarProblem', 'Este e-mail disparado n&atilde;o foi encaminhado durante a data especificada ou n&atilde;o cont&eacute;m o link de Indique para um Amigo.');

define('LNG_TriggerEmails_Stats_Recipients_Intro', "Ver contatos que foram enviados o e-mail disparado '%s'");
define('LNG_TriggerEmails_Stats_Recipients_Error_NoRecipientFound', 'Este e-mail disparado n&atilde;o foi enviado para nenhum contato ainda.');
define('LNG_TriggerEmails_Stats_Recipients_Error_NoRecipientFound_CalendarProblem', 'Este disparador n&atilde;o foi enviado para nenhum contato durante o per&iacute;odo selecionado.');

define('LNG_TriggerEmails_Stats_Failed_Intro', "Ver falhas de recebimento do e-mail disparado '%s'");
define('LNG_TriggerEmails_Stats_Failed_Error_NoRecipientFound', 'Este e-mail disparado n&atilde;o houve nenhuma falha de envio.');
define('LNG_TriggerEmails_Stats_Failed_Error_NoRecipientFound_CalendarProblem', 'Este e-mail disparado n&atilde;o sofreu nenhuma falha de envio durante o per&iacute;odo selecionado.');

/**
**************************
* Changed/Added in 5.5.6
**************************
*/
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName', "Se voc&ecirc; tem um campo personalizado para o 'SobreNome' do contato, escolha aqui ent&atilde;o o e-mail individual da pessoa.<br /><br />Se voc&ecirc; tem um campo personalizado combinado com o nome da pessoa (isto &eacute;, um campo chamado 'nome') ent&atilde;o deixe esta op&ccedil;&atilde;o vazia.");

/**
**************************
* Changed/Added in 5.5.7
**************************
*/
define('LNG_TriggerEmails_Form_Field_TriggerActions_Not_Choosen', "Selecione uma ou mais a&ccedil;&otilde;es para que o disparo seja ativado.");

/**
**************************
* Changed/Added in 5.7.0
**************************
*/
define('LNG_TriggerEmails_Manage_NoLists', 'Nenhuma lista de contatos definida. %s');
define('LNG_TriggerEmails_Manage_AddListButton', 'Criar uma lista ...');
define('LNG_TriggerEmails_Manage_AddCampaignButton', 'Criar uma campanha ...');
define('LNG_TriggerEmails_Manage_NoCampaigns', 'Nenhuma campanha de e-mail foi criada. %s');

define('LNG_TriggerEmails_Manage_NoLists_CanCreate', '&nbsp;Clique no bot&atilde;o "' . LNG_TriggerEmails_Manage_AddListButton . '" para criar uma.');
define('LNG_TriggerEmails_Manage_NoCampaigns_CanCreate', '&nbsp;Clique no bot&atilde;o "' . LNG_TriggerEmails_Manage_AddCampaignButton . '" a seguir para criar uma.');
