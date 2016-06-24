<?php
/**
* Language file variables for the info tips.
*
* @see GetLang
*
* @version     $Id: infotips.php,v 1.19 2008/01/25 04:37:59 hendri Exp $
* @author Chris <chris@localhost>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the info tips... Please backup before you start!
*
* In each case, the 'Intro' is the tip that shows up in sendstudio.
* The 'Description' gets shown when a tip is clicked.
*/

/**
* Number of generic info tips we have to choose from.
*/
define('Infotip_Size', 15);

define('LNG_Infotip_Form_Intro', 'Utilize double-optin para reduzir o n&uacute;mero de spam.');

/**
* This gets shown before any info tip.
*/
define('LNG_Infotip_Intro', 'Dicas de e-mail Marketing #');
define('LNG_Infotip_ReadMore', 'Leia&nbsp;mais...');

define('LNG_Infotip_List_Intro', '15 "Simples mas eficaz" dicas de e-mail Marketing');

define('LNG_Infotip_1_Intro', 'Para evitar que seu e-mail seja interpretado como SPAM, n&atilde;o utilize palavras como \'Gr&aacute;tis\', \'$$$\', \'Economize\'  e \'Desconto\' no assunto do e-mail.');
define('LNG_Infotip_1_Title', 'Evitando os filtros de spam');


define('LNG_Infotip_2_Intro', 'Para obter o m&aacute;ximo de taxas de clique-thru ao criar e-mails em HTML , certifique-se qua todos links estejam destacados com sublinhado e opcionalmente negrito.');
define('LNG_Infotip_2_Title', 'Maximizando taxas de clique-thru');


define('LNG_Infotip_3_Intro', 'Utilize personaliza&ccedil;&atilde;o com o nome do contato em seus e-mails (do tipo \'Ol&aacute; Fulano\' em vez de \'Caro cliente\') ir&aacute; aumentar a sua taxa de abertura de at&eacute; 650%');
define('LNG_Infotip_3_Title', 'O poder de personaliza&ccedil;&atilde;o');

define('LNG_Infotip_4_Intro', 'Sempre certifique-se de incluir um link remo&ccedil;&atilde;o. Voc&ecirc; pode fazer isso atrav&eacute;s da inclus&atilde;o do c&oacute;digo %%UNSUBSCRIBELINK%% em qualquer lugar do seu e-mail.');
define('LNG_Infotip_4_Title', 'Um link para cancelar a assinatura');

define('LNG_Infotip_5_Title', 'Confirma&ccedil;&atilde;o de Inscri&ccedil;&atilde;o');

define('LNG_Infotip_6_Title', 'Ter&ccedil;a-feira / Quarta-feira = aumento da resposta de confirma&ccedil;&atilde;o de inscri&ccedil;&atilde;o');

define('LNG_Infotip_7_Title', 'Repita o e-mail de comunica&ccedil;&atilde;o');

define('LNG_Infotip_8_Intro', 'Escolha um tema consistente para utilizar em suas campanhas de e-mail. Crie um modelo HTML ou texto e utilize esse modelo quando voc&ecirc; enviar um novo e-mail.');
define('LNG_Infotip_8_Title', 'Consist&ecirc;ncia &eacute; a chave');

define('LNG_Infotip_9_Intro', 'Para obter melhores resultados ao enviar campanhas recorrentes de e-mails , procure envi&aacute;-la sempre no mesmo dia e na mesma hora. Por exemplo, para a campanha XYZ o envio vai ocorrer toda Segunda e Quarta-feira 2h da manh&atilde;.');
define('LNG_Infotip_9_Title', 'Uma a&ccedil;&atilde;o de cada vez');

define('LNG_Infotip_10_Intro', 'Certifique-se que o assunto &eacute; persuasivo para prender a n de seus leitores. Ao inv&eacute;s de usar algo como \'Boletim Informativo - Edi&ccedil;&atilde;o #1\', ofere&ccedil;a um benef&iacute;cio real, tal como Boletim Informativo: 10 Dicas para a chegar a independ&ecirc;ncia financeira.');
define('LNG_Infotip_10_Title', 'Alternativas de Assunto');

define('LNG_Infotip_11_Intro', 'Sempre que enviar um boletim informativo, oferecendo a seus clientes algo gr&aacute;tis para o usu&aacute;rio se inscrever no seu site (por exemplo, um e-Book ou um relat&oacute;rio especial). Em seguida crie uma resposta autom&aacute;tica de e-mail com um link para que o assinante possa pegar o b&ocirc;nus em at&eacute; 1 hora depois da inscri&ccedil;&atilde;o.');
define('LNG_Infotip_11_Title', 'Oferecer algo gr&aacute;tis &eacute; uma &oacute;tima op&ccedil;&atilde;o');


