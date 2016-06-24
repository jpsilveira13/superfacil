<?php
class ISC_DAILYDEALALL_PANEL extends PRODUCTS_PANEL


{

	public function SetPanelSettings()
	{	
		$GLOBALS['timez'] = GetConfig('StoreTimeZone');
		$this->getActiveDeals();
	}

	public function getActiveDeals(){
			$this->Disabledeal();
			$productid = array();
			$result=$GLOBALS['ISC_CLASS_DB']->Query("select distinct idp.productid,idp.dealprodname,idp.deallocation,idp.dealprice,idp.origprice,idp.dealdatefrom,
			idp.dealdateto,idp.dealstatus, ipm.imageprodid, ipm.imagefile 
			from [|PREFIX|]dailydeal_prods idp inner join [|PREFIX|]product_images ipm on idp.productid=ipm.imageprodid 
			where idp.dealstatus = 1 group by idp.productid order by rand() desc limit 5");
			$output = '';
			
			while($dealprodsrow =$GLOBALS['ISC_CLASS_DB']->Fetch($result)){
				$productid[] = array('id'=>$dealprodsrow['productid']);
				$this->setDealProdsGlobals($dealprodsrow);
				$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('dailydealall');
			}

			$GLOBALS['SNIPPETS']['dailydealall'] = $output;
			

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

?>