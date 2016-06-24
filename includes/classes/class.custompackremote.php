<?php
	if(!defined('ISC_BASE_PATH')){
		die();
	}

	require_once(ISC_BASE_PATH.'/lib/class.xml.php');

	class ISC_CUSTOMPACKREMOTE extends ISC_XML_PARSER{

		public function __construct(){
			parent::__construct();
		}

		public function HandleToDo(){
			/**
			 * Convert the input character set from the hard coded UTF-8 to their
			 * selected character set
			 */
			convertRequestInput();

			$what = isc_strtolower(@$_REQUEST['w']);

			switch($what){
				case 'getvariationoptions':
					$this->GetVariationOptions();
				break;
			}
		}

		/**
		*
		* @param int The customer group to use to determine the final product price (used when getting variation details from back end quote system)
		*/
		public function GetVariationOptions($customerGroupId = null)
		{
			$productId = (int)$_GET['productId'];
			$optionIds = $_GET['options'];
			$optionIdsArray = array_map('intval', explode(',', $optionIds));

			// We need to find the next type of option that's selectable, so what we do
			// is because the vcoptionids column is in the order that the customer selects
			// the options, we just find a single matching option and then look up values
			// according to the voname.

			$query = "
				SELECT prodvariationid, vnumoptions
				FROM [|PREFIX|]products p
				JOIN [|PREFIX|]product_variations v ON (v.variationid=p.prodvariationid)
				WHERE p.productid='".$productId."'
			";
			$result =$GLOBALS['ISC_CLASS_DB']->query($query);
			$product = $GLOBALS['ISC_CLASS_DB']->fetch($result);

			// Invalid product variation, or product doesn't have a variation
			if(empty($product)) {
				exit;
			}

			// If we received the number of options the variation has in, then the customer
			// has selected an entire row. Find that row.
			if(count($optionIdsArray) == $product['vnumoptions']) {
				$setMatches = array();
				foreach($optionIdsArray as $optionId) {
					$setMatches[] = 'FIND_IN_SET('.$optionId.', vcoptionids)';
				}
				$query = "
					SELECT *
					FROM [|PREFIX|]product_variation_combinations
					WHERE
						vcproductid='".$productId."' AND
						vcenabled=1 AND
						".implode(' AND ', $setMatches)."
					LIMIT 1
				";
				$result = $GLOBALS['ISC_CLASS_DB']->query($query);
				$combination = $GLOBALS['ISC_CLASS_DB']->fetch($result);

				$productClass = new ISC_PRODUCT($productId);
				$combinationDetails = $productClass->getCombinationDetails($combination, $customerGroupId);
				$combinationDetails['comboFound'] = true;

				if ($combinationDetails['sku'] == null) {
					// prevent a blank sku on details page
					$combinationDetails['sku'] = '';
				}

				echo isc_json_encode($combinationDetails);
				exit;
			}

			// Try to find a combination row with the incoming option ID string, to determine
			// which set of options is next.
			$query = "
				SELECT DISTINCT voname
				FROM [|PREFIX|]product_variation_options
				WHERE
					vovariationid='".$product['prodvariationid']."'
				ORDER BY vooptionsort ASC
				LIMIT ".count($optionIdsArray).", 1
			";
			$optionName = $GLOBALS['ISC_CLASS_DB']->fetchOne($query);

			$hasOptions = false;
			$valueHTML = '';

			$setMatches = array();
			foreach($optionIdsArray as $optionId) {
				$setMatches[] = 'FIND_IN_SET('.$optionId.', vcoptionids)';
			}

			$query = "
				SELECT *
				FROM [|PREFIX|]product_variation_options
				WHERE
					vovariationid='".$product['prodvariationid']."' AND
					voname='".$GLOBALS['ISC_CLASS_DB']->quote($optionName)."'
				ORDER BY vovaluesort ASC
			";
			$result = $GLOBALS['ISC_CLASS_DB']->query($query);
			while($option = $GLOBALS['ISC_CLASS_DB']->fetch($result)) {
				$query = "
					SELECT combinationid
					FROM [|PREFIX|]product_variation_combinations
					WHERE
						vcproductid='".$productId."' AND
						vcenabled=1 AND
						FIND_IN_SET(".$option['voptionid'].", vcoptionids) > 0 AND
						".implode(' AND ', $setMatches)."
					LIMIT 1
				";
				// Ok, this variation option isn't in use for this product at the moment. Skip it
				if(!$GLOBALS['ISC_CLASS_DB']->fetchOne($query)) {
					continue;
				}

				$option = new Xhtml_Option($option['vovalue'], (int)$option['voptionid']);
				$valueHTML .= $option->render();
				$hasOptions = true;
			}

			$return = array(
				'hasOptions' 	=> $hasOptions,
				'options'		=> $valueHTML
			);

			echo isc_json_encode($return);
			exit;
		}

	}
	
?>