<br />
<table class="GridPanel SortableGrid AutoExpand" cellspacing="0" cellpadding="0" border="0" id="IndexGrid" style="width:100%; border:1px solid #ddd;">
	<tr class="Heading3 RedirectsHeadingRow" id="RedirectsHeadingRow">
		<td align="center"><input type="checkbox" id="RedirectsMasterCheckbox"></td>
		<td>{{ SortLinksRedirectId|raw }}</td>
		<td style="width:40%;">
			{% lang 'RedirectOldURL' %}
			{{ SortLinksOldUrl|raw }}
		</td>
		<td style="width:80px;">
			{% lang 'RedirectType' %}
			{{ SortLinksNewUrl|raw }}
		</td>
		<td style="width:35%;">
			{% lang 'RedirectNewURL' %} &nbsp;
		</td>
		<td>
			{% lang 'Action' %}
		</td>
	</tr>
	{{ RedirectsGrid|raw }}
</table>
