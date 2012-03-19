     <div class="firstp" id="second-right"> 
      <?php if($checklogin): ?>      
         Влязохте успешно 
      <?php else: ?>
            <h1>Вход в системата</h1>
            <div id="loginprofile">
            <form  method="post" action="/login/log">
                <label class="grey" for="username">Имейл:&nbsp;</label>
                <input class="field" type="text" name="email" id="email" value="" size="23" /><br/>
                <label class="grey" for="password">Парола:</label>
                <input class="field" type="password" name="password" id="password" size="23" />

                <div class="clear"></div>
                <input type="submit" name="submit" value="Login" class="bt_login" />
            </form>
            </div> 
      <?php endif; ?>
    </div>
