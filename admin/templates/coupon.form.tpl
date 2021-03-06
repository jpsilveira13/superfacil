	{% import "macros/util.tpl" as util %}
	{% import "macros/forms.tpl" as formBuilder %}
	{% import "macros/category.tpl" as category %}
	<form enctype="multipart/form-data" action="index.php?ToDo={{ FormAction|raw }}" onsubmit="return CheckCouponForm();" id="frmNews" method="post">
	<input type="hidden" id="couponId" name="couponId" value="{{ CouponId|raw }}">
	<input type="hidden" id="couponexpires" name="couponexpires" value="">
	<input type="hidden" id="couponCode" name="couponcode" value="{{ CouponCode|raw }}">
	<input id="currentTab" name="currentTab" value="0" type="hidden" />

	<div id="content">
		<h1>{{ Title|raw }}</h1>

		<p class="intro">
			{{ Intro|raw }}
		</p>

		<div id="MessageTmpBlock">
			{{ Message|raw }}
		</div>

	{{ formBuilder.startButtonRow }}
		<input type="submit" value="{% lang 'SaveAndExit' %}" class="btn" name="SaveButton1" />
		<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" name="CancelButton1" onclick="confirmCancel()" />
	{{ formBuilder.endButtonRow }}

	<ul id="tabnav">
		<li><a href="#" id="tab0" onclick="ShowTab(0)" class="active">{% lang 'General' %}</a></li>
		<li><a href="#" id="tab1" onclick="ShowTab(1)">{% lang 'Advanced' %}</a></li>
	</ul>

	<div id="div0">
	<table class="OuterPanel">
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'NewCouponDetails' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'CouponCode' %}:
					</td>
					<td>
						<input type="text" id="couponcode" name="couponcode" class="Field250" value="{{ CouponCode|raw }}" />
						<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'CouponCode' %}', '{% lang 'CouponCodeHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d1"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'CouponName' %}:
					</td>
					<td>
						<input type="text" id="couponname" name="couponname" class="Field250" value="{{ CouponName|raw }}">
						<img onmouseout="HideHelp('d6');" onmouseover="ShowHelp('d6', '{% lang 'CouponName' %}', '{% lang 'CouponNameHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d6"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'DiscountType' %}:
					</td>
					<td>
						{{ formBuilder.radioList('coupontype', {'2': lang.DollarOffTotalOrder, '0': lang.DollarOffEachItem, '1': lang.PercentageOffEachItem, '3': lang.DollarOffShippingTotal, '4': lang.FreeShipping}, coupon.coupontype) }}
						<img onmouseout="HideHelp('d7');" onmouseover="ShowHelp('d7', '{% lang 'DiscountType' %}', '{% lang 'DiscountTypeHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d7"></div>
					</td>
				</tr>
				<tr class="discountAmount">
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'DiscountAmount' %}:
					</td>
					<td>
						<span class="offCurrency"  style="display:none">{{ CurrencyTokenLeft|raw }}</span>
						{{ formBuilder.input('text', 'couponamount', DiscountAmount, {'id': 'couponamount', 'class': 'Field50'}) }}
						<span class="offCurrency"  style="display:none">{{ CurrencyTokenRight|raw }}</span>
						<span class="offPercentage" style="display:none">%</span>
						<span id="discountAmountDesc" style="display:none"></span>
						<img onmouseout="HideHelp('d2');" onmouseover="ShowHelp('d2', '{% lang 'DiscountAmount' %}', '{% lang 'DiscountAmountHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d2"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'MinimumPurchase' %}:
					</td>
					<td>
						{{ CurrencyTokenLeft|raw }} <input type="text" id="couponminpurchase" name="couponminpurchase" class="Field50" value="{{ MinPurchase|raw }}"> {{ CurrencyTokenRight|raw }}
						<img onmouseout="HideHelp('d3');" onmouseover="ShowHelp('d3', '{% lang 'MinimumPurchase' %}', '{% lang 'MinimumPurchaseHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d3"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'ExpiryDate' %}:
					</td>
					<td>
						<input class="plain" id="dc1" value="{{ ExpiryDate|raw }}" size="12" onfocus="this.blur()" readonly><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;" HIDEFOCUS><img name="popcal" align="absmiddle" src="images/calbtn.gif" width="34" height="22" border="0" alt=""></a>
						&nbsp;<img onmouseout="HideHelp('d4');" onmouseover="ShowHelp('d4', '{% lang 'ExpiryDate' %}', '{% lang 'ExpiryDateHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d4"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'CouponMaxUsesTitle' %}:
					</td>
					<td>
						<div>
							<input type="checkbox" id="CouponMaxUsesEnabled" name="CouponMaxUsesEnabled" value="1" {% if CouponMaxUsesEnabled %}checked="checked"{% endif %}>
							<label for="CouponMaxUsesEnabled">{% lang 'CouponMaxUses' %}</label>
							<div class="NodeJoin" id="CouponMaxUsesNode" {% if CouponMaxUsesEnabled == false %}style="display: none;"{% endif %}>
								<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
								<input type="text" id="couponmaxuses" name="couponmaxuses" class="Field50" value="{{ MaxUses|raw }}" />
								<img onmouseout="HideHelp('d5');" onmouseover="ShowHelp('d5', '{% lang 'CouponMaxUses' %}', '{% lang 'CouponMaxUsesHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="d5"></div>
							</div>
						</div>
						<div>
							<input type="checkbox" id="CouponMaxUsesPerCustomerEnabled" name="CouponMaxUsesPerCustomerEnabled" value="1" {% if CouponMaxUsesPerCustomerEnabled %}checked="checked"{% endif %}>
							<label for="CouponMaxUsesPerCustomerEnabled">{% lang 'CouponMaxUsesPerCustomer' %}</label>
							<div class="NodeJoin" id="CouponMaxUsesPerCustomerNode" {% if CouponMaxUsesPerCustomerEnabled == false %}style="display: none;"{% endif %}>
								<img src="images/nodejoin.gif" style="vertical-align: middle;" alt="" />
								<input type="text" id="couponmaxusespercus" name="couponmaxusespercus" class="Field50" value="{{ MaxUsesPerCus|raw }}" />
								<img onmouseout="HideHelp('CouponMaxUsesPerCustomerHelp');" onmouseover="ShowHelp('CouponMaxUsesPerCustomerHelp', '{% lang 'CouponMaxUsesPerCustomer' %}', '{% lang 'CouponMaxUsesPerCustomerHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
								<div style="display:none" id="CouponMaxUsesPerCustomerHelp"></div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'Enabled' %}:
					</td>
					<td>
						<input type="checkbox" id="couponenabled" name="couponenabled" value="ON" {{ Enabled|raw }}> <label for="couponenabled">{% lang 'YesCouponEnabled' %}</label>
					</td>
				</tr>
			</table>
			<table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'CouponAppliesTo' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'AppliesTo' %}:
					</td>
					<td style="padding-bottom: 3px;">
						<input onclick="ToggleUsedFor(0)" type="radio" id="usedforcat" name="usedfor" value="categories" {{ UsedForCat|raw }}> <label for="usedforcat">{% lang 'CouponAppliesToCategories' %}</label><br />
						<div id="usedforcatdiv" style="padding-left:25px">
							<div id="catids" class="categoryPicker Field250"></div>

							<img onmouseout="HideHelp('ChooseCategoriesHelp');" onmouseover="ShowHelp('ChooseCategoriesHelp', '{% lang 'ChooseCategories' %}', '{% lang 'ChooseCategoriesHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
							<div style="display:none" id="ChooseCategoriesHelp"></div>
						</div>
													<div style="clear: left;" />
						<input onclick="ToggleUsedFor(1)" type="radio" id="usedforprod" name="usedfor" value="products"> <label for="usedforprod">{% lang 'CouponAppliesToProducts' %}</label><br />
						<div id="usedforproddiv" style="padding-left:25px">
							<select size="12" name="products" id="ProductSelect" class="Field250" onchange="$('#ProductRemoveButton').attr('disabled', false);">
								{{ SelectedProducts|raw }}
							</select>
							<div class="Field250" style="text-align: left;width: 290px;">
								<div style="float: right;">
									<input type="button" value="{% lang 'CouponRemoveSelected' %}" id="ProductRemoveButton" disabled="disabled" class="btn btn-delete" onclick="removeFromProductSelect('ProductSelect', 'prodids');" />
								</div>
								<input type="button" value="{% lang 'CouponAddProduct' %}" class="btn" onclick="openProductSelect('coupon', 'ProductSelect', 'prodids');" />
							<input type="hidden" name="prodids" id="prodids" class="Field250" value="{{ ProductIds|raw }}" />
						</div>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	</div>
	<div id="div1">
		{{ formBuilder.startForm() }}

			{{ formBuilder.heading(lang.LocationRestrictionSettings) }}
			{{ formBuilder.startRow({
				'label': lang.LimitByLocation ~ '?',
				'for': 'YesLimitByLocation',
			}) }}

				{{ formBuilder.checkbox({
					'name': 'YesLimitByLocation',
					'id': 'YesLimitByLocation',
					'label': lang.YesLimitByLocation,
					'value': 1,
					'checked': locationRestricted,
					'class': 'CheckboxTogglesOtherElements',
				}) }}
				{{ util.tooltip('LimitByLocation', 'LimitByLocation_Help') }}

			{{ formBuilder.endRow() }}

			{{ formBuilder.startRowGroup({ 'class': 'ShowIf_YesLimitByLocation_Checked', 'hidden': not locationRestricted }) }}

				{{ formBuilder.startRow({
					'label': ' ',
				}) }}

					{{ formBuilder.nodeJoin }}
					{{ formBuilder.radioList('LocationType', {
						'country': lang.LocationTypeCountry,
					}, restrictedLocationType|raw, {
						'id': 'LocationTypeCountry'
					}) }}

				{{ formBuilder.endRow() }}
				{{ formBuilder.startRowGroup({ 'class': 'OptionLocationTypeCountry', 'hidden': restrictedLocationType != 'country'}) }}

					{{ formBuilder.startRow({
						'label': ' ',
						'class': 'formRowIndent1',
					}) }}

						<div class="nodeJoin">
						{{ formBuilder.select('LocationTypeCountries[]', availableCountries, locationTypeCountries, {
							'id': 'LocationTypeCountries',
							'class': 'Field300 ISSelectReplacement',
							'multiple': 'multiple',
							'size': 15,
						}) }}
						</div>
					{{ formBuilder.endRow() }}
				{{ formBuilder.endRowGroup }}

				{{ formBuilder.startRow({
					'label': ' ',
					'class': 'formRowIndent1',
				}) }}

					{{ formBuilder.radioList('LocationType', {
						'state': lang.LocationTypeState,
					}, restrictedLocationType|raw, {
						'id': 'LocationTypeState'
					}) }}

				{{ formBuilder.endRow() }}
				{{ formBuilder.startRowGroup({ 'class': 'OptionLocationTypeState', 'hidden': restrictedLocationType != 'state'}) }}
					{{ formBuilder.startRow({
						'label': lang.Countries ~ ':',
						'class': 'formRowIndent1',
					}) }}

						<div class="nodeJoin">
							{{ formBuilder.select('LocationTypeStatesCountries[]', availableCountries, locationTypeStatesCountries, {
								'id': 'LocationTypeStatesCountries',
								'class': 'Field300 ISSelectReplacement',
								'multiple': 'multiple',
								'size': 10,
								'onchange': 'updateLocationTypeStatesSelect(this)',
							}) }}
						</div>
					{{ formBuilder.endRow() }}
					{{ formBuilder.startRow({
						'label': lang.States ~ ':',
						'class': 'formRowIndent2',
					}) }}
						<div>

							{{ formBuilder.startRowGroup({ 'id': 'LocationTypeStatesSelectHolder', 'hidden': not locationTypeStatesSelect }) }}
								<select name="LocationTypeStatesSelect[]" size="10" multiple="multiple" class="Field300 ISSelectReplacement" id="LocationTypeStatesSelect">
									{{ locationTypeStatesSelect|raw }}
								</select>
							{{ formBuilder.endRowGroup }}
							{{ formBuilder.startRowGroup({ 'id': 'LocationStateSelectNone', 'hidden': locationTypeStatesSelect }) }}
							<div id="LocationStateSelectNone" class="BlankISSelect Field300">
								<div>{% lang 'SelectOneOrMoreCountriesFirst' %}</div>
							</div>
							{{ formBuilder.endRowGroup }}
						</div>
					{{ formBuilder.endRow() }}
				{{ formBuilder.endRowGroup }}
				{{ formBuilder.startRow({
					'label': ' ',
					'class': 'formRowIndent1',
				}) }}

					{{ formBuilder.radioList('LocationType', {
						'zip': lang.LocationTypeZip,
					}, restrictedLocationType|raw, {
						'id': 'LocationTypeZip'
					}) }}

				{{ formBuilder.endRow() }}
				{{ formBuilder.startRowGroup({ 'class': 'OptionLocationTypeZip', 'hidden': restrictedLocationType != 'zip'}) }}
					{{ formBuilder.startRow({
						'label': lang.Country ~ ':',
						'class': 'formRowIndent1',
					}) }}

						<div class="nodeJoin">
							{{ formBuilder.select('LocationTypeZipCountry', availableCountries, locationTypeZipCountry, {
								'id': 'LocationTypeZipCountry',
								'class': 'Field300 ISSelectReplacement',
							}) }}
						</div>
					{{ formBuilder.endRow() }}
					{{ formBuilder.startRow({
						'label': lang.ZipPostCodes ~ ':',
						'class': 'formRowIndent2',
					}) }}

						<div>
							{{ formBuilder.textarea('LocationTypeZipPostCodes', locationTypeZipPostCodes, {
								'id': 'LocationTypeZipPostCodes',
								'class': 'Field300',
								'rows': '10',
							}) }}
						</div>
						{% lang 'ZipPostCodesPerLine' %}<br />
						<a href="#" class="LearnMoreAboutEnteringPostCodes">{% lang 'LearnMoreAboutEnteringPostCodes' %}</a>
					{{ formBuilder.endRow() }}
				{{ formBuilder.endRowGroup }}
			{{ formBuilder.endRowGroup }}
		{{ formBuilder.endForm() }}
		{{ formBuilder.startForm() }}
			{{ formBuilder.startRowGroup }}

				{{ formBuilder.heading(lang.ShippingMethodRestrictionSettings) }}
				{{ formBuilder.startRow({
					'label': lang.LimitByShipping ~ '?',
					'for': 'YesLimitByShipping',
				}) }}

					{{ formBuilder.checkbox({
						'name': 'YesLimitByShipping',
						'id': 'YesLimitByShipping',
						'label': lang.YesLimitByShipping,
						'value': 1,
						'checked': shippingMethodRestricted,
						'class': 'CheckboxTogglesOtherElements',
					}) }}
					{{ util.tooltip('LimitByShipping', 'LimitByShipping_Help') }}

				{{ formBuilder.endRow() }}
				{{ formBuilder.startRowGroup({'class': 'ShowIf_YesLimitByShipping_Checked', 'hidden': not shippingMethodRestricted}) }}

					{{ formBuilder.startRow({
						'label': ' ',
					}) }}

						<div class="nodeJoin">
						{{ formBuilder.select('LocationTypeShipping[]', availableShippers, selectedShippers, {
							'id': 'LocationTypeShipping',
							'class': 'Field300 ISSelectReplacement',
							'multiple': 'multiple',
							'size': 15,
						}) }}
						</div>

					{{ formBuilder.endRow() }}

				{{ formBuilder.endRowGroup }}
			{{ formBuilder.endRowGroup }}

		{{ formBuilder.endForm() }}
	</div>
	{{ formBuilder.startButtonRow }}
		<input type="submit" value="{% lang 'SaveAndExit' %}" class="btn" name="SaveButton1" />
		<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" name="CancelButton1" onclick="confirmCancel()" />
	{{ formBuilder.endButtonRow }}
