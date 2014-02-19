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
                        <li><a href="#">首页</a></li>
                        <li><a href="#">路线展示</a></li>
                        <li><a href="#">公司展示</a></li>
                        <li><a href="#">联系</a></li>
                        <li><a href="#">DIY</a></li>
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
            <section class="section-bottom">
                
            </section>

<?php include "template/common/footer.php"; ?>