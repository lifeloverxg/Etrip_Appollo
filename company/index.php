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

	$stylesheet = array("theme/common_junxiao.css",
						"theme/company.css"
						);

	$auth = array(
					'url' => 'theme/image/',
					);

    $title = "公司展示";

    $links = $_SGLOBAL['links'];

    $company_info = array(
                          array('title' => '公司名称', 'info' => 'pi-sun集团'),
                          array('title' => '注册时间', 'info' => '2014年2月14日'),
                          array('title' => '注册资本', 'info' => '5,000,000美元'),
                          array('title' => '注册地点', 'info' => '纽约'),
                          array('title' => '公司规模', 'info' => '员工50人')
                    );

    $department_list = array("财务部门", "客服部门", "行政部门", "旅游部门", "市场部门", "地产部门");

    $image_service = array(
                        'customer' => 'images/company_1.jpg',
                        'market' => 'images/company_2.jpg',
                        'travel' => 'images/company_3.jpg',
                        'private' => 'images/company_4.jpg',
    );

    $image_list = array(
                        array(
                              'image' => 'images/company_1.jpg',
                              'alt' => '',
                              'title' => ''
                        );
    );

    $description = "以下是测试内容（豫章故郡，洪都新府。星分翼轸，地接衡庐。襟三江而带五湖，控蛮荆而引瓯越。物华天宝，龙光射牛斗之墟；人杰地灵，徐孺下陈蕃之榻。雄州雾列，俊彩星驰。台隍枕夷夏之交，宾主尽东南之美。都督阎公之雅望，綮戟遥临；宇文新州之懿范，襜帷暂驻。十旬休假，胜友如云。千里逢迎，高朋满座。腾蛟起凤，孟学士之词宗；紫电青霜，王将军之武库。家君作宰，路出名区。童子何知？躬逢胜饯。
时维九月，序属三秋。潦水尽而寒潭清，烟光凝而暮山紫。俨骖騑于上路，访风景于崇阿。临帝子之长洲，得仙人之旧馆。层峦耸翠，上出重霄；飞阁流丹，下临无地。鹤汀凫渚，穷岛屿之萦回；桂殿兰宫，列冈峦之体势。披绣闼，俯雕甍，山原旷其盈视，川泽纡其骇瞩。闾阎扑地，钟鸣鼎食之家；舸舰迷津，青雀黄龙之舳。虹销雨霁，彩彻区明。落霞与孤鹜齐飞，秋水共长天一色。渔舟唱晚，响穷彭蠡之滨，雁阵惊寒，声断衡阳之浦。
遥襟甫畅，逸兴遄飞。爽籁发而清风生，纤歌凝而白云遏。睢园绿竹，气凌彭泽之樽；邺水朱华，光照临川之笔。四美具，二难并。穷睇眄于中天，极娱游于暇日。天高地迥，觉宇宙之无穷；兴尽悲来，识盈虚之有数。望长安于日下，目吴会于云间。地势极而南溟深，天柱高而北辰远。关山难越，谁悲失路之人；萍水相逢，尽是他乡之客。怀帝阍而不见，奉宣室以何年？
嗟乎！时运不齐，命途多舛。冯唐易老，李广难封。屈贾谊于长沙，非无圣主；窜梁鸿于海曲，岂乏明时？所赖君子安贫，达人知命。老当益壮，宁移白首之心；穷且益坚，不坠青云之志。酌贪泉而觉爽，处涸辙而犹欢。北海虽赊，扶摇可接；东隅已逝，桑榆非晚。孟尝高洁，空余报国之情；阮籍猖狂，岂效穷途之哭？
勃三尺微命，一介书生。无路请缨，等终军之弱冠；有怀投笔，慕宗悫之长风。舍簪笏于百龄，奉晨昏于万里。非谢家之宝树，接孟氏之芳邻。他日趋庭，叨陪鲤对；今兹捧袂，喜托龙门。杨意不逢，抚凌云而自惜；锺期既遇，奏流水以何惭？
呜呼！胜地不常，盛筵难再。兰亭已矣，梓泽丘墟。临别赠言，幸承恩于伟饯；登高作赋，是所望于群公！敢竭鄙怀，恭疏短引。一言均赋，四韵俱成。请洒潘江，各倾陆海云尔：
“滕王高阁临江渚，佩玉鸣鸾罢歌舞。画栋朝飞南浦云，朱帘暮卷西山雨。闲云潭影日悠悠，物换星移几度秋。阁中帝子今何在，槛外长江空自流。”）";
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