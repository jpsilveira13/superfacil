<?php
/**
* Language file variables for custom fields. This includes creating, editing, deleting, updating, managing etc.
*
* @see GetLang
*
* @version     $Id: customfields.php,v 1.25 2008/02/18 06:33:38 chris Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the customfields area... Please backup before you start!
*/
define('LNG_CustomFieldsName', 'Campo personalizado');
define('LNG_CustomFieldsType', 'Tipo');

define('LNG_CustomFieldDeleteFail_One', '1 campo personalizado n&atilde;o foi exclu&iacute;do com sucesso. Por favor, tente novamente.');
define('LNG_CustomFieldDeleteFail_Many', '%s campos personalizados n&atilde;o foram exclu&iacute;dos com &ecirc;xito. Por favor, tente novamente.');

define('LNG_CustomField_Edit_Disabled', 'Voc&ecirc; n&atilde;o pode editar este campo personalizado porque voc&ecirc; n&atilde;o tem acesso.');

define('LNG_EditCustomField', 'Editar campo personalizado');
define('LNG_EditCustomFieldIntro', 'Preencha o formul&aacute;rio abaixo para atualizar o campo personalizado selecionado.');
define('LNG_EditCustomField_CancelPrompt', 'Tem certeza de que deseja cancelar a edicao deste campo personalizado?');

define('LNG_CustomFieldCreated', 'Campo personalizado criado com sucesso');
define('LNG_UnableToCreateCustomField', 'n&atilde;o foi poss&iacute;vel criar esse campo personalizado');

define('LNG_CustomFieldUpdated', 'O campo personalizado selecionado foi atualizado.');

define('LNG_UnableToUpdateCustomField', 'n&atilde;o foi poss&iacute;vel atualizar esse campo personalizado');

define('LNG_CreateCustomField_CancelPrompt', 'Tem certeza de que deseja cancelar a criacao deste campo personalizado?');

define('LNG_CreateCustomFieldCancelButton', 'Cancelar');
define('LNG_CreateCustomFieldHeading', 'Crie um novo campo personalizado');

define('LNG_CustomFieldName', 'Nome do campo personalizado');
define('LNG_HLP_CustomFieldName', 'Digite um nome para este campo personalizado. O nome aparecer&aacute; no formul&aacute;rio de inscri&ccedil;&atilde;o da sua newsletter . Por exemplo, \\\'Primeiro Nome\\\', \\\'Sexo\\\'.');

define('LNG_CustomFieldType', 'Tipo de campo personalizado');

define('LNG_EnterCustomFieldName', 'Digite um nome para este campo personalizado.');
define('LNG_CustomFieldDetails', 'Detalhes do campo personalizado');

define('LNG_CustomFieldType_text', 'Campo de Texto');
define('LNG_CustomFieldType_date', 'Campo de Data');
define('LNG_CustomFieldType_multicheckbox', ' Checkbox de Multiplos Campos');
define('LNG_CustomFieldType_dropdown', 'Lista de Escolha');

define('LNG_EditCustomField_Step3', 'Editar campo personalizado');

define('LNG_FieldLength', ' Tamanho do Campo');
define('LNG_HLP_FieldLength', 'Diz respeito ao comprimento da caixa de texto que vai aparecer em seus formul&aacute;rios. Deixe este campo em branco se n&atilde;o tiver certeza.');

define('LNG_DefaultValue', 'Valor padr&atilde;o');

define('LNG_MaxLength', 'Tamanho m&aacute;ximo');

define('LNG_MinLength', 'Tamanho m&iacute;nimo');

define('LNG_Instructions', 'Texto de orienta&ccedil;&atilde;o');
define('LNG_HLP_Instructions', 'Digite as instru&ccedil;&otilde;es que o usu&aacute;rio ir&aacute; ver quando for solicitado para selecionar uma op&ccedil;&atilde;o. Normalmente, &eacute; colocado instru&ccedil;&otilde;es do tipo: \\\'Selecione uma op&ccedil;&atilde;o\\\'.');

define('LNG_Dropdown_Key', 'Option Value');
define('LNG_Dropdown_Value', 'Exibir Texto de Op&ccedil;&atilde;o ');
define('LNG_HLP_Dropdown_Key', 'Digite um valor para esta op&ccedil;&atilde;o. Este valor &eacute; associado &agrave; op&ccedil;&atilde;o selecionada. Normalmente, esta &eacute; uma vers&atilde;o abreviada do texto exibido, por exemplo, M para Masculino');