define('LNG_Infotip_12_Intro', 'Sempre coloque um conte&uacute;do interessante no topo do seu Email, pois esta &eacute; a parte que ser&aacute; exibida na janela de visualiza&ccedil;&atilde;o do programa de e-mail do seu cliente, exemplo, MS Outlook.');
define('LNG_Infotip_12_Title', 'Painel de Visualiza&ccedil;&atilde;o de Emails');

define('LNG_Infotip_13_Intro', 'Experimente usar uma reda&ccedil;&atilde;o diferente para os links de seus e-mails marketing. Em seguida, clique no bot&atilde;o estat&iacute;sticas para monitorar quem recebeu o maior n&uacute;mero de cliques e utilize a regra que mais funcionou nas suas futuras campanhas.');
define('LNG_Infotip_13_Title', 'Teste o desempenho dos links');

define('LNG_Infotip_14_Title', 'Aprenda com sua Base de Emails');

define('LNG_Infotip_15_Title', 'Sempre assine seus Emails');
define('LNG_Infotip_15_Intro', 'Sempre incluir uma assinatura na parte inferior dos seus Emails. Voc&ecirc; pode usar essa assinatura para colocar um link de volta para seu site, e at&eacute; mesmo para oferecer seus outros produtos. Aqui est&aacute;\ um exemplo de assinatura: Cumprimentos, Paulo P. Carlos. Presidente - Empresa XYZ. Visite o nosso website em www.companiaxyz.com.br');


/**
* To make context sensitive helptips.
* You can make up your own tips below
* And place them on specific pages by looking at the page & action from the url and placing them in the array.
*
* For example the 'Spam' info tip will be shown when the page is 'Newsletters' and action is 'Create'.
*
* Context sensitive help tips are NOT included in the generic helptips above.
*
* However you can include the generic ones as context sensitive ones if you prefer.
*
* Simply grab the tip 'number' and place it in the appropriate place..
*
* eg to show tip '15' when you are on the 'users' page (regardless of the Action).
* $GLOBALS['ContextSensitiveTips']['users'] = array('15');
*/
define('LNG_Infotip_Cron_Intro', 'Como tornar o envio mais r&aacute;pido?');

define('LNG_Infotip_Spam_Intro', 'Reduza as chances de seu e-mail ser classificado como SPAM.');
define('LNG_Infotip_Spam_Details', 'Teste o seu e-mail em clientes diferentes de Email, incluindo os gratuitos como hotmail, yahoo e gmail, voc&ecirc; pode reduzir as chances do seu e-mail ser classificado como SPAM.');
define('LNG_Infotip_Spam_ReadMore', 'Leia o Tutorial...');

// The tutorials live in a specific folder - this simply points to a html file.

$GLOBALS['ContextSensitiveTips']['newsletters']['create'] = array('Spam');


define('LNG_Infotip_Autoresponders_Intro', 'Como Configurar uma resposta autom&aacute;tica.');
define('LNG_Infotip_Autoresponders_ReadMore', 'Leia o Guia...');
$GLOBALS['ContextSensitiveTips']['autoresponders']['create'] = array('Autoresponders');

define('LNG_Infotip_AutoHowto_Intro', 'Resposta Autom&aacute;tica - Marketing direto passo a passo.');
define('LNG_Infotip_AutoHowto_Details', 'Enviar uma s&eacute;rie de e-mails para seus clientes potenciais &eacute; uma &oacute;tima maneira de aumentar as vendas e a fideliza&ccedil;&atilde;o com o m&iacute;nimo de esfor&ccedil;o sem necessariamente precisar contratar os servi&ccedil;os de uma empresa especializada.');
define('LNG_Infotip_AutoHowto_ReadMore', 'Descubra como...');

$GLOBALS['ContextSensitiveTips']['autoresponders']['manage'] = array('AutoHowto');


define('LNG_Infotip_GettingStarted_Intro', 'Primeiros passos.');
define('LNG_Infotip_GettingStarted_ReadMore', 'Veja o Guia...');
define('LNG_Infotip_GettingStarted_ReadMoreLink', '812');
//$GLOBALS['ContextSensitiveTips']['index'] = array('GettingStarted');


define('LNG_Infotip_AddForm_Intro', 'Adicione um formul&aacute;rio de inscri&ccedil;&atilde;o no seu site.');
define('LNG_Infotip_AddForm_ReadMore', 'Veja como...');

