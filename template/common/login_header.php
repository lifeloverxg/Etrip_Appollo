<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8" />
		
	<link rel="stylesheet" href="<?php echo $home . 'theme/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo $home . 'theme/bootstrap/bootstrap.css'; ?>">
<?php foreach ($stylesheet as $value) { ?>
		<link rel="stylesheet" href="<?php echo $home . $value; ?>">
<?php } ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo $home . "js/etrip/common.js"; ?>"></script>
<?php foreach ($javascript as $value) { ?>
		<script src="<?php echo $home . $value; ?>"></script>
<?php } ?>

		<title><?php echo $title; ?></title>
	</head>
	<body>
		<section> <!-- start of main content -->