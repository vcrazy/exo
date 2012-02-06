<div id="footer-wrapper">
  <!-- Footer-Wrapper -->
  <div id="footer-left">
    <div id="footer">
		<ul>
			<?php
				foreach($footer_links as  $footer_id => $footer)
				{
					echo '<li id="footer_' . $footer_id . '" class="button color">' .'<a href="' .$footer['footer_link']. 
							'">'. $footer['footer_text'] . '</a></li>';
				}
			?>
		</ul>
    </div>
    <!-- /footer -->
  </div>
  <!-- Footer-Left -->
</div>
<!-- /Footer-Wrapper -->
	</body>
</html>
