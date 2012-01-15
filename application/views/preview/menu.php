<div id="menu">
	PERSONAL MENU
	<ul>
		<?php
			foreach($menus as $menu_id => $menu_title)
			{
				echo '<li id="menu_' . $menu_id . '">' . $menu_title . '</li>';
			}
		?>
	</ul>
</div>
