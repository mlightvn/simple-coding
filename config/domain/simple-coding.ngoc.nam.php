<?php
// simple-coding.ngoc.nam

if(!defined("ENVIRONMENT")){
	define("ENVIRONMENT", "dev");
}

if(!defined("DEBUG_MODE")){
	define("DEBUG_MODE", 1);
}

if(!defined("VIEW_DIR")){
	define("VIEW_DIR"					, ROOT_DIR 				. VIEW_DIR_NAME 	. DS);
}

if(!defined("TEMPLATES_DIR")){
	define("TEMPLATES_DIR"				, VIEW_DIR 				. "templates" 	. DS);
}

define("AUTO_CLEAR_CACHED", true);
