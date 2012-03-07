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
                <div class="clear"></div>
          </div>

