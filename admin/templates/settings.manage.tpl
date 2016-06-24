{% import "macros/util.tpl" as util %}
{% import "macros/forms.tpl" as form %}
<form enctype="multipart/form-data" action="index.php?ToDo=saveUpdatedSettings" name="frmSettings" id="frmSettings" method="post">
	<input id="currentTab" name="currentTab" value="0" type="hidden" />
	<div class="BodyContainer">
	<table cellSpacing="0" cellPadding="0" width="100%" style="margin-left: 4px; margin-top: 8px;">
	<tr>
		<td class="Heading1">{% lang 'StoreSettings' %}</td>
	</tr>
	<tr>
		<td class="Intro" style="padding-bottom:10px">
			<p>{% lang 'SettingsIntro' %}</p>
			{{ Message|raw }}
			<p>
				<input type="submit" disabled="disabled" value="{% lang 'Save' %}" class="btn" />
				<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()" />
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<ul id="tabnav">
				<li><a href="#" class="active" id="tab0" onclick="ShowTab(0)">{% lang 'WebsiteSettingsTab' %}</a></li>
				<li><a href="#" id="tab1" onclick="ShowTab(1)">{% lang 'LocalizationSettingsTab' %}</a></li>
				<li><a href="#" id="tab8" onclick="ShowTab(8)">{% lang 'ImageSettings' %}</a></li>
				<li><a href="#" id="tab2" onclick="ShowTab(2)">{% lang 'DisplaySettingsTab' %}</a></li>
				<li style="display: {{ HideBackupSettings|raw }}"><a href="#" id="tab3" onclick="ShowTab(3)">{% lang 'BackupSettingsTab' %}</a></li>
				<li><a href="#" id="tab4" onclick="ShowTab(4)">{% lang 'SearchSettingsTab' %}</a></li>
				<li><a href="#" id="tab5" onclick="ShowTab(5)" style="{{ HideLoggingSettingsTab|raw }}" >{% lang 'LoggingSettingsTab' %}</a></li>
				<li><a href="#" id="tab6" onclick="ShowTab(6)" style="display: none">{% lang 'VendorSettingsTab' %}</a></li>
				<li><a href="#" id="tab7" onclick="ShowTab(7)">{% lang 'MiscellaneousSettingsTab' %}</a></li>
				<br class="Clear"
			</ul>
		</td>
	</tr>
	<tr>
		<td>
			<div id="div0" style="padding-top: 10px;">
				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'SiteSettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="StoreName">{% lang 'StoreName' %}:</label>
					</td>
					<td>
						<input style="width: 388px;" type="text" name="StoreName" id="StoreName" value="{{ StoreName|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'StoreName' %}', '{% lang 'StoreNameHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d1"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="StoreName">{% lang 'StoreAddress' %}:</label>
					</td>
					<td>
						<textarea name="StoreAddress" style="margin: 3px 5px 2px 0px; width: 388px; height: 117px;" id="StoreAddress" class="Field250" rows="4">{{ StoreAddress|raw }}</textarea>
						<img onmouseout="HideHelp('d38');" onmouseover="ShowHelp('d38', '{% lang 'StoreAddress' %}', '{% lang 'StoreAddressHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d38"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<label for="StoreName">{% lang 'DownForMaintenance' %}?</label>
					</td>
					<td>
						<input type="checkbox" name="DownForMaintenance" id="DownForMaintenance" value="ON" {{ IsDownForMaintenance|raw }} /> <label for="DownForMaintenance">{% lang 'YesDownForMaintenance' %}</label>
						<img onmouseout="HideHelp('dmaintenance');" onmouseover="ShowHelp('dmaintenance', '{% lang 'DownForMaintenance' %}', '{% lang 'DownForMaintenanceHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="dmaintenance"></div>
					</td>
				</tr>
				<tr id="DownForMaintenanceMessageRow" style="display:none; ">
					<td class="FieldLabel">

					</td>
					<td>
						<textarea style="margin: 3px 5px 2px 0px; width: 388px; height: 117px;" name="DownForMaintenanceMessage" id="DownForMaintenanceMessage" class="Field250" rows="4">{{ DownForMaintenanceMessage|raw }}</textarea>
						<img onmouseout="HideHelp('d38');" onmouseover="ShowHelp('d38', '{% lang 'StoreAddress' %}', '{% lang 'StoreAddressHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d38"></div>
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">Configurações de Parcelamento</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ParcelaSemJuros">Parcela sem Juros:</label>
					</td>
					<td>
						<input style="width: 40px;" maxlength="2" type="text" name="ParcelaSemJuros" id="ParcelaSemJuros" value="{{ ParcelaSemJuros|raw }}" class="Field250" />
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ParcelaComJuros">Parcela com Juros:</label>
					</td>
					<td>
						<input style="width: 40px;" maxlength="2"  type="text" name="ParcelaComJuros" id="ParcelaComJuros" value="{{ ParcelaComJuros|raw }}" class="Field250" />
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'SiteSecuritySettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<label for="StoreName">{% lang 'UseSSLDuringCheckout' %}?</label>
					</td>
					<td>
						<label for="NoSSL"><input type="radio" name="UseSSL" id="NoSSL" value="0" {{ NoSSLChecked|raw }} /> {% lang 'DontUseSSL' %}</label>
						<img onmouseout="HideHelp('d37');" onmouseover="ShowHelp('d37', '{% lang 'UseSSLDuringCheckout' %}', '{% lang 'UseSSLDuringCheckoutHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d37"></div>
						<br />
						<label for="UseNormalSSL"><input type="radio" name="UseSSL" id="UseNormalSSL" value="1" {{ UseNormalSSLChecked|raw }} /> {% lang 'UseInstalledSSL' %}</label>
						<img onmouseout="HideHelp('sslhelp');" onmouseover="ShowHelp('sslhelp', '{% lang 'SSL' %}', '{% lang 'UseInstalledSSLHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="sslhelp"></div>
						<br />
						<label for="UseSharedSSL"><input type="radio" name="UseSSL" id="UseSharedSSL" value="2" {{ UseSharedSSLChecked|raw }} /> {% lang 'UseSharedSSL' %}</label>
						<img onmouseout="HideHelp('sharedsslhelp');" onmouseover="ShowHelp('sharedsslhelp', '{% lang 'SharedSSL' %}', '{% lang 'UseSharedSSLHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="sharedsslhelp"></div>
						<div class="NodeJoin">
							<img src="images/nodejoin.gif" alt="" /> <input type="text" class="Field250" id="SharedSSLPath" name="SharedSSLPath" value="{{ SharedSSLPath|raw }}" />
						</div>
						<br />
						<label for="UseSubdomainSSL"><input type="radio" name="UseSSL" id="UseSubdomainSSL" value="3" {{ UseSubdomainSSLChecked|raw }} /> {% lang 'UseSubdomainSSL' %}</label>
						<img onmouseout="HideHelp('subdomainsslhelp');" onmouseover="ShowHelp('subdomainsslhelp', '{% lang 'SubdomainSSL' %}', '{% lang 'UseSubdomainSSLHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="subdomainsslhelp"></div>
						<div class="NodeJoin">
							<img src="images/nodejoin.gif" alt="" /> <input type="text" class="Field250" id="SubdomainSSLPath" name="SubdomainSSLPath" value="{{ SubdomainSSLPath|raw }}"/>
						</div>

						<br />
						<div style='display:inline; padding-left:20px'><font size=1><a href='javascript:void(0)' onclick='TestSSL()' style='color:gray'>Como posso saber se o meu site suporta SSL?</a></font></div>
						<div style="margin-top:3px; padding-left:20px"><font size=1><a style="color:gray" href="#" onclick="LaunchHelp(715)">{% lang 'SSLWontLoad' %}</a></font></div>
					</td>
				</tr>

				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp; <label for="StoreName">{% lang 'UseControlPanelSSL' %}?</label>
					</td>
					<td>
						<input type="checkbox" name="ForceControlPanelSSL" id="UseControlPanelSSL" value="ON" {{ IsControlPanelSSLEnabled|raw }} /> <label for="UseControlPanelSSL">{% lang 'YesUseControlPanelSSL' %}</label>
						<img onmouseout="HideHelp('dadminssl');" onmouseover="ShowHelp('dadminssl', '{% lang 'UseControlPanelSSL' %}', '{% jslang 'UseControlPanelSSLHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="dadminssl"></div>
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'AdvancedStoreSettings' %}</td>
				</tr>
				<tr style="{{ HideStoreUrlField|raw }}">
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ShopPath">{% lang 'ShopPath' %}:</label>
					</td>
					<td>
						<input style="width: 388px;" type="text" name="ShopPath" id="ShopPath" value="{{ ShopPathNormal|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d2');" onmouseover="ShowHelp('d2', '{% lang 'ShopPath' %}', '{% lang 'ShopPathHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d2"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="CharacterSet">{% lang 'CharacterSet' %}:</label>
					</td>
					<td>
						<select style="width: 388px;" id="CharacterSet" name="CharacterSet" class="Field250">
							<option value="UTF-8" {{ CharacterSet_Selected_utf8|raw }}>{% lang 'SettingsCharset_utf8' %}</option>
							<option value="ISO-8859-1" {{ CharacterSet_Selected_iso88591|raw }}>{% lang 'SettingsCharset_iso88591' %}</option>
							<option value="ISO-8859-15" {{ CharacterSet_Selected_iso885915|raw }}>{% lang 'SettingsCharset_iso885915' %}</option>
							<option value="cp866" {{ CharacterSet_Selected_cp866|raw }}>{% lang 'SettingsCharset_cp866' %}</option>
							<option value="cp1251" {{ CharacterSet_Selected_cp1251|raw }}>{% lang 'SettingsCharset_cp1251' %}</option>
							<option value="cp1252" {{ CharacterSet_Selected_cp1252|raw }}>{% lang 'SettingsCharset_cp1252' %}</option>
							<option value="KOI8-R" {{ CharacterSet_Selected_koi8r|raw }}>{% lang 'SettingsCharset_koi8r' %}</option>
							<option value="Shift_JIS" {{ CharacterSet_Selected_shiftjis|raw }}>{% lang 'SettingsCharset_shiftjis' %}</option>
							<option value="EUC-JP" {{ CharacterSet_Selected_eucjp|raw }}>{% lang 'SettingsCharset_eucjp' %}</option>
						</select>

						<img onmouseout="HideHelp('d3');" onmouseover="ShowHelp('d3', '{% lang 'CharacterSet' %}', '{% lang 'CharacterSetHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d3"></div>
					</td>
				</tr>
				<tr style="{{ HidePathFields|raw }}">
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="DownloadDirectory">{% lang 'DownloadDirectory' %}:</label>
					</td>
					<td>
						<input type="text" name="DownloadDirectory" id="DownloadDirectory" value="{{ DownloadDirectory|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d6');" onmouseover="ShowHelp('d6', '{% lang 'DownloadDirectory' %}', '{% lang 'DownloadDirectoryHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d6"></div>
					</td>
				</tr>
				<tr style="{{ HidePathFields|raw }}">
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ImageDirectory">{% lang 'ImageDirectory' %}:</label>
					</td>
					<td class="PanelBottom">
						<input type="text" name="ImageDirectory" id="ImageDirectory" value="{{ ImageDirectory|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d7');" onmouseover="ShowHelp('d7', '{% lang 'ImageDirectory' %}', '{% lang 'ImageDirectoryHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d7"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp; <label for="StoreName">{% lang 'AllowPurchasing' %}?</label>
					</td>
					<td>
						<input type="checkbox" name="AllowPurchasing" id="AllowPurchasing" value="ON" {{ IsPurchasingEnabled|raw }} /> <label for="AllowPurchasing">{% lang 'YesAllowPurchasing' %}</label>
						<img onmouseout="HideHelp('dpurchasing');" onmouseover="ShowHelp('dpurchasing', '{% lang 'AllowPurchasing' %}', '{% lang 'AllowPurchasingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="dpurchasing"></div>
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel" style="{{ HideLicenseKey|raw }}">
				<tr style="{{ HideLicenseKey|raw }}">
					<td class="Heading2" colspan="2">{% lang 'LicenseSettings' %}</td>
				</tr>
				<tr style="{{ HideLicenseKey|raw }}">
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="serverStamp">{% lang 'LicenseKey' %}:</label>
					</td>
					<td>
						<input type="text" name="serverStamp" id="serverStamp" value="{{ serverStamp|raw }}" class="Field250" />
					</td>
				</tr>
				<tr style="{{ HideLicenseKey|raw }}">
					<td colspan="2" class="EmptyRow">
						&nbsp;
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'EmailSettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="AdminEmail">{% lang 'AdminEmail' %}:</label>
					</td>
					<td>
						<input type="text" name="AdminEmail" id="AdminEmail" value="{{ AdminEmail|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d8');" onmouseover="ShowHelp('d8', '{% lang 'AdminEmail1' %}', '{% lang 'AdminEmailHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d8"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="OrderEmail">{% lang 'OrderEmail' %}:</label>
					</td>
					<td>
						<input type="text" name="OrderEmail" id="OrderEmail" value="{{ OrderEmail|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d9');" onmouseover="ShowHelp('d9', '{% lang 'OrderEmail' %}', '{% lang 'OrderEmailHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d9"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel" valign="top">
						<span class="Required">&nbsp;</span> <label for="LowInventoryEmails">{% lang 'LowInventoryEmails' %}:</label>
					</td>
					<td class="PanelBottom">
						<label> <input type="checkbox" name="LowInventoryEmails" onclick="if(this.checked) { $('.LowInventoryNotificationToggle').show(); } else { $('.LowInventoryNotificationToggle').hide(); }" value="1" {{ LowInventoryEmailsEnabledCheck|raw }} /> {% lang 'YesEnableLowInventoryEmails' %}</label>
						<img onmouseout="HideHelp('lowinventory');" onmouseover="ShowHelp('lowinventory', '{% lang 'LowInventoryEmails' %}', '{% lang 'LowInventoryEmailsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="lowinventory"></div>
						<div style="margin-top: 3px; display: {{ HideLowInventoryNotification|raw }}" class="LowInventoryNotificationToggle">
							<img src="images/nodejoin.gif" style="vertical-align: middle;" />
							{% lang 'EmailAddress' %}: <input type="text" name="LowInventoryNotificationAddress" id="LowInventoryNotificationAddress" class="Field250" value="{{ LowInventoryNotificationAddress|raw }}" />
						</div>
					</td>
				</tr>
					<tr>
						<td class="FieldLabel" valign="top">
							<span class="Required">&nbsp;</span> <label for="ForwardInvoiceEmails">{% lang 'ForwardInvoiceEmails' %}:</label>
						</td>
						<td class="PanelBottom">
							<label> <input type="checkbox" name="ForwardInvoiceEmailsCheck" onclick="if(this.checked) { $('.ForwardInvoiceEmailsToggle').show(); } else { $('.ForwardInvoiceEmailsToggle').hide(); }" value="1" {{ ForwardInvoiceEmailsCheck|raw }} /> {% lang 'YesEnableForwardInvoiceEmails' %}</label>
							<img onmouseout="HideHelp('invoiceemailshelp');" onmouseover="ShowHelp('invoiceemailshelp', '{% lang 'ForwardInvoiceEmails' %}', '{% lang 'ForwardInvoiceEmailsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="invoiceemailshelp"></div>
							<div style="margin-top: 3px; display: {{ HideForwardInvoiceEmails|raw }}" class="ForwardInvoiceEmailsToggle">
								<img src="images/nodejoin.gif" style="vertical-align: middle;" />
								<input type="text" name="ForwardInvoiceEmails" id="ForwardInvoiceEmails" class="Field250" value="{{ ForwardInvoiceEmails|raw }}" /><br />
								<span class="Disabled" style='text-decoration: none; padding-left: 25px;'>{% lang 'ForwardOrderInvoicesDesc' %}</span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span>
							{% lang 'UseSMTPServer' %}:
						</td>
						<td>
							<label for="MailUsePHP">
								<input type="radio" name="MailUseSMTP" id="MailUsePHP" value="0" onclick="ToggleMailSettings()" {{ MailUsePHPChecked|raw }} />
								{% lang 'UseDefaultMailSettings' %}
							</label>
							<img onmouseout="HideHelp('ssK6vhkyjO');" onmouseover="ShowHelp('ssK6vhkyjO', '{% lang 'UseDefaultMailSettings' %}', '{% lang 'UseDefaultMailSettingsHelp' %}');" src="images/help.gif" width="24" height="16" border="0"><div style="display:none" id="ssK6vhkyjO"></div>
							<br />
							<label for="MailUseSMTP">
								<input type="radio" name="MailUseSMTP" id="MailUseSMTP" onclick="ToggleMailSettings()" value="1" {{ MailUseSMTPChecked|raw }} />
								{% lang 'SpecifyOwnSMTPDetails' %}
							</label>
							<img onmouseout="HideHelp('ssv0NUivAU');" onmouseover="ShowHelp('ssv0NUivAU', '{% lang 'SpecifyOwnSMTPDetails' %}', '{% lang 'SpecifyOwnSMTPDetailsHelp' %}');" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="ssv0NUivAU"></div>
						</td>
					</tr>
					<tr class="SMTPOptions" style="display: {{ HideMailSMTPSettings|raw }}">
						<td class="FieldLabel">
							<span class="Required">*</span>
							{% lang 'SMTPHostname' %}:
						</td>
						<td>
							<img width="20" height="20" src="images/nodejoin.gif"/>
							<input type="text" name="MailSMTPServer" id="MailSMTPServer" value="{{ MailSMTPServer|raw }}" class="Field250 smtpSettings"> <img onmouseout="HideHelp('ssdR2a1s2Y');" onmouseover="ShowHelp('ssdR2a1s2Y', '{% lang 'SMTPHostname' %}', '{% lang 'SMTPHostnameHelp' %}');" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="ssdR2a1s2Y"></div>
						</td>
					</tr>

					<tr class="SMTPOptions" style="display: {{ HideMailSMTPSettings|raw }}">
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span>
							{% lang 'SMTPUsername' %}:
						</td>
						<td>
							<img width="20" height="20" src="images/blank.gif"/>
							<input type="text" name="MailSMTPUsername" id="MailSMTPUsername" value="{{ MailSMTPUsername|raw }}" class="Field250 smtpSettings"> <img onmouseout="HideHelp('ssL1nZ3ajD');" onmouseover="ShowHelp('ssL1nZ3ajD', '{% lang 'SMTPUsername' %}', '{% lang 'SMTPUsernameHelp' %}');" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="ssL1nZ3ajD"></div>
						</td>
					</tr>
					<tr class="SMTPOptions" style="display: {{ HideMailSMTPSettings|raw }}">
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span>
							{% lang 'SMTPPassword' %}:
						</td>
						<td>
							<img width="20" height="20" src="images/blank.gif"/>
							<input type="password" autocomplete="off" name="MailSMTPPassword" id="MailSMTPPassword" value="{{ MailSMTPPassword|raw }}" class="Field250 smtpSettings"> <img onmouseout="HideHelp('ss7ELh2UVn');" onmouseover="ShowHelp('ss7ELh2UVn', '{% lang 'SMTPPassword' %}', '{% lang 'SMTPPasswordHelp' %}');" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="ss7ELh2UVn"></div>
						</td>
					</tr>
					<tr class="SMTPOptions" style="display: {{ HideMailSMTPSettings|raw }}">
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span>
							{% lang 'SMTPPort' %}:
						</td>
						<td>
							<img width="20" height="20" src="images/blank.gif"/>
							<input type="text" name="MailSMTPPort" id="MailSMTPPort" value="{{ MailSMTPPort|raw }}" class="Field250 smtpSettings"> <img onmouseout="HideHelp('ssKz8SUyDX');" onmouseover="ShowHelp('ssKz8SUyDX', '{% lang 'SMTPPort' %}', '{% lang 'SMTPPortHelp' %}');" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="ssKz8SUyDX"></div>
						</td>
					</tr>
					<tr class="SMTPOptions" style="display: {{ HideMailSMTPSettings|raw }}">
						<td class="FieldLabel">
							&nbsp;
						</td>
						<td>
							<img width="20" height="20" src="images/blank.gif"/>
							<input type="button" name="cmdTestSMTP" value="{% lang 'TestSMTPSettings' %}" id="TestSMTPSettings" class="btn" onclick="startSMTPTest();" />
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'SearchEngineOptimization' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span>  <label for="MetaDesc">{% lang 'SearchEngineFriendlyURLs' %}:</label>
					</td>
					<td>
						<select name="EnableSEOUrls" id="EnableSEOUrls" class="Field250">
							<option value="2" {{ IsEnableSEOUrlsAuto|raw }}>{% lang 'SearchEngineFriendlyURLsAuto' %}</option>
							<option value="1" {{ IsEnableSEOUrlsEnabled|raw }}>{% lang 'SearchEngineFriendlyURLsEnabled' %}</option>
							<option value="0" {{ IsEnableSEOUrlsDisabled|raw }}>{% lang 'SearchEngineFriendlyURLsDisabled' %}</option>
						</select>
						<img onmouseout="HideHelp('seo1');" onmouseover="ShowHelp('seo1', '{% lang 'SearchEngineFriendlyURLs' %}:', '{% lang 'SearchEngineFriendlyURLsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="seo1"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span>  <label for="redirectWWW">{{ lang.RedirectWWW }}:</label>
					</td>
					<td>
						<select name="RedirectWWW" id="RedirectWWW" class="Field250">
							<option value="1" {{ RedirectToWWWSelected|raw }}>{{ lang.RedirectToWWW }}</option>
							<option value="2" {{ RedirectToNoWWWSelected|raw }}>{{ lang.RedirectToNoWWW }}</option>
							<option value="0" {{ RedirectNoPreferenceSelected|raw }}>{{ lang.RedirectNoPreference }}</option>
						</select>
						{{ util.tooltip('RedirectWWW', 'RedirectWWWHelp') }}
					</td>
				</td>
				<tr>
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'HomePagePageTitle' %}:
					</td>
					<td>
						<input type="text" id="HomePagePageTitle" name="HomePagePageTitle" class="Field250" value="{{ HomePagePageTitle|raw }}" />
						<img onmouseout="HideHelp('pagetitle');" onmouseover="ShowHelp('pagetitle', '{% lang 'HomePagePageTitle' %}', '{% lang 'HomePagePageTitleHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="pagetitle"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span>  <label for="MetaKeywords">{% lang 'MetaKeywords' %}:</label>
					</td>
					<td>
						<input type="text" name="MetaKeywords" id="MetaKeywords" value="{{ MetaKeywords|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d4');" onmouseover="ShowHelp('d4', '{% lang 'MetaKeywords' %}', '{% lang 'SettingsMetaKeywordsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d4"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span>  <label for="MetaDesc">{% lang 'MetaDescription' %}:</label>
					</td>
					<td>
						<input type="text" name="MetaDesc" id="MetaDesc" value="{{ MetaDesc|raw }}" class="Field250" />
						<img onmouseout="HideHelp('d5');" onmouseover="ShowHelp('d5', '{% lang 'MetaDescription' %}', '{% lang 'SettingsMetaDescriptionHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d5"></div>
					</td>
				</tr>
				</tr>

				<table width="100%" class="Panel" style="{{ HideDatabaseDetails|raw }}">
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="Heading2" colspan="2">{% lang 'DatabaseSettings' %}</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabaseType' %}:
					</td>
					<td>
						<input type="text" value="{{ dbType|raw }}" class="Field250" disabled readonly />
					</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabaseUser' %}:
					</td>
					<td>
						<input type="text" value="{{ dbUser|raw }}" class="Field250" disabled readonly />
					</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabasePassword' %}:
					</td>
					<td>
						<input type="text" value="" class="Field250" disabled readonly />
					</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabaseHostname' %}:
					</td>
					<td>
						<input type="text" value="{{ dbServer|raw }}" class="Field250" disabled readonly />
					</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabaseTablePrefix' %}:
					</td>
					<td>
						<input type="text" value="{{ tablePrefix|raw }}" class="Field250" disabled readonly />
					</td>
				</tr>
				<tr style="{{ HideDatabaseDetails|raw }}">
					<td class="FieldLabel">
						<span class="Required">&nbsp;</span> {% lang 'DatabaseVersion' %}:
					</td>
					<td class="PanelBottom">
						{{ dbVersion|raw }}
					</td>
				</tr>
				</table>
			</div>
			<div id="div1" style="padding-top: 10px;">
				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'LanguageSettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="Lanauge">{% lang 'Language' %}:</label>
					</td>
					<td>
						<select name="Language" id="Lanauge" class="Field100">
							{{ LanguageOptions|raw }}
						</select>
						<img onmouseout="HideHelp('lang_setting');" onmouseover="ShowHelp('lang_setting', '{% lang 'Language' %}', '{% lang 'LanguageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="lang_setting"></div>
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'PhysicalDimensionSettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="WeightMeasurement">{% lang 'WeightMeasurement' %}:</label>
					</td>
					<td>
						<select name="WeightMeasurement" id="WeightMeasurement" class="Field100">
							<option value="LBS" {{ IsPounds|raw }}>{% lang 'Pounds' %}</option>
							<option value="Ounces" {{ IsOunces|raw }}>{% lang 'Ounces' %}</option>
							<option value="KGS" {{ IsKilos|raw }}>{% lang 'Kilograms' %}</option>
							<option value="Grams" {{ IsGrams|raw }}>{% lang 'Grams' %}</option>
							<option value="Tonnes" {{ IsTonnes|raw }}>{% lang 'Tonnes' %}</option>
						</select>
						<img onmouseout="HideHelp('d17');" onmouseover="ShowHelp('d17', '{% lang 'WeightMeasurement' %}', '{% lang 'WeightMeasurementHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d17"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="LengthMeasurement">{% lang 'LengthMeasurement' %}:</label>
					</td>
					<td class="PanelBottom">
						<select name="LengthMeasurement" id="LengthMeasurement" class="Field100">
							<option value="Inches" {{ IsInches|raw }}>{% lang 'Inches' %}</option>
							<option value="Centimeters" {{ IsCentimeters|raw }}>{% lang 'Centimeters' %}</option>
						</select>
						<img onmouseout="HideHelp('d18');" onmouseover="ShowHelp('d18', '{% lang 'LengthMeasurement' %}', '{% lang 'LengthMeasurementHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d18"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="DimensionsDecimalToken">{% lang 'DimensionsDecimalToken' %}:</label>
					</td>
					<td>
						<input type="text" name="DimensionsDecimalToken" value="{{ DimensionsDecimalToken }}" id="DimensionsDecimalToken" class="Field40" maxlenght="1" />
						<img onmouseout="HideHelp('decimaltoken');" onmouseover="ShowHelp('decimaltoken', '{% lang 'DimensionsDecimalToken' %}', '{% lang 'DimensionsDecimalTokenHelp' %}');" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display: none;" id="decimaltoken"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="DimensionsThousandsToken">{% lang 'DimensionsThousandsToken' %}:</label>
					</td>
					<td>
						<input type="text" name="DimensionsThousandsToken" value="{{ DimensionsThousandsToken }}" id="DimensionsThousandsToken" class="Field40" maxlenght="1" />
						<img onmouseout="HideHelp('thousandstoken');" onmouseover="ShowHelp('thousandstoken', '{% lang 'DimensionsThousandsToken' %}', '{% lang 'DimensionsThousandsTokenHelp' %}');" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display: none;" id="thousandstoken"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="DimensionsDecimalPlaces">{% lang 'DimensionsDecimalPlaces' %}:</label>
					</td>
					<td>
						<input type="text" name="DimensionsDecimalPlaces" value="{{ DimensionsDecimalPlaces|raw }}" id="DimensionsDecimalPlaces" class="Field40" maxlenght="1" />
						<img onmouseout="HideHelp('decimalplaces');" onmouseover="ShowHelp('decimalplaces', '{% lang 'DimensionsDecimalPlaces' %}', '{% lang 'DimensionsDecimalPlacesHelp' %}');" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display: none;" id="decimalplaces"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ShippingFactoringDimension">{% lang 'ShippingFactoringDimension' %}:</label>
					</td>
					<td>
						<select name="ShippingFactoringDimension" id="ShippingFactoringDimension" class="Field100">
							<option value="depth" {{ ShippingFactoringDimensionDepthSelected|raw }}>{% lang 'ShippingFactoringDimensionDepth' %}</option>
							<option value="height" {{ ShippingFactoringDimensionHeightSelected|raw }}>{% lang 'ShippingFactoringDimensionHeight' %}</option>
							<option value="width" {{ ShippingFactoringDimensionWidthSelected|raw }}>{% lang 'ShippingFactoringDimensionWidth' %}</option>
						</select>
						<img onmouseout="HideHelp('dshipfactdimension');" onmouseover="ShowHelp('dshipfactdimension', '{% lang 'ShippingFactoringDimension' %}', '{% lang 'ShippingFactoringDimensionHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="dshipfactdimension"></div>
					</td>
				</tr>
				</table>

				<table width="100%" class="Panel">
				<tr>
					<td class="Heading2" colspan="2">{% lang 'DateSettings' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="StoreTimezone">{% lang 'StoreTimeZone' %}:</label><a name="StoreTimezone" />
					</td>
					<td>
						<select name="StoreTimeZone" id="StoreTimeZone" class="Field300">
							{{ TimeZoneOptions|raw }}
						</select>
						<img onmouseout="HideHelp('tz_h');" onmouseover="ShowHelp('tz_h', '{% lang 'StoreTimeZone' %}', '{% lang 'StoreTimeZoneHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="tz_h"></div>
					</td>
				</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'EnableDSTCorrection' %}?
						</td>
						<td>
							<label for="StoreDSTCorrection"><input {{ IsDSTCorrectionEnabled|raw }} type="checkbox" name="StoreDSTCorrection" id="StoreDSTCorrection" value="1" />{% lang 'YesEnableDSTCorrection' %}</label>
							<img onmouseout="HideHelp('dst');" onmouseover="ShowHelp('dst', '{% lang 'EnableDSTCorrection' %}?', '{% lang 'EnableDSTCorrectionHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="dst"></div>
						</td>
					</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="DisplayDateFormat">{% lang 'DisplayDateFormat' %}:</label>
					</td>
					<td>
						<input type="text" name="DisplayDateFormat" id="DisplayDateFormat" value="{{ DisplayDateFormat|raw }}" class="Field100" />
						<img onmouseout="HideHelp('d19');" onmouseover="ShowHelp('d19', '{% lang 'DisplayDateFormat' %}', '{% lang 'DisplayDateFormatHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d19"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ExportDateFormat">{% lang 'ExportDateFormat' %}:</label>
					</td>
					<td>
						<input type="text" name="ExportDateFormat" id="ExportDateFormat" value="{{ ExportDateFormat|raw }}" class="Field100" />
						<img onmouseout="HideHelp('d20');" onmouseover="ShowHelp('d20', '{% lang 'ExportDateFormat' %}', '{% lang 'ExportDateFormatHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d20"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span> <label for="ExtendedDisplayDateFormat">{% lang 'ExtendedDisplayDateFormat' %}:</label>
					</td>
					<td class="PanelBottom">
						<input type="text" name="ExtendedDisplayDateFormat" id="ExtendedDisplayDateFormat" value="{{ ExtendedDisplayDateFormat|raw }}" class="Field100" />
						<img onmouseout="HideHelp('d21');" onmouseover="ShowHelp('d21', '{% lang 'ExtendedDisplayDateFormat' %}', '{% lang 'ExtendedDisplayDateFormatHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
						<div style="display:none" id="d21"></div>
					</td>
				</tr>
				</table>
			</div>

			<div id="div8" style="padding-top: 10px;">
			<input type="hidden" name="AutoResizeImages" id="AutoResizeImages" value="no" />
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'ProductThumbnailSizes' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'StorewideThumbnail' %}:
						</td>
						<td>
							<input type="text" name="ProductImagesStorewideThumbnail_width" id="ProductImagesStorewideThumbnail_width" value="{{ ProductImagesStorewideThumbnail_width|raw }}" class="Field40 SetOriginalImageSizeValue" />&nbsp;x&nbsp;&nbsp;<input type="text" name="ProductImagesStorewideThumbnail_height" id="ProductImagesStorewideThumbnail_height" value="{{ ProductImagesStorewideThumbnail_height|raw }}" class="Field40 SetOriginalImageSizeValue" />
							<img onmouseout="HideHelp('productimage_storewidethumbnail');" onmouseover="ShowHelp('productimage_storewidethumbnail', '{% lang 'StorewideThumbnail' %}', '{% lang 'StorewideThumbnailHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_storewidethumbnail"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'ProductPageImage' %}:
						</td>
						<td>
							<input type="text" name="ProductImagesProductPageImage_width" id="ProductImagesProductPageImage_width" value="{{ ProductImagesProductPageImage_width|raw }}" class="Field40 SetOriginalImageSizeValue" />&nbsp;x&nbsp;&nbsp;<input type="text" name="ProductImagesProductPageImage_height" id="ProductImagesProductPageImage_height" value="{{ ProductImagesProductPageImage_height|raw }}" class="Field40 SetOriginalImageSizeValue" />
							<img onmouseout="HideHelp('productimage_productpageimage');" onmouseover="ShowHelp('productimage_productpageimage', '{% lang 'ProductPageImage' %}', '{% lang 'ProductPageImageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_productpageimage"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'ProductPageGalleryThumbnail' %}:
						</td>
						<td>
							<input type="text" name="ProductImagesGalleryThumbnail_width" id="ProductImagesGalleryThumbnail_width" value="{{ ProductImagesGalleryThumbnail_width|raw }}" class="Field40 SetOriginalImageSizeValue" />&nbsp;x&nbsp;&nbsp;<input type="text" name="ProductImagesGalleryThumbnail_height" id="ProductImagesGalleryThumbnail_height" value="{{ ProductImagesGalleryThumbnail_height|raw }}" class="Field40 SetOriginalImageSizeValue" />
							<img onmouseout="HideHelp('productimage_productpagegallerythumbnail');" onmouseover="ShowHelp('productimage_productpagegallerythumbnail', '{% lang 'ProductPageGalleryThumbnail' %}', '{% lang 'ProductPageGalleryThumbnailHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_productpagegallerythumbnail"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'ProductPageZoomImage' %}:
						</td>
						<td>
							<input type="text" name="ProductImagesZoomImage_width" id="ProductImagesZoomImage_width" value="{{ ProductImagesZoomImage_width|raw }}" class="Field40 SetOriginalImageSizeValue" />&nbsp;x&nbsp;&nbsp;<input type="text" name="ProductImagesZoomImage_height" id="ProductImagesZoomImage_height" value="{{ ProductImagesZoomImage_height|raw }}" class="Field40 SetOriginalImageSizeValue" />
							<img onmouseout="HideHelp('productimage_zoomimage');" onmouseover="ShowHelp('productimage_zoomimage', '{% lang 'ProductPageZoomImage' %}', '{% lang 'ProductPageZoomImageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_zoomimage"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'ReprocessImages' %}
						</td>
						<td>
						<a href="#" id="ReprocessImages">{% lang 'ReprocessImagesLink' %}</a>
							<img onmouseout="HideHelp('productimage_reprocessimages');" onmouseover="ShowHelp('productimage_reprocessimages', '{% lang 'ReprocessImages' %}', '{% lang 'ReprocessImagesHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_reprocessimages"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'ShowTinyThumbnails' %}
						</td>
						<td>
						<input type="checkbox" name="ProductImagesTinyThumbnailsEnabled" id="ProductImagesTinyThumbnailsEnabled" value="ON" {{ IsProductImagesTinyThumbnailsEnabled|raw }} /> <label for="ProductImagesTinyThumbnailsEnabled">{% lang 'YesShowTinyThumbnails' %}</label>
							<img onmouseout="HideHelp('productimage_tinythumbnailsenabled');" onmouseover="ShowHelp('productimage_tinythumbnailsenabled', '{% lang 'ShowTinyThumbnails' %}', '{% lang 'ShowTinyThumbnailsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_tinythumbnailsenabled"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'EnableImageZoom' %}
						</td>
						<td>
						<input type="checkbox" name="ProductImagesImageZoomEnabled" id="ProductImagesImageZoomEnabled" value="ON" {{ IsProductImagesImageZoomEnabled|raw }} /> <label for="ProductImagesImageZoomEnabled">{% lang 'YesEnableImageZoom' %}</label>
							<img onmouseout="HideHelp('productimage_enableimagezoom');" onmouseover="ShowHelp('productimage_enableimagezoom', '{% lang 'EnableImageZoom' %}', '{% lang 'EnableImageZoomHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="productimage_enableimagezoom"></div>
						</td>
					</tr>

