<?php
	if(!defined('IN_Etrip')) {
		exit('<h1>403:Forbidden @conf:config.php</h1>');
	}

	// Host
	$_SCONFIG['host']               = '请修改';
	
	// Version
	$_SCONFIG['version']            = '';

	// MySQL Settings
	$_SCONFIG['mysql_host']         = '请修改';
	$_SCONFIG['mysql_user']  		= '请修改';
	$_SCONFIG['mysql_pass'] 		= '请修改';
	$_SCONFIG['mysql_charset'] 		= 'utf8';
	$_SCONFIG['mysql_database']		= '请修改';
	
	// Web Page Settings
	$_SCONFIG['web_charset']        = 'utf-8';
?>