define('LNG_Checkbox_Key', 'Checkbox Value');
define('LNG_Checkbox_Value', 'Exibir Texto do Checkbox');
define('LNG_HLP_Checkbox_Key', 'Digite um texto para este checkbox. Este valor &eacute; associado &agrave; op&ccedil;&atilde;o selecionada. Normalmente, esta &eacute; uma vers&atilde;o abreviada do texto exibido, por exemplo, M para Masculino');

define('LNG_Radiobutton_Key', 'Radio Value');
define('LNG_Radiobutton_Value', 'Exibir Texto do bot&atilde;o Radio');
define('LNG_HLP_Radiobutton_Key', 'Digite um texto para este bot&atilde;o de radio. Normalmente, esta &eacute; uma vers&atilde;o abreviada do texto exibido, por exemplo, M para Masculino');

define('LNG_AddMore', 'Clique aqui para adicionar um outro valor');

define('LNG_DateDisplayOrder', 'Ordem de exibi&ccedil;&atilde;o das Datas');
define('LNG_HLP_DateDisplayOrder', 'De que forma voc&ecirc; deseja que os valores das datas sejam exibidos? Exemplo, digite dia, m&ecirc;s e ano em cada um dos 3 campos exibi&ccedil;&atilde;o.');
define('LNG_DateDisplayOrderFirst', 'Mostrar Ordem (primeiro)');
define('LNG_DateDisplayOrderSecond', 'Mostrar Ordem (Segundo)');
define('LNG_DateDisplayOrderThird', 'Mostrar Ordem (Terceiro)');
define('LNG_DateDisplayStartYear', 'Iniciar no Ano');
define('LNG_HLP_DateDisplayStartYear', 'Ao exibir a lista suspensa anos, que ano deve ser o primeiro da lista?');
define('LNG_DateDisplayEndYear', 'Terminar no Ano');
define('LNG_HLP_DateDisplayEndYear', 'Ao exibir a lista suspensa anos, que ano deve ser o &uacute;ltimo da lista?<br/>Se a entrada for 0, ser&aacute; alterado automomaticamente para o ano em curso (' . date('Y') . ').');

