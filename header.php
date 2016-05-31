<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RoyalGroup</title>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<script src="public/jquery.min.js"></script>
	<script src="public/jquery-ui.min.js"></script>
	<script src="public/jquery.pickmeup.min.js"></script>
    <link type="text/css" rel="stylesheet" href="public/app.css"/>
    <script src="public/app.js"></script>
</head>
<body>
<div class="hidden"><?php require("icons/sprite/sprite.symbol.svg"); ?></div>
<div class="page">
	<div class="header">
		<div class="container">
			<div class="header__logo">
				<img class="logo" src="images/logo.png">
			</div>
			<div class="header__progress-bar">
				<ol class="progress-bar">
					<li class="progress-bar__item progress-bar__item--done">Обучение</li>
					<li class="progress-bar__item progress-bar__item--current">Подтверждение приобретения пакета и трафика</li>
					<li class="progress-bar__item">Активация&nbsp;партнерского VIP&nbsp;аккаунта</li>
					<li class="progress-bar__item">Активация лидерского аккаунта модератора</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="workarea container">
		<?php require('sidebar.php'); ?>
		<div class="page-content">