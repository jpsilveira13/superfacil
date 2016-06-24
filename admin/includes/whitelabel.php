<?php

/**

 * This file deals with the white labeling of SoleCart.

 */



/**

 * The name of the product to be shown in several different places

 * in the control panel.

 */

$GLOBALS['ISC_CFG']['ProductName'] = 'E! Commerce';



/**

 * This variable is used in the page title of the pages in the control panel.

 *

 * Use %%EDITION%% to show the current edition of the product.

 */

$GLOBALS['ISC_CFG']['ControlPanelTitle'] = "Painel de Controle";



/**

 * This is the text that is used at the bottom of every page in the control

 * panel. You are free to modify this text and even leave it blank.

 *

 * Use %%EDITION%% to show the current edition of the product that is being run.

 * Use %%VERSION%% to show the version number.

 *

 * Used in: /admin/templates/pagefooter.tpl

 *     and: /admin/templates/pagefooter.install.tpl

 */

$GLOBALS['ISC_CFG']['AdminCopyright'] = 'Desenvolvido por <a target="_blank" href="http://www.foccosti.com.br/" title="Foccos">Foccos</a> %%VERSION%% &copy; 2015-'.date('Y');



/**

 * This variable is used in the template as %%GLOBAL_AdminLogo%%

 * It points to the logo used in the control panel. It contains the entire <img>

 * HTML tag so the width, height and any other attribute can be changed.

 *

 * The default location is: /admin/images/logo.gif but the path below  * a relative path to that location, i.e. images/logo.gif

 *is a

 * Used in: /admin/templates/pageheader.tpl

 *     and: /admin/templates/pageheader.install.tpl

 */

$GLOBALS['ISC_CFG']['AdminLogo'] = '<img id="logo" src="images/logo.png" border="0" />';



/**

 * This option disables the "popular help articles" section on the home page of the control panel.

 *

 * Change the value below to "false" to not load the content in at all.

 */

$GLOBALS['ISC_CFG']['LoadPopularHelpArticles'] = false;



/**

 * The URL of the RSS feed to fetch for the "Popular Help Articles" feed.

 */

$GLOBALS['ISC_CFG']['HelpRSS'] = 'http://viewkb.com/rss.php?c=86&t=popular';



/**

 * The language variables used by the list of popular help articles.

 */

$GLOBALS['ISC_LANG']['PopularHelpArticles'] = "Top Help Articles";

$GLOBALS['ISC_LANG']['ViewKnowledgeBase'] = 'View Knowledge Base';



/**

 * The link that the "View Knowledge Base" button should point to

 */

$GLOBALS['ISC_CFG']['ViewKnowledgeBaseLink'] = 'javascript:LaunchHelp();';



/**

 * The link that the "Search Knowledge Base" form should post to. %query% should be used as the placeholder

 * for what the user enters in the search box. Leave empty to disable searching.

 */

$GLOBALS['ISC_CFG']['SearchKnowledgeBaseUrl'] = 'http://www.viewkb.com/search.php?searchOverride=86&tplHeader='.rawurlencode(GetConfig('ProductName')).'&q=%query%';



/**

 * The setting below will hide the store license key setting on the Settings > Store Settings page.

 * If disabled, the license key will manually need to be updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableLicenseKeyField'] = true;



/**

 * The setting below will hide the database details on the Settings > Store Settings page.

 * If disabled, these details will only be visible in the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableDatabaseDetailFields'] = true;



/**

 * The setting below will hide the store URL field on the Settings > Store Settings page.

 * If disabled, the store URL will manually need to be updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableStoreUrlField'] = false;



/**

 * The setting below will hide the product images and product downloads fields on the Settings > Store Settings page.

 * If disabled, the values of the fields will need to be manually updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisablePathFields'] = false;



/**

 * The setting below will disable the 'Logging' tab on the Settings > Store Settings page.

 * If disabled, the values on this tab will need to be manually updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableLoggingSettingsTab'] = false;



/**

 * The setting below will disable the 'HTTP Proxy' settings on the Settings > Store Settings page.

 * If disabled, the values on this tab will need to be manually updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableProxyFields'] = false;



/**

 * The setting below will disable the 'System Information' page under the Tools menu. It will

 * also disable the 'view full system information' page that shows the PHP Info.

 */

$GLOBALS['ISC_CFG']['DisableSystemInfo'] = false;



/**

 * The setting below will disable the backup settings on the Settings > Store Settings page.

 * If disabled, the values on this tab will need to be manually updated from the config/config.php file.

 */

$GLOBALS['ISC_CFG']['DisableBackupSettings'] = false;



