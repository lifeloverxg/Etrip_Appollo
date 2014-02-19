<?php

	@define('IN_Etrip', TRUE);
	session_start();
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @root:core</h1>');
	}

    $_SGLOBAL = array();
	$_SCONFIG = array();
	
	// define project root
	define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
	$_SGLOBAL['links'] = array(
							   'logo'  => 'theme/images/logo.png',
							   'auth'  => 'auth',
							   'company' => 'company',
							   'contact' => 'contact',
							   'personal' => 'personal',
							   'setting'  => '#',
							   'help'  => '#',
							   'login'  => 'login',
							   'logout'  => 'logout',
							   'privacy'  => '#',
							   'terms'  => '#',
							   'about'  => '#'
	);

	// set timezone
	date_default_timezone_set('EST');
	
	// load configure file
//	include_once(S_ROOT.'conf/config.php');

	// load modules
//	foreach (glob(S_ROOT.'util/*.php') as $module) { 
//		include_once($module);
//	}

//	Authority::refresh_session();
	
	// TODO: get cookies

?>
