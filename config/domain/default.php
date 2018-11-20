<?php
// production

if(!defined("ENVIRONMENT")){
	define("ENVIRONMENT", "production");
}

if(!defined("DEBUG_MODE")){
	define("DEBUG_MODE", 0);
}

if(!defined("VIEW_DIR")){
	define("VIEW_DIR"					, ROOT_DIR 				. VIEW_DIR_NAME 	. DS);
}

if(!defined("TEMPLATES_DIR")){
	define("TEMPLATES_DIR"				, VIEW_DIR 				. "templates" 	. DS);
}

define("AUTO_CLEAR_CACHED", false);
