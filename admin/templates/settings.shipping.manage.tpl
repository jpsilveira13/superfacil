	<form action="index.php?ToDo=saveUpdatedShippingSettings" name="frmShippingSettings" id="frmShippingSettings" method="post" onsubmit="return ValidateForm(CheckShippingSettingsForm)">
		<div class="BodyContainer">
		<table cellSpacing="0" cellPadding="0" width="100%" style="margin-left: 4px; margin-top: 8px;">
		<tr>
			<td class="Heading1">{% lang 'ShippingSettings' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				<p>{% lang 'ShippingSettingsIntro' %}</p>
				{{ Message|raw }}
				<p class="TopButtons">
					<input type="submit" value="{% lang 'Save' %}" class="btn" />
					<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" />
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<ul id="tabnav">
					<li><a href="#" class="active" id="tab0" onclick="ShowTab(0)">{% lang 'StoreLocation' %}</a></li>
					<li><a href="#" id="tab1" onclick="ShowTab(1)">{% lang 'ShippingZones' %}</a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				<input id="currentTab" name="currentTab" value="{{ CurrentTab|raw }}" type="hidden">
				<div id="div0">
					<Br />
					<table width="100%" class="Panel">
						<tr>
							<td class="Heading2" colspan="2">Configurações de Entrega</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyName' %}:</label>
							</td>
							<td>
								<input type="text" name="companyname" id="companyname" value="{{ CompanyName|raw }}" class="Field250" />
								<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'CompanyName' %}', '{% lang 'CompanyNameHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d1"></div>
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyAddress' %}:</label>
							</td>
							<td>
								<input type="text" name="companyaddress" id="companyaddress" value="{{ CompanyAddress|raw }}" class="Field250" />
								<img onmouseout="HideHelp('d2');" onmouseover="ShowHelp('d2', '{% lang 'CompanyAddress' %}', '{% lang 'CompanyAddressHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d2"></div>
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyCity' %}:</label>
							</td>
							<td>
								<input type="text" name="companycity" id="companycity" value="{{ CompanyCity|raw }}" class="Field250" />
								<img onmouseout="HideHelp('d3');" onmouseover="ShowHelp('d3', '{% lang 'CompanyCity' %}', '{% lang 'CompanyCityHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d3"></div>
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyCountry' %}:</label>
							</td>
							<td>
								<select name="companycountry" id="companycountry" class="Field250 " onchange="GetStates(this, 'companystate', 'companystate1')">
									{{ CountryList|raw }}
								</select>
								<img onmouseout="HideHelp('d4');" onmouseover="ShowHelp('d4', '{% lang 'CompanyCountry' %}', '{% lang 'CompanyCountryHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d4"></div>
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyState' %}:</label>
							</td>
							<td class="Field">
								<div id="statemessage" style="color:gray; display:{{ HideStateNote|raw }}">-- {% lang 'ChooseCountryFirst' %} --</div>
								<select style="display:{{ HideStateList|raw }}" name="companystate" id="companystate" class="Field250">
									{{ StateList|raw }}
								</select>
								<input style="display:{{ HideStateBox|raw }}" type="text" name="companystate1" id="companystate1" class="Field250" value="{{ CompanyState|raw }}" />
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span> <label for="storename">{% lang 'CompanyZip' %}:</label>
							</td>
							<td class="PanelBottom">
								<input type="text" name="companyzip" id="companyzip" value="{{ CompanyZip|raw }}" class="Field250" />
								<img onmouseout="HideHelp('d6');" onmouseover="ShowHelp('d6', '{% lang 'CompanyZip' %}', '{% lang 'CompanyZipHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d6"></div>
							</td>
						</tr>
					</table>
					<table border="0" cellspacing="0" cellpadding="2" width="100%" class="PanelPlain BottomButtons">
						<tr>
							<td>
								<input type="submit" value="{% lang 'Save' %}" class="btn" />
								<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" />
							</td>
						</tr>
					</table>
				</div>
				<div id="div1">
					{{ NoZonesMessage|raw }}
					<p style="padding-bottom: 0; margin-bottom: 10px; margin-top: 10px;">
					<input type="button" name="ZoneAddButton" value="{% lang 'AddShippingZoneButton' %}" class="btn" onclick="document.location.href='index.php?ToDo=addShippingZone';" />
						<input type="button" name="ZoneDeleteButton" value="{% lang 'DeleteSelected' %}" class="btn btn-delete" onclick="ConfirmDeleteSelected();" {{ DisableDelete|raw }} />
					</p>
					<div class="GridContainer">
						{{ ZoneDataGrid|raw }}
					</div>
				</div>
			</td>
		</tr>
		</table>
		</div>
	</form>

	<script type="text/javascript">

		var selDest = null;
		var otherBox = null;

		function ShowTab(T)
		{
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

		function GetStates(selObj, dest, stateTextBox)
		{
			var country = selObj.options[selObj.selectedIndex].value;
			var statemessage = document.getElementById("statemessage");

			selDest = document.getElementById(dest);
			otherBox = document.getElementById(stateTextBox);
			statemessage.style.display = "none";

			if(country == "")
			{
				ResetStates(false);
				selObj.focus();
			}
			else
			{
				// Get all of the states for this country
				//dataMode = 1;
				DoCallback("w=countryStates&c="+country);
			}
		}

		function ResetStates(ShowChoose)
		{
			selDest.options.length = 0;

			if(ShowChoose)
				selDest.options[selDest.options.length] = new Option("{% lang 'ChooseState' %}", "");
		}

		function ProcessData(html)
		{
			ResetStates(true);
			states = html.split("~");
			numStates = 0;

			for(i = 0; i < states.length; i++)
			{
				vals = states[i].split("|");

				if(states[i].length > 0) {
					selDest.options[selDest.options.length] = new Option(vals[0], vals[1]);
					numStates++;
				}
			}

			// If there are no states then hide the state dropdown list
			if(numStates == 0) {
				selDest.style.display = "none";
				otherBox.style.display = "";
			}
			else {
				selDest.style.display = "";
				otherBox.style.display = "none";
			}
		}

		function ConfirmCancel()
		{	
			if(confirm("{% lang 'ConfirmCancelShippingSettings' %}")) {
				document.location.href = "index.php?ToDo=viewShippingSettings";
			}
		}

		function CheckShippingSettingsForm() {
			var companyname = g("companyname");
			var companyaddress = g("companyaddress");
			var companycity = g("companycity");
			var companycountry = g("companycountry");
			var companystate = g("companystate");
			var companystate1 = g("companystate1");
			var companyzip = g("companyzip");

			if(companyname.value == "") {
				ShowTab(0);
				alert("{% lang 'EnterCompanyName' %}");
				companyname.focus();
				return false;
			}

			if(companyaddress.value == "") {
				ShowTab(0);
				alert("{% lang 'EnterCompanyAddress' %}");
				companyaddress.focus();
				return false;
			}

			if(companycity.value == "") {
				ShowTab(0);
				alert("{% lang 'EnterCompanyCity' %}");
				companycity.focus();
				return false;
			}

			if(companycountry.selectedIndex == 0) {
				ShowTab(0);
				alert("{% lang 'SelectCompanyCountry' %}");
				companycountry.focus();
				return false;
			}

			if( (companystate.style.display == "" && companystate.selectedIndex == 0) || (companystate1.style.display == "" && companystate1.value == "") || (companystate.style.display == "none" && companystate1.style.display == "none") ) {
				ShowTab(0);
				alert("{% lang 'SelectEnterCompanyState' %}");
				return false;
			}

			if(companyzip.value == "") {
				ShowTab(0);
				alert("{% lang 'EnterCompanyZip' %}");
				companyzip.focus();
				return false;
			}

			return true;
		}

		function ConfirmDeleteSelected()
		{
			if(!$('.GridContainer input[type=checkbox].check:checked').length) {
				alert('{% lang 'SelectOneMoreZonesDelete' %}');
				return false;
			}
			if(confirm('{% lang 'ConfirmDeleteZones' %}')) {
				$('#frmShippingSettings').attr('action', 'index.php?ToDo=deleteShippingZones');
				$('#frmShippingSettings').attr('onsubmit', function() { return true});
				$('#frmShippingSettings').submit();
			}
			else {
				return false;
			}
		}

		function ConfirmDeleteZone() {
			if(confirm('{% lang 'ConfirmDeleteZone' %}')) {
				return true;
			}

			return false;
		}

		// Load the main shipping settings tab by default
		ShowTab({{ CurrentTab|raw }});
	</script>
