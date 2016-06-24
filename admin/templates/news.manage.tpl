
	<div class="BodyContainer">
	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		<tr>
			<td class="Heading1">{% lang 'ViewNews' %}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ NewsIntro|raw }}</p>
			{{ Message|raw }}
			<table id="IntroTable" cellspacing="0" cellpadding="0" width="100%">
			<tr>
			<td class="Intro" valign="top">
				<input type="button" name="IndexAddButton" value="{% lang 'AddNews' %}" id="IndexCreateButton" class="btn" onclick="document.location.href='index.php?ToDo=addNews'" /> &nbsp;<input type="button" name="IndexDeleteButton" value="{% lang 'DeleteSelected' %}" id="IndexDeleteButton" class="btn btn-delete" onclick="ConfirmDeleteSelected()" {{ DisableDelete|raw }} />
			</td>
			<td class="SmallSearch" align="right">
				<table id="Table16" style="display:{{ DisplaySearch|raw }}">
				<tr>
					<form action="index.php?ToDo=viewNews{{ SortURL|raw }}" method="get" onsubmit="return ValidateForm(CheckSearchForm)">
					<input type="hidden" name="ToDo" value="viewNews">
					<td nowrap>
						<input name="searchQuery" id="searchQuery" type="text" value="{{ Query|raw }}" id="SearchQuery" class="Button" size="20" />&nbsp;
						<input type="submit" class="btn" value="Procurar" name="SearchButton" id="SearchButton" style="padding-left: 10px; vertical-align: top;" />
						<br /><a id="SearchClearButton" href="index.php?ToDo=viewNews">{% lang 'ClearResults' %}</a>
					</td>
					</form>
				</tr>
				<tr>
					<td></td>
				</tr>
				</table>
			</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td style="display: {{ DisplayGrid|raw }}">
			<form name="frmNews" id="frmNews" method="post" action="index.php?ToDo=deleteNews">
				<div class="GridContainer">
					{{ NewsDataGrid|raw }}
				</div>
			</form>
		</td></tr>
	</table>
	</div>

	<script type="text/javascript">

		function CheckSearchForm()
		{
			var query = document.getElementById("searchQuery");

			if(query.value == "")
			{
				alert("{% lang 'EnterSearchTerm' %}");
				return false;
			}

			return true;
		}

		function ConfirmDeleteSelected()
		{
			var fp = document.getElementById("frmNews").elements;
			var c = 0;

			for(i = 0; i < fp.length; i++)
			{
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0)
			{
				if(confirm("{% lang 'ConfirmDeleteNews' %}"))
					document.getElementById("frmNews").submit();
			}
			else
			{
				alert("{% lang 'ChooseNews' %}");
			}
		}

		function ToggleDeleteBoxes(Status)
		{
			var fp = document.getElementById("frmNews").elements;

			for(i = 0; i < fp.length; i++)
				fp[i].checked = Status;
		}

		function PreviewNews(NewsId)
		{
			var l = screen.availWidth / 2 - 300;
			var t = screen.availHeight / 2 - 300;
			var win = window.open('index.php?ToDo=prevNews&newsId='+NewsId, 'newsPreview', 'width=600,height=600,left='+l+',top='+t+',scrollbars=1');
		}

	</script>
