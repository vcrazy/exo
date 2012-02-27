

<?php include('general/header.php'); ?>

	<div id="content">
		<div id="content_cen">
			<div id="content_sup" class="head_pad">
				<div id="welcom_pan">
					<h2>
						<span class="site_title">EXO.bg</span>
					</h2>
                                        <form action="/login/log" method="post">
                                            <input type="submit"  value="Добави страница" class="buttonR" />
                                        </form>
				</div>
				<div id="site_content">
						<?php include($view . '.php'); ?>
				</div>
			</div>
		</div>
	</div>
	
<?php include('general/footer.php'); ?>
