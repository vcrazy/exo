<?php include ('registration_steps.php'); ?>
<form action="/register/step2" id="pagescont" method="post">
Въведи заглавие на страницата :<input type="text" name="title"/><br/> <?php echo form_error('title'); ?>
     <textarea name="ckeditor" id="ckeditor"></textarea>
     <input type="submit" value="Нова Страница" name="new" class="buttonR" />
     <input type="button" value="Приключих" id="toregister" class="buttonR" />
</form>

