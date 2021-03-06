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
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-29965937-1']);
			_gaq.push(['_setDomainName', 'exo.bg']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<div id="head">
			<div id="toppanel">
				<div id="panel">
					<div class="content clearfix">
						<?php include('panel_start.php'); ?>
						<?php if($checklogin): ?>
						<?php
							include('/../user_control/afterlogin.php');
						?>
						<?php else: ?>
						<?php
							include('panel_login.php');
							include('panel_register.php');
						?>
						<?php endif; ?>
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
				</div>
			</div> 
			<!--panel -->
			<div id="head_cen">
				<div id="head_sup" class="head_pad">
					<?php include('menu.php'); ?>
					<h1 class="logo">
						<a href="/" class="site_title">EXO.bg</a><br />
						<a href="/" id="site_slogan">
							Представете Вашия бизнес по лесен и елегантен начин
						</a>
					</h1>
				</div>
			</div>
		</div>
