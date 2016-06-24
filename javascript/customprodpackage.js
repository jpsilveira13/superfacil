$(document).ready(function(){
	var count = $("#count").val();
	var prodId = $("#productid").val();
	/************variations' scripts************/
	// disable all but the first variation box
	$(".PackageSubProd_VariationSelect"+ count + ":gt(0)").attr('disabled', 'disabled');

	var prodVarSelectionMap = {}
	$(".PackageSubProd_VariationSelect"+ count + "").change(function() {
		// cache a map of currently selected values.
		var mapIndex = 0;
		$('.PackageSubProd_VariationSelect'+ count +'').each(function() {
			prodVarSelectionMap[mapIndex] = this.value;
			mapIndex++;
		});

		// get the index of this select
		var index = $('.PackageSubProd_VariationSelect'+ count +'').index($(this));

		// deselected an option, disable all select's greater than this
		if (this.selectedIndex == 0) {
			$('.PackageSubProd_VariationSelect'+ count +':gt(' + index + ')').attr('disabled', 'disabled')
			CustomPack_updateSelectedVariation($('#subprodrow'+ count +''));
			CustomPack_updateSelectedVariation($('#vardialog'+ count +''));
			return;
		}
		else {
			// disable selects greater than the next
			$('.PackageSubProd_VariationSelect'+ count +':gt(' + (index + 1) + ')').attr('disabled', 'disabled')
		}

		//serialize the options of the variation selects
		var optionIds = '';
		$('.PackageSubProd_VariationSelect'+ count +':lt(' + (index + 1) + ')').each(function() {
			if (optionIds != '') {
				optionIds += ',';
			}

			optionIds += $(this).val();
		});
		// request values for this option
		$.getJSON(
			config.AppPath + '/custompackremote.php?w=GetVariationOptions&productId=' + prodId + '&options=' + optionIds,
			function(data) {
				// were options returned?
				if (data.hasOptions) {
					// load options into the next select, disable and focus it
					$('.PackageSubProd_VariationSelect'+ count +':eq(' + (index + 1) + ') option:gt(0)').remove();
					$('.PackageSubProd_VariationSelect'+ count +':eq(' + (index + 1) + ')').append(data.options).attr('disabled', '').focus();

					// auto select previously selected option, and cascade down, if possible
					var preVal = prodVarSelectionMap[(index + 1)];
					if (preVal != '') {
						var preOption = $('.PackageSubProd_VariationSelect'+ count +':eq(' + (index + 1) + ') option[value=' +preVal+']');
						if (preOption) {
							preOption.attr('selected', true);
							$('.PackageSubProd_VariationSelect'+ count +':eq(' + (index + 1) + ')').trigger('change');
						}
					}
				}
				else if (data.comboFound) { // was a combination found instead?
					// display price, image etc
					CustomPack_updateSelectedVariation($('#subprodrow'+ count +''), data, data.combinationid);
					CustomPack_updateSelectedVariation($('#vardialog'+ count +''), data, data.combinationid);
				}
			}
		);
	});

	//radio button variations
	$('.PackageSubProd_OptionList'+ count +' input[type=radio]').click(function() {
		//current selected option id
		var optionId = $(this).val();
		// request values for this option
		//alert('/custompackremote.php?w=GetVariationOptions&productId=' + prodId + '&options=' + optionId);
		$.getJSON(
			config.AppPath + '/custompackremote.php?w=GetVariationOptions&productId=' + prodId + '&options=' + optionId,
			function(data) {
				if (data.comboFound) { // was a combination found instead?
					// display price, image etc
					//updateSelectedVariation($('body'), data, data.combinationid);
					CustomPack_updateSelectedVariation($('#subprodrow'+ count +''), data, data.combinationid);
					CustomPack_updateSelectedVariation($('#vardialog'+ count +''), data, data.combinationid);
				}
			}
		);
	});
	/**********variations' scripts************/

	/*********sub-products' modal window scripts*******/
	$( "#descdialog"+ count +"" ).dialog({
		 height: 400,
		 width:600,
		autoOpen: false,
		show: {
			effect: "blind",
			duration: 500
		},
		hide: {
			effect: "blind",
			duration: 500
		}
	});
	$( "#descbutton"+ count +"" ).click(function() {
		$( "#descdialog"+ count +"" ).dialog( "open" );
	});
	$( "#vardialog"+ count +"" ).dialog({
	 	height: 450,
		width:400,
		autoOpen: false,
		show: {
			effect: "blind",
			duration: 500
		},
		hide: {
			effect: "blind",
			duration: 500
		}
	});
	$( "#varbutton"+ count +"" ).click(function() {
		$( "#vardialog"+ count +"" ).dialog( "open" );
	});
	/********sub-products modal window scripts*******/

	/*********sub-products toggle script**********/
	$("input[name='toggleAll']").click(function(){
		var checked = $(this).attr("checked");
		$("#packagesTable tr td input:checkbox").attr("checked",checked);
		if($(this).is(":checked")){
			 $("#subprodqtyoption"+ count +"").attr("disabled", false);
			 $( "#varbutton"+ count +"" ).show("slow");
			 $("#ProductPrice"+ count +"").show("slow");
			 $("#subprodvarid"+ count +"").attr("disabled",false);
   		} else {
      		$("#subprodqtyoption"+ count +"").attr("disabled", true);
      		$( "#varbutton"+ count +"" ).hide("slow");  
      		$("#ProductPrice"+ count +"").hide("slow");
      		$("#subprodvarid"+ count +"").attr("disabled",true);
   		}
	});
	/*********sub-products hover scripts**********/

	/*****sub-products qty dropdown & varbutton enabler/disabler****/
	$('#subprodschecker'+ count +'').click(function(){
		if($(this).is(":checked")){
			 $("#subprodqtyoption"+ count +"").attr("disabled", false);
			 $( "#varbutton"+ count +"" ).show("slow");
			 $("#ProductPrice"+ count +"").show("slow");
			 $("#subprodvarid"+ count +"").attr("disabled",false);
   		} else {
      		$("#subprodqtyoption"+ count +"").attr("disabled", true);
      		$( "#varbutton"+ count +"" ).hide("slow");
      		$("#ProductPrice"+ count +"").hide("slow");
      		$("#subprodvarid"+ count +"").attr("disabled",true);  
   		}
	});

	/****sub-products qty dropdown & varbutton enabler/disabler*****/
	
	/********packages table and packages sub-products hover scripts*******/
	window.onload=function(){
		var tfrow = document.getElementById('packagesTable').rows.length;
		var tbRow=[];
		for (var i=1;i<tfrow;i++) {
			tbRow[i]=document.getElementById('packagesTable').rows[i];
			tbRow[i].onmouseover = function(){
			  this.style.backgroundColor = '#bbe1f2';
			};
			tbRow[i].onmouseout = function() {
			  this.style.backgroundColor = '#ffffff';
			};
		}
	};
	/********packages table and packages sub-products hover scripts*******/	
});