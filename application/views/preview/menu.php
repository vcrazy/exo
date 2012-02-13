<menu id="menu">
		<?php
			foreach($menus as $menu_id => $menu)
			{
				$link = explode('/', $menu['menu_link']);
				$active = $link[1] == $selected_menu ? 'active' : 'not-active';

				echo
					'<li id="menu_' . $menu_id . '">
						<a href="' . $menu['menu_link'] . '" class="' . 'not-active' . '">' .
							$menu['menu_title'] .
						'</a>
					</li>';
			}
		?>
</menu>
