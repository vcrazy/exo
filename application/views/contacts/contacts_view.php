
<form action="/contacts" id="contactform" method="post">
	Вашето име: <input type="text" name="name" value="<?php echo set_value('name'); ?>"/> <br/> <?php echo form_error('name'); ?><br />
	E-mail: <input type="text" name="email" value="<?php echo set_value('email'); ?>"/><br /> <?php echo form_error('email'); ?>
	Телефон: <input type="text" name="phone" /><br />
	Съобщение: <textarea name="message" ><?php echo set_value('message'); ?></textarea><?php echo form_error('message'); ?>
	<input type="submit" value="Изпращане" class="button" />
</form>