$GLOBALS['ContextSensitiveTips']['forms']['manage'] = array('AddForm');

define('LNG_Infotip_CustomFields_ReadMore', 'Veja como...');

$GLOBALS['ContextSensitiveTips']['customfields']['manage'] = array('CustomFields');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
$GLOBALS['ContextSensitiveTips']['customfields']['create'] = array('CustomFields');
$GLOBALS['ContextSensitiveTips']['subscribers']['add'] = array('CustomFields');


$GLOBALS['Did_You_Know_Tips'] = array();
$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode passar o mouse sobre o &iacute;cone de Ajuda <img align="top" src="images/help2.gif"> para obter mais informa&ccedil;&otilde;es sobre uma determinada op&ccedil;&atilde;o.';

$GLOBALS['Did_You_Know_Tips'][] = ' O e-mail Marketing tem uma das maiores taxas de retorno sobre investimento de marketing comparado com qualquer outro meio de comunica&ccedil;&atilde;o.';


$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode selecionar seus leitores pelo seu primeiro nome utilizando campos personalizados do seu formul&aacute;rio?';

$GLOBALS['Did_You_Know_Tips'][] = ' Eduque os seus leitores para manter uma rela&ccedil;&atilde;o de confian&ccedil;a e credibilidade, incentivando-os a ler seus Emails, assim quando voc&ecirc; estiver pronto para promover seus produtos, eles estar&atilde;o prontos para ouvir.';

$GLOBALS['Did_You_Know_Tips'][] = ' Um bom e-mail fornece informa&ccedil;&otilde;es para o benef&iacute;cio do cliente, &eacute; importante que voc&ecirc; expresse a personalidade da sua empresa, seus valores. N&atilde;o tenha medo de colocar um pouco da sua personaliza&ccedil;&atilde;o em suas campanhas de e-mail marketing.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode programar e-mails para ser enviado em datas posteriores. Voc&ecirc; pode criar 12 e-mails agora e agend&aacute;-los para serem enviados a cada m&ecirc;s do ano automaticamente.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode enviar e-mails para grupos espec&iacute;ficos de contatos, por exemplo, aqueles que ainda n&atilde;o clicaram em um link em sua campanha de e-mail.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode ver quem abriu sua campanha de e-mail na se&ccedil;&atilde;o estat&iacute;sticas.';

$GLOBALS['Did_You_Know_Tips'][] = 'Voc&ecirc; pode ver que clicou em um link espec&iacute;fico de suas campanhas por e-mail na se&ccedil;&atilde;o estat&iacute;sticas.';

$GLOBALS['Did_You_Know_Tips'][] = 'Se voc&ecirc; tem uma loja f&iacute;sica, voc&ecirc; pode pedir para seus clientes preencherem um formul&aacute;rio impresso para que eles possam cadastrar o e-mail e receber seu Boletim Informativo.';

$GLOBALS['Did_You_Know_Tips'][] = 'Se voc&ecirc; quiser ver como seus e-mails ser&atilde;o exibidos  em diferentes programas de Email, voc&ecirc; pode fazer isso, selecionando a bot&atilde;o Exibir e-mail em diferentes programas de e-mail ap&oacute;s criar sua campanha de e-mail.';

$GLOBALS['Did_You_Know_Tips'][] = 'Se os seus anexos est&atilde;o muito grandes a ponto de onerar o ritmo de envio dos seus Emails. Uma alternativa para isso &eacute; que voc&ecirc; armazene seus anexos em seu servidor e coloque apenas o link na sua pe&ccedil;a de e-mail.';

$GLOBALS['Did_You_Know_Tips'][] = 'Se o seu provedor de hospedagem colocar limites no envio de Emails, isso poder&aacute; limitar a velocidade de envio. Para resolver essa quest&atilde;o configure a op&ccedil;&atilde;o limite \'M&aacute;ximo por hora\' na p&aacute;gina Configura&ccedil;&otilde;es.';

$GLOBALS['Did_You_Know_Tips'][] = ' Para ajudar a manter suas campanhas por e-mail e respostas autom&aacute;ticas consistentes voc&ecirc; pode criar um modelo a partir do qual pretende basear todos os seus novos Emails. Desta forma, voc&ecirc; pode criar os seus modelos uma &uacute;nica vez e, em posteriormente, basta alter&aacute;-los com as novas informa&ccedil;&otilde;es.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode criar formul&aacute;rios de Inscri&ccedil;&atilde;o, Cancelamento, Indique a um amigo e Modificar Detalhes de forma simples em um processo passo a passo, atrav&eacute;s da op&ccedil;&atilde;o Web Formul&aacute;rios.';

