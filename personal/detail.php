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