<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

define("DS"								, DIRECTORY_SEPARATOR);

define("RAKU_ROOT_DIR"					, realpath(dirname(__FILE__) 				. DS . "..") . DS);
if(!defined("ROOT_DIR")){
	define("ROOT_DIR"					, realpath(RAKU_ROOT_DIR . "..") 			. DS);
}

// RAKU
define("RAKU_NAMESPACE"					, "Raku");
define("RAKU_TITLE"						, "Raku");
define("RAKU_PREFIX"					, RAKU_NAMESPACE . ".");

define("RAKU_CONFIG_DIR"				, RAKU_ROOT_DIR 		. "config" 			. DS);
define("RAKU_LIB_DIR"					, RAKU_ROOT_DIR 		. "lib" 			. DS);
define("RAKU_SIMPLE_CODING_DIR"			, RAKU_ROOT_DIR 		. "SimpleCoding" 			. DS);
define("RAKU_CONTROLLER_DIR"			, RAKU_ROOT_DIR 		. "Controller" 		. DS);
define("RAKU_MODEL_DIR"					, RAKU_ROOT_DIR 		. "Model" 			. DS);
// define("RAKU_VIEW_DIR"					, RAKU_ROOT_DIR 		. "View" 			. DS);

// PROJECT
define("CONFIG_DIR"						, ROOT_DIR 				. "config" 			. DS);
define("CONFIG_DOMAIN_DIR"				, CONFIG_DIR 			. "domain" 			. DS);

define("STORAGE_DIR"					, ROOT_DIR 				. "storage" 		. DS);
define("STORAGE_LOG_DIR"				, STORAGE_DIR 			. "log" 			. DS);
define("STORAGE_COMPILED_DIR"			, STORAGE_DIR 			. "compiled" 		. DS);
define("STORAGE_CACHE_DIR"				, STORAGE_DIR 			. "cache" 			. DS);
define("STORAGE_TMP_DIR"				, STORAGE_DIR 			. "tmp" 			. DS);

define("CONTROLLER_DIR"					, ROOT_DIR 				. "controller" 		. DS);
define("MODEL_DIR"						, ROOT_DIR 				. "model" 			. DS);

if(!defined("VIEW_DIR_NAME")){
	define("VIEW_DIR_NAME"				, "view");
}

// Common
define("VIEW_RAKU_SUFFIX"				, ".raku.php");
define("PHP_EXT"						, ".php");

define('APP_HOST_NAME', $_SERVER['SERVER_NAME']);
if(file_exists(  CONFIG_DOMAIN_DIR . APP_HOST_NAME . PHP_EXT)){
	require_once(CONFIG_DOMAIN_DIR . APP_HOST_NAME . PHP_EXT);
}else{
	require_once(CONFIG_DOMAIN_DIR . "default.php"); // Production
}

if(!defined("VIEW_DIR")){
	define("VIEW_DIR"					, ROOT_DIR 				. VIEW_DIR_NAME 	. DS);
}

if(!defined("TEMPLATES_DIR")){
	define("TEMPLATES_DIR"				, VIEW_DIR 				. "templates" 		. DS);
}

require_once(RAKU_ROOT_DIR . "RakuBase.class.php");
require_once(RAKU_SIMPLE_CODING_DIR . "SimpleCoding.phar");

$app_constants = require_once(CONFIG_DIR . "constants.php");
require_once(CONFIG_DIR . "functions.php");


// Auto load
function autoload($path)
{
	$path_list = glob($path);

	foreach ($path_list as $file_path)
	{
		if(file_exists($file_path)){
			require_once($file_path);
		}
	}
}

function raku_include(string $template_path = NULL, $data = NULL)
{
	$raku = new \Raku\SimpleCoding\SimpleCoding();
	$raku->view($template_path, $data);
}

if(defined("DEBUG_MODE")){
	if(DEBUG_MODE === 0){
		// Hide all errors
		error_reporting(0);
		ini_set('display_errors', 0);

	}else{
		// Report all errors
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}
}
