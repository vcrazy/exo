<div id="menu">

	<ul>
		<?php
			foreach($menus as  $menu_id => $menu)
			{
				echo '<li id="menu_' . $menu_id . '" class="button color">' . $menu . '</li>';
			}
		?>
	</ul>
</div>

