<script type="text/javascript" src="script/shipments.js?{{ JSCacheToken }}"></script>
<div class="ModalTitle">
	{% lang 'ShipmentsForOrderX' with {
		'orderId': orderId
	} %}
</div>
<div class="ModalContent orderShipmentsModal">
	{% lang 'ShipmentsForOrderBelow' with  {
		'orderId': orderId
	} %}
	<div class="GridContainer" id="GridContainer">
		{{ shipmentsGrid|raw }}
	</div>
</div>
<div class="ModalButtonRow">
	<span style="float: left">
		<input type="button" class="btn btn-atualize" value="{{ lang.ManageTheseShipments }}" onclick="$.iModal.close(); window.location='index.php?ToDo=viewShipments&orderId={{ orderId }}';" />
	</span>
    <input type="button" btn value="{{ lang.Close }}" class="btn" onclick="$.iModal.close();" />
</div>
<script type="text/javascript">
	BindAjaxGridSorting();
	BindGridRowHover();
</script>
