<!DOCTYPE html>
<html>
	<head>

		<title>EXO.bg - Exoatmospheric website for successful business</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
                
                <link rel="stylesheet" type="text/css" href="/css/slide.css" media="all" />
                 <script type="text/javascript" src="/js/slide.js"></script>
                 
		<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>
		<script type="text/javascript" src="/js/exo.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>		

	</head>
	<body>
		<div id="toppanel">
			<div id="panel">
				<div class="content clearfix">
					<div class="left">
						<h1>Здравей!</h1>
					</div>    
					<div class="left">
					<!-- Login Form -->
						<form class="clearfix" action="" method="post">
							<h1>Потребителски вход!</h1>

							<label class="grey" for="username">Имейл:</label>
							<input class="field" type="text" name="email" id="email" value="" size="23" />
							<label class="grey" for="password">Парола:</label>
							<input class="field" type="password" name="password" id="password" size="23" />

							<div class="clear"></div>
							<input type="submit" name="submit" value="Login" class="bt_login" />
						</form>
					</div>
					<div class="left right">			
					<!-- Register Form -->
						<form action="" method="post">
							<h1>Регистрация:</h1>		
							<label class="grey" for="email">Имейл:</label>
							<input class="field" type="text" name="email" id="email" size="23" />
							<input type="submit" name="submit" value="Register" class="bt_register" />
						</form>
					</div>
				<!--            <div class="left">

				<h1>Members panel</h1>

				<p>You can put member-only data here</p>
				<a href="registered.php">View a special member page</a>
				<p>- or -</p>
				<a href="?logoff">Log off</a>

				</div>-->

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
				<div class="clearfix"></div>
			</div>
		</div> <!--panel -->

		<div id="head">
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
		
