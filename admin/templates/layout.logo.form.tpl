<script type="text/javascript">

var TextArray = Array({{ TextArray|raw }});

function UpdateLogoImage(){

	$('body').css({'cursor': 'wait'});
	$('input').css({'cursor': 'wait'});
	var sendData = {'w': 'updatelogo', 'logo': $('#SelectedLogo').attr('value')};
	var i = 0;
	while(document.getElementById("ExtraText" + i) != null){
		sendData['ExtraText' + i] = document.getElementById("ExtraText" + i).value;
		i++;
	}

	jQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
		data: sendData,
		success: function(xml) {
			display_message('{% lang 'LogoOptionsSaved' %} <a href="../" target="_blank">{% lang 'ViewSite' %}</a>', 'success');
			$('#LogoImage').attr('src', "../{{ ImageDirectory|raw }}/"+$('logoImage', xml).text()+"?"+get_random());
			$('#CurrentLogo').attr('src', "../{{ ImageDirectory|raw }}/"+$('logoImage', xml).text()+"?"+get_random());
			
			if($('backgroundImage', xml).text() != '' ) {
				$('#PreviewLogoImage').css('backgroundImage', 'url("' + $('backgroundImage', xml).text() + '")');
				$('#CurrentLogo').css('backgroundImage', 'url("' + $('backgroundImage', xml).text() + '")');
			} else {
				$('#PreviewLogoImage').css('backgroundImage', 'none');
				$('#CurrentLogo').css('backgroundImage', 'none');
			}

			$('#ImageTextReplacement').hide();
			$('#LogoImage').show();
			$('body').css({'cursor': 'auto'});
			$('input').css({'cursor': 'auto'});

		}
	});
}

function UpdateLogoOptionNone(){
	$('body').css({'cursor': 'wait'});
	$('input').css({'cursor': 'wait'});
	if($('#UseAlternateTitle').attr('checked') == true){
		var UseAlternateTitle = 'true';
	}else{
		var UseAlternateTitle = 'false';
	}

	var sendData = {'w': 'updatelogonone', 'AlternateTitle': $('#AlternateTitle').val(), 'UseAlternateTitle': UseAlternateTitle};

	jQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
		data: sendData,
		success: function(xml) {
			ToggleLogoFields('none');
			$('#CurrentLogo').attr('src', "images/nologo.gif");
			display_message('{% lang 'LogoOptionsSaved' %} <a href="../" target="_blank">{% lang 'ViewSite' %}</a>', 'success');
			$('body').css({'cursor': 'auto'});
			$('input').css({'cursor': 'auto'});
		}
	});
}
function ToggleLogoFields(option, initial){
	if (option == 'create' && !$('#LogoOptioncreate').attr('disabled')) {
		$('#LogoUpload').hide();
		$('#LogoText').hide();
		SelectLogo('[template]', $('#TemplateLogoFile').val(), $('#TemplateLogoFileNumFields').val()-1);
	} else if(option == 'upload') {
		$('#LogoImageOptions').hide();
		$('#LogoTextOptions').hide();
		$('#ButtonTable').hide();
		$('#LogoTextOptions').hide();
		$('#LogoUpload').show();
		$('#LogoText').hide();
	} else {
		$('#LogoImageOptions').hide();
		$('#LogoTextOptions').hide();
		$('#ButtonTable').hide();
		$('#LogoTextOptions').hide();
		$('#LogoUpload').hide();
		$('#LogoText').show();
	}
}


