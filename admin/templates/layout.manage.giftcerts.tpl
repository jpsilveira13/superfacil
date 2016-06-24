{# Requires: GiftCertificateThemes - array of ISC_GIFTCERTIFICATE_THEME objects #}
{% import 'macros/util.tpl' as util %}
<p class="intro">
	{% lang 'GiftCertificatesIntro' %}
</p>
<table class="GridPanel SortableGrid AutoExpand" cellspacing="0" cellpadding="0" border="0" id="GiftCertificates" style="width:100%; border: 1px solid #ddd;">
	{# Column headers #}
	<tr class="Heading3">
		<td>Template</td>
		<td>Tamanho do Arquivo</td>
		<td>Última Atualização</td>
		<td>Disponível</td>
		<td style="text-align: center;">Ação</td>
	</tr>
	
	{# Gift certificate rows #}
	{% for theme in GiftCertificateThemes %}
	<tr class="GridRow GiftCertificate" giftcertificate:id="{{ theme.id }}">
		<td width="60%">{{ theme.name }}</td>
		<td>{{ theme.fileSize|niceSize }}</td>
		<td>{{ theme.lastModified|date('ExtendedDisplayDateFormat') }}</td>
		<td>
			<a class="toggleEnabledLink" href="#">
			{{ util.enabledSwitch(theme.isEnabled) }}
			</a>
		</td>
		<td style='white-space:nowrap;'>
			<a class="previewLink" href='#'>Pré-Visualizar</a>
			<a class="editLink" href='#'>Editar</a>
			<a class="restoreLink" href='#'>Restaurar</a>
		</td>
	</tr>
	{% endfor %}
	
	{# Hidden edit gift certificate form row #}
	<tr class="giftCertificateEditForm" style="display:none">
		<td colspan="5">
			<div class="editBox" style="margin:10px"></div>
			<div style="padding-bottom:10px; padding-left: 10px;">
				<input class="btn FormButton saveButton" type="button" value="{% lang 'Save' %}"/>
				<input class="btn btn-atualize FormButton previewButton" type="button" value="{% lang 'Preview' %}"/>
				ou
				<a class="cancelLink" href="#">{% lang 'Cancel'%}</a>
			</div>
		</td>
	</tr>
</table>

{# Hidden gift certificate preview iModal #}
<div id="giftCertificatePreviewModal" style="display: none;">
	<div class="ModalTitle">{% lang 'GiftCertificatePreview' %}</div>
	<div class="ModalContent">
		<table class="Panel" width="100%">
			<tr>
				<td><span id="giftCertificatePreviewFrame"></span></td>
			</tr>
		</table>
	</div>
	<div class="ModalButtonRow">
		<input type="button" class="closeGiftCertificatePreviewButton FormButton" value="{% lang 'Close' %}"/>
	</div>
</div>

<script type="text/javascript" src="script/layout.giftcertificates.js?{{ JSCacheToken }}"></script>
<script type='text/javascript'>
$('document').ready(function(){
	lang.GiftCertificateRestoreConfirmation = '{% jslang 'GiftCertificateRestoreConfirmation' %}';
	
	Layout.GiftCertificates.Urls = {
		edit : 'index.php?ToDo=editGiftCertificateTheme',
		save : 'index.php?ToDo=saveGiftCertificate',
		restore : 'index.php?ToDo=restoreGiftCertificate',
		preview : 'index.php?ToDo=exampleGiftCertificate',
		toggleEnabled : 'index.php?ToDo=toggleGiftCertificateEnabled',
	};
	
	Layout.GiftCertificates.init();
});
</script>