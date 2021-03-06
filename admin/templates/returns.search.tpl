	<form enctype="multipart/form-data" action="index.php" id="frmSearch" method="get" onsubmit="return ValidateForm(CheckSearchForm)">
	<input type="hidden" name="ToDo" value="searchReturnsRedirect" />
	<div class="BodyContainer">
	<table class="OuterPanel">
	  <tr>
		<td class="Heading1" id="tdHeading">{% lang 'SearchReturns' %}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{% lang 'SearchReturnsIntro' %}</p>
			{{ Message|raw }}
			<p><input type="submit" name="SubmitButton1" value="{% lang 'Save' %}" class="btn">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()"></p>
		</td>
	  </tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'AdvancedSearch' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'SearchKeywords' %}:
					</td>
					<td>
						<input type="text" id="searchQuery" name="searchQuery" class="Field250">
						<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'SearchKeywords' %}', '{% lang 'SearchKeywordsReturnHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d1"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'ReturnStatus' %}:
					</td>
					<td>
						<select id="orderStatus" name="orderStatus" class="Field250">
							<option value="">{% lang 'ChooseAReturnStatus' %}</option>
							{{ ReturnStatusOptions|raw }}
						</select>
					</td>
				</tr>
				<tr><td class="Gap" colspan="2"></td></tr>
			 </table>
			</td>
		</tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'SearchByRange' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'ReturnId' %}:
					</td>
					<td>
						{% lang 'SearchFrom' %} &nbsp;&nbsp;<input type="text" id="returnFrom" name="returnFrom" class="Field50"> {% lang 'SearchTo' %}
						&nbsp;&nbsp;<input type="text" id="returnTo" name="returnTo" class="Field50">
					</td>
				</tr>
				<tr><td class="Gap" colspan="2"></td></tr>
			 </table>
			</td>
		</tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'SearchByDate' %}</td>
				</tr>
				<tr><td class="Gap"></td></tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'DateRange' %}:
					</td>
					<td>
						<select name="dateRange" id="dateRange" onchange="ToggleRange()" class="Field250">
							<option value="">{% lang 'ChooseOrderDate' %}</option>
							<option value="today">{% lang 'Today' %}</option>
							<option value="yesterday">{% lang 'Yesterday' %}</option>
							<option value="day">{% lang 'Last24Hours' %}</option>
							<option value="week">{% lang 'Last7Days' %}</option>
							<option value="month">{% lang 'Last30Days' %}</option>
							<option value="this_month">{% lang 'ThisMonth' %}</option>
							<option value="this_year">{% lang 'ThisYear' %}</option>
							<option value="custom">{% lang 'CustomPeriod' %}</option>
						</select>
						<div id="dateRangeCustom" style="margin-left: 30px; margin-top: 10px;">
							{% lang 'SearchFrom' %} <input class="plain" name="fromDate" id="dc1" size="12" onfocus="this.blur()" readonly><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fStartPop(g('dc1'),g('dc2'));return false;" HIDEFOCUS><img name="popcal" align="absmiddle" src="images/calbtn.gif" width="34" height="22" border="0" alt=""></a>
							{% lang 'SearchTo' %} <input class="plain" name="toDate" id="dc2" size="12" onfocus="this.blur()" readonly><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fEndPop(g('dc1'),g('dc2'));return false;" HIDEFOCUS><img name="popcal" align="absmiddle" src="images/calbtn.gif" width="34" height="22" border="0" alt=""></a>
						</div>
					</td>
				</tr>
				<tr><td class="Gap" colspan="2"></td></tr>
			 </table>
			</td>
		</tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'SortOrder' %}</td>
				</tr>
				<tr><td class="Gap"></td></tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'SortOrder' %}:
					</td>
					<td>
						<select name="sortField">
							<option value="returnid">{% lang 'ReturnId' %}</option>
							<option value="custname">{% lang 'Customer' %}</option>
							<option value="retdaterequested">{% lang 'Date' %}</option>
							<option value="retstatus">{% lang 'Status' %}</option>
						</select>
						em&nbsp;
						<select name="sortOrder">
						<option value="asc">{% lang 'AscendingOrder' %}</option>
						<option value="desc">{% lang 'DescendingOrder' %}</option>
					</td>
				</tr>
			 </table>

			 <table>
			 	<tr>
			 		<td>
			 			<input type="submit" name="SubmitButton1" value="{% lang 'Save' %}" class="btn">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()">
			 		</td>
			 	</tr>
			 </table>
			</td>
		</tr>
	</table>
	<iframe width=132 height=142 name="gToday:contrast:agenda.js" id="gToday:contrast:agenda.js" src="calendar/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;"></iframe>
	</div>
	</form>

	<script type="text/javascript">

		function ToggleRange()
		{
			var range = g('dateRange');
			if($('#dateRange').val() == "custom") {
				$('#dateRangeCustom').show();
			}
			else
			{
				$('#dateRangeCustom').hide();
			}
		}

		ToggleRange();

		function ConfirmCancel() {
			if(confirm("{% lang 'ConfirmCancelSearch' %}")) {
				history.go(-1);
			}
		}

		function CheckSearchForm() {
			if($('#returnFrom').val() != "" && isNaN($('#returnFrom').val())) {
				alert("{% lang 'SearchEnterValidOrderId' %}");
				orderFrom.focus();
				orderFrom.select();
				return false;
			}

			if($('#returnTo').val() != "" && isNaN($('#returnTo').val())) {
				alert("{% lang 'SearchEnterValidOrderId' %}");
				orderTo.focus();
				orderTo.select();
				return false;
			}

			if($('#fromDate').val() == "custom" && $('#d1').val() == $('#d2').val()) {
				alert("{% lang 'SearchChooseDifferentDates' %}");
				return false;
			}

			return true;
		}

	</script>
