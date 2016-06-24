<a name="customersByRevenueAnchor"></a>
<div style="text-align:right; display: {{ HideStatsRows|raw }}">
	<div style="padding-bottom:10px">
		{% lang 'CustomersPerPage' %}:
		<select onchange="ChangeCustomersByRevenuePerPage(this.options[this.selectedIndex].value)">
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
			{% lang 'StatsCustomerName' %} &nbsp;
			{{ SortLinksCust|raw }}
		</td>
		<td align="left">
			{% lang 'StatsEmail' %} &nbsp;
			{{ SortLinksEmail|raw }}
		</td>
		<td align="left">
			{% lang 'StatsDateJoined' %} &nbsp;
			{{ SortLinksDate|raw }}
		</td>
		<td align="right">
			{% lang 'StatsOrders' %} &nbsp;
			{{ SortLinksNumOrders|raw }}
		</td>
		<td align="right">
			{% lang 'StatsAmountSpent' %} &nbsp;
			{{ SortLinksAmountSpent|raw }}
		</td>
	</tr>
	{{ CustomerGrid|raw }}
</table>
{{ JumpToRevenuePerCustomerGrid|raw }}
