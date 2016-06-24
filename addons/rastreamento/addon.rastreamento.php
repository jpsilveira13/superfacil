<?php
/*
	Addon de Rastreamento de Pedidos Correios
	Ultimo Release: 08/09/2014
*/
	class ADDON_RASTREAMENTO extends ISC_ADDON
	{
		public function __construct()
		{
			parent::__construct();
			$this->SetName('Rastreador Correios');
			$this->SetImage('');
			$this->SetHelpText('
				Rastreador de Pedidos Online Enviados via Correios do Brasil.<br />
				Para configurar o Cron/Agendador de Tarefa use os dados abaixo.<br/>
				1 - Periodicidade use a cada 2 Horas.<br />
				2 - Url a ser executada será <b>'.GetConfig("ShopPath").'/lib/croncorreios.php</b>.<br />
				3 - Com a url acima basta configurar seu Cpanel, Plesk ou outro painel.<br />
				Obs: Para que o sistema rastreie um pedido o administrador da loja deverar salvar o Código de Rastreamento do mesmo no campo correto (um apenas por pedido), e em seguinda atualizar o status do pedido para <b>Enviado</b> ou <b>Enviado Parcialmete</b>.<br />
				Sempre que um pedido for dado pelo sistema como <b>Entregue</b>, automaticamente o status do pedido será modificado para <b>Completo</b>.
			');

			$sql = "CREATE TABLE IF NOT EXISTS `rastreamento` (
			  `id` int(8) NOT NULL auto_increment,
			  `pedido` int(10) NOT NULL,
			  `data` varchar(20) NOT NULL,
			  `hora` varchar(20) NOT NULL,
			  `status` varchar(40) NOT NULL,
			  PRIMARY KEY  (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
			@$GLOBALS['ISC_CLASS_DB']->Query($sql);
		}

		public function SetCustomVars()
		{
			$this->_variables['ativar'] = array(
				'type' => 'dropdown',
				'name' => 'Ativar Rastreamento?',
				'default' => 'Sim',
				'options' => array(
					'Sim' => 'sim',
					'NãO' => 'nao'
				),
				"multiselect" => false,
				'required' => true
			);

			$this->_variables['avisar'] = array(
				'type' => 'dropdown',
				'name' => 'Avisar sempre que?',
				'default' => '2',
				'options' => array(
					'Quando Entregue?' => '0',
					'Aguardar Retirada?' => '1',
					'Todas Atualizações' => '2'
				),
				"multiselect" => false,
				'required' => true
			);
		
			$this->_variables['avisaradm'] = array(
				'type' => 'dropdown',
				'name' => 'Avisar admin quando entregue?',
				'default' => 'nao',
				'options' => array(
					'Sim' => 'sim',
					'Não' => 'nao'
				),
				"multiselect" => false,
				'required' => true
			);

			$this->_variables['avisaradmtodos'] = array(
				'type' => 'dropdown',
				'name' => 'Enviar copia ao admin?',
				'default' => 'nao',
				'options' => array(
					'Sim' => 'sim',
					'Não' => 'nao'
				),
				"multiselect" => false,
				'required' => true
			);
		}

		public function Init(){}
		public function EntryPoint(){echo 'Modulo sem area interativa, apenas configure o mesmo.';}
	}
?>