/**

 * The setting below allows certain types of store log entries to be hidden from store administrators.

 * Enter a comma separated list of the types of entries that should not be shown.

 * Example: php,sql would hide all PHP related errors and all database related errors.

 * Allowed values: general,payment,shipping,notification,sql,php,emailintegration

 */

$GLOBALS['ISC_CFG']['HiddenStoreLogTypes'] = '';



/**

 * The two messages below are shown when an invalid license key or an expired license key is entered.

 */

$GLOBALS['ISC_LANG']['BadLKHInv'] = "Your license key is invalid. Please contact Solecart for a new key.";

$GLOBALS['ISC_LANG']['BadLKHExp'] = "Your license key expired on the %s. Please contact Solecart for a new key.";



/**

 * The messages below are shown when a user or product limit is reached based on the entered license key within the store.

 */

$GLOBALS['ISC_LANG']['ReachedUserLimitMsg'] = "You cannot add any more users to your store because you have reached your limit of %s users. To add additional users, you need to <a href='http://www.solecart.com/' target='_blank'>upgrade</a>.";

$GLOBALS['ISC_LANG']['ReachedProductLimitMsg'] = "You cannot add any more products to your store because you have reached your limit of %s products. To add additional products, you need to <a href='http://www.solecart.com/' target='_blank'>upgrade</a>.";



/**

 * The variable below allows you to disable the Solecart SendStudio integration.

 */

$GLOBALS['ISC_CFG']['DisableSendStudioIntegration'] = false;



/**

* Interspire Email Marketer whitelabel changes as of version 6.0:

* - All language references to Interspire Email Marketer are now located in the language file at /modules/emailintegration/emailmarketer/lang/en/language.ini

* - The large Email Marketer logo image is no longer used. Instead, a small, 16x16 pixel PNG icon is now located at /modules/emailintegration/emailmarketer/images/16x16.png

* - You can remove the Email Marketer module from your completely by removing the /modules/emailintegration/emailmarketer/ directory

*/



/**

 * The variable below allows you to disable the Solecart Knowledge Manager integration.

 */

$GLOBALS['ISC_CFG']['DisableKnowledgeManagerIntegration'] = true;



/**

 * All of the language variables below are used for the Solecart Knowledge Manager integration.

 */

$GLOBALS['ISC_LANG']['KBSettings'] = 'Knowledge Manager';

$GLOBALS['ISC_LANG']['KBSettingsHeader'] = "Solecart Knowledge Manager";

$GLOBALS['ISC_LANG']['KBSettingsIntroDone'] = 'Update your Solecart Knowledge Manager settings and integration preferences below.';

$GLOBALS['ISC_LANG']['KBSettingsIntro'] = '<div class=\'AppNotice\'><img src=\'images/info.gif\' style=\'float:left; margin-right:5px; margin-bottom:30px\' /> <a style=\'color:#005FA3; font-weight:bold;\' href=http://www.Solecart.com/knowledgemanager target=_blank>Solecart Knowledge Manager</a> is knowledge base &amp; FAQ software that you can use to provide your customers with answers to common questions about orders, shipping, returns, etc. Most customers want to learn about your store\'s policies, etc before they buy, and a knowledge base is a great way to give them answers to their questions. When integrated into your store, Solecart Knowledge Manager will look the same as your store and will show up as a link on your store\'s navigation menu.</div>To enable Solecart Knowledge Manager integration in your store you need to follow a few simple steps, which are shown below:<ul><li>Purchase a copy of Solecart Knowledge Manager and install it.</li><li>Login to Solecart Knowledge Manager and click on the "Settings" link at the top of the page</li><li>Under the "Site Settings" section, change the template to "Solecart"</li><li>Paste this into the "Template Header URL" field: <strong>%s/top.php</strong></li><li>Paste this into the "Template Footer URL" field: <strong>%s/bottom.php</strong></li><li>Click the "Save" button in Solecart Knowledge Manager to update your settings</li><li>Click the "Website Content" tab above and choose the "Create a Web Page" link</li><li>Type a title for the page (such as "FAQ" or "Help") into the "Page Title" field</li><li>Choose the "Link to another website or document" page type</li><li>Enter the URL of where Solecart Knowledge Manager is installed (such as http://www.yoursite.com/kb) in the "Link" field</li><li>Click the "Save" button</li><li>View your store and when you click on the "FAQ" or "Help" page which you just created, your knowledge base will be shown</li><li>Optionally you can also integrate Solecart Knowledge Manager&#39;s <em>Active Response System</em> into your store by filling out the form below</li></ul>';

$GLOBALS['ISC_LANG']['KBDetails'] = 'Knowledge Manager Integration Details';

