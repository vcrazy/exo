<?php include ('registration_steps.php'); ?>
<form action="/register/step3" id="pagescont" method="post">
Въведи заглавие на страницата :<input type="text" name="title"/><br/>
     <textarea name="ckeditor" id="ckeditor"></textarea>
     <input type="submit" value="Нова Страница" name="new" />
     <input type="button" value="Приключих" id="toregister" />
</form>

