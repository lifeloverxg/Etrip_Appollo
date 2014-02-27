<?php
	$home = '../';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @route:detail</h1>');
	}

	$auth = Authority::get_auth_arr();
	
	$route = 'all';

	if (isset($_GET['route'])) {
		$route = $_GET['route'];
	}

    $rid = -1;
    if (isset($_GET['rid'])) {
		$rid = $_GET['rid'];
	}

	$title = $route . "路线详情 -Etrip";

	$stylesheet = array(
						"theme/route/route.css"
						);

	$javascript = array(5);

	$links = $_SGLOBAL['links'];
/*
	$auth = array(
					'uid' => 1,
					'url' => '#',
					'image_large' => 'theme/images/personal/self.jpg',
					'image' => 'theme/images/personal/self.jpg',
					'alt' => 'self',
					'title' => 'self'
					);
*/
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
	$route_detail_list = array(
								'rid' => '1',
                                'title' => '美国西部十日游',
                                'detail' => array(
                                                  array(
                                        'title' => '第一天',
										'image' =>  'theme/images/route/route_list_1.jpg',
										'content' => '第一天：中国飞抵旧金山，愉快的旅程将从您降落于旧金山机场那刻开始。入住的酒店位于市中心，距离各景点咫尺之遥，夜晚的旧金山全景更美。 在酒店稍作休息, 来到曾获得加州最佳称号的厨师的餐厅享用为您私人定制的菜单。'),
                                array(
                                        'title' => '第二天',
										'image' =>  'theme/images/route/route_list_1.jpg',
										'content' => '第二天：早餐后乘游轮游览金门大桥，近距离接触金门大桥, 海湾大桥，天使岛，恶魔岛，这座旧金山的地标建筑跨越连接旧金山湾和太平洋的金门海峡。而后来到世界上最弯曲的街道：九曲花街。中午在渔人码头自由活动。下午来到众多好莱坞明星宣誓结婚的圣玛利教堂，市政厅，罗马艺术宫等无一不反映出旧金山的建筑风格。晚餐由知名华裔主厨订制的融合中餐和法餐烹饪方式的至尊盛宴。'),
                                array(
                                        'title' => '第三天',
										'image' =>  'theme/images/route/route_list_1.jpg',
										'content' => '第三天：早餐后乘车前往纳帕。曾被编写入哈佛商学院案例的蒙戴维酒庄负责人将会带我们参观讲解酒庄历史酿酒技术葡萄品种及品酒技巧，并品尝其酒庄酿造的各年份美酒。而后入住位于纳帕中心位置的能尽赏酒庄全景的度假村。下午在酒店做个全身按摩，享受休闲的午后时光。酒店的餐厅是纳帕谷最好的餐厅之一，主厨曾获得多项餐饮界殊荣。晚餐将在此享受这浓郁酒乡中的精致菜肴。'),
                                array(
                                        'title' => '第四天',
										'image' =>  'theme/images/route/route_list_1.jpg',
										'content' => '第四天：早餐后搭乘直升飞机在空中俯瞰整个纳帕谷，而后前往各国高尔夫球手都钟爱有加的圆石滩，享受pga级别的顶级高球体验。')
                                                )
								);
	
//test
	$test = PeopleDAO::get_people_basic_pid(1);
//	var_dump($test);
//test	
	include S_ROOT."template/route/route_detail_frame.php";
?>