$GLOBALS['ISC_LANG']['KBPath'] = 'Knowledge Manager Path';

$GLOBALS['ISC_LANG']['KBPathHelp'] = 'The full URL to where your copy of Solecart Knowledge Manager is installed, such as http://www.yoursite.com/knowledgemanager. Do not include a trailing slash or index.php on the end of the URL.';

$GLOBALS['ISC_LANG']['KBContactFormIntegration'] = 'Contact Form Integration';

$GLOBALS['ISC_LANG']['YesKBContactFormIntegration'] = 'Yes, integrate Solecart Knowledge Manager&#39;s <em>Active Response System</em> into my contact form';

$GLOBALS['ISC_LANG']['KBContactFormIntegrationHelp'] = 'Do you want to integrate Solecart Knowledge Manager\\\'s <em>Active Response System</em> into any pages in your store that are setup as a contact form? If yes, tick this box and you can choose which page(s) to integrate it into.';

$GLOBALS['ISC_LANG']['IntegrateActiveResponseHelp'] = "Which web pages in your store do you want to integrate Solecart Knowledge Manager\'s <em>Active Response System</em> into? The pages listed here are the ones you\'ve created whose page type is \'<em>Allow people to send questions/comments via a contact form</em>\'.<br /><br />You can create another web page by choosing the \'Create a Web Page\' option from the Website Content tab above.";

$GLOBALS['ISC_LANG']['NoContactPagesForActiveKB'] = "Before you can integrate Solecart Knowledge Manager's Active Response System you need to create at least one contact page. To create a contact page, click the 'Create a Web Page' link under the 'Website Content' tab above and choose the contact page option.";

$GLOBALS['ISC_LANG']['EnterActiveKBPath'] = 'Please enter the full URL to your copy of Solecart Knowledge Manager, such as http://www.yoursite.com/knowledgemanager';

$GLOBALS['ISC_LANG']['AKBSettingsSavedSuccessfully'] = 'Your Solecart Knowledge Manager settings have been saved successfully.';

$GLOBALS['ISC_LANG']['AKBSettingsNotSaved'] = 'Your Solecart Knowledge Manager settings couldn&#39;t be saved. Make sure your config/config.php file is writable and try again.';

$GLOBALS['ISC_LANG']['KBWhatIsActiveResponse'] = "What is Solecart Knowledge Manager's Active Response System?";

$GLOBALS['ISC_CFG']['KBLogo'] = 'images/ikm_logo.gif';



/**

 * This option disables the management of addons functionality. When disabled,

 * addons cannot be enabled/disabled, but can still be run if they're already enabled

 */

$GLOBALS['ISC_CFG']['DisableAddons'] = false;



/**

 * This option disables the ability to download addons via the control panel.

 * When disabled, addons can still be run, just not downloaded.

 */

$GLOBALS['ISC_CFG']['DisableAddonDownloading'] = true;



/**

 * The XML file where a list of available addons for download is stored.

 */



$GLOBALS['ISC_CFG']['AddonXMLFile'] = 'http://www.interspire.com/shoppingcart/_addonlist.php';



/**

 * The file which validates addon license keys

 */



$GLOBALS['ISC_CFG']["AddonLicenseURL"] = "http://www.interspire.com/shoppingcart/_addonlicencecheck.php";



/**

 * The file which streams the addons zip file back

 */



$GLOBALS['ISC_CFG']["AddonStreamURL"] = "http://www.interspire.com/shoppingcart/_addonstream.php";



/**

 * The following variables control the URL and paths for the template

 * downloading from the control panel. This is already private labelled and will

 * usually never need to be changed

 */



$GLOBALS['ISC_CFG']['TemplateURL'] = "";

$GLOBALS['ISC_CFG']['TemplateInfoURL'] = "";

$GLOBALS['ISC_CFG']['TemplateVerifyURL'] = "";

$GLOBALS['ISC_CFG']['TemplateStreamURL'] = "";

$GLOBALS['ISC_CFG']['TemplateVersionURL'] = "";

$GLOBALS['ISC_CFG']["TemplatesOrderCustomURL"] = "";



/**

 * TemplateMarkup

 * If you want a markup on the template prices increase this value.

 * 1.00 = 100% (normal price)

 * E.g. to make it 125% change this to 1.25

 * Notes: - Templates can not be offered at a reduced cost. If the number is less

 *          than 1.00 it is reset to 1.00.

 *        - If you change this, change the value of AllowTemplatePurchase below

 *          to 0 (zero) otherwise the user will see the original price on our

 *          website.

 */

$GLOBALS['ISC_CFG']['TemplateMarkup'] = 1.00;



