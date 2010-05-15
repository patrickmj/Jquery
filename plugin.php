<?php

define('JQUERY_VERSION', '1.4.2');
define('JQUERY_PLUGIN_DIR', dirname(__FILE__));

add_plugin_hook('public_theme_header', 'jquery_public_theme_header');
require_once(JQUERY_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'JqueryFunctions.php');


function jquery_public_theme_header()
{	
	echo jquery_add();		
}

?>