<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ProductImageMode">{% lang 'ProductImageMode' %}:</label>
						</td>
						<td class="PanelBottom">
							<select name="ProductImageMode" id="ProductImageMode" class="Field300">
								<option value="popup" {{ ProductImageModePopup|raw }}>{% lang 'ProductImageModePopup' %}</option>
								<option value="lightbox" {{ ProductImageModeLightbox|raw }}>{% lang 'ProductImageModeLightbox' %}</option>
							</select>
							<img onmouseout="HideHelp('imagemodehelp');" onmouseover="ShowHelp('imagemodehelp', '{% lang 'ProductImageMode' %}', '{% lang 'ProductImageModeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="imagemodehelp"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> Imagem Padrão:
						</td>
						<td class="PanelBottom">
							<label><input type="radio" class="DefaultProductImage" name="DefaultProductImage" value="none" {{ DefaultProductImageNoneChecked|raw }} /> {% lang 'DefaultProductImageNone' %}</label>
							<img onmouseout="HideHelp('DefaultProductImageHelp');" onmouseover="ShowHelp('DefaultProductImageHelp', '{% lang 'DefaultProductImage' %}', '{% lang 'DefaultProductImageHelp' %}')" src="images/help.gif" />
							<div style="display:none" id="DefaultProductImageHelp"></div>
							<label style="display: block;"><input type="radio" class="DefaultProductImage" name="DefaultProductImage" value="template" {{ DefaultProductImageTemplateChecked|raw }} />  {% lang 'DefaultProductImageTemplate' %} (<a href="{{ AppPath|raw }}/templates/{{ template|raw }}/images/ProductDefault.gif" target="_blank">templates/{{ template|raw }}/images/ProductDefault.gif</a>)</label>
							<label style="display: block;"><input type="radio" class="DefaultProductImage" name="DefaultProductImage" value="custom" {{ DefaultProductImageCustomChecked|raw }} /> {% lang 'DefaultProductImageCustom' %}</label>
							<div id="DefaultProductImageCustomContainer" style="margin-top: 5px;">
								<img src="images/nodejoin.gif" alt="" style="vertical-align: top;" /> <input type="file" name="DefaultProductImageCustom" id="DefaultProductImageCustom" />
								<span style="{{ HideCurrentDefaultProductImage|raw }}" id="DefaultProductImageCustomCurrent">&nbsp;&nbsp;&nbsp; {% lang 'CurrentDefaultImage' %}: <a href="{{ AppPath|raw }}/{{ DefaultProductImage|raw }}" target="_blank">{{ DefaultProductImage|raw }}</span>
							</div>
						</td>
					</tr>
					</table>

					<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'CategoryAndBrandImages' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="CategoryPerRow">{% lang 'CatItemPerRow' %}:</label>
						</td>
						<td>
							<input type="text" name="CategoryPerRow" id="CategoryPerRow" value="{{ CategoryPerRow|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d_catper');" onmouseover="ShowHelp('d_catper', '{% lang 'CatItemPerRow' %}', '{% lang 'CatItemPerRowHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_catper"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="BrandPerRow">{% lang 'BrandItemPerRow' %}:</label>
						</td>
						<td>
							<input type="text" name="BrandPerRow" id="BrandPerRow" value="{{ BrandPerRow|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d_brandper');" onmouseover="ShowHelp('d_brandper', '{% lang 'BrandItemPerRow' %}', '{% lang 'BrandItemPerRowHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_brandper"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="CategoryImageWidth">{% lang 'CatImageDimSetting' %}:</label>
						</td>
						<td>
							<input type="text" name="CategoryImageWidth" id="CategoryImageWidth" value="{{ CategoryImageWidth|raw }}" class="Field40" /> x <input type="text" name="CategoryImageHeight" id="CategoryImageHeight" value="{{ CategoryImageHeight|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d_catdim');" onmouseover="ShowHelp('d_catdim', '{% lang 'CatImageDimSetting' %}', '{% lang 'CatImageDimSettingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_catdim"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="BrandImageWidth">{% lang 'BrandImageDimSetting' %}:</label>
						</td>
						<td>
							<input type="text" name="BrandImageWidth" id="BrandImageWidth" value="{{ BrandImageWidth|raw }}" class="Field40" /> x <input type="text" name="BrandImageHeight" id="BrandImageHeight" value="{{ BrandImageHeight|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d_branddim');" onmouseover="ShowHelp('d_branddim', '{% lang 'BrandImageDimSetting' %}', '{% lang 'BrandImageDimSettingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_branddim"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="CategoryDefaultImage">{% lang 'CatImageDefaultSetting' %}:</label>
						</td>
						<td>
							<input type="file" id="CategoryDefaultImage" name="CategoryDefaultImage" class="Field" />
							<img onmouseout="HideHelp('d_catdimg');" onmouseover="ShowHelp('d_catdimg', '{% lang 'CatImageDefaultSetting' %}', '{% lang 'CatImageDefaultSettingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_catdimg"></div>{{ CatImageDefaultSettingMessage|raw }}
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BrandDefaultImage">{% lang 'BrandImageDefaultSetting' %}:</label>
						</td>
						<td>
							<input type="file" id="BrandDefaultImage" name="BrandDefaultImage" class="Field" />
							<img onmouseout="HideHelp('d_brandimg');" onmouseover="ShowHelp('d_brandimg', '{% lang 'BrandImageDefaultSetting' %}', '{% lang 'BrandImageDefaultSettingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d_brandimg"></div>{{ BrandImageDefaultSettingMessage|raw }}
						</td>
					</tr>
				</table>
			</div>

			<div id="div2" style="padding-top: 10px;">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'DisplaySettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="HomeFeaturedProducts">{% lang 'HomeFeaturedProducts' %}:</label>
						</td>
						<td>
							<input type="text" name="HomeFeaturedProducts" id="HomeFeaturedProducts" value="{{ HomeFeaturedProducts|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d23');" onmouseover="ShowHelp('d23', '{% lang 'HomeFeaturedProducts' %}', '{% lang 'HomeFeaturedProductsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d23"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="HomeNewProducts">{% lang 'HomeNewProducts' %}:</label>
						</td>
						<td>
							<input type="text" name="HomeNewProducts" id="HomeNewProducts" value="{{ HomeNewProducts|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d25');" onmouseover="ShowHelp('d25', '{% lang 'HomeNewProducts' %}', '{% lang 'HomeNewProductsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d25"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="HomeBlogPosts">{% lang 'HomeBlogPosts' %}:</label>
						</td>
						<td>
							<input type="text" name="HomeBlogPosts" id="HomeBlogPosts" value="{{ HomeBlogPosts|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d27');" onmouseover="ShowHelp('d27', '{% lang 'HomeBlogPosts' %}', '{% lang 'HomeBlogPostsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d27"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="CategoryProductsPerPage">{% lang 'CategoryProductsPerPage' %}:</label>
						</td>
						<td>
							<input type="text" name="CategoryProductsPerPage" id="CategoryProductsPerPage" value="{{ CategoryProductsPerPage|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d28');" onmouseover="ShowHelp('d28', '{% lang 'CategoryProductsPerPage' %}', '{% lang 'CategoryProductsPerPageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d28"></div>
						</td>
					</tr>
					<tr style="{{ HideIfReviewsDisabled }}">
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="ProductReviewsPerPage">{% lang 'ProductReviewsPerPage' %}:</label>
						</td>
						<td>
							<input type="text" name="ProductReviewsPerPage" id="ProductReviewsPerPage" value="{{ ProductReviewsPerPage|raw }}" class="Field40" />
							<img onmouseout="HideHelp('d30');" onmouseover="ShowHelp('d30', '{% lang 'ProductReviewsPerPage' %}', '{% lang 'ProductReviewsPerPageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d30"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="TagCartQuantityBoxes">{% lang 'CartQuantityBoxes' %}:</label>
						</td>
						<td>
							<select name="TagCartQuantityBoxes" id="TagCartQuantityBoxes" class="Field200">
								<option value="dropdown"  {{ IsDropdown|raw }}>{% lang 'DropdownList' %}</option>
								<option value="textbox"  {{ IsTextbox|raw }}>{% lang 'TextBox' %}</option>
							</select>
							<img onmouseout="HideHelp('d32');" onmouseover="ShowHelp('d32', '{% lang 'CartQuantityBoxes' %}', '{% lang 'CartQuantityBoxesHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d32"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="FastCartAction">{% lang 'FastCartLabel' %}:</label>
						</td>
						<td>
							<select name="FastCartAction" id="FastCartAction">
								<option value="popup" {{ IsShowPopWindow|raw }}>{% lang 'FastCartOption1ShowPopWindow' %}</option>
								<option value="cart" {{ IsShowCartPage|raw }}>{% lang 'FastCartOption2ShowCartPage' %}</option>
							</select>
							<img onmouseout="HideHelp('FastCartHelp');" onmouseover="ShowHelp('FastCartHelp', '{% jslang 'FastCartLabel' %}', '{% jslang 'FastCartHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="FastCartHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ProductBreadcrumbs">{% lang 'ProductBreadcrumbs' %}:</label>
						</td>
						<td>
							{{ form.select('ProductBreadcrumbs', ProductBreadcrumbOptions, ProductBreadcrumbs, []) }}
							<img onmouseout="HideHelp('ProductBreadcrumbsHelp');" onmouseover="ShowHelp('ProductBreadcrumbsHelp', '{% lang 'ProductBreadcrumbs' %}', '{% lang 'ProductBreadcrumbsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="ProductBreadcrumbsHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ShowAddToCartQtyBox">{% lang 'ShowAddToCartQtyBox' %}:</label>
						</td>
						<td>
							<input type="checkbox" name="ShowAddToCartQtyBox" id="ShowAddToCartQtyBox" value="ON" {{ IsShownAddToCartQtyBox|raw }} /> <label for="ShowAddToCartQtyBox">{% lang 'YesShowAddToCartQtyBox' %}</label>
							<img onmouseout="HideHelp('d31');" onmouseover="ShowHelp('d31', '{% lang 'ShowAddToCartQtyBox' %}', '{% lang 'ShowAddToCartQtyBoxHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d31"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<label for="TagCloudsEnabled">{% lang 'TagCloudsEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="TagCloudsEnabled" id="TagCloudsEnabled" value="ON" {{ IsTagCloudsEnabled|raw }} /> <label for="TagCloudsEnabled">{% lang 'YesTagCloudsEnabled' %}</label>
							<img onmouseout="HideHelp('d31');" onmouseover="ShowHelp('d31', '{% lang 'TagCloudsEnabled' %}', '{% lang 'TagCloudsEnabledHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d31"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="CaptchaEnabled">{% lang 'CaptchaEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="CaptchaEnabled" id="CaptchaEnabled" value="ON" {{ IsCaptchaEnabled|raw }} /> <label for="CaptchaEnabled">{% lang 'YesCaptchaEnabled' %}</label>
							<img onmouseout="HideHelp('d32');" onmouseover="ShowHelp('d32', '{% lang 'CaptchaEnabled' %}', '{% lang 'CaptchaEnabledHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d32"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="SearchSuggest">{% lang 'EnableSearchSuggest' %}</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="SearchSuggest" id="SearchSuggest" value="ON" {{ IsSearchSuggest|raw }} /> <label for="SearchSuggest">{% lang 'YesSearchSuggest' %}</label>
							<img onmouseout="HideHelp('d35');" onmouseover="ShowHelp('d35', '{% lang 'SearchSuggest' %}', '{% lang 'SearchSuggestHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d35"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ShowThumbsInCart">{% lang 'ShowThumbsInCart' %}</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowThumbsInCart" id="ShowThumbsInCart" value="ON" {{ IsShowThumbsInCart|raw }} /> <label for="ShowThumbsInCart">{% lang 'YesShowThumbsInCart' %}</label>
							<img onmouseout="HideHelp('d33');" onmouseover="ShowHelp('d33', '{% lang 'ShowThumbsInCart' %}', '{% lang 'ShowThumbsInCartHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d33"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ShowCartSuggestions">{% lang 'ShowCartSuggestions' %}</label>
						</td>
						<td>
							<input type="checkbox" name="ShowCartSuggestions" id="ShowCartSuggestions" value="ON" {{ IsShowCartSuggestions|raw }} /> <label for="ShowCartSuggestions">{% lang 'YesShowCartSuggestions' %}</label>
							<img onmouseout="HideHelp('d34');" onmouseover="ShowHelp('d34', '{% lang 'ShowCartSuggestions' %}', '{% lang 'ShowCartSuggestionsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d34"></div>
						</td>
					</tr>
					<tr style="{{ HideIfReviewsDisabled }}">
						<td class="FieldLabel">
							<label for="AutoApproveReviews">{% lang 'AutoApproveReviews' %}</label>
						</td>
						<td>
							<input type="checkbox" name="AutoApproveReviews" id="AutoApproveReviews" value="ON" {{ IsAutoApproveReviews|raw }} /> <label for="AutoApproveReviews">{% lang 'YesAutoApproveReviews' %}</label>
							<img onmouseout="HideHelp('AutoApproveRevHelp');" onmouseover="ShowHelp('AutoApproveRevHelp', '{% lang 'AutoApproveReviews' %}', '{% lang 'AutoApproveReviewsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="AutoApproveRevHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="EnableCustomersAlsoViewed">{% lang 'EnableCustomersAlsoViewed' %}?</label>
						</td>
						<td>
							<input type="checkbox" name="EnableCustomersAlsoViewed" id="EnableCustomersAlsoViewed" value="ON" {{ IsCustomersAlsoViewedEnabled|raw }} onclick="if(this.checked) { $('.HideIfCustomersAlsoViewedDisabled').show(); } else { $('.HideIfCustomersAlsoViewedDisabled').hide(); }" /> <label for="EnableCustomersAlsoViewed">{% lang 'YesEnableCustomersAlsoViewed' %}</label>
							<img onmouseout="HideHelp('EnableCustomersAlsoViewedHelp');" onmouseover="ShowHelp('EnableCustomersAlsoViewedHelp', '{% jslang 'EnableCustomersAlsoViewed' %}', '{% jslang 'EnableCustomersAlsoViewedHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="EnableCustomersAlsoViewedHelp"></div>
						</td>
					</tr>
					<tr class="HideIfCustomersAlsoViewedDisabled">
						<td class="FieldLabel">
							<label for="CustomersAlsoViewedCount">{% lang 'CustomersAlsoViewedCount' %}:</label>
						</td>
						<td>
							<input type="text" name="CustomersAlsoViewedCount" id="CustomersAlsoViewedCount" value="{{ CustomersAlsoViewedCount }}" class="Field40" />
							<img onmouseout="HideHelp('CustomersAlsoViewedCountHelp');" onmouseover="ShowHelp('CustomersAlsoViewedCountHelp', '{% jslang 'CustomersAlsoViewedCount' %}', '{% jslang 'CustomersAlsoViewedCountHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="CustomersAlsoViewedCountHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="QuickSearch">{% lang 'EnableQuickSearch' %}</label>
						</td>
						<td>
							<input type="checkbox" name="QuickSearch" id="QuickSearch" value="ON" {{ IsQuickSearch|raw }} /> <label for="QuickSearch">{% lang 'YesQuickSearch' %}</label>
							<img onmouseout="HideHelp('d43');" onmouseover="ShowHelp('d43', '{% lang 'EnableQuickSearch' %}', '{% lang 'QuickSearchHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d43"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ShowInventory">{% lang 'ShowInventory' %}</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowInventory" id="ShowInventory" value="ON" {{ IsShowInventory|raw }} onclick="if(this.checked) { $('.HideIfShowInventoryDisabled').show(); } else { $('.HideIfShowInventoryDisabled').hide(); }" /> <label for="ShowInventory">{% lang 'YesShowInventory' %}</label>
							<img onmouseout="HideHelp('ShowInvHelp');" onmouseover="ShowHelp('ShowInvHelp', '{% lang 'ShowInventory' %}', '{% lang 'ShowInventoryHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="ShowInvHelp"></div>
						</td>
					</tr>
					<tr class="HideIfShowInventoryDisabled">
						<td class="FieldLabel">
							<label for="ShowPreOrderInventory">{% lang 'ShowPreOrderInventory' %}</label>
						</td>
						<td>
							<input type="checkbox" name="ShowPreOrderInventory" id="ShowPreOrderInventory" value="ON" {{ IsShowPreOrderInventory|raw }} /> <label for="ShowPreOrderInventory">{% lang 'YesShowPreOrderInventory' %}</label>
							<img onmouseout="HideHelp('ShowPreOrderInventoryHelp');" onmouseover="ShowHelp('ShowPreOrderInventoryHelp', '{% jslang 'ShowPreOrderInventory' %}', '{% jslang 'ShowPreOrderInventoryHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="ShowPreOrderInventoryHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="ShowCartSuggestions">{% lang 'EnableWishlist' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="EnableWishlist" id="EnableWishlist" value="ON" {{ IsWishlistEnabled|raw }} /> <label for="EnableWishlist">{% lang 'YesEnableWishlist' %}</label>
							<img onmouseout="HideHelp('ShowWishlistHelp');" onmouseover="ShowHelp('ShowWishlistHelp', '{% lang 'EnableWishlist' %}?', '{% lang 'EnableWishlistHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="ShowWishlistHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="EnableProductComparisons">{% lang 'EnableProductComparisons' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="EnableProductComparisons" id="EnableProductComparisons" value="1" {{ IsEnableProductComparisons|raw }} /> <label for="EnableProductComparisons">{% lang 'YesEnableProductComparisons' %}</label>
							<img onmouseout="HideHelp('EnableProductComparisonsHelp');" onmouseover="ShowHelp('EnableProductComparisonsHelp', '{% lang 'EnableProductComparisons' %}', '{% lang 'EnableProductComparisonsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="EnableProductComparisonsHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="EnableAccountCreation">{% lang 'EnableAccountCreation' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="EnableAccountCreation" id="EnableAccountCreation" value="ON" {{ IsEnableAccountCreation|raw }} /> <label for="EnableAccountCreation">{% lang 'YesEnableAccountCreation' %}</label>
							<img onmouseout="HideHelp('AccountCreationHelp');" onmouseover="ShowHelp('AccountCreationHelp', '{% lang 'EnableAccountCreation' %}?', '{% lang 'EnableAccountCreationHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="AccountCreationHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="BulkDiscountEnabled">{% lang 'BulkDiscountEnabled' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="BulkDiscountEnabled" id="BulkDiscountEnabled" value="ON" {{ IsBulkDiscountEnabled|raw }} /> <label for="BulkDiscountEnabled">{% lang 'YesBulkDiscountEnabled' %}</label>
							<img onmouseout="HideHelp('bulkdiscountenabled');" onmouseover="ShowHelp('bulkdiscountenabled', '{% lang 'BulkDiscountEnabled' %}', '{% lang 'BulkDiscountEnabledHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="bulkdiscountenabled"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="EnableProductTabs">{% lang 'EnableProductTabs' %}?</label>
						</td>
						<td>
							<input type="checkbox" name="EnableProductTabs" id="EnableProductTabs" value="ON" {{ IsProductTabsEnabled|raw }} /> <label for="EnableProductTabs">{% lang 'YesEnableProductTabs' %}</label>
							<img onmouseout="HideHelp('EnableProductTabsHelp');" onmouseover="ShowHelp('EnableProductTabsHelp', '{% lang 'EnableProductTabs' %}', '{% lang 'EnableProductTabsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="EnableProductTabsHelp"></div>
						</td>
					</tr>
					</table>

					<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'ControlPanelDisplaySettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'UseWYSIWYGEditor' %}</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="UseWYSIWYG" id="UseWYSIWYG" value="ON" {{ IsWYSIWYGEnabled|raw }} /> <label for="UseWYSIWYG">{% lang 'YesEnableWYSIWYGEditor' %}</label>
							<img onmouseout="HideHelp('d39');" onmouseover="ShowHelp('d39', '{% lang 'UseWYSIWYGEditor' %}', '{% lang 'UseWYSIWYGEditorHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d39"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductThumbnails' %}</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowThumbsInControlPanel" id="ShowThumbsInControlPanel" value="ON" {{ IsProductThumbnailsEnabled|raw }} /> <label for="ShowThumbsInControlPanel">{% lang 'YesShowProductThumbnails' %}</label>
							<img onmouseout="HideHelp('d42');" onmouseover="ShowHelp('d42', '{% lang 'ShowProductThumbnails' %}', '{% lang 'ShowProductThumbnailsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="d42"></div>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'CategorySettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="CategoryListMode">{% lang 'CategoryListMode' %}:</label>
						</td>
						<td>
							<label><input type="radio" name="CategoryListingMode" value="single" {{ CategoryListModeSingle|raw }} /> {% lang 'CategoryListModeSingle' %}</label> <img onmouseout="HideHelp('categorylistmodehelp');" onmouseover="ShowHelp('categorylistmodehelp', '{% lang 'CategoryListMode' %}', '{% lang 'CategoryListModeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="categorylistmodehelp"></div>
							<br />
							<label><input type="radio" name="CategoryListingMode" value="emptychildren" {{ CategoryListModeEmptyChildren|raw }} /> {% lang 'CategoryListModeEmptyChildren' %}</label><br />
							<label><input type="radio" name="CategoryListingMode" value="children" {{ CategoryListModeChildren|raw }} /> {% lang 'CategoryListModeChildren' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="CategoryDisplayMode">{% lang 'CategoryDisplayMode' %}:</label>
						</td>
						<td>
							<select name="CategoryDisplayMode" id="CategoryDisplayMode" class="Field200">
								<option value="grid" {{ CategoryDisplayModeGrid|raw }}>{% lang 'CategoryDisplayModeGrid' %}</option>
								<option value="list" {{ CategoryDisplayModeList|raw }}>{% lang 'CategoryDisplayModeList' %}</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="CategoryListStyle">{% lang 'CategoryListStyle' %}:</label>
						</td>
						<td>
							<select name="CategoryListStyle" id="CategoryListStyle" class="Field200 showByValue">
								<option value="flyout" {% if CategoryListStyle == 'flyout' %}selected="selected"{% endif %}>{% lang 'CategoryListStyleFlyout' %}</option>
								<option value="static" {% if CategoryListStyle == 'static' %}selected="selected"{% endif %}>{% lang 'CategoryListStyleStatic' %}</option>
							</select>
							<img onmouseout="HideHelp('CategoryListStyleHelp');" onmouseover="ShowHelp('CategoryListStyleHelp', '{% jslang 'CategoryListStyle' %}', '{{ lang.CategoryListStyleHelp|nl2br|js }}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="CategoryListStyleHelp"></div>
						</td>
					</tr>
					<tr class="showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="categoryFlyoutDropShadow">{% lang 'categoryFlyoutDropShadow' %}</label>
						</td>
						<td>
							<input type="checkbox" name="categoryFlyoutDropShadow" id="categoryFlyoutDropShadow" value="1" {% if ISC_CFG.categoryFlyoutDropShadow %}checked="checked"{% endif %} /> <label for="categoryFlyoutDropShadow">{% lang 'YescategoryFlyoutDropShadow' %}</label>
							<img onmouseout="HideHelp('categoryFlyoutDropShadowHelp');" onmouseover="ShowHelp('categoryFlyoutDropShadowHelp', '{% lang 'categoryFlyoutDropShadow' %}', '{% lang 'categoryFlyoutDropShadowHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="categoryFlyoutDropShadowHelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="CategoryListDepth">{% lang 'CategoryListDepth' %}:</label>
						</td>
						<td>
							<input type="text" name="CategoryListDepth" id="CategoryListDepth" value="{{ CategoryListDepth|raw }}" class="Field40" /> <label for="CategoryListDepth">{% lang 'CategoryListDepthUnit' %}</label>
							<img onmouseout="HideHelp('CategoryListDepthHelp');" onmouseover="ShowHelp('CategoryListDepthHelp', '{% lang 'CategoryListDepth' %}', '{% lang 'CategoryListDepthHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="CategoryListDepthHelp"></div>
						</td>
					</tr>
					<tr class="showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="categoryFlyoutMouseOutDelay">{% lang 'categoryFlyoutMouseOutDelay' %}</label>
						</td>
						<td>
							<input type="text" name="categoryFlyoutMouseOutDelay" id="categoryFlyoutMouseOutDelay" value="{{ ISC_CFG.categoryFlyoutMouseOutDelay }}" class="Field40" /> <label for="categoryFlyoutMouseOutDelay">{% lang 'categoryFlyoutMouseOutDelayUnit' %}</label>
							<img onmouseout="HideHelp('categoryFlyoutMouseOutDelayHelp');" onmouseover="ShowHelp('categoryFlyoutMouseOutDelayHelp', '{% lang 'categoryFlyoutMouseOutDelay' %}', '{% lang 'categoryFlyoutMouseOutDelayHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="categoryFlyoutMouseOutDelayHelp"></div>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'ProductSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductPrice' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductPrice" id="ShowProductPrice" value="ON" {{ IsProductPriceShown|raw }} /> <label for="ShowProductPrice">{% lang 'YesShowProductPrice' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductSKU' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductSKU" id="ShowProductSKU" value="ON" {{ IsProductSKUShown|raw }} /> <label for="ShowProductSKU">{% lang 'YesShowProductSKU' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductWeight' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductWeight" id="ShowProductWeight" value="ON" {{ IsProductWeightShown|raw }} /> <label for="ShowProductWeight">{% lang 'YesShowProductWeight' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductBrand' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductBrand" id="ShowProductBrand" value="ON" {{ IsProductBrandShown|raw }} /> <label for="ShowProductBrand">{% lang 'YesShowProductBrand' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowCartSuggestions">{% lang 'ShowProductShipping' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductShipping" id="ShowProductShipping" value="ON" {{ IsProductShippingShown|raw }} /> <label for="ShowProductShipping">{% lang 'YesShowProductShipping' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowProductRating">{% lang 'ShowProductRating' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowProductRating" id="ShowProductRating" value="ON" {{ IsProductRatingShown|raw }} /> <label for="ShowProductRating">{% lang 'YesShowProductRating' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowAddToCartLink">{% lang 'ShowAddToCartLink' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowAddToCartLink" id="ShowAddToCartLink" value="ON" {{ IsAddToCartLinkShown|raw }} /> <label for="ShowAddToCartLink">{% lang 'YesShowAddToCartLink' %}</label>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'TagCloudFontSize' %}:
						</td>
						<td>
							<label>{% lang 'From' %} <input type="text" name="TagCloudMinSize" id="TagCloudMinSize" value="{{ TagCloudMinSize|raw }}" class="Field50" />%</label>
							<label>{% lang 'SearchTo' %} <input type="text" name="TagCloudMaxSize" id="TagCloudMaxSize" value="{{ TagCloudMaxSize|raw }}" class="Field50" />%</label>
							<img onmouseout="HideHelp('tagsizehelp');" onmouseover="ShowHelp('tagsizehelp', '{% lang 'TagCloudFontSize' %}', '{% lang 'TagCloudFontSizeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="tagsizehelp"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> {% lang 'DefaultPreOrderMessage' %}:
						</td>
						<td>
							<input type="text" name="DefaultPreOrderMessage" id="DefaultPreOrderMessage" value="{{ DefaultPreOrderMessage|raw }}" class="Field250" />
							<img onmouseout="HideHelp('DefaultPreOrderMessageHelp');" onmouseover="ShowHelp('DefaultPreOrderMessageHelp', '{% jslang 'DefaultPreOrderMessage' %}', '{% jslang 'DefaultPreOrderMessageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="DefaultPreOrderMessageHelp"></div>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'SocialSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="ShowAddThisLink">{% lang 'ShowAddThisLink' %}?</label>
						</td>
						<td class="PanelBottom">
							<input type="checkbox" name="ShowAddThisLink" id="ShowAddThisLink" value="1" {{ IsAddThisLinkShown|raw }} /> <label for="ShowAddThisLink">{% lang 'YesShowAddThisLink' %}</label>
							<img onmouseout="HideHelp('daddthis');" onmouseover="ShowHelp('daddthis', '{% lang 'ShowAddThisLink' %}', '{% lang 'ShowAddThisLinkHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="daddthis"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="FacebookLikeButtonEnabled">{% lang 'ShowFacebookLikeButton' %}?</label>
						</td>
						<td class="PanelBottom">
							<label for="FacebookLikeButtonEnabled"><input type="checkbox" name="FacebookLikeButtonEnabled" id="FacebookLikeButtonEnabled" value="1" {% if FacebookLikeButtonEnabled %}checked="checked"{% endif %} />{% lang 'YesShowFacebookLikeButton' %}</label>
							{{ util.tooltip('ShowFacebookLikeButton', 'ShowFacebookLikeButtonHelp') }}
							<div class="NodeJoin" id="facebookLikeOptions" {% if FacebookLikeButtonEnabled == false %}style="display: none;"{% endif %}>
								<div style="float: left;">
									<div>
										<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
										<label for="FacebookLikeButtonStyle">{{ lang.LayoutStyle }}:</label>
										<select name="FacebookLikeButtonStyle" id="FacebookLikeButtonStyle">
											<option value="standard" {{ FacebookLikeButtonStylestandard }}>{{ lang.StyleStandard }}</option>
											<option value="countonly" {{ FacebookLikeButtonStylecountonly }}>{{ lang.StyleCountOnly }}</option>
										</select>
									</div>
									<div>
										<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
										<label for="FacebookLikeButtonPosition">{{ lang.ButtonPosition }}:</label>
										<select name="FacebookLikeButtonPosition" id="FacebookLikeButtonPosition">
											<option value="above" {{ FacebookLikeButtonPositionabove }}>{{ lang.Above }}</option>
											<option value="below" {{ FacebookLikeButtonPositionbelow }}>{{ lang.Below }}</option>
										</select>
										{{ util.tooltip('ButtonPosition', 'ButtonPositionHelp') }}
									</div>
									<div>
										<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
										<label for="FacebookLikeButtonVerb">{{ lang.TextToDisplay }}:</label>
										<select name="FacebookLikeButtonVerb" id="FacebookLikeButtonVerb">
											<option value="like" {{ FacebookLikeButtonVerblike }}>{{ lang.Like }}</option>
											<option value="recommend" {{ FacebookLikeButtonVerbrecommend }}>{{ lang.Recommend }}</option>
										</select>
									</div>
									<div>
										<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
										<label for="FacebookLikeButtonShowFaces">{{ lang.ShowFaces }}?</label>
										<label>
											<input type="checkbox" name="FacebookLikeButtonShowFaces" id="FacebookLikeButtonShowFaces" value="1" {% if FacebookLikeButtonShowFacesEnabled %}checked="checked"{% endif %} />
											{{ lang.YesShowFaces }}
										</label>
									</div>
									<div>
										<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
										<label for="FacebookLikeButtonAdminIds"><span class="Required">*</span> {{ lang.FacebookAdminIds }}:</label>
										<input type="text" name="FacebookLikeButtonAdminIds" id="FacebookLikeButtonAdminIds" value="{{ FacebookLikeButtonAdminIds }}" />
										{{ util.tooltip('FacebookAdminIds', 'FacebookAdminIdsHelp') }}
										<div style="padding-left:114px" class="FieldHelp">
											{% lang 'FacebookAdminIdsLearnMore' %}
										</div>
									</div>
								</div>
							</div>
							<br class="Clear"/>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'RSSSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSNewProducts">{% lang 'RSSNewProductsEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSNewProducts" id="RSSNewProducts" value="ON" {{ IsRSSNewProductsEnabled|raw }} /> <label for="RSSNewProducts">{% lang 'YesRSSNewProductsEnabled' %}</label>
							<img onmouseout="HideHelp('rss1');" onmouseover="ShowHelp('rss1', '{% lang 'RSSNewProductsEnabled' %}', '{% lang 'RSSNewProductsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss1"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSPopularProducts">{% lang 'RSSPopularProductsEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSPopularProducts" id="RSSPopularProducts" value="ON" {{ IsRSSPopularProductsEnabled|raw }} /> <label for="RSSPopularProducts">{% lang 'YesRSSPopularProductsEnabled' %}</label>
							<img onmouseout="HideHelp('rss2');" onmouseover="ShowHelp('rss2', '{% lang 'RSSPopularProductsEnabled' %}', '{% lang 'RSSPopularProductsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss2"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSFeaturedProducts">{% lang 'RSSFeaturedProductsEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSFeaturedProducts" id="RSSFeaturedProducts" value="ON" {{ IsRSSFeaturedProductsEnabled|raw }} /> <label for="RSSFeaturedProducts">{% lang 'YesRSSFeaturedProductsEnabled' %}</label>
							<img onmouseout="HideHelp('rssfp');" onmouseover="ShowHelp('rssfp', '{% lang 'RSSFeaturedProductsEnabled' %}', '{% lang 'RSSFeaturedProductsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rssfp"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSCategories">{% lang 'RSSCategoriesEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSCategories" id="RSSCategories" value="ON" {{ IsRSSCategoriesEnabled|raw }} /> <label for="RSSCategories">{% lang 'YesRSSCategoriesEnabled' %}</label>
							<img onmouseout="HideHelp('rss3');" onmouseover="ShowHelp('rss3', '{% lang 'RSSCategoriesEnabled' %}', '{% lang 'RSSCategoriesHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss3"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSProductSearches">{% lang 'RSSProductSearchesEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSProductSearches" id="RSSProductSearches" value="ON" {{ IsRSSProductSearchesEnabled|raw }} /> <label for="RSSProductSearches">{% lang 'YesRSSProductSearchesEnabled' %}</label>
							<img onmouseout="HideHelp('rss4');" onmouseover="ShowHelp('rss4', '{% lang 'RSSProductSearchesEnabled' %}', '{% lang 'RSSProductSearchesHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss4"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSLatestBlogEntries">{% lang 'RSSLatestBlogEntriesEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSLatestBlogEntries" id="RSSLatestBlogEntries" value="ON" {{ IsRSSLatestBlogEntriesEnabled|raw }} /> <label for="RSSLatestBlogEntries">{% lang 'YesRSSLatestBlogEntriesEnabled' %}</label>
							<img onmouseout="HideHelp('rss5');" onmouseover="ShowHelp('rss5', '{% lang 'RSSLatestBlogEntriesEnabled' %}', '{% lang 'RSSLatestBlogEntriesHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss5"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="RSSSyndicationIcons">{% lang 'RSSSyndicationIconsEnabled' %}</label>
						</td>
						<td>
							<input type="checkbox" name="RSSSyndicationIcons" id="RSSSyndicationIcons" value="ON" {{ IsRSSSyndicationIconsEnabled|raw }} /> <label for="RSSSyndicationIcons">{% lang 'YesRSSSyndicationIconsEnabled' %}</label>
							<img onmouseout="HideHelp('rss6');" onmouseover="ShowHelp('rss6', '{% lang 'RSSSyndicationIconsEnabled' %}', '{% lang 'RSSSyndicationIconsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss6"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="RSSItemsLimit">{% lang 'RSSItemsLimit' %}:</label>
						</td>
						<td>
							<input type="text" name="RSSItemsLimit" id="RSSItemsLimit" value="{{ RSSItemsLimit|raw }}" class="Field40" />
							<img onmouseout="HideHelp('rss7');" onmouseover="ShowHelp('rss7', '{% lang 'RSSItemsLimit' %}', '{% lang 'RSSItemsLimitHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss7"></div>
						</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							<span class="Required">*</span> <label for="RSSCacheTime">{% lang 'RSSCacheTime' %}:</label>
						</td>
						<td>
							<input type="text" name="RSSCacheTime" id="RSSCacheTime" value="{{ RSSCacheTime|raw }}" class="Field40" />{% lang 'RSSMinutes' %}
							<img onmouseout="HideHelp('rss8');" onmouseover="ShowHelp('rss8', '{% lang 'RSSCacheTime' %}', '{% lang 'RSSCacheTimeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="rss8"></div>
						</td>
					</tr>

				</table>
			</div>

			<div id="div3" style="padding-top: 10px;  display: {{ HideBackupSettings|raw }}">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'BackupSettings' %}</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsLocal">{% lang 'EnableLocalBackups' %}</label>
						</td>
						<td>
							<input type="checkbox" name="BackupsLocal" id="BackupsLocal" onclick="ToggleLocalBackups();" value="ON" {{ IsBackupsLocalEnabled|raw }} /> <label for="BackupsLocal">{% lang 'YesEnableLocalBackups' %}</label>
							<img onmouseout="HideHelp('backups1');" onmouseover="ShowHelp('backups1', '{% lang 'EnableLocalBackups' %}', '{% lang 'EnableLocalBackupsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="backups1"></div>
						</td>
					</tr>

					<tr id="BackupsRemoteFTPContainer" style="display: %%FTPBackupsHide%%">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsRemoteFTP">{% lang 'EnableRemoteFTPBackups' %}</label>
						</td>
						<td>
							<input type="checkbox" name="BackupsRemoteFTP" id="BackupsRemoteFTP" onclick="ToggleFTPBackups();" value="ON" {{ IsBackupsRemoteFTPEnabled|raw }} /> <label for="BackupsRemoteFTP">{% lang 'YesEnableRemoteFTPBackups' %}</label>
							<img onmouseout="HideHelp('backups2');" onmouseover="ShowHelp('backups2', '{% lang 'EnableRemoteFTPBackups' %}', '{% lang 'EnableRemoteFTPBackupsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="backups2"></div>
						</td>
					</tr>
					<tr id="BackupsRemoteFTPSettings" style="display: none;">
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'FTPServerDetails' %}:
						</td>
						<td>
							<table>
								<tr>
									<td><span class="Required">*</span> {% lang 'FTPHostName' %}:</td>
									<td>
										<input type="text" name="BackupsRemoteFTPHost" id="BackupsRemoteFTPHost" value="{{ BackupsRemoteFTPHost|raw }}" class="Field150" />
										<img onmouseout="HideHelp('backups3');" onmouseover="ShowHelp('backups3', '{% lang 'FTPServerDetails' %}', '{% lang 'FTPServerDetailsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
										<div style="display:none" id="backups3"></div>
									</td>
								</tr>
								<tr>
									<td><span class="Required">*</span> {% lang 'FTPUsername' %}:</td>
									<td><input type="text" name="BackupsRemoteFTPUser" id="BackupsRemoteFTPUser" value="{{ BackupsRemoteFTPUser|raw }}" class="Field150" /></td>
								</tr>
								<tr>
									<td><span class="Required">*</span> {% lang 'FTPPassword' %}:</td>
									<td><input type="password" autocomplete="off" name="BackupsRemoteFTPPass" id="BackupsRemoteFTPPass" value="{{ BackupsRemoteFTPPass|raw }}" class="Field150" /></td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp; {% lang 'FTPPath' %}:</td>
									<td><input type="text" name="BackupsRemoteFTPPath" id="BackupsRemoteFTPPath" value="{{ BackupsRemoteFTPPath|raw }}" class="Field150" /></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="button" value="{% lang 'TestFTPSettings' %}" class="SmallButton" onclick="DoTestFTPSettings()" id="TestFTPSettings" /> &nbsp;&nbsp;<img src="images/ajax-loader.gif" style="vertical-align: middle; display: none;" id="TestFTPSettingsLoading" alt="" />
								</tr>
							</table>
						</td>
					</tr>
					</table>

					<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'AutomaticBackups' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsAutomatic">{% lang 'EnableAutomaticBackups' %}</label>
						</td>
						<td>
							<input type="checkbox" name="BackupsAutomatic" id="BackupsAutomatic" onclick="ToggleAutomaticBackups();" value="ON" {{ IsBackupsAutomaticEnabled|raw }} /> <label for="BackupsAutomatic">{% lang 'YesEnableAutomaticBackups' %}</label>
							<img onmouseout="HideHelp('backups4');" onmouseover="ShowHelp('backups4', '{% lang 'EnableAutomaticBackups' %}', '{% lang 'EnableAutomaticBackupsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="backups4"></div>
						</td>
					</tr>
					<tr class="BackupsAutomaticContainer">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsAutomaticPath">{% lang 'BackupCronPath' %}:</label>
						</td>
						<td>
							<input type="text" class="Field250" name="BackupsAutomaticPath" id="BackupsAutomaticPath" value="{{ BackupsAutomaticPath|raw }}" />
							<img onmouseout="HideHelp('backups6');" onmouseover="ShowHelp('backups6', '{% lang 'BackupCronPath' %}', '{% lang 'BackupCronPathHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="backups6"></div>
						</td>
					</tr>
					<tr class="BackupsAutomaticContainer">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsAutomaticMethod">{% lang 'AutomaticBackupMethod' %}:</label>
						</td>
						<td>
							<select name="BackupsAutomaticMethod" id="BackupsAutomaticMethod" class="Field250">
								<option value="local" {{ IsBackupsAutomaticMethodLocal|raw }} id="BackupsAutomaticLocal">{% lang 'AutomaticBackupLocal' %}</option>
								<option value="ftp" {{ IsBackupsAutomaticMethodFTP|raw }} id="BackupsAutomaticFTP">{% lang 'AutomaticBackupRemoteFTP' %}</option>
							</select>
							<img onmouseout="HideHelp('backups5');" onmouseover="ShowHelp('backups5', '{% lang 'AutomaticBackupMethod' %}', '{% lang 'AutomaticBackupMethodHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="backups5"></div>
						</td>
					</tr>
					<tr class="BackupsAutomaticContainer">
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'BackupSettings' %}:
						</td>
						<td>
							<label><input type="checkbox" name="BackupsAutomaticDatabase" id="BackupsAutomaticDatabase" value="ON" {{ IsBackupsAutomaticDatabaseEnabled|raw }} /> {% lang 'SettingsBackupDatabase' %}</label><br />
							<label><input type="checkbox" name="BackupsAutomaticImages" id="BackupsAutomaticImages" value="ON" {{ IsBackupsAutomaticImagesEnabled|raw }} /> {% lang 'SettingsBackupProductImages' %}</label><br />
							<label><input type="checkbox" name="BackupsAutomaticDownloads" id="BackupsAutomaticDownloads" value="ON" {{ IsBackupsAutomaticDownloadsEnabled|raw }} /> {% lang 'SettingsBackupDigitalProducts' %}</label>
						</td>
					</tr>
				</table>
			</div>

			<div id="div4" style="padding-top: 10px;">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'SearchSettings' %}</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SearchOptimisation">{% lang 'SearchOptimisation' %}:</label>
						</td>
						<td>
							<select name="SearchOptimisation" id="SearchOptimisation" class="Field200">
								{{ SearchOptimisationOptions|raw }}
							</select>
							<img onmouseout="HideHelp('search8');" onmouseover="ShowHelp('search8', '{% lang 'SearchOptimisation' %}', '{% lang 'SearchOptimisationHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="search8"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SearchDefaultProductSort">{% lang 'SearchDefaultProductSort' %}:</label>
						</td>
						<td>
							<select name="SearchDefaultProductSort" id="SearchDefaultProductSort" class="Field200">
								{{ SearchDefaultProductSortOptions|raw }}
							</select>
							<img onmouseout="HideHelp('search1');" onmouseover="ShowHelp('search1', '{% lang 'SearchDefaultProductSort' %}', '{% lang 'SearchDefaultProductSortHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="search1"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SearchDefaultContentSort">{% lang 'SearchDefaultContentSort' %}:</label>
						</td>
						<td>
							<select name="SearchDefaultContentSort" id="SearchDefaultContentSort" class="Field200">
								{{ SearchDefaultContentSortOptions|raw }}
							</select>
							<img onmouseout="HideHelp('search2');" onmouseover="ShowHelp('search2', '{% lang 'SearchDefaultContentSort' %}', '{% lang 'SearchDefaultContentSortHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="search2"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SearchProductDisplayMode">{% lang 'SearchProductDisplayMode' %}:</label>
						</td>
						<td>
							<select name="SearchProductDisplayMode" id="SearchProductDisplayMode" class="Field200">
								{{ SearchProductDisplayModeOptions|raw }}
							</select>
							<img onmouseout="HideHelp('search6');" onmouseover="ShowHelp('search6', '{% lang 'SearchProductDisplayMode' %}', '{% lang 'SearchProductDisplayModeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="search6"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SearchResultsPerPage">{% lang 'SearchResultsPerPage' %}:</label>
						</td>
						<td>
							<input type="text" name="SearchResultsPerPage" id="SearchResultsPerPage" value="{{ SearchResultsPerPage|raw }}" class="Field40" />
							<img onmouseout="HideHelp('search7');" onmouseover="ShowHelp('search7', '{% lang 'SearchResultsPerPage' %}', '{% lang 'SearchResultsPerPageHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="search7"></div>
						</td>
					</tr>
				</table>
			</div>

			<div id="div5" style="padding-top: 10px; {{ HideLoggingSettingsTab|raw }}">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'SystemLogging' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'EnableSystemLogging' %}?
						</td>
						<td>
							<label style="padding-left: 4px;" for="EnableSystemLogging"><input {{ IsSystemLoggingEnabled|raw }} type="checkbox" name="SystemLogging" id="EnableSystemLogging" value="ON" onclick="ToggleSystemLogging()" />{% lang 'YesEnableSystemLogging' %}</label>
							<img onmouseout="HideHelp('logging1');" onmouseover="ShowHelp('logging1', '{% lang 'EnableSystemLogging' %}?', '{% lang 'EnableSystemLoggingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="logging1"></div>
						</td>
					</tr>
					<tr class="SystemLoggingToggle">
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'ActionsToLog' %}:
						</td>
						<td style="padding-left: 28px">
							<select name="SystemLogTypes[]" id="SystemLogTypes" multiple="multiple" size="10" class="Field250 ISSelectReplacement">
								<option value="general" {{ IsGeneralLoggingEnabled|raw }}>{% lang 'ActionsToLogGeneral' %}</option>
								<option value="payment" {{ IsPaymentLoggingEnabled|raw }}>{% lang 'ActionsToLogPayment' %}</option>
								<option value="shipping" {{ IsShippingLoggingEnabled|raw }}>{% lang 'ActionsToLogShipping' %}</option>
								<option value="notification" {{ IsNotificationLoggingEnabled|raw }}>{% lang 'ActionsToLogNotification' %}</option>
								<option value="sql" {{ IsSQLLoggingEnabled|raw }}>{% lang 'ActionsToLogSQL' %}</option>
								<option value="php" {{ IsPHPLoggingEnabled|raw }}>{% lang 'ActionsToLogPHP' %}</option>
								<option value="accounting" {{ IsAccountingLoggingEnabled|raw }}>{% lang 'ActionsToLogAccounting' %}</option>
								<option value="emailintegration" {{ IsEmailIntegrationLoggingEnabled|raw }}>{% lang 'ActionsToLogEmailIntegration' %}</option>
								<option value="ebay" {{ IsEbayLoggingEnabled|raw }}>{% lang 'ActionsToLogEbay' %}</option>
								<option value="shoppingcomparison" {{ IsShoppingComparisonLoggingEnabled|raw }}>{% lang 'ActionsToLogShoppingComparison' %}</option>
							</select>
						</td>
					</tr>
					<tr class="SystemLoggingToggle">
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'TypesOfMessages' %}:
						</td>
						<td style="padding-left: 28px">
							<select name="SystemLogSeverity[]" id="SystemLogSeverity" multiple="multiple" size="7" class="Field250 ISSelectReplacement">
								<option value="errors" {{ IsLoggingSeverityErrors|raw }}>{% lang 'TypesOfMessagesErrors' %}</option>
								<option value="warnings" {{ IsLoggingSeverityWarnings|raw }}>{% lang 'TypesOfMessagesWarnings' %}</option>
								<option value="success" {{ IsLoggingSeveritySuccesses|raw }}>{% lang 'TypesOfMessagesSuccesses' %}</option>
								<option value="notices" {{ IsLoggingSeverityNotices|raw }}>{% lang 'TypesOfMessagesNotices' %}</option>
								<option value="debug" {{ IsLoggingSeverityDebug|raw }}>{% lang 'TypesOfMessagesDebug' %}</option>
							</select>
						</td>
					</tr>
					<tr class="SystemLoggingToggle">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="SystemLogMaxLength">{% lang 'RestrictLogTo' %}:</label>
						</td>
						<td style="padding-left: 28px">
							<input type="text" name="SystemLogMaxLength" id="SystemLogMaxLength" value="{{ SystemLogMaxLength|raw }}" class="Field40" /> {% lang 'MostRecentEntries' %}
							<img onmouseout="HideHelp('logging2');" onmouseover="ShowHelp('logging2', '{% lang 'RestrictLogTo' %}', '{% lang 'RestrictLogToHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="logging2"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'HidePHPErrors' %}?
						</td>
						<td>
							<label style="padding-left: 4px;" for="HidePHPErrors"><input {{ IsHidePHPErrorsEnabled|raw }} type="checkbox" name="HidePHPErrors" id="HidePHPErrors" value="1" />{% lang 'YesHidePHPErrors' %}</label>
							<img onmouseout="HideHelp('logging22');" onmouseover="ShowHelp('logging22', '{% lang 'HidePHPErrors' %}?', '{% lang 'HidePHPErrorsHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="logging22"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'EnableDebugMode' %}?
						</td>
						<td>
							<label style="padding-left: 4px;" for="DebugMode"><input {{ IsDebugModeEnabled|raw }} type="checkbox" name="DebugMode" id="DebugMode" value="1" />{% lang 'YesEnableDebugMode' %}</label>
							<img onmouseout="HideHelp('logging23');" onmouseover="ShowHelp('logging23', '{% lang 'EnableDebugMode' %}?', '{% lang 'EnableDebugModeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="logging23"></div>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel" style="display: {{ HideStaffLogs|raw }}">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'AdministratorLogging' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'EnableAdministratorLogging' %}?
						</td>
						<td>
							<label style="padding-left: 4px;" for="EnableAdministratorLogging"><input {{ IsAdministratorLoggingEnabled|raw }} type="checkbox" name="AdministratorLogging" id="EnableAdministratorLogging" value="ON" onclick="ToggleAdministratorLogging()" /> {% lang 'YesEnableAdministratorLogging' %}</label>
							<img onmouseout="HideHelp('logging3');" onmouseover="ShowHelp('logging3', '{% lang 'EnableAdministratorLogging' %}?', '{% lang 'EnableAdministratorLoggingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="logging3"></div>
						</td>
					</tr>
					<tr class="AdministratorLoggingToggle">
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="AdministratorLogMaxLength">{% lang 'RestrictLogTo' %}:</label>
						</td>
						<td>
							<span style="padding-left: 28px;"><input type="text" name="AdministratorLogMaxLength" id="AdministratorLogMaxLength" value="{{ AdministratorLogMaxLength|raw }}" class="Field40" /> {% lang 'MostRecentEntries' %}
							</span>
							<img onmouseout="HideHelp('RestrictLogHelp');" onmouseover="ShowHelp('RestrictLogHelp', '{% lang 'RestrictLogTo' %}', '{% lang 'RestrictLogToHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="RestrictLogHelp"></div>
						</td>
					</tr>

				</table>
			</div>

			<div id="div6" style="padding-top: 10px; display: none">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'VendorSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; {% lang 'VendorLogoUploading' %}:
						</td>
						<td>
							<label>
								<input type="checkbox" name="VendorLogoUploading" id="VendorLogoUploading" value="1" {{ VendorLogoUploadingChecked|raw }} onclick="$(this).parent().siblings('.CheckToggle').toggle();" /> {% lang 'YesAllowVendorLogoUploading' %}
							</label>
							<img onmouseout="HideHelp('VendorLogoUploadingHelp');" onmouseover="ShowHelp('VendorLogoUploadingHelp', '{% lang 'VendorLogoUploading' %}', '{% lang 'VendorLogoUploadingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="VendorLogoUploadingHelp"></div>
							<div style="{{ HideVendorLogoUploading|raw }}" class="CheckToggle">
								<img src="images/nodejoin.gif" alt="" />
								{% lang 'MaximumImageDimensions' %}:
								<input type="text" name="VendorLogoSizeW" id="VendorLogoSizeW" value="{{ VendorLogoSizeW|raw }}" class="Field40" />
								x
								<input type="text" name="VendorLogoSizeH" id="VendorLogoSizeH" value="{{ VendorLogoSizeH|raw }}" class="Field40" />
							</div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel" style="vertical-align: top">
							&nbsp;&nbsp; {% lang 'VendorPhotoUploading' %}:
						</td>
						<td>
							<label>
								<input type="checkbox" name="VendorPhotoUploading" id="VendorPhotoUploading" value="1" {{ VendorPhotoUploadingChecked|raw }} onclick="$(this).parent().siblings('.CheckToggle').toggle();" /> {% lang 'YesAllowVendorPhotoUploading' %}
							</label>
							<img onmouseout="HideHelp('VendorPhotoUploadingHelp');" onmouseover="ShowHelp('VendorPhotoUploadingHelp', '{% lang 'VendorPhotoUploading' %}', '{% lang 'VendorPhotoUploadingHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="VendorPhotoUploadingHelp"></div>
							<div style="{{ HideVendorPhotoUploading|raw }}" class="CheckToggle">
								<img src="images/nodejoin.gif" alt="" />
								{% lang 'MaximumImageDimensions' %}:
								<input type="text" name="VendorPhotoSizeW" id="VendorPhotoSizeW" value="{{ VendorPhotoSizeW|raw }}" class="Field40" />
								x
								<input type="text" name="VendorPhotoSizeH" id="VendorPhotoSizeH" value="{{ VendorPhotoSizeH|raw }}" class="Field40" />
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div id="div7" style="padding-top: 10px;">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'CustomerGroupsSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="GuestCustomerGroup">{% lang 'GuestCustomerGroup' %}:</label>
						</td>
						<td>
							<select name="GuestCustomerGroup" id="GuestCustomerGroup" size="5" class="Field250">
								<option value="0">{% lang 'GuestCustomerGroupNone' %}</option>
								{{ CustomerGroupOptions|raw }}
							</select>
							<img onmouseout="HideHelp('GuestCustomerGroupHelp');" onmouseover="ShowHelp('GuestCustomerGroupHelp', '{% lang 'GuestCustomerGroup' %}', '{% lang 'GuestCustomerGroupHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="GuestCustomerGroupHelp"></div>
						</td>
					</tr>
				</table>
				<br />
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'GoogleMapsSettings' %}</td>
					</tr>

					<tr>
						<td class="FieldLabel">
							&nbsp;&nbsp; <label for="BackupsLocal">{% lang 'GoogleMapsAPIKey' %}:</label>
						</td>
						<td>
							<input type="text" name="GoogleMapsAPIKey" id="GoogleMapsAPIKey" value="{{ GoogleMapsAPIKey|raw }}" class="Field250" />
							<img onmouseout="HideHelp('gmapapikey');" onmouseover="ShowHelp('gmapapikey', '{% lang 'GoogleMapsAPIKey' %}', '{% lang 'GoogleMapsAPIKeyHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="gmapapikey"></div>
							<div style="padding-top:2px">
								<a href="http://www.google.com/apis/maps/signup.html" target="_blank" style="color:gray">{% lang 'GoogleMapsAPILinkText' %}</a>
							</div>
						</td>
					</tr>
				</table>
				<br />
				<table width="100%" class="Panel" style="{{ HideProxyFields|raw }}">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'HTTPProxySettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span> <label for="HTTPProxyServer">{% lang 'HTTPProxyServer' %}:</label>
						</td>
						<td>
							<input type="text" name="HTTPProxyServer" id="HTTPProxyServer" value="{{ HTTPProxyServer|raw }}" class="Field250" />
							<img onmouseout="HideHelp('hp1');" onmouseover="ShowHelp('hp1', '{% lang 'HTTPProxyServer' %}', '{% lang 'HTTPProxyServerHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hp1"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span> <label for="HTTPProxyPort">{% lang 'HTTPProxyPort' %}:</label>
						</td>
						<td>
							<input type="text" name="HTTPProxyPort" id="HTTPProxyPort" value="{{ HTTPProxyPort|raw }}" class="Field250" />
							<img onmouseout="HideHelp('hp2');" onmouseover="ShowHelp('hp2', '{% lang 'HTTPProxyPort' %}', '{% lang 'HTTPProxyPortHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hp2"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span> <label for="HTTPSSLVerifyPeer">{% lang 'HTTPSSLVerifyPeer' %}:</label>
						</td>
						<td>
						<input {{ IsHTTPSSLVerifyPeerEnabled|raw }} type="checkbox" name="HTTPSSLVerifyPeer" id="HTTPSSLVerifyPeer" value="ON" /> <label for="HTTPSSLVerifyPeer">{% lang 'YesHTTPSSLVerifyPeer' %}</label>
							<img onmouseout="HideHelp('hp3');" onmouseover="ShowHelp('hp3', '{% lang 'HTTPSSLVerifyPeer' %}', '{% lang 'HTTPSSLVerifyPeerHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hp3"></div>
						</td>
					</tr>
				</table>
				<br />
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'OrderSettings' %}</td>
					</tr>
					{% if not ISC_CFG.HideDeletedOrdersActionSetting %}
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="DeletedOrdersAction">{% lang 'DeletedOrders' %}:</label>
							</td>
							<td>
								<label><input type="radio" name="DeletedOrdersAction" value="delete" {% if DeletedOrdersAction == 'delete' %}checked="checked"{% endif %} /> {% lang 'DeletedOrdersAction_Delete' %}</label> <img onmouseout="HideHelp('DeletedOrdersActionHelp');" onmouseover="ShowHelp('DeletedOrdersActionHelp', '{% jslang 'DeletedOrders' %}', '{% jslang 'DeletedOrdersActionHelp' %}')" src="images/help.gif" width="24" height="16" border="0" /><div style="display:none" id="DeletedOrdersActionHelp"></div><br />
								<label><input type="radio" name="DeletedOrdersAction" value="purge" {% if DeletedOrdersAction == 'purge' %}checked="checked"{% endif %} /> {% lang 'DeletedOrdersAction_Purge' %}</label><br />
							</td>
						</tr>
					{% endif %}
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span> <label for="StartingOrderNumber">{% lang 'StartingOrderNumber' %}:</label>
						</td>
						<td>
							<input id="StartingOrderNumber" name="StartingOrderNumber" value="{{ StartingOrderNumber|raw }}" type="text" class="Field70" />
							<img onmouseout="HideHelp('hStartingOrderNumber');" onmouseover="ShowHelp('hStartingOrderNumber', '{% lang 'StartingOrderNumber' %}', '{% lang 'StartingOrderNumberHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hStartingOrderNumber"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<span class="Required">&nbsp;</span> <label for="AbandonOrderLifetime">{% lang 'AbandonOrderLifetime' %}:</label>
						</td>
						<td>
							<select name="AbandonOrderLifetime" id="AbandonOrderLifetime" class="Field70">
								{{ AbandonOrderLifetimeOptions|raw }}
							</select>
							<img onmouseout="HideHelp('hAbandonOrder');" onmouseover="ShowHelp('hAbandonOrder', '{% lang 'AbandonOrderLifetime' %}', '{% lang 'AbandonOrderLifetimeHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hAbandonOrder"></div>
						</td>
					</tr>
				</table>
				{% if ShowPCISettings %}
				<br />
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'PCISettingsPanel' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCIPasswordMinLen">{% lang 'PCIPasswordMinLen' %}:</label>
						</td>
						<td>
							<input id="PCIPasswordMinLen" name="PCIPasswordMinLen" value="{{ PCIPasswordMinLen|raw }}" type="text" class="Field40" />
							<img onmouseout="HideHelp('hPCIPasswordMinLen');" onmouseover="ShowHelp('hPCIPasswordMinLen', '{% lang 'PCIPasswordMinLen' %}', '{% lang 'PCIPasswordMinLenHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCIPasswordMinLen"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCIPasswordHistoryCount">{% lang 'PCIPasswordHistoryCount' %}:</label>
						</td>
						<td>
							<input id="PCIPasswordHistoryCount" name="PCIPasswordHistoryCount" value="{{ PCIPasswordHistoryCount|raw }}" type="text" class="Field40" />
							<img onmouseout="HideHelp('hPCIPasswordHistoryCount');" onmouseover="ShowHelp('hPCIPasswordHistoryCount', '{% lang 'PCIPasswordHistoryCount' %}', '{% lang 'PCIPasswordHistoryCountHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCIPasswordHistoryCount"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCIPasswordExpiryTimeDay">{% lang 'PCIPasswordExpiryTimeDay' %}:</label>
						</td>
						<td>
							<input id="PCIPasswordExpiryTimeDay" name="PCIPasswordExpiryTimeDay" value="{{ PCIPasswordExpiryTimeDay|raw }}" type="text" class="Field40" /> dias
							<img onmouseout="HideHelp('hPCIPasswordExpiryTimeDay');" onmouseover="ShowHelp('hPCIPasswordExpiryTimeDay', '{% lang 'PCIPasswordExpiryTimeDay' %}', '{% lang 'PCIPasswordExpiryTimeDayHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCIPasswordExpiryTimeDay"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCILoginAttemptCount">{% lang 'PCILoginAttemptCount' %}:</label>
						</td>
						<td>
							<input id="PCILoginAttemptCount" name="PCILoginAttemptCount" value="{{ PCILoginAttemptCount|raw }}" type="text" class="Field40" />
							<img onmouseout="HideHelp('hPCILoginAttemptCount');" onmouseover="ShowHelp('hPCILoginAttemptCount', '{% lang 'PCILoginAttemptCount' %}', '{% lang 'PCILoginAttemptCountHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCILoginAttemptCount"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCILoginLockoutTimeMin">{% lang 'PCILoginLockoutTimeMin' %}:</label>
						</td>
						<td>
							<input id="PCILoginLockoutTimeMin" name="PCILoginLockoutTimeMin" value="{{ PCILoginLockoutTimeMin|raw }}" type="text" class="Field40" /> minutos
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCILoginIdleTimeMin">{% lang 'PCILoginIdleTimeMin' %}:</label>
						</td>
						<td>
							<input id="PCILoginIdleTimeMin" name="PCILoginIdleTimeMin" value="{{ PCILoginIdleTimeMin|raw }}" type="text" class="Field40" /> minutos
							<img onmouseout="HideHelp('hPCILoginIdleTimeMin');" onmouseover="ShowHelp('hPCILoginIdleTimeMin', '{% lang 'PCILoginIdleTimeMin' %}', '{% lang 'PCILoginIdleTimeMinHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCILoginIdleTimeMin"></div>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="PCILoginInactiveTimeDay">{% lang 'PCILoginInactiveTimeDay' %}:</label>
						</td>
						<td>
							<input id="PCILoginInactiveTimeDay" name="PCILoginInactiveTimeDay" value="{{ PCILoginInactiveTimeDay|raw }}" type="text" class="Field40" /> dias
							<img onmouseout="HideHelp('hPCILoginInactiveTimeDay');" onmouseover="ShowHelp('hPCILoginInactiveTimeDay', '{% lang 'PCILoginInactiveTimeDay' %}', '{% lang 'PCILoginInactiveTimeDayHelp' %}')" src="images/help.gif" width="24" height="16" border="0" />
							<div style="display:none" id="hPCILoginInactiveTimeDay"></div>
						</td>
					</tr>
				</table>
				{% endif %}
			</div>

			<table border="0" cellspacing="0" cellpadding="2" width="100%" class="PanelPlain">
				<tr>
					<td colspan="2">
						<input type="submit" disabled="disabled" value="{% lang 'Save' %}" class="btn" />
						<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()" />
					</td>
				</tr>
			</table>
		</tr>
	</table>
	</div>
	</form>
	<div id="stmpTestModal" style="display: none;">
		<div class="ModalTitle">{% lang 'TestSMTPSettings' %}</div>
		<div class="ModalContent" style="padding:5px;">
			<div>
				<div style="width: 208px; padding: 0px; margin: 10px auto 10px auto; position: relative; background: url('images/loadingAnimation.gif') no-repeat;">
					<div id="ProgressBarPercentage" style="margin: 0; padding: 0; height: 13px; width: 0%; background: url('images/progressbar.gif') no-repeat; background-color: transparent;">
						&nbsp;
					</div>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="ProgressNote">{% lang 'TestSMTPSettingsNote' %}</div>
		</div>
	</div>
