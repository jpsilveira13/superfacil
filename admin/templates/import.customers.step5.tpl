	<div class="BodyContainer">
		<table cellSpacing="0" cellPadding="0" width="100%" style="margin-left: 4px; margin-top: 8px;">
		<tr>
			<td class="Heading1">{% lang 'ImportCustomersStep5' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				<p>{% lang 'ImportCustomersStep5Desc' %}</p>
				{{ Message|raw }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Report|raw }}
			</td>
		</tr>
		</table>
	</div>
	<script type="text/javascript">
		function ShowReport(reporttype) {
			var link = 'index.php?ToDo=importCustomers&Step=ViewReport&ImportSession={{ ImportSession|raw }}&ReportType='+reporttype;

			var top = screen.height / 2 - (230);
			var left = screen.width / 2 - (250);

			window.open(link,"reportWin","left=" + left + ",top="+top+",toolbar=false,status=no,directories=false,menubar=false,scrollbars=false,resizable=false,copyhistory=false,width=500,height=460");
		}
	</script>