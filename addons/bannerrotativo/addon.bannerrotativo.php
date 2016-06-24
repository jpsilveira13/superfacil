<?php
/*
	Addon para Controle de Banner Rotativo
	Ultimo Release: 26/10/2014
*/
	class ADDON_BANNERROTATIVO extends ISC_ADDON
	{
		public function __construct()
		{
			parent::__construct();
			$this->SetName('Banner Rotativo');
			$this->SetImage('');
			$this->SetHelpText('Addon para controle de Banner Rotativo da Página Principal');
		}

		public function SetCustomVars()
		{
			$this->_variables['ativar'] = array(
				'type' => 'dropdown',
				'name' => 'Ativar Banner?',
				'default' => 'Sim',
				'options' => array(
					'Sim' => 'sim',
					'Não' => 'nao'
				),
				'required' => true
			);

			$this->_variables['titulo1'] = array(
				'type' => 'textbox',
				'name' => 'Titulo Banner 1',
				'default' => '',
				'required' => false
			);

			$this->_variables['texto1'] = array(
				'type' => 'textbox',
				'name' => 'Texto Banner 1',
				'default' => '',
				'required' => false
			);

			$this->_variables['link1'] = array(
				'type' => 'textbox',
				'name' => 'Link Continue Lendo Banner 1',
				'default' => '',
				'required' => false
			);

			$this->_variables['img1'] = array(
				'type' => 'textbox',
				'name' => 'URL Imagem Banner 1',
				'default' => '',
				'required' => false
			);

			$this->_variables['titulo2'] = array(
				'type' => 'textbox',
				'name' => 'Titulo Banner 2',
				'default' => '',
				'required' => false
			);

			$this->_variables['texto2'] = array(
				'type' => 'textbox',
				'name' => 'Texto Banner 2',
				'default' => '',
				'required' => false
			);

			$this->_variables['link2'] = array(
				'type' => 'textbox',
				'name' => 'Link Continue Lendo Banner 2',
				'default' => '',
				'required' => false
			);

			$this->_variables['img2'] = array(
				'type' => 'textbox',
				'name' => 'URL Imagem Banner 2',
				'default' => '',
				'required' => false
			);

			$this->_variables['titulo3'] = array(
				'type' => 'textbox',
				'name' => 'Titulo Banner 3',
				'default' => '',
				'required' => false
			);

			$this->_variables['texto3'] = array(
				'type' => 'textbox',
				'name' => 'Texto Banner 3',
				'default' => '',
				'required' => false
			);

			$this->_variables['link3'] = array(
				'type' => 'textbox',
				'name' => 'Link Continue Lendo Banner 3',
				'default' => '',
				'required' => false
			);

			$this->_variables['img3'] = array(
				'type' => 'textbox',
				'name' => 'URL Imagem Banner 3',
				'default' => '',
				'required' => false
			);
		}

		public function Init(){}
		public function EntryPoint(){echo 'Modulo sem area interativa, apenas configure o mesmo.';}
	}
?>