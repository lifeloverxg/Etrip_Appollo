<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8" />
		<!-- <meta name="description" content="" />
		<meta name="keywords" content="" /> -->
<!--       <link rel="shortcut icon" href="<?php echo $home; ?>theme/icon/favicon.ico" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $home . "theme/bootstrap/bootstrap.css"; ?>">
		<link rel="stylesheet" href="<?php echo $home . "theme/zus/common.css"; ?>">
<?php foreach ($stylesheet as $value) { ?>
		<link rel="stylesheet" href="<?php echo $home . $value; ?>">
<?php } ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo $home . "js/zus/common.js"; ?>"></script>
<?php foreach ($javascript as $value) { ?>
		<script src="<?php echo $home . $value; ?>"></script>
<?php } ?>
		
		<script>
			function visit(url)
			{
				window.location.href='<?php echo $home; ?>'+url;
			}
		</script>


		<title><?php echo $title; ?></title>
-->
	<link rel="stylesheet" href="../../theme/common.css">
        <link rel="stylesheet" href="../../theme/bootstrap/bootstrap.css">

		<title>首页</title>
	</head>
	<body>
		<header>
			<div class="header-top">
				<a class="nav-brand" href="#">
                    <img src="../../images/logo.png" class="logo-inc">
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
<?php if (isset($_SESSION['auth'])) { ?>
					<div class="panel-user-notice">
						<span></span> <!-- display number of notices -->
					</div>
					
					<div class="panel-user-main">
						<a href="<?php echo $home . $links['people']; ?>">
							<span>欢迎回来，</span><span><?php echo $auth['title']; ?></span>
							<img class="logo-medium" src="<?php echo $home.$auth['image']; ?>" alt="<?php echo $auth['alt']; ?>" title="<?php echo $auth['title']; ?>">
						</a>
						<!-- panel menu (default display:none) only appears when hovering above elements -->
						<nav>
							<ul>
								<li><a href="<?php echo $home . $links['setting'] ?>">账户设置</a></li>
								<li><a href="<?php echo $home . $links['help'] ?>">帮助支持</a></li>
								<li><a href="<?php echo $home . $links['logout'] ?>">退出登录</a></li>
							</ul>
						</nav>
					</div>
<?php } else { ?>
					<div class="panel-user-login">
						<a href="#">登录</a>
					</div>
<?php } ?>
				</div>
				
			</div>
		</header>
		<section> <!-- start of main content -->