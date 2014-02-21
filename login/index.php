<?php
	$home = '../';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @login:index</h1>');
	}
	
	if ( isset($_SESSION['auth']) ) 
	{
		header('Location: '.$home);
	}
	else
	{
		header('Location: auth.php');
	}
	
//	header('Location: auth.php');
?>