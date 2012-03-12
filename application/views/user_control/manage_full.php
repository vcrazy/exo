	<div class="container">
	    <ul class="navi">
	        <li><a href="#tab_content_1">Сайтове</a></li>
	        <li><a href="#tab_content_2">Последни събития</a></li>
	        <li><a href="#tab_content_3">Профил</a></li>
	        <li><a href="#tab_content_4">Нещо друго</a></li>
	    </ul>
	    <div class="contenttab">
	        <div id="tab_content_1" class="single_content">
	             <ul>
                        <?php
                    $i=1;
                    foreach($websites as $website)
                        { 
                            echo '<h2>'.$i.'. <b><a href="/edit/website/'.$website['site_name'].'">'.$website['site_name'].'</a></b></h2>';
                            $i++;   
                        }
                    ?>
                         </ul>
	        </div>
	        <div id="tab_content_2" class="single_content">
	            <h2>Последни събития</h2>
	        </div>
	        <div id="tab_content_3" class="single_content">
	            <h2>Профил</h2> <br /> <br />
				<?php include (APPPATH.'/views/site/ch_pass.php'); ?>
				
	        </div>
	        <div id="tab_content_4" class="single_content">
	            <h2>Нещо друго</h2>	            
	        </div>
	    </div>
	</div>















