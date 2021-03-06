
	<div class="BodyContainer">
	<form name="frmCurrency" id="frmCurrency" method="post" action="index.php?ToDo=settingsSaveCurrencySettings" onsubmit="return ValidateForm(CheckCurrencyForm);">
	<input type="hidden" name="currentTab" id="currentTab" value="0" />
	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		<tr>
			<td class="Heading1">{% lang 'Currency' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				<p>{{ CurrencyIntro|raw }}</p>
				{{ Message|raw }}
			</td>
		</tr>
		<tr>
			<td>
				<ul id="tabnav">
					{{ CurrencyTabs|raw }}
					<li><a href="#" class="active" id="tab1" onclick="ShowTab(1)">{% lang 'CurrencyRateSettings' %}</a></li>
				</ul>
			</td>
		</tr>
		<tr>
		<td>
			<div id="div0" style="padding-top: 10px;">
				<table class="GridPanel" cellspacing="0" cellpadding="0" border="0" style="width:100%;">
				<tr>
					<td colspan="7" class="EmptyRow">{{ CurrencyOptionsMessage|raw }}</td>
				</tr>
				<tr>
					<td colspan="7" class="EmptyRow" style="padding: 2px;"></td>
				</tr>
				<tr>
					<td colspan="7">
						<input type="button" name="IndexAddButton" value="{% lang 'AddCurrency' %}" id="IndexCreateButton" class="btn" onclick="document.location.href='index.php?ToDo=settingsAddCurrency'" />&nbsp;
						<input type="button" name="IndexDeleteButton" value="{% lang 'DeleteSelected' %}" id="IndexDeleteButton" class="btn btn-delete" onclick="ConfirmDeleteSelected()" {{ DisableDelete|raw }} />&nbsp;
					</td>
				</tr>
				</table>
				<br />
				<table class="GridPanel" cellspacing="0" cellpadding="0" border="0" style="width:100%; border:1px solid #ddd;">
				<tr class="Heading3" style="display: {{ ShowCurrencyTableHeaders|raw }}">
					<td align="center" style="width:18px"><input type="checkbox" onclick="ToggleDeleteBoxes(this.checked)"></td>
					<td>&nbsp;</td>
					<td>
						{% lang 'CurrencyName' %}
					</td>
					<td>
						{% lang 'Currency' %}
					</td>
					<td>
						{% lang 'ExchangeRate' %}
					</td>
					<td style="width:70px;">
						{% lang 'Status' %}
					</td>
					<td style="width:180px; text-align: center;">
						{% lang 'Action' %}
					</td>
				</tr>
				{{ CurrencyGrid|raw }}
				</table>
			</div>

			<div id="div1" style="padding-top: 10px;">
				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'ExchangeRateSettings' %}</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="converterproviders">{% lang 'CurrencyMethods' %}:</label>
						</td>
						<td class="PanelBottom">
							<select size="8" multiple name="converterproviders[]" id="converterproviders" class="Field250 ISSelectReplacement">
								{{ ConverterProviders|raw }}
							</select>
							<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'CurrencyMethods' %}', '{% lang 'CurrencyMethodsHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
							<div style="display:none" id="d1"></div>
						</td>
					</tr>
				</table>

				<table width="100%" class="Panel">
					<tr>
						<td class="Heading2" colspan="2">{% lang 'AutomaticExchangeRateUpdates' %}</td>
					</tr>
					<tr>
						<td colspan="2">
							<p class="HelpInfo">{% lang 'AutomaticExchangeRateUpdatesHelp' %}</p>
						</td>
					</tr>
					<tr>
						<td class="FieldLabel">
							<label for="cronpath">{% lang 'ExchangeRateCronCommand' %}:</label>
						</td>
						<td class="PanelBottom">
							<input type="text" class="Field600" name="cronpath" id="cronpath" value="{{ ExchangeRatePath|raw }}" />
							<img onmouseout="HideHelp('d2');" onmouseover="ShowHelp('d2', '{% lang 'ExchangeRateCronCommand' %}', '{% lang 'ExchangeRateCronCommandHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
							<div style="display:none" id="d2"></div>
						</td>
					</tr>
				</table>

				<table>
					<tr>
						<td valign="top">
							<input type="submit" value="{% lang 'Save' %}" class="btn" />
							<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()" />
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>

	</table>
	</form>
	</div>

	<script type="text/javascript">

		var updateExchageRateSequency = new Array();
		var PopupPositioned           = false;

		function ToggleDeleteBoxes(Status)
		{
			var fp = document.getElementById("frmCurrency").getElementsByTagName('input');

			for (var i=0; i < fp.length; i++)
			{
				if (!fp[i].getAttribute('disabled'))
					fp[i].checked = Status;
			}
		}

		function getSelected()
		{
			var inputs = document.getElementById("frmCurrency").getElementsByTagName('input');
			var nodes  = new Array();

			for (var i=0; i<inputs.length; i++)
			{
				if (inputs[i].type == "checkbox" && inputs[i].name == "currencies[]" && inputs[i].checked)
					nodes[nodes.length] = inputs[i];
			}

			return nodes
		}

		function hasSelected()
		{
			var nodes = getSelected();
			return nodes.length > 0;
		}

		function ConfirmDeleteSelected()
		{
			if (hasSelected())
			{
				if (confirm("{% lang 'ConfirmDeleteCurrency' %}")) {
					$('#frmCurrency').attr('action', 'index.php?ToDo=settingsDeleteCurrencies');
					document.getElementById("frmCurrency").submit();
				}
			}
			else
			{
				alert("{% lang 'ChooseCurrencyDelete' %}");
			}
		}

		function ConfirmUpdateSelectedExchangeRate()
		{
			var nodes = getSelected();

			if (nodes.length > 0)
			{
				if (confirm("{% lang 'ConfirmUpdateCurrencyExchangeRate' %}")) {

					/**
					 * A quick hack to remove the status nodes from previous updates
					 */
					var spans  = document.getElementById("frmCurrency").getElementsByTagName('span');
					var substr = "currencyexchangeratestatus-";

					for (var i=(spans.length-1); i>=0; i--)
					{
						if (spans[i].id.substring(0, substr.length) == substr)
						{
							var parent = spans[i].parentNode;
							parent.removeChild(spans[i]);
						}
					}

					/**
					 * This is the main part to update the exchage rates. It simulates a cascading affect
					 */
					updateExchageRateSequency = new Array();

					for (var i=0; i<nodes.length; i++)
						updateExchageRateSequency[updateExchageRateSequency.length] = nodes[i].value;

					updateExchangeRate(updateExchageRateSequency[0], 0);
				}
			}
			else
			{
				alert("{% lang 'ChooseCurrencyUpdate' %}");
			}
		}

		function updateExchangeRate(id, seq)
		{
			$.ajax({
				url     : url,
				data    : "w=updateExchangeRate&cid={{ SelectedCurrencyModuleId|raw }}&currencyid=" + id + "&seq=" + seq,
				async   : true,
				cache   : false,
				success : ProcessData
			});
		}

		function ProcessData(data)
		{
			eval('var data = ' + data);

			var currencyExchangeRateNode = document.getElementById("currencyexchangerate-" + data.id);
			var statusNode               = document.createElement("span");
			var text, colour;

			statusNode.id                = "currencyexchangeratestatus-" + data.id;
			statusNode.style.marginLeft  = "10px";
			statusNode.style.fontSize    = "0.8em";
			statusNode.style.fontWeight  = "bold";

			switch (data.status)
			{
				case 0:
					colour = "green";
					text   = "({% lang 'CurrencyExchangeRateUpdateSuccess' %})";

					currencyExchangeRateNode.innerHTML = data.newRate;

					break;
				case 2:
					colour = "blue";
					text   = "({% lang 'CurrencyExchangeRateUpdateInvalid' %})";
					break;
				case 1:
				default:
					colour = "red";
					text   = "({% lang 'CurrencyExchangeRateUpdateFailed' %})";
					break;

			}

			statusNode.style.color = colour;
			statusNode.appendChild(document.createTextNode(text));
			currencyExchangeRateNode.appendChild(statusNode);

			/**
			 * Leave this as a timeout function as jquery will only display the animated ajax gif for one interation, not all the others
			 */
			if (data.seq < (updateExchageRateSequency.length - 1))
				window.setTimeout("updateExchangeRate(" + updateExchageRateSequency[data.seq+1] + ", " + (data.seq+1) + ");", 1);
		}

		function ConfirmCancel()
		{
			if(confirm("{% lang 'ConfirmCancelCurrencySettings' %}")) {
				document.location.href = "index.php?ToDo=viewCurrencySettings";
			}
		}

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

		function CheckCurrencyForm()
		{
			if ($("#currencytype2").attr('checked')) {
				if (isNaN(priceFormat($("#DefaultCurrency").val())) || $("#DefaultCurrency").val() < 0) {
					alert("{% lang 'EnterACurrency' %}");
					$("#DefaultCurrency").focus();
					$("#DefaultCurrency").select();
					return false;
				}
			}
			return true;
		}

		function ConfirmSetAsDefault(currencyId)
		{
			$("#{{ PopupID|raw }}ButtonYes").click(function() { location.href = "index.php?ToDo=settingsSetAsDefaultCurrency&currencyId=" + currencyId + "&updatePrice=0" });
			$("#{{ PopupID|raw }}ButtonYesPrice").click(function() { location.href = "index.php?ToDo=settingsSetAsDefaultCurrency&currencyId=" + currencyId + "&updatePrice=1" });
			$("#{{ PopupID|raw }}ButtonNo").click(function() { $("#{{ PopupID|raw }}").hide("slow"); });

			if (!PopupPositioned)
			{
				$("#{{ PopupID|raw }}").css("left", (($(window).width() - $("#{{ PopupID|raw }}").width()) / 2) + "px");
				$("#{{ PopupID|raw }}").css("top", (($(window).height() - $("#{{ PopupID|raw }}").height()) / 2) + "px");
				PopupPositioned = true;
			}

			$("#{{ PopupID|raw }}").show("slow", function() { $("#{{ PopupID|raw }}ButtonYes").focus(); });
		}

		$(document).ready(function() {
			ShowTab({{ DefaultTab|raw }});
		});

	</script>

	<div class="Popup" id="{{ PopupID|raw }}" style="display:{{ PopupDisplay|raw }};">
		<div class="PopupToolbar">
			<div class="PopupToolbarLeftCorner"></div>
			<div class="PopupToolbarRightCorner"></div>
			<div class="PopupToolbarTools">
				<ul>
					<li><img src="images/popupbuttonclose.gif" alt="" border="0" onclick="$('#{{ PopupID|raw }}').hide('slow');" /></li>
					{{ PopupTools|raw }}
				</ul>
			</div>
		</div>
		<div class="PopupDocument">
			<div class="PopupDocumentImg" style="display:{{ PopupImgDisplay|raw }}">
				<img src="{{ PopupImgSrc|raw }}" />
			</div>
			<div class="PopupDocumentBody">
				<p><h2>{{ PopupHeader|raw }}</h2></p>
				<p>{{ PopupContent|raw }}</p>
			</div>
		</div>
	</div>