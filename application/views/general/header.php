<!DOCTYPE html>

<html>
	<head>
		<title>EXO.bg - Exoatmospheric website for successful business</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="/css/slide.css" media="all" />
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>
		<script type="text/javascript" src="/js/exo.js"></script>
		<script type="text/javascript" src="/js/slide.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
	</head>
	<body>
        <div id="toppanel">
			<div id="panel">
				<div class="content clearfix">
					<div class="left">
						<h1>Здравей!</h1>
					</div>    
					<?php include ('panel_login.php'); ?>
					<?php include ('panel_register.php'); ?>
					<div class="left right"></div>
				</div>
			</div>
            <!-- /login -->	
			<div class="tab">
			</div> <!-- / top -->
			<div style="width: 980px; margin: 0 auto;">
				<ul class="login">
					<li class="left">&nbsp;</li>
					<li>Здравей !</li>
					<li class="sep">|</li>
					<li id="toggle">
						<a id="open" class="open" href="#">Отвори панела</a>
						<a id="close" style="display: none;" class="close" href="#">Затвори панела</a>			
					</li>
					<li class="right">&nbsp;</li>
				</ul>
					<?php include('menu.php'); ?>
			</div>
		</div> <!--panel -->

		<div id="head">
			<div id="head_cen">
				<div id="head_sup" class="head_pad">
					<h1 class="logo">
						<a href="/" class="site_title">EXO.bg</a><br />
						<a href="/" id="site_slogan">
							Представете Вашия бизнес по лесен и елегантен начин
						</a>
					</h1>
				</div>
			</div>
		</div>
		
