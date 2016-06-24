<?php
	CLASS ISC_HOMESLIDER_PANEL extends PANEL
	{
		public function SetPanelSettings()
		{
			// Ativa ou Desativa Banner
			$ativo = GetModuleVariable('addon_bannerrotativo','ativar');
			if($ativo == 'sim'){
				$GLOBALS['Ativo'] = 'block;';
			} else {
				$GLOBALS['Ativo'] = 'none;';
			}

			// Prepara Banner 1
			$GLOBALS['Titulo1'] = GetModuleVariable('addon_bannerrotativo','titulo1');
			$GLOBALS['Texto1'] = GetModuleVariable('addon_bannerrotativo','texto1');
			$GLOBALS['Link1'] = GetModuleVariable('addon_bannerrotativo','link1');
			$GLOBALS['Img1'] = GetModuleVariable('addon_bannerrotativo','img1');

			// Prepara Banner 2
			$GLOBALS['Titulo2'] = GetModuleVariable('addon_bannerrotativo','titulo2');
			$GLOBALS['Texto2'] = GetModuleVariable('addon_bannerrotativo','texto2');
			$GLOBALS['Link2'] = GetModuleVariable('addon_bannerrotativo','link2');
			$GLOBALS['Img2'] = GetModuleVariable('addon_bannerrotativo','img2');

			// Prepara Banner 3
			$GLOBALS['Titulo3'] = GetModuleVariable('addon_bannerrotativo','titulo3');
			$GLOBALS['Texto3'] = GetModuleVariable('addon_bannerrotativo','texto3');
			$GLOBALS['Link3'] = GetModuleVariable('addon_bannerrotativo','link3');
			$GLOBALS['Img3'] = GetModuleVariable('addon_bannerrotativo','img3');
		}
	}
?>