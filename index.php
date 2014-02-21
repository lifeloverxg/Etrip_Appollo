<?php
	$home = '';
	include_once ($home.'core.php');
	
	if(!defined('IN_Etrip')) {
		exit('<h1>503:Service Unavailable @index:detail</h1>');
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
                        )
    );

?>

<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8" />
		<!-- <meta name="description" content="" />
		<meta name="keywords" content="" /> -->
		<link rel="stylesheet" href="theme/common.css">
        <link rel="stylesheet" href="theme/bootstrap/bootstrap.css">

		<title>首页</title>
	</head>
	<body>
		<header>
			<div class="header-top">
                <a class="nav-brand" href="#">
                    <img src="images/logo.png" class="logo-inc">
                </a>
                <div class="nav-main">
                    <ul>
                        <li><a href="javascript: ">首页</a></li>
                        <li><a href="route">路线展示</a></li>
                        <li><a href="company">公司展示</a></li>
                        <li><a href="contact">联系</a></li>
                        <li><a href="personal">DIY</a></li>
                    </ul>
                </div>
                <div class="panel-user">
                    <div class="panel-user-login">
                        <a href="#">LOGIN</a>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div style="display: inline-block;">2014丽星游轮9天8玩环加勒比海游</div>
                <button class="header-button">></button>
                <button class="header-button"><</button>
                <button class="header-button">了解更多</button>
            </div>
		</header>
		<section>
            <section class="section-middle">
                <div class="section-middle-left">
                    <div class="user-about">
                        <label style="margin-bottom: 20px;">关于我</label><br>
                        <img class="user-img" src="images/about_me.jpg">
                        <div class="user-info">
                            用户名<br>
                            个人简介<br>
                        </div>
                        <p>最近旅行： 2013.5 墨西哥坎昆7日游</p>
                        <p>未来旅行愿望： 阿拉斯加看极光，乞力马扎罗山</p><br>
                        <table class="user-buttons">
                            <tr>
                                <td><button class="travel-button">旅行游记</button></td>
                                <td><button class="travel-button">旅行相册</button></td>
                                <td><button class="travel-button">旅行规划</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="travel-search">
                        <div class="block-header">
                            <label style="padding-bottom: 5px;">旅行搜索</label>
                        </div>
                        <form action="" method="post">
                            <label>请输入时间：</label><input type="text" name="travel-time" /><br>
                            <label>请输入地点：</label><input type="text" name="travel-location" /><br>
                            <input type="submit" class="travel-button" style="float: right;" value="点击搜索" />
                        </form>
                    </div>
                </div>
                <div class="section-middle-right">
                    <div class="middle-detail" style="margin-bottom: 20px;">
                        <img class="detail-img" src="images/pic_one.png">
                        <div class="detail-info">
                            <div class="block-header">
                                <label style="padding-bottom: 5px;">路线推荐</label>
                            </div>
                            <p style="color: yellow;">意大利15天深度游</p>
                            <p style="font-size: 12px;">体验与众不同“意国”情调</p>
                            <p style="font-size: 12px;">2014夏季特别推荐</p>
                            <p style="font-size: 12px;">每月1或16日出发</p>
                            <button class="travel-button" style="float: right;">更多路线</button>
                        </div>
                    </div>
                    <div class="middle-detail" style="margin-bottom: 20px;">
                        <img class="detail-img" src="images/pic_two.png">
                        <div class="detail-info">
                            <div class="block-header">
                                <label style="padding-bottom: 5px;">旅游咨询</label>
                            </div>
                            <p style="color: yellow;">特色高端游市场潜力大</p>
                            <p style="font-size: 12px;">体验与众不同“意国”情调</p>
                            <p style="font-size: 12px;">2014夏季特别推荐</p>
                            <p style="font-size: 12px;">每月1或16日出发</p>
                            <button class="travel-button" style="float: right;">更多资讯</button>
                        </div>
                    </div>
                    <div class="middle-detail">
                        <img class="detail-img" src="images/pic_three.png">
                        <div class="detail-info">
                            <div class="block-header">
                                <label style="padding-bottom: 5px;">公司服务</label>
                            </div>
                            <p style="color: yellow;">面向您的“私人旅游顾问”</p>
                            <p style="font-size: 12px;">体验与众不同“意国”情调</p>
                            <p style="font-size: 12px;">2014夏季特别推荐</p>
                            <p style="font-size: 12px;">每月1或16日出发</p>
                            <button class="travel-button" style="float: right;">更多服务</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-bottom" style="background: url('images/index_map.jpg') no-repeat; background-size: 100% 100%; overflow: hidden;">
                <div style="float: left; width: 10%; height: 100%;">
                    <button class="travel-button" style="width: 30px; height: 30px; margin: 10px 30px;">+</button><br>
                    <button class="travel-button" style="width: 30px; height: 30px; margin: 10px 30px;">-</button>
                </div>
                <div style="float: left; width: 90%; height: 100%;">
                    <button class="travel-button" style="width: 20%; height: 50px; margin: 12% 35%;">开始定制您的旅游计划</button>
                </div>
            </section>

<?php include "template/common/footer.php"; ?>