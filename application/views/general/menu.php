<menu id="menu">
	<?php
		foreach($menus as  $menu_id => $menu)
		{
			echo '<li id="menu_' . $menu_id . '" class="not-active">' .'<a href="' .$menu['menu_link']. 
					'">'. $menu['menu_title'] . '</a></li>';
		}
	?>
</menu>
