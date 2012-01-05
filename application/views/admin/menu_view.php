<form action="/admin/create_menu" method="post">
Title:  <input type="text" name="title" />
Number: <input type="text" name="number" />
	<input type="submit" value="Създай" />
</form>

<?php
	echo'<br />';
    foreach($menus as $menu)
    {
        echo '<a href="/admin/delete_menu/'.$menu['menu_id'].'" class="message">'.$menu['menu_title'].'</a><br /><br />';
    }
?>
