<script type="text/javascript" src="script/optimizer.js?{{ JSCacheToken }}"></script>

<div class="BodyContainer">

<h2 class="Heading1">{% lang 'GoogleWebsiteOptimizer' %}</h2>
<p>{% lang 'GoogleWebsiteOptimizerIntro' %}</p>

<div id="MainMessage">
	{{ Message|raw }}
</div>

<table class="GridPanel OptimizerTable" border="0" cellspacing="0" cellpadding="0" style="width:100%; border: 1px solid #ddd;">
	<tr class="Heading3" >
		<td>{% lang 'TestName' %}</td>
		<td>{% lang 'Configured' %}?</td>
		<td>{% lang 'LastConfigured' %}</td>
		<td>{% lang 'Actions' %}</td>
	</tr>
	{{ OptimizerRow|raw }}
</table>
</div>
<script type="text/javascript">
lang.ResetModuleFail = "{% lang 'ResetModuleFail' %}";
lang.ConfirmResetOptimizer = "{% lang 'ConfirmResetOptimizer' %}";
</script>
