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

	$stylesheet = array("theme/common.css",
						"theme/personal/detail.css",
						"theme/common_junxiao.css",
						"theme/feed.css"
						);

	$auth = array(
					'uid' => 1,
					'url' => '#',
					'image_large' => 'theme/images/personal/self.jpg',
					'image' => 'theme/images/personal/self.jpg',
					'alt' => 'self',
					'title' => 'self'
					);
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
							'hotel' => 'Ibeoster de Park Hotel'
							)
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
	include S_ROOT."template/personal/personal_frame.php";
?>