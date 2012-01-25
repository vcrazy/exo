<?php
	if($pages)
	{
		$show = TRUE;
		foreach($pages as $page_num => $page)
		{
			echo '<div id="page_menu_' . $page_num . '" class="page' . ($show ? '' : ' hidden') . '">' . stripslashes($page['page_content']) . '</div>';
			$show = FALSE;
		}
	}
