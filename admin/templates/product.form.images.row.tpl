<div class="productImagesListItem">
	<table cellspacing="0" class="GridPanel">
		<tbody>
			<tr class="GridRow" onmouseover="$(this).addClass('GridRowOver').removeClass('GridRow');" onmouseout="$(this).addClass('GridRow').removeClass('GridRowOver');">
				<td class="productImageCheck"><input type="checkbox" /></td>
				<td class="productImageThumbDisplay" style="width:{{ productImage_thumbnailWidth|raw }}px;">
					<a style="width:{{ productImage_thumbnailWidth|raw }}px; height:{{ productImage_thumbnailHeight|raw }}px;" title="{% lang 'ClickToShowFullSizeImage' %}"></a>
				</td>
				<td class="productImageDescription"><textarea rows="4"></textarea><div style="display:none;"><input type="button" class="btn productImageDescriptionSave" value="{% lang 'Save' %}" /> <input type="button" class="productImageDescriptionCancel btn btn-cancel" value="{% lang 'Cancel' %}" /></div></td>
				<td class="productImageBaseThumb"><input type="radio" name="productImageBaseThumb" /></td>
				<td class="productImageAction">
					<a href="#" class="productImageDelete">{% lang 'Delete' %}</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
