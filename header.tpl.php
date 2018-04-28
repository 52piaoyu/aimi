<!doctype html>
<html>
<head>
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="广告联盟" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/css/style.css" />
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/css/bootstrap.css" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<header>
	<div id="white-header">
		<div>
		  <a id="white-logo" class="clearfix" href="<?php echo WEB_URL?>"><img src="<?php echo SRC_TPL_DIR?>/images/logo.png"></a>
		  <ul id="header_nav">
		    <li <?php if(RUN_ACTION=='default_action') echo ' class="current"'?>><a href="<?php echo WEB_URL?>">首页</a></li>
		    <li <?php if(RUN_ACTION=='advertiser') echo ' class="current"'?>><a href="<?php echo url("index.advertiser")?>">广告商</a></li>
		    <li <?php if(RUN_ACTION=='affiliate') echo ' class="current"'?>><a href="<?php echo url("index.affiliate")?>">网站主</a></li>
		    <li <?php if(RUN_ACTION=='help' || RUN_ACTION=='article') echo ' class="current"'?>><a href="<?php echo url("index.help")?>">帮助中心</a></li>
		    <li <?php if(RUN_ACTION=='contact') echo ' class="current"'?>><a href="<?php echo url("index.contact")?>">联系艾米</a></li>
		    <li class="scrollObj"></li>
		  </ul>
		  <div id="aimi_mob_menu" class="dropdown">
      	<!--<span class="glyphicon glyphicon-align-justify dropdown-toggle" id="aimi_main_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>-->
      	<button class="btn btn-default dropdown-toggle" type="button" id="aimi_main_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      		<span class="glyphicon glyphicon-align-justify"></span>
      	</button>
			  <ul class="dropdown-menu" aria-labelledby="aimi_main_menu">
			    <li><a href="<?php echo WEB_URL?>">首页</a></li>
			    <li><a href="<?php echo url("index.advertiser")?>">广告商</a></li>
			    <li><a href="<?php echo url("index.affiliate")?>">网站主</a></li>
			    <!--<li role="separator" class="divider"></li>-->
			    <li><a href="<?php echo url("index.help")?>">帮助中心</a></li>
			    <li><a href="<?php echo url("index.contact")?>">联系艾米</a></li>
			  </ul>
    	</div>
		</div>
	</div>
</header>