<?php
	$home = '../';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @personal:detail</h1>');
	}
	
	$route = 'all';

	if (isset($_GET['route'])) {
		$route = $_GET['route'];
	}

	$title = $route . "路线展示页面 -Etrip";

	$stylesheet = array("theme/common.css",
						"theme/common_junxiao.css",
						);

	$javascript = array();

	$auth = array(
					'uid' => 1,
					'url' => '#',
					'image_large' => 'theme/images/personal/self.jpg',
					'image' => 'theme/images/personal/self.jpg',
					'alt' => 'self',
					'title' => 'self'
					);

	$route_button_list = array(
								array(
										'action' => '',
										'title' => '全部',
										'id' => 'all',
										),
								array(
										'action' => '',
										'title' => '北美游',
										'id' => 'northAmerica'
										),
								array(
										'action' => '',
										'title' => '欧洲游',
										'id' => 'europe'
										),
								array(
										'action' => '',
										'title' => '国内游',
										'id' => 'domestic'
										),
								array(
										'action' => '',
										'title' => '特色游',
										'id' => 'special'
										),
								);

	include S_ROOT."template/route/route_frame.php";
?>