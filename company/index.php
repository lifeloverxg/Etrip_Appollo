<?php
	$home = '../';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @company:detail</h1>');
	}
	
	$tpid = 0;

	if (isset($_GET['pid'])) {
		$tpid = $_GET['pid'];
	}

	$stylesheet = array("theme/common.css",
                        "theme/common_junxiao.css",
						"theme/company.css"
						);

	$auth = array(
					'url' => 'theme/image/',
					);
/*	
	$auth = Authority::get_auth_arr();

	$info_list = PeopleDAO::get_info_list($auth['uid'], $tpid);

	$title = $info_list['title'] . ' - 个人页面 - ZUS';
	
	$stylesheet = array(
						);
	$javascript = array(
						);
	$links = $_SGLOBAL['links'];
*/
	include S_ROOT."template/company/company_frame.php";
?>