<?php

class ISC_GROUPBUYHOME_PANEL extends PRODUCTS_PANEL
{	
	#var $addtocart='',$imgtag='';
	public function __construct(){
		$this->addtocart='<a href="%%GLOBAL_ShopPathNormal%%/cart.php?action=add&product_id=%%GLOBAL_gbgetid%%">Add to Cart</a>';
		$this->imgtag="<img src='product_images/%%GLOBAL_gbimgfile%%' height='150' width='150'>";
	}
	public function SetPanelSettings(){
		$GLOBALS['gbtimezone'] = GetConfig('StoreTimeZone');
		//code initialization for groupbuy
		$pull = $GLOBALS['ISC_CLASS_DB']->Query("
			select count(*) from [|PREFIX|]module_vars
			where modulename = 'addon_groupbuy'
		");
		$count = $GLOBALS['ISC_CLASS_DB']->FetchOne($pull);
		if($count != 0){
			$this->Disabledeal();
			$this->displayGroupBuy();
		}
		//end code initializaion for groupbuy
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
			$GLOBALS['gbprodname'] = $row['gbprodname'];
			$GLOBALS['gbimgfile'] = $row['imagefile'];
			$GLOBALS['gbproddesc'] = $row['proddesc'];
			$GLOBALS['gbgetid'] = $row['productid'];
			$GLOBALS['gbprodsleft'] = $row['gbprodsleft'];
			$GLOBALS['gbmaxgbprods'] = $row['maxgbprods'];
			if($row['currentdiscount'] == 0){
				$GLOBALS['gbprice'] = number_format($row['gbprodprice'],2);
			}else{
				$GLOBALS['gbprice'] = number_format($row['currentdiscount'],2);
			}

			$GLOBALS['gbdateto'] = isc_date('Y-m-d-h-i-s',$row['gbendtime']);
			$GLOBALS['gbtotalcurrinv'] = $row['prodcurrentinv'];
			$minbuyers = unserialize($row['minbuyers']);
			$discprice = unserialize($row['discountedprice']);
			$tippoint = $minbuyers['minbuyers'][0] - $row['currentpurchases'];
			//tags and labels
			$GLOBALS['gbaddtocart'] = $this->addtocart;
			$GLOBALS['gbimg'] = $this->imgtag;
			$GLOBALS['gbpricelabel'] = 'Current Price: ';
			$GLOBALS['gbinvlabel'] = 'No. of Items Left: ';
			$GLOBALS['gbdollar'] = '$';
			$GLOBALS['gbbanner'] = '<h2>GROUP BUY ITEM</h2>';
			
			if(($minbuyers['minbuyers'][0]) > ($row['currentpurchases'])){
				$GLOBALS['gbtippointmsg'] = '<h2><u>'.$tippoint.'</u></h2>' . " More buyer/s before group buying starts"; 
			}else{
				$GLOBALS['gbtippointmsg'] = '<h2>Group Buying is now live!</h2>';
				if(count($minbuyers['minbuyers']) > 1){
					$val = 0;
					foreach($discprice as $k => $v){
						if($row['currentdiscount'] == number_format($discprice[$k],2)){ 
							$k = $val;
						}
					}
					$nexttippoint = $minbuyers['minbuyers'][$val + 1] - $row['currentpurchases'];
					$GLOBALS['nexttippoint'] = '<font color = red>'.$nexttippoint . ' more buyer/s to go before next discounted price at $'
					. number_format($discprice[$val + 1],2) .'</font></br>';
				}
			}
		$GLOBALS['groupbuyhome'] = "
			<center>%%GLOBAL_gbbanner%%</center>
			</br>
			<center><a href='%%GLOBAL_ShopPath%%/groupbuy.php'>".$this->imgtag."</a></center>
			</br>
			<h3><center>%%GLOBAL_gbprodname%%</center></h3>
			<b><center><font color='021171'>%%GLOBAL_gbtippointmsg%%</font></center>
			<br/>
			%%GLOBAL_nexttippoint%%
			<font color='021171'>%%GLOBAL_gbpricelabel%%</font>
			<font color='870303'>%%GLOBAL_gbdollar%%%%GLOBAL_gbprice%%</font>
			<br/>
			<font color='021171'>%%GLOBAL_gbinvlabel%%</font>
			<font color='870303'>%%GLOBAL_gbprodsleft%%</font>
			<br/>
			".$this->addtocart."
			<br/>
			<font color='021171'>Remaining Time:</font>
			<div class='countdown'>%%GLOBAL_gbdateto%%</div>
		";
		$GLOBALS['SNIPPETS']['groupbuyhome'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('groupbuyhome');
		}
		
		
	}
	
	
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
					$row3 = $GLOBALS['ISC_CLASS_DB']->Fetch($query6);
					*/
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