/**

 * AllowTemplatePurchase

 * If you don't want the purchase to go through the interspire website change

 * this value to 0 (zero).

 * If you change the value of TemplateMarkup, change this setting also.

 * If this setting is set to zero, the user will be told that the paid templates

 * are not avaialbe for direct down but instead to contact their System

 * Administrator to purchase the template. You then arrange payment and purchase

 * the template yourself from our website.

 */

$GLOBALS['ISC_CFG']['AllowTemplatePurchase'] = 0;



/**

 * DisableTemplateDownloading

 * If you want to just outright remove all options, links, buttons and text related

 * to downloading new templates, set this value to 1 (one).

 */

$GLOBALS['ISC_CFG']['DisableTemplateDownloading'] = 1;



/**

 * The setting below allows the "Product Edition:" row on the Tools > System Information

 * page to be disabled.

 */

$GLOBALS['ISC_CFG']['DisableSystemInfoEdition'] = false;



/**

 * The variable below controls the URL "Upgrade" link on the  Tools > System Information

 */

$GLOBALS['ISC_CFG']['SystemInfoEditionUpgradeLink'] = "http://www.eurekaweb.com.br/";



/**

 * The setting below allows the version check box on the home page of the control panel

 * to be disabled.

 */

$GLOBALS['ISC_CFG']['DisableVersionCheck'] = false;



/**

 * The variables below control the text that is shown in the version check box when a

 * new version is available or the store is already running the latest version.

 */

$GLOBALS['ISC_LANG']['NewVersionAvailable'] = "Interspire Shopping Cart <span class='LatestVersionNumber'>%s</span> is now available. (Hide this and remind me again <a href='#' rel='1' class='HideLink'>tomorrow</a>, <a href='#' rel='7' class='HideLink'>in a week</a> or <a href='#' class='HideLink'>not until next version</a>)";



/**

 * The variables below are used for the Store Importers / Store Exporters.

 */

$GLOBALS['ISC_LANG']['ConverterDeleteStoreMsg'] = "Delete everything in my Interspire Shopping Cart store first";

$GLOBALS['ISC_LANG']['ConverterDeleteStoreHelp'] = "If you tick this option all orders, customers, products, etc (except your current admin user account) will be deleted from your Interspire Shopping Cart store *before* the import wizard starts.";

$GLOBALS['ISC_LANG']['ConverterConfirmDeleteStore'] = "Are you sure you want to delete everything from your Interspire Shopping Cart store before importing? Click OK to proceed with the import or Cancel if you\'ve changed your mind.";

$GLOBALS['ISC_LANG']['ConverterDeletingStore'] = "Removing content from your Interspire Shopping Cart store...";

$GLOBALS['ISC_LANG']['DeletingCurrentStoreStatusTitle'] = "Removing Interspire Shopping Cart Content";

$GLOBALS['ISC_LANG']['DeletingCurrentStoreStatusDesc'] = "The content from your Interspire Shopping Cart store is currently being removed...";



/**

 * The setting below allows the 'Help' link in the control panel top menu

 * to be removed.

 */

$GLOBALS['ISC_CFG']['HideHelpLink'] = false;



/**

 * Trial expiry message shown on the dashboard if this is a trial/evaluation copy.

 */

$GLOBALS['ISC_LANG']['TrialExpiresInXDays'] = 'Your free trial copy of SoleCart expires in %s days. <a href="http://solecart.com" target="_blank">Click here for information on upgrading.</a>';



/**

 * Settings for the built in merchant gateway.

 */

$GLOBALS['ISC_CFG']['EnableBuiltInGateway'] = true;

$GLOBALS['ISC_CFG']['BuiltInGateway'] = 'interspiremerchant';



/**

 * The setting below allows the 'Getting Started' section on the home page to be

 * disabled.

 */

$GLOBALS['ISC_CFG']['DisableGettingStarted'] = true;



/**

 * The setting below allows the 'Video Walkthrough' feature on the getting started

 * to be disabled.

 */

$GLOBALS['ISC_CFG']['DisableVideoWalkthrough'] = true;



/**

 * The setting below sets the URL to the XML file that contains the list of videos

 * to show on the walkthrough page.

 */

$GLOBALS['ISC_CFG']['VideoWalkthroughFeed'] = 'http://static.interspire.com/support-videos/isc/videos.xml';



/**

 * Hide PCI Settings (Misc > Login Security Settings) so that user cannot modify

 */

$GLOBALS['ISC_CFG']['HidePCISettings'] = false;



/**

 * Whether or not the 'deleted orders' setting under Store Settings > Miscellaneous is hidden

 */

$GLOBALS['ISC_CFG']['HideDeletedOrdersActionSetting'] = false;

