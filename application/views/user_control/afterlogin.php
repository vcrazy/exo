          <div class="left">
                <h1>Вие сте успешно логнат</h1>
                 <p>Вашите сайтове :</p>
                 <ul>
               <?php
            $i=1;
            foreach($websites as $website)
            {
                echo '<li>'.$i.'. <b>'.$website['site_name'].'</b></li>';
                $i++;
            }
        ?>		

                 </ul> 
			<form action="/login/logout" method="post">
				Logout:	<input type="submit" name="Logout" value="Излез" class="bt_login"/>
			</form>
                <div class="clear"></div>
                <a href="/user_interface/manage">Контрол</a>
          </div>
		  



