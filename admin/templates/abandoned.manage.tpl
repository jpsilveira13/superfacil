{% import "macros/forms.tpl" as forms %}
{% import "macros/util.tpl" as util %}
<link rel="stylesheet" type="text/css" href="Styles/orders.css" media="all" />

	<div class="BodyContainer">

	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		
		<tr>
		<td class="Heading1">
			Pedidos Abandonados
		</td>
		</tr>

		<tr>
		<td class="Intro">
			<p>Carrinhos Abandonado / Pedidos Abandonados são mostrados abaixo. Clique no ícone de mais ao lado de um pedido para ver os detalhes.</p>
			<div id="OrdersStatus">
				{{ Message|raw }}
			</div>
			<table id="IntroTable" cellspacing="0" cellpadding="0" width="100%">
			<tr>
			<td class="SmallSearch" align="right">
				<form name="frmOrders" id="frmOrders" action="index.php" method="get">
					{{ forms.hiddenInputs({'ToDo':'viewAbandoned'} + searchURL, ['searchQuery']) }}
					<table id="Table16" style="display:{{ DisplaySearch|raw }}">
						<tr>
							<td class="text" nowrap align="right">
								<input name="searchQuery" id="searchQuery" type="text" value="{{ QueryEscaped|raw }}" id="SearchQuery" class="SearchBox" style="width:150px" />&nbsp;
								<input type="submit" value="Procurar" class="btn" name="SearchButton" id="SearchButton" />
							</td>
						</tr>
						<tr>
							<td nowrap>
								<a href="index.php?ToDo=searchOrders">{% lang 'AdvancedSearch' %}</a>
								<span style="display:{{ HideClearResults|raw }}">| <a id="SearchClearButton" href="index.php?ToDo=viewOrders">{% lang 'ClearResults' %}</a></span>
							</td>
						</tr>
					</table>
				</form>
			</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td style="display: {{ DisplayGrid|raw }}">
			<form name="frmOrders1" id="frmOrders1" method="post" action="index.php?ToDo=deleteOrders">
				<div class="GridContainer" id="GridContainer">
					{{ OrderDataGrid|raw }}
			  </div>
			</form>
		</td>
		</tr>

        <tr>
			<td style="text-align: right;" class="Intro" valign="top">
				<br />
            	<div style="display: {{ DisplayGrid|raw }}">
					Assunto do E-mail:<br />
                    <select id="AbandonedEmailActionSelect" name="AbandonedEmailActionSelect" class="Field200">
						{{ AbandonedSubjectLine|raw }}
					</select>				
                </div>
                <div style="display: {{ DisplayGrid|raw }}">
					Código de Cupom:<br />
                    <select id="OrderActionSelect" name="OrderActionSelect" class="Field200">
						{{ Coupons|raw }}
					</select>
                </div>
				<div style="display: {{ DisplayGrid|raw }}">
				  <input type="button" id="OrderActionButton" class="btn" name="OrderActionButton" value="Enviar notificação aos pedidos selecionados" onclick="HandleAbandonedAction()" />
				</div>
			</td>
		</tr>
        
        
        
        
        
        
        
	</table>
	</div>
		
	{% if couponCode %}
<input type="hidden" name="couponCode" value="{{ couponCode|raw }}" />
	{% endif %}
	{% if not disableOrderExports %}
		{{ util.dropDownMenu({
			'id': 'OrderExportMenu',
			'groups': orderExportMenu,
		}) }}
	{% endif %}

	<script language="javascript" type="text/javascript">//<![CDATA[

		config.DeletedOrdersAction = "{{ ISC_CFG.DeletedOrdersAction|js }}";

		var tok = "{{ AuthToken|raw }}";

		var delete_orders_choose_message = "{% lang 'ChooseOrder' %}";
		var print_orders_choose_message = "{% lang 'ChooseOrderInvoice' %}";
		var confirm_delete_orders_message = "{% lang 'ConfirmDeleteOrders' %}";
		var order_status_update_success_message = "{% lang 'OrderStatusUpdated' %}";
		var failed_order_status_update_message = "{% lang 'OrderStatusUpdateFailed' %}";
		var confirm_update_order_status_message = "{% lang 'ConfirmUpdateOrderStatus' %}";
		var trackingno_update_success_message = "{% lang 'TrackingNoUpdated' %}";
		var trackingno_update_failed_message = "{% lang 'TrackingNoUpdateFailed' %}";
		var delete_custom_search_message = "{% lang 'ConfirmDeleteCustomSearch' %}";
		var update_order_status_choose_message = "{% lang 'ChooseOrderUpdateStatus' %}";
		var choose_action_option = "{% lang 'ChooseActionFirst' %}";

		{{ util.jslang([
			'ChooseOneMoreItemsToShip',
			'ProblemCreatingShipment',
			'SavingNotes',
			'ConfirmDelayCapture',
			'ConfirmRefund',
			'ConfirmVoid',
			'SelectRefundType',
			'EnterRefundAmount',
			'InvalidRefundAmountFormat',
			'ConfirmSendTrackingNumber',
			'TrackingLinkEmailed',
			'ShipOrderMultipleAddressInstructions',
			'ConfirmDeleteOrders',
			'ConfirmRestorableDeleteOrders',
			'ChooseOrderUndelete',
			'ChooseOrderPurge',
			'ConfirmUndeleteOrders',
			'OrderDeletedGeneralNotice',
		]) }}

		$(document).ready(function() {
			{{ SelectOrder|raw }}
		});

		{% if disableOrderExports %}
		var ExportAction = "{{ ExportAction|raw }}";
		{% endif %}
	//]]></script>
	<script type="text/javascript" src="script/order.js?{{ JSCacheToken }}"></script>

{% if not disableOrderExports %}
	{% include 'emailintegration.export.javascript.tpl' %}
{% endif %}
