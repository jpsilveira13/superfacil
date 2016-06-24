<?php

	CLASS ISC_HEADER_PANEL extends PANEL
	{
		public function SetPanelSettings()
		{
			// Are we using a text or image-based logo?
			$loadLogo = true;
			if($GLOBALS['ISC_CLASS_TEMPLATE']->getIsMobileDevice()) {
				if(getConfig('mobileTemplateLogo')) {
					$GLOBALS['ISC_CLASS_TEMPLATE']->assign('StoreLogo', getConfig('mobileTemplateLogo'));
					$GLOBALS['ISC_CLASS_TEMPLATE']->assign('HeaderLogo', $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('LogoImage'));
					$loadLogo = false;
				}
			}

			if($loadLogo) {
				if(GetConfig('HomePagePageTitle')) {
					$title = GetConfig('HomePagePageTitle');
				}
				else {
					$title = GetConfig('StoreName');
				}
				$GLOBALS['HeaderLogoTitle'] = $title;
				$GLOBALS['HeaderLogo'] = FetchHeaderLogo();
			}
		}
	}