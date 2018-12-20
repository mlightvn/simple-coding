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