function SelectLogo(logoName, logoFileName, numTextFields){
	if("{{ HideLogoOptionsNoFont|raw }}" == "none") {
		return;
	}
	$('#ButtonTable').css('display', '');
	$('#SelectedLogo').attr('value', logoName);
	$('#LogoTextOptionsDiv').show();
	var html = '';
	var thisText = '';
	var refreshImage = false;
	html = '<tr><td colspan="2" class="Heading2">Logo Designer</td></tr><tr><td class="FieldLabel">Selected Logo:</td><td style="padding: 5px;"><img id="PreviewLogoImage" src="../cache/logos/'+ logoFileName +'"></td></tr>';

	for(i=0;i<=numTextFields;i++) {
		if(typeof(TextArray[i]) == 'undefined'){
			thisText = 'Example' + (i+1);
		}
		else {
			thisText = TextArray[i];
			refreshImage = true;
		}
		html += '<tr><td class="FieldLabel">Text '+(i+1)+':</td><td align="left" valign="top"><input type="text" name="ExtraText'+i+'" id="ExtraText'+i+'" class="Field300" value="'+thisText+'"></td></tr>';
	}

	$('#LogoTextOptionsDiv').html('<table class="Panel" style="margin: 0; display: {{ HideLogoOptions|raw }}" id="LogoTextOptions">'+html+'</table>');

	if(refreshImage){
		RefreshPreviewImage();
	}
}

function RefreshPreviewImage(){
	$('body').css({'cursor': 'wait'});
	$('input').css({'cursor': 'wait'});
	var sendData = {'w': 'previewlogo', 'logo': $('#SelectedLogo').attr('value')};
	var i = 0;
	while(document.getElementById("ExtraText" + i) != null){
		sendData['ExtraText' + i] = document.getElementById("ExtraText" + i).value;
		i++;
	}

	jQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
		data: sendData,
		success: function(xml) {
			$('#PreviewLogoImage').attr('src', "../cache/logos/"+$('logoImage', xml).text());
			$('body').css({'cursor': 'auto'});
			$('input').css({'cursor': 'auto'});

			if($('backgroundImage', xml).text() != '' ) {
				$('#CurrentLogo').css('backgroundImage', 'url("' + $('backgroundImage', xml).text() + '")');
				$('#PreviewLogoImage').css('backgroundImage', 'url("' + $('backgroundImage', xml).text() + '")');
			} else {
				$('#PreviewLogoImage').css('backgroundImage', 'none');
				$('#CurrentLogo').css('backgroundImage', 'none');
			}
		}
	});
}

function CheckAlternateTitle(showBox){

	if(showBox){
		$('#AlternateTitle').attr('disabled', !showBox);
		$('#AlternateTextArea').show();
	}else{
		$('#AlternateTitle').attr('disabled', !showBox);
		$('#AlternateTextArea').hide();
	}
}

function ToggleLogoTypeFields(value) {
	$('#GenericLogoList').hide();
	$('#SelectALogo').hide();
}

$(document).ready(function() {
	ToggleLogoTypeFields('{{ LogoTypeSelected|raw }}');
	ToggleLogoFields('{{ LogoImageSelected|raw }}', true);
	$('#LogoOption{{ LogoImageSelected|raw }}').attr('checked', 'checked');
	CheckAlternateTitle($('#UseAlternateTitle').attr('checked'));
});

</script>
<input type="hidden" id="TemplateLogoFile" value="{{ TemplateLogoFile|raw }}" />
<input type="hidden" id="TemplateLogoFileNumFields" value="{{ TemplateLogoFileNumFields|raw }}" />

					<p class="intro">{% lang 'LogoIntro' %}</p>
			<table class="Panel">
				<tr>
					<td class="Heading2" colspan='2'>{% lang 'LogoSettings' %}</td>
				</tr>
				<tr>
					<td align="left" class="FieldLabel PanelBottom" valign="top">{% lang 'IWantToLogo' %}:</td>
					<td class="PanelBottom">
						<input type="radio" name="LogoOption" value="none" checked="" id="LogoOptionnone" onclick="ToggleLogoFields(this.value);" /> <label for="LogoOptionnone">{% lang 'LogoOptionText' %}</label><br />
						<input type="radio" name="LogoOption" value="create" checked="" id="LogoOptioncreate" onclick="ToggleLogoFields(this.value);" {{ DisableTemplateOption|raw }} /> <label for="LogoOptioncreate">{% lang 'LogoOptionGenerate' %}</label><br />
						<input type="radio" name="LogoOption" value="upload" checked="" id="LogoOptionupload" onclick="ToggleLogoFields(this.value);" /> <label for="LogoOptionupload">{% lang 'LogoOptionUpload' %}</label><br />
					</td>
				</tr>
			 </table>
			 <br/>
			 <table class="Panel" style="display: {{ HideLogoOptions|raw }}" id="CurrentSiteLogo">
				<tr>
				  <td class="Heading2" colspan='2'>{% lang 'CurrentSiteLogo' %}</td>
				</tr>
				<tr id="CurrentLogoRow" style="display: {{ HideCurrentLogo|raw }}">
					<td class="FieldLabel PanelBottom" valign="top">
						{% lang 'CurrentSiteLogo' %}:
					</td>
					<td align="left" valign="top" class="PanelBottom" style="padding-top: 10px;">
						<img src="{{ CurrentLogo|raw }}" id="CurrentLogo">
					</td>
				</tr>
			</table><br/>

