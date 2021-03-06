
	<script language=JavaScript>

		function MassActionReviews(action) {
			var sortURL = g('ReviewSortURL').href;
			sortURL = sortURL.substring(sortURL.indexOf('?')+1, sortURL.length);
			$.post('remote.php?'+sortURL+'&w='+action, $('#frmReviews').serialize(), ReviewsMassActioned);
		}

		function ReviewsMassActioned(response) {
			var status = $('status', response).text();
			BindAjaxGridSorting();
			var message = $('message', response).text();
			if(status == 0) {
				display_error('ReviewsStatus', message);
			}
			else {
				display_success('ReviewsStatus', message);
				var grid = $('grid', response).text();
				if(!grid) {
					$('#ReviewGridView').hide();
				}
				else {
					$('.GridContainer').html(grid);
				}
			}
		}
	</script>

	<div class="BodyContainer">
	<table id="Table13" cellSpacing="0" cellPadding="0" width="100%">
		<tr>
			<td class="Heading1">{% lang 'ManageReviews' %}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ ReviewIntro|raw }}</p>
			<div id="ReviewsStatus">{{ Message|raw }}</div>
			<table id="IntroTable" cellspacing="0" cellpadding="0" width="100%">
			<td class="Intro" valign="top">
				<input type="button" name="IndexDeleteButton" value="{% lang 'DeleteReviews1' %}" id="IndexDeleteButton" class="btn btn-delete" onclick="ConfirmDeleteSelected()" {{ DisableDelete|raw }} /> &nbsp;<input type="button" name="IndexApproveButton" value="{% lang 'ApproveReviews' %}" id="IndexApproveButton" class="btn btn-atualize" onclick="ApproveSelected()" {{ DisableApproved|raw }} /> &nbsp;<input type="button" name="IndexDisapproveButton" value="{% lang 'DisapproveReviews' %}" id="IndexDisapproveButton" class="btn btn-cancel" onclick="DisapproveSelected()" {{ DisableDisapproved|raw }} />
			</td>
			<td class="SmallSearch" align="right">
				<table id="Table16" style="display:{{ DisplaySearch|raw }}">
				<tr>
					<form action="index.php?ToDo=viewReviews{{ SortURL|raw }}" method="get" onsubmit="return ValidateForm(CheckSearchForm)">
					<input type="hidden" name="ToDo" value="viewReviews">
					<td nowrap>
						<input name="searchQuery" id="searchQuery" type="text" value="{{ Query|raw }}" id="SearchQuery" class="Button" size="20" />&nbsp;
						<input type="submit" value="Procurar" class="btn" name="SearchButton" id="SearchButton" /><Br />
						<a id="SearchClearButton" href="index.php?ToDo=viewReviews">{% lang 'ClearResults' %}</a>
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
		<td style="display: {{ DisplayGrid|raw }}" id="ReviewGridView">
			<form name="frmReviews" id="frmReviews" method="post" action="index.php?ToDo=deleteReviews">
				<div class="GridContainer">
					{{ ReviewDataGrid|raw }}
				</div>
			</form>
		</td></tr>
	</table>
	</div>

	<script type="text/javascript">

		function PreviewReview(ReviewId)
		{
			var l = screen.availWidth / 2 - 250;
			var t = screen.availHeight / 2 - 300;
			var win = window.open('index.php?ToDo=previewReview&reviewId='+ReviewId, 'previewReview', 'width=500,height=600,left='+l+',top='+t+',scrollbars=1');
		}

		function CheckSearchForm()
		{
			var query = document.getElementById("searchQuery");

			if(query.value == "") {
				alert("{% lang 'EnterSearchTerm' %}");
				query.focus();
				return false;
			}

			return true;
		}

		function ConfirmDeleteSelected()
		{
			var fp = document.getElementById("frmReviews").elements;
			var c = 0;

			for(i = 0; i < fp.length; i++) {
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0) {
				if(confirm("{% lang 'ConfirmDeleteReviews' %}"))
					MassActionReviews('deleteReviews');
			}
			else
			{
				alert("{% lang 'ChooseReview1' %}");
			}
		}

		function ApproveSelected()
		{
			var frm = document.getElementById("frmReviews");
			var fp = frm.elements;
			var c = 0;

			for(i = 0; i < fp.length; i++) {
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0) {
				MassActionReviews('approveReviews');
			}
			else
			{
				alert("{% lang 'ChooseReview2' %}");
			}
		}

		function DisapproveSelected()
		{
			var frm = document.getElementById("frmReviews");
			var fp = frm.elements;
			var c = 0;

			for(i = 0; i < fp.length; i++) {
				if(fp[i].type == "checkbox" && fp[i].checked)
					c++;
			}

			if(c > 0) {
				MassActionReviews('disapproveReviews');
			}
			else
			{
				alert("{% lang 'ChooseReview3' %}");
			}
		}

		function ToggleDeleteBoxes(Status)
		{
			var fp = document.getElementById("frmReviews").elements;

			for(i = 0; i < fp.length; i++)
				fp[i].checked = Status;
		}

	</script>
