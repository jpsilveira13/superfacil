<form action="index.php?ToDo=runAddon&amp;addon=addon_orderxml&amp;func=ExportOrders" method="post">
	<div class="BodyContainer">
		<table class="OuterPanel" style="margin-left: 4px; margin-top: 8px;">
			<tr>
				<td class="Heading1">{% lang 'OrderXMLAddonName' %}</td>
			</tr>
			<tr>
				<td class="Intro">
					<p>{% lang 'OrderXMLAddonIntro' %}</p>
					<p><input type="submit" value="{% lang 'GoGoExport' %}" class="Field100" /></p>
				</td>
			</tr>
		</table>
	</div>
</form>