<input type="hidden" name="SelectedLogo" id="SelectedLogo" value="none" />

<div id="LogoTextOptionsDiv" style="display: {{ HideLogoOptionsNoFont|raw }}">
	<table class="Panel" style="margin:0px; display: {{ HideLogoOptions|raw }}" id="LogoTextOptions">
	</table>
</div>

<table class="Panel" style="margin:0px; display: none" id="ButtonTable">
					<tr>
					<td class="FieldLabel">&nbsp;</td>
					<td align="left" valign="top" class="PanelBottom">
					<input type="button" value="Refresh Preview Image" class="btn btn-atualize" onclick="RefreshPreviewImage();" />
					<input type="button" value="Save Logo Image" class="btn" onclick="UpdateLogoImage();" />
					</td>
				</tr>
			</table>


			<form method="post" action="index.php?ToDo=TemplateUploadLogo" enctype="multipart/form-data">
			<table class="Panel" style="margin:0px; display: {{ HideLogoUpload|raw }}" id="LogoUpload">
				<tr>
					<td class="Heading2" colspan='2'>{% lang 'LogoUpload' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel PanelBottom">
						{% lang 'SelectLogoUpload' %}:
					</td>
					<td class="PanelBottom">
						<input type="file" name="LogoFile" id="LogoFile" class="Field" value="" /> <input type="submit" value="Enviar Logo" class="btn" />
					</td>
				</tr>
			</table>
			</form>
			<table class="Panel" style="margin:0px; display: {{ HideLogoUpload|raw }}" id="LogoText">
				<tr>
					<td class="Heading2" colspan='2'>{% lang 'LogoText' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel" valign="top">
						{% lang 'IWantToLogo' %}:
					</td>
					<td>

						<input type="radio" name="UseAlternateTitle" value="no" id="UseWebsiteTitle" onclick="CheckAlternateTitle(false);" {{ AlternateNotChecked|raw }}> <label for="UseWebsiteTitle">{% lang 'LogoUseTitle' %}</label><br/>
						<input type="radio" name="UseAlternateTitle" value="yes" id="UseAlternateTitle" onclick="CheckAlternateTitle(true);" {{ AlternateChecked|raw }}> <label for="UseAlternateTitle">{% lang 'LogoUseAlternate' %}</label><br/>
						<div id="AlternateTextArea" style="display: none"><img src="images/nodejoin.gif" width="20" height="20" align="absmiddle"> <input type="text" name="AlternateTitle" id="AlternateTitle" class="Field250" value="{{ AlternateTitle|raw }}"></div>

					</td>
				</tr>
				<tr>
					<td class="FieldLabel PanelBottom">
					</td>
					<td class="PanelBottom" style="padding-top: 10px;">
					<input type="button" value="{% lang 'Save' %}" id="LogoUpdateButton" class="btn" onclick="UpdateLogoOptionNone();" />
					</td>
				</tr>
			</table>
			<br />


