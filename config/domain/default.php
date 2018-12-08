<?php
// production

if(!defined("ENVIRONMENT")){
	define("ENVIRONMENT", "production");
}

if(!defined("DEBUG_MODE")){
	define("DEBUG_MODE", 0);
}

// if(!defined("CONTROLLER_DIR")){
// 	define("CONTROLLER_DIR"					, ROOT_DIR 				. CONTROLLER_DIR_NAME 	. DS);
// }

// if(!defined("CONTROLLER_DIR")){
// 	define("CONTROLLER_DIR"						, ROOT_DIR 				. "view" 	. DS);
// }

if(!defined("APP_NAME")){
	define("APP_NAME"					, "SIMPLE CODING");
}

if(!defined("APP_TITLE")){
	define("APP_TITLE"					, "SIMPLE CODING");
}

if(!defined("AUTO_CLEAR_CACHED")){
	/**
	 * false: for production.
	 * 
	 * When it is false:
	 * + Program will NOT recreate cache again and again.
	 * + Program will check AUTOMATICALLY latest modified date time of template (*.raku.php) for creating new cache. But in case of deployment, it maynot work well.
	 * + Basically, when delopment, just clear all caches in /storage/compiled/.
	 */
	define("AUTO_CLEAR_CACHED", false);
}

// https://developer.paypal.com/developer/applications/braintreeCredentials/editbtcred?email=bmdvY25hbS5zay1mYWNpbGl0YXRvckBnbWFpbC5jb20=&sbAccountNumber=1850192643725790944
define("PAYPAL_ACCESS_TOKEN"			, 'access_token$sandbox$vgbyhmjgvchtnr9b$b586e8bb9c4905ecb4f48509549342f8'); // ExpiryDate : 12 Aug 2028

define("PAYPAL_SANDBOX_ACCOUNT"			, 'ngocnam.sk-facilitator@gmail.com');
define("PAYPAL_CLIENT_ID"				, 'AYqwMDLyN4DYOCAYumdZYIjhVRiKY29Ka9lBJY7YzWV2KBO3nB1bKuY0BCXXMiOdcRSLQcd2NBeobjXv');
define("PAYPAL_SECRET_KEY"				, 'EJ_NIEYfGumNZQD5WrUXzz7MXve_1_iVlPP-MYx4iqONnfo_tnelwCVUch7UF2JhAKymXJ1dsZFHjbKZ');

