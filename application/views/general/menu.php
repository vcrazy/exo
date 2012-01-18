<div id="header-left">
  <!-- Header - left -->
  <div id="header-right">
    <!-- header - right -->
    <div id="header">
      <!-- header -->
      <div id="header-content">
        <!-- header-content -->
        <h1 id="logo"><a href="exoindex3.html" rel="index" title="Web Design Company">Web Design Company</a> <span title="MASS MEDIA GROUP LTD"></span> </h1>
        <ul id="nav">
          <!-- Navigation Bar -->
          <li id="Link-Home"><a href="exoindex2.html">Na4alo<span class="wrap-bg"><span><!-- --></span></span></a></li>
          <li id="Link-Services"><a href="exoindex3.html">Vhod<span class="wrap-bg"><span><!-- --></span></span></a></li>
          <li id="Link-Portfolio"><a href="exoindex3.html">Syzdai dizain<span class="wrap-bg"><span><!-- --></span></span></a></li>
          
        </ul><div id="light" style="left: 10px; top: 0px; "></div>
	  </div>
      <!-- /header-content -->
    </div>
    <!-- /header -->
  </div>
  <!-- /header - right -->
</div>
<!-- /Header - left -->

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