</div>
</form>

	<iframe width=132 height=142 name="gToday:contrast:agenda.js" id="gToday:contrast:agenda.js" src="calendar/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;"></iframe>
	<input type="text" id="dc2" name="dc2" style="display:none">
	<script src="script/coupon.form.js?{{ JSCacheToken }}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="../javascript/jquery/plugins/jstree/jquery.jstree.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript" charset="utf-8">//<![CDATA[
		var currencyToken = "{{ CurrencyToken|raw }}";
		{{ util.jslang([
			'ConfirmCancelCoupon',
			'EnterCouponCode',
			'EnterCouponName',
			'ChooseCouponCategory',
			'EnterCouponProductId',
			'EnterValidAmount',
			'EnterValidMinPrice',
			'OffEachItem',
			'OffTheTotal',
			'OffTheShipping',
			'AllStatesProvinces',
			'EnterLocationOption',
			'EnterLocationTypeCountries',
			'EnterLocationTypeStatesCountries',
			'EnterLocationTypeStatesSelect',
			'EnterLocationTypeZipCountry',
			'EnterLocationTypeZipPostCodes',
			'EnterLocationTypeShipping',
			'EnterValidMaxUses',
			'EnterValidMaxUsesPerCus'
		]) }}

		function ShowTab(T)
		{
				i = 0;
				while (document.getElementById("tab" + i) != null) {
					document.getElementById("div" + i).style.display = "none";
					document.getElementById("tab" + i).className = "";
					i++;
				}

				if (T == 1) {
					$('#SaveButtons').hide();
				} else {
					$('#SaveButtons').show();
				}

				document.getElementById("div" + T).style.display = "";
				document.getElementById("tab" + T).className = "active";
				document.getElementById("currentTab").value = T;
		}
		ShowTab({{ CurrentTab|raw }});
		{{ ToggleUsedFor|raw }}

		$(document).ready(function() {
			{{ category.categoryPicker("catids", CategoryOptions, true, selectedCategories) }}
		});
	//]]></script>
