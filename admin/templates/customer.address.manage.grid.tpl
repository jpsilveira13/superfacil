			<table class="GridPanel SortableGrid AutoExpand" cellspacing="0" cellpadding="0" border="0" id="IndexGrid" style="width:100%; border: 1px solid #ddd;">
			<tr class="Heading3">
				<td>
					<input type="checkbox" onclick="toggleAddressBoxes(this.checked);" />
				</td>
				<td>
					{% lang 'CustomerAddressFullName' %}
				</td>
				<td>
					{% lang 'CustomerAddressPhone' %}
				</td>
				<td>
					{% lang 'CustomerAddressFullAddress' %}
				</td>
				<td>
					{% lang 'Action' %}
				</td>
			</tr>
			{{ AddressGrid|raw }}
		</table>

		<table>
			<tr align="right">
				<td colspan="9" style="padding:6px 0px 6px 0px" class="PagingNav">
					{{ Nav|raw }}
				</td>
			</tr>
		</table>