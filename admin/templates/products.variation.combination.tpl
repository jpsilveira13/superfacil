<table class="GridPanel SortableGrid" style="width:100%" id="optionGrid">
	<tr>
		<td class="Heading2 VariationSpanRow" colspan="{{ ColSpan|raw }}"><span style="float: right; margin-right: 5px;"><label><input type="checkbox" id="showFilter" {{ ShowFilterChecked|raw }} /> <span>{% lang 'ShowFilter' %}</span></label></span>{% lang 'FilterAndUpdateHeading' %}</td>
	</tr>
	<tr>
		<td colspan="{{ ColSpan|raw }}" class="VariationSpanRow">
			<div id="filterBlock" style="display: {{ ShowVariationFilter|raw }}">
				<table style="width: 100%;">
					<tr valign="top">
						<td style="width:50%;">
							<fieldset id="filterForm">
								<legend>{% lang 'SearchFilter' %}</legend>
								<div id="optionList">
									{{ FilterOptions|raw }}
									<label>&nbsp;</label>
									<input class="btn" type="button" value="{% lang 'ApplyFilter' %}" id="applyFilter" /> {% lang 'ResetFilter' %}
								</div>
							</fieldset>
						</td>
						<td>
							<fieldset id="bulkUpdateForm">
								<input type="hidden" name="filterOptions" value="{{ FilterOptionsQuery|raw }}" />

								<legend>{% lang 'BulkUpdate' %}</legend>

								<label>{% lang 'CanBePurchased' %}</label>
								<select name="updatePurchaseable">
									<option value="noupdate">{% lang 'DoNotUpdate' %}</option>
									<option value="reset">{% lang 'ResetField' %}</option>
									<option value="yes">{% lang 'SYes' %}</option>
									<option value="no">{% lang 'SNo' %}</option>
								</select>
								<br />

								<label>{% lang 'VariationPrice' %}:</label>
								<select name="updatePriceDiff" id="updatePriceDiff" onchange="if (this.selectedIndex > 1) { $(this).next('span').show(); $(this).next('span').find('input').focus(); } else { $(this).next('span').hide(); }">
									<option value="noupdate">{% lang 'DoNotUpdate' %}</option>
									<option value="reset">{% lang 'ResetField' %}</option>
									<option value="add">{% lang 'VariationAdd' %}</option>
									<option value="subtract">{% lang 'VariationSubtract' %}</option>
									<option value="fixed">{% lang 'VariationFixed' %}</option>
								</select>
								<span style='display: none'>
									{{ CurrencyTokenLeft|raw }} <input name="updatePrice" id="updatePrice" type='text' class='NumberField'/> {{ CurrencyTokenRight|raw }}
								</span>
								<br />

								<label>{% lang 'VariationWeight' %}:</label>
								<select name="updateWeightDiff" id="updateWeightDiff" onchange="if (this.selectedIndex > 1) { $(this).next('span').show(); $(this).next('span').find('input').focus(); } else { $(this).next('span').hide(); }">
									<option value="noupdate">{% lang 'DoNotUpdate' %}</option>
									<option value="reset">{% lang 'ResetField' %}</option>
									<option value="add">{% lang 'VariationAdd' %}</option>
									<option value="subtract">{% lang 'VariationSubtract' %}</option>
									<option value="fixed">{% lang 'VariationFixed' %}</option>
								</select>
								<span style='display: none'>
									<input name="updateWeight" id="updateWeight" type='text' class='NumberField' /> {{ WeightMeasurement|raw }}
								</span>
								<br />

								<label>{% lang 'Image' %}:</label>
								<input type="file" name="updateImage" id="updateImage" />
								<br />

								<label>{% lang 'DeleteImages' %}</label>
								<input type="checkbox" name="updateDelImages" id="updateDelImages" value="1" style="width: auto;" />
								{% lang 'YesDeleteImages' %}
								<br />

								<div class="VariationStockColumn" style="display: {{ HideInv|raw }}">
									<label>{% lang 'CurrentStockLevel' %}:</label>
									<input class="NumberField" name="updateStockLevel" id="updateStockLevel" type="text" />
									<br />
								</div>

								<div class="VariationStockColumn" style="display: {{ HideInv|raw }}">
									<label>{% lang 'LowStockLevel1' %}:</label>
									<input class="NumberField" name="updateLowStockLevel" id="updateLowStockLevel" type="text" />
									<br />
								</div>

								<label>&nbsp;</label>
								<input class="btn" type="button" value="{% lang 'ApplyToAll' %}" id="bulkUpdate" />
							</fieldset>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="{{ ColSpan|raw }}" class="VariationSpanRow">
			<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
				<td align="right" class="PagingNav" style="padding:6px 0px 6px 0px; width: 100%;">
					{{ Nav|raw }}
				</td>
			</table>
		</td>
	</tr>
	<tr class="Heading3">
		<td><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'EnableDisableAll' %}', '{% lang 'EnableDisableAllHelp' %}');"><input type='checkbox' checked='checked' onclick="$('#optionGrid').find('input[type=checkbox]').attr('checked', this.checked)" /></span></td>
		{{ HeaderRows|raw }}
		<td>{% lang 'SKU' %}</td>
		<td><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'VariationPrice' %}', '{% lang 'VariationPriceHelp' %}');">{% lang 'VariationPrice' %}</span></td>
		<td><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'VariationWeight' %}', '{% lang 'VariationWeightHelp' %}');">{% lang 'VariationWeight' %}</span></td>
		<td><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'Image' %}', '{% lang 'VariationImageHelp' %}');">{% lang 'Image' %}</span></td>
		<td style="display:{{ HideInv|raw }}" class="VariationStockColumn"><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'StockLevel' %}', '{% lang 'StockLevelHelp' %}');">{% lang 'StockLevel' %}</span></td>
		<td style="display:{{ HideInv|raw }}" class="VariationStockColumn"><span class="HelpText" onmouseout="HideQuickHelp(this);" onmouseover="ShowQuickHelp(this, '{% lang 'LowStockLevel' %}', '{% lang 'LowStockLevelHelp' %}');">{% lang 'LowStockLevel' %}</span></td>
	</tr>
	{{ VariationRows|raw }}
	<tr>
		<td colspan="{{ ColSpan|raw }}" class="VariationSpanRow">
			<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
				<td align="right" class="PagingNav" style="padding:6px 0px 6px 0px; width: 100%;">
					{{ Nav|raw }}
				</td>
			</table>
		</td>
	</tr>
