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

	$stylesheet = array(
						"theme/common_junxiao.css",
						"theme/route/route.css"
						);

	$javascript = array();

	$links = $_SGLOBAL['links'];

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

	$tag_id = 'id-1';
	$tag_list = array(
						array(
								'action' => '',
								'title' => '行程介绍',
								'class' => 'id-1'
								),
						array(
								'action' => '',
								'title' => '线路报价',
								'class' => 'id-2'
								),
						array(
								'action' => '',
								'title' => '结伴同游',
								'class' => 'id-3'
								),
						array(
								'action' => '',
								'title' => '立即预定',
								'class' => 'id-4'
								),
						);
	$route_list_large = array(
								array(
										'title' => '美国庄园深度豪华十日游',
										'image' => array(
															'image' => 'theme/images/route/route_list_1.jpg',
															'alt' => '第一张图',
															'title' => '安娜伯格庄园, 加利福尼亚, 美国'
															),
										'content' => array(
															'天数' => '10天',
															'出发地' => '上海',
															'行程描述' => '全程入住豪华酒店, 游览东西两岸知名庄园, 体会美国自然风光的独家行程...',
															'具体行程' => '安娜伯格庄园现称"阳光之乡", 位于美国加利福尼亚州兰乔米拉奇地区...',
															'入住酒店' => 'Hilton Hotel San Gabriel'
															)
										),
								array(
										'title' => '意大利深度14日游',
										'image' => array(
															'image' => 'theme/images/route/route_list_2.jpg',
															'alt' => '第二张图',
															'title' => '文艺复兴, 名胜古迹, 意大利'
															),
										'content' => array(
															'天数' => '14天',
															'出发地' => '北京',
															'行程描述' => '全程入住私人会所, 深度游览意大利名胜古迹与自然风光, 私人车辆全程跟随...',
															'具体行程' => '意大利是文艺复兴的发源地, 同时也是欧洲历史, 文化, 时尚, 艺术的中心...',
															'入住酒店' => 'Hilton Hotel di Roma'
															)
										),
								array(
										'title' => '乞力马扎罗山攀爬游',
										'image' => array(
															'image' => 'theme/images/route/route_list_3.jpg',
															'alt' => '第三张图',
															'title' => '乞力马扎罗山, 坦桑尼亚'
															),
										'content' => array(
															'天数' => '8天',
															'出发地' => '广州',
															'行程描述' => '全程入住当地特色酒店, 攀登非洲最高峰, 私人医疗队及培训人员跟随...',
															'具体行程' => '非洲最高山脉---乞力马扎罗山, 位于坦桑尼亚北部及东非大裂谷以南...',
															'入住酒店' => 'Hilton Hotel de Dodoma'
															)
										),
								array(
										'title' => '上海佘山高尔夫极致体验周末游',
										'image' => array(
															'image' => 'theme/images/route/route_list_4.jpg',
															'alt' => '第四张图',
															'title' => '佘山高尔夫, 上海, 中国'
															),
										'content' => array(
															'天数' => '2天',
															'出发地' => '上海',
															'行程描述' => '入住天马高尔夫酒店, 两日36洞高尔夫极致体验, 私人球童及教练全程陪同...',
															'具体行程' => '上海佘山高尔夫球场位于上海市松江区佘山国家级5A景区, 风景优美...',
															'入住酒店' => '佘山天马高尔夫大酒店'
															)
										)
								);

	include S_ROOT."template/route/route_frame.php";
?>