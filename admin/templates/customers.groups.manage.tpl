
	<div class="BodyContainer">
	<form action="index.php?ToDo=deleteCustomerGroups" id="frmCustomerGroups" name="frmCustomerGroups" method="post" onSubmit="return ValidateForm(ConfirmDeleteSelected)">
	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		<tr>
			<td class="Heading1">{% lang 'CustomerGroups' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				<p>{% lang 'CustomerGroupsIntro' %}</p>
				{{ Message|raw }}
			</td>
		</tr>
		<tr>
		<td>
			<table class="GridPanel" cellspacing="0" cellpadding="0" border="0" style="width:100%;">
				<tr>
					<td colspan="7">
						<input type="button" name="IndexAddButton" value="{% lang 'CreateACustomerGroup' %}" id="IndexCreateButton" class="btn" onclick="document.location.href='index.php?ToDo=createCustomerGroup'" style="width:160px" /> &nbsp;
						<input type="submit" name="IndexDeleteButton" value="{% lang 'DeleteSelected' %}" id="IndexDeleteButton" class="btn btn-delete" {{ DisableDelete|raw }} />
					</td>
				</tr>
				<tr>
					<td colspan="7" class="EmptyRow">&nbsp;</td>
				</tr>
			</table>

			<table class="GridPanel" cellspacing="0" cellpadding="0" border="0" style="width:100%; border: 1px solid #ddd;">
				{{ CustomerGroupsDataGrid|raw }}
			</table>
			<table>
				<tr align="right">
					<td colspan="11" style="padding:6px 0px 6px 0px" class="PagingNav">
						{{ Nav|raw }}
					</td>
				</tr>
			</table>
		</td>
	</tr>

	</table>
	</form>
	</div>

	<script type="text/javascript">

		function ToggleDeleteBoxes(Status)
		{
			var fp = document.getElementById("frmCustomerGroups").getElementsByTagName('input');

			for (var i=0; i < fp.length; i++) {
				if (!fp[i].getAttribute('disabled'))
					fp[i].checked = Status;
			}
		}

		function ConfirmDeleteSelected()
		{
			var fp = document.getElementById("frmCustomerGroups").elements;
			var c = 0;

			for(i = 0; i < fp.length; i++) {
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0) {
				if(confirm("{% lang 'ConfirmDeleteCustomerGroups' %}")) {
					return true;
				}
				else {
					return false;
				}
			}
			else
			{
				alert("{% lang 'ChooseCustomerGroup' %}");
				return false;
			}
		}

	</script>