</table>
<script type="text/javascript">
	$("#applyFilter").click(function() {
		var formData = $('#filterForm :input').serializeArray();
		var showInv = '0';
		if ($('#prodInvTrack_2').attr('checked')) {
			showInv = 1;
		}

		$(this).parents('.GridContainer').load('remote.php?w=getVariationCombinations&productId={{ VProductId|raw }}&productHash={{ VProductHash|raw }}&v={{ VariationId|raw }}&inv=' + showInv, formData, function() {
			BindAjaxGridSorting();
			BindGridRowHover();
		});
	});

	$("#bulkUpdate").click(function() {
		var formData = $('#bulkUpdateForm :input').serialize();
		var showInv = '0';
		if ($('#prodInvTrack_2').attr('checked')) {
			showInv = 1;
		}

		// validate the price
		if ($("#updatePriceDiff").attr('selectedIndex') > 1) {
			if (isNaN(priceFormat($("#updatePrice").val())) || $("#updatePrice").val() == '' || $("#updatePrice").val() < 0) {
				alert("{% lang 'UpdateEnterValidPrice' %}");
				$("#updatePrice").focus();
				return;
			}
		}

		// validate the weight
		if ($("#updateWeightDiff").attr('selectedIndex') > 1) {
			if (isNaN($("#updateWeight").val()) || $("#updateWeight").val() == '' || $("#updateWeight").val() < 0) {
				alert("{% lang 'UpdateEnterValidWeight' %}");
				$("#updateWeight").focus();
				return;
			}
		}

		// validate stock levels
		if (showInv) {
			if (isNaN($("#updateStockLevel").val()) || $("#updateStockLevel").val() < 0) {
				alert("{% lang 'UpdateEnterValidStock' %}");
				$("#updateStockLevel").focus();
				return;
			}

			if (isNaN($("#updateLowStockLevel").val()) || $("#updateLowStockLevel").val() < 0) {
				alert("{% lang 'UpdateEnterValidLowStock' %}");
				$("#updateLowStockLevel").focus();
				return;
			}
		}

		$('#LoadingIndicator').show();

		$.ajaxFileUpload({
			url: 'remote.php?w=bulkUpdateVariations&productId={{ VProductId|raw }}&productHash={{ VProductHash|raw }}&v={{ VariationId|raw }}&inv=' + showInv + '&' + formData,
			secureuri: false,
			fileElementId: 'updateImage',
			dataType: 'json',
			success: function(data) {
				$("#bulkUpdate").parents('.GridContainer').html(data.tableData);

				BindAjaxGridSorting();
				BindGridRowHover();
			}
		});

		$('#LoadingIndicator').hide();

		return;
	});

	$("#showFilter").change(function() {
		$("#filterBlock").slideToggle('normal');
		SetCookie('showVariationFilter', $(this).attr('checked'), 365);
	});

	function resetFilter() {
		$("#optionList select").each(function() {
			$(this).find('option').removeAttr('selected');
			$(this).find('option:first').attr('selected', 'selected');
		});

		$("#applyFilter").click();
	}
</script>
