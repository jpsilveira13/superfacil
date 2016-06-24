<?php
//displays only one deal(latest daily deal added) product details upon clicking the deal of the day product/daily deal link
//add another query to display a deal product detail (other deals) - get dealprodsid passed by the snippet and create a condition
// that if (isset['action']){query select bla bla where dealprodsid = $_REQUEST['id']}
//template used is template/_master/dailydeal.html
class ISC_DAILYDEAL
{

	/*public function __construct()
	{
		$GLOBALS['DailyDeal'] = GetConfig('DailyDeal');

	}*/
	public function HandlePage()
	{
		$this->Disabledeal();
		$this->DisplayDailyDeal();
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("dailydeal");
		$GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();	

	}
	private function DisplayDailyDeal()
	{
	if(isset($_REQUEST['action'])){
		#echo $_REQUEST['id'];
		
		$query = sprintf("select productid, dealdatefrom,dealdateto,deallocation,dealstatus,dealprice,origprice from [|PREFIX|]dailydeal_prods where productid= '".$_REQUEST['id']."' ");
		#$result = $GLOBALS['ISC_CLASS_DB'] ->Query($query);
		#$row=$GLOBALS['ISC_CLASS_DB']->Fetch($result);
			
	}else{	
		//query that gets the latest daily deal
		$query = sprintf("select productid, dealdatefrom,dealdateto,deallocation,dealstatus,dealprice,origprice from [|PREFIX|]dailydeal_prods order by dealprodsid desc limit 1");
		#$result = $GLOBALS['ISC_CLASS_DB'] ->Query($query);
		#$row=$GLOBALS['ISC_CLASS_DB']->Fetch($result);
	}
		$result = $GLOBALS['ISC_CLASS_DB'] ->Query($query);
		$row=$GLOBALS['ISC_CLASS_DB']->Fetch($result);
		$checkstatus = $row['dealstatus'];

		$GLOBALS['timez'] = GetConfig('StoreTimeZone');

		if($checkstatus == '1'){
			$GLOBALS['displaydfrom'] = isc_date('Y-m-d-h-i-s',$row['dealdatefrom']); #'test'; #$showdeal['datefrom'];
			$GLOBALS['displaydto'] = isc_date('Y-m-d-h-i-s',$row['dealdateto']);
			$GLOBALS['displaydprice'] = number_format($row['dealprice'],2);
			$GLOBALS['displaylocation'] = $row['deallocation'];
			#$GLOBALS['displaytimestartend'] = $row['dealtimestartend'];
			$GLOBALS['displayoprice'] = number_format($row['origprice'],2);
			$productid = $row['productid'];
			$GLOBALS['getid'] = $productid;
		
			$query2 = sprintf("select proddesc, prodname from [|PREFIX|]products where productid = $productid");
			$result2=$GLOBALS['ISC_CLASS_DB'] -> Query($query2);
			$row2=$GLOBALS['ISC_CLASS_DB'] -> Fetch($result2);
			$GLOBALS['displaydesc'] = $row2['proddesc'];
			$GLOBALS['displayname'] = $row2['prodname'];

			//get product image
			$query3 = sprintf("select imagefile from [|PREFIX|]product_images where imageprodid = $productid");
			$result3 = $GLOBALS['ISC_CLASS_DB'] -> Query($query3);
			$row3=$GLOBALS['ISC_CLASS_DB'] -> Fetch($result3);
			$GLOBALS['displayimage'] = $row3['imagefile'];
			$GLOBALS['nodealmsg'] = "DEAL OF THE DAY";
		}else{
			$GLOBALS['nodealmsg'] = "There is no deal setup for today. Please try again later.";
		}

		
	
		
		//display dailydeal.html template
		
	}

	public function Disabledeal(){
		//get dailydealendtime	
		$test=isc_date('Y-m-j');
		$sql = "select dealprodsid,productid,origprice,dealdateto,dealdatefrom from [|PREFIX|]dailydeal_prods where dealstatus='1'";
		$GLOBALS['timetest'] = date ( 'M j Y H:i:s' );
		
		$result = $GLOBALS['ISC_CLASS_DB']->Query($sql);
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
			if(isc_date('Y-m-d-h-i-s') >= isc_date('Y-m-d-h-i-s',$row['dealdateto']))
			{
				$sqlupdate = "update [|PREFIX|]dailydeal_prods set dealstatus='0' where dealprodsid='".$row['dealprodsid']."'";		
				$GLOBALS['ISC_CLASS_DB']->Query($sqlupdate);

				$calcpriceupdate = "update [|PREFIX|]products set prodcalculatedprice='".$row['origprice']."' where productid='".$row['productid']."' "; 
				$GLOBALS['ISC_CLASS_DB']->Query($calcpriceupdate);				
			}
			

		}
		
	
#$stop_date = date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 day'));
#echo 'date after adding 1 day: ' . $stop_date;

	}

}
//2013-05-01 08:18:46 (date('Y-m-d H:i:s')