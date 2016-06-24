<?php
	require_once (dirname(__FILE__).'/../../includes/classes/class.addon.php');

	class ADDON_LOYALTYREWARDS extends ISC_ADDON {

	    #var formfile = '';
	    /**
	     * Constructor
	     * Setup the addon-specific variables through the addon parent class
	     */
	    public function __construct() {
	    	// Call the parent constructor (this is required!)
	        parent::__construct();
			// Set the display name for this addon
	        $this->SetName('Clube de Fidelidade');
	        $this->SetHelpText('Clube de Fidelidade oferece pontos de recompensa destinados a manter os clientes a voltar e fazer novos negócios com você.<br />
			Todos os pontos de recompensas é equivalente a R$ 1, que será adicionado aos seus créditos na lojas. Onde eles poderão usar essa pontos / crédito para compras futuras.');
	        $this->RegisterMenuItem(array('location'=>'mnuSettings', 'icon'=>'fedex_icon.gif', 'text'=>'Clube de Fidelidade', 'id' => 'addon_loyalty'));
	    }
		
		/**
	     * Custom variables for the FedEx Addon.
	     */
	    
	     public function SetCustomVars() {        
	       # $this->_variables['points'] = array("name"=>'Points', "type"=>"textbox", "default"=>"http://cartaddon.com", "required"=>true);
	        #$this->_variables['size'] = array("name"=>'Watermark Size', "type"=>"textbox", "default"=>"12", "required"=>true);
			#$this->_variables['transparency'] = array("name"=>'Transparency', "type"=>"textbox", "help"=>'A value between 0 and 127. 0 indicates completely opaque while 127 indicates completely transparent.', "default"=>"100", "required"=>true);		
	    } 

	    /**
	     * Init
	     * Initialize any other addon-specific code that needs to run
	     */
	    public function init() {
	  	$GLOBALS['ISC_CLASS_DB']->Query("
	        CREATE TABLE IF NOT EXISTS `[|PREFIX|]loyaltyrewards`(
	        			`loyaltyid` int(11) NOT NULL AUTO_INCREMENT,                                        
	                      `loyaltypoints` decimal(20,4) DEFAULT NULL,                                         
	                      `loyaltybased` decimal(20,4) DEFAULT NULL,                                          
	                      PRIMARY KEY (`loyaltyid`)                                                           
	                    ) ENGINE=MyISAM CHARSET=utf8 COLLATE utf8_general_ci   
	        ");
		
	        $this->ShowSaveAndCancelButtons(false);
	    }

	    public function EntryPoint(){
	        $sql = "select count(loyaltyid) as total, loyaltypoints, loyaltybased  from [|PREFIX|]loyaltyrewards";
			$result = $GLOBALS['ISC_CLASS_DB']->Query($sql);
			$row = $GLOBALS['ISC_CLASS_DB'] ->Fetch($result);
			if($row['total'] < 1){
				$GLOBALS['Loyaltypoints'] = 1;
				$GLOBALS['Loyaltyamount'] = 200;
			}else{
				$GLOBALS['Loyaltypoints'] = number_format($row['loyaltypoints'],2,'.','');
				$GLOBALS['Loyaltyamount'] = number_format($row['loyaltybased'],2,'.','');
			}	
				
			if(isset($_REQUEST['action'])){
				if($row['total'] < 1){
					$sql2 = "insert into [|PREFIX|]loyaltyrewards (loyaltypoints, loyaltybased) values('".$this->safevar($_REQUEST['points'])."', '".$this->safevar($_REQUEST['amount'])."')";			
				}else{			
					$sql2 = "update [|PREFIX|]loyaltyrewards set loyaltypoints='".$this->safevar($_REQUEST['points'])."', loyaltybased='".$this->safevar($_REQUEST['amount'])."'";
					
				}
				$GLOBALS['Loyaltypoints'] = number_format($_REQUEST['points'],2,'.','');
				$GLOBALS['Loyaltyamount'] = number_format($_REQUEST['amount'],2,'.','');
				$GLOBALS['ISC_CLASS_DB']->Query($sql2);
			}

	        $this->ParseTemplate('settings');   
	    }
		
		public function safevar($str){
			return $GLOBALS['ISC_CLASS_DB']->Quote($str);	
		}	
	}
?>