$GLOBALS['Did_You_Know_Tips'][] = ' Utilizando os dados das estat&iacute;sticas voc&ecirc; pode verificar quais foram os assuntos e campanhas mais eficientes.';

$GLOBALS['Did_You_Know_Tips'][] = ' Campanhas eficazes de e-mail s&atilde;o planejadas antecipadamente. Conhe&ccedil;a o seu p&uacute;blico alvo e descubra o que eles querem antes de envi&aacute;-las.';

$GLOBALS['Did_You_Know_Tips'][] = ' Informando os detalhes de cada contato de  sua lista de Email, pode ajudar voc&ecirc; a atingir os clientes potenciais mais rapidamente.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; deve promover a inclus&atilde;o dos seus clientes a sua lista de e-mail por todos os canais de atendimento da empresa: no seu site, nos e-mails de confirma&ccedil;&atilde;o, no servi&ccedil;o de atendimento ao cliente e em lojas f&iacute;sicas..';


/**
**************************
* Changed/added in NX 1.4
**************************
*/
$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode visualizar sua campanha de e-mail em v&aacute;rios clientes de e-mail diferente. Basta clicar no bot&atilde;o desta op&ccedil;&atilde;o ao criar uma campanha de e-mail.';

/**
**************************
* Changed/added in 5.0.0
**************************
*/


define('LNG_Infotip_6_Intro', 'Os melhores dias para enviar um e-mail marketing ou de vendas para os seus contatos tenha sido provado que s&atilde;o ter&ccedil;a-feira e quarta-feira.');

define('LNG_Infotip_7_Intro', 'Configure uma resposta autom&aacute;tica para enviar para seus contatos 1 hora depois da realiza&ccedil;&atilde;o da assinatura. Voc&ecirc; pode us&aacute;-la para falar mais sobre sua empresa, produtos ou servi&ccedil;os.');


define('LNG_Infotip_14_Intro', 'Veja na pr&aacute;tica como funciona o envio de e-mails aos seus contatos. Para isso, basta criar uma s&eacute;rie de respostas autom&aacute;ticas (por exemplo, 5) que contenham conte&uacute;dos diferentes. Ent&atilde;o, agende o primeiro envio para sair depois de 24 horas, o segundo ap&oacute;s 48 horas, e assim sucessivamente.');

define('LNG_Infotip_Autoresponders_Details', 'Este guia vai ajudar voc&ecirc; a fazer a configura&ccedil;&atilde;o do primeiro e-mail de resposta autom&aacute;tica, para que voc&ecirc; possa tornar seus contatos em clientes potenciais.');

define('LNG_Infotip_GettingStarted_Details', 'Criar e enviar sua primeira campanha de Email&eacute; f&aacute;cil. Sigas os passos a seguir: criar uma lista de contatos, um formul&aacute;rio de inscri&ccedil;&atilde;o para seu site e o conte&uacute;do que ser&aacute; enviado. Finalmente, agende o envio da sua campanha para seus contatos.');

define('LNG_Infotip_CustomFields_Details', 'Para coletar mais informa&ccedil;&otilde;es do que apenas o nome e o e-mail de seus contatos voc&ecirc; precisa adicionar campos personalizados no seu formul&aacute;rio de inscri&ccedil;&atilde;o. Fa&ccedil;a isso e colete informa&ccedil;&otilde;es como, seu apelido, sua localiza&ccedil;&atilde;o, cor favorita, Aniversario e etc.');

define('LNG_Infotip_CustomFields_Intro', 'Aprenda como coletar seus contatos informa&ccedil;&otilde;es avan&ccedil;adas como: nome, idade, sexo, etc utilizando campos personalizados.');

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode programar automaticamente o envio de resposta autom&aacute;tica para os seus contatos em intervalos pr&eacute;-definidos. Com esse procedimento voc&ecirc; vai potencializar suas campanhas de e-mail marketing.';

$GLOBALS['Did_You_Know_Tips'][] = ' &Eacute; melhor enviar campanhas de e-mail marketing em intervalos regulares, como uma vez por semana, uma vez por m&ecirc;s para que seus contatos tenham o h&aacute;bito de receb&ecirc;-las.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode coletar muitos ou poucos dados de seus contatos usando campos personalizados.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode enviar um e-mail de lembrete para contatos de que ainda n&atilde;o confirmaram a sua inscri&ccedil;&atilde;o.';

$GLOBALS['Did_You_Know_Tips'][] = ' Oriente seus contatos a adicionar o seu dom&iacute;nio em sua lista de e-mails autorizados, para garantir que seu e-mails cheguem a sua  sua caixa de entrada.';

