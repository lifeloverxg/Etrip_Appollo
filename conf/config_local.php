<?php
	if(!defined('IN_Etrip')) {
		exit('<h1>403:Forbidden @conf:config.php</h1>');
	}

	// Host
	$_SCONFIG['host']               = 'localhost';
	
	// Version
	$_SCONFIG['version']            = '';

	// MySQL Settings
	$_SCONFIG['mysql_host']         = 'localhost';
	$_SCONFIG['mysql_user']  		= 'root';
	$_SCONFIG['mysql_pass'] 		= 'root';
	$_SCONFIG['mysql_charset'] 		= 'utf8';
	$_SCONFIG['mysql_database']		= 'pi-sun';
	
	// Web Page Settings
	$_SCONFIG['web_charset']        = 'utf-8';
?>