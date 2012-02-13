
<form action="/contacts" id="contactform" method="post">
	Вашето име:  <br /><input type="text" name="name" value="<?php echo set_value('name'); ?>"/> <?php echo form_error('name'); ?><br />
	E-mail:  <br /><input type="text" name="email" value="<?php echo set_value('email'); ?>"/> <?php echo form_error('email'); ?> <br/>
	Телефон:  <br /><input type="text" name="phone" /><br />
	Съобщение:  <br /><textarea name="message" ><?php echo set_value('message'); ?></textarea><?php echo form_error('message'); ?>
	 <br/><input type="submit" value="Изпращане" class="button" />
</form>
