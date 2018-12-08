<?php
// simple-coding.ngoc.nam

if(!defined("ENVIRONMENT")){
	define("ENVIRONMENT", "dev");
}

if(!defined("DEBUG_MODE")){
	define("DEBUG_MODE", 1);
}

// if(!defined("CONTROLLER_DIR")){
// 	define("CONTROLLER_DIR"					, ROOT_DIR 				. CONTROLLER_DIR_NAME 	. DS);
// }

// if(!defined("VIEW_DIR")){
// 	define("VIEW_DIR"				, CONTROLLER_DIR 				. "templates" 	. DS);
// }

/**
 * false: for production.
 *
 * When it is false:
 * + Program will NOT recreate cache again and again.
 * + Program will check AUTOMATICALLY latest modified date time of template (*.raku.php) for creating new cache. But in case of deployment, it maynot work well.
 * + Basically, when delopment, just clear all caches in /storage/compiled/.
 */
define("AUTO_CLEAR_CACHED", true);
