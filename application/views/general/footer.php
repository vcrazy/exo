		<div id="foot">
			<div id="foot_cen">
				<ul id="footer">
					<?php
						foreach($footer_links as  $footer_id => $footer)
						{
							echo '<li id="footer_' . $footer_id . '" class="space">' .'<a href="' .$footer['footer_link']. 
									'">'. $footer['footer_text'] . '</a></li>';
						}
					?>
				</ul>
				<p>
					Тази уеб страница е създадена с помощта на:<br />
					<a href="index.html">© EXO.bg - система за създаване на динамични уеб сайтове</a>
				</p>
			</div>
		</div>
	</body>
</html>
