<div id="menu">
	EXO MENU

	<ul>
		<?php
			foreach($menus as $menu)
			{
				echo '<li>' . $menu['menu_title'] . '</li>';
			}
		?>
	</ul>
</div>

<form action="/">
	<input type="button" value="TEST" id="test" />
	<input type="submit" />
</form>