<script type="text/javascript" src="script/product.images.reprocess.js?{{ JSCacheToken }}"></script>
<script type="text/javascript">

	ProcessProductImages.lang['ModalTitle'] = '{% lang 'ProcessImagesModalTitle' %}';
	ProcessProductImages.lang['ProcessProgress'] = '{% lang 'ProcessImagesProgress' %}';
	ProcessProductImages.lang['ProcessFinished'] = '{% lang 'ProcessImagesFinished' %}';

	lang['ProductImagesStorewideThumbnailWidthInvalidValue']	= '{% lang 'ProductImagesStorewideThumbnailWidthInvalidValue' %}';
	lang['ProductImagesStorewideThumbnailHeightInvalidValue'] = '{% lang 'ProductImagesStorewideThumbnailHeightInvalidValue' %}';
	lang['ProductImagesProductPageImageWidthInvalidValue']	= '{% lang 'ProductImagesProductPageImageWidthInvalidValue' %}';
	lang['ProductImagesProductPageImageHeightInvalidValue']	= '{% lang 'ProductImagesProductPageImageHeightInvalidValue' %}';
	lang['ProductImagesGalleryThumbnailWidthInvalidValue']	= '{% lang 'ProductImagesGalleryThumbnailWidthInvalidValue' %}';
	lang['ProductImagesGalleryThumbnailHeightInvalidValue']	= '{% lang 'ProductImagesGalleryThumbnailHeightInvalidValue' %}';
	lang['ProductImagesZoomImageWidthInvalidValue']	= '{% lang 'ProductImagesZoomImageWidthInvalidValue' %}';
	lang['ProductImagesZoomImageHeightInvalidValue']	= '{% lang 'ProductImagesZoomImageHeightInvalidValue' %}';

	$(document).ready(function() {
		$('#ReprocessImages').bind('click', ProcessProductImages.launch);
	});

	function ShowTab(T) {
		i = 0;
		while (document.getElementById("tab" + i) != null) {
			document.getElementById("div" + i).style.display = "none";
			document.getElementById("tab" + i).className = "";
			i++;
		}

		document.getElementById("div" + T).style.display = "";
		document.getElementById("tab" + T).className = "active";

		document.getElementById("currentTab").value = T;
	}

	function ToggleDefaultProductImage()
	{
		if($('.DefaultProductImage:checked').val() == 'custom') {
			$('#DefaultProductImageCustomContainer').show();
		}
		else {
			$('#DefaultProductImageCustomContainer').hide();
		}
	}

	function ToggleSystemLogging() {
		var siblings = $('.SystemLoggingToggle');
		if(g('EnableSystemLogging').checked) {
			siblings.show();
		}
		else {
			siblings.hide();
		}
	}
	ToggleSystemLogging();

	function ToggleAdministratorLogging() {
		var siblings = $('.AdministratorLoggingToggle');
		if(g('EnableAdministratorLogging').checked) {
			siblings.show();
		}
		else {
			siblings.hide();
		}
	}
	ToggleAdministratorLogging();

	function ConfirmCancel()
	{
		if(confirm("{% lang 'ConfirmCancelSettings' %}"))
			document.location.href = "index.php?ToDo=viewSettings";
	}

	$('#frmSettings').submit(function() {
		var StoreName = g("StoreName");
		var StoreAddress = g("StoreAddress");
		var SSL = g("SSL");
		var SharedSSL = g("UseSharedSSL");
		var SharedSSLPath = g("SharedSSLPath");
		var SubdomainSSL = g("UseSubdomainSSL");
		var SubdomainSSLPath = g("SubdomainSSLPath");
		var ShopPath = g("ShopPath");
		var CharacterSet = g("CharacterSet");
		var MetaKeywords = g("MetaKeywords");
		var MetaDesc = g("MetaDesc");
		var DownloadDirectory = g("DownloadDirectory");
		var ImageDirectory = g("ImageDirectory");
		var serverStamp = g("serverStamp");
		var AdminEmail = g("AdminEmail");
		var OrderEmail = g("OrderEmail");
		var DefaultTaxRate = g("DefaultTaxRate");
		var WeightMeasurement = g("WeightMeasurement");
		var LengthMeasurement = g("LengthMeasurement");
		var DisplayDateFormat = g("DisplayDateFormat");
		var ExportDateFormat = g("ExportDateFormat");
		var ExtendedDisplayDateFormat = g("ExtendedDisplayDateFormat");
		var CategoryPerRow = g("CategoryPerRow");
		var CategoryImageWidth = g("CategoryImageWidth");
		var CategoryImageHeight = g("CategoryImageHeight");
		var CategoryDefaultImage = g("CategoryDefaultImage");
		var BrandPerRow = g("BrandPerRow");
		var BrandImageWidth = g("BrandImageWidth");
		var BrandImageHeight = g("BrandImageHeight");
		var BrandDefaultImage = g("BrandDefaultImage");
		var HomeFeaturedProducts = g("HomeFeaturedProducts");
		var HomeNewProducts = g("HomeNewProducts");
		var HomeBlogPosts = g("HomeBlogPosts");
		var CategoryProductsPerPage = g("CategoryProductsPerPage");
		var CategoryListDepth = g("CategoryListDepth");
		var ProductReviewsPerPage = g("ProductReviewsPerPage");
		var TagCartQuantityBoxes = g("TagCartQuantityBoxes");
		var TagCloudsEnabled = g("TagCloudsEnabled");
		var ShowAddToCartQtyBox = g("ShowAddToCartQtyBox");
		var CaptchaEnabled = g("CaptchaEnabled");
		var ShowThumbsInCart = g("ShowThumbsInCart");
		var ShowCartSuggestions = g("ShowCartSuggestions");
		var AutoApproveReviews = g("AutoApproveReviews");
		var RSSItemsLimit = g("RSSItemsLimit");
		var RSSCacheTime = g("RSSCacheTime");
		var HighestOrderNumber = parseInt('{{ HighestOrderNumber|raw }}');

		if(StoreName.value == "") {
			ShowTab(0);
			alert("{% lang 'EnterStoreName' %}");
			StoreName.focus();
			return false;
		}

		if(StoreAddress.value == "") {
			ShowTab(0);
			alert("{% lang 'EnterStoreAddress' %}");
			StoreAddress.focus();
			return false;
		}

		if (SharedSSL.checked) {
			if (SharedSSLPath.value == "" | SharedSSLPath.value == "http://") {
				ShowTab(0);
				alert("{% lang 'EnterSharedSSL' %}");
				SharedSSLPath.focus();
				SharedSSLPath.select();
				return false;
			}
		}
		else if (SubdomainSSL.checked) {
			if (SubdomainSSLPath.value == "" | SubdomainSSLPath.value == "http://") {
				ShowTab(0);
				alert("{% lang 'EnterSubdomainSSL' %}");
				SubdomainSSLPath.focus();
				SubdomainSSLPath.select();
				return false;
			}
		}

		if(!$("#NoSSL").is(':checked') && $('#UseControlPanelSSL').is(':checked')) {
			if(!checkSSLWorks()) {
				if(!confirm('{% lang 'SSLNotWorking' %}')) {
					ShowTab(0);
					return false;
				}
			}
		}

		if(ShopPath.value == "" || ShopPath.value == "http://") {
			ShowTab(0);
			alert("{% lang 'EnterShopPath' %}");
			ShopPath.focus();
			ShopPath.select();
			return false;
		}

		if('{{ CharacterSet }}' != $('#CharacterSet').val()) {
			var confirmMsg = '{% jslang 'ConfirmChangeCharacterSet' %}';

			if('{{ CharacterSet }}' == 'UTF-8') {
				confirmMsg = '{% jslang 'ConfirmChangeCharacterSetUTF8' %}';
			}

			if(!confirm(confirmMsg)) {
				ShowTab(0);
				$('#CharacterSet').focus();
				return false;
			}
		}

		if($('#StartingOrderNumber').val() <= HighestOrderNumber) {
			ShowTab(7);
			var tooLowLang = '{% lang 'StartingOrderNumberTooLow' %}';
			tooLowLang = tooLowLang.replace(':currentHighest', HighestOrderNumber);
			tooLowLang = tooLowLang.replace(':lowestPossible', (HighestOrderNumber+1));
			alert(tooLowLang);
			$('#StartingOrderNumber').focus();
			return false;
		}

		if(DownloadDirectory.value == "") {
			ShowTab(0);
			alert("{% lang 'EnterDownloadDirectory' %}");
			DownloadDirectory.focus();
			return false;
		}

		if(ImageDirectory.value == "") {
			ShowTab(0);
			alert("{% lang 'EnterImageDirectory' %}");
			ImageDirectory.focus();
			return false;
		}

		if(serverStamp.value == "") {
			ShowTab(0);
			alert("{% lang 'EnterLicenseKey' %}");
			serverStamp.focus();
			return false;
		}

		if(AdminEmail.value.indexOf("@") == -1 || AdminEmail.value.indexOf(".") == -1) {
			ShowTab(0);
			alert("{% lang 'EnterValidAdminEmail' %}");
			AdminEmail.focus();
			AdminEmail.select();
			return false;
		}

		if (!ValidateSMTPSettings()) {
			return false;
		} else {
			if (smtpChecked == false) {
				TestSMTPMailSettings(function() {
					// submit again if test is successful
					$('#frmSettings').submit();
				});
				return false;
			}
		}

		if(OrderEmail.value.indexOf("@") == -1 || OrderEmail.value.indexOf(".") == -1) {
			ShowTab(0);
			alert("{% lang 'EnterValidOrderEmail' %}");
			OrderEmail.focus();
			OrderEmail.select();
			return false;
		}

		if(!$('#DimensionsDecimalToken').val()) {
			alert('{% lang 'EnterDecimalToken' %}');
			$('#DimensionsDecimalToken').focus();
			$('#DimensionsDecimalToken').select();
			return false;
		}

		if(!$('#DimensionsThousandsToken').val()) {
			alert('{% lang 'EnterThousandsToken' %}');
			$('#DimensionsThousandsToken').focus();
			$('#DimensionsThousandsToken').select();
			return false;
		}

		if(!$('#DimensionsDecimalPlaces').val() || isNaN($('#DimensionsDecimalPlaces').val())) {
			alert('{% lang 'EnterDecimalPlaces' %}');
			$('#DimensionsDecimalPlaces').focus();
			$('#DimensionsDecimalPlaces').select();
			return false;
		}

		if(DisplayDateFormat.value == "") {
			ShowTab(1);
			alert("{% lang 'EnterDisplayDateFormat' %}");
			DisplayDateFormat.focus();
			return false;
		}

		if(ExportDateFormat.value == "") {
			ShowTab(1);
			alert("{% lang 'EnterExportDateFormat' %}");
			ExportDateFormat.focus();
			return false;
		}

		if(ExtendedDisplayDateFormat.value == "") {
			ShowTab(1);
			alert("{% lang 'EnterExtendedDisplayDateFormat' %}");
			ExtendedDisplayDateFormat.focus();
			return false;
		}

		if(isNaN(HomeFeaturedProducts.value) || HomeFeaturedProducts.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterHomeFeaturedProducts' %}");
			HomeFeaturedProducts.focus();
			HomeFeaturedProducts.select();
			return false;
		}

		if(isNaN(HomeNewProducts.value) || HomeNewProducts.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterHomeNewProducts' %}");
			HomeNewProducts.focus();
			HomeNewProducts.select();
			return false;
		}

		if(isNaN(HomeBlogPosts.value) || HomeBlogPosts.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterHomeBlogPosts' %}");
			HomeBlogPosts.focus();
			HomeBlogPosts.select();
			return false;
		}

		if($('.DefaultProductImage:checked').val() == 'custom') {
			if(($('#DefaultProductImageCustomCurrent').css('display') == 'none' || $('#DefaultProductImageCustom').val()) && !IsValidImageExtension($('#DefaultProductImageCustom').val())) {
				ShowTab(2);
				alert('{% lang 'ChooseDefaultProductImageUpload' %}');
				$('#DefaultProductImageCustom').focus();
				return false;
			}
		}

		if(isNaN(CategoryProductsPerPage.value) || CategoryProductsPerPage.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterCategoryProductsPerPage' %}");
			CategoryProductsPerPage.focus();
			CategoryProductsPerPage.select();
			return false;
		}

		if(isNaN(CategoryListDepth.value) || CategoryListDepth.value == "" || CategoryListDepth.value<=0) {
			ShowTab(2);
			alert("{% lang 'EnterCategoryListDepth' %}");
			CategoryListDepth.focus();
			CategoryListDepth.select();
			return false;
		}

		if(isNaN(ProductReviewsPerPage.value) || ProductReviewsPerPage.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterProductReviewsPerPage' %}");
			ProductReviewsPerPage.focus();
			ProductReviewsPerPage.select();
			return false;
		}

		if(isNaN(CategoryPerRow.value) || CategoryPerRow.value == "" || CategoryPerRow.value <= 0) {
			ShowTab(2);
			alert("{% lang 'EnterCategoryPerRow' %}");
			CategoryPerRow.focus();
			CategoryPerRow.select();
			return false;
		}

		if(isNaN(BrandPerRow.value) || BrandPerRow.value == "" || BrandPerRow.value <= 0) {
			ShowTab(2);
			alert("{% lang 'EnterBrandPerRow' %}");
			BrandPerRow.focus();
			BrandPerRow.select();
			return false;
		}

		if(isNaN(CategoryImageWidth.value) || CategoryImageWidth.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterCategoryImageWidth' %}");
			CategoryImageWidth.focus();
			CategoryImageWidth.select();
			return false;
		}

		if(isNaN(CategoryImageHeight.value) || CategoryImageHeight.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterCategoryImageHeight' %}");
			CategoryImageHeight.focus();
			CategoryImageHeight.select();
			return false;
		}

		if(isNaN(BrandImageWidth.value) || BrandImageWidth.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterBrandImageWidth' %}");
			BrandImageWidth.focus();
			BrandImageWidth.select();
			return false;
		}

		if(isNaN(BrandImageHeight.value) || BrandImageHeight.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterBrandImageHeight' %}");
			BrandImageHeight.focus();
			BrandImageHeight.select();
			return false;
		}

		if(CategoryDefaultImage.value != "") {
			// Make sure it has a valid extension
			img = CategoryDefaultImage.value.split(".");
			ext = img[img.length-1].toLowerCase();

			if(ext != "jpg" && ext != "png" && ext != "gif") {
				ShowTab(2);
				alert("{% lang 'ChooseValidImage' %}");
				CategoryDefaultImage.focus();
				CategoryDefaultImage.select();
				return false;
			}
		}

		if(BrandDefaultImage.value != "") {
			// Make sure it has a valid extension
			img = BrandDefaultImage.value.split(".");
			ext = img[img.length-1].toLowerCase();

			if(ext != "jpg" && ext != "png" && ext != "gif") {
				ShowTab(2);
				alert("{% lang 'ChooseValidImage' %}");
				BrandDefaultImage.focus();
				BrandDefaultImage.select();
				return false;
			}
		}

		if ($('#FacebookLikeButtonEnabled').attr('checked') && !$('#FacebookLikeButtonAdminIds').val()) {
			// no admin id entered for facebook
			ShowTab(2);
			alert("{% jslang 'FacebookAdminIdsRequired' %}");
			$('#FacebookLikeButtonAdminIds').focus();
			return false;
		}

		// check image sizes
		var imageSizeChanges = false;
		var imageValueProblem  = false;

		$('.SetOriginalImageSizeValue').each(function() {
			if(isNaN($(this).val()) || $(this).val() == '') {

				imageValueProblem = true;

				var LanguageVariableKey = $(this).attr('id') + 'InvalidValue';
				LanguageVariableKey = LanguageVariableKey.replace('_height', 'Height');
				LanguageVariableKey = LanguageVariableKey.replace('_width', 'Width');

				var alertMsg = lang[LanguageVariableKey];

				if($(this).val().indexOf('%') != -1 || $(this).val().indexOf('px') != -1) {
					alertMsg += '{% lang 'EnterNumberForImageSizesMeasurements' %}';
				}

				ShowTab(8);
				alert(alertMsg);

				$(this).focus();
				$(this).select();

				return false;
			}
		});

		if(imageValueProblem) {
			return false;
		}

		$('.SetOriginalImageSizeValue').each(function() {
			if($(this).val() != $.data(this, "origValue")) {
				imageSizeChanges = true;
				return;
			}
		});

		if(imageSizeChanges){
			if(confirm('{% lang 'ShouldImagesBeResized' %}')) {
				$('#AutoResizeImages').val('yes');
			}
		}

		if(isNaN($('#TagCloudMinSize').val()) || $('#TagCloudMinSize').val() == '') {
			ShowTab(2);
			alert('{% lang 'EnterTagCloudMinSize' %}');
			$('#TagCloudMinSize').focus();
			$('#TagCloudMinSize').select();
			return false;
		}

		if(isNaN($('#TagCloudMaxSize').val()) || $('#TagCloudMaxSize').val() == '') {
			ShowTab(2);
			alert('{% lang 'EnterTagCloudMaxSize' %}');
			$('#TagCloudMaxSize').focus();
			$('#TagCloudMaxSize').select();
			return false;
		}

		if(isNaN(RSSItemsLimit.value) || RSSItemsLimit.value == "") {
			ShowTab(2);
			alert("{% lang 'EnterRSSItemsLimit' %}");
			RSSItemsLimit.focus();
			RSSItemsLimit.select();
			return false;
		}

		if(isNaN(RSSCacheTime.value)) {
			ShowTab(2);
			alert("{% lang 'EnterValidRSSCacheTime' %}");
			RSSCacheTime.focus();
			RSSCacheTime.select();
			return false;
		}

		if(ValidateFTPSettings() == false)
		{
			return false;
		}

		if($("#BackupsAutomatic:checked").val() && !$("#BackupsAutomaticDatabase:checked").val() && !$("#BackupsAutomaticImages:checked").val() && !$("#BackupsAutomaticDownloads:checked").val()) {
			alert("{% lang 'AtLeastOnAutomaticBackup' %}");
			return false;
		}

		if(!$("#SearchResultsPerPage").val() || isNaN($("#SearchResultsPerPage").val())) {
			ShowTab(4);
			alert("{% lang 'EnterSearchResultsPerPage' %}");
			$("#SearchResultsPerPage").focus();
			$("#SearchResultsPerPage").select();
			return false;
		}

		if($('#tab5').css('display') != 'none') {
			if(g('EnableSystemLogging').checked == true) {
				var f = g('SystemLogTypes');
				if(f.selectedIndex == -1) {
					ShowTab(5);
					alert('{% lang 'SelectOneMoreLoggingTypes' %}');
					g('SystemLogTypes').focus();
					return false;
				}
				var f = g('SystemLogSeverity');
				if(f.selectedIndex == -1) {
					ShowTab(5);
					alert('{% lang 'SelectOneMoreLoggingSeverities' %}');
					g('SystemLogSeverity').focus();
					return false;
				}
				if(isNaN(g('SystemLogMaxLength').value) && g('SystemLogMaxLength').value != '') {
					ShowTab(5);
					alert('{% lang 'EnterValidSystemLogLength' %}');
					g('SystemLogMaxLength').focus();
					g('SystemLogMaxLength').select();
					return false;
				}
			}

			if(g('EnableAdministratorLogging').checked == true) {
				if(isNaN(g('AdministratorLogMaxLength').value) && g('AdministratorLogMaxLength').value != '') {
					ShowTab(5);
					alert('{% lang 'EnterValidAdministratorLogLength' %}');
					g('AdministratorLogMaxLength').focus();
					g('AdministratorLogMaxLength').select();
					return false;
				}
			}
		}
		if($('#tab6').css('display') != 'none') {
			if($('#VendorLogoUploading:checked').val()) {
				if(isNaN($('#VendorLogoSizeW').val()) && $('#VendorLogoSizeW').val() != '') {
					alert('{% lang 'EnterVendorLogoSizeDimensions' %}');
					ShowTab(6);
					$('#VendorLogoSizeW').focus();
					$('#VendorLogoSizeW').select();
					return false;
				}

				if(isNaN($('#VendorLogoSizeH').val()) && $('#VendorLogoSizeH').val() != '') {
					alert('{% lang 'EnterVendorLogoSizeDimensions' %}');
					ShowTab(6);
					$('#VendorLogoSizeH').focus();
					$('#VendorLogoSizeH').select();
					return false;
				}
			}

			if($('#VendorPhotoUploading:checked').val()) {
				if(isNaN($('#VendorPhotoSizeW').val()) && $('#VendorPhotoSizeW').val() != '') {
					alert('{% lang 'EnterVendorPhotoSizeDimensions' %}');
					ShowTab(6);
					$('#VendorPhotoSizeW').focus();
					$('#VendorPhotoSizeW').select();
					return false;
				}

				if(isNaN($('#VendorPhotoSizeH').val()) && $('#VendorPhotoSizeH').val() != '') {
					alert('{% lang 'EnterVendorPhotoSizeDimensions' %}');
					ShowTab(6);
					$('#VendorPhotoSizeH').focus();
					$('#VendorPhotoSizeH').select();
					return false;
				}
			}
		}

		return true;
	});

	function TestSSL() {
		// See if the site is capable of handling HTTPS requests
		var https_url = "{{ HTTPSUrl|raw }}";

		alert("{% lang 'TestSSLText' %}");
		window.open(https_url);
	}

	function ToggleLocalBackups()
	{
		if($('#BackupsLocal:checked').val()) {
			$('#BackupsAutomaticLocal').attr('disabled', false);
			CheckAutomaticBackups();
		}
		else {
			$('#BackupsAutomaticLocal').attr('disabled', true);
			CheckAutomaticBackups();
		}
	}

	function CheckAutomaticBackups()
	{
		if(!$('#BackupsLocal:checked').val() && (!$('#BackupsRemoteFTPContainer:visible') || !$('#BackupsRemoteFTP:checked').val())) {
			$('#BackupsAutomatic').attr('disabled', true);
			$('#BackupsAutomatic').attr('checked', false);
			$('.BackupsAutomaticContainer').hide();
		}
		else {
			$('#BackupsAutomatic').attr('disabled', false);
			ToggleAutomaticBackups();
		}
	}

	function ToggleFTPBackups()
	{
		if($('#BackupsRemoteFTPContainer:visible')) {
			if($('#BackupsRemoteFTP:checked').val()) {
				$('#BackupsRemoteFTPSettings').show();
				$('#BackupsAutomaticFTP').attr('disabled', false);
			}
			else {
				$('#BackupsRemoteFTPSettings').hide();
				$('#BackupsAutomaticFTP').attr('disabled', true);
				$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
			}
		}
		else {
			$('#BackupsAutomaticFTP').attr('disabled', true);
			$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
		}
		CheckAutomaticBackups();
	}

	function ToggleAutomaticBackups()
	{
		if($('#BackupsAutomatic:checked').val()) {
			$('.BackupsAutomaticContainer').show();
		} else {
			$('.BackupsAutomaticContainer').hide();
		}
	}

	ToggleLocalBackups();
	ToggleAutomaticBackups();
	ToggleFTPBackups();

	function DoTestFTPSettings() {
		result = ValidateFTPSettings();
		if(result == false) return false;

		var host = $('#BackupsRemoteFTPHost').val();
		var user = $('#BackupsRemoteFTPUser').val();
		var pass = $('#BackupsRemoteFTPPass').val();
		var path = $('#BackupsRemoteFTPPath').val();

		$('#TestFTPSettings').attr('disabled', true);
		$('#TestFTPSettings').val('{% lang 'TestingFTPSettings' %}');
		$('#TestFTPSettingsLoading').show();

		jQuery.ajax({
			type: 'POST',
			url: 'remote.php?w=TestFTPSettings',
			data: 'host='+host+'&user='+user+'&pass='+pass+'&path='+path,
			dataType: 'script',
			success: function() {
				$('#TestFTPSettings').attr('disabled', false);
				$('#TestFTPSettings').val('{% lang 'TestFTPSettings' %}');
				$('#TestFTPSettingsLoading').hide();
			}
		});
	}

	function ValidateFTPSettings()
	{
		if($('#BackupsRemoteFTPContainer:visible') && $('#BackupsRemoteFTP:checked').val()) {
			if($('#BackupsRemoteFTPHost').val() == '') {
				ShowTab(3);
				alert('{% lang 'EnterFTPHostname' %}');
				$('#BackupsRemoteFTPHost').focus();
				$('#BackupsRemoteFTPHost').select();
				return false;
			}
			if($('#BackupsRemoteFTPUser').val() == '') {
				ShowTab(3);
				alert('{% lang 'EnterFTPUsername' %}');
				$('#BackupsRemoteFTPUser').focus();
				$('#BackupsRemoteFTPUser').select();
				return false;
			}
			if($('#BackupsRemoteFTPPass').val() == '') {
				ShowTab(3);
				alert('{% lang 'EnterFTPPassword' %}');
				$('#BackupsRemoteFTPPass').focus();
				$('#BackupsRemoteFTPPass').select();
				return false;
			}
		}
		return true;
	}

	function ToggleMailSettings() {
		if($('#MailUseSMTP').attr('checked') == true) {
			$('.SMTPOptions').show();
		}
		else {
			$('.SMTPOptions').hide();
		}
	}

	var smtpChecked = true;
	var disableLoadingIndicator;

	function startSMTPTest() {
		if(!ValidateSMTPSettings()) {
			return;
		}

		TestSMTPMailSettings();
	}

	function TestSMTPMailSettings(callback) {
		$('#TestSMTPSettings').attr('disabled', true);
		$('#TestSMTPSettings').val('{% lang 'TestingSMTPSettings' %}');

		var email = $('#AdminEmail').val();
		var host = $('#MailSMTPServer').val();
		var user = $('#MailSMTPUsername').val();
		var pass = $('#MailSMTPPassword').val();
		var port = $('#MailSMTPPort').val();

		disableLoadingIndicator = true;
		$.iModal({
			type: 'inline',
			inline: '#stmpTestModal',
			width: 400,
			close: false
		});

		jQuery.ajax({
			type: 'POST',
			url: 'remote.php?w=TestSMTPSettings',
			data: 'AdminEmail='+escape(email)+'&MailSMTPServer='+escape(host)+'&MailSMTPUsername='+escape(user)+'&MailSMTPPassword='+escape(pass)+'&MailSMTPPort='+escape(port),
			dataType: 'xml',
			success: function(xml) {
				$.iModal.close();

				$('#TestSMTPSettings').attr('disabled', false);
				$('#TestSMTPSettings').val('{% lang 'TestSMTPSettings' %}');
				var message = $('message', xml).text();
				message = message.replace('\\n', '\n');
				message = message.replace('\\n', '\n');
				if($('status', xml).text() == 1) {
					smtpChecked = true;
					if (callback) {
						callback.call(this);
					} else {
						alert(message);
					}
				}
				else {
					// test failed
					smtpChecked = false;
					ShowTab(0);
					$('#MailSMTPServer').focus();
					alert(message);
				}

				disableLoadingIndicator = false;
			}
		});
	}

	function ValidateSMTPSettings() {
		if($('#MailUseSMTP').attr('checked') == true) {
			if(!$('#MailSMTPServer').val()) {
				alert('{% lang 'EnterSMTPServer' %}');
				$('#MailSMTPServer').focus();
				return false;
			}
		}

		return true;
	}

	var sslChecked = false;
	var sslWorks = false;

	function checkSSLWorks() {
		if(sslChecked) {
			return sslWorks;
		}
		sslChecked = true;
		var imageLocation = document.location.toString();
		imageLocation = imageLocation.replace('http:', 'https:').replace(/index.php(.*)/g, '') + 'images/1x1.gif';

		$('<img />').load(function () {
			sslWorks = true;
		}).error(function () {
			sslWorks = false;
		}).attr('src', imageLocation);

		return sslWorks;
	}

	$('#UseControlPanelSSL').bind('click', function () {
		if($(this).is(':checked')) {
			checkSSLWorks();
		}
	});

	$(document).ready(function() {
		ShowTab({{ CurrentTab|raw }});

		$('input[type=submit]').attr('disabled', '');

		if ($('#EnableCustomersAlsoViewed:checked').val()) {
			$('.HideIfCustomersAlsoViewedDisabled').show();
		} else {
			$('.HideIfCustomersAlsoViewedDisabled').hide();
		}

		if($('#ShowInventory:checked').val()) {
			$('.HideIfShowInventoryDisabled').show();
		}
		else {
			$('.HideIfShowInventoryDisabled').hide();
		}

		ToggleDefaultProductImage();
		$('.DefaultProductImage[type=radio]').click(ToggleDefaultProductImage);

		$('.SetOriginalImageSizeValue').each(function() {
			$.data(this, "origValue", $(this).val());
		});

		$("input:radio[name='UseSSL']").click(function() {
			$("input:radio[name='UseSSL']").each(function() {
				if($(this).is(':checked')) {
					$(this).parent('label').nextAll('.NodeJoin:first').show();
				}
				else {
					$(this).parent('label').nextAll('.NodeJoin:first').hide();
				}
			});

			if($("#NoSSL").is(':checked')) {
				$('#UseControlPanelSSL').attr('disabled', 'disabled').removeAttr('checked');
			} else {
				$('#UseControlPanelSSL').removeAttr('disabled');
			}
		});

		$("input:radio[name='UseSSL']:checked").trigger('click');

		if('{{ RunImageResize|raw }}' == '1') {
			ProcessProductImages.launch();
		}

		if($('#DownForMaintenance').is(':checked')) {
			$('#DownForMaintenanceMessageRow').css('display', '');
		}

		$('#DownForMaintenance').bind('click', function () {
			if($(this).is(':checked')) {
				$('#DownForMaintenanceMessageRow').css('display', '');
			} else {
				$('#DownForMaintenanceMessageRow').css('display', 'none');
			}
		});

		$("#FacebookLikeButtonEnabled").change(function() {
			if($(this).is(':checked')) {
				$(this).parent('label').nextAll('.NodeJoin:first').show();
			}
			else {
				$(this).parent('label').nextAll('.NodeJoin:first').hide();
			}
		});

		// if any SMTP options has changed, force a test before save
		$(".SMTPOptions input:text").each(function() {
			$(this).bind('change', function() {
				smtpChecked = false;
			});
		});

		{% if not TPL_CFG.EnableFlyoutMenuSupport %}
			// prevent selection of flyout style if not supported by current temlpate
			$('#CategoryListStyle').change(function(event){
				if ($(this).val() == 'flyout') {
					alert("{% jslang 'CategoryListStyleFlyoutNotSupported' %}");
					$(this).val('static');
				}
			});
		{% endif %}
	});
</script>