define('LNG_DeleteCustomFieldButton', 'Excluir selecionados');
define('LNG_ChooseFieldsToDelete', 'Escolha primeiro um campo personalizado.');
define('LNG_DeleteCustomFieldPrompt', 'Tem certeza de que deseja excluir este campo personalizado?');
define('LNG_CannotDeleteCustomField_NoAccess', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para excluir o campo \'%s\'.');
define('LNG_CustomField_Delete_Disabled', 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para excluir este campo.');

define('LNG_DropdownInstructions', '-- Por favor, escolha uma op&ccedil;&atilde;o --');

define('LNG_TextAreaRows', 'N&uacute;mero de Linhas');
define('LNG_HLP_TextAreaRows', 'Especifica o n&uacute;mero de linhas na exibi&ccedil;&atilde;o da caixa de texto multilinhas. Indica tamb&eacute;m a altura que a caixa de texto ter&aacute;.');

define('LNG_TextAreaColumns', 'N&uacute;mero de Colunas');
define('LNG_HLP_TextAreaColumns', 'Especifica n&uacute;mero de colunas na exibi&ccedil;&atilde;o da caixa de texto multilinhas. Indica tamb&eacute;m a largura que a caixa de texto ter&aacute;.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_CustomFieldsManage', 'Exibir campos personalizados');
define('LNG_NoCustomFields', 'n&atilde;o foi criado nenhum campo personalizado. Clique no bot&atilde;o <em>Criar Campo Personalizado...</em> para criar um.');
define('LNG_CreateCustomFieldButton', 'Criar Campo Personalizado...');

define('LNG_CreateCustomField', 'Criar campo personalizado');

define('LNG_CustomFieldTypeHelp', 'Cada campo personalizado tem um determinado tipo de dados. Por exemplo, O campo personalizado \\\'First Name\\\' ser&aacute; simplesmente um campo de texto. Por outro lado, o campo personalizado \\\'Sexo\\\' ser&aacute; um radio buttons, para que os usu&aacute;rios possar selecionar \\\'Masculino\\\' ou \\\'Feminino\\\'. Aqui voc&ecirc; ter&aacute; de seleccionar o \\\'Tipo de campo personalizado\\\' que seja relevante para o seu \\\'Campo Personalizado\\\'.<br><br>Exemplos: <br><br><table border=0 cellpadding=\\\'2\\\' cellspacing=\\\'0\\\' style=\\\'width:220px\\\'><tr><td>Type</td><td>Exemplo</td><tr><td style=\\\'width: 50%\\\'>Text:</td><td style=\\\'width:50%\\\'><input type=text style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' value=\\\'Meu Nome\\\'></td></tr><tr><td>Multiline Text:</td><td><textarea style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' rows=\\\'2\\\'>Meu Endere&ccedil;o</textarea></td></tr><tr><td>Somente n&uacute;meros:</td><td><input type text style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' value=\\\'1800555777\\\'></td></tr><tr><td>Dropdown List:</td><td><select style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\'><option>Selecionar Continente</option></select></td></tr><tr><td>Checkboxes:</td><td style=\\\'font-family: tahoma; font-size: 10px;\\\'><input type=\\\'checkbox\\\'>Red <input type=\\\'checkbox\\\'>Blue</td></tr><tr><td>Radio Buttons:</td><td style=\\\'font-family: tahoma; font-size: 10px;\\\'><input type=\\\'radio\\\'>Masculino <input type=\\\'radio\\\'>Feminino</td></tr><tr><td>Date Field:</td><td style=\\\'font-family: tahoma; font-size:10px;\\\' nowrap><select style=\\\'font-family: tahoma; font-size:10px; width:35px\\\'><option>31</option></select><select style=\\\'font-family: tahoma; font-size:10px; width:45px\\\'><option>Julho</option></select><select style=\\\'font-family: tahoma; font-size:10px; width:45px\\\'><option>2010</option></select></td></tr></table>');

define('LNG_CustomFieldRequired', 'Este campo &eacute; exigido?');
define('LNG_CustomFieldRequiredExplain', 'Sim, os contatos devem preencher este campo para ser adicionado &agrave; minha lista');

define('LNG_CustomFieldType_textarea', 'Campo Texto Multilinhas');

define('LNG_CustomFieldType_number', 'Somente n&uacute;meros');
define('LNG_CustomFieldType_checkbox', 'Checkboxes');
define('LNG_CustomFieldType_radiobutton', 'Radio Buttons');

define('LNG_CreateCustomField_Step2', 'Criar campo personalizado');
define('LNG_CreateCustomField_Step2_Intro', 'Preencha o formul&aacute;rio abaixo e clique em <em>Pr&oacute;ximo &gt;&gt;</em> para continuar.');

define('LNG_CreateCustomField_Step3', 'Criar campo personalizado');

define('LNG_HLP_MaxLength', 'Digite a quantidade m&aacute;xima de caracteres que poder digitado nesse campo personalizado. Por exemplo, digitar 2 vai a limitar entrada a apenas 2 caracteres. Isso &eacute; &uacute;til se voc&ecirc; est&aacute; coletando informa&ccedil;&otilde;es, tais como um c&oacute;digo postal onde pretende limitar a entrada a um m&aacute;ximo de 4 ou 5 caracteres. Este campo &eacute; opcional, por isso, se voc&ecirc; n&atilde;o tiver certeza, deixe em branco.');

define('LNG_HLP_MinLength', 'Digite uma quantidade m&iacute;nima que pode ser digitado nesse campo personalizado. Por exemplo, digitar 2 significa que o usu&aacute;rio tem que digitar em um m&iacute;nimo de 2 caracteres. Isso &eacute; &uacute;til se voc&ecirc; quiser ter a certeza que algu&eacute;m tenha entrado em informa&ccedil;&otilde;es v&aacute;lidas. Por exemplo, se voc&ecirc; quiser ter a certeza de que um n&uacute;mero de telefone &eacute; v&aacute;lido  na inscri&ccedil;&atilde;o, voc&ecirc; pudesse entrar com a quantidade m&iacute;nima de 8. Este campo &eacute; opcional, por isso, se voc&ecirc; n&atilde;o tiver certeza, deixe em branco.');

define('LNG_Checkbox', 'Checkbox');
define('LNG_RadioButton', 'Radio Button');define('LNG_Display_Required', 'Voc&ecirc; precisa digitar um texto para exibir essa op&ccedil;&atilde;o aqui.');

/**
**************************
* Changed/added in NX 5.0


define('LNG_Value', 'Value');
define('LNG_Display_Text', 'Display Text');

define('LNG_Value_Required', 'You need to enter a Value for this option here.');

**************************
*/
define('LNG_CustomFieldDeleteSuccess_One', '1 campo personalizado foi exclu&iacute;do. Voc&ecirc; deve atualizar seu site para certificar-se que n&atilde;o h&aacute; formul&aacute;rios utilizando o campo personalizado exclu&iacute;do.');

define('LNG_CustomFieldDeleteSuccess_Many', '%s campos personalizados foram exclu&iacute;dos. Voc&ecirc; deve atualizar seu site para certificar-se que n&atilde;o h&aacute; formul&aacute;rios utilizando o campo personalizado exclu&iacute;do.');

define('LNG_HLP_Dropdown_Value', 'Digite o texto de exibi&ccedil;&atilde;o desta op&ccedil;&atilde;o. Isto &eacute; o que se v&ecirc; quando o contato escolhe esta op&ccedil;&atilde;o. por exemplo: Masculino');
define('LNG_HLP_Checkbox_Value', 'Digite o texto de exibi&ccedil;&atilde;o deste checkbox. Isto &eacute; o que se v&ecirc; quando o contato escolhe esta op&ccedil;&atilde;o. por exemplo: Masculino');
define('LNG_HLP_Radiobutton_Value', 'Digite o texto de exibi&ccedil;&atilde;o deste radio button. Isto &eacute; o que se v&ecirc; quando o contato escolhe esta op&ccedil;&atilde;o. por exemplo: Masculino');

define('LNG_Help_CustomFieldsManage', 'Campos personalizados permite coletar e armazenar mais informa&ccedil;&otilde;es que apenas um e-mail de seus contatos, tais como seu nome, Continente, etc.');
define('LNG_CreateCustomFieldIntro', 'Para criar um campo personalizado, comece por dando um nome e escolhendo o tipo de campo que pretende criar abaixo. Clique <em>Pr&oacute;ximo &gt;&gt;</em> para continuar. <a href="Javascript:LaunchHelp(\'810\')">Saiba mais sobre campos personalizados aqui.</a>');

define('LNG_HLP_CustomFieldRequired', 'Para tornar este campo Obrigat&oacute;rio, escolha esta op&ccedil;&atilde;o. Quando contatos s&atilde;o forem inscritos em sua lista de contatos, eles ser&atilde;o obrigados a preencher este campo personalizado. Por exemplo, se voc&ecirc; quiser ter a certeza de que todos os seus contatos entrem com o \\\'Primeiro Nome\\\' ent&atilde;o voc&ecirc; deve escolher esta op&ccedil;&atilde;o para o campo personalizado \\\'Primeiro Nome\\\'. Se voc&ecirc; n&atilde;o tiver certeza, deixe essa op&ccedil;&atilde;o n&atilde;o selecionada');

define('LNG_HLP_DefaultValue', 'O valor padr&atilde;o &eacute; o valor que vai aparecer no formul&aacute;rio de inscri&ccedil;&atilde;o de seu site, caso o contato n&atilde;o preencha os dados. Por exemplo, se voc&ecirc; est&aacute; coletando o primeiro nome de um contato, voc&ecirc; pode colocar a palavra Amigo aqui dentro. Dessa forma, se ele n&atilde;o\\\ digitar o Primeiro Nome, elas ser&atilde;o tratadas como \\\'Amigo\\\'. Este campo &eacute; opcional, por isso, se voc&ecirc; n&atilde;o tiver certeza, deixe em branco.');

define('LNG_AssociateCustomField', 'Selecione listas de contatos');

define('LNG_CustomFieldListAssociation', 'Associar o campo personalizado "%s", as suas listas contatos');

define('LNG_ChooseCustomFieldLists', 'Por favor, selecione uma ou mais listas de contatos para associar esse campo personalizado.');

define('LNG_CreateCustomField_Step3_Intro', 'Escolha qual(is) a(s) lista(s de contato(s) que voc&ecirc; gostaria de associar esse campo personalizado e, em seguida, clique no bot&atilde;o Salvar abaixo.');
define('LNG_EditCustomField_Step3_Intro', LNG_CreateCustomField_Step3_Intro);

define('LNG_CustomFields_NoLists', 'Voc&ecirc; precisa de acesso a uma lista de contatos para poder criar campos personalizados. %s');

define('LNG_WhatAreCustomFields', 'Saiba mais sobre campos personalizados aqui.');

define('LNG_CustomFieldDoesntExist', 'O campo personalizado que voc&ecirc; est&aacute; tentando editar n&atilde;o existe. Por favor, tente novamente.');
define('LNG_CustomFieldRequired1', 'Obrigat&oacute;rio');
define('LNG_SelectCustomFieldType', 'Escolha um tipo de campo personalizado.');

define('LNG_CustomFieldDesc_text', 'Permite aos usu&aacute;rios entrarem com qualquer combina&ccedil;&atilde;o de letras e n&uacute;meros');
define('LNG_CustomFieldDesc_textarea', 'Permite aos usu&aacute;rios inserir texto em linhas separadas');
define('LNG_CustomFieldDesc_number', 'Permite aos usu&aacute;rios digitar qualquer n&uacute;mero, por&eacute;m o range pode ser restringida');
define('LNG_CustomFieldDesc_dropdown', 'Permite que os usu&aacute;rios selecionem um valor a partir de uma lista que voc&ecirc; definir');
define('LNG_CustomFieldDesc_checkbox', 'Permite aos usu&aacute;rios selecionar multiplos valores verdadeiro ou falso utilizando checkboxes');
define('LNG_CustomFieldDesc_radiobutton', 'Permite aos usu&aacute;rios selecionar somente um valor a partir de uma lista de op&ccedil;&otilde;es');
define('LNG_CustomFieldDesc_date', 'Permite aos usu&aacute;rios escolher uma data, eventualmente dentro de um determinado intervalo');

define('LNG_CustomField_Values', 'Lista de Valores');
define('LNG_CustomField_Dropdown_Hint', 'Introduza a lista de valores para escolher na lista acima. Cada valor deve ser inserido em uma nova linha.');
define('LNG_CustomField_Checkbox_Hint', 'Introduza a lista de valores para as caixas acima. Cada valor deve ser inserido em uma nova linha.');
define('LNG_CustomField_RadioButton_Hint', 'Introduza a lista de valores para os bot&otilde;es acima. Cada valor deve ser inserido em uma nova linha.');
define('LNG_CustomFields_NoMultiValues', 'Digite pelo menos um valor.');
define('LNG_CustomField_NoDefaultValue', 'Digite um texto de orienta&ccedil;&atilde;o.');
define('LNG_CustomField_NoFieldName', 'Digite um nome para este campo personalizado.');
define('LNG_CustomField_Checkbox_Help', 'Cada valor que voc&ecirc; digitar (um por linha) ter&aacute; o seu pr&oacute;prio checkbox. Por exemplo, se voc&ecirc; digitar <em>Sim&lt;ENTRAR>n&atilde;o&lt;ENTRAR>Talvez</em> em seguida, criadas em 3 caixas separadas.');
define('LNG_CustomFields_Sort_Alpha', 'Classificar valores por ordem alfab&eacute;tica');

define('LNG_DropDown', 'Escolha');

/**
**************************
* Changed/added in 5.5.7
**************************
*/
define('LNG_Checkbox_Key', 'Checkbox');
define('LNG_HLP_Checkbox_Value', 'Digite o texto para este checkbox. Isto &eacute; o que o contato escolhe ao selecionar esta op&ccedil;&atilde;o.');
define('LNG_HLP_Checkbox_Key', "Este valor &eacute; exibido automaticamente na exibi&ccedil;&atilde;o do checkbox.<br/><br/>Este &eacute; o valor que ser&aacute; armazenado na base de dados.<br/><br/>Quando voc&ecirc; edita o valor de exibi&ccedil;&atilde;o do checkbox, o valor do banco de dados n&atilde;o &eacute; alterado.");

define('LNG_Dropdown_Key', 'Option');
define('LNG_HLP_Dropdown_Value', 'Digite o texto para este option. Isto &eacute; o que o contato escolhe ao selecionar esta op&ccedil;&atilde;o.');
define('LNG_HLP_Dropdown_Key', "Este valor &eacute; exibido automaticamente na exibi&ccedil;&atilde;o do option.<br/><br/>Este &eacute; o valor que ser&aacute; armazenado na base de dados.<br/><br/>Quando voc&ecirc; edita o valor de exibi&ccedil;&atilde;o do option, o valor do banco de dados n&atilde;o &eacute; alterado.");

define('LNG_Radiobutton_Key', 'Radio');
define('LNG_HLP_Radiobutton_Value', 'Digite o texto para este radio. Isto &eacute; o que o contato escolhe ao selecionar esta op&ccedil;&atilde;o.');
define('LNG_HLP_Radiobutton_Key', "Este valor &eacute; exibido automaticamente na exibi&ccedil;&atilde;o do radio.<br/><br/>Este &eacute; o valor que ser&aacute; armazenado na base de dados.<br/><br/>Quando voc&ecirc; edita o valor de exibi&ccedil;&atilde;o do radio, o valor do banco de dados n&atilde;o &eacute; alterado.");
