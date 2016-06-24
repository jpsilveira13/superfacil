<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11">
<html {% if rtl %}dir="rtl"{% endif %} xml:lang="{{ language }}" lang="{{ language }}">
<head>
	<title>{% lang 'ControlPanel' %}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={{ CharacterSet }}" />
	<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" type="text/css" href="../framework/css/semantic.min.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
	<script src="../framework/javascript/semantic.min.js"></script>
	<style type="text/css">
		@import url("Styles/styles.css");
		@import url('Styles/tabmenu.css');
		@import url("Styles/iselector.css");
	</style>
	<link rel="SHORTCUT ICON" href="favicon.ico" />
	<!--[if IE]>
	<style type="text/css">
		@import url("Styles/ie.css");
	</style>
	<![endif]-->
	<script type="text/javascript" src="../javascript/jquery.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript" src="script/menudrop.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript" src="script/common.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript" src="../javascript/iselector.js?{{ JSCacheToken }}"></script>
	<script type="text/javascript" src="../javascript/thickbox.js?{{ JSCacheToken }}"></script>
	<link rel="stylesheet" href="Styles/thickbox.css?{{ JSCacheToken }}" type="text/css" media="screen" />
	<script type="text/javascript">
		var url = 'remote.php';
	</script>
</head>

<body>
	<form action="index.php?ToDo={{ SubmitAction|raw }}" method="post" name="frmLogin" id="frmLogin" style="width: 980px; margin: 10% auto;">
		{{ FlashMessages|raw }}
		<div class="ui two column middle aligned relaxed grid basic segment">
	 		<div class="column">
	   			<div class="ui form segment">
	      			<div class="field">
	        			<label>{% lang 'UsernameLabel' %}</label>
	        			<div class="ui left labeled icon input">
	          				<input type="text" placeholder="Usuário" value="{{ Username|raw }}" name="username" id="username">
	          				<i class="user icon"></i>
	          				<div class="ui corner label">
	            				<i class="asterisk icon"></i>
	          				</div>
	        			</div>
	      			</div>
	      		
	      			<div class="field">
	        			<label>{% lang 'PasswordLabel' %}</label>
	        			<div class="ui left labeled icon input">
	          				<input type="password" placeholder="Senha" value="{{ Username|raw }}" autocomplete="off" name="password" id="password">
	          				<i class="lock icon"></i>
	          				<div class="ui corner label">
	            				<i class="asterisk icon"></i>
	          				</div>
	        			</div>
	      			</div>
	      			
					<div class="ui buttons">
					  	<button type="submit" class="ui positive button">Entrar</button>
					</div>
	    		</div>
	  		</div>
	  
	  		<div class="ui vertical divider">Ou</div>

	  		<div class="center aligned column">
	    		<div class="huge green ui labeled icon button">
	      			<i class="cart icon"></i>
	      			Voltar para a Loja
	    		</div>
	  		</div>
		</div>
	</form>
</body>
</html>