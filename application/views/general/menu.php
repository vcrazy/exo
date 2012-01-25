<div id="menu">

	<ul>
		<?php
			foreach($menus as $menu)
			{
				echo '<a class="button color ">' . $menu['menu_title'] . '</a>';
			}
		?>
	</ul>
</div>

