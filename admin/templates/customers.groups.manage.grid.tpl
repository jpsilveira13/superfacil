
			<tr class="Heading3" style="display: {{ DisplayGrid|raw }}">
				<td align="center" style="width:18px"><input type="checkbox" onclick="ToggleDeleteBoxes(this.checked)"></td>
				<td>&nbsp;</td>
				<td>
					{% lang 'CustomerGroupName' %} &nbsp;
					{{ SortLinksGroupName|raw }}
				</td>
				<td>
					{% lang 'Discount' %} &nbsp;
					{{ SortLinksDiscount|raw }}
				</td>
				<td>
					{% lang 'DiscountRules' %} &nbsp;
					{{ SortLinksDiscountRules|raw }}
				</td>
				<td>
					{% lang 'CustomersInGroup' %} &nbsp;
					{{ SortLinksCustomersInGroup|raw }}
				</td>
				<td style="width:120px;">
					{% lang 'Action' %}
				</td>
			</tr>
			{{ CustomerGroupsGrid|raw }}
