<?php include ('registration_steps.php'); ?>
<form action="/register/step3" id="signupform" method="post">
     Поща:<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" /><br/> <?php echo form_error('email'); ?>
     Парола: <input type="password" id="password" name="password" />   <br/> <?php echo form_error('password'); ?>
     Потвърди парола: <input type="password" name="conf_pass" /> <br/> <?php echo form_error('conf_pass'); ?>
     Домейн: <input type="text" name="domain" value="<?php echo set_value('domain'); ?>"/> <br/> <?php echo form_error('domain'); ?>
     <input type="submit"  value="Продължи" class="buttonR" />
</form>



