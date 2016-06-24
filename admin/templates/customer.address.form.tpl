{% import "macros/util.tpl" as util %}
{% import "macros/forms.tpl" as formBuilder %}
{% include "macros/AutoCompletarCep.html" %}
<script type="text/javascript">
	jQuery(function($){
		$("#FormField_13").mask("99.999-999");
		$("#FormField_6").mask("999.999.999-99");
		$("#FormField_7").mask("(99) 9999-9999");
	});
</script>
<script type="text/javascript" src="../javascript/formfield.js?{{ JSCacheToken }}"></script>
<form action="index.php?ToDo={{ FormAction|raw }}" onsubmit="return ValidateForm(checkAddCustomerAddressForm)" id="frmCustomerAddress" method="post">
	<input type="hidden" name="addressId" id="addressId" value="{{ AddressId|raw }}">
	<input type="hidden" name="customerId" id="customerId" value="{{ CustomerId|raw }}">
	<input type="hidden" name="newCustomer" id="newCustomer" value="{{ NewCustomer|raw }}">
	<input type="hidden" name="customFieldsAddressFormId" id="customFieldsAddressFormId" value="{{ CustomFieldsAddressFormId|raw }}">
	<input id="currentTab" name="currentTab" value="0" type="hidden">
	<div id="content">

		<h1>{{ Title|raw }}</h1>
		<p class="intro">
			{{ Intro|raw }}
		</p>

		{{ Message|raw }}

		{{ formBuilder.startButtonRow }}
			<input type="submit" value="{% lang 'SaveAndExit' %}" class="btn" name="SaveButton1" />
			<input type="submit" value="{{ SaveAndAddAnother|raw }}" name="SaveAddAnotherButton1" onclick="saveAndAddAnother();" class="btn" />
			<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" name="CancelButton1" onclick="confirmCancel()" />
		{{ formBuilder.endButtonRow }}

		<ul id="tabnav">
			<li><a href="#" id="tab0" onclick="ShowTab(0)" class="active">{% lang 'CustomerAddressDetails' %}</a></li>
		</ul>

		<div id="div0">
			<p class="intro">
				{% lang 'CustomerAddressDetailsIntro' %}
			</p>

			{{ formBuilder.startForm }}
				{{ formBuilder.heading(lang.CustomerAddressDetails) }}

				{{ AddressFields|raw }}

				{{ CustomFields|raw }}
		</div>
				{{ formBuilder.startButtonRow }}
			<input type="submit" value="{% lang 'SaveAndExit' %}" class="btn" name="SaveButton1" />
			<input type="submit" value="{{ SaveAndAddAnother|raw }}" name="SaveAddAnotherButton1" onclick="saveAndAddAnother();" class="btn" />
			<input type="reset" value="{% lang 'Cancel' %}" class="btn btn-cancel" name="CancelButton1" onclick="confirmCancel()" />
				{{ formBuilder.endButtonRow }}
			{{ formBuilder.endForm }}
	</div>
</form>

<script type="text/javascript"><!--

	function saveAndAddAnother() {
		MakeHidden('addanother', '1', 'frmCustomerAddress');
	}

	function confirmCancel() {
		if(confirm('{{ CancelMessage|raw }}')) {
			if ("{{ CancelGoToManager|raw }}" == "1") {
				document.getElementById('frmCustomerAddress').action = 'index.php?ToDo=viewCustomers';
			} else {
				document.getElementById('frmCustomerAddress').action = 'index.php?ToDo=editCustomer&customerId={{ CustomerId|raw }}';
				MakeHidden('currentTab', '1', 'frmCustomerAddress');
			}

			document.getElementById('frmCustomerAddress').submit();
			return false;
		} else {
			return false;
		}
	}

	function checkAddCustomerAddressForm()
	{
		var formfields = FormField.GetValues({{ CustomFieldsAddressFormId|raw }});

		for (var i=0; i<formfields.length; i++) {
			var rtn = FormField.Validate(formfields[i].field);

			if (!rtn.status) {
				alert(rtn.msg);
				FormField.Focus(formfields[i].field);
				return false;
			}
		}

		return true;
	}

	{{ FormFieldEventData|raw }}

//--></script>