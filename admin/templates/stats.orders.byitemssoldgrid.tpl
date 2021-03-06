<a name="ordersByItemsSoldAnchor"></a>
<div style="text-align:right; display: {{ HideStatsRows|raw }}">
	<div style="padding-bottom:10px">
		{% lang 'OrdersPerPage' %}:
		<select onchange="ChangeOrdersByItemsSoldPerPage(this.options[this.selectedIndex].value)">
			<option {{ IsShowPerPage5|raw }} value="5">5</option>
			<option {{ IsShowPerPage10|raw }} value="10">10</option>
			<option {{ IsShowPerPage20|raw }} value="20">20</option>
			<option {{ IsShowPerPage30|raw }} value="30">30</option>
			<option {{ IsShowPerPage50|raw }} value="50">50</option>
			<option {{ IsShowPerPage100|raw }} value="100">100</option>
		</select>
	</div>
	{{ Paging|raw }}
</div>
<br />
<table width="100%" border=0 cellspacing=1 cellpadding=5 class="text" style="border: 1px solid #ddd;">
	<tr class="Heading3">
		<td align="left">
			{% lang 'ProductID' %} &nbsp;
			{{ SortLinksProductId|raw }}
		</td>
		<td align="left">
			{% lang 'ProductSKU' %} &nbsp;
			{{ SortLinksCode|raw }}
		</td>
		<td align="left">
			{% lang 'Item' %} &nbsp;
			{{ SortLinksName|raw }}
		</td>
		<td align="left">
			{% lang 'Orders' %} &nbsp;
			{{ SortLinksNumOrders|raw }}
		</td>
		<td align="left">
			{% lang 'UnitsSold' %} &nbsp;
			{{ SortLinksUnitsSold|raw }}
		</td>
		<td align="left">
			{% lang 'StatsRevenue' %} &nbsp;
			{{ SortLinksRevenue|raw }}
		</td>
	</tr>
	{{ OrderGrid|raw }}
</table>
{{ JumpToOrdersByItemsSoldGrid|raw }}
