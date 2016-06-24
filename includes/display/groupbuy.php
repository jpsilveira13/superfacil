<?php

class ISC_GROUPBUY_PANEL extends PRODUCTS_PANEL
{	
	#var $addtocart='',$imgtag='';
	public function __construct(){
		$this->addtocart='<a href="%%GLOBAL_ShopPathNormal%%/cart.php?action=add&product_id=%%GLOBAL_getid%%">Add to Cart</a>';
		$this->imgtag="<img src='product_images/%%GLOBAL_imgfile%%' style='height:auto;'>";
	}
	public function SetPanelSettings(){
		$GLOBALS['timezone'] = GetConfig('StoreTimeZone');
		$this->Disabledeal();
		$this->displayGroupBuy();
	}
	public function displayGroupBuy(){
		$query = $GLOBALS['ISC_CLASS_DB']->Query("
		select distinct igb.groupbuyid,igb.productid,igb.gbprodsleft,igb.gbstarttime,igb.gbendtime,igb.gbstatus,
		igb.gbprodname,igb.gbprodprice,igb.maxgbprods,igb.minbuyers,igb.maxbuyers,igb.currentpurchases,
		igb.percentdisc,igb.discountedprice,igb.currentdiscount,ipm.imageprodid,ipm.imagefile,idp.productid,idp.proddesc,ibm.prodcurrentinv from
		[|PREFIX|]groupbuy_prods igb inner join [|PREFIX|]product_images ipm on igb.productid = ipm.imageprodid inner join
		 [|PREFIX|]products idp on igb.productid = idp.productid inner join [|PREFIX|]products ibm on igb.productid = ibm.productid
		where igb.gbstatus = 1 group by igb.productid order by igb.groupbuyid desc limit 1
		");
		$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
		$status = $row['gbstatus'];
		if($status == 1){
			$GLOBALS['prodname'] = $row['gbprodname'];
			$GLOBALS['imgfile'] = $row['imagefile'];
			$GLOBALS['proddesc'] = $row['proddesc'];
			$GLOBALS['getid'] = $row['productid'];
			$GLOBALS['gbprodsleft'] = $row['gbprodsleft'];
			$GLOBALS['maxgbprods'] = $row['maxgbprods'];
			if($row['currentdiscount'] == 0){
				$GLOBALS['price'] = number_format($row['gbprodprice'],2);
			}else{
				$GLOBALS['price'] = number_format($row['currentdiscount'],2);
			}

			$GLOBALS['dateto'] = isc_date('Y-m-d-h-i-s',$row['gbendtime']);
			$GLOBALS['totalcurrinv'] = $row['prodcurrentinv'];
			$minbuyers = unserialize($row['minbuyers']);
			$maxbuyers = unserialize($row['maxbuyers']);
			$discprice = unserialize($row['discountedprice']);
			$tippoint = $minbuyers['minbuyers'][0] - $row['currentpurchases'];
			//tags and labels
			$GLOBALS['addtocart'] = $this->addtocart;
			$GLOBALS['img'] = $this->imgtag;
			$GLOBALS['pricelabel'] = 'Current Price: ';
			$GLOBALS['invlabel'] = 'No. of Items Left: ';
			$GLOBALS['dollar'] = '$';

			if(($minbuyers['minbuyers'][0]) > ($row['currentpurchases'])){
				$GLOBALS['tippointmsg'] = '<h2>'.$tippoint.'</h2>' . " more buyer/s to go before group buying starts"; 
			}else{
				if(count($minbuyers['minbuyers']) > 1){
					$val = 0;
					foreach($discprice as $k => $v){
						if(number_format($row['currentdiscount'],2) == number_format($discprice[$k],2)){ 
							$k = $val;
						
						}
					}
					#echo $row['currentdiscount'];
					#echo number_format($discprice[$k],2);
					$nexttippoint = $minbuyers['minbuyers'][$val + 1] - $row['currentpurchases'];
					$GLOBALS['nexttippoint'] = '<font color = red>'.$nexttippoint . ' more buyer/s to go before next discounted price at $'
					. number_format($discprice[$val + 1],2) .'</font></br>';
					$GLOBALS['tippointmsg'] = '<h2>Group Buying is now live!</h2>';
				}
			}
		}
		$GLOBALS['SNIPPETS']['groupbuy'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('groupbuy');
		
	}

	/*public function Disabledeal(){
		$getorders = $GLOBALS['ISC_CLASS_DB']->Query("
		select shipping_cost_inc_tax,orderid,ordtotalqty from isc_orders where isgroupbuy = 1
		");
		$x = 0;
		$orderid = array();
		$ordtotalqty = array();
		$shippingtax = array();
		while($roworders = $GLOBALS['ISC_CLASS_DB']->Fetch($getorders)){
			$orderid[$x] = $roworders['orderid'];
			$ordtotalqty[$x] = $roworders['ordtotalqty'];
			$shippingtax[$x] = $roworders['shipping_cost_inc_tax'];
			$x++;
		}
		$query = $GLOBALS['ISC_CLASS_DB']->Query("
		select productid,currentdiscount,currentorderid,currentpurchases,gbendtime,groupbuyid,gbprodprice,maxbuyers from isc_groupbuy_prods where gbstatus = 1
		");
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($query)){
			$maxbuyers = unserialize($row['maxbuyers']);
			if((isc_date('Y-m-d-h-i-s') >= isc_date('Y-m-d-h-i-s',$row['gbendtime'])) || ($row['currentpurchases'] >= end($maxbuyers['maxbuyers']))){
				$GLOBALS['ISC_CLASS_DB']->Query("
				update isc_groupbuy_prods,isc_products set isc_groupbuy_prods.gbstatus = 0,
				isc_products.prodprice = '".$row['gbprodprice']."',
				isc_products.prodcalculatedprice = '".$row['gbprodprice']."' 
				where isc_groupbuy_prods.productid = isc_products.productid 
				and isc_groupbuy_prods.productid = '".$row['productid']."'
				");
				for($x=0;$x<count($orderid),$x<count($ordtotalqty);$x++){
					$newprice = (($row['currentdiscount'] * $ordtotalqty[$x]) + $shippingtax[$x]);
					$newsubtotal = $row['currentdiscount'] * $ordtotalqty[$x];
					$GLOBALS['ISC_CLASS_DB']->Query("
					update isc_orders set total_inc_tax = '".$newprice."',total_ex_tax = '".$newprice."',
					subtotal_inc_tax = '".$newsubtotal."', subtotal_ex_tax = '".$newsubtotal."',
					isgroupbuy = 0 where orderid = '".$orderid[$x]."' and isgroupbuy = 1 
					");
				}
			}	
		}
	}*/
	public function Disabledeal(){
		//get orderid and shipping tax
		$query1 = $GLOBALS['ISC_CLASS_DB']->Query("
		select orderid
		from [|PREFIX|]orders order by orderid desc limit 1
		");
		$roworders = $GLOBALS['ISC_CLASS_DB']->Fetch($query1);
		//get prodname
		$query2 = $GLOBALS['ISC_CLASS_DB']->Query("
		select gbprodname from [|PREFIX|]groupbuy_prods 
		where currentorderid = '".$roworders['orderid']."'
		");
		$rowgbprods = $GLOBALS['ISC_CLASS_DB']->Fetch($query2);
		//get qty and orderorderid per product in isc_order_products
		$query3 = $GLOBALS['ISC_CLASS_DB']->Query("
		select ordprodqty,orderorderid from [|PREFIX|]order_products 
		where isgroupbuy = 1
		and ordprodname = '".$rowgbprods['gbprodname']."'
		");
		$orderorderid = array();
		$prodqty = array();
		$x = 0;
		while($rowordprods = $GLOBALS['ISC_CLASS_DB']->Fetch($query3)){
			$orderorderid[$x] = $rowordprods['orderorderid'];
			$prodqty[$x] = $rowordprods['ordprodqty'];
			$x++;
		}
		//get time and no. of maxbuyers and currentpurchases
		$query4 = $GLOBALS['ISC_CLASS_DB']->Query("
		select * from [|PREFIX|]groupbuy_prods where gbstatus = 1
		");
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($query4)){

			$maxbuyers = unserialize($row['maxbuyers']);
			if((isc_date('Y-m-d-h-i-s') >= isc_date('Y-m-d-h-i-s',$row['gbendtime'])) || ($row['currentpurchases'] >= end($maxbuyers['maxbuyers']))){
				$GLOBALS['ISC_CLASS_DB']->Query("
				update [|PREFIX|]groupbuy_prods,[|PREFIX|]products set [|PREFIX|]groupbuy_prods.gbstatus = 0,
				[|PREFIX|]products.prodprice = '".$row['gbprodprice']."',
				[|PREFIX|]products.prodcalculatedprice = '".$row['gbprodprice']."' 
				where [|PREFIX|]groupbuy_prods.productid = [|PREFIX|]products.productid 
				and [|PREFIX|]groupbuy_prods.productid = '".$row['productid']."'
				");
				//update isc_order_products and isc_orders
				for($x=0;$x<count($orderorderid),$x<count($prodqty);$x++){
					#echo $orderorderid[$x];
					$GLOBALS['ISC_CLASS_DB']->Query("
					update [|PREFIX|]order_products set 
					base_price='".$row['currentdiscount']."',
					price_ex_tax='".$row['currentdiscount']."',
					price_inc_tax='".$row['currentdiscount']."',
					base_total='".$row['currentdiscount'] * $prodqty[$x]."',
					total_ex_tax= '".$row['currentdiscount'] * $prodqty[$x]."',
					total_inc_tax='".$row['currentdiscount'] * $prodqty[$x]."',
					isgroupbuy = 0
					where isgroupbuy = 1
					and ordprodname = '".$rowgbprods['gbprodname']."'
					and orderorderid = '".$orderorderid[$x]."'
					");
					// add all total prices per orderid from isc_order_products
					/*$query5 = $GLOBALS['ISC_CLASS_DB']->Query("
					select total_ex_tax,total_inc_tax from isc_order_products 
					where orderorderid = '".$orderorderid[$x]."'
					");
					$totalex = 0;
					$totalinc = 0;
					while($row2 = $GLOBALS['ISC_CLASS_DB']->Fetch($query5)){
						$totalex += $row2['total_ex_tax'];
						$totalinc += $row2['total_inc_tax'];
					}
					//get all tax from isc_orders 
					$query6 = $GLOBALS['ISC_CLASS_DB']->Query("
					select shipping_cost_inc_tax from isc_orders
					where orderid = '".$orderorderid[$x]."'
					");
					$row3 = $GLOBALS['ISC_CLASS_DB']->Fetch($query6);*/
					//update isc_orders
					$sum = $GLOBALS['ISC_CLASS_DB']->Query("
					select sum(total_inc_tax),sum(total_ex_tax) from [|PREFIX|]order_products
					where orderorderid='".$orderorderid[$x]."';
					");
					$row4 = $GLOBALS['ISC_CLASS_DB']->Fetch($sum);
					$GLOBALS['ISC_CLASS_DB']->Query("
					update [|PREFIX|]orders set
					subtotal_ex_tax = '".$row4['sum(total_ex_tax)']."',
					subtotal_inc_tax = '".$row4['sum(total_inc_tax)']."',
					total_ex_tax = '".$row4['sum(total_ex_tax)']."' + shipping_cost_inc_tax,
					total_inc_tax='".$row4['sum(total_inc_tax)']."' + shipping_cost_inc_tax
					where orderid = '".$orderorderid[$x]."'
					");
				}///end for

			}		
		}

		
	
	}
}

?>