<?php

function jquery_add()
{
	//I really don't like setting a global to check. Maybe set_option?
	global $jquery_add;
	//don't know why js() wasn't finding the file
	if (! isset($jquery_add) ) {		
		$html = "<script type='text/javascript' src='" . WEB_PLUGIN .   "/Jquery/views/shared/javascripts/jquery-" .JQUERY_VERSION . ".min.js'></script>";
		$html .= "<script type='text/javascript'>jQuery.noConflict() ;</script>";
		
		$plugins = scandir(PLUGIN_DIR . '/Jquery/views/shared/javascripts/plugins');
		foreach($plugins as $plugin) {
			if( ! ($plugin == ".") || ($plugin == "..") ) {
				$html .= "<script type='text/javascript' src='" . WEB_PLUGIN .   "/Jquery/views/shared/javascripts/plugins/" . $plugin ."' ></script>";
			}			
		}		
		$jquery_add = true;
		return $html;				
	}

}
?>
