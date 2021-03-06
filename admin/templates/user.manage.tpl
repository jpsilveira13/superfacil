
	<div class="BodyContainer">
	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		<tr>
			<td class="Heading1">{% lang 'ViewUsers' %}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ UserIntro|raw }}</p>
			{{ Message|raw }}
			{{ FlashMessages|raw }}
			<table id="IntroTable" cellspacing="0" cellpadding="0" width="100%">
			<tr>
			<td class="Intro" valign="top">
				<input type="button" name="IndexCreateButton" value="{% lang 'CreateUser' %}" id="IndexCreateButton" class="btn" onclick="document.location.href='index.php?ToDo=createUser'" /> &nbsp;<input type="button" name="IndexDeleteButton" value="{% lang 'DeleteSelected' %}" id="IndexDeleteButton" class="btn btn-delete" onclick="ConfirmDeleteSelected()" {{ DisableDelete|raw }} />
			</td>
			<td class="SmallSearch" align="right">
				&nbsp;
			</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<form name="frmUsers" id="frmUsers" action="index.php?ToDo=deleteUsers" method="post">
				<div class="GridContainer">
					{{ UserDataGrid|raw }}
				</div>
			</form>
		</td></tr>
	</table>
	</div>

	<script type="text/javascript">

		function ToggleDeleteBoxes(Status)
		{
			var fp = document.getElementById("frmUsers").elements;

			for(i = 0; i < fp.length; i++)
			{
				if(fp[i].value != 1)
					fp[i].checked = Status;
			}
		}

		function ConfirmDeleteSelected()
		{
			var fp = document.getElementById("frmUsers").elements;
			var c = 0;

			for(i = 0; i < fp.length; i++)
			{
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0) {
				if(confirm("{% lang 'ConfirmDeleteUsers' %}"))
					document.getElementById("frmUsers").submit();
			}
			else
			{
				alert("{% lang 'ChooseUser' %}");
			}
		}

	</script>


