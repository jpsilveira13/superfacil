<?php
//displays daily deal box content in the homepage
//display other deals as for loop in the snippet
// for other deals get their dealprodsid and pass it to snippet daily deal others
class ISC_DAILYDEALBOXCONTENT_PANEL extends PRODUCTS_PANEL
{
	var $hrefstart='',$hrefend='',$imgstart='',$imgend='';

	public function __construct(){
		$this->hrefstart='<a href="%%GLOBAL_ShopPathNormal%%/cart.php?action=add&product_id=%%GLOBAL_getid%%">Add to Cart';
		$this->hrefend='</a>';
		$this->imgstart="<img id='ddimage' src='product_images/";
		$this->imgend="' width='100%'>"; //size for top deal image
		
	}
	public function SetPanelSettings(){
		
		$this->Disabledeal();
		//this query displays only the latest dealproduct
		$query = sprintf("select productid,dealprodname,dealdatefrom,dealdateto,
		deallocation,dealstatus,dealprice,origprice from [|PREFIX|]dailydeal_prods order by dealprodsid desc limit 1");
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
		$row =$GLOBALS['ISC_CLASS_DB']->Fetch($result);
		
		$checkstatus = $row['dealstatus'];

		if($checkstatus == '1'){

			$GLOBALS['getidmain'] =$row['productid'];
 			$GLOBALS['prodname'] = $row['dealprodname'];
			$GLOBALS['datefrom'] = isc_date('Y-m-d-h-i-s',$row['dealdatefrom']);
			$GLOBALS['dateto'] = isc_date('Y-m-d-h-i-s',$row['dealdateto']);
			#$GLOBALS['dtimestartend'] = $row['dealtimestartend'];
			$GLOBALS['location'] = $row['deallocation'];
			$GLOBALS['dprice'] =number_format($row['dealprice'],2);
			$GLOBALS['oprice'] = number_format($row['origprice'],2);
			$GLOBALS['dealmsg'] = "Today's Deal.";
			$imageid = $row['productid'];
			$imagequery = sprintf("select imagefile from [|PREFIX|]product_images where imageprodid = $imageid ");
			$result2 = $GLOBALS['ISC_CLASS_DB']->Query($imagequery);
			$imagerow =$GLOBALS['ISC_CLASS_DB']->Fetch($result2);
			$GLOBALS['imgsrc'] = $imagerow['imagefile'];
			
			//objects and labels
			$GLOBALS['imgstart'] = $this->imgstart;
			$GLOBALS['imgend'] = $this->imgend;
			$GLOBALS['linebreak'] = "</br>";
			$GLOBALS['start'] = "Start: ";
			$GLOBALS['end'] = "End: ";
			$GLOBALS['locationlabel'] = "Location: ";
			$GLOBALS['opricelabel'] = "Original Price: ";
			$GLOBALS['dpricelabel'] = "Deal Price: ";
			$GLOBALS['dollar'] = "$";
			$GLOBALS['slash'] = '/';
			$GLOBALS['mainhrefstart'] = '<a href="%%GLOBAL_ShopPathNormal%%/cart.php?action=add&product_id='.$row['productid'].'">Add to Cart';
			$GLOBALS['mainhrefend'] = '</a>';
			$GLOBALS['hrefstart']=$this->hrefstart;
			$GLOBALS['hrefend']=$this->hrefend;
			$GLOBALS['activedealsmsg'] = 'ACTIVE DEALS';
			$GLOBALS['timez'] = GetConfig('StoreTimeZone');
			$GLOBALS['timemsg']='Deal Expires in:';
			$GLOBALS['line']='<hr>';

		}
		else
		{
			$GLOBALS['dealmsg'] = "No Daily Deal Setup Today.";
			$GLOBALS['activedealsmsg'] = ' ';
		}
		$GLOBALS['DailyDealBoxContent'] = '<hr><h2><center>%%GLOBAL_dealmsg%%</center></h2><hr>
		<center><h3>%%GLOBAL_prodname%%</h3></center></br>
		<center><a href="%%GLOBAL_ShopPath%%/dailydeal.php">%%GLOBAL_imgstart%%%%GLOBAL_imgsrc%% %%GLOBAL_imgend%%</a></center></br>

		<b><!--<font color="#0334a4">%%GLOBAL_start%% </font><u>%%GLOBAL_datefrom%%  </u>%%GLOBAL_linebreak%%
		<font color="#0334a4">%%GLOBAL_end%% </font> <u>%%GLOBAL_dateto%%  </u>%%GLOBAL_linebreak%%-->
		<font color="#0334a4" >%%GLOBAL_opricelabel%%</font> <font color="#9d0419" id="op">%%GLOBAL_dollar%%%%GLOBAL_oprice%%</font>%%GLOBAL_linebreak%%
		<font color="#0334a4">%%GLOBAL_dpricelabel%%</font> <font color="#9d0419">%%GLOBAL_dollar%%%%GLOBAL_dprice%%</font>%%GLOBAL_linebreak%%
		<font color="#0334a4">%%GLOBAL_timemsg%%</font></b>
		<div class="countdownx">%%GLOBAL_dateto%%</div>
		<font size="2">%%GLOBAL_mainhrefstart%%%%GLOBAL_mainhrefend%%</font>
		%%GLOBAL_line%%
		</br><h3><a href="%%GLOBAL_ShopPathNormal%%/dailydealall.php">%%GLOBAL_activedealsmsg%%</a></h3>
		';
		$pull = $GLOBALS['ISC_CLASS_DB']->Query("
			select count(*) from [|PREFIX|]module_vars where modulename = 'addon_dailydeal'
		");	
		$count = $GLOBALS['ISC_CLASS_DB']->FetchOne($pull);
		if($count != 0){
			$GLOBALS['SNIPPETS']['DailyDealBoxContent'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("DailyDealBoxContent");
			$this->GetOtherDeals();	
		}
		
	}
		public function GetOtherDeals(){
			$this->Disabledeal();
			$productid = array();
			#$result = $GLOBALS['ISC_CLASS_DB']->Query("select productid,dealprodname,dealdatefrom,dealtimestartend,dealdateto,
			#deallocation,dealstatus,dealprice,origprice,dealstatus from isc_dailydeal_prods where dealstatus = 1 order by dealprodsid desc limit 5");
			$result=$GLOBALS['ISC_CLASS_DB']->Query("select distinct idp.productid,idp.dealprodname,idp.deallocation,idp.dealprice,idp.origprice,idp.dealdatefrom,
			idp.dealdateto,idp.dealstatus, ipm.imageprodid, ipm.imagefile 
			from [|PREFIX|]dailydeal_prods idp inner join [|PREFIX|]product_images ipm on idp.productid=ipm.imageprodid 
			where idp.dealstatus = 1 group by idp.productid order by rand() desc limit 5");
			$output = '';
			
			while($dealprodsrow =$GLOBALS['ISC_CLASS_DB']->Fetch($result)){
				$productid[] = array('id'=>$dealprodsrow['productid']);
				$this->setDealProdsGlobals($dealprodsrow);
				$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('DailyDealBoxContentOthers');
			}

			$GLOBALS['SNIPPETS']['DailyDealBoxContentOthers'] = $output;
			

		}
		public function Disabledeal(){
			//get dailydealendtime	
			$test=date('Y-m-j');
			$sql = "select dealprodsid,productid,origprice,dealdateto,dealdatefrom from [|PREFIX|]dailydeal_prods where dealstatus='1'";
			$GLOBALS['timetest'] = date ( 'M j Y H:i:s' );
		
			$result = $GLOBALS['ISC_CLASS_DB']->Query($sql);
			while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
				//if(isc_date('Y-m-d-h-i-s') >= isc_date('Y-m-d-h-i-s',$row['dealdateto']))
				if(isc_date('Y-m-d-h-i-s') >= isc_date('Y-m-d-h-i-s',$row['dealdateto']))
				{
					$sqlupdate = "update [|PREFIX|]dailydeal_prods set dealstatus='0' where dealprodsid='".$row['dealprodsid']."'";		
					$GLOBALS['ISC_CLASS_DB']->Query($sqlupdate);

					$calcpriceupdate = "update [|PREFIX|]products set prodcalculatedprice='".$row['origprice']."' where productid='".$row['productid']."' "; 
					$GLOBALS['ISC_CLASS_DB']->Query($calcpriceupdate);				
				}
			

		}
		
	


	}

}