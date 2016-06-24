<?php $IEM = $tpl->Get('IEM'); ?><link rel="stylesheet" type="text/css" href="addons/surveys/styles/tableselector.css" />
<link rel="stylesheet" type="text/css" href="addons/surveys/styles/view.response.css" />
<script type="text/javascript">
	// create the table selector
	jQuery(function($) {
		$('#tinymce-module-form-list').tableSelector({ select : false });
	});
</script>

<?php if($tpl->Get('surveys')): ?>
	<div class="table-selector-container" style="min-height: 100px; max-height: 500px; padding-top: 4px; padding-bottom: 8px; background: #fff;">
		<table class="table-selector" id="tinymce-module-form-list">
		
			<tbody>
				<?php $array = $tpl->Get('surveys'); if(is_array($array) || is_object($array)): foreach($array as $index=>$survey): $tpl->Assign('index', $index, false); $tpl->Assign('survey', $survey, false);  ?>
					<tr>
						<td><input type="radio" style="vertical-align: middle;" name="surveyId" value="<?php echo $tpl->Get('survey','id'); ?>" id="survey_<?php echo $tpl->Get('survey','id'); ?>" />
						<label style="vertical-align: middle;" for="survey_<?php echo $tpl->Get('survey','id'); ?>"><?php echo $tpl->Get('survey','name'); ?></label></td>
					</tr>
				 <?php endforeach; endif; ?>
			</tbody>
			
		</table>
	</div>
<?php else: ?>
	<div style='background-color:#EEE; padding:5px 5px 8px 10px; margin-bottom:10px; line-height:140%;'>
		<img src='images/warning.gif' width='18' height='18' align='left' style='padding-right:6px; margin-top:-2px;' /> <?php echo GetLang('Addon_Surveys_tinymceNoSurveysAvailable'); ?></p>
	</div>
<?php endif; ?>

<div style="clear: both;"></div>