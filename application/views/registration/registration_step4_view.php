<?php include ('registration_steps.php'); ?>
<form action="/register/step4" id="signupform" method="post">
     Поща: <input type="text" name="email" /> <br/>
     Парола: <input type="password" id="password" name="password" />   <br/>
     Потвърди парола: <input type="password" name="conf_pass" /> <br/>
     Домейн: <input type="text" name="domain" /> <br/>
     <input type="submit" value="Продължи" />
</form>

