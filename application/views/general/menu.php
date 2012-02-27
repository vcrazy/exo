<div class="f_right" style="z-index: 110; position: absolute; width: 100%;">
	<menu id="menu" style="z-index: 600; text-align: right;">
		<?php
			foreach($menus as $menu_id => $menu)
			{
				echo
					'<li id="menu_' . $menu_id . '">' .
						'<a href="' . $menu['menu_link'] . '" class="' . 'not-active' . '">' .
							$menu['menu_title'] .
						'</a>' .
					'</li>';
			}
		?>
	</menu>
</div>
