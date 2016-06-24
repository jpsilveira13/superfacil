<?php

	/**
	*	Before the template parsing engine runs we will create a global list of banners
	*	for the selected page which will be "hooked" into the template system so they
	*	can be displayed on the site.
	**/
	class ISC_BANNER
	{

		public function __construct()
		{

			// First up, which page are we on?
			$GLOBALS['Banners'] = array();
			$banners = array();
			$page = "";
			$page_type = "";

			if(isset($GLOBALS['ISC_CLASS_SEARCH'])) {
				$page_type = 'search_page';
			}
			else if(isset($GLOBALS['ISC_CLASS_BRANDS'])) {
				$page_type = 'brand_page';
			}
			else if(isset($GLOBALS['ISC_CLASS_CATEGORY'])) {
				$page_type = 'category_page';
			}
			else if(isset($GLOBALS['ISC_CLASS_INDEX'])) {
				$page_type = 'home_page';
			}

			// Save the page type globally so we can access it from the template engine
			$GLOBALS['PageType'] = $page_type;

			if($page_type != "") {
				$from_stamp = isc_mktime();
				$to_stamp = $from_stamp - 83699;
				$query = "
					SELECT
						*
					FROM
						[|PREFIX|]banners
					WHERE
						page = '" . $GLOBALS['ISC_CLASS_DB']->Quote($page_type) . "' AND
						status = 1 AND
						(
							(datefrom = 0 AND dateto = 0) OR
							(datefrom <= " . $from_stamp . " AND dateto >= " . $to_stamp . ")
						)
					ORDER BY
						RAND()";

				$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

				while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
					array_push($banners, $row);
				}
				
				$banner_list = '';

				if($GLOBALS['ISC_CLASS_DB']->CountResult($result) > 0) {
					foreach($banners as $banner) {
						if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
							$banner['content'] = str_replace($GLOBALS['ShopPathNormal'], $GLOBALS['ShopPathSSL'], $banner['content']);
						}

						$bannerContent = $banner['content'];
						// Wrap the banner in a div which can be styled
						$banner['content'] = sprintf("<div class='Block BlockContent banner_%s_%s'>%s</div>", $banner['page'], $banner['location'], $bannerContent);

						switch($page_type) {
							case "home_page":
							case "search_page": {
								if($banner['location'] == "top") {	
									$banner_top_home .= $banner['content'];
									$GLOBALS["Banners"]["top"]["content"] = strip_tags($banner_top_home,'<img><a>');
								}
								else if($banner['location'] == "bottom" && !isset($GLOBALS['Banners']['bottom'])) {
									$banner_bottom_home .= $banner['content'];
									$GLOBALS['Banners']['bottom']["content"] = strip_tags($banner_bottom_home,'<img><a>');
								}
								else if($banner['location'] == "middle" && !isset($GLOBALS['Banners']['middle'])) {
									$banner_middle_home .= $banner['content'];
                           			$GLOBALS['Banners']['middle']["content"] = strip_tags($banner_middle_home,'<img><a>');
                        		}
								else if($banner['location'] == "right" && !isset($GLOBALS['Banners']['right'])) {
									$banner_right_home .= $banner['content'];
                           			$GLOBALS['Banners']['right']["content"] = strip_tags($banner_right_home,'<img><a>');
                        		}
								else if($banner['location'] == "left" && !isset($GLOBALS['Banners']['left'])) {
									$banner_left_home .= $banner['content'];
                           			$GLOBALS['Banners']['left']["content"] = strip_tags($banner_left_home,'<img><a>');
                        		}
								break;
							}
							case "brand_page":
							case "category_page": {
								if($banner['location'] == "top") {	
									$banner_top_category .= $banner['content'];
									$GLOBALS["Banners"]["top"]["content"] = strip_tags($banner_top_category,'<img><a>');
								}
								else if($banner['location'] == "bottom" && !isset($GLOBALS['Banners']['bottom'])) {
									$banner_bottom_category = $banner['content'];
									$GLOBALS['Banners']['bottom']["content"] = strip_tags($banner_bottom_category,'<img><a>');
								}
								else if($banner['location'] == "middle" && !isset($GLOBALS['Banners']['middle'])) {
									$banner_middle_category = $banner['content'];
                           			$GLOBALS['Banners']['middle']["content"] = strip_tags($banner_middle_category,'<img><a>');
                        		}
								else if($banner['location'] == "right" && !isset($GLOBALS['Banners']['right'])) {
									$banner_right_category = $banner['content'];
                           			$GLOBALS['Banners']['right']["content"] = strip_tags($banner_right_category,'<img><a>');
                        		}
								else if($banner['location'] == "left" && !isset($GLOBALS['Banners']['left'])) {
									$banner_left_category = $banner['content'];
                           			$GLOBALS['Banners']['left']["content"] = strip_tags($banner_left_category,'<img><a>');
                        		}
								break;
							}
						}
					}
				}
			}
		}
	}