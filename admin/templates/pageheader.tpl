<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html {% if rtl %}dir="rtl"{% endif %} xml:lang="{{ language }}" lang="{{ language }}">
<head>
	<title>{{ ControlPanelTitle|raw }}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={{ CharacterSet }}" />
	<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" href="../javascript/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../framework/css/semantic.css">
	<style type="text/css">
		@import url("Styles/styles.css?{{ JSCacheToken }}");
		@import url('Styles/new.css?{{ JSCacheToken }}');
		@import url('Styles/tabmenu.css?{{ JSCacheToken }}');
		@import url("Styles/iselector.css?{{ JSCacheToken }}");
		@import url('../javascript/jquery/plugins/imodal/imodal.css?{{ JSCacheToken }}');
		@import url('Styles/iconsearchbox.css?{{ JSCacheToken }}');
		@import url('Styles/thickbox.css?{{ JSCacheToken }}');
		{{ AdditionalStylesheets|raw }}
	</style>
	<link rel="SHORTCUT ICON" href="{{ FaviconPath }}" />
	<!--[if IE]>
	<style type="text/css">
		@import url("Styles/ie.css?{{ JSCacheToken }}");
	</style>
	<![endif]-->

	{{ RTLStyles|raw }}

	{% for script in headScripts %}
		<script type="text/javascript" src="{{ script }}?{{ JSCacheToken }}"></script>
	{% endfor %}

	<script type="text/javascript" src="../javascript/jquery.maskedinput.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.GridPanel input:checkbox').shiftcheckbox();
		});
		config.ProductName = '{{ ProductName|raw }}';
		config.ShopPath = '{{ ShopPath|raw }}';
		var ThousandsToken = '{{ ThousandsToken }}';
		var DecimalToken = '{{ DecimalToken }}';
		var DimensionsThousandsToken = '{{ DimensionsThousandsToken }}';
		var DimensionsDecimalToken = '{{ DimensionsDecimalToken }}';
		{{ DefineLanguageVars|raw }}
		var url = 'remote.php';
	</script>
</head>
<body>
	<div id="AjaxLoading"><img src="images/ajax-loader.gif" />&nbsp; {% lang 'LoadingPleaseWait' %}</div>
	{{ WarningNotices|raw }}
	<div class="OuterContainer">
		<div class="Header">
			<div class="logo">
				<a href="index.php">{{ nomeLoja }}</a>
			</div>

			<div class="topHead">
				<div class="textlinks">
					{{ textLinks|raw }}
				</div>
			</div>

			<br class="Clear" />
		</div>

		<div class="menuBar">
			{{ menuRow|raw }}
		</div>

		<div class="ContentContainer">
			<div id="PageBreadcrumb" class="Breadcrumb"  style="{{ HideBreadcrumb|raw }}">
				<ul>
					{{ BreadcrumbTrail|raw }}
				</ul>
			</div>

			{{ InfoTip|raw }}