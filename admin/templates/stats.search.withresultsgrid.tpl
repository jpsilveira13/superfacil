<a name="keywordsWithResultsAnchor"></a>
<div style="text-align:right; {{ HidePagingLinks|raw }}">
	<div style="padding-bottom:10px">
		{% lang 'ResultsPerPage' %}:
		<select onchange="ChangeKeywordsWithResultsPerPage(this.options[this.selectedIndex].value)">
			<option {{ IsShowPerPage5|raw }} value="5">5</option>
			<option {{ IsShowPerPage10|raw }} value="10">10</option>
			<option {{ IsShowPerPage20|raw }} value="20">20</option>
			<option {{ IsShowPerPage30|raw }} value="30">30</option>
			<option {{ IsShowPerPage50|raw }} value="50">50</option>
			<option {{ IsShowPerPage100|raw }} value="100">100</option>
			<option {{ IsShowPerPage200|raw }} value="200">200</option>
		</select>
	</div>
	{{ Paging|raw }}
</div>
<br style="clear: both;" />
<table width="100%" border=0 cellspacing=1 cellpadding=5 class="text" style="border: 1px solid #ddd;">
	<tr class="Heading3">
		<td nowrap align="left" width="40%">
			{% lang 'SearchTerms' %} &nbsp;
			{{ SortLinksSearchTerms|raw }}
		</td>
		<td align="right">
			{% lang 'NumberOfSearches' %} &nbsp;
			{{ SortLinksNumberOfSearches|raw }}
		</td>
		<td align="right">
			{% lang 'NumberOfResults' %} &nbsp;
			{{ SortLinksNumberOfResults|raw }}
		</td>
		<td align="right">
			{% lang 'SearchLastPerformed' %} &nbsp;
			{{ SortLinksLastPerformed|raw }}
		</td>
	</tr>
	{{ ResultsGrid|raw }}
</table>
{{ JumpToKeywordsWithResultsGrid|raw }}
