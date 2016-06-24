<div class="BodyContainer">
	<table class="OuterPanel">
		<tr>
			<td class="Heading1">{% lang 'QuickSearch' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				{{ Message|raw }}
			</td>
		</tr>
		<tr>
			<td>
				<ul>
					<li><a href="index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery={{ searchQuery }}">{{ OrdersLink|raw }}</a></li>
					<li><a href="index.php?ToDo=viewCustomers&amp;searchId=0&amp;searchQuery={{ searchQuery }}">{{ CustomersLink|raw }}</a></li>
					<li><a href="index.php?ToDo=viewProducts&amp;searchId=0&amp;searchQuery={{ searchQuery}}">{{ ProductsLink|raw }}</a></li>

					{% if numDeletedOrders %}
						{% if numDeletedOrders == 1 %}{% set quickSearchDeletedOrdersLanguage = 'QuickSearchDeletedOrders1' %}{% else %}{% set quickSearchDeletedOrdersLanguage = 'QuickSearchDeletedOrdersX' %}{% endif %}
						<li class="quickSearchDeletedOrders"><a href="index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery={{ searchQuery }}&amp;searchDeletedOrders=only">{% lang quickSearchDeletedOrdersLanguage with {
							'numDeletedOrders': numDeletedOrders,
							'searchQuery': searchQuery,
						} %}</a></li>
					{% endif %}
				</ul>
			</td>
		</tr>
	</table>
</div>
