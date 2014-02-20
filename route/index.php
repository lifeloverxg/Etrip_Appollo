<?php
	$home = '../';
/*	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @personal:index</h1>');
	}
*/
	$route = 'all';

	if ((isset($_GET['route'])) && (($_GET['route']) != ""))
	{
		header('Location: detail.php?route='.$_GET['route']);
	}
	else
	{
		header("Location: detail.php?route=$route");
	}

?>