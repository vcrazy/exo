<menu id="menu">
		<?php
			foreach($menus as $menu_id => $menu)
			{
				echo
					'<li id="menu_' . $menu_id . '">
						<a href="' . $menu['menu_link'] . '" class="' . 'not-active' . '">' .
							$menu['menu_title'] .
						'</a>
					</li>';
			}
		?>
</menu>
