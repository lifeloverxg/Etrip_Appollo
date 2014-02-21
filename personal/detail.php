<?php
	$home = '../';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @personal:detail</h1>');
	}
	
	$tpid = 0;

	if (isset($_GET['pid'])) {
		$tpid = $_GET['pid'];
	}

	$title = "个人页面 -Etrip";

	$auth = Authority::get_auth_arr();

	$links = $_SGLOBAL['links'];

	$stylesheet = array("theme/common.css",
						"theme/personal/detail.css",
						"theme/common_junxiao.css",
						"theme/feed.css"
						);

	$javascript = array();

	$feed_list = array(
						'add_feed' => array(
											'action' => '',
											'title' => '发表新鲜事'
											),
						);
	$feed_list_large = array(
							array(
								'owner' => array(
												'url' => '#',
												'image_large' => 'theme/images/personal/server.jpg',
												'alt' => '客服',
												'title' => '客服'
												),
								'content' => '请问您想用何种方式支付',
								'timestamp' => '2014-02-18 15:23:14',
								'id' => 1,
								'func' => array(
												'reply' => ''
												)
								),
							array(
								'owner' => array(
												'url' => '#',
												'image_large' => 'theme/images/personal/server.jpg',
												'alt' => '客服',
												'title' => '客服'
												),
								'content' => '请问您对于这次旅行有什么看法',
								'timestamp' => '2014-02-18 20:23:14',
								'id' => 2,
								'func' => array(
												'reply' => ''
												)
								)
							);

	$travel_plan = array(
						'乘坐游轮进行地球80天旅行',
						'去安娜伯格状元进行参观游览',
						'乘坐直升飞机俯瞰城市夜景',
						'在拉斯维加斯打一场高尔夫'
						);

	$trip_diary = array(
						array(
							'title' => '第一天: 纽约——坎昆——哈瓦那',
							'content' => '从纽约JFK机场飞往哈瓦那国际机场，途经墨西哥坎昆转机，路程大约8小时，当日离开机场后直接去酒店休整...',
							'action' => array(
												'route' => '',
												'hotel' => ''
												),
							'hotel' => 'Ibeoster de Park Hotel',
							'images' => array(
												array(
													'url' => 'theme/images/personal/diary_1.jpg',
													'alt' => '第一张图',
													'title' => '第一张图'
													),
												array(
													'url' => 'theme/images/personal/diary_2.jpg',
													'alt' => '第二张图',
													'title' => '第二张图'
													)
												)
							)
						);

	$start = '';
	$image_list = array(
						array(
								'action' => '',
								'image' => 'theme/images/personal/image_list_1.jpg',
								'alt' => '',
								'title' => '2013古巴'
								),
						array(
								'action' => '',
								'image' => 'theme/images/personal/image_list_2.jpg',
								'alt' => '',
								'title' => '2013安娜伯格庄园'
								),
						array(
								'action' => '',
								'image' => 'theme/images/personal/image_list_3.jpg',
								'alt' => '',
								'title' => '2013墨西哥坎昆'
								),
						);

	$map = array(
				'url' => 'theme/images/personal/map.jpg',
				'alt' => '地图',
				'title' => '地图'
				);


	include S_ROOT."template/personal/personal_frame.php";
?>