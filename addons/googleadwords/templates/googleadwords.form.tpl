
	<form action="index.php?ToDo=runAddon&addon=addon_googleadwords&func=ExportCSV" onSubmit="return ValidateForm(CheckForm);" name="frmGoogleAdWords" method="post">
	<div class="BodyContainer">
	<table class="OuterPanel">
		  <tr>
			<td class="Heading1">{% lang 'GoogleAdWordsGenerator' %}</td>
			</tr>
			<tr>
			<td class="Intro">
				<p>{% lang 'GoogleAdWordsFormIntro' %}</p>
				{{ Message|raw }}
			</td>
		  </tr>

		  <tr>
			    <td>
					<div>
						<input type="submit" name="SubmitButton1" value="{% lang 'Export' %}" class="btn">
						<input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()"><br /><img src="images/blank.gif" width="1" height="10" /></div>
						<p class="InfoTip"><a href="#" onclick="LaunchHelp(708)">O que são espaços reservados e como posso usá-los?</a></p>
				</td>
			  </tr>
				<tr>
					<td>
					  <table class="Panel">
						<tr>
						  <td class="Heading2" colspan=2>{% lang 'GoogleAdWordsAdFormatOptions' %}</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsCreateAdsFor' %}:
							</td>
							<td>
								<table border="0">
									<tr>
										<td valign="top">
											<select size="5" id="category" name="category[]" class="Field300 ISSelectReplacement" multiple="multiple" style="height: 140px;">
												<option value="0" SELECTED>{% lang 'GoogleAdWordsAllProducts' %}</option>
												{{ CategoryOptions|raw }}
											</select>
										</td>
										<td valign="top">
											<div style="position:relative; top:200px; left:10px">
												{% lang 'GoogleAdWordsExampleAd' %}:<br />
												<div style="border:1px solid rgb(180, 208, 220); width:252px; font-size:14px; font-family:arial; padding:4px 3px 3px 5px; line-height:1.2; margin-top:5px">
													<a href="#" style="font-size:14px; font-family:arial; color:#0000CC"><span id="ad_title">iPod Touch 8GB</span></a>
													<div style="font-size:12px; color:black">
														<span id="ad_desc1">O novo iPod da Apple e elegante.</span><br />
														<span id="ad_desc2">Compre Online. Apenas R$199.</span><br />
														<span id="ad_link" style="color:#008000">{{ HTTPHost|raw }}</span>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsHeadline' %}:
							</td>
							<td>
								<input type="text" id="title" name="title" class="Field300" value="{PRODNAME}" maxlength="25">
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsDesc1' %}:
							</td>
							<td>
								<input type="text" id="desc1" name="desc1" class="Field300" value="{PRODSUMMARY}" maxlength="35">
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsDesc2' %}:
							</td>
							<td>
								<input type="text" id="desc2" name="desc2" class="Field300" value="Compre online. Apenas {PRODPRICE}." maxlength="35">
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsDisplayURL' %}:
							</td>
							<td>
								http:// <input type="text" id="displayurl" name="displayurl" class="Field300" style="width:265px" value="{{ HTTPHost|raw }}" maxlength="35">
							</td>
						</tr>
						<tr>
							<td class="FieldLabel">
								<span class="Required">*</span>&nbsp;{% lang 'GoogleAdWordsDestinationURL' %}:
							</td>
							<td>
								http:// <input type="text" id="destinationurl" name="destinationurl" class="Field300" style="width:265px" value="{PRODLINK}" maxlength="1024">
							</td>
						</tr>
					</table>
				<table>
					<tr>
						<td>
							<input type="submit" name="SubmitButton2" value="{% lang 'Export' %}" class="btn">
							<input type="button" name="CancelButton2" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()">
						</td>
					</tr>
			 </table>
			</td>
		</tr>
	</table>
	</div>
	</form>

	<script type="text/javascript">

		// Details for the example ad
		var PRODNAME = 'iPod Touch 8GB';
		var PRODBRAND = 'Apple';
		var PRODSUMMARY = 'The sleek new iPod from Apple.';
		var PRODPRICE = '$199';
		var PRODSKU = 'SKU12345';
		var PRODCAT = 'MP3 Players';

		function CheckForm() {
			if(g('category_old').selectedIndex == -1) {
				alert('{% lang 'GoogleAdWordsChooseCategory' %}');
				return false;
			}

			if(g('title').value == '') {
				alert('{% lang 'GoogleAdWordsEnterTitle' %}');
				g('title').focus();
				return false;
			}

			if(g('desc1').value == '') {
				alert('{% lang 'GoogleAdWordsEnterDesc' %}');
				g('desc1').focus();
				return false;
			}

			if(g('desc2').value == '') {
				alert('{% lang 'GoogleAdWordsEnterDesc' %}');
				g('desc2').focus();
				return false;
			}

			if(g('displayurl').value == '') {
				alert('{% lang 'GoogleAdWordsEnterDisplayURL' %}');
				g('displayurl').focus();
				return false;
			}

			if(g('destinationurl').value == '') {
				alert('{% lang 'GoogleAdWordsEnterDestinationURL' %}');
				g('destinationurl').focus();
				return false;
			}

			return true;
		}

		function ConfirmCancel()
		{
			if(confirm('{% lang 'GoogleAdWordsCancelMessage' %}'))
				document.location.href='index.php?ToDo=';
			else
				return false;
		}

		function GoogleAdWordsReplaceTokens(Val) {
			changed = Val.replace('{PRODNAME}', PRODNAME);
			changed = changed.replace('{PRODBRAND}', PRODBRAND);
			changed = changed.replace('{PRODSUMMARY}', PRODSUMMARY);
			changed = changed.replace('{PRODPRICE}', PRODPRICE);
			changed = changed.replace('{PRODSKU}', PRODSKU);
			changed = changed.replace('{PRODCAT}', PRODCAT);
			return changed;
		}

		$('input:text').keyup(function(event) {
			// Update the example ad when a key is released in any of the fields
			$('#ad_title').html(GoogleAdWordsReplaceTokens($('#title').val()));
			$('#ad_desc1').html(GoogleAdWordsReplaceTokens($('#desc1').val()));
			$('#ad_desc2').html(GoogleAdWordsReplaceTokens($('#desc2').val()));
			$('#ad_link').html(GoogleAdWordsReplaceTokens($('#displayurl').val()));
		});

	</script>