$GLOBALS['Did_You_Know_Tips'][] = ' O assunto do seu e-mail &eacute; a primeira coisa que os seus contatos ir&atilde;o ver. Crie um assunto que prenda a aten&ccedil;&atilde;o e que desperte o  interesse em ler o seu e-mail.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; deve utilizar a parte superior da pe&ccedil;a de e-mail com um cont&eacute;udo relevante, por que a parte superior &eacute; exibida na visualiza&ccedil;&atilde;o r&aacute;pida da maioria dos programas de e-mail e &eacute; atrav&eacute;s desta visualiza&ccedil;&atilde;o que os seus contatos ir&atilde;o decidir se vale a rolar a p&aacute;gina e visualizar o resto do conte&uacute;do.';

$GLOBALS['Did_You_Know_Tips'][] = ' Voc&ecirc; pode aumentar o n&uacute;mero de contatos em sua lista, oferencendo benef&iacute;cios antecipadamente.';

$GLOBALS['Did_You_Know_Tips'][] = ' Uma boa lista de contatos &eacute; como ter seu dinheiro no banco. A cada campanha de e-mail pode gerar bons neg&oacute;cios e receitas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Limitar a quantidade de informa&ccedil;&otilde;es pessoais que voc&ecirc; vai pedir no formul&aacute;rio de inscri&ccedil;&atilde;o, vai tornar mais r&aacute;pido o seu preenchimento, fazendo com que aumente o n&uacute;mero de contatos inscritos.';

define('LNG_Infotip_Form_Details', 'Uma confirma&ccedil;&atilde;o de e-mail (double opt-in) verifica se o propriet&aacute;rio do e-mail tamb&eacute;m &eacute; a pessoa que se inscreveu para sua lista de contatos. Isso pode reduzir que seus e-mails sejam marcados como spam pelos destinat&aacute;rios.');

define('LNG_Infotip_5_Intro', 'Para reduzir o n&uacute;mero de endere&ccedil;os de e-mail falsos na sua lista de contatos, sempre utilize double opt-in no formul&aacute;rio de inscri&ccedil;&atilde;o.');

define('LNG_Infotip_AddForm_Details', 'Para captar futuros clientes, voc&ecirc; deve incluir um formul&aacute;rio de inscri&ccedil;&atilde;o no seu site para que os visitantes possam se inscrever em sua lista de contatos.');

$GLOBALS['Did_You_Know_Tips'][] = ' Se voc&ecirc; salvar os bounces em uma lista separada com detalhes do erro, os e-mails da sua lista de contatos ser&atilde;o enviados mais facilmente. Mantenha sua lista de contatos sempre limpa.';


define('LNG_Infotip_Cron_Details', 'Voc&ecirc; sabia que habilitado o agendamento (veja a <a href="#" onClick="LaunchHelp(\'819\'); return false;">documenta&ccedil;&atilde;o</a> ou entre em contato com seu administrador) essa op&ccedil;&atilde;o permite programar o envio de campanhas por e-mail em uma data futura, bem como enviar os e-mails muito mais r&aacute;pido? E ainda n&atilde;o ser&aacute; preciso manter aberta a janela popup.');

define('LNG_Infotip_Spam_ReadMoreLink', '802');
define('LNG_Infotip_Autoresponders_ReadMoreLink', '815');
define('LNG_Infotip_AutoHowto_ReadMoreLink', '797');
define('LNG_Infotip_AddForm_ReadMoreLink', '813');
define('LNG_Infotip_CustomFields_ReadMoreLink', '814');


define('LNG_Infotip_1_ReadMoreLink', '802');
define('LNG_Infotip_2_ReadMoreLink', '820');
define('LNG_Infotip_3_ReadMoreLink', '814');
define('LNG_Infotip_4_ReadMoreLink', '821');
define('LNG_Infotip_5_ReadMoreLink', '822');
define('LNG_Infotip_6_ReadMoreLink', '823');
define('LNG_Infotip_7_ReadMoreLink', '815');
define('LNG_Infotip_8_ReadMoreLink', '824');
define('LNG_Infotip_9_ReadMoreLink', '825');
define('LNG_Infotip_10_ReadMoreLink', '800');
define('LNG_Infotip_11_ReadMoreLink', '826');
define('LNG_Infotip_12_ReadMoreLink', '827');
define('LNG_Infotip_13_ReadMoreLink', '829');
define('LNG_Infotip_14_ReadMoreLink', '828');
define('LNG_Infotip_15_ReadMoreLink', '830');
