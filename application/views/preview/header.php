<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>eXo.bg</title>
		<link href="/css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/preview.js"></script>
	</head>
	<body id="preview_body">
		<div id="head">
			<div id="head_cen">
				<div id="head_sup" class="head_pad">
					<?php include('menu.php'); ?>
					<h1 class="logo">
						<a href="/" class="site_title">
						<?php if ($website != '')
							{
							echo $domain;
							}
							else
								{
								echo 'EXO.bg';
								}
						?>
						</a>
						<br />
						<div>
							<a href="/" id="site_slogan">
								<?php if ($domain != '')
									{
									echo $description;
									}
									else
										{
										echo 'Представете вашия бизнес по лесен и елегантен начин';
										}
								?>
							</a>
						</div>
					</h1>
				</div>
			</div>
		</div>
		