		<div id="foot">
			<div id="foot_cen">
				<ul id="footer">
					<?php
						foreach($menus as $menu_id => $menu)
						{
							echo
								'<li id="footer_' . $menu_id . '" class="space">
									<a href="' . $menu['menu_link'] . '">' .
										$menu['menu_title'] .
									'</a>
								</li>';
						}
					?>
				</ul>
				<p>
					Тази уеб страница е създадена с помощта на:<br />
					<a href="/">© EXO.bg - система за създаване на динамични уеб сайтове</a>
				</p>
			</div>
		</div>
	</body>
</html>
