{% import "macros/util.tpl" as util %}
		<table class="GridPanel SortableGrid AutoExpand" cellspacing="0" cellpadding="0" border="0" id="IndexGrid" style="width:100%;">
			<tr>
				<td colspan="12">
					<table class="LetterSort" cellspacing="2" cellpadding="0" border="0">
						<tr>
							{% for displayLetter, letter in letters %}
								<td width="3%"><a class="SortLink {% if letter == activeLetter %}ActiveLetter{% endif %}" href="index.php?ToDo=viewProducts&amp;{{ letterURL|http_build_query }}&amp;letter={{ letter }}">{{ displayLetter }}</a></td>
							{% endfor %}
							<td width="3%"><a class="SortLink" href="index.php?ToDo=viewProducts&amp;{{ letterURL|http_build_query }}">{% lang 'Clear' %}</a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr align="right">
				<td colspan="12" style="padding:6px 0px 6px 0px" class="PagingNav">
					{{ util.paging(numProducts, perPage, currentPage, pageURL, true) }}
				</td>
			</tr>
		</table>
		<table style="border: 1px solid #ddd;" cellSpacing="0" cellPadding="0" width="100%">
			<tr class="Heading3">
				<td align="center"><input type="checkbox" onclick="ToggleDeleteBoxes(this.checked)"></td>
				<td>&nbsp;</td>
				<td style="display: {{ HideInventoryOptions|raw }}">
					&nbsp;
				</td>
				<td style="text-align: center;" class="ImageField">{% lang 'Image' %}</td>
				<td style="text-align: center;">
					{% lang 'ProductSKU' %} &nbsp;
					{{ SortLinksCode|raw }}
				</td>
				<td style="width: 117px; display: {{ HideInventoryOptions|raw }}">
					{% lang 'StockLevel' %} &nbsp;
					{{ SortLinksStock|raw }}
				</td>
				<td colspan="{{ ProductNameSpan|raw }}">
					{% lang 'ProductName' %} &nbsp;
					{{ SortLinksName|raw }}
				</td>
				<td width="70" style="text-align: right;">
					{% lang 'ProductPrice' %} &nbsp;
					{{ SortLinksPrice|raw }}
				</td>
				<td width="85" style="text-align: right;">
					{% lang 'Status' %} &nbsp;
					{{ SortLinksStatus|raw }}
				</td>
				<td width="70" nowrap="nowrap">
					{% lang 'ProductVisible' %} &nbsp;
					{{ SortLinksVisible|raw }}
				</td>
				<td width="100" nowrap="nowrap">
					{% lang 'ProductFeatured' %} &nbsp;
					{{ SortLinksFeatured|raw }}
				</td>
				<td style="width:70px; text-align: center;">
					{% lang 'Action' %}
				</td>
			</tr>
			{{ ProductGrid|raw }}
		</table>

		<table style="float: right;">
			<tr>
				<td style="padding:6px 0px 6px 0px" class="PagingNav">
					{{ util.paging(numProducts, perPage, currentPage, pageURL, true) }}
				</td>
			</tr>
		</table>

		<br class="Clear" />