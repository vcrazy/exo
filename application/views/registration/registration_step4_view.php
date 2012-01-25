<?php include ('registration_steps.php'); ?>
<<<<<<< HEAD
<form action="/register/step4" id="signupform" method="post">
     Поща: <input type="text" name="email" /> <br/>
     Парола: <input type="password" id="password" name="password" />   <br/>
     Потвърди парола: <input type="password" name="conf_pass" /> <br/>
     Домейн: <input type="text" name="domain" /> <br/>
=======
<form action="/register/step4" method="post">
     Поща:<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" /><br/> <?php echo form_error('email'); ?>
     Парола: <input type="password" name="password" />   <br/> <?php echo form_error('password'); ?>
     Потвърди парола: <input type="password" name="conf_pass" /> <br/> <?php echo form_error('conf_pass'); ?>
     Домейн: <input type="text" name="domain" value="<?php echo set_value('domain'); ?>"/> <br/> <?php echo form_error('domain'); ?>
>>>>>>> 01c68152bb722e4a0372ee566c700530260a429b
     <input type="submit" value="Продължи" />
</form>



