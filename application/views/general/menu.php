<div id="menu">

	<ul>
		<?php
			foreach($menus as  $menu_id => $menu)
			{
				echo '<li id="menu_' . $menu_id . '" class="button color">' .'<a href="' .$menu['menu_link']. 
						'">'. $menu['menu_title'] . '</a></li>';
			}
		?>
	</ul>
</div>

