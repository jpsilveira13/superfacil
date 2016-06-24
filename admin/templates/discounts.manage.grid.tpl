		<table class="GridPanel SortableGrid" cellspacing="0" cellpadding="0" border="0" id="IndexGrid" style="width:100%; border: 1px solid #ddd; border-bottom: none">
			<tr class="Heading3">
				<td align="center" style="width:18px"><input type="checkbox" onclick="ToggleDeleteBoxes(this.checked)"></td>
				<td style="width:30px;"></td>
				<td>
					<span>{% lang 'DiscountName' %}</span>
				</td>
				<td nowrap style="width:100px">
					{% lang 'DiscountMaxUses' %} &nbsp;
				</td>
				<td nowrap style="width:100px">
					{% lang 'DiscountCurrentUses' %}
				</td>
				<td nowrap style="width:100px">
					<div style="display:none" id="invDiv" name="invDiv"></div>
					{% lang 'DiscountExpiryDate' %}
				</td>
				<td style="width:80px">
					{% lang 'Enabled' %} &nbsp;
				</td>
				<td style="width:130px">
					{% lang 'Halts' %}
				</td>
				<td style="width:80px">
					{% lang 'Action' %}
				</td>
			</tr>
		</table>
		<ul class="SortableList" id="DiscountList" style=" padding-top: 1px; padding-bottom: 1px; z-index:0">
			{{ DiscountGrid|raw }}
		</ul>
		<table>
			<tr align="right">
				<td colspan="10" style="padding:6px 0px 6px 0px" class="PagingNav">
					{{ Nav|raw }}
					<br />
				</td>
			</tr>
		</table>