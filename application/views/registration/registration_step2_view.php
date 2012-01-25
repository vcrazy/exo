<?php include ('registration_steps.php'); ?>
<<<<<<< HEAD
<form action="/register/step2" id="pagescont" method="post">
     Въведи заглавие на страницата :<input type="text" name="title"/><br/>
     <textarea name="ckeditor" id="ckeditor" ></textarea>
=======
<form action="/register/step2" method="post">
     Въведи заглавие на страницата :<input type="text" name="title"/> <br/><?php echo form_error('title'); ?>
     <textarea name="ckeditor"/></textarea>
>>>>>>> 01c68152bb722e4a0372ee566c700530260a429b
     <input type="submit" value="Запази" />
</form>